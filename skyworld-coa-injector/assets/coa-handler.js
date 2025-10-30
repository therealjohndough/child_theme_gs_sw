/**
 * COA PDF New Tab Handler - Injector Version
 */
jQuery(document).ready(function($) {
    console.log('Skyworld COA Injector Loaded');
    
    // Handle all PDF links and COA links on the page
    $(document).on('click', 'a[href*=".pdf"], a[href*="coa"], .coa-link', function(e) {
        var href = $(this).attr('href');
        
        // If it's a PDF or COA link, open in new tab
        if (href && (href.includes('.pdf') || href.includes('coa') || $(this).hasClass('coa-link'))) {
            e.preventDefault();
            e.stopImmediatePropagation();
            window.open(href, '_blank', 'noopener,noreferrer');
        }
    });
    
    // Also set target="_blank" on existing links
    $('a[href*=".pdf"], a[href*="coa"], .coa-link').attr({
        'target': '_blank',
        'rel': 'noopener noreferrer'
    });
    
    // Handle any dynamically added COA links
    $(document).on('mouseenter', 'a[href*=".pdf"], a[href*="coa"], .coa-link', function() {
        $(this).attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
    });
});