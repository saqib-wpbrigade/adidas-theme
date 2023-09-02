<?php

/**
 * Admin functions
 *
 * @package Adidas_Theme
 *
 */



// Custom settings
function theme_settings_add_menu() {
    add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'theme_settings_page', null, 99);
  }
  add_action( 'admin_menu', 'theme_settings_add_menu' );

  function theme_settings_page() {
    ?>
    <div class="wrap">
        <h2>Theme Settings</h2>
        <form method="post" action="options.php">
            <?php
            // Add settings fields here using the settings API
            // settings_fields('theme_settings_group');
            // do_settings_sections('theme-settings');
            // submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

// function theme_settings_init() {
//     // Register a section and fields for your settings
//     add_settings_section('theme_settings_section', 'General Settings', 'theme_settings_section_callback', 'theme-settings');

//     add_settings_section('theme_settings_sections', 'Header Settings', 'theme_settings_header_callback', 'theme-settings');

//     // Add settings fields
//     add_settings_field('site_title', 'Site Title', 'site_title_callback', 'theme-settings', 'theme_settings_section');
//     add_settings_field('logo_upload', 'Logo Upload', 'logo_upload_callback', 'theme-settings', 'theme_settings_section');

//     // Register settings
//     register_setting('theme_settings_group', 'site_title');
//     register_setting('theme_settings_group', 'logo_upload');
// }

// function theme_settings_section_callback() {
//     echo '<p>Customize your theme settings here.</p>';
// }

// function site_title_callback() {
//     $site_title = get_option('site_title');
//     echo '<input type="text" name="site_title" value="' . esc_attr($site_title) . '" />';
// }

// function logo_upload_callback() {
//     $logo_upload = get_option('logo_upload');
//     echo '<input type="file" name="logo_upload" />';
//     if ($logo_upload) {
//         echo '<br /><img src="' . esc_url($logo_upload) . '" alt="Logo" width="100" height="100" />';
//     }
// }

// add_action('admin_menu', 'theme_settings_add_menu');
// add_action('admin_init', 'theme_settings_init');


    






