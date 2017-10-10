$(document).ready(function() {
  var readURL = function(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#labelImage').children('img').attr('src', e.target.result);
        $('#labelImage').children('a').attr('href', e.target.result);
        $('#labelImage').children('.fa.fa-times').show();


        $('#labelImage').children('.fa.fa-times').click(function() {
            $(this).siblings('img').attr('src', 'images/dummy-image.jpg');
            $(this).siblings('a').attr('href', 'images/dummy-image.jpg');
            $(this).hide();
        });

        $('#labelImage').children('.fa.fa-search-plus').click(function() {
          var html = '<img src="' + $(this).siblings('img').attr('src') + '"/>';
          $('#previewModal .modal-body').html(html);
          $('#previewModal').modal('show');
        });
      }

      reader.readAsDataURL(input.files[0]);
      input.value = '';
    }
  }

  $('.upload').on('change', function() {
    readURL(this);
  });

  $('#labelImage').children('.fa.fa-search-plus').click(function() {
  	var html = '<img src="' + $(this).siblings('img').attr('src') + '"/>';
  	$('#previewModal .modal-body').html(html);
  	$('#previewModal').modal('show');	
   });

  $('#recallsModal').on('shown.bs.modal',function(e){
    var btn = $(e.relatedTarget);
    var recallType = btn.data('recall');
    var vin = $('input[name=vin]').val();
    var title;

    if(recallType === "safercar") {
      title = (vin !== "") ? "SAFERCAR RECALLS - VIN: " + vin : "SAFERCAR RECALLS";
      $(this).find('.modal-title').text(title);
      $(this).find('iframe').attr('src','https://vinrcl.safercar.gov/vin/');
    } else if (recallType == "mfg") {
      title = (vin !== "") ? "MANUFACTURER RECALLS - VIN: " + vin : "MANUFACTURER RECALLS";
      $(this).find('.modal-title').text(title);
      $(this).find('iframe').attr('src','https://owner.ford.com/tools/account/maintenance/recalls.html');
    }

    $('#instructionsModal').modal({
      show: true
    });
  });

  var dataEntered = false;
  $(':radio').on('click', function() {
    if ($('input[name=gvrw]').val() !== undefined || 
      $('input[name=front_gawr]').val() !== undefined || 
      $('input[name=rear_gawr]').val() !== undefined) {
      $('#warningModal').modal({
        show: true
      });
    }

    if ($(this).val() === 'kgs') {
      $(':radio[value=kgs]').prop('checked', true); 
      $(':radio[value=lbs]').prop('checked', false);
    } else if ($(this).val() === 'lbs') {
      $(':radio[value=lbs]').prop('checked', true);
      $(':radio[value=kgs]').prop('checked', false); 
    }
  });


});