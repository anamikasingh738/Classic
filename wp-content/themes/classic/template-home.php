<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 */

get_header();
?>

<main id="site-content">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-home' );
		}
	}

	?>

</main><!-- #site-content -->



<?php get_footer(); ?>

