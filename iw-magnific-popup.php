<?php
/*
Plugin Name: IW Magnific Popup
Plugin URI: https://github.com/huwrowlands/IW-Magnific-Popup
Description: A plugin to include the Magnific Popup lightbox for single & gallery images in WordPress.
Author: Huw Rowlands
Author URI: http://www.inspiredworx.com
Version: 1.2.1
*/

/*******************
	NOTES
*******************/

//Add readme.txt
//Add code to wrap a class around images/galleries for no conflicts with other .gallery classes.
//Not compatible with iframe, video, googlemaps, dialog boxes, forms, ajax, and modals. Maybe in a future release?


/*******************
	Global Variables
*******************/

$iwmp_prefix = "iwmp_"; // Declare the prefix name. (This helps to stop function name conflicts with other plugins.)
$iwmp_plugin_name = "IW Magnific Popup"; // Plugin name.

/*******************
	Includes
*******************/

include('includes/scripts.php'); // Call JS Scripts.
include('includes/wp-gallery-shortcode-override.php'); // Customise the native WordPress gallery shortcode, to add our custom class to the HTML.

?>