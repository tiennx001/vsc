<?php

$config = $theme->get('logo', []);
$attrs_link = [];
$attrs_image = [];

// Logo Text
$logo = $config['text'];

// Link
$attrs_link['href'] = $theme->get('site_url');
$attrs_link['class'][] = isset($class) ? $class : '';
$attrs_link['class'][] = 'uk-logo';

// Image
if ($config['image']) {

    $attrs_image['class'][] = isset($img) ? $img : '';
    $attrs_image['alt'] = $config['text'];

    $ext = $this->isImage($config['image']);

    if ($ext == 'gif') {
        $attrs_image['uk-gif'] = true;
    }

    if ($ext == 'svg') {
        $logo = $this->image($config['image'], array_merge($attrs_image, ['width' => $config['image_width'], 'height' => $config['image_height']]));
    } elseif ($config['image_width'] || $config['image_height']) {
        $logo = $this->image([$config['image'], 'thumbnail' => [$config['image_width'], $config['image_height']], 'sizes' => '80%,200%'], $attrs_image);
    } else {
        $logo = $this->image($config['image'], $attrs_image);
    }

    // Inverse
    if ($config['image_inverse']) {

        $attrs_image['class'][] = 'uk-logo-inverse';

        if ($this->isImage($config['image_inverse']) == 'svg') {
            $logo .= $this->image($config['image_inverse'], array_merge($attrs_image, ['width' => $config['image_width'], 'height' => $config['image_height']]));
        } elseif ($config['image_width'] || $config['image_height']) {
            $logo .= $this->image([$config['image_inverse'], 'thumbnail' => [$config['image_width'], $config['image_height']], 'sizes' => '80%,200%'], $attrs_image);
        } else {
            $logo .= $this->image($config['image_inverse'], $attrs_image);
        }

    }
}
?>

<a<?= $this->attrs($attrs_link) ?>>
    <?= $logo ?>
</a>
