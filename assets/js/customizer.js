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

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
	// Home hero image.
	wp.customize('presley_homehero_image', function (value) {
    value.bind(function (to) {
        $('.home-page-title').css('background-image', 'url( '+ to +')');
    });
	});
	
	// portfolio hero image.
	wp.customize('presley_portfoliohero_image', function (value) {
    value.bind(function (to) {
        $('.page-template-portfolio .page-title').css('background-image', 'url( '+ to +')');
    });
	});
	// blog hero image.
	wp.customize('presley_bloghero_image', function (value) {
    value.bind(function (to) {
        $('.blog .page-title').css('background-image', 'url( '+ to +')');
    });
	});


} )( jQuery );
