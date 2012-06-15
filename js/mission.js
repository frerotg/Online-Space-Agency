$(function(){
	$(".mission_view4").tabs();
	$('div.points-restant').stickyScroll({ container: '.actions-enabled' })
	
	
	//FORM CREATE_MISSION
	
		//SELECTION SPACE OBJECT
		$('div.spaceobject-type label input').change(function(){
			$(this).parent().parent().parent().find('span.space-object-name').css('color', '#414042').css('text-decoration','none');
			$(this).parent().parent().parent().find('img.mini-img-spaceobject').css('border','2px solid #d2cfbe');
			$('.spaceobject-type').css('padding-top', '300px');
			$('.container-detail-spaceobject').hide();
			$(this).parent().parent().find('.container-detail-spaceobject').show();
			valeur = $(this).attr('id');
			$(this).parent().parent().parent().find('span.choice-spaceobject').text(valeur);
			$(this).parent().parent().parent().find('a.validation').css('display', 'block');
			$(this).next().next().css('color', '#55adaa').css('text-decoration','underline');
			$(this).next().css('border','2px solid #55adaa');
			
		});
		
		$('div.validation-space-object p a.validation').live('click',function(){
			$(this).removeClass('validation').addClass('modification');
			$(this).text('').text('Modifier');
			$(this).parent().parent().addClass('valid');
			$(this).parent().parent().parent().find('.spaceobject').hide();
			$('.spaceobject-type').css('padding-top', '1px');
			return false;
		});
		
		$('div.validation-space-object p a.modification').live('click',function(){
			$(this).removeClass('modification').addClass('validation');
			$(this).text('').text('Valider');
			$(this).parent().parent().removeClass('valid');
			$(this).parent().parent().parent().find('.spaceobject').show();
			$('.spaceobject-type').css('padding-top', '300px');
			return false;
		});
		
		//SELECTION EQUIPMENT
		$('div.equipment-type label input').change(function(){
			$(this).parent().parent().parent().find('span.equipment-name').css('color', '#414042').css('text-decoration','none');
			$(this).parent().parent().parent().find('img.mini-img-equipment').css('border','2px solid #d2cfbe');
			$(this).parent().parent().parent().css('padding-top', '300px');
			$(this).parent().parent().parent().find('.container-detail-equipment').hide();
			$(this).parent().parent().find('.container-detail-equipment').show();
			valeur = $(this).attr('id');
			$(this).parent().parent().parent().find('span.choice-spaceobject').text(valeur);
			$(this).parent().parent().parent().find('a.validation').css('display', 'block');
			$(this).next().next().css('color', '#55adaa').css('text-decoration','underline');
			$(this).next().css('border','2px solid #55adaa');
			
		});
		
		$('div.validation-equipment p a.validation').live('click',function(){
			$(this).removeClass('validation').addClass('modification');
			$(this).text('').text('Modifier');
			$(this).parent().parent().addClass('valid');
			$(this).parent().parent().parent().find('.solo').hide();
			$(this).parent().parent().parent().css('padding-top', '1px');
			return false;
		});
		
		$('div.validation-equipment a.modification').live('click',function(){
			$(this).removeClass('modification').addClass('validation');
			$(this).text('').text('Valider');
			$(this).parent().parent().removeClass('valid');
			$(this).parent().parent().parent().find('.solo').show();
			$(this).parent().parent().parent().css('padding-top', '300px');
			return false;
		});
		
		//SELECTION PERSONNEL
		$('div.personnel-type label input').change(function(){
			$(this).parent().parent().parent().find('div.description-personnel').hide();
			$(this).parent().parent().parent().find('label').removeClass('selected');
			$(this).parent().addClass('selected');
			$(this).parent().next().show();
		});
		
		$('div.personnel-type div.container-spationaute1 label input').change(function(){
			$('div.container-spationaute2 label').show();
			id = $(this).attr('id');
			$('div.container-spationaute2').find('input#' + id).parent().hide();
		});
		
		$('div.personnel-type div.container-spationaute2 label input').change(function(){
			$('div.container-spationaute1 label').show();
			id = $(this).attr('id');
			$('div.container-spationaute1').find('input#' + id).parent().hide();
		});
		
		$('a#calcul-total').click(function(){
			calcul();
			return false;
		});
		
		function calcul(){
			distanceAstre = parseInt($('div.container-spaceobject input:checked').parent().attr('id'));
			skill1_coque = parseInt($('div.container-coque input:checked').parent().next().find('.description-equipment p span').attr('id'));
			
			skill1_lanceur = parseInt($('.container-lance input:checked').parent().parent().find('.description-equipment p.1 span').attr('id'));
			skill2_lanceur = parseInt($('.container-lance input:checked').parent().parent().find('.description-equipment p.2 span').attr('id'));
			skill1_module = parseInt($('.container-module input:checked').parent().parent().find('.description-equipment p.1 span').attr('id'));
			skill2_module = parseInt($('.container-module input:checked').parent().parent().find('.description-equipment p.2 span').attr('id'));
			skill1_combinaison = parseInt($('div.container-combinaison input:checked').parent().next().find('.description-equipment p span').attr('id'));
			
			skill1_pilote = parseInt($('.container-pilote input:checked').parent().parent().find('p.skill1').attr('id'));
			skill2_pilote = parseInt($('.container-pilote input:checked').parent().parent().find('p.skill2').attr('id'));
			
			skill1_spationaute1 = parseInt($('.container-spationaute1 input:checked').parent().parent().find('p.skill1').attr('id'));
			skill2_spationaute1 = parseInt($('.container-spationaute1 input:checked').parent().parent().find('p.skill2').attr('id'));
			
			skill1_spationaute2 = parseInt($('.container-spationaute2 input:checked').parent().parent().find('p.skill1').attr('id'));
			skill2_spationaute2 = parseInt($('.container-spationaute2 input:checked').parent().parent().find('p.skill2').attr('id'));
			
			phase_test = parseInt($('input#phase_test').attr('value'));
			
			vitesse = ( distanceAstre / skill1_lanceur )*(30 - skill2_pilote);
			carburant = distanceAstre * (((skill2_lanceur * 2) + skill1_lanceur));
			echec = ((skill1_pilote + skill1_coque) / 3) + phase_test;
			pointaction = (skill1_module + skill2_spationaute1 + skill2_spationaute2) * 30;
			coutaction = 
			
			alert(echec);

		}
		
		/*$('form.createMission').submit(function(){
			alert('SALUT');
			$('h2.error').hide();
			
			url = $(this).attr('action');
			
			astre = $('div.container-spaceobject input:checked').attr('value');
			
			lanceur = $('div.container-lance input:checked').attr('value');
			coque = $('div.container-coque input:checked').attr('value');
			module = $('div.container-module input:checked').attr('value');
			combinaison = $('div.container-combinaison input:checked').attr('value');
			
			pilote = $('.container-pilote input:checked').attr('value');
			spationaute1 = $('.container-spationaute1 input:checked').attr('value');
			spationaute2 = $('.container-spationaute2 input:checked').attr('value');
			
			phase_test = $('input#phase_test').attr('value');
			
			if(astre !== 'undefined'){
			
				if((lanceur !== 'undefined') OR (coque !== 'undefined') OR (module !== 'undefined') OR (combinaison !== 'undefined')){
				
					if((pilote !== 'undefined') OR (spationaute1 !== 'undefined') OR (spationaute2 !== 'undefined')){
					
						if(phase_test !== 'undefined'){
							status = 'ok';
						}
						else{status = 'fail'; message = 'Vous n\'avez pas effectuer l\'étape 4';}
						
					}
					else{status = 'fail'; message = 'Vous n\'avez pas effectuer l\'étape 3';}
					
				}
				else{status = 'fail'; message = 'Vous n\'avez pas effectuer l\'étape 2';}
			}
			else{status = 'fail'; message = 'Vous n\'avez pas effectuer l\'étape 1';}
			
			
			if(status == 'ok'){
				/*$.ajax({
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
		    }
		    alert(status);
		    }
		    else{
			    $('h2.error').text(message).show();
		    }
		return false;
		});*/
		
		
});