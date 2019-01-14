<?php
require_once( get_stylesheet_directory() . '/wordpress/initial_data.php' );
require_once( get_stylesheet_directory(). '/assets_helper.php');

function load_vue_scripts() {
	wp_register_script( 'vendors-js', vuewp_mix('chunk-vendors.js'), array(), '1.0.0', true );
	wp_register_script( 'app-js', vuewp_mix('app.js'), array('vendors-js'), '1.0.0', true );

	register_endpoints();
	register_initial_data();
	
	wp_enqueue_style( 'app-styles', vuewp_mix('app.css'));
	wp_enqueue_script('vendors-js');
	wp_enqueue_script('app-js');
}
add_action('wp_enqueue_scripts', 'load_vue_scripts');