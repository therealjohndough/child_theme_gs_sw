/**
 * COA Links - Open PDFs in New Tab
 * Loaded only on COA Labs template pages
 */
jQuery(document).ready(function($) {
    console.log('Skylabs COA Handler Loaded');
    
    // Target COA links and PDF links
    $(document).on('click', 'a[href*="coa"], a[href$=".pdf"], .coa-link', function(e) {
        var href = $(this).attr('href');
        
        // If it's a PDF or COA link, open in new tab
        if (href && (href.includes('.pdf') || href.includes('coa') || $(this).hasClass('coa-link'))) {
            e.preventDefault();
            e.stopImmediatePropagation();
            window.open(href, '_blank', 'noopener,noreferrer');
        }
    });
    
    // Ensure all COA and PDF links have proper attributes
    $('a[href*="coa"], a[href$=".pdf"], .coa-link').each(function() {
        $(this).attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
    });
    
    // Handle dynamically added links
    $(document).on('mouseenter', 'a[href*="coa"], a[href$=".pdf"], .coa-link', function() {
        $(this).attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
    });
});