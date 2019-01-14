<?php


function register_endpoints() {
        // make custom data available to the Vue app with wp_localize_script.
        global $post;
        
        wp_localize_script(
          'themint/app.js', // vue script handle defined in wp_register_script.
          '__HOMEURL__', // javascript object that will made availabe to Vue.
          get_stylesheet_directory_uri()
        );
        // enqueue the Vue app script with localized data.
        wp_enqueue_script( 'register_home_endpoint' );

        wp_localize_script(
          'themint/app.js', // vue script handle defined in wp_register_script.
          '__APIURL__', // javascript object that will made availabe to Vue.
          untrailingslashit( esc_url_raw( rest_url() ) )
        );

}

function register_initial_data() {

        // make custom data available to the Vue app with wp_localize_script.
        global $post;
        
        wp_localize_script(
          'themint/app.js', // vue script handle defined in wp_register_script.
          '__INITIAL_DATA__', // javascript object that will made availabe to Vue.
          array(
            'is_alive' => "It's Alive"
          )
        );

}