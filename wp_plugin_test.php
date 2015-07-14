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

function display_map_shortcode()
{
	return "<style type=\"text/css\">
      html, body, #map-canvas { width: 100%; height: 500px; margin: 0; padding: 0;}
    </style>
    <script type=\"text/javascript\"
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcp4mJQHbpnxU-pfWNoE4AWGYvX2Wv2qU\">
    </script>
    <script type=\"text/javascript\">
      function initialize() {
        var mapOptions = {
          center: { lat: -34.397, lng: 150.644},
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id=\"map-canvas\"></div>";
}

function display_map_register_shortcode()
{
	add_shortcode('plugin_test_display_map', 'display_map_shortcode');
}

add_action('init', 'display_map_register_shortcode');
