$(function(){
    $('.success').hide();
	$('.fail').hide();

    function countdown(){
	    if(typeof(number)=='undefined'){
		    number = $('#countdown').attr('class');
	    }   
	    setTimeout(countdown, 1000);
	    $('div.status-building p#countdown').text('Il reste ' + number + ' seconde(s)');
	    number--;
	    if(number < 0){
	    	$('div.status-building p#countdown').text('Votre batiment est construit !').css('color','#090');
		    window.location.reload();
	    }
    }
    countdown();
       
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
    	
    	var actual = $(this);
    	var id = $(this).attr('id');
    	var parent = $(this).parent();
    	var source = $(this).parent().parent().parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
		$('div.alert').hide();
		
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
	        		source.find('span.display-info-building').css('top', '152px');
	        		source.find('div.photo-building img').css('top', '80px');
	        		source.find('.success').fadeIn()
	        		source.find('.success p').text(responseData.message);
	        		source.find('.success').parent().fadeIn();
	        		
	        		$('div.building').find('a.build').hide();
	        		$('div.building').find('a.evolve').hide();
	        		$('div.building').find('div.status-building').append('<p>Bâtiment déjà en construction</p>');
	        		parent.find('p').hide();
	        		
	        		var time = responseData.time[0];
	        		actual.hide();
	        		parent.append('<p id="countdown" class="'+time+'"></p>');
	        		number = $('#countdown').attr('class');
	        		countdown();
	        	}
	      	}
    	});
	return false;
	});
	
	$('.evolve').click(function(){
    	
    	var actual = $(this);
    	var id = $(this).attr('id');
    	var parent = $(this).parent();
    	var source = $(this).parent().parent().parent().parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
		$('div.alert').hide();
    
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
	        		source.find('span.display-info-building').css('top', '152px');
	        		source.find('div.photo-building img').css('top', '80px');
	        		source.find('.success').fadeIn()
	        		source.find('.success p').text(responseData.message);
	        		source.find('.success').parent().fadeIn();
	        		
	        		$('div.building').find('a.build').hide();
	        		$('div.building').find('a.evolve').hide();
	        		$('div.building').find('div.status-building').append('<p>Bâtiment déjà en construction</p>');
	        		parent.find('p').hide();

	        		
	        		var time = responseData.time[0];
	        		actual.hide();
	        		parent.append('<p id="countdown" class="'+time+'"></p>');
	        		number = $('#countdown').attr('class');
	        		countdown();
	        	}
	      	}
    	});
	return false;
	});
});