/* WP SVG ICON PLUGIN PRO SCRIPTS 
			Compiled by Evan Herman - www.Evan-Herman.com
		  With Help From: Ben Rothman */

jQuery(document).ready(function(){
	
	jQuery('.glyph').hover(function(){ jQuery('.glyph').css('cursor','pointer'); });
	jQuery('input[type=text].glyph_unicode').click(buttonClick);
	jQuery('.glyph').click(buttonClick);	
	
	function buttonClick() {		
		var glyphUnicode =  jQuery('input[type=text].glyph_unicode', this).val();
				
				jQuery('.fs1').css('color','#292929');
				jQuery('input[type=text].copy_paste_input').val('<div data-icon="'+ glyphUnicode + '"></div>');
				jQuery('input[type=text].glyph_unicode').css('background-color','#eee');
				jQuery('input[type=text].glyph_unicode', this).css('background-color','#FF8000', 'font-color', '#000');
				jQuery('.fs1', this).css('color','#FF8000');
				jQuery('.wp-svg-icon-preview').html('<div class="wp-svg-iconset1-preview" data-icon="'+ glyphUnicode + '"></div>');
				jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
			};	

					
});						