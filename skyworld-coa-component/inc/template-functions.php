<?php
/**
 * COA Template Functions
 */

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

/**
 * Render COA grid
 */
function skyworld_render_coa_grid() {
    $coa_data = skyworld_get_coa_data();
    $plugin_url = plugin_dir_url(dirname(__FILE__));
    
    foreach ($coa_data as $category => $products) {
        echo '<div class="skyworld-coa-category">';
        echo '<h2>' . ucfirst($category) . ' Products</h2>';
        echo '<div class="skyworld-coa-grid">';
        
        foreach ($products as $product) {
            echo '<div class="skyworld-coa-item">';
            echo '<h3>' . esc_html($product['name']) . '</h3>';
            echo '<a href="' . $plugin_url . 'assets/coas/' . esc_attr($product['file']) . '" class="coa-link" target="_blank" rel="noopener">';
            echo 'View COA Report';
            echo '</a>';
            echo '</div>';
        }
        
        echo '</div>'; // .skyworld-coa-grid
        echo '</div>'; // .skyworld-coa-category
    }
}