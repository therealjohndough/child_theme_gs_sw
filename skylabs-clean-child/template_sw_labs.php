<?php
/**
 * Template Name: SW Labs
 * Description: COA Labs page template with separated CSS loading
 */

get_header(); ?>

<div class="wp-site-blocks">
    <main class="wp-block-group">
        <div class="wp-block-group__inner-container">
            
            <div class="skyworld-coa-labs">
                
                <!-- Page Header -->
                <header class="coa-header">
                    <h1>COA Labs</h1>
                    <p>Certificate of Analysis - Lab Testing Results</p>
                </header>

                <!-- Flower Products -->
                <div class="coa-category">
                    <h2>Flower Products</h2>
                    <div class="coa-grid">
                        <div class="coa-item">
                            <h3>Sour Cream Punch</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-SCP.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Peanut Butter Gelato</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-PBG.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Lemon Oreos</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-LO.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Wedding Cake</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-WZ.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Kush Sorbet</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-KS.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Gelato Glue</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW3725J-GG.pdf" class="coa-link">View COA</a>
                        </div>
                    </div>
                </div>

                <!-- Pre-Roll Products -->
                <div class="coa-category">
                    <h2>Pre-Roll Products</h2>
                    <div class="coa-grid">
                        <div class="coa-item">
                            <h3>Sunset Punch Pre-Roll 5pk</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW040725-PRE05X6-SP.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Gelato Glue Pre-Roll</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW031725-PRE05-GG.pdf" class="coa-link">View COA</a>
                        </div>
                        <div class="coa-item">
                            <h3>Peanut Butter Gelato Pre-Roll 6pk</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW060925-PRE5X6-PBG.pdf" class="coa-link">View COA</a>
                        </div>
                    </div>
                </div>

                <!-- Hash Hole Products -->
                <div class="coa-category">
                    <h2>Hash Hole Products</h2>
                    <div class="coa-grid">
                        <div class="coa-item">
                            <h3>Sunset Punch x Purple Punch Hash Hole</h3>
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/coas/COA-SW051925-HH-SPXPR.pdf" class="coa-link">View COA</a>
                        </div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="coa-faq">
                    <h2>Frequently Asked Questions</h2>
                    
                    <div class="faq-item">
                        <h3>What is a COA?</h3>
                        <p>A Certificate of Analysis (COA) is a document that shows the results of laboratory testing for cannabis products, including potency, pesticides, heavy metals, and microbials.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>How do I read the COA?</h3>
                        <p>The COA shows test results for various compounds and contaminants. Look for THC/CBD percentages, and ensure all safety tests show "Pass" or are within acceptable limits.</p>
                    </div>
                    
                    <div class="faq-item">
                        <h3>How often are products tested?</h3>
                        <p>All Sky World Cannabis products are tested by state-licensed laboratories before reaching dispensaries to ensure quality and safety.</p>
                    </div>
                </div>

            </div>

        </div>
    </main>
</div>

<?php get_footer(); ?>