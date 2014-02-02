function wp_svg_uninstall_font_pack() {
	
	var data = {
		action : 'svg_delete_custom_pack'
	};
		
			jQuery.ajax({		  type: "POST",		  url: ajaxurl,		  data: data,		  error: function(response) {			 jQuery('#delete_succes_and_error_message').html('<div class="error customFontUninstalledMessage"><p>Error uninstalling your custom font pack. Try again. If the error persists you will have to delete the file manually.</p></div>');		  }		});
	
	jQuery('.error').remove();	jQuery(document).ready(function() { 		jQuery("footer p:last-child").html(""); 		jQuery(".current-font-pack").html(""); 		jQuery(".preview-icon-code-box").hide(); 		jQuery("#uninstall-pack-button").attr("disabled","disabled"); 		jQuery(".dropDownButton").attr("disabled","disabled"); 		jQuery(".wp-svg-custom-pack-buttons").after("<div class=updated customFontUninstalledMessage><p>Custom font pack successfully uninstalled!</p></div>"); 		setTimeout(function() { jQuery(".updated").fadeOut(); },3500); 		jQuery('input[value="Import"]').removeAttr("disabled");		jQuery('#wp_svg_custom_pack_field').removeAttr("disabled");	});
		
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
