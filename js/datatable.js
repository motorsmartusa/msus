$(document).ready(function() {

	var oTable = $('#dataTable').DataTable({
		"fixedHeader": {
	      header: true,
	    },
		"info":     false,
		"paging":   false,
		"searching":   true
	} );

	$('#searchText').on('keyup blur', function(){
		oTable.search($(this).val()).draw();
	});

	$('#viewAllBtn').on('click', function() {
		oTable.search("").draw();
	});
});