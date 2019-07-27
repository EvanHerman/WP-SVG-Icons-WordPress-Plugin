<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Create Menu Pages
// Create Sub Menu pages for Custom Icon Pack Uploads
function wordpress_svg_icons_plugin_add_menu_page() {

	// Top Level Menu
	add_menu_page(
		__('WP SVG Icons','wp-svg-icons'),
		'WP SVG Icons',
		'manage_options',
		'wp-svg-icons',
		'render_wp_svg_icon_page',
		'dashicons-wp-svg-gift'
	);

	// Sub Pages
	/* Default Icons Page */
	add_submenu_page(
		'wp-svg-icons',
		__('WP SVG Icons - Default Icon Set','wp-svg-icons'),
		__('Default Icon Set','wp-svg-icons'),
		'manage_options',
		'wp-svg-icons',
		'render_wp_svg_icon_page'
	);

	/* Custom Icons Page */
	add_submenu_page(
		'wp-svg-icons',
		__('Custom Icon Set','wp-svg-icons'),
		__('Custom Icon Set','wp-svg-icons'),
		'manage_options',
		'wp-svg-icons-custom-set',
		'render_custom_icon_page'
	);

	/* Settings Page */
	add_submenu_page(
		'wp-svg-icons',
		__( 'WP SVG Icons - Settings' , 'wp-svg-icon' ),
		__( 'Settings' , 'wp-svg-icon'  ),
		'manage_options',
		'wp_svg_icons',
		'wp_svg_icons_options_page'
	);

	/* Support Page */
	add_submenu_page(
		'wp-svg-icons',
		__( 'Upgrade', 'wp-svg-icons' ),
		__( 'Upgrade', 'wp-svg-icons' ),
		'manage_options',
		'wp-svg-icons-upgrade',
		'render_upgrade_page'
	);

}
add_action('admin_menu', 'wordpress_svg_icons_plugin_add_menu_page');


// Callback to render icon listing page
function render_wp_svg_icon_page() {

	ob_start();
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/wp-svg-icons-default-icons-page.php';
	echo ob_get_clean();

}

// Callback to render icon listing page
function render_custom_icon_page() {

	ob_start();
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/wp-svg-icons-custom-icons-page.php';
	echo ob_get_clean();

}

// Callback to render support page
function render_upgrade_page() {

	ob_start();
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/wp-svg-icons-upgrade-page.php';
	echo ob_get_clean();

}


/** Settings Page **/

function wp_svg_icons_settings_init(  ) {

	register_setting( 'wp_svg_icons_settings_page', 'wp_svg_icons_enqueue_defualt_icon_pack' );
	register_setting( 'wp_svg_icons_settings_page', 'wp_svg_icons_defualt_icon_container' );
	register_setting( 'wp_svg_icons_settings_page', 'wp_svg_icons_clear_all_data_on_uninstall' );

	/* Register settings section */
	add_settings_section(
		'wp_svg_icons_plugin_section',
		__( '', 'wp-svg-icons' ),
		'wp_svg_icons_settings_section_callback',
		'wp_svg_icons_settings_page'
	);

	/* Register checkbox Setting */
	add_settings_field(
		'wp_svg_icons_enqueue_defualt_icon_pack',
		__( 'Load Default Icons', 'wp-svg-icons' ),
		'wp_svg_icons_enqueue_defualt_icon_pack_callback',
		'wp_svg_icons_settings_page',
		'wp_svg_icons_plugin_section'
	);

	/* Default Icon Element */
	add_settings_field(
		'wp_svg_icons_defualt_icon_container',
		__( 'Defualt Icon Element', 'wp-svg-icons' ),
		'wp_svg_icons_enqueue_defualt_icon_container_callback',
		'wp_svg_icons_settings_page',
		'wp_svg_icons_plugin_section'
	);

	/* Delete Custom Icon Pack On Uninstall Setting */
	add_settings_field(
		'wp_svg_icons_clear_all_data_on_uninstall',
		__( 'Clear Data on Uninstall', 'wp-svg-icons' ),
		'wp_svg_icons_clear_all_data_on_uninstall_callback',
		'wp_svg_icons_settings_page',
		'wp_svg_icons_plugin_section'
	);

}
add_action( 'admin_init', 'wp_svg_icons_settings_init' );


// Enqueue default icon pack setting - checkbox - callback
function wp_svg_icons_enqueue_defualt_icon_pack_callback(  ) {

	$enqueue_default_icons_setting = get_option( 'wp_svg_icons_enqueue_defualt_icon_pack' , '1' );
	if( $enqueue_default_icons_setting == '1' ) {
		$checked = 'checked="checked"';
		$enqueued = __( 'the default icon pack stylesheet will be loaded on the front end.' , 'wp-svg-icons' );
	} else {
		$checked = '';
		$enqueued = __( 'the default icon pack stylesheet will ' , 'wp-svg-icons' ) . '<strong>' . __( 'not' , 'wp-svg-icons' ) . '</strong> ' . __( 'be loaded on the front end.' , 'wp-svg-icons' );
	}
	?>
	<input type='checkbox' name='wp_svg_icons_enqueue_defualt_icon_pack' <?php echo $checked; ?> value='1'><span style="font-size:small"><?php echo $enqueued; ?></span>
	<?php

}

