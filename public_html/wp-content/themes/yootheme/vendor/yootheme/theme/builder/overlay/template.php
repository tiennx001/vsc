<?php

$id    = $element['id'];
$class = $element['class'];
$attrs = $element['attrs'];
$attrs_container = [];
$attrs_overlay = [];
$attrs_center = [];
$attrs_cover = [];
$attrs_image = [];
$attrs_hover_image = [];
$attrs_link = [];
$placeholder = '';
$attrs_placeholder = [];

// Container
$attrs_container['class'][] = 'el-container';

if ($element['image_box_shadow_bottom']) {
    $attrs_container['class'][] = 'uk-box-shadow-bottom';
} else {
    $attrs_container['class'][] = 'uk-inline-clip';
}

// Mode
if ($element['overlay_mode'] == 'cover' && $element['overlay_style']) {
    $attrs_overlay['class'][] = "el-overlay uk-position-cover";
    $attrs_overlay['class'][] = $element['overlay_margin'] ? "uk-position-{$element['overlay_margin']}" : '';
}

// Style
switch ($element['overlay_style']) {
    case '':
        $attrs_content['class'][] = 'uk-panel';
        break;
    default:
        $attrs_overlay['class'][] = "uk-{$element['overlay_style']}";
        $attrs_content['class'][] = 'uk-overlay';
}

// Padding
switch ($element['overlay_padding']) {
    case '':
        $attrs_content['class'][] = !$element['overlay_style'] ? 'uk-padding' : '';
        break;
    case 'none':
        $attrs_content['class'][] = $element['overlay_style'] ? 'uk-padding-remove' : '';
        break;
    default:
        $attrs_content['class'][] = "uk-padding-{$element['overlay_padding']}";
}

// Position
if (in_array($element['overlay_position'], ['center', 'top-center', 'bottom-center', 'center-left', 'center-right'])) {
    $attrs_center['class'][] = "uk-position-{$element['overlay_position']}";
    $attrs_center['class'][] = $element['overlay_margin'] && $element['overlay_style'] ? "uk-position-{$element['overlay_margin']}" : '';
} else {
    $attrs_content['class'][] = "uk-position-{$element['overlay_position']}";
    $attrs_content['class'][] = $element['overlay_margin'] && $element['overlay_style'] ? "uk-position-{$element['overlay_margin']}" : '';
}

// Width
if (!in_array($element['overlay_position'], ['top', 'bottom'])) {
    $attrs_content['class'][] = $element['overlay_maxwidth'] ? "uk-width-{$element['overlay_maxwidth']}" : '';
}

// Transition
if ($element['overlay_hover'] || $element['image_transition'] || $element['hover_image']) {
    $attrs_container['class'][] = 'uk-transition-toggle';
}

if ($element['overlay_hover']) {

    if ($element['overlay_transition_background'] && ($element['overlay_mode'] == 'cover' && $element['overlay_style'])) {
        $attrs_overlay['class'][] = "uk-transition-{$element['overlay_transition']}";
    } else {
        $attrs_overlay['class'][] = "uk-transition-{$element['overlay_transition']}";
        $attrs_content['class'][] = "uk-transition-{$element['overlay_transition']}";
    }

}

// Text color
if (!$element['overlay_style'] || ($element['overlay_mode'] == 'cover' && $element['overlay_style'])) {
    $attrs_container['class'][] = $element['text_color'] ? "uk-{$element['text_color']}" : '';
}

// Inverse text color on hover
if ((!$element['overlay_style'] && $element['hover_image']) || ($element['overlay_mode'] == 'cover' && $element['overlay_style'] && $element['overlay_transition_background'])) {
    $attrs_container['uk-toggle'] = $element['text_color_hover'] ? "cls: uk-light uk-dark; mode: hover" : false;
}

