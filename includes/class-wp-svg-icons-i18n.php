<?php

/* If the file is hit directly, abort... */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      3.0.0
 * @package    svg-vector-icon-plugin
 * @subpackage svg-vector-icon-plugin/includes
 * @author     Evan Herman <Evan.M.Herman@gmail.com>
 * @link       https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/
 */

class WP_SVG_Icons_i18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since    3.0.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    3.0.0
	 */
	public function load_wp_svg_icons_textdomain() {

		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since    3.0.0
	 * @param    string    $domain    The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}

}
