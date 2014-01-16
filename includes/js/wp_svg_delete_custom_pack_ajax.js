function wp_svg_uninstall_font_pack() {
	
	var data = {
		action : 'svg_delete_custom_pack'
	};
		
	jQuery.post(ajaxurl,data,function(response) {
		jQuery('#delete_succes_and_error_message').html(response);
	});
	
	jQuery('.error').remove();
		
	return false;

}

jQuery(document).ready(function() {
		// if the upload file field is blank, alert with an error
		jQuery('input[value="Import"]').click(function() {
		
		var icon_pack_upload_field = jQuery('#wp_svg_custom_pack_field').val();
		
		if ( icon_pack_upload_field == '' ) {
			
			alert('Please select a file.');
			return false;
			
		} else {
		
			var svgPackFileExtension = jQuery('#wp_svg_custom_pack_field').val().split('.').pop().toLowerCase();


			if(jQuery.inArray(svgPackFileExtension, ['zip']) == -1) {


				alert('Please select a .zip file.');


				event.preventDefault();


			} else {


				jQuery('#wp_svg_icons_upload_custom_pack_form').submit();


			}
		
		}
		
	});
	

	
});
