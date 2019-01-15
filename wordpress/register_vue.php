<?php
require_once( get_stylesheet_directory() . '/wordpress/initial_data.php' );
require_once( get_stylesheet_directory(). '/assets_helper.php');

function load_vuewp_frontend() {
	wp_register_style( 'frontend-styles', vuewp_mix('index.css'), null, null );
	wp_register_script( 'vendors-js', vuewp_mix('chunk-vendors.js'), null, null, true );
	wp_register_script( 'frontend-js', vuewp_mix('index.js'), array('vendors-js'), null, true );

	register_endpoints();
	register_initial_data();
	
	wp_enqueue_style( 'frontend-styles');
	wp_enqueue_script('vendors-js');
	wp_enqueue_script('frontend-js');
}
add_action('wp_enqueue_scripts', 'load_vuewp_frontend');