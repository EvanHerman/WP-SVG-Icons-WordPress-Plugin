<?php

/* If the file is hit directly, abort... */
defined('ABSPATH') or die("Nice try....");

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      3.0.0
 * @package    svg-vector-icon-plugin
 * @subpackage svg-vector-icon-plugin/includes
 * @author     Evan Herman <Evan.M.Herman@gmail.com>
 * @link       https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/
 */
class WP_SVG_Icons_Admin {

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
	 * @var      string    $plugin_name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
				
		// load our dependencies
		$this->include_dependencies();		
		
		// add custom button to edit.php page
		add_action('media_buttons', array( &$this , 'add_insert_icon_button'), 999999 );
		
		// add our custom field to the menus
		add_filter( 'wp_setup_nav_menu_item', array( $this, 'wp_svg_icons_add_custom_nav_fields' ) );
			
		// save menu custom fields
		add_action( 'wp_update_nav_menu_item', array( $this, 'wp_svg_icons_update_custom_nav_fields'), 10, 3 );
	
		// action hook which handles the ajax request of deleting files
		add_action('wp_ajax_svg_delete_custom_pack', array( &$this , 'svg_delete_custom_pack_ajax' ) );		

		// custom font pack found error
		add_action('admin_notices', array( &$this , 'wp_svg_customPack_installed_error' ) );

		// set the custom upload directory
		add_action( 'admin_head', array( &$this , 'wp_svg_change_downloads_upload_dir' ) , 999 );
		
		// check the users plugin installation date
		add_action( 'admin_init', array( &$this , 'wp_svg_icons_check_installation_date' ) );
		
