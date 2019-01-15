<?php

define('VUE_PORT', 8080);
define('IS_PRODUCTION', false);

require_once( get_stylesheet_directory() . '/wordpress/remove_redirects.php' );
require_once( get_stylesheet_directory() . '/wordpress/register_vue.php' );
require_once( get_stylesheet_directory() . '/wordpress/admin/core.php' );
