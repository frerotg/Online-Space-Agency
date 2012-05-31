$(function(){
    $('.success').hide();
	$('.fail').hide();
    
    var number = $('#countdown').attr('class');
    
    $('#countdown').countDown({
	startNumber: number,
	callBack: function(me) {
		$(me).text('Votre batiment est construit !').css('color','#090');
		window.location.reload();
	}
    });
    
    $('a[title]').qtip();
    
    $('span.display-info-building').click(function(){
    	if($(this).hasClass('ouvert')){
    		$(this).next().hide();
    		$(this).removeClass('ouvert');
    	}
    	else{
    		$(this).next().show();
    		$(this).addClass('ouvert');
    	}
    	  
    });
    
	$('.build').click(function(){
    	
    	var id = $(this).attr('id');
    	var parent = $(this).parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        		$('.fail p').text(responseData.message);
	        		$('.fail').fadeIn();
	        	}
	        	else{
	        		$('.success').fadeIn()
	        		$('.success ').text(responseData.message);
	        		var time = responseData.time[0];
	        		parent.html('Il rest <span id="countdown" class="'+time+'"></span> sec');
	        		console.log(time);
	        	}
	      	}
    	});
	return false;
	});
	
	$('.evolve').click(function(){
    	
    	var id = $(this).attr('id');
    	var parent = $(this).parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        		$('.fail').fadeIn();
	        	}
	        	else{
	        		$('.success').fadeIn()
	        		parent.html('<p>Il reste '+responseData.time+' sec</p>');
	        	}
	      	}
    	});
	return false;
	});
});