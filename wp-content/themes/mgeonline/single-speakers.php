<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
      <div class="container">

  			<div id="content" class="clearfix row">

					<div id="main" class="col-md-9 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<div class="free-seminar-content">
								<h2><?php the_title(); ?></h2>
							
										<section class="featured-content featured-img">
											<?php if ( has_post_thumbnail() ) { ?>
													<?php the_post_thumbnail( 'large' ); ?>
											<?php } // end if ?>
										
								</section>
								<div class="clearfix"></div>

									<?php the_content(); ?>
								</section> <?php // end article section ?>
								<p><strong>Tuition: <?php echo the_field('tuition'); ?></strong><br>
								<strong>CE Credits: <?php echo the_field('ce_credits'); ?></strong></p>
								<em><?php echo the_field('mge_notice'); ?></em>
								<h3>Seminar Agenda</h3>
								<?php if( have_rows('schedule') ): while ( have_rows('schedule') ) : the_row(); ?>

									   <div class="schedule-block-title"><em>
										   <?php echo  the_sub_field('block_title'); ?>
										   <?php echo  the_sub_field('start'); ?> - 
										   <?php echo  the_sub_field('finish'); ?></em>
									   </div>
									   <?php echo  the_sub_field('content'); ?>

								<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
							</div>
						</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div> <?php // end #main ?>

					<div id="sidebar" class="col-md-3 free-seminar-content-sidebar">
						<div class="register-button">
							<a href="#">register for this seminar!</a>
						</div>
						<h3>Related Seminars</h3>
						<div class="col-md-12">
							<?php $second_query = new WP_Query( array(
							  'post_type' => 'seminars',
							  'posts_per_page' => 10,
							  'post__not_in'=>array($post->ID)
						   ) ); ?>
							<?php   if($second_query->have_posts()) {
								 while ($second_query->have_posts() ) : $second_query->the_post(); ?>
								<div class="single_related ">
									<div class="featured-thumbnail-blog">
										<?php if ( has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('medium'); ?> 
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/mge-default.png" style="max-width:100%;">
										<?php endif; ?>
									</div>
									<div class="clearfix"></div>
										<h3><a href="<?php the_permalink() ?>" title=""><?php the_title(); ?></a></h3>
									<div class="comment-more">
										<a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>
									<div class="clearfix"></div>
								</div>
							<?php endwhile; wp_reset_query(); } ?>
							<div class="pace-program">
								<img src="<?php echo the_field('pace_image', 18); ?>" style="max-width:100%;" ></img>
								<?php echo the_field('pace_details', 18); ?>
							</div>
						</div>
					</div>
  			</div> <?php // end #content ?>

      </div> <?php // end ./container ?>

<?php get_footer(); ?>
