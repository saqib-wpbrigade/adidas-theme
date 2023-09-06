<?php

/**
 * Admin functions
 *
 * @package Adidas_Theme
 *
 */




// Custom settings
function theme_settings_add_menu() {
    add_menu_page('Theme Options', 'Theme Options', 'manage_options', 'theme-options', 'theme_options_page', null, 99);
    add_submenu_page('theme-options', 'Header Settings', 'Header Settings', 'manage_options', 'theme-header-settings', 'theme_header_settings_page');
    add_submenu_page('theme-options', 'Slider Settings', 'Slider Settings', 'manage_options', 'theme-slider-settings', 'theme_slider_settings_page');
}

function theme_options_page() {
    // Main theme options page content
    ?>
    <div class="wrap">
        <h2>Theme Options</h2>
        <!-- Add content here if needed -->
    </div>
    <?php
}

function theme_header_settings_page() {
// create a repeater field for slider


    // Header Settings page content
    ?>
    <div class="wrap">
        <h2>Header Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('theme_header_settings_group');
            do_settings_sections('theme-header-settings');
            

            submit_button('Save Header Settings');
            ?>
        </form>

      
    </div>
    <?php
}

function theme_slider_settings_page() {
    // Slider Settings page content
    ?>
    <div class="wrap">
        <h2>Slider Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('theme_slider_settings_group');
            do_settings_sections('theme-slider-settings');
            submit_button('Save Slider Settings');
            ?>
        </form>
        
    </div>
    <?php
}

function theme_header_settings_init() {
    // Register sections and fields for Header Settings
    add_settings_section('theme_header_settings_section', 'Header Settings', 'theme_header_settings_section_callback', 'theme-header-settings');
    add_settings_field('header_text', 'Header Text', 'header_text_callback', 'theme-header-settings', 'theme_header_settings_section');
    register_setting('theme_header_settings_group', 'header_text');
}



function theme_header_settings_section_callback() {
    echo '<p>Customize your header settings here.</p>';
}

function theme_slider_settings_section_callback() {
    echo '<p>Customize your slider settings here.</p>';
}



function theme_slider_settings_init() {
    // Register sections and fields for Slider Settings
    add_settings_section('theme_slider_settings_section', 'Slider Settings', 'theme_slider_settings_section_callback', 'theme-slider-settings');
  

    add_settings_field('slider_title', 'Slider Title', 'slider_title_callback', 'theme-slider-settings', 'theme_slider_settings_section');
    add_settings_field('slider_description', 'Slider Description', 'slider_description_callback', 'theme-slider-settings', 'theme_slider_settings_section');
    add_settings_field('slider_video_link', 'Video Link', 'slider_video_link_callback', 'theme-slider-settings', 'theme_slider_settings_section');
    add_settings_field('slider_image_url', 'Slider Image Upload', 'slider_image_url_callback', 'theme-slider-settings', 'theme_slider_settings_section');


    // Register settings for each field
    register_setting('theme_slider_settings_group', 'slider_title');
    register_setting('theme_slider_settings_group', 'slider_description');
    register_setting('theme_slider_settings_group', 'slider_video_link');
    register_setting('theme_slider_settings_group', 'slider_image_url');
 



}



function header_text_callback() {
    $header_text = get_option('header_text');
    echo '<textarea name="header_text" rows="4" cols="50">' . esc_html($header_text) . '</textarea>';
}

function slider_title_callback() {
    $slider_title = get_option('slider_title');
    echo '<input type="text" name="slider_title" value="' . esc_attr($slider_title) . '" />';
}

function slider_description_callback() {
    $slider_description = get_option('slider_description');
    echo '<textarea name="slider_description" rows="4" cols="50">' . esc_html($slider_description) . '</textarea>';
}

function slider_video_link_callback() {
    $slider_video_link = get_option('slider_video_link');
    echo '<input type="text" name="slider_video_link" value="' . esc_attr($slider_video_link) . '" />';
}

function slider_image_url_callback() {
    $slider_image_url = get_option('slider_image_url');
    echo '<input type="text" id="upload_img" name="slider_image_url" value="' . esc_attr($slider_image_url) . '" />';
    
    echo '<input type="button" id="upload_slider_image_button" class="button-secondary" value="Upload Image" /><br>';
    echo '<img id="slider_image_preview" src="' . esc_attr($slider_image_url) . '" style="max-width: 200px; height: auto;" />';
}








add_action('admin_menu', 'theme_settings_add_menu');
add_action('admin_init', 'theme_header_settings_init');
add_action('admin_init', 'theme_slider_settings_init');






    






