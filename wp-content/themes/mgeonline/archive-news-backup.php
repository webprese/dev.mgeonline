<?php get_header(); ?>
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

  			<div id="content" class="row clearfix">

					<div id="main" class="col-md-12 clearfix" role="main">

            <!-- UNCOMMENT FOR BREADCRUMBS
            <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?> -->

					<h1 class="archive-title h2">In the Media</h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

							

							<section class="entry-content clearfix">
									<?php if ( has_post_thumbnail()) : ?>
									<div class="col-md-5">
									   <?php the_post_thumbnail('large'); ?>
									</div>
									<div class="col-md-7 media-excerpt">

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
									<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
										<a href="https://twitter.com/share" class="twitter-share-button" 
										data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" 
										data-via="MGEOnline" data-count="vertical">Tweet</a>

										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
										if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
										js.src="//platform.twitter.com/widgets.js";
										fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
										</script>
									<div class="comment-more">
									<a>Comments (<?php $commentcount = comments_number('0', '1', '%'); echo $commentcount; ?>)</a> | <a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>									</div>
									<?php else: ?>

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
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

									<div class="comment-more">
									<a>Comments (<?php $commentcount = comments_number('0', '1', '%'); echo $commentcount; ?>)</a> | <a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>
									<?php endif; ?>
									
									
								

							</section> <?php // end article section ?>

							<footer class="article-footer">

							</footer> <?php // end article footer ?>

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
