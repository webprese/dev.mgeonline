<?php
/*
Template Name: Page - Right Sidebar
*/
?>

<?php get_header(); ?>

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main" class="col-md-12 clearfix" role="main">
			<div class="home-link"><a href="<?php echo get_home_url(); ?>" ><span>&#8592;</span> home</a></div>


<?php woocommerce_content(); ?>            
            
        
          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>
