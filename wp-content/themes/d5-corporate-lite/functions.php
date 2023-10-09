<?php
/* 	D5 CORPORATE Theme's Functions
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since D5 CORPORATE 1.0
*/   

	require_once ( trailingslashit(get_template_directory()) . 'inc/customize.php' );
	
	function d5corporate_about_page() { 	
	add_theme_page( 'CORPORATE Options', 'CORPORATE Options', 'edit_theme_options', 'theme-about', 'd5corporate_theme_about' ); 
	}
	add_action('admin_menu', 'd5corporate_about_page');
	function d5corporate_theme_about() {  require_once ( trailingslashit(get_template_directory()) . 'inc/theme-about.php' ); }
	
	function d5corporate_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	load_theme_textdomain( 'd5-corporate-lite', get_template_directory() . '/languages' );	
	add_theme_support( 'automatic-feed-links' );
  	register_nav_menus( array( 'main-menu' => __('Main Menu', 'd5-corporate-lite'),  	'top-menu' => __('Top Menu', 'd5-corporate-lite') ) );


	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 584;
	add_editor_style();
		
// 	This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
		
// 	WordPress Custom Background Support	
	$d5corporate_custom_background = array(
	'default-color'          => '',
	'default-image'          => '',
	);
	add_theme_support( 'custom-background', $d5corporate_custom_background );
	
// 	WordPress Custom Header Support				
	$d5corporate_custom_header = array(
	'default-image'          => '', //get_template_directory_uri() . '/images/logo.png',
	'random-default'         => false,
	'width'                  => 300,
	'height'                 => 90,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '000000',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback' 		 => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $d5corporate_custom_header );
	
	}
	add_action( 'after_setup_theme', 'd5corporate_setup' );

// 	Functions for adding script
	function d5corporate_enqueue_scripts() { 
	wp_enqueue_style('d5corporate-style', get_stylesheet_uri(), false );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
	wp_enqueue_script( 'd5corporate-menu-style', get_template_directory_uri(). '/js/menu.js',  array( 'jquery' ) );
	wp_enqueue_style('d5corporate-gfonts1', '//fonts.googleapis.com/css?family=Oswald', false );
	if ( d5corporate_get_option('responsive', '1')) wp_enqueue_style('d5corporate-responsive', get_template_directory_uri(). '/style-responsive.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'd5corporate_enqueue_scripts' );
	
// 	Functions for adding script to Admin Area
	function d5corporate_admin_style() { wp_enqueue_style( 'd5corporate_admin_css', get_template_directory_uri() . '/inc/admin-style.css', false ); }
	add_action( 'admin_enqueue_scripts', 'd5corporate_admin_style' );


//	Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and d5corporate_continue_reading_link().
//	function tied to the excerpt_more filter hook.
	function d5corporate_excerpt_length( $length ) {
	global $blExcerptLength;
	if ($blExcerptLength) {
    return $blExcerptLength;
	} else {
    return 50; //default value
    } }
	add_filter( 'excerpt_length', 'd5corporate_excerpt_length', 999 );
	
	function d5corporate_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="read-more">'. __('Read the Rest...', 'd5-corporate-lite') .'</a>';
	}
	add_filter('excerpt_more', 'd5corporate_excerpt_more');

//	D5 BusinessLine and WordPress Credit
	function d5corporate_credit() {
		echo '&nbsp;| D5 CORPORATE LITE Theme by: <a href="'.esc_url('https://d5creation.com').'" target="_blank">D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a>';
	}


//	Adds a pretty "Continue Reading" link to custom post excerpts.
	function d5corporate_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= d5corporate_continue_reading_link();
	}
	return $output;
	}
	add_filter( 'get_the_excerpt', 'd5corporate_custom_excerpt_more' );
	
	// Content Type Showing
	function d5corporate_content() { the_content('<span class="read-more">'.__('Read More...', 'd5-corporate-lite').'</span>'); }


//	Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link
	function d5corporate_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
	}
	add_filter( 'wp_page_menu_args', 'd5corporate_page_menu_args' );


//	Registers the Widgets and Sidebars for the site
	function d5corporate_widgets_init() {

	register_sidebar( array(
		'name' =>  __('Primary Sidebar', 'd5-corporate-lite'),  
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>  __('Secondary Sidebar', 'd5-corporate-lite'),  
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>  __( 'Footer Area One', 'd5-corporate-lite'), 
		'id' => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>  __( 'Footer Area Two', 'd5-corporate-lite'), 
		'id' => 'sidebar-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>  __( 'Footer Area Three', 'd5-corporate-lite'), 
		'id' => 'sidebar-5',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' =>  __( 'Footer Area Four', 'd5-corporate-lite'), 
		'id' => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}
	add_action( 'widgets_init', 'd5corporate_widgets_init' );
	
	add_filter('the_title', 'd5corporate_title');
	function d5corporate_title($title) {
        if ( '' == $title ) {
            return '(Untitled)';
        } else {
            return $title;
        }
    }