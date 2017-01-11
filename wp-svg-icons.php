<?php
/**
 * @link              http://evan-herman.com/wordpress-plugin/wp-svg-icons
 * @since             3.0
 * @package           WP_SVG_Icons
 *
 * @wordpress-plugin
 * Plugin Name:       WP SVG Icons
 * Plugin URI:        https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/
 * Description:    Quickly and effortlessly gain access to 492 beautifully designed SVG font icons, available on the frontend and backend of your site.
 * Version:           3.1.8.4
 * Author:            EH Dev Shop
 * Author URI:        http://evan-herman.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       wp-svg-icons
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-svg-icons-activator.php
 */
function activate_wp_svg_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-svg-icons-activator.php';
	WP_SVG_Icons_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-svg-icons-deactivator.php
 */
function deactivate_wp_svg_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-svg-icons-deactivator.php';
	WP_SVG_Icons_Deactivator::deactivate();
}

/**
 * The code that runs during plugin uninstall.
 * This action is documented in includes/class-wp-svg-icons-uninstall.php
 */
function uninstall_wp_svg_icons() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-svg-icons-uninstall.php';
	WP_SVG_Icons_Uninstall::uninstall();
}

register_activation_hook( __FILE__, 'activate_wp_svg_icons' );
register_deactivation_hook( __FILE__, 'deactivate_wp_svg_icons' );
register_uninstall_hook( __FILE__ ,	'uninstall_wp_svg_icons' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-svg-icons.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    3.0.0
 */
function run_wp_svg_icons() {
	$plugin = new WP_SVG_Icons();
	$plugin->run();
}
run_wp_svg_icons();
