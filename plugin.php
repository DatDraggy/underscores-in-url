<?php
/*
Plugin Name: Add underscores to shortener charset
Plugin URI: https://github.com/WInf9Kieran/underscores-in-url/
Description: You can use underscores for custom links with this plugin
Version: 1.0
Author: DatDraggy
Author URI: https://www.kieran.pw/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'get_shorturl_charset', 'kieran_underscore_for_links' );
function kieran_underscore_for_links( $us ) {
	return $us.'_';
}
