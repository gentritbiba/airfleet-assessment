<?php

/**
 * custom-row Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'custom-row-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'custom-row';
// Load values and assign defaults.
$title = get_field('title') ?: '';
$description = get_field('description') ?: '';
$image = get_field('image') ?: '';
$row_order = get_field('row_order') ?: 'text-left';
$button = get_field('button');
$background = get_field('background');
$text_color = get_field('text_color');


?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
    <div class="row c-row ">
        <div class="col-lg-6 <?php if($row_order == 'text-right'){echo "order-lg-1";}?>">
            <h2 class="mb-4"><?php echo $title; ?></h2>
            <?php echo $description?>
            <a class="btn c-btn my-4" style="background:<?php echo $button['button_color']?>; color:<?php echo $button['button_text_color']?>" href="<?php echo $button['button_link']?>">
                <?php echo $button['button_text']; ?>
            </a>
        </div>
        <div class="col-lg-6 <?php if($row_order == 'text-right'){echo "order-lg-0";}?>">
            <img class="hover-img" src="<?php echo $image ?>" />
        </div>
    </div>
    </div>
    <style type="text/css">
        #<?php echo $id; ?> {
            width: 100%;
            --c-row-text-color: <?php echo $text_color ?>;
            --c-row-background: <?php echo $background ?>;
            max-width: 100%;
        }
            .c-row{
        }
    </style>
</div>