		// dismissable notice admin side
		add_action( 'admin_init', array( &$this , 'wp_svg_icons_stop_bugging_me' ), 5 );
	}
	
	/**
	 * Register the stylesheets for the Dashboard.
	 *
	 * @since    3.0.0
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-svg-icons-admin.min.css', array(), $this->version, 'all' );
		
		wp_enqueue_style( 'admin-icon-page-styles' , plugin_dir_url( __FILE__ ) . 'css/wordpress-svg-icon-plugin-style.min.css' );
		wp_enqueue_style( 'default-icon-styles' , plugin_dir_url( __FILE__ ) . 'css/default-icon-styles.min.css' );
	
	}
	
	/**
	 * Register the JavaScript for the dashboard.
	 *
	 * @since    3.0.0
	 */
	public function enqueue_scripts() {	
		
		$dest = wp_upload_dir();
		$dest_path = explode( '/uploads/' , $dest['path'] );
		$customFontPackPath = $dest_path[0] . '/uploads/wp-svg-icons/custom-pack/style.css';
		if ( file_exists( $customFontPackPath ) ) {
			$active_pack = 'true';
		} else {
			$active_pack = 'false';
		}

		// enqueue our necessary JS and CSS files
		wp_register_script( 'admin-icon-page-script.js', plugin_dir_url( __FILE__ ) . 'js/wordpress-svg-icon-plugin-scripts.js', array( 'jquery' , 'jquery-ui-core' , 'jquery-ui-slider' ), $this->version , false );
		$localized_data = array(
			'site_url' => site_url(),
			'custom_pack_active' => $active_pack,
			'default_icon_element' => get_option( 'wp_svg_icons_defualt_icon_container' , 'i' ),
		);
		wp_localize_script( 'admin-icon-page-script.js' , 'localized_data' , $localized_data );
		wp_enqueue_script( 'admin-icon-page-script.js' );
		
		// enqueue our color picker js + styles
		/* Enqueue the color picker dependencies */
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_style( 'wp-color-picker' ); 
		
		// custom font pack scripts
		$this->wordpress_svg_icon_plugin_custom_icon_pack_scripts();
		
		// enqueue our nav scripts/styles
		$this->enqueue_custom_nav_scripts_on_nav_menu_page();
									
	}
	
	// ajax delete our .zip and entire directory for the custom pack!
	function svg_delete_custom_pack_ajax() {
		$dest = wp_upload_dir();
		$dest_path = explode( '/uploads/' , $dest['path'] );
		$customFontPackFolderPath = $dest_path[0] . '/uploads/wp-svg-icons/custom-pack/';
		$zip_fileName = 'wp-svg-custom-pack.zip';
		// delete the custom icon pack .zip
		$delete_zip = $this->recursive_delete_directory( $customFontPackFolderPath . $zip_fileName );
		// delete the entire custom font pack folder
		$delete_directory = $this->recursive_delete_directory( $customFontPackFolderPath );
		die();
	}
	
	/* Here, were going to create a new field for the 'menu' - to allow users to add icons to menus */
	function wp_svg_icons_add_custom_nav_fields( $menu_item ) {
		$menu_item->subtitle = get_post_meta( $menu_item->ID, '_menu_item_icon', true );
		return $menu_item;
	}
	
	
	/* Save custom menu field */
	function wp_svg_icons_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {
	
	    // Check if element is properly sent
		if( isset( $_REQUEST['menu-item-icon'] ) ) {
			if ( is_array( $_REQUEST['menu-item-icon'] ) ) {
				$subtitle_value = $_REQUEST['menu-item-icon'][$menu_item_db_id];
				update_post_meta( $menu_item_db_id, '_menu_item_icon', $subtitle_value );
			}
		}
	    
	}
	
	/* 
	*	Set custom upload directory 
	*/
	function wp_svg_change_downloads_upload_dir() {
		$page_base = get_current_screen()->base;
		if ( $page_base == 'wp-svg-icons_page_wp-svg-icons-custom-set' ) {
			add_filter( 'upload_dir', array( &$this , 'wp_svg_set_upload_dir' ) );
		} 
	}
	
	/*
	*	set our custom upload directory
	*/
	function wp_svg_set_upload_dir( $upload ) {
		$upload['subdir'] = '/wp-svg-icons/custom-pack';
		$upload['path'] = $upload['basedir'] . $upload['subdir'];
		$upload['url']   = $upload['baseurl'] . $upload['subdir'];
		return $upload;
	}
	
	// load our dependencies here
	private function include_dependencies() {
		/**
		* Load our Icons Page
		*/
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/wp-svg-icons-icon-page.php';
	}
			
	/*
	*	'Insert Icon' Button	
	*/
	function add_insert_icon_button() {
		echo '<a href="'.plugin_dir_url( dirname( __FILE__ ) ).'admin/partials/wp-svg-icons-default-icons-page.php?" class="thickbox button" title="'.__( "WP SVG Icons" , "wp-svg-icons" ).'"><span class="wp-svg-wordpress"></span>  Add Icon</a>';
	}
	
	/*
	*	Enqueue scripts on custom icon pack page
	*/
	function wordpress_svg_icon_plugin_custom_icon_pack_scripts() {	
	
		$screen_base = get_current_screen()->base;
		
		$dest = wp_upload_dir();
	
		$dest_path = $dest['basedir'] . '/wp-svg-icons/custom-pack';
				
		if ( $screen_base == 'wp-svg-icons_page_wp-svg-icons-custom-set' ) {

			if ( file_exists( $dest_path.'/wp-svg-custom-pack.zip' ) ) {
				// enqueue our custom delete script
				wp_register_script( 'wp-svg-delete-custom-pack',  plugin_dir_url(__FILE__).'js/wp-svg-delete-custom-pack-ajax.js');	
				// localize an array of text to translate
				$translation_array = array(
					'confirm' => __( 'Are you sure you want to uninstall your custom icon pack? This cannot be undone.' , 'wp-svg-icons' ),
					'success' => __( 'Custom font pack successfully uninstalled!' , 'wp-svg-icons' ),
					'error' => __( 'Error uninstalling your custom font pack. Try again. If the error persists you will have to delete the file manually.' , 'wp-svg-icons' )
				);
				wp_localize_script( 'wp-svg-delete-custom-pack', 'translation_array', $translation_array );
				wp_enqueue_script( 'wp-svg-delete-custom-pack' );
				// jquery dropdown scripts
				wp_register_script( 'wp-svg-jquery-dropdown',  plugin_dir_url(__FILE__).'js/jquery.dropdown.min.js');	
				wp_enqueue_script( 'wp-svg-jquery-dropdown' );
			}			

			// jquery dropdown styles
			wp_register_style( 'wp-svg-jquery-dropdown-style',  plugin_dir_url(__FILE__).'css/jquery.dropdown.css');	
			wp_enqueue_style( 'wp-svg-jquery-dropdown-style' );
				
		}
				
	}
	
	/*
	*	Enqueue scripts on nav menu page
	*/
	function enqueue_custom_nav_scripts_on_nav_menu_page() {
		$screen_base = get_current_screen()->base;
		// load jQuery dropdown on nav menu, to add our icons to the menu
		if( $screen_base == 'nav-menus' ) {
			// scripts			
			wp_register_script( 'wp-svg-icon-dropdown' , plugin_dir_url(__FILE__).'js/bootstrap-select.min.js' , array( 'jquery' ), 'all' );
			wp_enqueue_script( 'wp-svg-icon-dropdown' );
						
			wp_register_script( 'custom-icon-menu-script' , plugin_dir_url(__FILE__).'js/custom-icon-menu-script.js' , array( 'jquery' , 'jquery-ui-core', 'jquery-ui-selectable' ), 'all'  );
			wp_enqueue_script( 'custom-icon-menu-script' );
			
			//styles
			wp_register_style( 'wp-svg-icon-dropdown-styles',  plugin_dir_url(__FILE__).'css/bootstrap-select.min.css');	
			wp_enqueue_style( 'wp-svg-icon-dropdown-styles' );
			
			wp_register_style( 'bootstrap-dropdown-css',  plugin_dir_url(__FILE__).'css/bootstrap.css');	
			wp_enqueue_style( 'bootstrap-dropdown-css' );
			
			// load our custom icons!
			$this->enqueue_custom_icons();
			
		}
	}
		
	function enqueue_custom_icons() {
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
	
	
	/* 
	*	Custom Pack Already Installed Admin Notification Error 
	*/
	function wp_svg_customPack_installed_error() {
			$page_base = get_current_screen()->base;
			if ( $page_base == 'wp-svg-icons_page_wp-svg-icons-custom-set' ) {
					$dest = wp_upload_dir();
					$dest_path = $dest['path'];
						// if a file exists print the error on the custom pack upload page
						if ( file_exists( $dest_path . '/wp-svg-custom-pack.zip' ) ) {
							 ?>
							 <script>
								 jQuery(document).ready(function() { 
									jQuery(".wp-svg-custom-pack-preloader").show(); 
									jQuery(".svg-custom-pack-buttons").after("<div class=error><p><?php _e('You already have a font pack installed. If you want to install a new font pack, you must first uninstall the current one.','wp-svg-icons'); ?></p></div>");  
									 jQuery(".preview-icon-code-box").show(); 
									 jQuery( '#uninstall-pack-button' ).removeAttr( 'disabled' );
									 jQuery(".dropDownButton").removeAttr("disabled"); 
									 jQuery("#wp_svg_custom_pack_field").attr("disabled","disabled"); 
									 jQuery("input[value=Import]").attr("disabled","disabled");
									 
									jQuery.get( "<?php echo site_url(); ?>/wp-content/uploads/wp-svg-icons/custom-pack/demo.html", function( data ) {
										jQuery( ".current-font-pack" ).html( data );
									});
										
									jQuery.get("<?php echo site_url(); ?>/wp-content/uploads/wp-svg-icons/custom-pack/style.css", function( data ) { 
										jQuery("head").append("<style>"+data+"</style>"); 
									}); 
										
								});
							 </script>
							 <?php						
						} else { 
							/*
							* Custom icon pack does not exist...
							*/
							?>
							<script>
								jQuery(document).ready(function() { 
									jQuery(".wp-svg-custom-pack-preloader").hide(); 
									jQuery("#uninstall-pack-button").attr("disabled","disabled"); 
									jQuery("#dropDownButton").attr("disabled","disabled"); });
							</script>
							<?php
						}
				}	
			}
	
	
	/* 
		Function To Recursively Delete an entire directory 
	*/
	public function recursive_delete_directory( $dir ) { 
		   if ( is_dir( $dir ) ) { 
			 $objects = scandir( $dir ); 
			 foreach ($objects as $object ) { 
			   if ( $object != "." && $object != ".." ) { 
				 if ( filetype( $dir."/".$object) == "dir" ) $this->recursive_delete_directory( $dir."/".$object); else unlink( $dir."/".$object ); 
			   } 
			 } 
			 reset( $objects ); 
			 rmdir( $dir ); 
		 } 
	} 
	
	/* 
		wp_svg_icons_stop_bugging_me()
		Remove the Review us notification when user clicks 'Dismiss'
		@since v3.1.1
	*/
	public function wp_svg_icons_stop_bugging_me() {
		$nobug = "";
		if ( isset( $_GET['wp_svg_icons_nobug'] ) ) {
			$nobug = esc_attr( $_GET['wp_svg_icons_nobug'] );
		}
		if ( 1 == $nobug ) {
			add_option( 'wp_svg_icons_review_stop_bugging_me', TRUE );
		}
	}
			
	/*
		wp_svg_icons_check_installation_date()
		checks the user installation date, and adds our action 
		- if it's past 2 weeks we ask the user for a review :)
		@since v3.1.1
	*/
	public function wp_svg_icons_check_installation_date() {	
		
		// add a new option to store the plugin activation date/time
		// @since v3.1.1
		// this is used to notify the user that they should review after 2 weeks
		if ( !get_option( 'wp_svg_icons_activation_date' ) ) {
			add_option( 'wp_svg_icons_activation_date', strtotime( "now" ) );
		}
		
		$stop_bugging_me = get_option( 'wp_svg_icons_review_stop_bugging_me' );
		
		if( !$stop_bugging_me ) {
			$install_date = get_option( 'wp_svg_icons_activation_date' );
			$past_date = strtotime( '-14 days' );
			if ( $past_date >= $install_date && current_user_can( 'install_plugins' ) ) {
				add_action( 'admin_notices', array( &$this , 'wp_svg_icons_display_review_us_notice' ) );
			}
		}
		
	}
				
	/* 
		Display our admin notification
		asking for a review, and for user feedback 
		@since v3.1.1
	*/
	public function wp_svg_icons_display_review_us_notice() {	
		/* Lets only display our admin notice on YT4WP pages to not annoy the hell out of people :) */
		if ( in_array( get_current_screen()->base , array( 'dashboard' , 'toplevel_page_wp-svg-icons' , 'wp-svg-icons_page_wp-svg-icons-custom-set' , 'wp-svg-icons_page_wp_svg_icons' , 'wp-svg-icons_page_wp-svg-icons-upgrade' , 'post' ) ) ) {
			// Review URL - Change to the URL of your plugin on WordPress.org
			$reviewurl = 'https://wordpress.org/support/view/plugin-reviews/svg-vector-icon-plugin';
			$go_pro_url = 'https://www.evan-herman.com/wp-svg-icons-pro/';
			$nobugurl = add_query_arg( 'wp_svg_icons_nobug', '1', admin_url() );
			global $current_user;
			get_currentuserinfo();
			if ( '' != $current_user->user_firstname ) {
				$review_message = '<p>' . sprintf( __( "Hey" , "wp-svg-icons" ) . " " . $current_user->user_firstname . __( ", You've been using" , "wp-svg-icons" ) . " <strong>WP SVG Icons</strong> " . __( "for 2 weeks now. We certainly hope you're enjoying the power and all the features packed into the free version.  If so, leave us a review, we'd love to hear what you have to say. If you're really enjoying the plugin, consider upgrading to the pro version for some added features and premium support." , "wp-svg-icons" ) . "<br /><br /> <span class='button-container'> <a href='%s' target='_blank' class='button-secondary'>" . __( "Leave A Review" , "wp-svg-icons" ) . "</a> <a href='%s?utm_source=wps-svg-icons-2week-notice&utm_medium=button&utm_campaign=wp-svg-icons-2week-notice' target='_blank' class='button-secondary'>" . __( "Upgrade to Pro" , "wp-svg-icons" ) . "</a> <a href='%s' class='button-secondary'>" . __( "Dismiss" , "wp-svg-icons" ) . "</a> </span>", $reviewurl, $go_pro_url, $nobugurl ) . '</p>';
			} else {
				$review_message = '<p>' . sprintf( __( "Hey there, it looks like you've been using" , "wp-svg-icons" ) . " <strong>WP SVG Icons</strong> " . __( "for 2 weeks now. We certainly hope you're enjoying the power and all the features packed into the free version.  If so, leave us a review, we'd love to hear what you have to say. If you're really enjoying the plugin, consider upgrading to the pro version for some added features and premium support." , "wp-svg-icons" ) . "<br /><br /> <span class='button-container'> <a href='%s' target='_blank' class='button-secondary'>" . __( "Leave A Review" , "wp-svg-icons" ) . "</a> <a href='%s?utm_source=wps-svg-icons-2week-notice&utm_medium=button&utm_campaign=wp-svg-icons-2week-notice' target='_blank' class='button-secondary'>" . __( "Upgrade to Pro" , "wp-svg-icons" ) . "</a> <a href='%s' class='button-secondary'>" . __( "Dismiss" , "wp-svg-icons" ) . "</a> </span>", $reviewurl, $go_pro_url, $nobugurl ) . '</p>';
			}
			?>
				<style>#review-wp-svg-icons,#social-icons{display:none;}</style>
				<div id="review-wp-svg-icons-notice">
					<?php echo $review_message; ?>
				</div>
			<?php
		}
	}
	
				
						
} // end Class