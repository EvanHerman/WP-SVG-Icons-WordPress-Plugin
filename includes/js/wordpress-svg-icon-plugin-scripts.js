/* WP SVG ICON PLUGIN PRO SCRIPTS 
			Compiled by Evan Herman - www.Evan-Herman.com			*/

jQuery(document).ready(function(){
	
	jQuery('.expansion-Glyph').hover(function(){ jQuery('.expansion-Glyph').css('cursor','pointer'); });
	jQuery('input[type=text].glyph_unicode').click(buttonClick);
	jQuery('input[type=text].expansion_glyph_unicode').click(expansionButtonClick);
	jQuery('.glyph').click(buttonClick);	
	jQuery('.expansion-Glyph').click(expansionButtonClick);
	
	function buttonClick() {		
		var glyphUnicode =  jQuery('input[type=text].glyph_unicode', this).val();
				jQuery('.glyph').removeClass('selected');				jQuery('.expansion-Glyph').removeClass('selected');												jQuery(this).addClass('selected');
	
				jQuery('input[type=text].copy_paste_input').val('<span data-icon="'+glyphUnicode + '"></span>');
				jQuery('input[type=text].expansion_glyph_unicode').css('background-color','#eee');
				jQuery('input[type=text].glyph_unicode').css('background-color','#eee');
				jQuery('input[type=text].glyph_unicode', this).css('background-color','#FF8000', 'font-color', '#000');
				jQuery('.wp-svg-icon-preview').html('<div class="wp-svg-iconset1-preview" data-icon="'+ glyphUnicode + '"></div>');
				jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
			};	
	
	function expansionButtonClick() {		
		var glyphUnicode =  jQuery('input[type=text].expansion_glyph_unicode', this).val();				jQuery('.glyph').removeClass('selected');				jQuery('.expansion-Glyph').removeClass('selected');								jQuery(this).addClass('selected');
				
				jQuery('input[type=text].copy_paste_input').val('<span class="'+glyphUnicode + '"></span>');
				jQuery('input[type=text].glyph_unicode').css('background-color','#eee');
				jQuery('input[type=text].expansion_glyph_unicode').css('background-color','#eee');
				jQuery('input[type=text].expansion_glyph_unicode', this).css('background-color','#FF8000', 'font-color', '#000');

				jQuery('.wp-svg-icon-preview').html('<div class="wp-svg-iconset1-preview"><span class="'+ glyphUnicode + '"></span></div>');
				jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
			};		

					
});						