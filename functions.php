<?php 

function theme_enqueue_styles() {
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'parent-responsive-style', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
	wp_enqueue_style( 'child-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css', array('parent-responsive-style') );
	
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', false, '1.11.3', true);
	wp_register_script('inview', get_template_directory_uri() . '/js/jquery.inview.js', false, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('inview');
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>