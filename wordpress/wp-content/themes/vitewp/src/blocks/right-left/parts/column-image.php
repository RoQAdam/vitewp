<?php 
    $imageId = get_field('image') ?: '';
    $image = wp_get_attachment_image($imageId, 'large') ?: '';

    if (! empty($image)):
?>
<figure class="basis-full md:basis6/12 lg:basis-4/12">
    <?php echo $image; ?>
</figure>
<?php endif;