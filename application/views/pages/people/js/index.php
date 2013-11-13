$(document).ready(function() {
	$('#activity').dataTable( {
		"bJQueryUI": true,
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": "/people/ajax_list",
		"aaSorting": [[ 0, "asc" ]],
	});
});