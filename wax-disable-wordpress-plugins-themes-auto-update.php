<?php
/**
 * Plugin Name: WAX disable WordPress plugins themes auto update
 * Plugin URI: https://www.webaxones.com
 * Description: Disable WordPress plugins and themes auto-update
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;

/**
 * Disable Plugins auto-update
 */

add_filter( 'plugins_auto_update_enabled', '__return_false' );

/**
 * Disable Themes auto-update
 */

add_filter( 'themes_auto_update_enabled', '__return_false' );
