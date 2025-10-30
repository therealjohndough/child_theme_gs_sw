<?php
/**
 * Plugin Name: Skylabs Greenshift COA
 * Description: COA functionality using Greenshift programmatic blocks
 * Version: 1.0.0
 * Author: Case Study
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class SkylabsGreenshiftCOA {
    
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
    }
    
    public function init() {
        // Register COA block pattern using Greenshift blocks
        register_block_pattern('skylabs/coa-grid', array(
            'title' => 'COA Labs Grid (Greenshift)',
            'description' => 'Certificate of Analysis grid using Greenshift blocks',
            'categories' => array('text', 'buttons'),
            'content' => $this->get_coa_block_content()
        ));
    }
    
    /**
     * Generate Greenshift-compatible block content
     */
    public function get_coa_block_content() {
        $coa_data = $this->get_coa_data();
        $content = '';
        
        // Main container using Greenshift element
        $container_id = 'gsbp-coa-' . uniqid();
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $container_id . '",
            "localId":"' . $container_id . '",
            "styleAttributes":{
                "maxWidth":["1200px"],
                "margin":["0 auto"],
                "padding":["2rem 1rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<div class="' . $container_id . '">';
        
        // Header section
        $header_id = 'gsbp-header-' . uniqid();
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $header_id . '",
            "localId":"' . $header_id . '",
            "textContent":"COA Labs",
            "tag":"h1",
            "styleAttributes":{
                "textAlign":["center"],
                "fontSize":["2.5rem"],
                "color":["#2c5f3f"],
                "marginBottom":["2rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<h1 class="' . $header_id . '">COA Labs</h1>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        // Subtitle
        $subtitle_id = 'gsbp-subtitle-' . uniqid();
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $subtitle_id . '",
            "localId":"' . $subtitle_id . '",
            "textContent":"Certificate of Analysis - Lab Testing Results",
            "tag":"p",
            "styleAttributes":{
                "textAlign":["center"],
                "fontSize":["1.2rem"],
                "color":["#666"],
                "marginBottom":["3rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<p class="' . $subtitle_id . '">Certificate of Analysis - Lab Testing Results</p>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        // Generate content for each category
        foreach ($coa_data as $category => $products) {
            $content .= $this->generate_category_blocks($category, $products);
        }
        
        $content .= '</div>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        return $content;
    }
    
    /**
     * Generate blocks for each category
     */
    public function generate_category_blocks($category, $products) {
        $content = '';
        
        // Category title
        $cat_title_id = 'gsbp-cat-' . uniqid();
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $cat_title_id . '",
            "localId":"' . $cat_title_id . '",
            "textContent":"' . ucfirst($category) . ' Products",
            "tag":"h2",
            "styleAttributes":{
                "fontSize":["1.8rem"],
                "color":["#2c5f3f"],
                "marginBottom":["1.5rem"],
                "borderBottom":["2px solid #28a745"],
                "paddingBottom":["0.5rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<h2 class="' . $cat_title_id . '">' . ucfirst($category) . ' Products</h2>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        // Grid container
        $grid_id = 'gsbp-grid-' . uniqid();
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $grid_id . '",
            "localId":"' . $grid_id . '",
            "styleAttributes":{
                "display":["grid"],
                "gridTemplateColumns":["repeat(auto-fill, minmax(280px, 1fr))"],
                "gap":["1.5rem"],
                "marginBottom":["3rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<div class="' . $grid_id . '">';
        
        // Generate product items
        foreach ($products as $product) {
            $content .= $this->generate_product_block($product);
        }
        
        $content .= '</div>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        return $content;
    }
    
    /**
     * Generate individual product block
     */
    public function generate_product_block($product) {
        $item_id = 'gsbp-item-' . uniqid();
        $title_id = 'gsbp-title-' . uniqid();
        $link_id = 'gsbp-link-' . uniqid();
        
        $content = '';
        
        // Product container
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $item_id . '",
            "localId":"' . $item_id . '",
            "styleAttributes":{
                "backgroundColor":["#f8f9fa"],
                "border":["1px solid #e9ecef"],
                "borderRadius":["12px"],
                "padding":["1.5rem"],
                "textAlign":["center"],
                "boxShadow":["0 2px 8px rgba(0,0,0,0.1)"],
                "transition":["all 0.3s ease"]
            },
            "CSSRender":1
        } -->';
        $content .= '<div class="' . $item_id . '">';
        
        // Product title
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $title_id . '",
            "localId":"' . $title_id . '",
            "textContent":"' . esc_html($product['name']) . '",
            "tag":"h3",
            "styleAttributes":{
                "fontSize":["1.1rem"],
                "color":["#2c3e50"],
                "marginBottom":["1rem"],
                "fontWeight":["600"]
            },
            "CSSRender":1
        } -->';
        $content .= '<h3 class="' . $title_id . '">' . esc_html($product['name']) . '</h3>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        // COA Link
        $pdf_url = plugins_url('assets/coas/' . $product['file'], __FILE__);
        $content .= '<!-- wp:greenshift-blocks/element {
            "id":"' . $link_id . '",
            "localId":"' . $link_id . '",
            "textContent":"View COA",
            "tag":"a",
            "linkSettings":{"href":"' . $pdf_url . '","target":"_blank","rel":"noopener noreferrer"},
            "styleAttributes":{
                "display":["inline-block"],
                "backgroundColor":["#28a745"],
                "color":["#ffffff"],
                "padding":["0.75rem 1.5rem"],
                "textDecoration":["none"],
                "borderRadius":["25px"],
                "fontWeight":["600"],
                "transition":["all 0.3s ease"],
                "textTransform":["uppercase"],
                "letterSpacing":["0.5px"],
                "fontSize":["0.9rem"]
            },
            "CSSRender":1
        } -->';
        $content .= '<a class="' . $link_id . '" href="' . $pdf_url . '" target="_blank" rel="noopener noreferrer">View COA</a>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        $content .= '</div>';
        $content .= '<!-- /wp:greenshift-blocks/element -->';
        
        return $content;
    }
    
    /**
     * Get COA data
     */
    public function get_coa_data() {
        return array(
            'flower' => array(
                array('name' => 'Sour Cream Punch', 'file' => 'COA-SW3725J-SCP.pdf'),
                array('name' => 'Peanut Butter Gelato', 'file' => 'COA-SW3725J-PBG.pdf'),
                array('name' => 'Lemon Oreos', 'file' => 'COA-SW3725J-LO.pdf'),
                array('name' => 'Wedding Cake', 'file' => 'COA-SW3725J-WZ.pdf'),
                array('name' => 'Kush Sorbet', 'file' => 'COA-SW3725J-KS.pdf'),
                array('name' => 'Gelato Glue', 'file' => 'COA-SW3725J-GG.pdf')
            ),
            'preroll' => array(
                array('name' => 'Sunset Punch Pre-Roll 5pk', 'file' => 'COA-SW040725-PRE05X6-SP.pdf'),
                array('name' => 'Gelato Glue Pre-Roll', 'file' => 'COA-SW031725-PRE05-GG.pdf'),
                array('name' => 'Peanut Butter Gelato Pre-Roll 6pk', 'file' => 'COA-SW060925-PRE5X6-PBG.pdf')
            ),
            'hash' => array(
                array('name' => 'Sunset Punch x Purple Punch Hash Hole', 'file' => 'COA-SW051925-HH-SPXPR.pdf')
            )
        );
    }
    
    /**
     * Enqueue frontend assets
     */
    public function enqueue_assets() {
        wp_enqueue_script(
            'skylabs-coa-handler',
            plugin_dir_url(__FILE__) . 'assets/coa-handler.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}

// Initialize the plugin
new SkylabsGreenshiftCOA();