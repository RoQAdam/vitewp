<?php
    $content = get_field('content') ?: '';
    $font = get_field('font_family') ? 'font-' . get_field('font_family') : '';
?>

<article class="basis-full grow shrink basis-min text-lg <?php echo $font; ?>">
    <?php echo $content; ?>
</article>