<?php

/* 	D5 CORPORATE Theme's Header
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
	<div id="resmwdt"></div>
  	<div id="container">
  	  	<div id="top-menu-container">      
	  		<nav id="top-menu-con"><?php if ( has_nav_menu( 'top-menu' ) ) {  wp_nav_menu( array( 'theme_location' => 'top-menu' )); } ?></nav>	       
	 		<?php 
			$connumber = esc_html(d5corporate_get_option('contactnumber', ''));
			$extnumber = esc_html(d5corporate_get_option('extra-num', '')); 
			if ($connumber):echo '<div class="flexcenter connumber">'.$connumber. '</div>';  endif; 
			if ($extnumber): echo '<div class="flexcenter extranumber">'.$extnumber.'</div>'; endif;			
			get_search_form(); ?>        
      	</div>
      	<div id ="header">
		  	<div id ="header-content">
				<!-- Site Titele and Description Goes Here -->
				<a class="logotitle" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if ( get_header_image() !='' ): ?><img class="site-logo" src="<?php header_image(); ?>"/><?php else: ?><h1 class="site-title"><?php echo bloginfo( 'name' ); ?></h1><?php endif; ?></a>
				<h2 class="site-title-hidden"><?php bloginfo( 'description' ); ?></h2>

					<div id="mobile-menu" class="mmenucon">&#9776;</div>      
					<!-- Site Main Menu Goes Here -->
					<nav id="main-menu-con" class="mmenucon mmenumobile"><?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'm-menu', 'container_class' => 'mainmenu-parent', 'fallback_cb' => 'wp_page_menu'  )); ?></nav>     
		  	</div><!-- header-content -->
      	</div><!-- header -->            
     	<?php  if (!is_front_page()) { echo '<div id="headersep"> </div>'; } 