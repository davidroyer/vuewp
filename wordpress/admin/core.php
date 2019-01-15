<?php
require_once( get_stylesheet_directory(). '/assets_helper.php');

add_action( 'admin_menu', 'vuewp_admin_menu' );
function vuewp_admin_menu() {
	add_options_page( 
		'VueWP Admin Plugin Options ',
		'VueWP Options',
		'manage_options',
		'vuewp-admin.php',
		'vuewp_admin_page'
	);
}

add_action( 'admin_menu', 'my_admin_menu' );
function my_admin_menu() {
    global $my_admin_page;
    add_menu_page(
        'VueWP Admin',
        'VueWP',
        'manage_options', 'vuewp.php', 'vuewp_admin_page', 'dashicons-tickets', 6  );
}

function vuewp_admin_page(){
	?>
	<div class="wrap">
		<h2>Welcome To My Plugin</h2>
        <div id="app"></div>
	</div>
	<?php
}


function add_script_to_menu_page() {
    $screen = get_current_screen();
 
    if ( is_vuewp_admin_page($screen->id) ) {
        wp_register_script( 'vendors-js', vuewp_mix('chunk-vendors.js'), null, null, true );
        wp_register_script( 'admin-js', vuewp_mix('admin.js'), array('vendors-js'), null, true );
    
        wp_enqueue_style( 'admin-styles', vuewp_mix('admin.css'));
        wp_enqueue_script('vendors-js');
        wp_enqueue_script('admin-js');
    }
}
add_action( 'admin_enqueue_scripts', 'add_script_to_menu_page' );

function is_vuewp_admin_page($screen_id) {
    if ($screen_id == 'toplevel_page_vuewp' || $screen_id == 'settings_page_vuewp-admin') {
        return true;
    } else {
        return false;
    }
}