<?php get_header('blog'); ?>
<script>
 window.fbAsyncInit = function() {
    FB.init({
      appId      : '497848323727737',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   </script>
 
    <div class="container">

			<div id="content" class="clearfix row">
 


							<?php echo do_shortcode('[mpsp_posts_slider id="252"]'); ?>

				<div id="main" class="col-xs-12 clearfix" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="col-md-6 col-xs-12 blog-col id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
							<section class="entry-content clearfix">

								<div class="col-md-5 featured-thumbnail-blog">
										<?php if ( has_post_thumbnail()) : ?>

									   <?php the_post_thumbnail('medium'); ?>
									   <?php else : ?>
									   	<img src="<?php echo get_template_directory_uri(); ?>/library/images/mge-default.png" style="max-width:100%;">
										<?php endif; ?>
									</div>
									<div class="col-md-7 media-excerpt-blog">

								<h3 class="archive-title h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="byline vcard"><?php
									printf( __( 'by <span class="author">%3$s</span> on <time class="updated" datetime="%1$s" pubdate>%2$s</time> in ', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'bonestheme' ) ), bones_get_the_author_posts_link());
								?>
								<?php 	$categories = get_the_category();
											$separator = ' ';
											$output = '';
											if ( ! empty( $categories ) ) {
												foreach( $categories as $category ) {
													$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
												}
												echo trim( $output, $separator );
											} ?></p>

									<?php the_excerpt(); ?>
									
									<div class="comment-more">
									<a>Comments (<?php $commentcount = comments_number('0', '1', '%'); echo $commentcount; ?>)</a> | <a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>				
								</section>
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

<?php get_footer(); ?>
