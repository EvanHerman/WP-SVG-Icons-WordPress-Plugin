<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}

$screen = get_current_screen();

?>

	<div class="svg-custom-upload-wrap wrap" style="min-width:900px;">

				<?php if( 'wp-svg-icons_page_wp-svg-icons-custom-set ' === $screen->base ) { ?>
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
				<?php } ?>

				<!-- get uploaded file, unzip .zip, store files in appropriate locations, populate page with custom icons -->
				<!-- wp_handle_upload ( http://codex.wordpress.org/Function_Reference/wp_handle_upload ) -->
				<?php

					if ( isset( $_FILES['custom_icon_pack'] ) ) {

						/*
							Validate our nonce for security reasons
							@since 3.1.8.2
						*/
						if( ! check_admin_referer( 'validate_wp_svg_icons', 'wp_svg_icons_upload_validation' ) ) {
							wp_die( __( 'Sorry, your nonce did not verify. Please try again.', 'wp-svg-icons' ) );
							exit;
						}


						$uploadedfile = $_FILES['custom_icon_pack'];
						$upload_overrides = array( 'test_form' => false );

						$filename = $uploadedfile['name'];
						$break = explode('.', $filename);
						$count = count( $break );
						$file_extension = $break[intval( $count - 1 )];

						if( $file_extension != 'zip' ) {
							?>
									<style>
										#social-icons, #review-wp-svg-icons { display: none; }
									</style>
									<div class="error">
										<p><?php _e( "There was a problem importing the file. Ensure that you are uploading a .zip file.", "wp-svg-icons" ); ?></p>
										<p><?php _e( "There was a problem with the file you uploaded. Make sure that you're uploading a .zip file from","wp-svg-icons"); echo " <a href='https://icomoon.io/app/#/select' target='_blank'>icomoon</a>. ";  _e( "If you're still having issues, please contact support.", "wp-svg-icons" ); ?></p>
										<p>
											<a class="button-secondary" href="<?php echo admin_url(); ?>/admin.php?page=wp-svg-icons-custom-set"><?php _e( 'Try again' , 'wp-svg-icons' ); ?></a>
											<a class="button-secondary" href="https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/" target="_blank"><?php _e( 'Support' , 'wp-svg-icons' ); ?></a>
										</p>
									</div>
							<?php
							exit();
						}

						// move the file to the custom upload path set above on line 63
						$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
						if( is_wp_error( $movefile ) ) {
							$error_string = $movefile->get_error_message();
							wp_die( '<div id="message" class="error"><p>' . $error_string . '</p></div>' );
						}

						// if upload was successful
						if ( $movefile ) {

							echo '<script>
											jQuery(document).ready(function() {
												jQuery(".preview-icon-code-box").show();
												jQuery(".wp-svg-custom-pack-preloader").show();
												jQuery("#uninstall-pack-button").removeAttr("disabled");
												jQuery("#wp_svg_custom_pack_field").attr("disabled","disabled");
												jQuery("input[value=Import]").attr("disabled","disabled");
												jQuery(".svg-custom-pack-buttons").after("<div class=updated><p class=fontPackUploadedSuccess>' . __( "Custom font pack successfully uploaded!" , "wp-svg-icons" ) . '</p></div>");
											});
										</script>';

							// unzip the file contents to the same directory
							WP_Filesystem();

							$dest = wp_upload_dir();
							$dest_path = $dest['path'];
							$fileNameNoSpaces = str_replace(' ', '-',$uploadedfile['name']);

							$unzipfile = unzip_file( $dest_path.'/'.$fileNameNoSpaces, $dest_path );
							if( is_wp_error( $unzipfile ) ) {
								?>
								<style>
									#social-icons, #review-wp-svg-icons { display: none; }
								</style>
								<?php
								$error_string = $unzipfile->get_error_message();
								if( $error_string = 'Incompatible Archive.' ) {
									if (function_exists('is_multisite') && is_multisite()) {
										$error_string .= " This looks like a multi-site install. You'll want to head into the <a href='" . admin_url( 'network/settings.php#upload_filetypes' ) . "' title='Network Admin Settings'>network settings</a> page and add 'zip' to the list of acceptable upload file types.";
									}
								}
								wp_die( '<div id="message" class="error"><p>' . $error_string . '</p></div>' );
							}

							if ( $unzipfile ) {

								// check for the json file
								// to ensure we've got a icomoon .zip
								if( !file_exists( $dest_path.'/'.'selection.json' ) ) {
									echo $dest_path.'/'.'selection.json';
										?>
											<style>
												#social-icons, #review-wp-svg-icons { display: none; }
											</style>
											<div class="error">
												<p><?php _e( "There was a problem with the file you uploaded. Make sure that you're uploading a .zip file from","wp-svg-icons"); echo " <a href='https://icomoon.io/app/#/select' target='_blank'>icomoon</a>. ";  _e( "If you're still having issues, please contact support.", "wp-svg-icons" ); ?></p>
												<p>
													<a class="button-secondary" href="<?php echo admin_url(); ?>/admin.php?page=wp-svg-icons-custom-set"><?php _e( 'Try again' , 'wp-svg-icons' ); ?></a>
													<a class="button-secondary" href="https://www.evan-herman.com/wordpress-plugin/wp-svg-icons/" target="_blank"><?php _e( 'Support' , 'wp-svg-icons' ); ?></a>
												</p>
											</div>
									<?php
									// delete the files from the directory
									wp_svg_icons_delete_entire_directory( $dest_path );
									exit();
								}


								// rename the initial .zip file
								$test_rename_zip = rename($dest_path.'/'.$fileNameNoSpaces,$dest_path.'/'.'wp-svg-custom-pack.zip');
								// rename the json file that comes with icomoon files
								$test_rename_json = rename($dest_path.'/'.'selection.json',$dest_path.'/'.'wp-svg-custom-pack.json');

								$file = $dest_path.'/demo.html';

								// Open the file to get existing content
								$current = file_get_contents($file);

								// remove the link tags
								// for css and js files that are not needed any more
								$current = str_replace('<link rel="stylesheet" href="demo-files/demo.css">','',$current);
								$current = str_replace('<link rel="stylesheet" href="style.css"></head>','',$current);
								$current = str_replace('<script src="demo-files/demo.js"></script>','',$current);
								$current = str_replace( 'icon-' , 'wp-svg-custom-' , $current );

								// Write the contents back to the file
								$file_put_contents = file_put_contents($file, $current);

								// change path of linked font files in style.css
								$styleCSS = $dest_path.'/style.css';
								$currentStyles = file_get_contents($styleCSS);

								// remove the link tags
								// for css and js files that are not needed any more
								$newStyles = str_replace( "url('fonts/" , "url( '" . site_url() . "/wp-content/uploads/wp-svg-icons/custom-pack/fonts/" , $currentStyles );
								$newStyles = str_replace( 'icon-' , 'wp-svg-custom-' , $newStyles );

								// Write the contents back to the file
								$file_put_contents = file_put_contents($styleCSS, $newStyles);

								// delete unecessary files
								if ( file_exists( $dest_path . '/demo-files' ) ) {
									$admin_class = new WP_SVG_Icons_Admin( 'wp-svg-icons' , '1.0' );
									$admin_class->recursive_delete_directory($dest_path.'/demo-files');
								}

								// delete the readme file
								if ( file_exists( $dest_path . '/Read Me.txt' ) ) {
									unlink($dest_path.'/Read Me.txt');
								}

								// display success message
								// disable file upload field
								echo '<script>jQuery(document).ready(function() { jQuery(".dropDownButton").removeAttr("disabled"); jQuery(".fontPackUploadedSuccess").parent("div").after("<div class=updated><p class=fontPackSuccessUnzip>' . __( "Custom font pack successfully unzipped!" , "wp-svg-icons" ) . '</p></div>"); });</script>';

								echo '<script>jQuery(document).ready(function() { jQuery(".fontPackSuccessUnzip").parent("div").after("<div class=updated><p>' . __( "Custom font pack successfully installed, enjoy!" , "wp-svg-icons" ) . '</p></div>"); setTimeout(function() { jQuery(".updated").fadeOut(); }, 5000); });</script>';

								// ajax get demo.html file
								// ajax get style.css file and append to head to show icons
								echo '<script>
											jQuery(document).ready(function() {
												jQuery(".current-font-pack").load("'.site_url().'/wp-content/uploads/wp-svg-icons/custom-pack/demo.html");
												jQuery.get("'.site_url().'/wp-content/uploads/wp-svg-icons/custom-pack/style.css", function( data ) {
													jQuery("head").append("<style>"+data+"</style>");
												});
											});
										</script>';


							} else { // error unzipping the file
								echo '<script>jQuery(document).ready(function() { jQuery(".fontPackUploadedSuccess").parent("div").after("<div class=error><p>' . __( "There was a problem unzipping the file." , "wp-svg-icons" ) . '</p></div>"); });</script>';
							}

						} else { // error importing the file
							echo '<script>jQuery(document).ready(function() { jQuery(".svg-custom-pack-buttons").after("<div class=error><p class=fontPackUploadedError>' . __( "There was a problem importing the file.", "wp-svg-icons" ) . '</p></div>"); });</script>';
						}

					}
				?>


		<h1 class="wp-svg-title"><span style="color:#FF8000;">WP SVG Icons</span> | <?php _e( 'Import a Custom Icon Pack' , 'wp-svg-icons' ); ?></h1>

		<p><?php _e( 'Welcome to the highly requested Custom Font Pack section! Use the importer below to import custom icon packs downloaded from' , 'wp-svg-icons' ); ?> <a href="http://icomoon.io/app/#/select" target="_blank">IcoMoon</a>.</p>
		<p><?php _e( 'For a step-by-step tutorial on how to download and install a custom icon pack visit the' , 'wp-svg-icons' ); ?> <a href="https://www.evan-herman.com/wp-svg-icons/#customPackUploader" target="_blank"><?php _e( 'plugin site' , 'wp-svg-icons' ); ?></a>.</p>
		<p><span style="font-size:11px; color: #EE3B3B;"><?php _e( 'Note:' , 'wp-svg-icons' ); ?></span> <?php _e( 'Only one icon pack may be active at a time.' , 'wp-svg-icons' ); ?></p>
		<p><span style="font-size:11px; color: #EE3B3B;"><?php _e( 'Note:' , 'wp-svg-icons' ); ?></span> <?php _e( 'If you install a new icon pack, and your old icons appear you may need to empty your browsers cache.' , 'wp-svg-icons' ); ?></p>

		<script>
			var run_interval = null;

			jQuery(document).ready(function() {

				// check if the pack has loaded
				run_interval = setInterval(function() {
					// console.log( jQuery( '.current-font-pack' ).children().length );
					if( jQuery( '.glyph' ).length <= 10 ) {
						return;
						// re-run the interval
					} else {
						var num_icons = jQuery( '.current-font-pack' ).find( '.glyph' ).length;
						var i = 1;
						jQuery( '.glyph' ).each( function() { if( i > 10 ) { jQuery( this ).remove();}i++; });
						jQuery( '.ten-icon-limit-reached' ).show();
						var fontNameString = jQuery(".mhmm").text();
						var newfontNameString = fontNameString.replace("Font Name:","");
						var customPackFontName = newfontNameString.split("(")[0];
						var customPackFontName = jQuery.trim(customPackFontName);
						// replace - with a space, just for looks sake
						var custom_font_pack_title = jQuery( '.current-font-pack' ).find( 'h1' ).first().html( function(index, text) {
							return text.replace( /-/g , " ");
						});
						jQuery('.downloadFontZipLink').parent('li').find('img').remove();
						jQuery('.downloadFontZipLink').text('Download '+customPackFontName+'.zip');
						jQuery('.downloadFontjSonLink').parent('li').find('img').remove();
						jQuery('.downloadFontjSonLink').text('Download '+customPackFontName+'.json');
					}

					clearInterval(run_interval);
					// kill off the interval, once we've got it

				}, 50);

				jQuery('body').on( 'click', '.glyph', function() {

					jQuery('.glyph').removeClass("selected");
					jQuery(this).addClass("selected");

					var glyphCode = jQuery(this).find('.mls').text();
					var glyphCode = jQuery.trim(glyphCode);

					//console.log(glyphCode);
					jQuery('.wp-svg-icon-preview').remove();
					jQuery('.wp-svg-icon-preview-box > i').after("<b class='wp-svg-icon-preview'><div class='"+glyphCode+" previewIcon' style='display:none;'></div></b>");
					jQuery('.previewIcon').fadeIn();

					<?php if( get_current_screen()->base != 'wp-svg-icons_page_wp-svg-icons-custom-set' ) { ?>
						var iconClass = jQuery( '.custom-pack-container-ajax' ).find( '.glyph.selected' ).find( 'span:first-child' ).attr( 'class' );
						var selectedIconWrapper = jQuery( '.selected-element-wrap' ).attr( 'alt' );
					<?php } else { ?>
						var iconClass = jQuery( '.current-font-pack' ).find( '.glyph.selected' ).find( 'span:first-child' ).attr( 'class' );
						iconClass = iconClass.replace( 'wp-svg-custom-' , '' );
						var selectedIconWrapper = '<?php echo get_option( 'wp_svg_icons_defualt_icon_container' , 'i' ); ?>';
					<?php } ?>
					jQuery('.copy_paste_input').val('[wp-svg-icons custom_icon="'+iconClass.trim()+'" wrap="'+selectedIconWrapper+'"]');

				});

			});
		</script>

		<style>
		.dropdown-menu img {
			display:block;
			width:15px;
			margin:0 auto;
		}
		.ptl { min-width:540px; }
		#wpbody-content { min-width:900px; }


		.dropdown-menu .downloadFontZipLink { padding: 4px 25px !important; background-image: url("<?php echo plugin_dir_url( __FILE__ );?>../../includes/images/zip-icon-small.png");background-repeat:no-repeat; background-size:13px 16px; background-position:6px 4px; }
		.dropdown-menu .downloadFontjSonLink { padding: 4px 25px !important; background-image: url("<?php echo plugin_dir_url( __FILE__ );?>../../includes/images/json-icon-small.png");background-repeat:no-repeat; background-size:13px 16px; background-position:6px 4px; }
		#uninstall-pack-button { background-image: url("<?php echo plugin_dir_url( __FILE__ );?>../../includes/images/trash-icon-small.png") !important;background-repeat:no-repeat !important; background-size:13px 14px !important; background-position:6px 6px !important; }
		</style>

		<!-- file upload input field -->
		<!-- Handling Custom Font Pack Uploads -->
		<!-- currently uploads to Uploads > WP SVG Icons > Custom Pack -->
		<form id="wp_svg_icons_upload_custom_pack_form" enctype="multipart/form-data" action="" method="POST">
			<?php
				/* Security Nonces */
				wp_nonce_field( 'validate_wp_svg_icons', 'wp_svg_icons_upload_validation' );
			?>
			<p id="async-upload-wrap" style="margin-bottom:0;">
				<label for="async-upload"><?php _e( 'Import a Custom Font Pack' , 'wp-svg-icons' ); ?> :</label><br />
				<input type="file" id="wp_svg_custom_pack_field" name="custom_icon_pack" required="required">
					<p style="margin:0;">
						<span class="custom-icons-file-upload-note"><?php _e( 'note: file must be a .zip downloaded from icomoon' , 'wp-svg-icons' ); ?><span>
					</p>
				<span class="svg-custom-pack-buttons">
				<p>
				<?php
					// print form submission button
					echo submit_button( 'Import', 'primary', '', false, '' );
				?>
				</p>
				<p style="margin-left:1em;">
				<?php
					$other_attributes = array( 'onclick' => 'wp_svg_uninstall_font_pack(); return false;' , 'disabled' => 'disabled' );
					echo submit_button( '&nbsp;&nbsp;&nbsp;&nbsp;' . __( "Uninstall Pack" , "wp-svg-icons" ) , 'delete', 'uninstall-pack-button', false, $other_attributes );
					$dest = wp_upload_dir();
					$dest_url = $dest['url'];
					$dest_path = $dest['path'];
				?>
				</p>

				<p style="margin-left:1em;">
					<a style="height:28px; background-image: url('<?php echo plugin_dir_url( __FILE__ );?>../../includes/images/download-icon-small.png') !important;background-repeat:no-repeat !important; background-size:13px 14px !important;background-position:6px 6px !important" href="#" onclick="return false;" data-dropdown="#dropdown-1" class="dropDownButton button-secondary" disabled="disabled"><?php _e( 'Download' , 'wp-svg-icons' ); ?></a>
				</p>

				<?php if ( file_exists( $dest_path.'/wp-svg-custom-pack.zip' ) ) { ?>
					<!-- jquery download dropdown menu -->
					  <div id="dropdown-1" class="dropdown dropdown-anchor-left dropdown-tip">
							<ul class="dropdown-menu">
								<li>
									<a class="downloadFontZipLink" href="<?php echo $dest_url.'/wp-svg-custom-pack.zip'; ?>">Download .zip</a>
								</li>
								<li class="dropdown-divider"></li>
								<li>
									<a title="<?php _e( 'You can use this .json file to export your custom icon pack back into icomoon and then add or remove icons as you please' , 'wp-svg-icons' ); ?>" class="downloadFontjSonLink" download="wp-svg-custom-pack.json" href="<?php echo $dest_url.'/wp-svg-custom-pack.json'; ?>">Download .json</a>
								</li>
							</ul>
						</div>
				<?php } ?>

				</span>
				<!-- display success or error message after font pack deletion -->
				<p id="delete_succes_and_error_message"></p>
				<p id="unzip_succes_and_error_message"></p>
			</p>
		</form>

		<div class="preview-icon-code-box">
			<div class="wp-svg-icon-preview-box">
				<i style="font-size:14px;" class="copy-paste-text"><?php _e( 'Icon Preview:' , 'wp-svg-icons' ); ?></i>
			</div>
			<p style="color: #EE3B3B;"><?php _e( 'Shortcode:' , 'wp-svg-icons' ); ?></p>
			<input class="copy_paste_input" style="padding-left:0;width:100%;border-radius:3px;border:1px solid rgba(255, 128, 0, 0.51);box-shadowinset 0 1px 2px rgba(0,0,0,.07);" readonly="" type="text" value='[wp-svg-icons icon="" wrap=""]'>
		</div>

		<section class="ten-icon-limit-reached" style="display:none;margin:2em 0;text-align:center;font-size:15px;color:rgb(238, 110, 81);padding:10px;">
			<span class="dashicons dashicons-welcome-comments"></span> <?php _e( "It looks like you're trying to install and use more than 10 icons. Unfortunately the free version limits the number of custom icons to 10. If you'd like to access more than 10 custom icons, please consider upgrading to the", 'wp-svg-icons' ); ?> <a href="https://www.wpicons.com/?discount=LITEUPGRADE&utm_source=wp-plugin&utm_medium=icon-limit-notice&utm_campaign=lite-upgrade" target="_blank" title="<?php _e( 'Upgrade to pro' , 'wp-svg-icons' ); ?>"><?php _e( 'Pro Version' , 'wp-svg-icons' ); ?></a>
		</section>

		<div class="current-font-pack">
			<!-- scandir, or some other php function to loop through the upload directory to check if any files exist -->
			<!-- if files exist, list the files meta data. if user uploads new files, warn them the will overwrite active fonts, delete old font files, move new font files, ajax load font-file html files -->
			<img style="display:none;" class="wp-svg-custom-pack-preloader" src="<?php echo site_url().'/wp-admin/images/wpspin_light.gif'?>" alt="preloader">
		</div>

		<!-- plugin footer -->
		<?php
			if ( file_exists( $dest_path.'/wp-svg-custom-pack.zip' ) ) {
				$fontPackLocationString = __( 'Your Custom Icon Pack is located in' , 'wp-svg-icons' ) . ' : ';
			} else {
				$fontPackLocationString = __( 'Your Custom Icon Pack will be installed to' , 'wp-svg-icons' ) . ' : ';
			}
		?>

		<footer style="padding-left:0;margin-left:0; width: 100%;">
			<p style="float:left;"><?php _e( 'Plugin Created By' , 'wp-svg-icons' ); ?> <a style="color:#B35047;" href="https://www.evan-herman.com" target="_blank">Evan Herman</a></p><p style="float:right;"><?php echo $fontPackLocationString.'<b>'.$dest_path.'</b>'; ?></p>
		</footer>
	</div>
<?php

/*
	Function To Recursively Delete an entire directory
	used on fail upload/rename
*/
function wp_svg_icons_delete_entire_directory( $dir ) {
	if ( is_dir( $dir ) ) {
		$objects = scandir( $dir );
		foreach ($objects as $object ) {
			if ( $object != "." && $object != ".." ) {
				if ( filetype( $dir."/".$object) == "dir" ) wp_svg_icons_delete_entire_directory( $dir."/".$object); else unlink( $dir."/".$object );
			}
		}
		reset( $objects );
		rmdir( $dir );
	}
}
