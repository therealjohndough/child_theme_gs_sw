<?php
/**
 * Skylabs Clean Child Theme Functions
 * Separates functionality from theme inheritance
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent theme styles
 */
function skylabs_enqueue_parent_styles() {
    wp_enqueue_style('greenshift-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'skylabs_enqueue_parent_styles');

/**
 * Conditionally enqueue COA Labs page styles and scripts
 */
function skylabs_enqueue_coa_assets() {
    // Only load on pages using the SW Labs template
    if (is_page_template('template_sw_labs.php')) {
        
        // Enqueue COA Labs specific CSS
        wp_enqueue_style(
            'skylabs-coa-styles',
            get_stylesheet_directory_uri() . '/assets/css/coa-labs.css',
            array('greenshift-parent-style'),
            '1.0.0'
        );
        
        // Enqueue COA Labs JavaScript
        wp_enqueue_script(
            'skylabs-coa-script',
            get_stylesheet_directory_uri() . '/assets/js/coa-open-newtab.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'skylabs_enqueue_coa_assets');

/**
 * Enqueue general site-wide custom styles (if any)
 */
function skylabs_enqueue_custom_styles() {
    // Only enqueue if custom styles file exists
    $custom_css = get_stylesheet_directory() . '/assets/css/custom.css';
    if (file_exists($custom_css)) {
        wp_enqueue_style(
            'skylabs-custom-styles',
            get_stylesheet_directory_uri() . '/assets/css/custom.css',
            array('greenshift-parent-style'),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'skylabs_enqueue_custom_styles');