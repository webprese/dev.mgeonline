<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-12 seminar-signup">
		<div class="container">
			<a href="" ><span>&#8592;</span> home</a>
			<div class="signup-section col-sm-12">
				<div class="col-xs-12 col-md-8">
					<h3>Services</h3>
					<?php echo the_field('signup_description'); ?>	
				</div>
				<div class="col-xs-9 col-md-4 seminar-button col-centered-mob pull-right">
					<a href="<?php echo the_field('signup_link'); ?>" target="_blank">SIGNUP NOW</a>
				</div>	
				<div class="col-xs-9 col-md-4 speakers-button col-centered-mob pull-right">
					<a href="#">VIEW SERVICES</a>	
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="container seminar-container">

<div id="" class="clearfix row">
	<div id="main" class="col-md-12 clearfix" role="main">
        <div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-xs-12">
					<h3><?php echo the_field('content_header_1'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('content_text_1'); ?>
				</div>		
				<div class="col-md-6 col-xs-12 about-col-right grey-bg">
					<div class="embed-container">
						<?php echo the_field('video_embed_1'); ?>
					</div>
					<div class="col-md-12 col-xs-12 services-description"><?php echo the_field('video_description_1'); ?></div>
					<div class=""><a href="<?php echo the_field('video_url_1'); ?>" >FIND OUT MORE</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<div class="row grey-bg">
	<div class="container seminar-container">
		<div id="" class="clearfix row">
			<div id="main" class="col-md-12 clearfix" role="main">
					<div class="col-md-12">
						<div class="col-md-6 col-xs-12">
							<h3>Full Service List</h3>
							<!-- Start -->
							<div class="container">
								<div class="row">
									<div class="col-md-12 bhoechie-tab-container">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 bhoechie-tab-menu">
										  <div class="list-group">
											<a href="#" class="list-group-item active">
											  <?php  the_field('services_title'); ?>
											</a>
											<?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
											<a href="#" class="list-group-item">
											  <?php  the_sub_field('services_title'); ?>
											</a>
											<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										  </div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 bhoechie-tab">
											<div class="bhoechie-tab-content active">
												  <h3><?php echo  the_field('services_title'); ?></h3>
												  <?php echo  the_field('services_description'); ?>
											</div>

											<?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
												<div class="bhoechie-tab-content">
													  <h3><?php  the_sub_field('services_title'); ?></h3>
													  <?php  the_sub_field('services_description'); ?>
												</div>
											<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										</div>
									</div>
							  </div>
							</div>							<!-- finish -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>
