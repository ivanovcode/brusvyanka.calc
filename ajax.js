$(document).ready(function() { 
	$('.send').submit(function() {
	  var form = $(this);
	  $('.order').hide();          
	  $.ajax({
	        type: "POST",
	        url: 'http://calc.brusvyanka.ru/?m=send',
	        data: {
	            phone: $('[name="phone"]').val(),
	            cost: $('#cost').text(),
	            article: $('#article').text(),   
	            equipment: $('#equipment').text()
	        },
	        success: function(data) {
	            if (data.response.success) {
	                $('.order').hide();
	                $('.thanks').fadeIn();
	            } else {
	                $('[name="phone"]').val('');
	            }
	        },
	        dataType: 'json'
	  });
	  return false
	});
});