<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header('home'); ?>
	<div class="container home-container">
		<div class="row home-section-1">
			<div class="col-md-12">
				<div class="col-md-6">
					<h3><?php echo the_field('home_content_header_1'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('home_content_text_1'); ?>
					<div class="home-links">
						 <a href="<?php echo the_field('home_content_link_1_register'); ?>" class="register">Register Now</a>
						 <a href="<?php echo the_field('home_content_link_1_more'); ?>" class="more">Find Out More &#8594;</a>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<img src="<?php echo the_field('home_content_image_1'); ?>"></img>
				</div>
			</div>
		</div>
		<div class="row home-section-2 ">
			<div class="col-md-12">
				<div class="col-md-6">
					<img src="<?php echo the_field('home_content_image_2'); ?>"></img>
				</div>
				<div class="col-md-6">
					<h3><?php echo the_field('home_content_header_2'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('home_content_text_2'); ?>
					<div class="home-links">
						 <a href="<?php echo the_field('home_content_link_2_register'); ?>" class="register">Register Now</a>
						 <a href="<?php echo the_field('home_content_link_2_more'); ?>" class="more">Find Out More &#8594;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
			<div class="home-section-slider">
			<?php echo do_shortcode('[rev_slider alias="home2"]') ?>
			</div>
	<div class="container home-container">
		<div class="row">
			<div class="home-section-3 col-md-12">
				<div class="col-xs-12 col-md-12 col-lg-8">
					<h3><?php echo the_field('home_content_header_3'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('home_content_text_3'); ?>
					<div class="home-links pull-right">
					 	<a href="<?php echo the_field('home_content_link_3_more'); ?>" class="more">Find Out More &#8594;</a>
					</div>	
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
