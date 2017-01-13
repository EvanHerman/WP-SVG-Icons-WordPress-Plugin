<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * The public-facing functionality of the plugin.
 *
 * @package    WP_SVG_Icons
 * @subpackage WP_SVG_Icons/public
 * @author     Evan Herman <Evan.M.Herman@gmail.com>
 * @link       https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/
 */

class WP_SVG_Icons_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    3.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    3.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    3.0.0
	 * @var      string    $plugin_name       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// allow the icon shortcode to be used in widgets
		// so users don't need to add this themselves
		add_filter('widget_text', 'do_shortcode');

	}

	/**
	 * Register our stylesheets for the public-facing side of the site.
	 *
	 * @since    3.0.0
	 */
	public function enqueue_styles() {

		// if the user has opted to enqueue the default icon pack
		// load it up on the front end
		if ( get_option( 'wp_svg_icons_enqueue_defualt_icon_pack' , '1' ) == '1' ) {
			// enqueue default font icon pack, if setting dictates so
			wp_enqueue_style( 'default-icon-styles' , plugin_dir_url( __FILE__ ) . '../admin/css/wordpress-svg-icon-plugin-style.min.css' );
		}
		// Enqueue custom styles if the user has uploaded a custom pack
		add_action( 'wp_head' , array( &$this , 'enqueueCustomIconStyles' ) );

	}

	/**
	 * Register our scripts for the public-facing side of the site.
	 *
	 * @since    3.0.0
	 */
	public function enqueue_scripts() {

	}

	/*
	*	Enqueue our custom styles if the user has uploaded a custom pack
	* 	@since    3.0.0
	*/
	public function enqueueCustomIconStyles() {

		// enqueue our custom icon pack styles if they exist
		$dest = wp_upload_dir();
		$upload['subdir'] = '/wp-svg-icons/custom-pack';
		$path = $dest['basedir'] . $upload['subdir'];
		$customPackStyles = '/style.css';

		// Check if there is a custom pack style file
		// if there is enqueue it
		if ( file_exists( $path . $customPackStyles ) ) {
			wp_register_style( 'wp_svg_custom_pack_style' , '/wp-content/uploads/wp-svg-icons/custom-pack' . $customPackStyles );
			wp_enqueue_style( 'wp_svg_custom_pack_style' );
		}

	}


}

/*
*	Include our shortcode [wp-svg-icons icon="#"]
* 	@since    3.0.0
*/
include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/wp-svg-icons-shortcodes.php' );
