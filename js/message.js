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

});