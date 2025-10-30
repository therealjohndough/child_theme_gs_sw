<?php
/**
 * COA Labs Template
 * Works with any theme - preserves header/footer
 */

get_header(); ?>

<div class="skyworld-coa-container">
    
    <header class="skyworld-coa-header">
        <h1>COA Labs</h1>
        <p>Certificate of Analysis - Lab Testing Results</p>
    </header>

    <?php skyworld_render_coa_grid(); ?>

    <div class="skyworld-coa-faq">
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

<style>
.skyworld-coa-category {
    margin: 3rem 0;
}

.skyworld-coa-category h2 {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    color: #2c3e50;
    border-bottom: 2px solid #28a745;
    padding-bottom: 0.5rem;
}

.skyworld-coa-faq {
    max-width: 800px;
    margin: 4rem auto 2rem;
}

.skyworld-coa-faq h2 {
    font-size: 2rem;
    margin-bottom: 2rem;
    text-align: center;
    color: #2c3e50;
}

.faq-item {
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 4px solid #28a745;
}

.faq-item h3 {
    margin-bottom: 0.5rem;
    color: #2c3e50;
    font-size: 1.25rem;
}

.faq-item p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}
</style>

<?php get_footer(); ?>