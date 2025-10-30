<?php
/**
 * Plugin Name: Skylabs COA Block Pattern
 * Description: Adds COA Labs block pattern for FSE
 * Version: 1.0.0
 * Author: Case Study
 */

// Register COA Labs block pattern
function skylabs_register_coa_pattern() {
    register_block_pattern(
        'skylabs/coa-labs',
        array(
            'title'       => 'COA Labs Grid',
            'description' => 'Certificate of Analysis grid layout',
            'categories'  => array('text', 'buttons'),
            'content'     => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"2rem","right":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3rem"},"color":{"text":"#2c5f3f"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="color:#2c5f3f;font-size:3rem">COA Labs</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem"},"color":{"text":"#666"}}} -->
<p class="has-text-align-center" style="color:#666;font-size:1.2rem">Certificate of Analysis - Lab Testing Results</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"color":{"text":"#2c5f3f"},"typography":{"fontSize":"2rem"}}} -->
<h2 style="color:#2c5f3f;font-size:2rem">Flower Products</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
<div class="wp-block-columns" style="gap:2rem">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#f8f9fa","border":"#e9ecef"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background has-border" style="border-color:#e9ecef;border-width:1px;border-radius:12px;background-color:#f8f9fa;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Sour Cream Punch</h3>
<!-- /wp:heading -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"25px"},"color":{"background":"#28a745","text":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/wp-content/themes/your-child-theme/assets/coas/COA-SW3725J-SCP.pdf" target="_blank" rel="noopener" style="border-radius:25px;color:#ffffff;background-color:#28a745">View COA</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"border":{"radius":"12px","width":"1px"},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"color":{"background":"#f8f9fa","border":"#e9ecef"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background has-border" style="border-color:#e9ecef;border-width:1px;border-radius:12px;background-color:#f8f9fa;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Peanut Butter Gelato</h3>
<!-- /wp:heading -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":"25px"},"color":{"background":"#28a745","text":"#ffffff"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="/wp-content/themes/your-child-theme/assets/coas/COA-SW3725J-PBG.pdf" target="_blank" rel="noopener" style="border-radius:25px;color:#ffffff;background-color:#28a745">View COA</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->'
        )
    );
}
add_action('init', 'skylabs_register_coa_pattern');

/**
 * Enqueue script to make PDF links open in new tabs
 */
function skylabs_coa_pdf_script() {
    wp_enqueue_script('skylabs-coa-pdf', plugin_dir_url(__FILE__) . 'coa-pdf.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'skylabs_coa_pdf_script');