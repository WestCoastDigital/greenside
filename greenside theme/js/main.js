jQuery( document ).ready( function( $ ) {
	'use strict';

	$( window ).load( function() {
	
		$( '.loader' ).fadeOut( 'slow' );

	} );
	
	$( '.masthead a[href^="#"]' ).on( 'click', function( e ) {
		e.preventDefault();
		var target = this.hash;

		var $target = $( target );

		$( 'html, body' ).stop().animate( {
			'scrollTop': $target.offset().top
		}, 900, 'swing', function() {
			window.location.hash = target;
		} );

	} );

	$( '.testimonials' ).slick( {
		arrows: false,
		dots: true
	} );

	$( '#gallery' ).css( 'min-height', $( '#gallery' ).height() );

} );