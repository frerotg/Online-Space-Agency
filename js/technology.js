$(function(){
	$('.technology-list ul li img').click(function(){
		$('.technology-list ul li img').css('border', 'none');
		$('.technology-list ul').css('margin-bottom', '0');
		$(this).parent().parent().css('margin-bottom', '245px');
		$(this).css('border', '2px solid #d2cfbe');
		$('div.description-technology').hide();
		$(this).next().show();
	});
	
	function countdown(){
	    if(typeof(number)=='undefined'){
		    number = $('#countdown').attr('class');
	    }   
	    setTimeout(countdown, 1000);
	    $('div.status-technology p#countdown').text('Il reste ' + number + ' seconde(s)');
	    number--;
	    if(number < 0){
	    	$('div.status-technology p#countdown').text('Votre technologie est developper !').css('color','#090');
		    window.location.reload();
	    }
    }
    countdown();
	
	
	$('a.develop').click(function(){
    	
    	var actual = $(this);

    	var parent = $(this).parent();
    	var source = $(this).parent().parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        		source.find('.fail p').text(responseData.message);
	        		
	        	}
	        	else{
	        		source.find('.success p').text(responseData.message);
	        		
	        		
	        		
	        		var time = responseData.time[0];
	        		actual.hide();
	        		parent.append('<p id="countdown" class="'+time+'"></p>');
	        		number = $('#countdown').attr('class');
	        		//countdown();
	        	}
	      	}
    	});
    	$('div.description-technology').css('bottom', '-235px');
	return false;
	});
	
	$('a.improve').click(function(){
    	
    	var actual = $(this);

    	var parent = $(this).parent();
    	var source = $(this).parent().parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        		source.find('.fail p').text(responseData.message);
	        		source.find('.fail').fadeIn();
	        		source.find('.fail').parent().fadeIn();
	        	}
	        	else{
	        		source.find('.success').fadeIn();
	        		source.find('.success').parent().fadeIn();
	        		source.find('.success p').text(responseData.message);
	        		var time = responseData.time[0];
	        		actual.hide();
	        		parent.append('<p id="countdown" class="'+time+'"></p>');
	        		number = $('#countdown').attr('class');
	        		//countdown();
	        	}
	      	}
    	});
    	$('div.description-technology').css('bottom', '-235px');
	return false;
	});
});