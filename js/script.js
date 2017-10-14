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

  $('input[name*=phone], input[name*=fax]').on('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
  });

  $(document).on('keyup', 'input[name=mileage], input[name=value], input[name=gvrw], input[name=front_gawr], input[name=rear_gawr]', function(event) {
    if(event.which >= 37 && event.which <= 40) return;

    $(this).val(function(index, value) {
      return value
      .replace(/\D/g, "")
      .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    });
  });

  $(this).keypress(function(e) {
    if(e.which == 13) {
        e.preventDefault();
        return false;
    }
  });

  $('.form-control.manual-intercept').on('change', function() {
      if($(this).val() == '!MANUAL') {
        var self = $(this);
        var name = $(this).attr('name');
        var pattern = $(this).attr('pattern');
        var title = $(this).attr('title');
        var required = $(this).attr('required');
        var input = $('<input name="' + name + '" class="form-control" pattern="' + pattern + '" title="' + title + '" ' + required + '>');
        var inputGroup = $('<div class="input-group">"');
        var inputButton = $('<button type="button" class="btn btn-primary">');
        var inputGroupBtn = $('<span class="input-group-btn">');

        inputButton.append('<i class="fa fa-times"></i>');
        inputGroup.append(input);
        inputGroupBtn.append(inputButton);
        inputGroup.append(inputGroupBtn);

        $(this).val('');
        $(this).attr('data-old-name', self.attr('name'));
        $(this).removeAttr('name');
        $(this).removeAttr('pattern');
        $(this).removeAttr('required');
        $(this).addClass('hidden');

        inputButton.on('click', function() {
            self.attr('name', self.attr('data-old-name'));
            self.attr('pattern', pattern);
            if (typeof required !== undefined || required !== "") {
              self.attr('required', required);
            }
            self.removeClass('hidden');

            inputGroup.parent().append(self);
            inputGroup.remove();
        });

        $(this).parent().append(inputGroup);

        input.focus();
      }
    });


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