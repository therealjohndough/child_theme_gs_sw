<?php
/**
 * Greenshift Child Theme Functions
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function greenshift_child_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style('greenshift-parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue child theme stylesheet
    wp_enqueue_style('greenshift-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('greenshift-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'greenshift_child_enqueue_styles');

/**
 * Conditionally load COA Labs styles only on Labs page
 * This ensures the heavy CSS rules only load when needed
 */
function greenshift_child_coa_labs_assets() {
    // Check if we're on a page using the Labs COA Page template
    if (is_page_template('template_sw_labs.php')) {
        // Child theme already has all COA styles in style.css
        // If you split out labs-specific CSS later, enqueue it here:
        // wp_enqueue_style('skyworld-coa-labs', get_stylesheet_directory_uri() . '/css/coa-labs.css', array('greenshift-child-style'), '1.0.0');
        
        // If you extract JavaScript to separate file later, enqueue it here:
        // wp_enqueue_script('skyworld-coa-labs-js', get_stylesheet_directory_uri() . '/js/coa-labs.js', array('jquery'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'greenshift_child_coa_labs_assets');

/**
 * Enqueue COA new tab handler script
 */
function greenshift_enqueue_coa_open_newtab(){
    wp_enqueue_script(
        'greenshift-coa-newtab',
        get_stylesheet_directory_uri() . '/assets/js/coa-open-newtab.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'greenshift_enqueue_coa_open_newtab');

/**
 * Add any custom functions below this line
 */