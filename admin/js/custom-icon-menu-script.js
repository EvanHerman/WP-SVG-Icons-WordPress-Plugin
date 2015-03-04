jQuery(function() {
    jQuery( document ).ready( function() {
		
		
		// initialize the select field, when adding new pages to the nav menu
		jQuery('#menu-settings-column').bind('click', function(e) {	
			var menu_length = jQuery( '.menu-item' ).length;
	
				setInterval( function() {	
					var new_length = jQuery( '.menu-item' ).length;
					if( menu_length != new_length ) {
						menu_length = new_length;
						jQuery( '.selectpicker' ).each( function() {
							if( jQuery( this ).next().hasClass( 'bootstrap-select' ) ) {
								return;
							} else {
								jQuery( '.selectpicker' ).selectpicker({
									size: 8
								});
							}
						});
					}
				}, 1800); // end interval
		
		});
		
		// initialize the ones that are already set
		jQuery( '.selectpicker' ).selectpicker({
			size: 8
		});
		
	});
});