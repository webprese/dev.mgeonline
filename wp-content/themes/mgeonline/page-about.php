<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<div class="row">
	<div class="col-md-12 seminar-signup">
		<div class="container">
			<a href="" ><span>&#8592;</span> home</a>
			<div class="signup-section col-sm-12">
				<div class="col-xs-12 col-sm-6">
					<h3> <?php echo the_field('about_description_header'); ?></h3>
					<?php echo the_field('about_description'); ?>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row who-we-are">
	<div class="container seminar-container">
		<div id="content" class="clearfix row">
			<div id="main" class="col-md-12 clearfix" role="main">		
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 col-xs-12">
							<h3><?php echo the_field('content_section_header_1'); ?></h3>
							<div class="blue-line"></div>
							<?php echo the_field('content_section_1'); ?>
						</div>		
						<div class="col-md-6 col-xs-12 about-col-right">
						<div class="embed-container">
							<?php echo the_field('video_embed_1'); ?>
						</div>
							<div class="col-md-8 col-xs-12"><p><em><?php echo the_field('video_description_1'); ?></em></p></div>
							<div class="col-md-4 col-xs-12"><a href="#"><?php echo the_field('video_url_1'); ?>Watch Video</a></div>
							<div class="about-image">
								<img src="<?php the_field('video_section_image_1'); ?>"></img>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row grey-bg">
	<div class="container seminar-container">
		<div id="content" class="clearfix row">
			<div id="main" class="col-md-12 clearfix" role="main">
					<div class="col-md-12">
						<div class="col-md-6 col-xs-12">
							<h3><?php echo the_field('content_section_header_2'); ?></h3>
							<div class="blue-line"></div>
							<?php echo the_field('content_section_2'); ?>
						</div>		
						<div class="col-md-6 col-xs-12 about-col-right-2">
						<div class="embed-container">
							<?php echo the_field('video_embed_2'); ?>
						</div>
							<p><em><?php echo the_field('video_description_2'); ?></em></p>
							<div class="col-xs-6">
								<img src="<?php echo the_field('video_section_image_2'); ?>" style="max-width:100%; padding-right: 10px;" ></img>
							</div>
							<div class="col-xs-6 about-image">
								<img src="<?php echo the_field('video_section_image_3'); ?>" style="max-width:100%; padding-right: 10px;" ></img>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--	<div class="row">
				<div class="col-md-12">
						<h3><?php echo the_field('content_header_3'); ?></h3>
						<div class="blue-line"></div>
							<?php if( have_rows('services') ): ?>
							<?php while( have_rows('services') ): the_row(); ?>
						<div class="col-md-6 col-xs-12">
								<div class="col-md-3">
								<?php $image = get_sub_field('image');
									if( !empty($image) ): ?>
									<img src="<?php the_sub_field('image'); ?>" style="max-width:100%;"></img>
								<?php endif; ?>
								</div>
								<div class="col-md-9">
								<?php the_sub_field('description'); ?>	
								</div>
						</div>	
							<?php endwhile; ?>
							<?php endif; ?>
				</div>
			</div> -->
<div class="row">
	<div class="container seminar-container">
		<div id="content" class="clearfix row">
			<div id="main" class="col-md-12 clearfix" role="main">
				<div class="col-md-12 owners">
					<h3><?php echo the_field('meet_the_owners_header'); ?></h3>
					<div class="blue-line"></div>
					<?php if( have_rows('owners') ): ?>
					<?php while( have_rows('owners') ): the_row(); ?>
					<div class="col-xs-12 col-md-6 ">
						<div class="col-md-4 ">
							<div class="image"><img src="<?php echo get_sub_field('owner_photo'); ?>" style="max-width:100%"/></div>
						</div>
						<div class="col-md-8">
							<h3><?php the_sub_field('name'); ?></h3>
								<div class="post-title"><?php the_sub_field('post'); ?></div>
								<div class="owner-excerpt"><?php the_sub_field('excerpt'); ?></div>
								<div class="home-links">
								<a href="<?php the_sub_field('read_more_link'); ?>" class="more">Read More &#8594;</a>
								</div>	
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div> 
	</div>
</div>

<?php get_footer(); ?>