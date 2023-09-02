<?php

/**
 * 
 * Theme functions and definitions
 * 
 */


// enqueue scripts and styles
function adidas_scripts() {
	wp_enqueue_style( 'adidas-style', get_template_directory_uri() . '/assets/css/main.css', array(), ADIDAS_VERSION );
	wp_enqueue_script( 'adidas-js', get_template_directory_uri() . '/assets/js/main.js', array(), ADIDAS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'adidas_scripts' );

