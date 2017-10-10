$(document).ready(function() {
  $('#pictures_1').on("click", function() {
      $('#pictureOption').hide();
      $('.pictureUpload').show();
      $('#pictureUploadInst').show();
      $('#pictures .cls.rounded.white').show();
  });

  $('#pictures .cls.rounded.white').on('click', function() {
      $('#pictures_1').prop('checked', false);
      $('.picture-list-option').prop('selectedIndex',0);
      $('#pictureList li').removeClass('checkmark');
      $('#pictureOption').show();
      $('.pictureUpload').hide();
      $('#pictureUploadInst').hide();
      $('#pictures .cls.rounded.white').hide();
  });

  var prevVal;
  $('.picture-list-option').on('focus', function() {
      prevVal = $(this).val();  
  }).on('change', function() {
    if (prevVal !== '--' && prevVal !== $('.picture-list-option').val()) {
      $('#pictureList li:contains(' + prevVal + ')').removeClass('checkmark');
    }
    $('.picture-list-option').not($(this)).find("option[value='" + prevVal + "']").prop('disabled', false);
    $('.picture-list-option').not($(this)).find("option[value='" + $(this).val() + "']").prop('disabled', true);
    $('#pictureList li:contains(' + $(this).val() + ')').addClass('checkmark');
    prevVal = $(this).val();
  });

  var readURL = function(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $(input).siblings('.imgPreview').attr('src', e.target.result);
        $(input).siblings('.iconOverlay').children('a').attr('href', e.target.result);
        $(input).siblings('.fa.fa-plus').hide();
        $(input).siblings('.imgPreview').hide();
        $(input).siblings('.imgPreview').fadeIn(650);
        $(input).siblings('.iconOverlay').show();

        $(input).siblings('.iconOverlay').children('.fa.fa-times').click(function() {
            $(this).parent().siblings('.imgPreview').hide();
            $(this).parent().siblings('.imgPreview').attr('src', '#');
            $(this).parent().parent().siblings('.picture-list-option').focus();
            $(this).parent().parent().siblings('.picture-list-option').prop('selectedIndex',0);
            $(this).parent().parent().siblings('.picture-list-option').change();
            $(this).siblings('a').attr('href', 'javascript:;');
            $(this).parent().hide();
            $(this).parent().siblings('.fa.fa-plus').fadeIn(650);
        });

        $(input).siblings('.iconOverlay').children('.fa.fa-search-plus').click(function() {
          var html = '<img src="' + e.target.result + '"/>';
          $('#previewModal .modal-body').html(html);
          $('#previewModal').modal('show');
        });
      }

      reader.readAsDataURL(input.files[0]);
      input.value = '';
    }
  }

  $('.imgUpload').on('change', function() {
    readURL(this);
  });

});