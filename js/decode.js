$(document).ready(function() {
	$('.vin-input').on('propertychange change click keyup input paste', function()
    {
        $('.vin-decoder').attr('disabled', true);
        $(this).val($(this).val().toUpperCase());

        var value = $(this).val().replace(/_/g, '');
        var feedback = $(this).siblings('.form-control-feedback');
        if(value.length == 17)
        {
            feedback.removeClass('hidden');
            if($(this).attr('name') === 'confirm_vin')
            {
                var left = $('input[name=vin]').val();
                var right = $('input[name=confirm_vin]').val();

                if(left !== right)
                {
                    if(feedback.hasClass('fa-check'))
                    {
                        feedback.removeClass('fa-check');
                        feedback.removeClass('text-success');
                    }

                    if(!feedback.hasClass('fa-times'))
                    {
                        feedback.addClass('fa-times');
                        feedback.addClass('text-danger');
                    }
                }
                else
                {
                    if(feedback.hasClass('fa-times'))
                    {
                        feedback.removeClass('fa-times');
                        feedback.removeClass('text-danger');
                    }

                    if(!feedback.hasClass('fa-check'))
                    {
                        feedback.addClass('fa-check');
                        feedback.addClass('text-success');
                    }

                    $('.vin-decoder').attr('disabled', false);
                }
            }
        }
        else feedback.addClass('hidden');
    });

    $('#decodeVin').on('click', function() {
    	var vin = $('input[name=vin]').val();
    	var url = 'https://vpic.nhtsa.dot.gov/api/vehicles/decodevinvalues/';
    	url += vin + '?format=json';
    	$.getJSON(url, function(data) {
		  displayResult(data);
		});
	});


});

var displayResult = function(data) {
	$('input[name=year]').val(data['Results'][0]['ModelYear']);
	$('input[name=make]').val(data['Results'][0]['Make']);
	$('input[name=model]').val(data['Results'][0]['Model']);
	$('input[name=series_trim]').val(data['Results'][0]['Series']);
}