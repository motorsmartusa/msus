$(document).ready(function() {

  $('a[href*="#"]').each(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
      if ($target && (this.hash !== '#myCarousel')) {
        var targetOffset = $target.offset().top;
          $(this).click(function() {
            $('html, body').animate({scrollTop: targetOffset}, 1000);
              return false;
            });
          }
      }
  });


  $(".btn-login").on("click", function(e) {
    e.preventDefault();
    $("div#signup:visible").hide();
    $("#login").slideToggle();
  });

  $(".btn-signup").on("click", function(e) {
    e.preventDefault();
    $("div#login:visible").hide();
    $("#signup").slideToggle();
  });

  $(".top").on("click", function() {
    window.scrollTo(0, 0);
  });

  $(".cls").on("click", function() {
    $("div#signup:visible").hide();
    $("div#login:visible").hide();
  });

  $(".nav-pills li").on("click", function() {
    $(".nav-pills li").each(function() {
      $(this).removeClass("active");
    });
    $(this).addClass("active");
  });

  $('input[type="radio"]').on("click", function() {
    var previousValue = $(this).data('storedValue');
    if (previousValue) {
      $(this).prop('checked', !previousValue);
      $(this).data('storedValue', !previousValue);
    }
    else{
      $(this).data('storedValue', true);
      $("input[type=radio]:not(:checked)").data("storedValue", false);
    }
  });

  $('#uploadLnk').on("click", function() {
      $('#pictureOption').hide();
      $('#pictureUpload').show();
      $('#pictureUploadInst').show();
  });

  // $(".image-cross").on("click", function() {
  //   $(".close-image").slideToggle();
  // });
  // $(".pdf-cross").on("click", function() {
  //   $(".pdf-image").slideToggle();
  // });

$(window).scroll(function() {

  if ($(this).scrollTop() >= 300) {
      $('#return-to-top').fadeIn(200);
  } else {
      $('#return-to-top').fadeOut(200);
  }

  var position = $(this).scrollTop();

  $('section').each(function() {
      var target = $(this).offset().top;
      var offset = 100;
      var id = $(this).attr('id');

      if (position + offset > target) {
          $('.sidebar > li > a').removeClass('active');
          $('.sidebar > li > a[href=\\#' + id + ']').addClass('active');
      }
  });
});
 
$('#return-to-top').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});

});