<?php

/***********************************
*	SCRIPT CONTROLS
***********************************/

function wordpress_svg_icon_plugin_load_style() {
	wp_register_style( 'svg-icon-set1-style',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-style.css');	
	wp_enqueue_style( 'svg-icon-set1-style' );
	wp_register_style( 'svg-icon-set1-expansion-style',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-expansion-style.css');	
	wp_enqueue_style( 'svg-icon-set1-expansion-style' );
}
add_action( 'wp_enqueue_scripts', 'wordpress_svg_icon_plugin_load_style' );

function wordpress_svg_icon_plugin_load_style_dashboard() {	
	wp_register_style( 'svg-icon-set1-style-dashboard',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-style.css');	
	wp_enqueue_style( 'svg-icon-set1-style-dashboard' );
	wp_register_style( 'svg-icon-set1-expansion-style-dashboard',  plugin_dir_url(__FILE__).'css/wordpress-svg-icon-plugin-expansion-style.css');	
	wp_enqueue_style( 'svg-icon-set1-expansion-style-dashboard' );
}
add_action( 'admin_enqueue_scripts', 'wordpress_svg_icon_plugin_load_style_dashboard' );