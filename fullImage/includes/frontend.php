<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

    $image = get_post($settings->photo_field);
    $image_caption = $image->post_excerpt;

?>

<div class="tm_bb_fullImage">
    <?php if ($settings->linkImage == 'true' && $settings->linkurl != '') { echo '<a href="' . $settings->linkurl .'" target="' . $settings->linktarget .'">'; } ?>
    <?php echo wp_get_attachment_image( $settings->photo_field, $size = 'full', $icon = false, $attr = '' ); ?>
    <?php if ($settings->linkImage == 'true') { echo '</a>'; } ?>
</div>

<?php if ($settings->showCaption == 'true') { ?>
    <div class="tm_bb_fullImage_caption"><?php echo $image_caption; ?></div>
<?php } ?>


