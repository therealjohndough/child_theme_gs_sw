/**
 * COA Handler for Greenshift Blocks
 */
jQuery(document).ready(function($) {
    console.log('Skylabs Greenshift COA Handler Loaded');
    
    // Ensure all PDF links open in new tabs
    $('a[href*=".pdf"], a[href*="coa"]').each(function() {
        $(this).attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
    });
    
    // Handle dynamically added links
    $(document).on('click', 'a[href*=".pdf"], a[href*="coa"]', function(e) {
        var href = $(this).attr('href');
        if (href && href.includes('.pdf')) {
            // Ensure it opens in new tab
            $(this).attr('target', '_blank');
        }
    });
    
    // Add hover effects to COA items (enhance Greenshift styling)
    $(document).on('mouseenter', '[class*="gsbp-item-"]', function() {
        $(this).css({
            'transform': 'translateY(-5px)',
            'box-shadow': '0 8px 25px rgba(0,0,0,0.15)'
        });
    });
    
    $(document).on('mouseleave', '[class*="gsbp-item-"]', function() {
        $(this).css({
            'transform': 'translateY(0)',
            'box-shadow': '0 2px 8px rgba(0,0,0,0.1)'
        });
    });
});