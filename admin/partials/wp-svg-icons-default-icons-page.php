<?php

$screen = get_current_screen();

?>

<script>
jQuery( document ).ready( function() {
	if( jQuery( '#TB_ajaxContent' ).is( ':visible' ) ) {
		jQuery( '.how-to-use' ).css( 'margin-bottom' , '20px' );
		jQuery( '#wp-svg-nav-tab-wrapper' ).show();
	}
});
</script>

<style>
#TB_ajaxContent {
	display: block;
	width: auto !important;
	height: 94% !important;
}
.mls { display: none !important; }
::selection { background: #FF8000; }
</style>

	<!-- display our icons and stuff -->
	<div class="wrap wp-svg-icons-wrap">

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

		<div class="w-main centered">

			<h1 class="wp-svg-title"><span style="color:#FF8000;">WP SVG Icons</span> | <?php _e( "Default Icon Pack" , "wp-svg-icons" ); ?></h1>
			<h4><?php _e( "These icons are scaleable vector graphics, meaning you can set them to whatever size you want with out any loss in quality." , "wp-svg-icons" ); ?> <span style="color:#FF8000;"><?php _e( "Enjoy!" , "wp-svg-icons" ); ?></span></h4>

			<div class="help-boxes" >

				<div class="how-to-use">

					<?php $selected = get_option( 'wp_svg_icons_defualt_icon_container' , 'i' ); ?>

					<section class="wp-svg-how-to-use-container">
						<h3 style="padding-left:10px;"><?php _e( "How to use:" , "wp-svg-icons" ); ?></h3>
						<ul style="margin-left:35px; list-style-type:square; margin-bottom: 20px;">
							<li><?php _e( "Step 1: Locate and click the icon you want to use." , "wp-svg-icons" ); ?></li>
							<li><?php _e( "Step 2: Select the element to wrap your icon with." , "wp-svg-icons" ); ?></li>
							<span class="element_selection_container">
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'h1' ) { echo ' selected-element-wrap'; } ?>" alt="h1">h1</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'h2' ) { echo ' selected-element-wrap'; } ?>" alt="h2">h2</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'h3' ) { echo ' selected-element-wrap'; } ?>" alt="h3">h3</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'span' ) { echo ' selected-element-wrap'; } ?>" alt="span">span</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'div' ) { echo ' selected-element-wrap'; } ?>" alt="div">div</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'i' ) { echo ' selected-element-wrap'; } ?>" alt="i">i</a>
								<a href="#" onclick="return false;" class="button-secondary icon-wrapper<?php if ( $selected === 'b' ) { echo ' selected-element-wrap'; } ?>" alt="b">b</a>
							</span>
							<li><?php _e( "Step 3: Click 'Insert Icon' on a post or page, or use the generated shortcode anywhere on your site, or in any template file." , "wp-svg-icons" ); ?></li>
							<!-- copy paste input field -->
							<li style="list-style-type:none !important; display:block;margin-top:.75em;">
								<i style="color:red;"><?php _e( 'Shortcode:' , 'wp-svg-icons' ); ?></i>
								<div class="copy_paste_input" style="padding-left:0;width:100%;resize:none;" contentEditable="true">[wp-svg-icons icon="<?php _e( 'icon-name' , 'wp-svg-icons' ); ?>" wrap=""]</div>
							</li>
							<li style="list-style:none;margin-top:1em;display:none;" id="advanced-attr-toggle-list-item">
								<a href="#" class="button-secondary" id="advanced-shortcode-attr-toggle" onclick="jQuery('#advanced-shortcode-attr-list').slideToggle();jQuery(this).toggleClass('yes-adv-attr');return false;"><?php _e( "Advanced Attributes" , "wp-svg-icons" ); ?></a>
							</li>
						</ul>

					</section>

					<!-- preview box -->
					<div class="wp-svg-icon-preview-box default-icons">
						<i style="font-size:14px;" class="copy-paste-text"><?php _e( 'Icon Preview:' , 'wp-svg-icons' ); ?></i><b class="wp-svg-icon-preview"></b>
					</div>

					<section style="float:left;width:100%;">

						<!-- insert the code into a post or page -->
						<a href="#" onclick="insert_wp_SVG_icon_to_editor();" class="button-primary insert-wp-svg-icon" style="display: none;"><?php _e( 'Insert Icon' , 'wp-svg-icons' ); ?></a>

					</section>


				</div>	<!-- end how to use -->

			</div><!-- end help boxes -->

				<!-- tabs, to switch between default and custom packs on edit.php -->
				<h2 class="nav-tab-wrapper" id="wp-svg-nav-tab-wrapper" style="display:none;">
					<a href="#" class="nav-tab default-icon-pack nav-tab-active" onclick="show_defualt_pack( this );"><?php _e( 'Default Pack' , 'wp-svg-icons' ); ?></a>
					<a href="#" class="nav-tab custom-pack-tab" onclick="load_custom_pack( this );"><?php _e( 'Custom Pack' , 'wp-svg-icons' ); ?></a>
				</h2>

			<div class="wp-svg-iconset1-all-glyphs" style="display:inline-block; margin-top:1em; ">

				<section class="mtm clearfix" id="glyphs">

					<div class="glyph glyph-demo">
						<span class="mls">wp-svg-home</span>
						<div class="fs1 home" aria-hidden="true" data-icon="&#xe000;" ></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe000;"> </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-home-2 </span>
						<div class="fs1 home-2" aria-hidden="true" data-icon="&#xe001;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe001;"> </a>
					</div>


					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-home-3 </span>
						<div class="fs1 home-3" aria-hidden="true" data-icon="&#xe002;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe002;"> </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-office </span>
						<div class="fs1 office" aria-hidden="true" data-icon="&#xe003;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe003;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-newspaper </span>
						<div class="fs1 newspaper" aria-hidden="true" data-icon="&#xe004;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe004;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pencil </span>
						<div class="fs1 pencil" aria-hidden="true" data-icon="&#xe005;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe005;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pencil-2 </span>
						<div class="fs1 pencil-2" aria-hidden="true" data-icon="&#xe006;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe006;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-quill </span>
						<div class="fs1 quill" aria-hidden="true" data-icon="&#xe007;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe007;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pen </span>
						<div class="fs1 pen" aria-hidden="true" data-icon="&#xe008;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe008;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-blog </span>
						<div class="fs1 blog" aria-hidden="true" data-icon="&#xe009;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe009;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-droplet </span>
						<div class="fs1 droplet" aria-hidden="true" data-icon="&#xe00a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-image </span>
						<div class="fs1 image" aria-hidden="true" data-icon="&#xe00c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-image-2 </span>
						<div class="fs1 image-2" aria-hidden="true" data-icon="&#xe00d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-images </span>
						<div class="fs1 images" aria-hidden="true" data-icon="&#xe00e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-camera </span>
						<div class="fs1 camera" aria-hidden="true" data-icon="&#xe00f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-music </span>
						<div class="fs1 music" aria-hidden="true" data-icon="&#xe010;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe010;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-headphones </span>
						<div class="fs1 headphones" aria-hidden="true" data-icon="&#xe011;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe011;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-play </span>
						<div class="fs1 play" aria-hidden="true" data-icon="&#xe012;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe012;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-film </span>
						<div class="fs1 film" aria-hidden="true" data-icon="&#xe013;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe013;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-camera-2 </span>
						<div class="fs1 camera-2" aria-hidden="true" data-icon="&#xe014;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe014;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-dice </span>
						<div class="fs1 dice" aria-hidden="true" data-icon="&#xe015;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe015;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pacman </span>
						<div class="fs1 pacman" aria-hidden="true" data-icon="&#xe016;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe016;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-spades </span>
						<div class="fs1 spades" aria-hidden="true" data-icon="&#xe017;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe017;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-clubs </span>
						<div class="fs1 clubs" aria-hidden="true" data-icon="&#xe018;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe018;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-diamonds </span>
						<div class="fs1 diamonds" aria-hidden="true" data-icon="&#xe019;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe019;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pawn </span>
						<div class="fs1 pawn" aria-hidden="true" data-icon="&#xe01a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-bullhorn </span>
						<div class="fs1 bullhorn" aria-hidden="true" data-icon="&#xe01b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01b;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-connection </span>
						<div class="fs1 connection" aria-hidden="true" data-icon="&#xe01c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-podcast </span>
						<div class="fs1 podcast" aria-hidden="true" data-icon="&#xe01d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-feed </span>
						<div class="fs1 feed" aria-hidden="true" data-icon="&#xe01e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-book </span>
						<div class="fs1 book" aria-hidden="true" data-icon="&#xe01f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-books </span>
						<div class="fs1 books" aria-hidden="true" data-icon="&#xe020;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe020;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-library </span>
						<div class="fs1 library" aria-hidden="true" data-icon="&#xe021;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe021;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-file </span>
						<div class="fs1 file" aria-hidden="true" data-icon="&#xe022;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe022;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-profile </span>
						<div class="fs1 profile" aria-hidden="true" data-icon="&#xe023;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe023;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-file-2 </span>
						<div class="fs1 file-2" aria-hidden="true" data-icon="&#xe024;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe024;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-file-3 </span>
						<div class="fs1 file-3" aria-hidden="true" data-icon="&#xe025;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe025;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-file-4 </span>
						<div class="fs1 file-4" aria-hidden="true" data-icon="&#xe026;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe026;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-copy </span>
						<div class="fs1 copy" aria-hidden="true" data-icon="&#xe027;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe027;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-copy-2 </span>
						<div class="fs1 copy-2" aria-hidden="true" data-icon="&#xe028;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe028;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-copy-3 </span>
						<div class="fs1 copy-3" aria-hidden="true" data-icon="&#xe029;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe029;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-paste </span>
						<div class="fs1 paste" aria-hidden="true" data-icon="&#xe02a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-paste-2 </span>
						<div class="fs1 paste-2" aria-hidden="true" data-icon="&#xe02b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02b;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-paste-3 </span>
						<div class="fs1 paste-3" aria-hidden="true" data-icon="&#xe02c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-stack </span>
						<div class="fs1 stack" aria-hidden="true" data-icon="&#xe02d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-folder </span>
						<div class="fs1 folder" aria-hidden="true" data-icon="&#xe02e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-folder-open </span>
						<div class="fs1 folder-open" aria-hidden="true" data-icon="&#xe02f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-tag </span>
						<div class="fs1 tag" aria-hidden="true" data-icon="&#xe030;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe030;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-tags </span>
						<div class="fs1 tags" aria-hidden="true" data-icon="&#xe031;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe031;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-barcode </span>
						<div class="fs1 barcode" aria-hidden="true" data-icon="&#xe032;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe032;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-qrcode </span>
						<div class="fs1 qrcode" aria-hidden="true" data-icon="&#xe033;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe033;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-ticket </span>
						<div class="fs1 ticket" aria-hidden="true" data-icon="&#xe034;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe034;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-cart </span>
						<div class="fs1 cart" aria-hidden="true" data-icon="&#xe035;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe035;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-cart-2 </span>
						<div class="fs1 cart-2" aria-hidden="true" data-icon="&#xe036;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe036;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-cart-3 </span>
						<div class="fs1 cart-3" aria-hidden="true" data-icon="&#xe037;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe037;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-coin </span>
						<div class="fs1 coin" aria-hidden="true" data-icon="&#xe038;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe038;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-credit </span>
						<div class="fs1 credit" aria-hidden="true" data-icon="&#xe039;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe039;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-calculate </span>
						<div class="fs1 calculate" aria-hidden="true" data-icon="&#xe03a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-support </span>
						<div class="fs1 support" aria-hidden="true" data-icon="&#xe03b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03b;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-phone </span>
						<div class="fs1 phone" aria-hidden="true" data-icon="&#xe03c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-phone-hang-up </span>
						<div class="fs1 phone-hang-up" aria-hidden="true" data-icon="&#xe03d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-address-book </span>
						<div class="fs1 address-book" aria-hidden="true" data-icon="&#xe03e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-notebook </span>
						<div class="fs1 notebook" aria-hidden="true" data-icon="&#xe03f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-envelop </span>
						<div class="fs1 envelop" aria-hidden="true" data-icon="&#xe040;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe040;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-pushpin </span>
						<div class="fs1 pushpin" aria-hidden="true" data-icon="&#xe041;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe041;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-location </span>
						<div class="fs1 location" aria-hidden="true" data-icon="&#xe042;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe042;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-location-2 </span>
						<div class="fs1 location-2" aria-hidden="true" data-icon="&#xe043;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe043;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-compass </span>
						<div class="fs1 compass" aria-hidden="true" data-icon="&#xe044;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe044;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-map </span>
						<div class="fs1 map" aria-hidden="true" data-icon="&#xe045;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe045;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-map-2 </span>
						<div class="fs1 map-2" aria-hidden="true" data-icon="&#xe046;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe046;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-history </span>
						<div class="fs1 history" aria-hidden="true" data-icon="&#xe047;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe047;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-clock </span>
						<div class="fs1 clock" aria-hidden="true" data-icon="&#xe048;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe048;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-clock-2 </span>
						<div class="fs1 clock-2" aria-hidden="true" data-icon="&#xe049;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe049;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-alarm </span>
						<div class="fs1 alarm" aria-hidden="true" data-icon="&#xe04a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-alarm-2 </span>
						<div class="fs1 alarm-2" aria-hidden="true" data-icon="&#xe04b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04b;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-bell </span>
						<div class="fs1 bell" aria-hidden="true" data-icon="&#xe04c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-stopwatch </span>
						<div class="fs1 stopwatch" aria-hidden="true" data-icon="&#xe04d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-calendar </span>
						<div class="fs1 calendar" aria-hidden="true" data-icon="&#xe04e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-calendar-2 </span>
						<div class="fs1 calendar-2" aria-hidden="true" data-icon="&#xe04f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-print </span>
						<div class="fs1 print" aria-hidden="true" data-icon="&#xe050;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe050;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-keyboard </span>
						<div class="fs1 keyboard" aria-hidden="true" data-icon="&#xe051;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe051;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-screen </span>
						<div class="fs1 screen" aria-hidden="true" data-icon="&#xe052;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe052;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-laptop </span>
						<div class="fs1 laptop" aria-hidden="true" data-icon="&#xe053;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe053;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-mobile </span>
						<div class="fs1 mobile" aria-hidden="true" data-icon="&#xe054;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe054;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-mobile-2 </span>
						<div class="fs1 mobile-2" aria-hidden="true" data-icon="&#xe055;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe055;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-tablet </span>
						<div class="fs1 tablet" aria-hidden="true" data-icon="&#xe056;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe056;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-tv </span>
						<div class="fs1 tv" aria-hidden="true" data-icon="&#xe057;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe057;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-cabinet </span>
						<div class="fs1 cabinet" aria-hidden="true" data-icon="&#xe058;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe058;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-drawer </span>
						<div class="fs1 drawer" aria-hidden="true" data-icon="&#xe059;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe059;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-drawer-2 </span>
						<div class="fs1 drawer-2" aria-hidden="true" data-icon="&#xe05a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05a;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-drawer-3 </span>
						<div class="fs1 drawer-3" aria-hidden="true" data-icon="&#xe05b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05b;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-box-add </span>
						<div class="fs1 box-add" aria-hidden="true" data-icon="&#xe05c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05c;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-box-remove </span>
						<div class="fs1 box-remove" aria-hidden="true" data-icon="&#xe05d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05d;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-download </span>
						<div class="fs1 download" aria-hidden="true" data-icon="&#xe05e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05e;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-upload </span>
						<div class="fs1 upload" aria-hidden="true" data-icon="&#xe05f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05f;" >  </a>
					</div>

					<div class="glyph glyph-demo">
						<span class="mls"> wp-svg-disk </span>
						<div class="fs1 disk" aria-hidden="true" data-icon="&#xe060;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe060;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-storage </span>
						<div class="fs1 storage" aria-hidden="true" data-icon="&#xe061;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe061;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-undo </span>
						<div class="fs1 undo" aria-hidden="true" data-icon="&#xe062;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe062;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-redo </span>
						<div class="fs1 redo" aria-hidden="true" data-icon="&#xe063;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe063;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flip </span>
						<div class="fs1 flip" aria-hidden="true" data-icon="&#xe064;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe064;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flip-2 </span>
						<div class="fs1 flip-2" aria-hidden="true" data-icon="&#xe065;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe065;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-undo-2 </span>
						<div class="fs1 undo-2" aria-hidden="true" data-icon="&#xe066;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe066;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-redo-2 </span>
						<div class="fs1 redo-2" aria-hidden="true" data-icon="&#xe067;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe067;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-forward </span>
						<div class="fs1 forward" aria-hidden="true" data-icon="&#xe068;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe068;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-reply </span>
						<div class="fs1 reply" aria-hidden="true" data-icon="&#xe069;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe069;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubble </span>
						<div class="fs1 bubble" aria-hidden="true" data-icon="&#xe06a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubbles </span>
						<div class="fs1 bubbles" aria-hidden="true" data-icon="&#xe06b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubbles-2 </span>
						<div class="fs1 bubbles-2" aria-hidden="true" data-icon="&#xe06c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubble-2 </span>
						<div class="fs1 bubble-2" aria-hidden="true" data-icon="&#xe06d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubbles-3 </span>
						<div class="fs1 bubbles-3" aria-hidden="true" data-icon="&#xe06e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bubbles-4 </span>
						<div class="fs1 bubbles-4" aria-hidden="true" data-icon="&#xe06f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-user </span>
						<div class="fs1 user" aria-hidden="true" data-icon="&#xe070;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe070;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-users </span>
						<div class="fs1 users" aria-hidden="true" data-icon="&#xe071;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe071;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-user-2 </span>
						<div class="fs1 user-2" aria-hidden="true" data-icon="&#xe072;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe072;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-users-2 </span>
						<div class="fs1 users-2" aria-hidden="true" data-icon="&#xe073;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe073;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-user-3 </span>
						<div class="fs1 user-3" aria-hidden="true" data-icon="&#xe074;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe074;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-user-4 </span>
						<div class="fs1 user-4" aria-hidden="true" data-icon="&#xe075;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe075;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-quotes-left </span>
						<div class="fs1 quotes-left" aria-hidden="true" data-icon="&#xe076;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe076;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-busy </span>
						<div class="fs1 busy" aria-hidden="true" data-icon="&#xe077;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe077;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-1 </span>
						<div class="fs1 spinner-1" aria-hidden="true" data-icon="&#xe078;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe078;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-2 </span>
						<div class="fs1 spinner-2" aria-hidden="true" data-icon="&#xe079;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe079;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-3 </span>
						<div class="fs1 spinner-3" aria-hidden="true" data-icon="&#xe07a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-4 </span>
						<div class="fs1 spinner-4" aria-hidden="true" data-icon="&#xe07b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-5 </span>
						<div class="fs1 spinner-5" aria-hidden="true" data-icon="&#xe07c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spinner-6 </span>
						<div class="fs1 spinner-6" aria-hidden="true" data-icon="&#xe07d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-binoculars </span>
						<div class="fs1 binoculars" aria-hidden="true" data-icon="&#xe07e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-search-2 </span>
						<div class="fs1 search-2" aria-hidden="true" data-icon="&#xe07f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-zoom-in </span>
						<div class="fs1 zoom-in" aria-hidden="true" data-icon="&#xe080;"></div>
						<a class="glyph-link contract-2" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe080;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-zoom-out </span>
						<div class="fs1 zoom-out" aria-hidden="true" data-icon="&#xe081;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe081;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-expand </span>
						<div class="fs1 expand" aria-hidden="true" data-icon="&#xe082;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe082;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-contract </span>
						<div class="fs1 contract" aria-hidden="true" data-icon="&#xe083;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe083;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-expand-2 </span>
						<div class="fs1 expand-2" aria-hidden="true" data-icon="&#xe084;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe084;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-contract-2 </span>
						<div class="fs1 contract-2" aria-hidden="true" data-icon="&#xe085;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe085;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-key </span>
						<div class="fs1 key" aria-hidden="true" data-icon="&#xe086;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe086;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-key-2 </span>
						<div class="fs1 key-2" aria-hidden="true" data-icon="&#xe087;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe087;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lock </span>
						<div class="fs1 lock" aria-hidden="true" data-icon="&#xe088;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe088;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lock-2 </span>
						<div class="fs1 lock-2" aria-hidden="true" data-icon="&#xe089;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe089;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-unlocked </span>
						<div class="fs1 unlocked" aria-hidden="true" data-icon="&#xe08a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wrench </span>
						<div class="fs1 wrench" aria-hidden="true" data-icon="&#xe08b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-settings </span>
						<div class="fs1 settings" aria-hidden="true" data-icon="&#xe08c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-equalizer </span>
						<div class="fs1 equalizer" aria-hidden="true" data-icon="&#xe08d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cog </span>
						<div class="fs1 cog" aria-hidden="true" data-icon="&#xe08e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cogs </span>
						<div class="fs1 cogs" aria-hidden="true" data-icon="&#xe08f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cog-2 </span>
						<div class="fs1 cog-2" aria-hidden="true" data-icon="&#xe090;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe090;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-hammer </span>
						<div class="fs1 hammer" aria-hidden="true" data-icon="&#xe091;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe091;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wand </span>
						<div class="fs1 wand" aria-hidden="true" data-icon="&#xe092;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe092;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-aid </span>
						<div class="fs1 aid" aria-hidden="true" data-icon="&#xe093;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe093;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bug </span>
						<div class="fs1 bug" aria-hidden="true" data-icon="&#xe094;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe094;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pie </span>
						<div class="fs1 pie" aria-hidden="true" data-icon="&#xe095;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe095;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stats </span>
						<div class="fs1 stats" aria-hidden="true" data-icon="&#xe096;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe096;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bars </span>
						<div class="fs1 bars" aria-hidden="true" data-icon="&#xe097;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe097;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bars-2 </span>
						<div class="fs1 bars-2" aria-hidden="true" data-icon="&#xe098;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe098;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-gift </span>
						<div class="fs1 gift" aria-hidden="true" data-icon="&#xe099;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe099;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-trophy </span>
						<div class="fs1 trophy" aria-hidden="true" data-icon="&#xe09a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-glass </span>
						<div class="fs1 glass" aria-hidden="true" data-icon="&#xe09b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-mug </span>
						<div class="fs1 mug" aria-hidden="true" data-icon="&#xe09c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-food </span>
						<div class="fs1 food" aria-hidden="true" data-icon="&#xe09d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-leaf </span>
						<div class="fs1 leaf" aria-hidden="true" data-icon="&#xe09e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-rocket </span>
						<div class="fs1 rocket" aria-hidden="true" data-icon="&#xe09f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-meter </span>
						<div class="fs1 meter" aria-hidden="true" data-icon="&#xe0a0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-meter2 </span>
						<div class="fs1 meter2" aria-hidden="true" data-icon="&#xe0a1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-dashboard </span>
						<div class="fs1 dashboard" aria-hidden="true" data-icon="&#xe0a2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-hammer-2 </span>
						<div class="fs1 hammer-2" aria-hidden="true" data-icon="&#xe0a3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-fire </span>
						<div class="fs1 fire" aria-hidden="true" data-icon="&#xe0a4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lab </span>
						<div class="fs1 lab" aria-hidden="true" data-icon="&#xe0a5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-magnet </span>
						<div class="fs1 magnet" aria-hidden="true" data-icon="&#xe0a6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-remove </span>
						<div class="fs1 remove" aria-hidden="true" data-icon="&#xe0a7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-remove-2 </span>
						<div class="fs1 remove-2" aria-hidden="true" data-icon="&#xe0a8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a8;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-briefcase </span>
						<div class="fs1 briefcase" aria-hidden="true" data-icon="&#xe0a9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-airplane </span>
						<div class="fs1 airplane" aria-hidden="true" data-icon="&#xe0aa;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0aa;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-truck </span>
						<div class="fs1 truck" aria-hidden="true" data-icon="&#xe0ab;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ab;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-road </span>
						<div class="fs1 road" aria-hidden="true" data-icon="&#xe0ac;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ac;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-accessibility </span>
						<div class="fs1 accessibility" aria-hidden="true" data-icon="&#xe0ad;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ad;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-target </span>
						<div class="fs1 target" aria-hidden="true" data-icon="&#xe0ae;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ae;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-shield </span>
						<div class="fs1 shield" aria-hidden="true" data-icon="&#xe0af;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0af;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning </span>
						<div class="fs1 lightning" aria-hidden="true" data-icon="&#xe0b0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-switch </span>
						<div class="fs1 switch" aria-hidden="true" data-icon="&#xe0b1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-power-cord </span>
						<div class="fs1 power-cord" aria-hidden="true" data-icon="&#xe0b2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-signup </span>
						<div class="fs1 signup" aria-hidden="true" data-icon="&#xe0b3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-list </span>
						<div class="fs1 list" aria-hidden="true" data-icon="&#xe0b4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-list-2 </span>
						<div class="fs1 list-2" aria-hidden="true" data-icon="&#xe0b5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-numbered-list </span>
						<div class="fs1 numbered-list" aria-hidden="true" data-icon="&#xe0b6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-menu </span>
						<div class="fs1 menu" aria-hidden="true" data-icon="&#xe0b7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-menu-2 </span>
						<div class="fs1 menu-2" aria-hidden="true" data-icon="&#xe0b8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b8;" >  </a>
					</div>









					<!-- continue with icon classes for the dropdown here -->
					<!-- Continue ---- tree icon -->
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tree </span>
						<div class="fs1 tree" aria-hidden="true" data-icon="&#xe0b9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud </span>
						<div class="fs1 cloud" aria-hidden="true" data-icon="&#xe0ba;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ba;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-download </span>
						<div class="fs1 cloud-download" aria-hidden="true" data-icon="&#xe0bb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bb;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-upload </span>
						<div class="fs1 cloud-upload" aria-hidden="true" data-icon="&#xe0bc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bc;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-download-2 </span>
						<div class="fs1 download-2" aria-hidden="true" data-icon="&#xe0bd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bd;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-upload-2 </span>
						<div class="fs1 upload-2" aria-hidden="true" data-icon="&#xe0be;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0be;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-download-3 </span>
						<div class="fs1 download-3" aria-hidden="true" data-icon="&#xe0bf;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bf;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-upload-3 </span>
						<div class="fs1 upload-3" aria-hidden="true" data-icon="&#xe0c0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-globe </span>
						<div class="fs1 globe" aria-hidden="true" data-icon="&#xe0c1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-earth </span>
						<div class="fs1 earth" aria-hidden="true" data-icon="&#xe0c2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-link </span>
						<div class="fs1 link" aria-hidden="true" data-icon="&#xe0c3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flag </span>
						<div class="fs1 flag" aria-hidden="true" data-icon="&#xe0c4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-attachment </span>
						<div class="fs1 attachment" aria-hidden="true" data-icon="&#xe0c5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-eye </span>
						<div class="fs1 eye" aria-hidden="true" data-icon="&#xe0c6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-eye-blocked </span>
						<div class="fs1 eye-blocked" aria-hidden="true" data-icon="&#xe0c7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-eye-2 </span>
						<div class="fs1 eye-2" aria-hidden="true" data-icon="&#xe0c8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c8;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bookmark </span>
						<div class="fs1 bookmark" aria-hidden="true" data-icon="&#xe0c9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-bookmarks </span>
						<div class="fs1 bookmarks" aria-hidden="true" data-icon="&#xe0ca;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ca;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-brightness-medium </span>
						<div class="fs1 brightness-medium" aria-hidden="true" data-icon="&#xe0cb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cb;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-brightness-contrast </span>
						<div class="fs1 brightness-contrast" aria-hidden="true" data-icon="&#xe0cc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cc;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-contrast </span>
						<div class="fs1 contrast" aria-hidden="true" data-icon="&#xe0cd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cd;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-star </span>
						<div class="fs1 star" aria-hidden="true" data-icon="&#xe0ce;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ce;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-star-2 </span>
						<div class="fs1 star-2" aria-hidden="true" data-icon="&#xe0cf;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cf;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-star-3 </span>
						<div class="fs1 star-3" aria-hidden="true" data-icon="&#xe0d0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-heart </span>
						<div class="fs1 heart" aria-hidden="true" data-icon="&#xe0d1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-heart-2 </span>
						<div class="fs1 heart-2" aria-hidden="true" data-icon="&#xe0d2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-heart-broken </span>
						<div class="fs1 heart-broken" aria-hidden="true" data-icon="&#xe0d3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-thumbs-up </span>
						<div class="fs1 thumbs-up" aria-hidden="true" data-icon="&#xe0d4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-thumbs-up-2 </span>
						<div class="fs1 thumpbs-up-2" aria-hidden="true" data-icon="&#xe0d5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-happy </span>
						<div class="fs1 happy" aria-hidden="true" data-icon="&#xe0d6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-happy-2 </span>
						<div class="fs1 happy-2" aria-hidden="true" data-icon="&#xe0d7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-smiley </span>
						<div class="fs1 smiley" aria-hidden="true" data-icon="&#xe0d8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d8;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-smiley-2 </span>
						<div class="fs1 smiley-2" aria-hidden="true" data-icon="&#xe0d9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tongue </span>
						<div class="fs1 tongue" aria-hidden="true" data-icon="&#xe0da;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0da;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tongue-2 </span>
						<div class="fs1 tongue-2" aria-hidden="true" data-icon="&#xe0db;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0db;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sad </span>
						<div class="fs1 sad" aria-hidden="true" data-icon="&#xe0dc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0dc;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sad-2 </span>
						<div class="fs1 sad-2" aria-hidden="true" data-icon="&#xe0dd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0dd;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wink </span>
						<div class="fs1 wink" aria-hidden="true" data-icon="&#xe0de;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0de;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wink-2 </span>
						<div class="fs1 wink-2" aria-hidden="true" data-icon="&#xe0df;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0df;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-grin </span>
						<div class="fs1 grin" aria-hidden="true" data-icon="&#xe0e0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-grin-2 </span>
						<div class="fs1 grin-2" aria-hidden="true" data-icon="&#xe0e1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cool </span>
						<div class="fs1 cool" aria-hidden="true" data-icon="&#xe0e2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cool-2 </span>
						<div class="fs1 cool-2" aria-hidden="true" data-icon="&#xe0e3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-angry </span>
						<div class="fs1 angry" aria-hidden="true" data-icon="&#xe0e4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-angry-2 </span>
						<div class="fs1 angry-2" aria-hidden="true" data-icon="&#xe0e5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-evil </span>
						<div class="fs1 evil" aria-hidden="true" data-icon="&#xe0e6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-evil-2 </span>
						<div class="fs1 evil-2" aria-hidden="true" data-icon="&#xe0e7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-shocked </span>
						<div class="fs1 shocked" aria-hidden="true" data-icon="&#xe0e8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e8;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-shocked-2 </span>
						<div class="fs1 shocked-2" aria-hidden="true" data-icon="&#xe0e9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-confused </span>
						<div class="fs1 confused" aria-hidden="true" data-icon="&#xe0ea;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ea;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-confused-2 </span>
						<div class="fs1 confused-2" aria-hidden="true" data-icon="&#xe0eb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0eb;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-neutral </span>
						<div class="fs1 neutral" aria-hidden="true" data-icon="&#xe0ec;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ec;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-neutral-2 </span>
						<div class="fs1 neutral-2" aria-hidden="true" data-icon="&#xe0ed;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ed;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wondering </span>
						<div class="fs1 wondering" aria-hidden="true" data-icon="&#xe0ee;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ee;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wondering-2 </span>
						<div class="fs1 wondering-2" aria-hidden="true" data-icon="&#xe0ef;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ef;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-point-up </span>
						<div class="fs1 point-up" aria-hidden="true" data-icon="&#xe0f0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f0;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-point-right </span>
						<div class="fs1 point-right" aria-hidden="true" data-icon="&#xe0f1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f1;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-point-down </span>
						<div class="fs1 point-down" aria-hidden="true" data-icon="&#xe0f2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f2;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-point-left </span>
						<div class="fs1 point-left" aria-hidden="true" data-icon="&#xe0f3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f3;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-warning </span>
						<div class="fs1 warning" aria-hidden="true" data-icon="&#xe0f4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f4;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-notification </span>
						<div class="fs1 notification" aria-hidden="true" data-icon="&#xe0f5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f5;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-question </span>
						<div class="fs1 question" aria-hidden="true" data-icon="&#xe0f6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f6;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-info </span>
						<div class="fs1 info" aria-hidden="true" data-icon="&#xe0f7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f7;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-info-2 </span>
						<div class="fs1 info-2" aria-hidden="true" data-icon="&#xe0f8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f8;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-blocked </span>
						<div class="fs1 blocked" aria-hidden="true" data-icon="&#xe0f9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f9;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cancel-circle </span>
						<div class="fs1 cancel-circle" aria-hidden="true" data-icon="&#xe0fa;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fa;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkmark-circle </span>
						<div class="fs1 checkmark-circle" aria-hidden="true" data-icon="&#xe0fb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fb;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spam </span>
						<div class="fs1 spam" aria-hidden="true" data-icon="&#xe0fc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fc;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-close </span>
						<div class="fs1 close" aria-hidden="true" data-icon="&#xe0fd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fd;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkmark </span>
						<div class="fs1 checkmark" aria-hidden="true" data-icon="&#xe0fe;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fe;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkmark-2 </span>
						<div class="fs1 checkmark-2" aria-hidden="true" data-icon="&#xe0ff;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ff;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-spell-check </span>
						<div class="fs1 spell-check" aria-hidden="true" data-icon="&#xe100;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe100;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-minus </span>
						<div class="fs1 minus" aria-hidden="true" data-icon="&#xe101;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe101;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-plus </span>
						<div class="fs1 plus" aria-hidden="true" data-icon="&#xe102;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe102;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-enter </span>
						<div class="fs1 enter" aria-hidden="true" data-icon="&#xe103;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe103;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-exit </span>
						<div class="fs1 exit" aria-hidden="true" data-icon="&#xe104;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe104;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-play-2 </span>
						<div class="fs1 play-2" aria-hidden="true" data-icon="&#xe105;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe105;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pause </span>
						<div class="fs1 pause" aria-hidden="true" data-icon="&#xe106;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe106;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stop </span>
						<div class="fs1 stop" aria-hidden="true" data-icon="&#xe107;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe107;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-backward </span>
						<div class="fs1 backward" aria-hidden="true" data-icon="&#xe108;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe108;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-forward-2 </span>
						<div class="fs1 forward-2" aria-hidden="true" data-icon="&#xe109;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe109;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-play-3 </span>
						<div class="fs1 play-3" aria-hidden="true" data-icon="&#xe10a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pause-2 </span>
						<div class="fs1 pause-2" aria-hidden="true" data-icon="&#xe10b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stop-2 </span>
						<div class="fs1 stop-2" aria-hidden="true" data-icon="&#xe10c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-backward-2 </span>
						<div class="fs1 backward-2" aria-hidden="true" data-icon="&#xe10d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-forward-3 </span>
						<div class="fs1 forward-3" aria-hidden="true" data-icon="&#xe10e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10e;" >  </a>
					</div>


					<div class="glyph glyph-demo"><span class="mls"> wp-svg-first </span>
						<div class="fs1 first" aria-hidden="true" data-icon="&#xe10f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-last </span>
						<div class="fs1 last" aria-hidden="true" data-icon="&#xe110;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe110;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-previous </span>
						<div class="fs1 previous" aria-hidden="true" data-icon="&#xe111;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe111;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-next </span>
						<div class="fs1 next" aria-hidden="true" data-icon="&#xe112;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe112;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-eject </span>
						<div class="fs1 eject" aria-hidden="true" data-icon="&#xe113;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe113;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-high </span>
						<div class="fs1 volume-high" aria-hidden="true" data-icon="&#xe114;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe114;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-medium </span>
						<div class="fs1 volume-medium" aria-hidden="true" data-icon="&#xe115;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe115;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-low </span>
						<div class="fs1 volume-low" aria-hidden="true" data-icon="&#xe116;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe116;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-mute </span>
						<div class="fs1 volume-mute" aria-hidden="true" data-icon="&#xe117;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe117;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-mute-2 </span>
						<div class="fs1 volume-mute-2" aria-hidden="true" data-icon="&#xe118;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe118;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-increase </span>
						<div class="fs1 volume-increase" aria-hidden="true" data-icon="&#xe119;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe119;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-volume-decrease </span>
						<div class="fs1 volume-decrease" aria-hidden="true" data-icon="&#xe11a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-loop </span>
						<div class="fs1 loop" aria-hidden="true" data-icon="&#xe11b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-loop-2 </span>
						<div class="fs1 loop-2" aria-hidden="true" data-icon="&#xe11c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-loop-3 </span>
						<div class="fs1 loop-3" aria-hidden="true" data-icon="&#xe11d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-shuffle </span>
						<div class="fs1 shuffle" aria-hidden="true" data-icon="&#xe11e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11e;" >  </a>
					</div>


					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-left </span>
						<div class="fs1 arrow-up-left" aria-hidden="true" data-icon="&#xe11f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up </span>
						<div class="fs1 arrow-up" aria-hidden="true" data-icon="&#xe120;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe120;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-right </span>
						<div class="fs1 arrow-up-right" aria-hidden="true" data-icon="&#xe121;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe121;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-right </span>
						<div class="fs1 arrow-right" aria-hidden="true" data-icon="&#xe122;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe122;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-right </span>
						<div class="fs1 arrow-down-right" aria-hidden="true" data-icon="&#xe123;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe123;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down </span>
						<div class="fs1 arrow-down" aria-hidden="true" data-icon="&#xe124;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe124;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-left </span>
						<div class="fs1 arrow-down-left" aria-hidden="true" data-icon="&#xe125;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe125;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-left </span>
						<div class="fs1 arrow-left" aria-hidden="true" data-icon="&#xe126;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe126;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-left-2 </span>
						<div class="fs1 arrow-up-left-2" aria-hidden="true" data-icon="&#xe127;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe127;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-2 </span>
						<div class="fs1 arrow-up-2" aria-hidden="true" data-icon="&#xe128;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe128;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-right-2 </span>
						<div class="fs1 arrow-up-right-2" aria-hidden="true" data-icon="&#xe129;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe129;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-right-2 </span>
						<div class="fs1 arrow-right-2" aria-hidden="true" data-icon="&#xe12a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-right-2 </span>
						<div class="fs1 arrow-down-right-2" aria-hidden="true" data-icon="&#xe12b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-2 </span>
						<div class="fs1 arrow-down-2" aria-hidden="true" data-icon="&#xe12c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-left-2 </span>
						<div class="fs1 arrow-down-left-2" aria-hidden="true" data-icon="&#xe12d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-left-2 </span>
						<div class="fs1 arrow-left-2" aria-hidden="true" data-icon="&#xe12e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-left-3 </span>
						<div class="fs1 arrow-up-left-3" aria-hidden="true" data-icon="&#xe12f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-3 </span>
						<div class="fs1 arrow-up-3" aria-hidden="true" data-icon="&#xe130;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe130;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-up-right-3 </span>
						<div class="fs1 arrow-up-right-3" aria-hidden="true" data-icon="&#xe131;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe131;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-right-3 </span>
						<div class="fs1 arrow-right-3" aria-hidden="true" data-icon="&#xe132;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe132;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-right-3 </span>
						<div class="fs1 arrow-down-right-3" aria-hidden="true" data-icon="&#xe133;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe133;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-3 </span>
						<div class="fs1 arrow-down-3" aria-hidden="true" data-icon="&#xe134;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe134;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-down-left-3 </span>
						<div class="fs1 arrow-down-left-3" aria-hidden="true" data-icon="&#xe135;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe135;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-arrow-left-3 </span>
						<div class="fs1 arrow-left-3" aria-hidden="true" data-icon="&#xe136;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe136;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tab </span>
						<div class="fs1 tab" aria-hidden="true" data-icon="&#xe137;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe137;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkbox-checked </span>
						<div class="fs1 checkbox-checked" aria-hidden="true" data-icon="&#xe138;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe138;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkbox-unchecked </span>
						<div class="fs1 checkbox-unchecked" aria-hidden="true" data-icon="&#xe139;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe139;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-checkbox-partial </span>
						<div class="fs1 checkbox-partial" aria-hidden="true" data-icon="&#xe13a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-radio-checked </span>
						<div class="fs1 radio-checked" aria-hidden="true" data-icon="&#xe13b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-radio-unchecked </span>
						<div class="fs1 radio-unchecked" aria-hidden="true" data-icon="&#xe13c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-crop </span>
						<div class="fs1 crop" aria-hidden="true" data-icon="&#xe13d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-scissors </span>
						<div class="fs1 scissors" aria-hidden="true" data-icon="&#xe13e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-italic </span>
						<div class="fs1 italic" aria-hidden="true" data-icon="&#xe146;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe146;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-strikethrough </span>
						<div class="fs1 strikethrough" aria-hidden="true" data-icon="&#xe147;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe147;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-omega </span>
						<div class="fs1 omega" aria-hidden="true" data-icon="&#xe148;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe148;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sigma </span>
						<div class="fs1 sigma" aria-hidden="true" data-icon="&#xe149;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe149;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-table </span>
						<div class="fs1 table" aria-hidden="true" data-icon="&#xe14a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14a;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-table-2 </span>
						<div class="fs1 table-2" aria-hidden="true" data-icon="&#xe14b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14b;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-insert-template </span>
						<div class="fs1 insert-template" aria-hidden="true" data-icon="&#xe14c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14c;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pilcrow </span>
						<div class="fs1 pilcrow" aria-hidden="true" data-icon="&#xe14d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14d;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-left-to-right </span>
						<div class="fs1 left-to-right" aria-hidden="true" data-icon="&#xe14e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14e;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-right-to-left </span>
						<div class="fs1 right-to-left" aria-hidden="true" data-icon="&#xe14f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14f;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-left </span>
						<div class="fs1 paragraph-left" aria-hidden="true" data-icon="&#xe150;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe150;" >  </a>
					</div>

					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-center </span>
						<div class="fs1 paragraph-center" aria-hidden="true" data-icon="&#xe151;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe151;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-right </span>
						<div class="fs1 paragraph-right" aria-hidden="true" data-icon="&#xe152;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe152;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-justify </span>
						<div class="fs1 paragraph-justify" aria-hidden="true" data-icon="&#xe153;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe153;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-left-2 </span>
						<div class="fs1 paragraph-left-2" aria-hidden="true" data-icon="&#xe154;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe154;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-center-2 </span>
						<div class="fs1 paragraph-center-2" aria-hidden="true" data-icon="&#xe155;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe155;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-right-2 </span>
						<div class="fs1 paragraph-right-2" aria-hidden="true" data-icon="&#xe156;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe156;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paragraph-justify-2 </span>
						<div class="fs1 paragraph-justify-2" aria-hidden="true" data-icon="&#xe157;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe157;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-indent-increase </span>
						<div class="fs1 indent-increase" aria-hidden="true" data-icon="&#xe158;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe158;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-indent-decrease </span>
						<div class="fs1 indent-decrease" aria-hidden="true" data-icon="&#xe159;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe159;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-new-tab </span>
						<div class="fs1 new-tab" aria-hidden="true" data-icon="&#xe15a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-embed </span>
						<div class="fs1 embed" aria-hidden="true" data-icon="&#xe15b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15b;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-code </span>
						<div class="fs1 code" aria-hidden="true" data-icon="&#xe15c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15c;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-console </span>
						<div class="fs1 console" aria-hidden="true" data-icon="&#xe15d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-share </span>
						<div class="fs1 share" aria-hidden="true" data-icon="&#xe15e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15e;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-mail </span>
						<div class="fs1 mail" aria-hidden="true" data-icon="&#xe15f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15f;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-mail-2 </span>
						<div class="fs1 mail-2" aria-hidden="true" data-icon="&#xe160;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe160;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-mail-3 </span>
						<div class="fs1 mail-3" aria-hidden="true" data-icon="&#xe161;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe161;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-mail-4 </span>
						<div class="fs1 mail-4" aria-hidden="true" data-icon="&#xe162;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe162;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google </span>
						<div class="fs1 google" aria-hidden="true" data-icon="&#xe163;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe163;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google-plus </span>
						<div class="fs1 google-plus" aria-hidden="true" data-icon="&#xe164;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe164;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google-plus-2 </span>
						<div class="fs1 google-plus-2" aria-hidden="true" data-icon="&#xe165;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe165;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google-plus-3 </span>
						<div class="fs1 google-plus-3" aria-hidden="true" data-icon="&#xe166;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe166;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google-plus-4 </span>
						<div class="fs1 google-plus-4" aria-hidden="true" data-icon="&#xe167;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe167;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-google-drive </span>
						<div class="fs1 google-drive" aria-hidden="true" data-icon="&#xe168;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe168;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-facebook </span>
						<div class="fs1 facebook" aria-hidden="true" data-icon="&#xe169;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe169;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-facebook-2 </span>
						<div class="fs1 facebook-2" aria-hidden="true" data-icon="&#xe16a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-facebook-3 </span>
						<div class="fs1 facebook-3" aria-hidden="true" data-icon="&#xe16b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16b;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-instagram </span>
						<div class="fs1 instagram" aria-hidden="true" data-icon="&#xe16c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16c;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-twitter </span>
						<div class="fs1 twitter" aria-hidden="true" data-icon="&#xe16d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-twitter-2 </span>
						<div class="fs1 twitter-2" aria-hidden="true" data-icon="&#xe16e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16e;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-twitter-3 </span>
						<div class="fs1 twitter-3" aria-hidden="true" data-icon="&#xe16f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16f;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-feed-2 </span>
						<div class="fs1 feed-2" aria-hidden="true" data-icon="&#xe170;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe170;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-feed-3 </span>
						<div class="fs1 feed-3" aria-hidden="true" data-icon="&#xe171;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe171;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-feed-4 </span>
						<div class="fs1 feed-4" aria-hidden="true" data-icon="&#xe172;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe172;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-youtube </span>
						<div class="fs1 youtube" aria-hidden="true" data-icon="&#xe173;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe173;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-youtube-2 </span>
						<div class="fs1 youtube-2" aria-hidden="true" data-icon="&#xe174;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe174;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-vimeo </span>
						<div class="fs1 vimeo" aria-hidden="true" data-icon="&#xe175;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe175;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-vimeo2 </span>
						<div class="fs1 vimeo2" aria-hidden="true" data-icon="&#xe176;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe176;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-vimeo-2 </span>
						<div class="fs1 vimeo-2" aria-hidden="true" data-icon="&#xe177;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe177;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lanyrd </span>
						<div class="fs1 lanyrd" aria-hidden="true" data-icon="&#xe178;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe178;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flickr </span>
						<div class="fs1 flickr" aria-hidden="true" data-icon="&#xe179;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe179;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flickr-2 </span>
						<div class="fs1 flickr-2" aria-hidden="true" data-icon="&#xe17a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flickr-3 </span>
						<div class="fs1 flickr-3" aria-hidden="true" data-icon="&#xe17b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17b;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flickr-4 </span>
						<div class="fs1 flickr-4" aria-hidden="true" data-icon="&#xe17c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17c;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-picassa </span>
						<div class="fs1 picassa" aria-hidden="true" data-icon="&#xe17d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-picassa-2 </span>
						<div class="fs1 picassa-2" aria-hidden="true" data-icon="&#xe17e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17e;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-dribbble </span>
						<div class="fs1 dribbble" aria-hidden="true" data-icon="&#xe17f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17f;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-dribbble-2 </span>
						<div class="fs1 dribbble-2" aria-hidden="true" data-icon="&#xe180;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe180;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-dribbble-3 </span>
						<div class="fs1 dribbble-3" aria-hidden="true" data-icon="&#xe181;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe181;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-forrst </span>
						<div class="fs1 forrst" aria-hidden="true" data-icon="&#xe182;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe182;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-forrst-2 </span>
						<div class="fs1 forrst-2" aria-hidden="true" data-icon="&#xe183;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe183;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-deviantart </span>
						<div class="fs1 deviantart" aria-hidden="true" data-icon="&#xe184;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe184;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-deviantart-2 </span>
						<div class="fs1 deviantart-2" aria-hidden="true" data-icon="&#xe185;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe185;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-steam </span>
						<div class="fs1 steam" aria-hidden="true" data-icon="&#xe186;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe186;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-steam-2 </span>
						<div class="fs1 steam-2" aria-hidden="true" data-icon="&#xe187;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe187;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-github </span>
						<div class="fs1 github" aria-hidden="true" data-icon="&#xe188;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe188;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-github-2 </span>
						<div class="fs1 github-2" aria-hidden="true" data-icon="&#xe189;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe189;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-github-3 </span>
						<div class="fs1 github-3" aria-hidden="true" data-icon="&#xe18a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-github-4 </span>
						<div class="fs1 github-4" aria-hidden="true" data-icon="&#xe18b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18b;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-github-5 </span>
						<div class="fs1 github-5" aria-hidden="true" data-icon="&#xe18c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18c;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wordpress </span>
						<div class="fs1 wordpress" aria-hidden="true" data-icon="&#xe18d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wordpress-2 </span>
						<div class="fs1 wordpress-2" aria-hidden="true" data-icon="&#xe18e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18e;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-joomla </span>
						<div class="fs1 joomla" aria-hidden="true" data-icon="&#xe18f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18f;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-blogger </span>
						<div class="fs1 blogger" aria-hidden="true" data-icon="&#xe190;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe190;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-blogger-2 </span>
						<div class="fs1 blogger-2" aria-hidden="true" data-icon="&#xe191;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe191;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tumblr </span>
						<div class="fs1 tumblr" aria-hidden="true" data-icon="&#xe192;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe192;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tumblr-2 </span>
						<div class="fs1 tumblr-2" aria-hidden="true" data-icon="&#xe193;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe193;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-yahoo </span>
						<div class="fs1 yahoo" aria-hidden="true" data-icon="&#xe194;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe194;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-tux </span>
						<div class="fs1 tux" aria-hidden="true" data-icon="&#xe195;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe195;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-apple </span>
						<div class="fs1 apple" aria-hidden="true" data-icon="&#xe196;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe196;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-finder </span>
						<div class="fs1 finder" aria-hidden="true" data-icon="&#xe197;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe197;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-android </span>
						<div class="fs1 android" aria-hidden="true" data-icon="&#xe198;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe198;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windows </span>
						<div class="fs1 windows" aria-hidden="true" data-icon="&#xe199;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe199;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windows8 </span>
						<div class="fs1 windows8" aria-hidden="true" data-icon="&#xe19a;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19a;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-soundcloud </span>
						<div class="fs1 soundcloud" aria-hidden="true" data-icon="&#xe19b;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19b;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-soundcloud-2 </span>
						<div class="fs1 soundcloud-2" aria-hidden="true" data-icon="&#xe19c;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19c;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-skype </span>
						<div class="fs1 skype" aria-hidden="true" data-icon="&#xe19d;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19d;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-reddit </span>
						<div class="fs1 reddit" aria-hidden="true" data-icon="&#xe19e;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19e;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-linkedin </span>
						<div class="fs1 linkedin" aria-hidden="true" data-icon="&#xe19f;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19f;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lastfm </span>
						<div class="fs1 lastfm" aria-hidden="true" data-icon="&#xe1a0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lastfm-2 </span>
						<div class="fs1 lastfm-2" aria-hidden="true" data-icon="&#xe1a1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-delicious </span>
						<div class="fs1 delicious" aria-hidden="true" data-icon="&#xe1a2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stumbleupon </span>
						<div class="fs1 stumbleupon" aria-hidden="true" data-icon="&#xe1a3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a3;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stumbleupon-2 </span>
						<div class="fs1 stumbleupon-2" aria-hidden="true" data-icon="&#xe1a4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a4;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-stackoverflow </span>
						<div class="fs1 stackoverflow" aria-hidden="true" data-icon="&#xe1a5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a5;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pinterest </span>
						<div class="fs1 pinterest" aria-hidden="true" data-icon="&#xe1a6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a6;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-pinterest-2 </span>
						<div class="fs1 pinterest-2" aria-hidden="true" data-icon="&#xe1a7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a7;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-xing </span>
						<div class="fs1 xing" aria-hidden="true" data-icon="&#xe1a8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a8;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-xing-2 </span>
						<div class="fs1 xing-2" aria-hidden="true" data-icon="&#xe1a9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a9;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-flattr </span>
						<div class="fs1 flattr" aria-hidden="true" data-icon="&#xe1aa;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1aa;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-foursquare </span>
						<div class="fs1 foursquare" aria-hidden="true" data-icon="&#xe1ab;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ab;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-foursquare </span>
						<div class="fs1 foursquare" aria-hidden="true" data-icon="&#xe1ac;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ac;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paypal </span>
						<div class="fs1 paypal" aria-hidden="true" data-icon="&#xe1ad;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ad;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paypal-2 </span>
						<div class="fs1 paypal-2" aria-hidden="true" data-icon="&#xe1ae;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ae;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-paypal-3 </span>
						<div class="fs1 paypal-3" aria-hidden="true" data-icon="&#xe1af;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1af;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-yelp </span>
						<div class="fs1 yelp" aria-hidden="true" data-icon="&#xe1b0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-libreoffice </span>
						<div class="fs1 libreoffice" aria-hidden="true" data-icon="&#xe1b1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-pdf </span>
						<div class="fs1 file-pdf" aria-hidden="true" data-icon="&#xe1b2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-openoffice </span>
						<div class="fs1 file-openoffice" aria-hidden="true" data-icon="&#xe1b3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b3;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-word </span>
						<div class="fs1 file-word" aria-hidden="true" data-icon="&#xe1b4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b4;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-excel </span>
						<div class="fs1 file-excel" aria-hidden="true" data-icon="&#xe1b5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b5;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-zip </span>
						<div class="fs1 file-zip" aria-hidden="true" data-icon="&#xe1b6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b6;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-powerpoint </span>
						<div class="fs1 file-powerpoint" aria-hidden="true" data-icon="&#xe1b7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b7;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-xml </span>
						<div class="fs1 file-xml" aria-hidden="true" data-icon="&#xe1b8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b8;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-file-css </span>
						<div class="fs1 file-css" aria-hidden="true" data-icon="&#xe1b9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b9;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-html5 </span>
						<div class="fs1 html5" aria-hidden="true" data-icon="&#xe1ba;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ba;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-html5-2 </span>
						<div class="fs1 html5-2" aria-hidden="true" data-icon="&#xe1bb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bb;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-css3 </span>
						<div class="fs1 css3" aria-hidden="true" data-icon="&#xe1bc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bc;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-chrome </span>
						<div class="fs1 chrome" aria-hidden="true" data-icon="&#xe1bd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bd;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-firefox </span>
						<div class="fs1 firefox" aria-hidden="true" data-icon="&#xe1be;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1be;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-IE </span>
						<div class="fs1 IE" aria-hidden="true" data-icon="&#xe1bf;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bf;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-opera </span>
						<div class="fs1 opera" aria-hidden="true" data-icon="&#xe1c0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-safari </span>
						<div class="fs1 safari" aria-hidden="true" data-icon="&#xe1c1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-IcoMoon </span>
						<div class="fs1 IcoMoon" aria-hidden="true" data-icon="&#xe1c2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sunrise </span>
						<div class="fs1 sunrise" aria-hidden="true" data-icon="&#xe1c3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c3;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sun </span>
						<div class="fs1 sun" aria-hidden="true" data-icon="&#xe1c4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c4;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-moon </span>
						<div class="fs1 moon" aria-hidden="true" data-icon="&#xe1c5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c5;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sun-2 </span>
						<div class="fs1 sun-2" aria-hidden="true" data-icon="&#xe1c6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c6;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windy </span>
						<div class="fs1 windy" aria-hidden="true" data-icon="&#xe1c7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c7;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-wind </span>
						<div class="fs1 wind" aria-hidden="true" data-icon="&#xe1c8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c8;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowflake </span>
						<div class="fs1 snowflake" aria-hidden="true" data-icon="&#xe1c9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c9;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloudy </span>
						<div class="fs1 cloudy" aria-hidden="true" data-icon="&#xe1ca;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ca;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-2 </span>
						<div class="fs1 cloud-2" aria-hidden="true" data-icon="&#xe1cb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cb;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather </span>
						<div class="fs1 weather" aria-hidden="true" data-icon="&#xe1cc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cc;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather-2 </span>
						<div class="fs1 weather-2" aria-hidden="true" data-icon="&#xe1cd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cd;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather-3 </span>
						<div class="fs1 weather-3" aria-hidden="true" data-icon="&#xe1ce;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ce;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lines </span>
						<div class="fs1 lines" aria-hidden="true" data-icon="&#xe1cf;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cf;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-3 </span>
						<div class="fs1 cloud-3" aria-hidden="true" data-icon="&#xe1d0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning-2 </span>
						<div class="fs1 lightning-2" aria-hidden="true" data-icon="&#xe1d1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning-3 </span>
						<div class="fs1 lightning-3" aria-hidden="true" data-icon="&#xe1d2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-rainy </span>
						<div class="fs1 rainy" aria-hidden="true" data-icon="&#xe1d3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d3;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-rainy-2 </span>
						<div class="fs1 rainy-2" aria-hidden="true" data-icon="&#xe1d4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d4;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windy-2 </span>
						<div class="fs1 windy-2" aria-hidden="true" data-icon="&#xe1d5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d5;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windy-3 </span>
						<div class="fs1 windy-3" aria-hidden="true" data-icon="&#xe1d6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d6;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowy </span>
						<div class="fs1 snowy" aria-hidden="true" data-icon="&#xe1d7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d7;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowy-2 </span>
						<div class="fs1 snowy-2" aria-hidden="true" data-icon="&#xe1d8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d8;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowy-3 </span>
						<div class="fs1 snowy-3" aria-hidden="true" data-icon="&#xe1d9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d9;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather-4 </span>
						<div class="fs1 weather-4" aria-hidden="true" data-icon="&#xe1da;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1da;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather-2 </span>
						<div class="fs1 cloudy-2" aria-hidden="true" data-icon="&#xe1db;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1db;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-4 </span>
						<div class="fs1 cloud-4" aria-hidden="true" data-icon="&#xe1dc;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1dc;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning-4 </span>
						<div class="fs1 lightning-4" aria-hidden="true" data-icon="&#xe1dd;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1dd;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-sun-3 </span>
						<div class="fs1 sun-3" aria-hidden="true" data-icon="&#xe1de;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1de;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-moon-2 </span>
						<div class="fs1 moon-2" aria-hidden="true" data-icon="&#xe1df;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1df;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloudy-3 </span>
						<div class="fs1 cloudy-3" aria-hidden="true" data-icon="&#xe1e0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-5 </span>
						<div class="fs1 cloud-5" aria-hidden="true" data-icon="&#xe1e1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloud-6 </span>
						<div class="fs1 cloud-6" aria-hidden="true" data-icon="&#xe1e2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning-5 </span>
						<div class="fs1 lightning-5" aria-hidden="true" data-icon="&#xe1e3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e3;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-rainy-3 </span>
						<div class="fs1 rainy-3" aria-hidden="true" data-icon="&#xe1e4;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e4;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-rainy-4 </span>
						<div class="fs1 rainy-4" aria-hidden="true" data-icon="&#xe1e5;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e5;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windy-4 </span>
						<div class="fs1 windy-4" aria-hidden="true" data-icon="&#xe1e6;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e6;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-windy-5 </span>
						<div class="fs1 windy-5" aria-hidden="true" data-icon="&#xe1e7;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e7;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowy-4 </span>
						<div class="fs1 snowy-4" aria-hidden="true" data-icon="&#xe1e8;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e8;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-snowy-5 </span>
						<div class="fs1 snowy-5" aria-hidden="true" data-icon="&#xe1e9;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e9;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-weather-5 </span>
						<div class="fs1 weather-5" aria-hidden="true" data-icon="&#xe1ea;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ea;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-cloudy-4 </span>
						<div class="fs1 cloudy-4" aria-hidden="true" data-icon="&#xe1eb;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1eb;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-lightning-6 </span>
						<div class="fs1 lightning-6" aria-hidden="true" data-icon="&#xe1ec;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ec;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-thermometer </span>
						<div class="fs1 thermometer" aria-hidden="true" data-icon="&#xe1ed;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ed;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-compass-2 </span>
						<div class="fs1 compass-2" aria-hidden="true" data-icon="&#xe1ee;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ee;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-none </span>
						<div class="fs1 none" aria-hidden="true" data-icon="&#xe1ef;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ef;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-Celsius </span>
						<div class="fs1 Celsius" aria-hidden="true" data-icon="&#xe1f0;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f0;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-Fahrenheit </span>
						<div class="fs1 Fahrenheit" aria-hidden="true" data-icon="&#xe1f1;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f1;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-aperture </span>
						<div class="fs1 aperture" aria-hidden="true" data-icon="&#xe1f2;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f2;" >  </a>
					</div>
					<div class="glyph glyph-demo"><span class="mls"> wp-svg-camera-3 </span>
						<div class="fs1 camera-3" aria-hidden="true" data-icon="&#xe1f3;"></div>
						<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f3;" >  </a>
					</div>

				</section>

			</div>

			<div class="custom-pack-container-ajax" style="display:inline-block; margin-top:1em; "></div>

			<div class="clear"></div>

			<footer>
				<p><?php _e( 'Plugin Created By' , 'wp-svg-icons' ); ?> <a style="color:#B35047;" href="https://www.evan-herman.com" target="_blank">Evan Herman</a></p>
			</footer>

		</div>

	</div>
