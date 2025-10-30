/**
 * COA PDF Handler for FSE
 */
jQuery(document).ready(function($) {
    // Handle all PDF links - open in new tabs
    $('a[href$=".pdf"], a[href*="coa"]').each(function() {
        $(this).attr({
            'target': '_blank',
            'rel': 'noopener noreferrer'
        });
    });
    
    console.log('COA PDF handler loaded for FSE');
});