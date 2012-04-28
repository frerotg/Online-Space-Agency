$(function(){
    $('.error').hide();
    $('.success').hide();
    $('.error_argent').hide();
    $('.error_price').hide();
    $('.formBid').hide();
    
    
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
  
    $('a[title]').qtip();
});