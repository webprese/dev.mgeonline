<?php if(get_field('newsletter_signup') == 'on') : ?>
	<div class="newsletter-footer">
		<div class="container newsletter-container">
			<div class="newsletter-footer-text col-xs-12 col-md-12 col-lg-8 col-centered">
				<div class="col-xs-12 col-md-8"><h2>Signup to receive our newsletter</h2></div><div class="col-xs-9 col-md-4 newsletter-button col-centered-mob"><button>SIGNUP NOW</button></div>
			</div>
		</div>
	</div>		
<?php else : ?>
<?php endif; ?>
    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">
        <div class="footer-left col-md-3">
			<div class="logo"> 
				<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
				<img src="<?php the_field('logo_footer', 'option'); ?>" alt="<?php bloginfo( 'name' ) ?>" style="width:100%"  >
				</a>
			</div>
		</div>
		<div class="footer-right col-md-9">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<?php bones_main_nav(); ?>
			</div>
			
	       <div id="footer-wrapper">
			
			
          <div class="row col-md-12 pull-right">
            <div class="col-xs-12 col-sm-3 col-lg-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-xs-12 col-sm-3 col-lg-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-xs-12 col-sm-3 col-lg-3" id="text-5">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->
            <div class="col-xs-12 col-sm-3 col-lg-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

           

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->
	</div>
        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 copyright">
              &copy;  <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?> - All rights reserved.
            </div>
        
          </div> <!-- end .row -->
        </div>
      </div>

    </footer> <!-- end footer -->

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
