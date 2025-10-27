(function($){
// Remove existing delegated handler(s) attached to document for .coa-link
try { $(document).off('click', '.coa-link'); } catch(e) {}
// Rebind to open PDF in new tab
$(document).on('click', '.coa-link', function(e){
e.preventDefault();
e.stopImmediatePropagation();
var pdfUrl = ($(this).data('pdf') || '').toString().trim();
var batch = $(this).data('batch') || '';
var strain = $(this).data('strain') || '';
if(!pdfUrl){
alert('COA not available for this lot.');
return;
}
window.open(pdfUrl, '_blank');
});
})(jQuery);