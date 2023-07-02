<?php

get_header(); ?>

<main class="main-content container mx-auto pt-8 md:pt-16 px-6">
	<header>
		<h1 class="font-bold text-3xl md:text-6xl leading-snug mb-8 md:mb-16 text-main"><?php echo get_the_title(); ?></hi>
	</header>

	<?php the_content(); ?>
</main>


<?php get_footer();