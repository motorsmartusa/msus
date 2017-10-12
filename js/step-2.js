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

  var fileList = [];
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
            fileList.pop();
        });

        $(input).siblings('.iconOverlay').children('.fa.fa-rotate-left').click(function() {
          $(this).parent().siblings('.imgPreview').css({
              "-webkit-transform": "rotate(90deg)",
              "-moz-transform": "rotate(90deg)",
              "transform": "rotate(90deg)"
          });
        });

        $(input).siblings('.iconOverlay').children('.fa.fa-search-plus').click(function() {
          var html = '<img src="' + e.target.result + '"/>';
          $('#previewModal .modal-body').html(html);
          $('#previewModal').modal('show');
        });
        fileList.push(e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
      input.value = '';
    }
  }

  $('.imgUpload').on('change', function() {
    readURL(this);
  });

  $('#step-2').on('submit', function() {
    if ($('input:radio:checked').length <= 0) {
      $('#warningModal .modal-body').html("Please choose which picture option you would like.");
      $('#warningModal').modal('show');
      return false;
    }
    if ($('input:radio:checked').val() === "upload") {
      var flag = 11;
      $(".picture-list-option").each(function(i) {
        if ($(this).val() == "--")
            flag--;
      });
      if (fileList.length < 11 || flag < 11) {
        $('#warningModal .modal-body').html("Please upload all 11 images and select the location.");
        $('#warningModal').modal('show');
        return false;
      }
    }
  });

});