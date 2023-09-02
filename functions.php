<?php
/**
 * Theme functions and definitions
 *
 * @package HelloBrigade
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'ADIDAS_VERSION', '1.0.0' );



define( 'ADIDAS_URI', get_template_directory_uri() );

define( 'ADIDAS_DIR', get_template_directory() );
define( 'ADIDAS_INC_DIR', ADIDAS_DIR . '/includes/' );




// Theme setup and script/style enqueue
require_once ADIDAS_INC_DIR . '/theme.php';

// WP actions/filters
require_once ADIDAS_INC_DIR . '/wp-hooks.php';

// AJAX functions
require_once ADIDAS_INC_DIR . '/ajax.php';

// admin functions
require_once ADIDAS_INC_DIR . '/admin.php';

// Contains all the shortcodes
require_once ADIDAS_INC_DIR . '/shortcodes.php';




