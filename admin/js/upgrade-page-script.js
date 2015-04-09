// custom upgrade page scripts
// oh yeaaaa
jQuery(document).ready(function() {	
	
	// nav click, swap out content etc.
	jQuery( '.nav-tab' ).click( function() {
		var clicked_tab = jQuery( this ).attr( 'data-attr' );
		jQuery( '.tab_content' ).hide();
		jQuery( '#'+clicked_tab ).fadeIn();
		
		jQuery( '.nav-tab' ).removeClass( 'nav-tab-active' );
		jQuery( this ).addClass( 'nav-tab-active' );
		
		return false;
	});	
	
});