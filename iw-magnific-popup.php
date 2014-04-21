<?php
/*
Plugin Name: IW Magnific Popup
Plugin URI: https://github.com/huwrowlands/IW-Magnific-Popup
Description: A plugin to include the Magnific Popup lightbox for single & gallery images in WordPress.
Author: Huw Rowlands
Author URI: http://www.inspiredworx.com
Version: 0.0.2
*/

/*******************
	NOTES
*******************/

//Add readme
//Add code to wrap a class around images/galleries for no conflicts with other .gallery classes.
//Add a admin page ?


/*******************
	Global Variables
*******************/

$iwmp_prefix = "iwmp_"; // Declare the prefix name. (This helps to stop function name conflicts with other plugins.)
$iwmp_plugin_name = "IW Magnific Popup"; // Plugin name.

/*******************
	Includes
*******************/

include('includes/scripts.php'); // Call JS Scripts & CSS Styles.

?>