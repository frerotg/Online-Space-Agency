$(function(){  

	$('.success').hide();
	$('.fail').hide();

    function countdown(){
	    if(typeof(number)=='undefined'){
		    number = $('#countdown').attr('class');
	    }   
	    setTimeout(countdown, 1000);
	    $('div.status-equipment p#countdown').text('Il reste ' + number + ' seconde(s)');
	    number--;
	    if(number < 0){
	    	$('div.status-equipment p#countdown').text('Votre équipement est construit !').css('color','#090');
		    window.location.reload();
	    }
    }
    countdown();
    
    $('li.type-1 a').hover(function(){
    	$('p.display').hide().removeClass('display');
    	$('p.type-default').hide();
    	$('p.type-1').show().addClass('display');
    	$('div.visual-equipment').css('background-position', '0 -1395px');
    	$('li.type-1 a').css('color', '#414042');
    	$('li.type-2 a').css('color', '#d2cfbe');
    	$('li.type-3 a').css('color', '#d2cfbe');
    	$('li.type-4 a').css('color', '#d2cfbe');
    	return false;
    	
    });
    $('li.type-2 a').hover(function(){
    	$('p.display').hide().removeClass('display');
    	$('p.type-default').hide();
    	$('p.type-2').show().addClass('display');
    	$('div.visual-equipment').css('background-position', '0 -930px');
    	$('li.type-2 a').css('color', '#414042');
    	$('li.type-1 a').css('color', '#d2cfbe');
    	$('li.type-3 a').css('color', '#d2cfbe');
    	$('li.type-4 a').css('color', '#d2cfbe');
    });
    $('li.type-3 a').hover(function(){
    	$('p.display').hide().removeClass('display');
    	$('p.type-default').hide();
    	$('p.type-3').show().addClass('display');
    	$('div.visual-equipment').css('background-position', '0 -465px');
    	$('li.type-3 a').css('color', '#414042');
    	$('li.type-1 a').css('color', '#d2cfbe');
    	$('li.type-2 a').css('color', '#d2cfbe');
    	$('li.type-4 a').css('color', '#d2cfbe');
    });
    $('li.type-4 a').hover(function(){
    	$('p.display').hide().removeClass('display');
    	$('p.type-default').hide();
    	$('p.type-4').show().addClass('display');
    	$('div.visual-equipment').css('background-position', '0 -1860px');
    	$('li.type-4 a').css('color', '#414042');
    	$('li.type-1 a').css('color', '#d2cfbe');
    	$('li.type-2 a').css('color', '#d2cfbe');
    	$('li.type-3 a').css('color', '#d2cfbe');
    });
    
    $('span.display-info-equipment').click(function(){
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
    	var source = $(this).parent().parent().parent().parent();
    	var url_send = $(this).attr('href');
    	
    	$('.success').hide();
		$('.fail').hide();
		$('div.alert').hide();
		$('span.display-info-equipment').css('top', '102px');
	    $('div.photo-equipment img').css('top', '30px');
    
    	$.ajax({
	      	type: "POST",
	      	url: url_send,
	      	success: function(data){
	        	var responseData = jQuery.parseJSON(data);
	        	if(responseData.status == 'error'){
	        		source.find('span.display-info-equipment').css('top', '152px');
	        		source.find('div.photo-equipment img').css('top', '80px');
	        		source.find('.fail p').text(responseData.message);
	        		source.find('.fail').fadeIn();
	        		source.find('.fail').parent().fadeIn();
	        	}
	        	else{
	        		source.find('span.display-info-equipment').css('top', '152px');
	        		source.find('div.photo-equipment img').css('top', '80px');
	        		source.find('.success').fadeIn()
	        		source.find('.success p').text(responseData.message);
	        		source.find('.success').parent().fadeIn();
	        		
	        		$('div.equipment').find('a.build').hide();
	        		$('div.equipment').find('a.evolve').hide();
	        		$('div.equipment').find('div.status-equipment').append('<p>Equipement déjà en construction</p>');
	        		parent.find('p').hide();
	        		
	        		var time = responseData.time;
	        		actual.hide();
	        		parent.append('<p id="countdown" class="'+time+'"></p>');
	        		number = $('#countdown').attr('class');
	        		//countdown();
	        	}
	      	}
    	});
	return false;
	});
    
});