<?php

/**
 * 
 * Theme functions and definitions
 * 
 */


// enqueue scripts and styles
function adidas_scripts() {
	wp_enqueue_style( 'adidas-style', get_template_directory_uri() . '/assets/css/main.css', array(), ADIDAS_VERSION );
	wp_enqueue_style( 'adidas-stylesheet', get_template_directory_uri() . '/style.css', array(), ADIDAS_VERSION );

	wp_enqueue_script( 'adidas-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), ADIDAS_VERSION, true );
	
}
add_action( 'wp_enqueue_scripts', 'adidas_scripts' );


// enqueue js scripts for admin
function adidas_admin_scripts() {
	wp_enqueue_media();
	wp_enqueue_script( 'adidas-admin-js', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), ADIDAS_VERSION, true );
	
	// pass ajax url to admin.js
	wp_localize_script( 'adidas-admin-js', 'adidas_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );



}
add_action( 'admin_enqueue_scripts', 'adidas_admin_scripts' );

