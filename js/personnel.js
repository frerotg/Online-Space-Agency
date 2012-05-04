$(function(){
	$('.success').hide();
	$('.fail').hide();
	
    $('.recruit').click(function(){
	    var id = $(this).attr('id');
	    var parent = $(this).parent().parent();
	    var url_send = $(this).attr('href');
	    
	    $('.success').hide();
		$('.fail').hide();
	    
	    $.ajax({
	      type: "POST",
	      url: url_send,
	      success: function(data)
	      {
	        var responseData = jQuery.parseJSON(data);
	        if(responseData.status == 'error'){
	        	$('.fail p').text(responseData.message);
	            $('.fail').fadeIn();
	        }
	        else{
	            parent.slideUp("slow",function(){$(this).remove();});
	            $('.success p').text(responseData.message);
	            $('.success').fadeIn();
	        }
	      }
	    });
	    return false;
  	});
  
  	$('.kick').click(function(){
	    var id = $(this).attr('id');
	    var parent = $(this).parent().parent();
	    var url_send = $(this).attr('href');
	    
	    $('.success').hide();
		$('.fail').hide();
	    
	    $.ajax({
	      type: "POST",
	      url: url_send,
	      success: function(data)
	      {
	      	var responseData = jQuery.parseJSON(data);
	      	$('.success p').text(responseData.message);
	        $('.success').fadeIn();
	        parent.slideUp("slow",function(){$(this).remove();});
	      }
	    });
	    return false;
  	});
  	
  	$( ".content-personnel" ).tabs();

	//$('table.table-personnel').hide();
	

  /*
  $('#time_end').datetimepicker({ 
      dateFormat: 'yy-mm-dd',
      ampm: true,
      timeFormat: 'h:m TT'
  });
    $( "#slider-range" ).slider({
            range: "min",
            value: 1000,
            min: 1000,
            max: 100000,
            slide: function( event, ui ) {
                    $( "#price" ).val(ui.value );
                    $( "#price_slider" ).html(ui.value );
            }
        });
    $( "#price" ).val($( "#slider-range" ).slider( "value" ));
    $( "#price_slider" ).html($( "#slider-range" ).slider( "value" ));
  */
});