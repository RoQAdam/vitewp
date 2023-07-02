<?php
    $author = get_field('author', $args);
    $rating = get_field('rating', $args) ? 'star' . get_field('rating', $args) : ''; 
    $name = get_field('name', $author[0]);
    $position = get_field('position', $author[0]);
    $avatar = get_the_post_thumbnail($author[0], 'medium');
    $letter = substr($name, 0, 1);
    $thumbnail = $avatar ?: $letter;
?>

<div class="testimonials-plate flex flex-col shadow-lg rounded-lg bg-main text-white p-6 max-w-fit mx-auto lg:mx-0">
    <div class="avatar flex items-center justify-center w-60 h-60 bg-slate-300 text-7xl rounded-lg overflow-hidden">
        <?php echo $thumbnail ?>
    </div>

    <div class="details">
        <h4 class="name font-bold text-2lg mt-3 mb-1">
            <?php echo $name; ?>
        </h4>
        
        <p class="position text-lg">
            <?php echo $position; ?>
        </p>
        
        <div class="rating mt-5 h-[40px] bg-star bg-starbg <?php echo $rating ?>"></div>
    </div>
</div>