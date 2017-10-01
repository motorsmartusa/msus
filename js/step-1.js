$(document).ready(function() {
  var readURL = function(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.labelImage img').attr('src', e.target.result);
        $('.iconOverlay').children('a').attr('href', e.target.result);
        $('.iconOverlay').fadeIn(650);
        $('.iconOverlay').show();

        // $(input).siblings('.iconOverlay').children('.fa.fa-times').click(function() {
        //     $(this).parent().siblings('.imgPreview').hide();
        //     $(this).parent().siblings('.imgPreview').attr('src', '#');
        //     $(this).parent().parent().siblings('.picture-list-option').focus();
        //     $(this).parent().parent().siblings('.picture-list-option').prop('selectedIndex',0);
        //     $(this).parent().parent().siblings('.picture-list-option').change();
        //     $(this).siblings('a').attr('href', 'javascript:;');
        //     $(this).parent().hide();
        //     $(this).parent().siblings('.fa.fa-plus').fadeIn(650);
        // });

        // $(input).siblings('.iconOverlay').children('.fa.fa-search-plus').click(function() {
        //   var html = '<img src="' + e.target.result + '"/>';
        //   $('#previewModal .modal-body').html(html);
        //   $('#previewModal').modal('show');
        // });
      }

      reader.readAsDataURL(input.files[0]);
      input.value = '';
    }
  }

  $('.upload').on('change', function() {
    readURL(this);
  });

});