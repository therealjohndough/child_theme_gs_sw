/**
 * COA PDF New Tab Handler
 */
jQuery(document).ready(function($) {
    console.log('Skyworld COA Handler Loaded');
    
    // Handle all PDF links and COA links
    $(document).on('click', 'a[href*=".pdf"], a[href*="coa"]', function(e) {
        var href = $(this).attr('href');
        
        // If it's a PDF, open in new tab
        if (href && (href.includes('.pdf') || href.includes('coa'))) {
            e.preventDefault();
            e.stopImmediatePropagation();
            window.open(href, '_blank', 'noopener,noreferrer');
        }
    });
    
    // Also set target="_blank" on existing links
    $('a[href*=".pdf"], a[href*="coa"]').attr({
        'target': '_blank',
        'rel': 'noopener noreferrer'
    });
});