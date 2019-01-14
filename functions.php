<?php

define('VUE_PORT', 9876);
define('IS_PRODUCTION', false);

require_once( get_stylesheet_directory() . '/wordpress/remove_redirects.php' );
require_once( get_stylesheet_directory() . '/wordpress/register_vue.php' );

