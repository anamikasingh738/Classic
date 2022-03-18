<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin footer -->
</div>





</div>

<?php wp_footer(); ?>
<script>
  $(".testimonial-slider").slick({
        dots: false,
		arrows: true,
		 prevArrow: "<i class='left round'><img src='<?php echo get_template_directory_uri();?>/images/right.svg'></i>",
         nextArrow: "<i class='right round'><img src='<?php echo get_template_directory_uri();?>/images/left.svg'></i>",
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		 variableWidth: false,
          centerMode: false,
		
		
      });
</script>
</body>
</html>