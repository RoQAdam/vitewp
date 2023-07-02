<section class="block-testimonials mb-8 md:mb-11">
    <?php
        $data = [
            'header' => get_field('title') ?: __('Opinions'),
            'class' => 'text-main text-center'
        ];
        $layout = get_field('layout') ?: 'grid';

        get_template_part('template-parts/block-header', '', $data);

        get_template_part('src/blocks/testimonials/parts/' . $layout);
    ?>
</section>
<?php