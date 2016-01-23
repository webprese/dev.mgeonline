
<?php echo get_post_meta($id,'mpsp_slide_nav_button_position',true); ?>
<style>
.owl-pagination{
}
.owl-buttons{
  color:<?php echo get_post_meta($id,'mpsp_slide_nav_button_color',true);?>
}



</style>



<div id="mpsp_wrapper" style= " background-color:<?php echo get_post_meta($id,'mpsp_posts_bg_color',true);?>; padding:10px; margin:40px; border-radius:5px; width:<?php echo get_post_meta($id,'mpsp_slide_custom_width',true); ?>;  <?php echo $mpsp_slide_gradient; ?>    ">
  
         <h1 class="archive-title h2"><?php echo get_post_meta($id,'mpsp_slide_main_heading',true); ?></h1>

             <div class="col-md-12" id="<?php echo 'mpsp_id'.$id; ?>" class="owl-carousel">
                
          <?php

     

$mpsp_posts_key = get_post_meta($id,'mpsp_posts_key',true);

              // WP_Query arguments
                  $args = array (
                    'post_type'              => get_post_meta($id,'mpsp_post_types',true), 
                    $mpsp_posts_key          => get_post_meta($id,'mpsp_posts_value',true),
                    'posts_per_page'         => get_post_meta($id,'mpsp_posts_visible',true),
                    'order'                  => get_post_meta($id,'mpsp_posts_order',true),
                    'orderby'                => get_post_meta($id,'mpsp_posts_orderby',true),

                  );

// The Query
                  $the_query = new WP_Query( $args );

           

          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div> 
        <?php if ( has_post_thumbnail()) : ?>
									<div class="col-md-5 featured-thumbnail">
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
									
									<div class="comment-more">
									<a>Comments (<?php $commentcount = comments_number('0', '1', '%'); echo $commentcount; ?>)</a> | <a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>									
									</div>
									<?php else: ?>

								<div class="col-md-5 featured-thumbnail">
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
									
									<div class="comment-more">
									<a>Comments (<?php $commentcount = comments_number('0', '1', '%'); echo $commentcount; ?>)</a> | <a href="<?php echo get_permalink(); ?>">Read more &#8594;</a>
									</div>									
									</div>
									<?php endif; ?>


          <!-- Linked Post Description  -->
         </a>

    </div>

<?php endwhile;?>


               
            </div>
          </div>

            <script>

            jQuery(document).ready(function() {
 
         jQuery("<?php echo '#mpsp_id'.$id; ?>").owlCarousel({
              autoPlay : <?php echo get_post_meta($id,'mpsp_slide_autoplay',true); ?>,
              stopOnHover : true,
              navigation: <?php echo  get_post_meta($id,'mpsp_slide_navigation',true); ?>,
              paginationSpeed : 1000,
              goToFirstSpeed : 2000,
              singleItem : <?php echo  get_post_meta($id,'mpsp_slide_single',true); ?>,
              autoHeight : true,
              transitionStyle: <?php echo  get_post_meta($id,'mpsp_slide_transistion',true); ?>,
              pagination : <?php echo  get_post_meta($id,'mpsp_slide_pagination',true); ?>,
              paginationNumbers :<?php echo  get_post_meta($id,'mpsp_slide_pagination_numbers',true); ?>,
              navigationText : ["<b><</b>", "<b>></b>"],

        });
       });

        </script>