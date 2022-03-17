<?php
/**
 * Displays the content when the cover template is used.
 *
 
 */

?>

<?php 
	if( have_rows('home_tiles_row') ):?>
        <div class="container">
    <div class="row imagetiles">
	<?php while( have_rows('home_tiles_row') ) : the_row();

        // Get parent value.
		$tile_image = get_sub_field('tile_image');
		$tile_title = get_sub_field('tile_title');
		$tile_links = get_sub_field('tile_links');
		
		?>
        <div class="col-12 col-lg-4 col-md-6">
		<div class="imgrapper">
          <a href="<?php echo $tile_links['url'];?>"> <img src="<?php echo $tile_image;?>" class="img-responsive"></a>
		</div>
		<div class="contentwrapper">
		<h4><a href="<?php echo $tile_links['url'];?>"><?php echo $tile_title;?></a></h4>
		</div>
        </div>
		<?php endwhile;?>
        <?php 
	if( have_rows('home_general_tiles_row') ):?>
      
 
	<?php while( have_rows('home_general_tiles_row') ) : the_row();

        // Get parent value.
		$tile_image = get_sub_field('tile_image');
		$tile_title = get_sub_field('tile_title');
		$tile_links = get_sub_field('tile_links');
		
		?>
      <div class="col-12 col-lg-3 col-md-6">
		<div class="imgrapper">
          <a href="<?php echo $tile_links['url'];?>"> <img src="<?php echo $tile_image;?>" class="img-responsive"></a>
		</div>
		<div class="contentwrapper">
		<h4><a href="<?php echo $tile_links['url'];?>"><?php echo $tile_title;?></a></h4>
		</div>
        </div>
		<?php endwhile;?>
        

<?php endif;?>

    </div>
	<a  class="viewmorebtn">View The Product Ranges</a>
</div>
<?php endif;?>
<?php if( have_rows('tesmonial_row') ):?>
<section class="testimonial">
<div class="container">
<h2 class="text-center">Australian Made, For Excellence.</h2>
<div class="testimonial-slider">
<?php while( have_rows('tesmonial_row') ) : the_row();

        // Get parent value.
		$client_review = get_sub_field('client_review');
		$client_name = get_sub_field('client_name');
		$chose_imagevideo = get_sub_field('chose_imagevideo');
        $video_url = get_sub_field('video_url');
        $testimonial_image = get_sub_field('testimonial_image');
		
		?>
<div class="testimonial-slide-item">	
<div class="row">
 <div class="col-12 col-lg-5 col-md-12">
 <div class="slidecontent">
 <?php echo $client_review;?>
 <h4><?php echo $client_name;?></h4>
 </div>
</div>
 <div class="col-12 col-lg-7 col-md-12">
 <div class="slidemedia">
<?php if($chose_imagevideo=='vid'){?>
<iframe src="<?php echo $video_url;?>" allowfullscreen="1" width="100%" height="356"></iframe>
<?php } else {?>
<img src="<?php echo $testimonial_image;?>"  class="img-responsive">
<?php } ?>
  <a class="viewtestimonials" href="#">View testimonials</a>
 </div>
</div>
</div>
</div>
<?php endwhile;?>


</div>
<a href="#" class="viewmorebtn talktoteam">Talk to Our Team</a>
</div>
</section>
<?php endif;?>
	


