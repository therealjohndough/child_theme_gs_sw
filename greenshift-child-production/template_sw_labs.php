<?php
/**
 * Template Name: Labs COA Page
 * Description: Certificate of Analysis page template for Skyworld Cannabis
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header(); 

// COA Data Array
$coa_data = array(
    // Flower Products
    array('strain' => 'Lemon Oreoz', 'batch' => 'SW3725J-LO', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '26.8%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-LO.pdf'),
    array('strain' => 'Wafflez', 'batch' => 'SW3725J-WZ', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '27.27%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-WZ.pdf'),
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW3725J-SCP', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '24.7%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-SCP.pdf'),
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW031725-J35-SCP', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '24.7%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW031725-J35-SCP.pdf'),
    array('strain' => 'Peanut Butter Gelato', 'batch' => 'SW3725J-PBG', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-PBG.pdf'),
    array('strain' => 'Peanut Butter Gelato', 'batch' => 'SW042825-J35-PBG', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW042825-J35-PBG.pdf'),
    array('strain' => 'Peanut Butter Gelato', 'batch' => 'SW051925-J32-PBG', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW051925-J32-PBG.pdf'),
    array('strain' => 'Kept Secret', 'batch' => 'SW3725J-KS', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '24.2%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-KS.pdf'),
    array('strain' => 'Stay Puft', 'batch' => 'SW3725J-SP', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '25.9%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-SP.pdf'),
    array('strain' => 'Dirt n Worms', 'batch' => 'SW3725J-DNW', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '24.9%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-DNW.pdf'),
    array('strain' => '41 G\'s', 'batch' => 'SW3725J-41G', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '26.1%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-41G.pdf'),
    array('strain' => 'Gushcanna', 'batch' => 'SW3725J-GC', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '25.5%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-GC.pdf'),
    array('strain' => 'Garlic Gravity', 'batch' => 'SW3725J-GG', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW3725J-GG.pdf'),
    array('strain' => 'Melted Strawberries', 'batch' => 'SW063025-J35-MS', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '35.2%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW063025-J35-MS.pdf'),
    array('strain' => 'Triple Burger', 'batch' => 'SW063025-J35-TB', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '31%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW063025-J35-TB.pdf'),
    array('strain' => 'STAYME7O', 'batch' => 'SM060925-J35-GG-H6/7', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '26.8%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SM060925-J35-GG-H6.pdf'),
    array('strain' => 'Charmz', 'batch' => 'SW3725J-CMZ', 'type' => 'flower', 'weight' => '3.5g', 'thc' => '27.2%', 'pdf_url' => ''),
    
    // Pre-roll Products
    array('strain' => 'Garlic Gravity', 'batch' => 'SW031725-PRE05-GG', 'type' => 'preroll', 'weight' => '2 x 0.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW031725-PRE05-GG.pdf'),
    array('strain' => 'Garlic Gravity', 'batch' => 'SW040725-PRE05X6-GG', 'type' => 'preroll', 'weight' => '0.5g (6pk Pre-roll)', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE05X6-GG.pdf'),
    array('strain' => 'Garlic Gravity', 'batch' => 'SW051925-PRE05X2-GG', 'type' => 'preroll', 'weight' => '2 x 0.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW051925-PRE05X2-GG.pdf'),
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW031725-PRE1-SCP', 'type' => 'preroll', 'weight' => '1g', 'thc' => '24.7%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW031725-PRE1-SCP.pdf'),
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW040725-PRE1-SCP', 'type' => 'preroll', 'weight' => '1g', 'thc' => '24.7%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE1-SCP.pdf'),
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW040725-PRE05X2-SCP', 'type' => 'preroll', 'weight' => '0.5g (2pk Pre-roll)', 'thc' => '24.7%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE05X2-SCP.pdf'),
    array('strain' => 'Stay Puft', 'batch' => 'SW040725-PRE1-SP', 'type' => 'preroll', 'weight' => '1g', 'thc' => '25.9%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE1-SP.pdf'),
    array('strain' => 'Stay Puft', 'batch' => 'SW040725-PRE05X2-SP', 'type' => 'preroll', 'weight' => '0.5g (2pk Pre-roll)', 'thc' => '25.9%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE05X2-SP.pdf'),
    array('strain' => 'Stay Puft', 'batch' => 'SW040725-PRE05X6-SP', 'type' => 'preroll', 'weight' => '0.5g (6pk Pre-roll)', 'thc' => '25.9%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW040725-PRE05X6-SP.pdf'),
    array('strain' => 'Peanut Butter Gelato', 'batch' => 'SW060925-PRE05X2-PBG', 'type' => 'preroll', 'weight' => '2 x 0.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW060925-PRE05X2-PBG.pdf'),
    array('strain' => 'Peanut Butter Gelato', 'batch' => 'SW060925-PRE5X6-PBG', 'type' => 'preroll', 'weight' => '6 x 0.5g', 'thc' => '28%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW060925-PRE5X6-PBG.pdf'),
    array('strain' => 'Melted Strawberries', 'batch' => 'SW063025-PRE05X2-MS', 'type' => 'preroll', 'weight' => '0.5g (2pk Pre-roll)', 'thc' => '35.2%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW063025-PRE05X2-MS.pdf'),
    array('strain' => 'Triple Burger', 'batch' => 'SW063025-PRE05X2-TB', 'type' => 'preroll', 'weight' => '0.5g (2pk Pre-roll)', 'thc' => '31%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW063025-PRE05X2-TB.pdf'),
    array('strain' => 'White Apple Runtz', 'batch' => 'SW063025-PRE05-WAR', 'type' => 'preroll', 'weight' => '0.5g', 'thc' => '29.8%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW063025-PRE05-WAR.pdf'),
    array('strain' => 'Superboof', 'batch' => 'SW060925-PRE05X2-SB', 'type' => 'preroll', 'weight' => '0.5g (2pk Pre-roll)', 'thc' => '31%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW060925-PRE05X2-SB.pdf'),
    
    // Hash Hole Products
    array('strain' => 'Sherb Cream Pie', 'batch' => 'SW051925-HH-SCPXPR', 'type' => 'hashhole', 'weight' => '1g', 'thc' => '39.1%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW051925-HH-SCPXPR.pdf'),
    array('strain' => 'Stay Puft', 'batch' => 'SW051925-HH-SPXPR', 'type' => 'hashhole', 'weight' => '1g', 'thc' => '36.6%', 'pdf_url' => get_stylesheet_directory_uri() . '/assets/coas/COA-SW051925-HH-SPXPR.pdf')
);

// Group flower products by strain
$flower_products = array_filter($coa_data, function($item) {
    return $item['type'] === 'flower' && $item['weight'] === '3.5g';
});

$grouped_flower = array();
foreach ($flower_products as $product) {
    $grouped_flower[$product['strain']][] = $product;
}

// Get preroll products
$preroll_products = array_filter($coa_data, function($item) {
    return $item['type'] === 'preroll';
});

// Get hashhole products
$hashhole_products = array_filter($coa_data, function($item) {
    return $item['type'] === 'hashhole';
});
?>

<div class="wp-site-blocks">
    <div class="wp-block-group is-layout-constrained wp-block-group-is-layout-constrained">

<div class="skyworld-coa-labs">
    <!-- Flower Section -->
    <div class="coa-section">
        <h2>Flower 3.5g Jars</h2>
        <div class="coa-table">
            <table>
                <thead>
                    <tr>
                        <th>PRODUCT</th>
                        <th>LOT # 1</th>
                        <th>LOT # 2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grouped_flower as $strain => $products): 
                        $product1 = $products[0] ?? null;
                        $product2 = $products[1] ?? null;
                    ?>
                        <tr>
                            <td><strong><?php echo esc_html($strain); ?></strong></td>
                            <td>
                                <?php if ($product1): ?>
                                    <a href="#" class="coa-link" role="button"
                                       data-batch="<?php echo esc_attr($product1['batch']); ?>" 
                                       data-strain="<?php echo esc_attr($product1['strain']); ?>" 
                                       data-pdf="<?php echo esc_url($product1['pdf_url']); ?>"
                                       aria-label="View COA for <?php echo esc_attr($product1['strain']); ?> batch <?php echo esc_attr($product1['batch']); ?>">
                                        <?php echo esc_html($product1['batch']); ?>
                                    </a>
                                <?php else: ?>
                                    &nbsp;
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($product2): ?>
                                    <a href="#" class="coa-link" role="button"
                                       data-batch="<?php echo esc_attr($product2['batch']); ?>" 
                                       data-strain="<?php echo esc_attr($product2['strain']); ?>" 
                                       data-pdf="<?php echo esc_url($product2['pdf_url']); ?>"
                                       aria-label="View COA for <?php echo esc_attr($product2['strain']); ?> batch <?php echo esc_attr($product2['batch']); ?>">
                                        <?php echo esc_html($product2['batch']); ?>
                                    </a>
                                <?php else: ?>
                                    &nbsp;
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Pre-rolls Section -->
    <div class="coa-section">
        <h2>Pre-Rolls</h2>
        <div class="coa-table">
            <table>
                <thead>
                    <tr>
                        <th>PRODUCT</th>
                        <th>WEIGHT</th>
                        <th>LOT #</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($preroll_products as $product): ?>
                        <tr>
                            <td><strong><?php echo esc_html($product['strain']); ?></strong></td>
                            <td><?php echo esc_html($product['weight']); ?></td>
                            <td>
                                <a href="#" class="coa-link" role="button"
                                   data-batch="<?php echo esc_attr($product['batch']); ?>" 
                                   data-strain="<?php echo esc_attr($product['strain']); ?>" 
                                   data-pdf="<?php echo esc_url($product['pdf_url']); ?>"
                                   aria-label="View COA for <?php echo esc_attr($product['strain']); ?> batch <?php echo esc_attr($product['batch']); ?>">
                                    <?php echo esc_html($product['batch']); ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Hash Holes Section -->
    <div class="coa-section">
        <h2>Hash Holes</h2>
        <div class="coa-table">
            <table>
                <thead>
                    <tr>
                        <th>PRODUCT</th>
                        <th>WEIGHT</th>
                        <th>LOT #</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hashhole_products as $product): ?>
                        <tr>
                            <td><strong><?php echo esc_html($product['strain']); ?></strong></td>
                            <td><?php echo esc_html($product['weight']); ?></td>
                            <td>
                                <a href="#" class="coa-link" role="button"
                                   data-batch="<?php echo esc_attr($product['batch']); ?>" 
                                   data-strain="<?php echo esc_attr($product['strain']); ?>" 
                                   data-pdf="<?php echo esc_url($product['pdf_url']); ?>"
                                   aria-label="View COA for <?php echo esc_attr($product['strain']); ?> batch <?php echo esc_attr($product['batch']); ?>">
                                    <?php echo esc_html($product['batch']); ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="coa-section coa-faq-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-coa-definition">
                    <span>What is a Certificate of Analysis (COA)?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-coa-definition" class="faq-answer" hidden>
                    <p>A Certificate of Analysis (COA) is an official laboratory document that provides detailed information about the cannabinoid content, terpene profile, and safety testing results for a specific batch of cannabis. Each COA verifies the product's potency, purity, and compliance with New York State regulations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-why-check">
                    <span>Why should I check COA lab results before purchasing cannabis?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-why-check" class="faq-answer" hidden>
                    <p>Checking COA lab results ensures you're getting safe, tested cannabis products. The COA confirms THC and CBD levels, checks for contaminants like pesticides, heavy metals, and mold, and verifies the product meets New York State safety standards. It helps you make informed decisions about potency and quality.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-testing-info">
                    <span>What information is included in cannabis lab testing?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-testing-info" class="faq-answer" hidden>
                    <p>Cannabis lab testing includes cannabinoid potency analysis (THC, CBD, CBG levels), terpene profiles, pesticide screening, heavy metal testing, microbial contaminant testing (mold, bacteria), residual solvent analysis, and moisture content. All Skyworld products undergo comprehensive third-party testing to ensure quality and safety.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-read-coa">
                    <span>How do I read a cannabis COA?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-read-coa" class="faq-answer" hidden>
                    <p>To read a COA, look for the batch or lot number to match your product, check the cannabinoid percentages (THC, CBD), review the terpene profile for flavor and effects, verify the testing date is recent, and ensure all safety tests (pesticides, heavy metals, microbes) show "Pass" or "ND" (Not Detected). Our team is happy to help explain any COA details.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-independent-labs">
                    <span>Are Skyworld Cannabis products tested by independent labs?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-independent-labs" class="faq-answer" hidden>
                    <p>Yes, all Skyworld Cannabis products are tested by certified, independent third-party laboratories licensed by New York State. We partner with accredited testing facilities to ensure unbiased, accurate results for every batch. This independent verification guarantees transparency and quality you can trust.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-batch-number">
                    <span>What does the batch number on my cannabis product mean?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-batch-number" class="faq-answer" hidden>
                    <p>The batch or lot number is a unique identifier for a specific production run of cannabis. It allows us to track cultivation, harvest date, processing, and testing for that exact product. You can use the batch number on this page to view the corresponding Certificate of Analysis and verify your product's test results.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-testing-frequency">
                    <span>How often are cannabis products tested in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-testing-frequency" class="faq-answer" hidden>
                    <p>In New York State, every batch of cannabis products must be tested before reaching consumers. This batch-by-batch testing ensures consistent quality and safety. Skyworld tests 100% of our production batches for potency and contaminants, with results available publicly on this page.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-thc-difference">
                    <span>What is the difference between THC and total THC?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-thc-difference" class="faq-answer" hidden>
                    <p>THC refers to delta-9-tetrahydrocannabinol in its active form, while Total THC includes both active THC and THCA (the non-psychoactive precursor). THCA converts to THC when heated (smoked or vaporized). Total THC gives you the maximum potential potency after decarboxylation and is the most accurate measure for comparing products.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-find-coa">
                    <span>Where can I find the COA for my specific product?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-find-coa" class="faq-answer" hidden>
                    <p>Find the batch or lot number on your product packaging (usually printed on the label or bottom of the container). Then locate that batch number in the tables above and click on it to view the full Certificate of Analysis. Each COA is specific to that batch and provides complete testing information for your exact product.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" aria-expanded="false" aria-controls="faq-pesticides">
                    <span>Does Skyworld test for pesticides and contaminants?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div id="faq-pesticides" class="faq-answer" hidden>
                    <p>Absolutely. Every Skyworld product is tested for pesticides, heavy metals (lead, arsenic, cadmium, mercury), residual solvents, mycotoxins, and microbial contaminants including mold, yeast, E. coli, and Salmonella. We maintain zero-tolerance standards and only release products that pass all safety screenings.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox HTML -->
<div id="skyworld-coa-lightbox" class="skyworld-lightbox">
    <div class="skyworld-lightbox-content">
        <div class="skyworld-lightbox-header">
            <h3 id="skyworld-lightbox-title">Loading...</h3>
            <button class="skyworld-close-btn" type="button" aria-label="Close COA viewer">×</button>
        </div>
        <div id="skyworld-pdf-container">
            <div class="skyworld-loading">
                <div class="skyworld-spinner"></div>
                <p>Loading COA document...</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Schema Markup for SEO -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a Certificate of Analysis (COA)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A Certificate of Analysis (COA) is an official laboratory document that provides detailed information about the cannabinoid content, terpene profile, and safety testing results for a specific batch of cannabis. Each COA verifies the product's potency, purity, and compliance with New York State regulations."
      }
    },
    {
      "@type": "Question",
      "name": "Why should I check COA lab results before purchasing cannabis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Checking COA lab results ensures you're getting safe, tested cannabis products. The COA confirms THC and CBD levels, checks for contaminants like pesticides, heavy metals, and mold, and verifies the product meets New York State safety standards. It helps you make informed decisions about potency and quality."
      }
    },
    {
      "@type": "Question",
      "name": "What information is included in cannabis lab testing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Cannabis lab testing includes cannabinoid potency analysis (THC, CBD, CBG levels), terpene profiles, pesticide screening, heavy metal testing, microbial contaminant testing (mold, bacteria), residual solvent analysis, and moisture content. All Skyworld products undergo comprehensive third-party testing to ensure quality and safety."
      }
    },
    {
      "@type": "Question",
      "name": "How do I read a cannabis COA?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To read a COA, look for the batch or lot number to match your product, check the cannabinoid percentages (THC, CBD), review the terpene profile for flavor and effects, verify the testing date is recent, and ensure all safety tests (pesticides, heavy metals, microbes) show 'Pass' or 'ND' (Not Detected). Our team is happy to help explain any COA details."
      }
    },
    {
      "@type": "Question",
      "name": "Are Skyworld Cannabis products tested by independent labs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, all Skyworld Cannabis products are tested by certified, independent third-party laboratories licensed by New York State. We partner with accredited testing facilities to ensure unbiased, accurate results for every batch. This independent verification guarantees transparency and quality you can trust."
      }
    },
    {
      "@type": "Question",
      "name": "What does the batch number on my cannabis product mean?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The batch or lot number is a unique identifier for a specific production run of cannabis. It allows us to track cultivation, harvest date, processing, and testing for that exact product. You can use the batch number on this page to view the corresponding Certificate of Analysis and verify your product's test results."
      }
    },
    {
      "@type": "Question",
      "name": "How often are cannabis products tested in New York?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In New York State, every batch of cannabis products must be tested before reaching consumers. This batch-by-batch testing ensures consistent quality and safety. Skyworld tests 100% of our production batches for potency and contaminants, with results available publicly on this page."
      }
    },
    {
      "@type": "Question",
      "name": "What is the difference between THC and total THC?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "THC refers to delta-9-tetrahydrocannabinol in its active form, while Total THC includes both active THC and THCA (the non-psychoactive precursor). THCA converts to THC when heated (smoked or vaporized). Total THC gives you the maximum potential potency after decarboxylation and is the most accurate measure for comparing products."
      }
    },
    {
      "@type": "Question",
      "name": "Where can I find the COA for my specific product?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Find the batch or lot number on your product packaging (usually printed on the label or bottom of the container). Then locate that batch number in the tables above and click on it to view the full Certificate of Analysis. Each COA is specific to that batch and provides complete testing information for your exact product."
      }
    },
    {
      "@type": "Question",
      "name": "Does Skyworld test for pesticides and contaminants?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. Every Skyworld product is tested for pesticides, heavy metals (lead, arsenic, cadmium, mercury), residual solvents, mycotoxins, and microbial contaminants including mold, yeast, E. coli, and Salmonella. We maintain zero-tolerance standards and only release products that pass all safety screenings."
      }
    }
  ]
}
</script>

<script>
jQuery(document).ready(function($) {
    // Handle COA link clicks
    $(document).on('click', '.coa-link', function(e) {
        e.preventDefault();
        const batch = $(this).data('batch');
        const strain = $(this).data('strain');
        const pdfUrl = $(this).data('pdf');
        openLightbox(batch, strain, pdfUrl);
    });
    
    // Handle close button
    $(document).on('click', '.skyworld-close-btn', function(e) {
        e.preventDefault();
        closeLightbox();
    });
    
    // Close when clicking outside
    $(document).on('click', '.skyworld-lightbox', function(e) {
        if (e.target === this) closeLightbox();
    });
    
    // Close with Escape key
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $('.skyworld-lightbox').hasClass('active')) {
            closeLightbox();
        }
    });
    
    // FAQ Accordion functionality
    $('.faq-question').on('click', function() {
        const $this = $(this);
        const $answer = $('#' + $this.attr('aria-controls'));
        const isExpanded = $this.attr('aria-expanded') === 'true';
        
        // Close all other FAQs
        $('.faq-question').attr('aria-expanded', 'false');
        $('.faq-answer').attr('hidden', true);
        
        // Toggle current FAQ
        if (!isExpanded) {
            $this.attr('aria-expanded', 'true');
            $answer.removeAttr('hidden').addClass('active');
        } else {
            $answer.removeClass('active');
        }
    });
    
    function openLightbox(batch, strain, pdfUrl) {
        const lightbox = $('#skyworld-coa-lightbox');
        const title = $('#skyworld-lightbox-title');
        const container = $('#skyworld-pdf-container');
        
        title.text(strain + ' - ' + batch);
        container.html('<div class="skyworld-loading"><div class="skyworld-spinner"></div><p>Loading COA document...</p></div>');
        
        lightbox.css('display', 'flex').addClass('active');
        $('body').css('overflow', 'hidden');
        
        setTimeout(function() {
            $('.skyworld-close-btn').focus();
        }, 100);
        
        setTimeout(function() {
            container.html(
                '<iframe src="' + pdfUrl + '" ' +
                'title="Certificate of Analysis for ' + strain + ' - ' + batch + '" ' +
                'loading="lazy" ' +
                'sandbox="allow-same-origin allow-scripts allow-popups" ' +
                'referrerpolicy="no-referrer"></iframe>'
            );
        }, 500);
    }
    
    function closeLightbox() {
        const lightbox = $('#skyworld-coa-lightbox');
        lightbox.removeClass('active');
        $('body').css('overflow', '');
        setTimeout(function() {
            $('#skyworld-pdf-container').html('');
            lightbox.css('display', 'none');
        }, 300);
    }
});
</script>

    </div>
</div>

<?php get_footer(); ?>