<?php
    $opinions = get_field('opinions') ?: [];

    if (empty($opinions)) {
        $args = [
            'post_type' => 'opinions',
            'post_status' => 'publish',
            'posts_per_page' => 10
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            foreach ($query->posts as $post) {
                $opinions[] = $post->ID;
            }
        }
    }
?>

<div class="grid grid-cols-opinions gap-3">
    <?php 
        foreach  ($opinions as $opinion) {
            get_template_part('src/blocks/testimonials/parts/plate', '', $opinion);
        }
    ?>
</div>