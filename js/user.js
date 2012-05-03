$(function(){
  
    $('.countdown').each(function(){
    
	    var number = $(this).html();
	    $(this).html('');
	    
	    $(this).countDown({
			startNumber: number,
			callBack: function(me) {
				$(me).text('Votre batiment est construit !').css('color','#090');
				window.location.reload();
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