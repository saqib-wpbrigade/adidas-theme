<?php

/**
 * Theme functions and definitions
 *
 * @package Adidas_Theme
 */


// theme support for custom logo
function custom_logo() {
  add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'custom_logo' );

// theme support for custom header
function register_my_menu() {
    // Enable support for custom menus
    add_theme_support('menus');

    // Register your custom menu locations
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', ' adidas'),
        'secondary_menu' => __('Secondary Menu', 'adidas'),
    ));
}
add_action('init', 'register_my_menu');


