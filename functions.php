<?php
/*
 * Theme functions
 * Use this file to setup integral functionality for the site.
 */
 
/*
 * Define constants
 */
define('THEMEROOT', get_stylesheet_directory_uri());
define('TEMPLATE', get_template_directory_uri());
define('IMAGES', THEMEROOT . '/images');


/*
 * Add theme support for post thumbnails
 */
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}


/*
 * Register dynamic menus
 */
function register_theme_menus(){
	register_nav_menus(array(
		'top-menu' => __('Top Menu', 'textdomain'),
		'footer-menu' => __('Footer Menu', 'textdomain')
	));
}

add_action('init', 'register_theme_menus');



/*
 * Register sidebars
 */
if (function_exists('register_sidebar')) {
	register_sidebar(
		array(
			'name' => __('Main Sidebar', 'text-domain'),
			'id' => 'main-sidebar',
			'description' => __('The main sidebar area', 'text-domain'),
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget' => '</div> <!-- end sidebar-widget -->',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
	));	
}


	
/*
 * Register javascript files
 */ 
function register_scripts() {
	
	wp_enqueue_style( 'bootstrap', THEMEROOT . '/css/bootstrap.min.css' );
	// wp_enqueue_style( 'owlcarousel', THEMEROOT . '/css/owl.carousel.css' );
	// wp_enqueue_style( 'owltheme', THEMEROOT . '/css/owl.theme.css' );
	wp_enqueue_style( 'styles', get_stylesheet_uri() );

	wp_deregister_script('jquery');  
	wp_register_script('jquery', TEMPLATE . '/js/jquery.min.js', array(),'1.11.1', true);
	wp_register_script('bootstrap', TEMPLATE . '/js/bootstrap.min.js', array('jquery'), '3.3.1', true);
	// wp_register_script('googlemaps', ('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'), false, null, true);
	// wp_register_script('carousel', TEMPLATE . '/js/owl.carousel.min.js', array('jquery'), '', true);
	// wp_register_script('custom', TEMPLATE . '/js/custom.js', array('jquery'), '', true);
	
	wp_enqueue_script('jquery');
	// wp_enqueue_script('googlemaps');
	wp_enqueue_script('bootstrap');
	// wp_enqueue_script('carousel');
	// wp_enqueue_script('custom');
	
}

add_action('wp_enqueue_scripts', 'register_scripts');


/*
 * Require the additional functions
 */
 require_once 'functions/index.php';