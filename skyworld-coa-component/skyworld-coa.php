<?php
/**
 * Plugin Name: Skyworld COA Component
 * Description: COA Labs functionality that works with any theme
 * Version: 1.0.0
 * Author: Case Study
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('SKYWORLD_COA_URL', plugin_dir_url(__FILE__));
define('SKYWORLD_COA_PATH', plugin_dir_path(__FILE__));

/**
 * Enqueue COA assets
 */
function skyworld_coa_enqueue_assets() {
    // Enqueue JavaScript
    wp_enqueue_script(
        'skyworld-coa-js',
        SKYWORLD_COA_URL . 'assets/coa-handler.js',
        array('jquery'),
        '1.0.0',
        true
    );
    
    // Enqueue CSS
    wp_enqueue_style(
        'skyworld-coa-css',
        SKYWORLD_COA_URL . 'assets/coa-styles.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'skyworld_coa_enqueue_assets');

/**
 * Include template functions
 */
require_once SKYWORLD_COA_PATH . 'inc/template-functions.php';

/**
 * Register COA Labs page template
 */
function skyworld_coa_page_template($template) {
    if (is_page() && get_page_template_slug() === 'coa-labs-template') {
        $plugin_template = SKYWORLD_COA_PATH . 'templates/coa-labs.php';
        if (file_exists($plugin_template)) {
            return $plugin_template;
        }
    }
    return $template;
}
add_filter('template_include', 'skyworld_coa_page_template');

/**
 * Add COA Labs template to page template dropdown
 */
function skyworld_coa_add_page_template($templates) {
    $templates['coa-labs-template'] = 'COA Labs Template';
    return $templates;
}
add_filter('theme_page_templates', 'skyworld_coa_add_page_template');