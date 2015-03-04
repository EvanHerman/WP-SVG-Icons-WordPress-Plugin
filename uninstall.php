<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @link      http://www.evan-herman.com/wordpress-plugin/wp-svg-icons/
 * @since      3.0.0
 *
 * @package    WP_SVG_Icons
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	
	delete_option( 'wp_svg_icons_license_status' );
	delete_option( 'wp_svg_icons_license_key' );
		
	exit;
}