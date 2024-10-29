( function( $ ) {

	// Document ready
	$( function() {

		/**
		 * EU Cookie Law
		 */
		$cookieLaw = $( '.cookie-law' );

		// Hide if the visitor already has the 'beautimour_cookie_law' cookie set to true
		if ( Cookies.get( 'beautimour_cookie_law' ) ) {
			$cookieLaw.hide();
		}

		// Close the banner
		$cookieLaw.on( 'click', '.close-banner', function( event ) {

			// Prefent the default action
			event.preventDefault();

			// Hide the box
			$cookieLaw.fadeToggle( 'slow' );

			// Set the cookie
			Cookies.set( 'beautimour_cookie_law', true, {
				expires: 7
			} );

		} );


	} );

}( jQuery ) );
