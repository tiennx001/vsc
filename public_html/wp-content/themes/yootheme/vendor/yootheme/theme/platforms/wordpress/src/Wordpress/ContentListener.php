<?php

namespace YOOtheme\Theme\Wordpress;

use YOOtheme\EventSubscriber;
use YOOtheme\Theme\Builder;

class ContentListener extends EventSubscriber
{
    const PATTERN = '/<!--\s?(\{(?:.*?)\})\s?-->/';

    public $inject = [
        'admin' => 'app.admin',
        'routes' => 'app.routes',
        'customizer' => 'theme.customizer',
    ];

    public function onInit($theme)
    {
        if ($this->admin) {
            $this->routes->post('/page', [$this, 'savePage']);
        }
    }

    public function onSite($theme)
    {
        add_action('wp', function () {

            if (is_page()) {
                $this->app->trigger('content.prepare', [get_queried_object()]);
            }

        });
    }

    public function onContent($obj)
    {
        $obj->content = !post_password_required($obj) && strpos($obj->post_content, '<!--') !== false && preg_match(self::PATTERN, $obj->post_content, $matches) ? json_decode($matches[1], true) : null;

        if (!$this->customizer->isActive()) {
            return;
        }

        if ($page = get_theme_mod('page')) {
            $obj->content = $page['content'];
        }

        if ($obj->content) {
            $obj->content = Builder::encode($obj->content, false);
        }

        $data = [
            'id' => $obj->ID,
            'title' => $obj->post_title,
            'content' => $obj->content,
            'modified' => !empty($page),
        ];

        $this->customizer->addData('page', $data);
    }

    public function savePage($page)
    {
        if (!$page or !$page = base64_decode($page) or !$page = json_decode($page, true)) {
            $this->app->abort(500, 'Something went wrong.');
        }

        if (!current_user_can('edit_post', $page['id'])) {
            $this->app->abort(403, 'Insufficient User Rights.');
        }

        $updated = wp_update_post([
            'ID' => $page['id'],
            'post_content' => wp_slash(Builder::content($page['content']).'<!-- '.Builder::encode($page['content']).' -->'),
        ], true);

        if (is_wp_error($updated)) {
            $this->app->abort(500, 'Something went wrong.');
        }

        return 'success';
    }

    public static function getSubscribedEvents()
    {
        return [
            'theme.init' => 'onInit',
            'theme.site' => 'onSite',
            'content.prepare' => ['onContent', 10]
        ];
    }
}
