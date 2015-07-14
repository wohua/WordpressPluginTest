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

function plugin_test_shortcode()
{
	return "plugin test";
}

function plugin_test_register_shortcode()
{
	add_shortcode('plugin_test', 'plugin_test_shortcode');
}

add_action('init', 'plugin_test_register_shortcode');
