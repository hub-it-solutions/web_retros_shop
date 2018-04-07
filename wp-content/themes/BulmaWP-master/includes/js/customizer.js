/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Show preview titles
	wp.customize( 'bulmawp_show_titles', function( value ) {
		value.bind( function( newval ) {
			if ( newval == true ) {
				$( 'body' ).addClass( 'show-preview-titles' );
			} else {
				$( 'body' ).removeClass( 'show-preview-titles' );
			}
		} );
	} );


} )( jQuery );
