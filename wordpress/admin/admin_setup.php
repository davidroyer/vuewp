<?php
require_once( get_stylesheet_directory(). '/vuewp_assets_helper.php');

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