// Default icons element cotainer - dropdown - callback
// doesn't currently do anything
// unable to use get_option() on edit.php to dictate the default icons
function wp_svg_icons_enqueue_defualt_icon_container_callback(  ) {

	$default_icon_container = get_option( 'wp_svg_icons_defualt_icon_container' , 'i' );

	?>
	<select id="wp_svg_icons_defualt_icon_container" name="wp_svg_icons_defualt_icon_container">
		<option val="H1" <?php selected( $default_icon_container , 'h1' ); ?>>h1</option>
		<option val="h2" <?php selected( $default_icon_container , 'h2' ); ?>>h2</option>
		<option val="h3" <?php selected( $default_icon_container , 'h3' ); ?>>h3</option>
		<option val="span" <?php selected( $default_icon_container , 'span' ); ?>>span</option>
		<option val="div" <?php selected( $default_icon_container , 'div' ); ?>>div</option>
		<option val="i" <?php selected( $default_icon_container , 'i' ); ?>>i</option>
		<option val="b" <?php selected( $default_icon_container , 'b' ); ?>>b</option>
	</select>
	<?php

}

// Clear all data on plugin uninstall - checkbox - callback
function wp_svg_icons_clear_all_data_on_uninstall_callback(  ) {

	$clear_all_data_on_uninstall = get_option( 'wp_svg_icons_clear_all_data_on_uninstall' , '1' );

	if( $clear_all_data_on_uninstall == '1' ) {
		$selected = 'checked="checked"';
		$delete_data_message = __( 'your custom pack and all associated and enqueued files will be deleted on uninstall.' , 'wp-svg-icons' );
	} else {
		$selected = '';
		$delete_data_message = __( 'your custom pack and all associated and enqueued files will ' , 'wp-svg-icons' ) . '<strong>' . __( 'not' , 'wp-svg-icons' ) . '</strong> ' . __( 'be deleted on uninstall.' , 'wp-svg-icons' );
	}
	?>
	<input type='checkbox' name='wp_svg_icons_clear_all_data_on_uninstall' <?php echo $selected; ?> value='1'><span style="font-size:small"><?php echo $delete_data_message; ?></span>
	<?php

}

// description of the settings page
function wp_svg_icons_settings_section_callback(  ) {
	echo '<p>' . __( 'Settings are limited in WP SVG Icons. This plugin was created to be as user friendly and as easy to maintain as possible, which includes a very minimal settings page.', 'wp-svg-icons' ) . '</p>';
	echo '<hr />';
	// Display a confirmation to the user when the settings have been updated
	if( isset( $_GET['settings-updated'] ) ) {
		?>
			<div class="updated">
				<p><?php _e( 'Settings successfully updated.' , 'wp-svg-icons' ); ?></p>
			</div>
		<?php
	}
}

/* Options Page Callback */
function wp_svg_icons_options_page(  ) {
	?>
	<style>
	::selection { background: #FF8000; }
	</style>
	<div class="svg-custom-upload-wrap wrap">
		<form action='options.php' method='post'>
			<h1 class="wp-svg-title"><span style="color:#FF8000;">WP SVG Icons</span> | <?php _e( 'Settings' , 'wp-svg-icons' ) ?></h1>
			<!-- review us container -->
			<div id="review-wp-svg-icons" style="position:absolute;right:15em;top:0;text-align:center;">
				<p><?php _e( 'Leave Us A Review!' , 'wp-svg-icons' ); ?></p>
				<p style="margin-top:-8px;"><a href="https://wordpress.org/support/view/plugin-reviews/svg-vector-icon-plugin" target="_blank" style="text-decoration:none;"><b class="wp-svg-happy" style="font-size:2.5em;"></b></a></p>
			</div>
			<!-- social media icons -->
			<div id="social-icons" style="position:absolute;right:0;top:0;margin:0 3em 0 0;text-align:center;">
				<p><?php _e( 'Follow me elsewhere' , 'wp-svg-icons' ); ?></p>
					<a href="https://profiles.wordpress.org/eherman24#content-plugins"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/wordpress-icon.png"></a>
					<a href="http://twitter.com/evanmherman"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/twitter.png"></a>
					<a href="https://www.linkedin.com/profile/view?id=46246110"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/linkedin.png"></a>
					<a href="https://www.evan-herman.com/feed/"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>/../../images/rss_icon.png"></a><br />
			</div>
			<?php
				settings_fields( 'wp_svg_icons_settings_page' );
				do_settings_sections( 'wp_svg_icons_settings_page' );
				submit_button();
			?>
		</form>
	</div>
	<?php
}
