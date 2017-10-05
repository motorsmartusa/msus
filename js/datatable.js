$(document).ready(function() {

	var oTable = $('#dataTable').DataTable({
		"paging":   false,
		"searching":   true,
		"info":     false
	} );

	$('#searchText').on('keyup blur', function(){
		oTable.search($(this).val()).draw();
	});

});