// Image
if ($element['image'] || $element['hover_image']) {

    // Transition
    if ($element['hover_image'] && !$element['image']) {
        $element['image'] = $element['hover_image'];
        $element['hover_image'] = '';
        $attrs_image['class'][] = $element['image_transition'] ? "uk-transition-{$element['image_transition']}" : 'uk-transition-fade';
    } elseif ($element['hover_image'])
        $attrs_hover_image['class'][] = $element['image_transition'] ? "uk-transition-{$element['image_transition']}" : 'uk-transition-fade';
    else {
        $attrs_image['class'][] = $element['image_transition'] ? "uk-transition-{$element['image_transition']} uk-transition-opaque" : '';
    }

    $attrs_placeholder['alt'] = $element['image_alt'];
    $attrs_placeholder['class'][] = 'uk-invisible';

    // Image Placeholder
    if ($this->isImage($element['image']) == 'svg') {
        $placeholder = $this->image($element['image'], array_merge($attrs_placeholder, ['width' => $element['image_width'], 'height' => $element['image_height']]));
    } elseif ($element['image_width'] || $element['image_height']) {
        $placeholder = $this->image([$element['image'], 'thumbnail' => [$element['image_width'], $element['image_height']]], $attrs_placeholder);
    } else {
        $placeholder = $this->image($element['image'], $attrs_placeholder);
    }

    // Image
    $attrs_image['class'][] = 'el-image uk-inline uk-background-norepeat uk-background-cover';
    $attrs_image['style'][] = $element['image_min_height'] ? "min-height: {$element['image_min_height']}px;" : '';

    if ($element['image_width'] || $element['image_height']) {
        $element['image'] = "{$element['image']}#thumbnail={$element['image_width']},{$element['image_height']}";
    }

    $attrs_image['style'][] = "background-image: url('{$app['image']->getUrl($element['image'])}');";
    $element['image'] = "<div{$this->attrs($attrs_image)}>{$placeholder}</div>";

    // Hover Image
    if ($element['hover_image']) {

        $attrs_hover_image['class'][] = 'el-hover-image uk-position-cover uk-background-norepeat uk-background-cover';

        if ($element['image_width'] || $element['image_height']) {
            $element['hover_image'] = "{$element['hover_image']}#thumbnail={$element['image_width']},{$element['image_height']}";
        }

        $attrs_hover_image['style'][] = "background-image: url('{$app['image']->getUrl($element['hover_image'])}');";
        $element['image'] .= "<div{$this->attrs($attrs_hover_image)}></div>";

    }

    // Box Shadow
    $attrs_container['class'][] = $element['image_box_shadow'] ? "uk-box-shadow-{$element['image_box_shadow']}" : '';
    $attrs_container['class'][] = $element['image_hover_box_shadow'] ? "uk-box-shadow-hover-{$element['image_hover_box_shadow']}" : '';

}

// Link
$attrs_link['href'] = $element['link'];
$attrs_link['target'] = $element['link_target'] ? '_blank' : '';
$attrs_link['uk-scroll'] = strpos($element['link'], '#') === 0;
$attrs_link['class'][] = 'uk-position-cover';

?>

<div<?= $this->attrs(compact('id', 'class'), $attrs) ?>>
    <div<?= $this->attrs($attrs_container) ?>>

        <?php if ($element['image_box_shadow_bottom']) : ?>
        <div class="uk-inline-clip">
        <?php endif ?>

        <?= $element['image'] ?>

        <?php if ($element['overlay_mode'] == 'cover' && $element['overlay_style']) : ?>
        <div<?= $this->attrs($attrs_overlay) ?>></div>
        <?php endif ?>

        <?php if ($element['title'] || $element['meta'] || $element['content']) : ?>

            <?php if ($attrs_center) : ?>
            <div<?= $this->attrs($attrs_center) ?>>
            <?php endif ?>

                <div<?= $this->attrs($attrs_content, !($element['overlay_mode'] == 'cover' && $element['overlay_style']) ? $attrs_overlay : []) ?>>
                    <?= $this->render('@builder/overlay/template-content') ?>
                </div>

            <?php if ($attrs_center) : ?>
            </div>
            <?php endif ?>

        <?php endif ?>

        <?php if ($element['link']) : ?>
        <a<?= $this->attrs($attrs_link) ?>></a>
        <?php endif ?>

        <?php if ($element['image_box_shadow_bottom']) : ?>
        </div>
        <?php endif ?>

    </div>
</div>
