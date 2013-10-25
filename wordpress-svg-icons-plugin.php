<?php
/*
Plugin Name: WordPress Icons - SVG
Plugin URI: http://evan-herman.com/wp-svg-icon-set-1-example/
Description: Easily insert svg icons directly in to your WordPress blog with this plugin.
Version: 1.2
Author: Evan Herman
Author URI: http://www.Evan-Herman.com
License:
	Copyright 2013  Evan Herman (email : Evan.M.Herman@gmail.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/***********************************

*	INCLUDES

***********************************/

/* path to any included files */
include(dirname(__FILE__) . '/includes/scripts.php'); // this controls all js/css

// create menu page to display icons
//Create Menu Page
function wordpress_svg_icons_plugin_add_menu_page(){

	 add_menu_page( 'WP Icon Set#1', 

						 'SVG Icons Free', 

						 'manage_options', 

						 'wordpress_svg_icons_cheat_sheet', 

						 'wordpress_svg_icons_cheat_sheet',

						 plugins_url( '/svg-vector-icon-plugin/includes/images/svg-set1-menu-icon.png' )

						 ); 						  

}

add_action('admin_menu', 'wordpress_svg_icons_plugin_add_menu_page');

function wordpress_svg_icons_cheat_sheet(){
?>

<html>
<head>
<link rel="stylesheet" href="<?php echo plugins_url( '/svg-vector-icon-plugin/includes/css/wordpress-svg-icon-plugin-style.css' );?>" />
<script src="<?php echo plugins_url('/svg-vector-icon-plugin/includes/js/wordpress-svg-icon-plugin-scripts.js');?>"></script>
<style>
	section, header, footer {display: block;}
	body {
		font-family: sans-serif;
		color: #444;
		line-height: 1.5;
		font-size: 1em;
	}
	* {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}
	.glyph {
		font-size: 16px;
		float: left;
		text-align: center;
		background: #eee;
		padding: .75em;
		margin: .75em 1.5em .75em 0;
		width: 7.5em;
		border-radius: .25em;
		box-shadow: inset 0 0 0 1px #f8f8f8, 0 0 0 1px #CCC;
	}
	.glyph input {
		font-family: consolas, monospace;
		font-size: 13px;
		width: 100%;
		text-align: center;
		border: 0;
		box-shadow: 0 0 0 1px #ccc;
		padding: .125em;
	}
	.w-main {
		width: 95%;
	}
	.centered {
		margin-left: auto;
		margin-right: auto;
	}
	.fs1 {
		font-size: 2em;
	}
	header {
		margin: 2em 0;
		color: #666;

	}
	header h1 {
		font-size: 2em;
		font-weight: normal;
	}
	.clearfix:before, .clearfix:after { content: ""; display: table; }
	.clearfix:after, .clear { clear: both; }
	footer {
		margin-top: 2em;
		padding: .5em 0;
		box-shadow: 0 -2px #eee;
	}
	a { color: #333; }
	a:hover { color: #B35047; }
	a:visited { color: #333; text-decoration: none; }
	a:active { color: none; }

	.box1 {
		font-size: 16px;
		display: inline-block;
		width: 15em;
		padding: .25em .5em;
		background: #eee;
		margin: .5em 1em .5em 0;
	}
	
	input:focus { background: #E1E1E1; }
	
	.wp-svg-icon-preview { width: 30px;}
	
	.wp-svg-iconset1-preview { position:absolute; font-size:95px; margin-left:25px; margin-top:-10px; width:95px; }
	
	.wp-svg-icon-preview-box { display:inline-block; float:right; margin-top: -170px; margin-right: 15px; width:170px; border: 1px dashed #CCCCCC; height:145px; padding:.8em; margin-bottom:10px; text-align:center; padding-bottom: 140px !important;}
	
	.wp-svg-paypal-donation-button { margin-top: -45px; right:0; }
	::selection { 
		background: #FF8000;
	}	
		
	.how-to-use { width:749px;  border: 1px solid #CCCCCC; margin-bottom: 5px; float:left;}
	.tips-box { width: 500px; height: 236px; float: left; margin-left: 25px; border: 1px solid #cccccc;}
	.help-boxes { width: 100%; height: 236px; }
</style>
</head>
<body>
	<div class="w-main centered">
	
	<header>
		<h1>The <i style="color:#FF8000;">WordPress SVG Icons</i> plugin contains the following icons</h1>
		<h4>These icons are scaleable vector graphics, meaning you can set them to whatever size you want with out any loss in quality. <span style="color:#FF8000;">Enjoy!</span></h3>
	</header>
	<div class="help-boxes" >
			
		<div class="how-to-use">
			<h3 style="padding-left:10px;">How to use:</h3>
			<ul style="margin-left:35px; list-style-type:square; margin-bottom: 20px;">
				<li>Step 1: Locate and click the icon you want to use.</li>
				<li>Step 2: Copy the code out of the example box</li>
				<li style="padding-left:50px; list-style-type:none !important; display:inline;"><i style="color:red;">example:</i> <input class="copy_paste_input" style='width:298px;' readonly type='text' value='<div data-icon="Unicode Here" ></div>'></li>
				<li>Step 3: Insert the code anywhere you want your icon to appear on a page.</li>
			</ul>
			<div class="wp-svg-icon-preview-box"><i style="font-size:14px;" class="copy-paste-text">Icon Preview:</i><b class="wp-svg-icon-preview"></b></div>
		</div>	<!-- end how to use -->
		<div class="tips-box">
			<h3 style="padding-left:10px;">Tips:</h3>
			<div class="wp-svg-paypal-donation-button" style="position:inherit; display:inline; float:left; margin-left:200px;">
			<b style="text-decoration:underline; float:left; margin-top:5px; font-size:13px;">Buy me a Monster Energy Drink</b>
			<form action="https://www.paypal.com/cgi-bin/webscr" style=" float:left;" method="post" target="_top">
				<input type="hidden" name="cmd" value="_donations">
				<input type="hidden" name="business" value="emh52@drexel.edu">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="item_name" value="Donation for the SVG icon plugin">
				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div> <!-- end paypal donation button -->
				<ul style="margin-left:35px; list-style-type:square; margin-bottom: 20px;">
					<li>To increase icon size an inline font-size style to the icon div.<i style="color:green;">(ie style="font-size:100px;")</i></li>
					<li>To change the color add an inline color style to the icon div. <i style="color:green;">(ie style="color:green;")</i></li>
					<li>Remember: You can also add CSS3 Animations to all the icons!</li>
			</ul>
		</div> <!-- end tips box -->	
	</div><!-- end help boxes -->	
	
	<div class="wp-svg-iconset1-all-glyps" style="display:inline-block;">
	<section class="mtm clearfix" id="glyphs">
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe000;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe000;" > </a>
	</div>
	
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe001;"></div>	
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe001;" > </a>
	</div>
	
	
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe002;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe002;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe003;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe003;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe004;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe004;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe005;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe005;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe006;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe006;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe007;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe008;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe008;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe009;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe009;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe00f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe00f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe010;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe010;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe011;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe011;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe012;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe012;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe013;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe013;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe014;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe014;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe015;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe015;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe016;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe016;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe017;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe017;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe018;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe018;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe019;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe019;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe01f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe01f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe020;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe020;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe021;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe021;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe022;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe022;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe023;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe023;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe024;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe024;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe025;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe025;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe026;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe026;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe027;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe027;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe028;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe028;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe029;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe029;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe02f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe02f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe030;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe030;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe031;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe031;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe032;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe032;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe033;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe033;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe034;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe034;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe035;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe035;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe036;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe036;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe037;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe037;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe038;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe038;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe039;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe039;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe03f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe03f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe040;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe040;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe041;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe041;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe042;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe042;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe043;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe043;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe044;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe044;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe045;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe045;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe046;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe046;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe047;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe047;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe048;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe048;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe049;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe049;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe04f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe04f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe050;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe050;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe051;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe051;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe052;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe052;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe053;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe053;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe054;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe054;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe055;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe055;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe056;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe056;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe057;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe057;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe058;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe058;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe059;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe059;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe05f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe05f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe060;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe060;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe061;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe061;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe062;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe062;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe063;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe063;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe064;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe064;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe065;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe065;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe066;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe066;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe067;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe067;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe068;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe068;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe069;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe069;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe06f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe06f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe070;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe070;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe071;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe071;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe072;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe072;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe073;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe073;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe074;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe074;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe075;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe075;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe076;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe076;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe077;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe077;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe078;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe078;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe079;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe079;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe07f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe07f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe080;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe080;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe081;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe081;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe082;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe082;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe083;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe083;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe084;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe084;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe085;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe085;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe086;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe086;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe087;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe087;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe088;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe088;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe089;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe089;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe08f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe08f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe090;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe090;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe091;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe091;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe092;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe092;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe093;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe093;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe094;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe094;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe095;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe095;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe096;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe096;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe097;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe097;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe098;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe098;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe099;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe099;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe09f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe09f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0a9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0a9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0aa;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0aa;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ab;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ac;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ac;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ad;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ad;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ae;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ae;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0af;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0af;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0b9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0b9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ba;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ba;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0bb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0bc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0bd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0be;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0be;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0bf;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0bf;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0c9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0c9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ca;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ca;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0cb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0cc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0cd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ce;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ce;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0cf;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0cf;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0d9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0d9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0da;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0da;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0db;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0db;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0dc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0dc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0dd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0dd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0de;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0de;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0df;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0df;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0e9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0e9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ea;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ea;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0eb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0eb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ec;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ec;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ed;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ed;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ee;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ee;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ef;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ef;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0f9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0f9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0fa;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fa;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0fb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0fc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0fd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0fe;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0fe;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe0ff;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe0ff;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe100;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe100;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe101;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe101;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe102;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe102;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe103;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe103;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe104;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe104;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe105;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe105;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe106;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe106;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe107;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe107;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe108;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe108;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe109;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe109;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe10f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe10f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe110;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe110;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe111;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe111;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe112;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe112;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe113;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe113;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe114;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe114;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe115;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe115;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe116;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe116;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe117;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe117;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe118;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe118;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe119;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe119;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe11f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe11f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe120;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe120;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe121;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe121;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe122;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe122;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe123;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe123;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe124;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe124;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe125;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe125;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe126;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe126;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe127;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe127;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe128;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe128;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe129;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe129;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe12f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe12f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe130;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe130;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe131;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe131;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe132;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe132;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe133;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe133;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe134;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe134;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe135;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe135;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe136;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe136;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe137;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe137;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe138;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe138;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe139;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe139;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe13f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe13f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe140;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe140;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe141;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe141;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe142;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe142;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe143;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe143;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe144;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe144;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe145;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe145;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe146;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe146;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe147;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe147;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe148;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe148;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe149;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe149;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe14f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe14f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe150;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe150;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe151;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe151;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe152;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe152;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe153;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe153;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe154;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe154;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe155;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe155;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe156;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe156;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe157;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe157;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe158;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe158;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe159;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe159;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe15f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe15f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe160;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe160;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe161;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe161;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe162;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe162;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe163;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe163;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe164;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe164;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe165;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe165;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe166;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe166;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe167;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe167;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe168;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe168;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe169;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe169;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe16f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe16f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe170;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe170;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe171;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe171;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe172;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe172;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe173;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe173;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe174;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe174;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe175;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe175;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe176;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe176;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe177;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe177;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe178;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe178;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe179;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe179;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe17f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe17f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe180;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe180;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe181;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe181;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe182;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe182;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe183;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe183;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe184;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe184;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe185;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe185;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe186;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe186;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe187;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe187;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe188;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe188;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe189;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe189;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe18f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe18f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe190;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe190;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe191;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe191;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe192;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe192;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe193;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe193;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe194;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe194;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe195;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe195;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe196;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe196;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe197;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe197;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe198;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe198;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe199;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe199;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19a;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19a;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19b;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19b;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19c;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19c;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19d;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19d;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19e;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19e;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe19f;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe19f;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1a9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1a9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1aa;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1aa;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ab;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ab;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ac;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ac;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ad;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ad;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ae;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ae;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1af;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1af;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1b9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1b9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ba;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ba;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1bb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1bc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1bd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1be;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1be;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1bf;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1bf;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1c9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1c9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ca;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ca;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1cb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1cc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1cd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ce;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ce;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1cf;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1cf;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1d9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1d9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1da;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1da;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1db;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1db;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1dc;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1dc;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1dd;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1dd;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1de;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1de;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1df;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1df;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e3;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e4;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e4;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e5;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e5;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e6;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e6;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e7;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e7;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e8;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e8;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1e9;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1e9;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ea;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ea;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1eb;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1eb;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ec;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ec;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ed;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ed;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ee;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ee;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1ef;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1ef;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1f0;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f0;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1f1;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f1;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1f2;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f2;" >  </a>
	</div>
	<div class="glyph">
		<div class="fs1" aria-hidden="true" data-icon="&#xe1f3;"></div>
		<a class="glyph-link" href="#"><input class="glyph_unicode" type="text" readonly="readonly" value="&amp;#xe1f3;" >  </a>
	</div>
	</section>
	</div>
	<div class="clear"></div>
	
	<footer>
		<p>Plugin Created By <a style="color:#B35047;" href="http://www.Evan-Herman.com" target="_blank">Evan Herman</a></p>
	</footer>
	</div>
	
</body>
</html>

<?php
}
