$(function(){
  
    $('.countdown').each(function(){
    
	    var number = $(this).html();
	    $(this).html('');
	    
	    $(this).countDown({
			startNumber: number,
			callBack: function(me) {
				$(me).text('En attente d\'ordre !').css('color','#090');
			}
	   	});
    
    });
  
    $('.infobulle-rocket').hide();
    $('.rocket').mouseover(function(){
    	$('.infobulle-rocket').show();
    }).mouseout(function(){
    	$('.infobulle-rocket').hide();
    });
});