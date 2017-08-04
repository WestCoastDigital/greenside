jQuery( document ).ready( function( $ ) {
	'use strict';
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
	$( '.gallery' ).featherlightGallery();
	$( function() {
		var selectedClass = '';
		$( '.filter' ).click( function( e ) {
			e.preventDefault();
			$( '.filter' ).removeClass( 'active' );
			$( this ).addClass( 'active' );
			selectedClass = $( this ).attr( 'data-rel' );
			$( '#portfolio' ).fadeTo( 100, 0.1 );
			$( '#portfolio div' ).not( '.' + selectedClass ).fadeOut().removeClass( 'scale' );
			setTimeout( function() {
				$( '.' + selectedClass ).fadeIn().addClass( 'scale' );
				$( '#portfolio' ).fadeTo( 300, 1 );
			}, 300 );
		} );
	} );
	$( '.testimonials' ).slick( {
		arrows: false,
		dots: true
	} );
} );