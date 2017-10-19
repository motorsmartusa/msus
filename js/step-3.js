$(document).ready(function() {
  

  $('#exporterEdit').on('click', function() {
    $('#exporterModal input').each(function() {
      $(this).val($('#exp input[name=' + $(this).attr('name')).val());
    });
    $('#exporterModal select[name=exp_state]').val($('#exp select[name=exp_state]').val());
    $('#exporterModal').modal('show');
  });

  $('#exporterAdd').on('click', function() {
    $('#exporterModal input').each(function() {
      $(this).val('');
    });
    $('#exporterModal select').prop('selectedIndex',0);
    $('#exporterModal').modal('show');
  });

  $('#exporterModal form').on('submit', function(e) {
    e.preventDefault();
    $('#exp input').each(function() {
      $(this).val($('#exporterModal input[name=' + $(this).attr('name')).val());
    });
    $('#exp select[name=exp_state]').val($('#exporterModal select[name=exp_state]').val());
    $('#exporterModal').modal('hide');
  });

  $('#destinationEdit').on('click', function() {
    $('#destinationModal input').each(function() {
      $(this).val($('#dest input[name=' + $(this).attr('name')).val());
    });
    $('#destinationModal select[name=dest_state]').val($('#dest select[name=dest_state]').val());
    $('#destinationModal').modal('show');
  });

  $('#destinationAdd').on('click', function() {
    $('#destinationModal input').each(function() {
      $(this).val('');
    });
    $('#destinationModal select').prop('selectedIndex',0);
    $('#destinationModal').modal('show');
  });

  $('#destinationModal form').on('submit', function(e) {
    e.preventDefault();
    $('#dest input').each(function() {
      $(this).val($('#destinationModal input[name=' + $(this).attr('name')).val());
    });
    $('#dest select[name=dest_state]').val($('#destinationModal select[name=dest_state]').val());
    $('#destinationModal').modal('hide');
  });

  $('#transporterEdit').on('click', function() {
    $('#transporterModal input').each(function() {
      $(this).val($('#trans input[name=' + $(this).attr('name')).val());
    });
    $('#transporterModal select[name=trans_port_of_crossing]').val($('#trans select[name=trans_port_of_crossing]').val());
    $('#transporterModal').modal('show');
  });

  $('#transporterAdd').on('click', function() {
    $('#transporterModal input').each(function() {
      $(this).val('');
    });
    $('#transporterModal select').prop('selectedIndex',0);
    $('#transporterModal').modal('show');
  });

  $('#transporterModal form').on('submit', function(e) {
    e.preventDefault();
    $('#trans input').each(function() {
      $(this).val($('#transporterModal input[name=' + $(this).attr('name')).val());
    });
    $('#trans select[name=trans_port_of_crossing]').val($('#transporterModal select[name=trans_port_of_crossing]').val());
    $('#transporterModal').modal('hide');
  });

});