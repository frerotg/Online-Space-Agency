$(function(){
  	
  	numberBuilding = $('p.countdownBuilding span').attr('class');
  	numberTechnology = $('p.countdownTechnology span').attr('class');
  	numberEquipment = $('p.countdownEquipment span').attr('class');
  
    function countdownBuilding(){
	    setTimeout(countdownBuilding, 1000);
	    
	    $('p.countdownBuilding span').text(numberBuilding + ' sec');
	    numberBuilding--;
	    if(numberBuilding < 0){
	    	$('p.countdownBuilding span').text('Votre batiment est construit !').css('color','#090');
		    window.location.reload();
	    }
    }
  
    function countdownTechnology(){
	    setTimeout(countdownTechnology, 1000);
	    
	    $('p.countdownTechnology span').text(numberTechnology + ' sec');
	    numberTechnology--;
	    if(numberTechnology < 0){
	    	$('p.countdownTechnology span').text('Votre batiment est construit !').css('color','#090');
		    window.location.reload();
	    }
    }

    function countdownEquipment(){
	    setTimeout(countdownEquipment, 1000);
	    
	    $('p.countdownEquipment span').text(numberEquipment + ' sec');
	    numberEquipment--;
	    if(numberEquipment < 0){
	    	$('p.countdownEquipment span').text('Votre batiment est construit !').css('color','#090');
		    window.location.reload();
	    }
    }
    
    countdownBuilding();
    countdownTechnology();
    countdownEquipment();
    
    
    $('form.updateinfo').submit(function(){
    
    	password_old = $('#password_old').val();
    	password_new = $('#password_new').val();
    	password_new2 = $('#password_new2').val();
    	email = $('#email').val();
    	url = $(this).attr('action');
    	
    	$.ajax({
	      	type: "GET",
	      	url: url,
	      	data: {Ipassword_old: password_old, Ipassword_new: password_new, Ipassword_new2: password_new2, Iemail: email},
	      	dataType: "json",
	      	success: function(data){
	        	if(data.status == "fail"){
	        		if(data.password_old == 'empty'){
		        		$('label[for="password_old"] span').text('    Votre mot de passe est vide');
		        		$('label[for="password_old"]').css('color', '#f23d4c');
	        		}
	        		if(data.password_old == 'fail'){
		        		$('label[for="password_old"] span').text('    Votre mot de passe n\'est pas bon');
		        		$('label[for="password_old"]').css('color', '#f23d4c');
	        		}
	        		
	        		if(data.password_new == 'empty'){
		        		$('label[for="password_new"] span').text('    Votre nouveau mot de passe est vide');
		        		$('label[for="password_new"]').css('color', '#f23d4c');
	        		}
	        		if(data.password_new2 == 'empty'){
		        		$('label[for="password_new2"] span').text('    La répétition de votre nouveau mot de passe est vide');
		        		$('label[for="password_new2"]').css('color', '#f23d4c');
	        		}
	        		
	        		if(data.email == 'empty'){
		        		$('label[for="email"] span').text('    Votre email est vide');
		        		$('label[for="email"]').css('color', '#f23d4c');
	        		}
	        		
	        		if(data.email == 'notvalid'){
		        		$('label[for="email"] span').text('    Votre email n\'est pas valide');
		        		$('label[for="email"]').css('color', '#f23d4c');
	        		}
	        	}
	        	else{
	        		$('form.updateinfo').hide();
	        		$('div.success-updateinfo').show();
	        	}
	      	}
    	});
    	return false;
	});
});