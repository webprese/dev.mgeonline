<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'library/contact', 'map' ); ?>

<div class="container">
	<div id="content" class="clearfix row">
		<div id="main" class="col-md-12 clearfix" role="main">
			<div class="col-md-6" id="">

			<div class="home-link"><a href="" ><span>&#8592;</span> home</a></div>
			<h2>Contact</h2>
			<div class="contact-img  col-md-5 col-xs-12">
				<img src="<?php echo the_field('image') ?>" style="max-width:100%; width:100%;" ></img>
			</div>
			<div class="col-md-7">
				<h3><?php echo the_field('header') ?></h3>
				<div class="clearfix"></div>
				<div class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/pin.png" ></img></div><?php echo the_field('address') ?>
				<div class="clearfix"></div>
				<div class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/phone.png" ></img></div><?php echo the_field('phone') ?>
				<div class="clearfix"></div>
				<div class="icons"><img src="" alt="" ></img></div><?php echo the_field('phone_2') ?>
				<div class="clearfix"></div>
				<div class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/fax.png" ></img></div><p><?php echo the_field('fax') ?></p>
				<div class="clearfix"></div>
				<div class="icons"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/email.png" ></img></div><p><a href="mailto:<?php echo the_field('email') ?>?Subject=Website%20Inquiry" target="_top"><?php echo the_field('email') ?></a></p>
				<div class="clearfix"></div>
			</div>
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			</div>
			<div class="col-md-6 contact-map">
			<?php 

			$location = get_field('google_map');

			if( !empty($location) ):
			?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
