<?php
/*
Template Name: Workshop
*/
?>

<?php get_header(); ?>
<div class="row">
	<div class="col-md-12 seminar-signup">
		<div class="container">
			<a href="" ><span>&#8592;</span> home</a>
			<div class="signup-section col-sm-12">
				<div class="col-xs-12 col-md-8">
					<h3> <?php echo the_field('signup_header'); ?></h3>
					<?php echo the_field('signup_description'); ?>	
				</div>
				<div class="col-xs-9 col-md-4 seminar-button col-centered-mob pull-right">
					<a href="<?php echo the_field('signup_link'); ?>" target="_blank">SIGNUP NOW</a>
				</div>	
				<div class="col-xs-9 col-md-4 speakers-button col-centered-mob pull-right">
					<a href="#">KEY SPEAKERS</a>	
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="container seminar-container">

<div id="content" class="clearfix row">
	<div id="main" class="col-md-12 clearfix" role="main">
		
        <div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-xs-12">
					<h3><?php echo the_field('content_header_1'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('content_text_1'); ?>
				</div>		
				<div class="col-md-6 col-xs-12">
					<h3><?php echo the_field('content_header_2'); ?></h3>
					<div class="blue-line"></div>
					<?php echo the_field('content_text_2'); ?>
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
		</div>
		<div class="row">
			<div class="col-md-12 speakers">
				<h3><?php echo the_field('content_header_4'); ?></h3>
				<div class="blue-line"></div>
				<?php if( have_rows('speakers') ): ?>
				<?php while( have_rows('speakers') ): the_row(); ?>
				<div class="col-xs-12 col-md-6 ">
					<div class="col-md-4">
						<img src="<?php echo get_sub_field('speaker_image'); ?>" style="max-width:100%"/>
					</div>
					<div class="col-md-8">
						<h3><?php the_sub_field('speaker_name'); ?></h3>
							<?php the_sub_field('speaker_excerpt'); ?>
							<div class="home-links">
							<a href="<?php the_sub_field('name_link'); ?>" class="more">Find Out More &#8594;</a>
							</div>	
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div> -->
		</div>
	</div>
	</div>
	</div>
</div>

<?php get_footer(); ?>
