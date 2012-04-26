$(function(){
    $('.error').hide();
    $('.success').hide();
    $('.error_argent').hide();
    $('.error_price').hide();
    $('.formBid').hide();
    
    var number = $('#countdown').attr('class');
    
    $('#countdown').countDown({
	startNumber: number,
	callBack: function(me) {
		$(me).text('Votre batiment est construit !').css('color','#090');
		window.location.reload();
	}
    });
    
    $('a[title]').qtip();
    
	$('.build').click(function(){
    	var id = $(this).attr('id');
    	var parent = $(this).parent();
    	var url_send = $(this).attr('href');
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        	$('.error').fadeIn();
	        	}
	        	else{
	        	$('.success').fadeIn();
	        	parent.text('Il reste '+responseData.time+' sec');
	        	}
	      	}
    	});
	return false;
	});
});