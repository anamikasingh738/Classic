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
<script>
  $(".testimonial-slider").slick({
        dots: false,
		arrows: true,
		 prevArrow: "<i class='left round'><img src='<?php echo get_template_directory_uri();?>/images/right.svg'></i>",
         nextArrow: "<i class='right round'><img src='<?php echo get_template_directory_uri();?>/images/left.svg'></i>",
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
		 variableWidth: false,
          centerMode: false,
		
		
      });
</script>
