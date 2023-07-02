<?php 
    $animation = get_field('animation') ?: '';
    $layout = get_field('layout') ?: '';
?>
<section class="block-right-left mb-8 md:mb-11 animation <?php echo $animation; ?>">
    <?php
        $data = [
            'header' => get_field('title') ?: __('Block Right-Left'),
            'class' => 'text-main'
        ];

        get_template_part('template-parts/block-header', '', $data);
    ?>

    <div class="flex flex-wrap  gap-10 md:gap-14 lg:gap-28 <?php echo $layout; ?>">
        <?php        
            get_template_part('src/blocks/right-left/parts/column-image');

            get_template_part('src/blocks/right-left/parts/column-content');
        ?>
    </div>
</section>