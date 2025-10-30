<?php
/**
 * Plugin Name: Skyworld COA Injector
 * Description: Injects COA functionality into existing labs page without changing theme
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
 * Enqueue COA assets only on labs page
 */
function skyworld_coa_enqueue_assets() {
    // Check if we're on the labs page (adjust slug as needed)
    if (is_page('labs') || is_page('lab') || is_page('coa') || is_page('coa-labs')) {
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
}
add_action('wp_enqueue_scripts', 'skyworld_coa_enqueue_assets');

/**
 * Inject COA content into existing labs page
 */
function skyworld_inject_coa_content($content) {
    // Only on the labs page and in the main query
    if (is_page('labs') || is_page('lab') || is_page('coa') || is_page('coa-labs')) {
        if (is_main_query() && in_the_loop()) {
            // Replace or append COA content
            $coa_content = skyworld_get_coa_html();
            
            // You can either replace the content entirely:
            // return $coa_content;
            
            // Or append to existing content:
            return $content . $coa_content;
        }
    }
    
    return $content;
}
add_filter('the_content', 'skyworld_inject_coa_content');

/**
 * Generate COA HTML content
 */
function skyworld_get_coa_html() {
    $coa_data = skyworld_get_coa_data();
    $plugin_url = SKYWORLD_COA_URL;
    
    ob_start();
    ?>
    
    <div class="skyworld-coa-container">
        
        <header class="skyworld-coa-header">
            <h2>Certificate of Analysis - Lab Testing Results</h2>
            <p>View detailed lab results for all Sky World Cannabis products</p>
        </header>

        <?php foreach ($coa_data as $category => $products): ?>
            <div class="skyworld-coa-category">
                <h3><?php echo ucfirst($category); ?> Products</h3>
                <div class="skyworld-coa-grid">
                    
                    <?php foreach ($products as $product): ?>
                        <div class="skyworld-coa-item">
                            <h4><?php echo esc_html($product['name']); ?></h4>
                            <a href="<?php echo $plugin_url; ?>assets/coas/<?php echo esc_attr($product['file']); ?>" 
                               class="coa-link" target="_blank" rel="noopener">
                                View COA Report
                            </a>
                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        <?php endforeach; ?>

        <div class="skyworld-coa-faq">
            <h3>Frequently Asked Questions</h3>
            
            <div class="faq-item">
                <h4>What is a COA?</h4>
                <p>A Certificate of Analysis (COA) is a document that shows the results of laboratory testing for cannabis products, including potency, pesticides, heavy metals, and microbials.</p>
            </div>
            
            <div class="faq-item">
                <h4>How do I read the COA?</h4>
                <p>The COA shows test results for various compounds and contaminants. Look for THC/CBD percentages, and ensure all safety tests show "Pass" or are within acceptable limits.</p>
            </div>
            
            <div class="faq-item">
                <h4>How often are products tested?</h4>
                <p>All Sky World Cannabis products are tested by state-licensed laboratories before reaching dispensaries to ensure quality and safety.</p>
            </div>
        </div>

    </div>
    
    <?php
    return ob_get_clean();
}

/**
 * Get COA data
 */
function skyworld_get_coa_data() {
    return array(
        // Flower Products
        'flower' => array(
            array('name' => 'Sour Cream Punch', 'file' => 'COA-SW3725J-SCP.pdf'),
            array('name' => 'Peanut Butter Gelato', 'file' => 'COA-SW3725J-PBG.pdf'),
            array('name' => 'Lemon Oreos', 'file' => 'COA-SW3725J-LO.pdf'),
            array('name' => 'Wedding Cake', 'file' => 'COA-SW3725J-WZ.pdf'),
            array('name' => 'Kush Sorbet', 'file' => 'COA-SW3725J-KS.pdf'),
            array('name' => 'Gelato Glue', 'file' => 'COA-SW3725J-GG.pdf'),
            array('name' => 'Do Not Wake', 'file' => 'COA-SW3725J-DNW.pdf'),
            array('name' => '41 Glue', 'file' => 'COA-SW3725J-41G.pdf'),
            array('name' => 'Sunset Punch', 'file' => 'COA-SW3725J-SP.pdf'),
            array('name' => 'Grape Cream', 'file' => 'COA-SW3725J-GC.pdf')
        ),
        
        // Pre-Roll Products  
        'preroll' => array(
            array('name' => 'Sunset Punch Pre-Roll 5pk', 'file' => 'COA-SW040725-PRE05X6-SP.pdf'),
            array('name' => 'Gelato Glue Pre-Roll', 'file' => 'COA-SW031725-PRE05-GG.pdf'),
            array('name' => 'Gelato Glue Pre-Roll 6pk', 'file' => 'COA-SW040725-PRE05X6-GG.pdf'),
            array('name' => 'Peanut Butter Gelato Pre-Roll 6pk', 'file' => 'COA-SW060925-PRE5X6-PBG.pdf'),
            array('name' => 'Sunset Punch Pre-Roll', 'file' => 'COA-SW040725-PRE1-SP.pdf'),
            array('name' => 'Sour Cream Punch Pre-Roll 2pk', 'file' => 'COA-SW040725-PRE05X2-SCP.pdf'),
            array('name' => 'Sour Cream Punch Pre-Roll', 'file' => 'COA-SW031725-PRE1-SCP.pdf'),
            array('name' => 'Sunset Punch Pre-Roll 2pk', 'file' => 'COA-SW040725-PRE05X2-SP.pdf'),
            array('name' => 'Gelato Glue Pre-Roll 2pk', 'file' => 'COA-SW051925-PRE05X2-GG.pdf'),
            array('name' => 'Peanut Butter Gelato Pre-Roll 2pk', 'file' => 'COA-SW060925-PRE05X2-PBG.pdf'),
            array('name' => 'Sunset Berries Pre-Roll 2pk', 'file' => 'COA-SW060925-PRE05X2-SB.pdf')
        ),
        
        // Hash Hole Products
        'hash' => array(
            array('name' => 'Sunset Punch x Purple Punch Hash Hole', 'file' => 'COA-SW051925-HH-SPXPR.pdf')
        )
    );
}