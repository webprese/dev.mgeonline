<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if (is_front_page()) { bloginfo('name'); } else { wp_title(''); } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?v=2">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,900,200' rel='stylesheet' type='text/css'>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

    <header class="header">

      <nav role="navigation">
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
				<div class="top container col-xs-12 col-sm-12 col-lg-12">
						<div class="logo col-xs-12 col-sm-3 col-lg-3"> 
								<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
								<img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo( 'name' ) ?>" style="width:100%" >
								</a>
						</div>
						<div class="phone col-xs-12 col-sm-12 col-md-4 col-lg-5">
								<p>Toll Free: <?php echo the_field('phone1', 'option'); ?>  &emsp;  Local: <?php echo the_field('phone2', 'option'); ?> &emsp; </p>
						</div>
						<div class="top-nav col-xs-12 col-sm-3 col-md-4 col-lg-4">
						<?php bones_top_nav(); ?>
						</div>
						<div class="header-icons">
							<ul>
								<li class="header-icon-facebook"><a href="https://www.facebook.com/mgemanagementexperts" target="_blank"><img src="<?php bloginfo( 'url' ) ?>/wp-content/themes/mgeonline/library/images/blank-image.png" alt=" " /></a></li>
								<li class="header-icon-twitter"><a href="https://twitter.com/MGEOnline" target="_blank"> <img src="<?php bloginfo( 'url' ) ?>/wp-content/themes/mgeonline/library/images/blank-image.png" alt=" " /></a></li>
								<li class="header-icon-linkedin"><a href="https://www.linkedin.com/company/mge-management-experts-inc-" target="_blank"><img src="<?php bloginfo( 'url' ) ?>/wp-content/themes/mgeonline/library/images/blank-image.png" alt=" " /></a></li>
							</ul>
						</div>
				</div>
		

            </div>
            

            <div class="navbar-collapse collapse navbar-responsive-collapse">
              <?php bones_main_nav(); ?>

            </div>
          </div>
        </div> 
        <div class="navbar-scroll navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
            <div class="navbar-header navbar-header-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
						<div class="logo col-xs-10 col-sm-8 col-md-3 col-lg-3"> 
								<a class="" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage">
								<img src="<?php the_field('logo_scroll', 'option'); ?>" alt="<?php bloginfo( 'name' ) ?>" style="width:100%" >
								</a>
						</div>
				</div>            

            <div class="navbar-scroll-nav navbar-collapse collapse navbar-responsive-collapse">
              <?php bones_main_nav(); ?>

            </div>
          </div>
        </div> 
        
      </nav>
      

		</header> <?php // end header ?>
