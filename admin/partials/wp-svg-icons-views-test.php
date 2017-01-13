<?php

/* If the file is hit directly, abort... */
defined('ABSPATH') or die("Nice try....");

/**
 * Class wp_svg_icons_view
 * handles the creation of [wp-svg-icons] shortcode
 * creates a wordpress view representing this shortcode in the editor
 * delete button on wp view as well makes for easy shortcode managements.
 *
 * separate css is in style.content.css - this is loaded in frontend and also backend with add_editor_style
 *
 * Author: evan.m.herman@gmail.com
 * Copyright 2014
 */

class wp_svg_icons_view {

    private static $instance = null;

	public static function get_instance() {
        if ( ! self::$instance )
            self::$instance = new self;
        return self::$instance;
    }

	public function init(){
		// comment this 'add_action' out to disable shortcode backend mce view feature
		add_action( 'admin_init', array( $this, 'init_plugin' ), 20 );
	}
    public function init_plugin() {
        add_action( 'print_media_templates', array( $this, 'print_media_templates' ) );
        add_action( 'admin_print_footer_scripts', array( $this, 'admin_print_footer_scripts' ), 100 );
    }


    /**
     * Outputs the view inside the wordpress editor.
     */
    public function print_media_templates() {
        if ( ! isset( get_current_screen()->id ) || get_current_screen()->base != 'post' )
            return;
        ?>
        <script type="text/html" id="tmpl-editor-boutique-banner">
				<b class="wp-svg-{{ data.icon }}"></b>
		</script>
        <?php
    }

    public function admin_print_footer_scripts() {
        if ( ! isset( get_current_screen()->id ) || get_current_screen()->base != 'post' )
            return;
        ?>
	    <script type="text/javascript">
		    (function($){
			    var media = wp.media, shortcode_string = 'wp-svg-icons';
			    wp.mce = wp.mce || {};
			    wp.mce.boutique_banner = {
				    shortcode_data: {},
					View: {
						template: media.template( 'editor-boutique-banner' ),
						postID: $('#post_ID').val(),
						initialize: function( options ) {
							this.shortcode = options.shortcode;
							wp.mce.boutique_banner.shortcode_data = this.shortcode;

						},
						getHtml: function() {
							var options = this.shortcode.attrs.named;
							options['innercontent'] = this.shortcode.content;
							return this.template(options);
						}
					},
				    edit: function( node ) {
						var data = window.decodeURIComponent( $( node ).attr('data-wpview-text') );
					    console.debug(this);
					    var values = this.shortcode_data.attrs.named;
						values['innercontent'] = this.shortcode_data.content;
					    // console.log(values);

					    wp.mce.boutique_banner.popupwindow(tinyMCE.activeEditor, values);
						//$( node ).attr( 'data-wpview-text', window.encodeURIComponent( shortcode ) );
					},
				    // this is called from our tinymce plugin, also can call from our "edit" function above
				    // wp.mce.boutique_banner.popupwindow(tinyMCE.activeEditor, "bird");
				    popupwindow: function(editor, values, onsubmit_callback){
					    if(typeof onsubmit_callback != 'function'){
						    onsubmit_callback = function( e ) {
		                        // Insert content when the window form is submitted (this also replaces during edit, handy!)
							    var s = '[' + shortcode_string;
							    for(var i in e.data){
								    if(e.data.hasOwnProperty(i) && i != 'innercontent'){
									    s += ' ' + i + '="' + e.data[i] + '"';
								    }
							    }
							    s += ']';
							    if(typeof e.data.innercontent != 'undefined'){
								    s += e.data.innercontent;
								    s += '[/' + shortcode_string + ']';
							    }
		                        editor.insertContent( s );
		                    };
					    }
		                editor.windowManager.open( {
		                    title: 'WP SVG Icons',
		                    body: [
			                    {
			                        type: 'textbox',
			                        name: 'icon',
			                        label: 'icon',
				                    value: values['icon']
		                        },
			                    {
			                        type: 'listbox',
			                        name: 'wrap',
			                        label: 'Element Wrap',
				                    values: 'test'
		                        },
			                    {
			                        type: 'textbox',
			                        name: 'linkhref',
			                        label: 'Button URL',
				                    value: values['linkhref']
		                        },
			                    {
			                        type: 'textbox',
			                        name: 'innercontent',
			                        label: 'Content',
				                    value: values['innercontent']
		                        }
		                    ],
		                    onsubmit: onsubmit_callback
		                } );
				    }
				};
			    wp.mce.views.register( shortcode_string, wp.mce.boutique_banner );
			}(jQuery));
	    </script>

        <?php
    }

}

wp_svg_icons_view::get_instance()->init();
