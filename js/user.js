$(function(){
  
    $('.countdown').each(function(){
    
	    var number = $(this).html();
	    $(this).html('');
	    
	    $(this).countDown({
			startNumber: number,
	   	});
    
    });
  
    $('.infobulle-rocket').hide();
    $('.rocket').mouseover(function(){
    	$('.infobulle-rocket').show();
    }).mouseout(function(){
    	$('.infobulle-rocket').hide();
    });
});