<?php get_header(); ?>
   <div class="row">
	<div class="col-md-12 seminar-signup">
		<div class="container">
			<a href="" ><span>&#8592;</span> home</a>
			<div class="signup-section col-sm-12">
				<div class="col-xs-12 col-md-8">
					<h3> <?php echo the_field('signup_header', 18); ?></h3>
					<?php echo the_field('signup_description', 18); ?>	
				</div>
				<div class="col-xs-12 col-md-4 seminar-button col-centered-mob">
					<!--<a href="<?php echo the_field('signup_link'); ?>" target="_blank">SIGNUP NOW</a>-->
				</div>	
				<div class="col-xs-12 col-md-4 speakers-button col-centered-mob">
					<a href="#">KEY SPEAKERS</a>	
				</div>
			</div>
		</div>
	</div>
</div>
      <div class="container">

  			<div id="" class="row clearfix">

					<div id="main" class="col-md-12 clearfix" role="main">
<?php query_posts($query_string."&order=ASC"); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article class="blog-col-feed" id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
							<section class="entry-content clearfix">
								<div class="col-md-2 featured-thumbnail-blog">
									<?php if ( has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('medium'); ?>
									<?php else : ?>
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/mge-default.png" style="max-width:100%;">
									<?php endif; ?>
								</div>
								<div class="col-md-8 media-excerpt">
									<h2>
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php the_title(); ?>
										</a>
									</h2>
									<?php the_field('custom_excerpt'); ?>
									<p><strong>Tuition: <?php echo the_field('tuition'); ?> | CE Credits: <?php echo the_field('ce_credits'); ?></strong></p>
									<div class="click-for-info">
										<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											CLICK HERE FOR INFORMATION AND REGISTRATION
										</a>
									</div>
									<div class="booking-info">
										<?php the_field('booking_info'); ?>
									</div>
								</div>
							</section> <?php // end article section ?>
						</article> <?php // end article ?>

						<?php endwhile; ?>

								<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
										<?php bones_page_navi(); ?>
								<?php } else { ?>
										<nav class="wp-prev-next">
												<ul class="clearfix">
													<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
													<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
												</ul>
										</nav>
								<?php } ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the custom posty type archive template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>
					</div> <?php // end #main ?>	
  			</div> <?php // end #content ?>
		</div> <?php // end ./container ?> 
	<!--	
	<div class="row grey-bg">
		<div class="container">
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
			</div>
		</div>
	</div> -->
<?php get_footer(); ?>
