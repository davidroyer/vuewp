<?php

function add_script_to_menu_page() {
    $screen = get_current_screen();
 
    if ( is_vuewp_admin_page($screen->id) ) {
    	wp_register_style( 'vendors-styles', vuewp('chunk-vendors.css'), null, null );
    	wp_register_style( 'admin-styles', vuewp('admin.css'), null, null );

        wp_register_script( 'vendors-js', vuewp('chunk-vendors.js'), null, null, true );
        wp_register_script( 'admin-js', vuewp('admin.js'), array('vendors-js'), null, true );
    
        wp_enqueue_style( 'vendors-styles');
        wp_enqueue_style( 'admin-styles');
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