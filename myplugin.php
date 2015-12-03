<?php

/**
 * Plugin Name: My Plugin
 * Plugin URI: http://www.mypluginurl.com
 * Description: A blank plugin for building Beaver Builder plugins.
 * Version: 1.0.0
 * Author: Jon Mather
 * Author URI: http://www.simplewebsiteinaday.com.au
 */

define( 'MYPLUGIN_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'MYPLUGIN_URL', plugins_url( '/', __FILE__ ) );

function myplugin_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'includes/myplugin-module.php';
    }
}
add_action( 'init', 'myplugin_module' );