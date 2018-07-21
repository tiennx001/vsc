<?php

$id    = $element['id'];
$class = $element['class'];
$attrs = $element['attrs'];

// Video
$attrs_video['width'] = $element['video_width'];
$attrs_video['height'] = $element['video_height'];
$attrs_video['class'][] = $element['video_box_shadow'] ? "uk-box-shadow-{$element['video_box_shadow']}" : '';

if ($iframe = $this->iframeVideo($element['video'], $element['video_params'])) {

    $attrs_video['src'] = $iframe;
    $attrs_video['frameborder'] = 0;
    $attrs_video['allowfullscreen'] = true;
    $attrs_video['uk-responsive'] = true;

} else {

    $attrs_video['src'] = $element['video'];
    $attrs_video['controls'] = $element['video_controls'];
    $attrs_video['autoplay'] = $element['video_autoplay'];
    $attrs_video['loop'] = $element['video_loop'];
    $attrs_video['muted'] = $element['video_muted'];
    $attrs_video['playsinline'] = $element['video_playsinline'];
    $attrs_video['poster'] = $element['video_poster'];

}

?>

<div<?= $this->attrs(compact('id', 'class'), $attrs) ?>>

    <?php if ($element['video_box_shadow_bottom']): ?>
    <div class="uk-box-shadow-bottom">
    <?php endif ?>

    <?php if ($iframe) : ?>
        <iframe<?= $this->attrs($attrs_video) ?>></iframe>
    <?php else : ?>
        <video<?= $this->attrs($attrs_video) ?>></video>
    <?php endif ?>

    <?php if ($element['video_box_shadow_bottom']): ?>
    </div>
    <?php endif ?>

</div>
