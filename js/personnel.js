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

	
	$('th.Maitrise').qtip({
		content: 'Détermine le temps pour chaque action lors des missions',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Maitrise')
		},
		style: {
			classes: 'qtip-style'
		}
	});
	$('th.Reflexion').qtip({
		content: 'Détermine le nombre de points d’action pour la mission',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Reflexion')
		},
		style: {
			classes: 'qtip-style'
		}
	});
	$('th.Sang-froid').qtip({
		content: 'Réduit le risque d’échec lors du lancement de mission',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Sang-froid')
		},
		style: {
			classes: 'qtip-style'
		}
	});
	$('th.Rapidite').qtip({
		content: 'Augmente la vitesse de voyage vers la destination lors de mission',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Rapidite')
		},
		style: {
			classes: 'qtip-style'
		}
	});
	$('th.Recherche').qtip({
		content: 'Augmente l\'éfficatcité des recherche dans ce domaine',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Recherche')
		},
		style: {
			classes: 'qtip-style'
		}
	});
	$('th.Exploration').qtip({
		content: 'Augmente l\'éfficatcité des recherche dans ce domaine',
		position: {
			my: 'top center', 
			at: 'bottom center',
			target: $('th.Exploration')
		},
		style: {
			classes: 'qtip-style'
		}
	});

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