$(function(){

	$('#username_receive').autocomplete({
		minLength: 1,
        source: function(req, add){
        	var url_send = 'listUsername/';
        	$.ajax({
            	url: url_send,
                dataType: 'json',
                type: 'POST',
                data: req,
                success: function(data){
                	if(data.response =='true'){
                    	add(data.message);
                    }
                }
            });
        }
	});

	$('div.message_send form input').focus(function(){
		$(this).prev('label').find('span.error').text('');
		$(this).prev('label').css('color', '#414042');
  	});
  	$('div.message_send form textarea').focus(function(){
		$(this).prev().prev('label').find('span.error').text('');
		$(this).prev().prev('label').css('color', '#414042');
  	});

	$('div.message_send form').submit(function(){
    	
    	title_message = $('#title_message').val();
    	content_message = $('#message').val();
    	username_receive = $('#username_receive').val();
    	
    	url = $(this).attr('action');
    	
    	$.ajax({
	      	type: "GET",
	      	url: url,
	      	data: {Ititle_message: title_message, Icontent_message: content_message, Iusername_receive: username_receive},
	      	dataType: "json",
	      	success: function(data){
	        	if(data.status == "fail"){
	        		if(data.title_message == 'empty'){
		        		$('label[for="title_message"] span').text('    Le titre du message est vide');
		        		$('label[for="title_message"]').css('color', '#f23d4c');
	        		}
	        		if(data.content_message == 'empty'){
		        		$('label[for="message"] span').text('    Le message est vide');
		        		$('label[for="message"]').css('color', '#f23d4c');
	        		}
	        		if(data.username_receive == 'empty'){
		        		$('label[for="username_receive"] span').text('    Le nom du destinataire est vide');
		        		$('label[for="username_receive"]').css('color', '#f23d4c');
	        		}
	        	}
	        	else{
	        		$('div.message_send form').hide();
	        		$('div.title-register').hide();
	        		$('div.success-register').show();
	        	}
	      	}
    	});
	return false;
	});
	
	$('div.header-message h1').click(function(){
		$('.content-message').hide();
		$(this).parent().next().show();
	});


});