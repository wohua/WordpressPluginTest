<?php
/*
Plugin Name: Wordpress Plugin Test
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: This describes my plugin in a short sentence
Version:     0.0
Author:      Fallland Lu
Author URI:  http://URI_Of_The_Plugin_Author
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset
*/

function load_scripts_and_styles() {
	wp_enqueue_script('plugin-test-google-api', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCcp4mJQHbpnxU-pfWNoE4AWGYvX2Wv2qU");
    wp_enqueue_script('plugin-test-google-map', plugins_url('js/google_map.js', __FILE__));
    wp_enqueue_style('plugin-test-google-map-style', plugins_url('css/style.css', __FILE__));
}

add_action( 'wp_enqueue_scripts', 'load_scripts_and_styles' );

function display_map_shortcode()
{
	return "<div id=\"map-canvas\"></div>";
}

function display_map_register_shortcode()
{
	add_shortcode('plugin_test_display_map', 'display_map_shortcode');
}

add_action('init', 'display_map_register_shortcode');
