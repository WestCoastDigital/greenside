<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

function workpower_theme_setup() {
	
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_image_size( 'gallery', 296, 185, true );
	
}
add_action( 'after_setup_theme', 'workpower_theme_setup' );


function workpower_enqueue_theme_scripts() {
	
	/*
	 * CSS
	 */
	wp_enqueue_style( 'opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' );
	wp_enqueue_style( 'featherlight', get_template_directory_uri() . '/css/featherlight.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'theme-styles', get_stylesheet_uri() );
	
    /*
	 * JS
	 */
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'quicksand', get_template_directory_uri() . '/js/jquery.quicksand.js', array(), '1.2.2', true );
	wp_enqueue_script( 'gallery-filter', get_template_directory_uri() . '/js/gallery-filter.js', array(), '1.0.0', true );
	wp_enqueue_script( 'featherlight', get_template_directory_uri() . '/js/featherlight.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'workpower_enqueue_theme_scripts' );


function workpower_change_logo_class( $html ) {
	
	$html = str_replace('class="custom-logo"', 'logo', $html);
	$html = str_replace('class="custom-logo-link"', 'logo', $html);
	return $html;
	
}
add_filter( 'get_custom_logo', 'workpower_change_logo_class' );

function workpower_copyright() {
	
	$date = date('Y');
	$site = get_bloginfo( 'name' );
	$workpower_url = 'https://workpowermedia.com.au';
	
	$copyright = '&copy; ';
	$copyright .= $date . ' ';
	$copyright .= $site;
	$copyright .= '. All rights reserved.';
	if ( $workpower_url ) {
		$copyright .= ' Website Maintained by <a href="' . $workpower_url . '">Workpower Media</a>';
	}
	
	return $copyright;
	
}