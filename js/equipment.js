$(function(){
    $('.fail').hide();
    $('.success').hide();
    
    var number = $('#countdown').attr('class');
    
    $('#countdown').countDown({
	startNumber: number,
	callBack: function(me) {
		$(me).text('Votre batiment est construit !').css('color','#090');
	}
    });
    
    $('li.type-1 a').hover(function(){
    	$('p.display').hide().removeClass('display');
    	$('p.type-default').hide();
    	$('p.type-1').show().addClass('display');
    	$('div.visual-equipment').css('background-position', '0 -465px');
    	$('li.type-1 a').css('color', '#414042');
    	$('li.type-2 a').css('color', '#d2cfbe');
    	$('li.type-3 a').css('color', '#d2cfbe');
    	$('li.type-4 a').css('color', '#d2cfbe');
    	
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
    	$('div.visual-equipment').css('background-position', '0 -1395px');
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
    var id = $(this).attr('id');
    var parent = $(this).parent().parent();
    var url_send = $(this).attr('href');
    
    $.ajax({
      type: "POST",
      url: url_send,
      success: function(data)
      {
        var responseData = jQuery.parseJSON(data);
        if(responseData.status == 'error'){
            $('.fail').fadeIn();
            $('.fail p').text(responseData.message);
        }
        else{
            $('.success p').text(responseData.message);
            $('.success').fadeIn();
            parent.html('<p>Il reste '+responseData.time+' sec</p>');
        }
      }
    });
    return false;
  });
});