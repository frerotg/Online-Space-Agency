$(function(){
	$('body').scrollTop(1000);
	
	$('div.contener-stat-link a').click(function(){
		$.scrollTo('section.stat',500);
		return false;
	});	
	
	$('section.home header a').click(function(){
		$.scrollTo('section.register',500);
		return false;
	});
	
	$('div.link-success-register a').click(function(){
		$.scrollTo('section.home',500);
		return false;
	});
	
	$('a.toRegister').click(function(){
		$.scrollTo('section.register',500);
		return false;
	});
	
	$('a.toConnection').click(function(){
		$.scrollTo('section.home',500);
		return false;
	});
	
	$('a.toStat').click(function(){
		$.scrollTo('section.stat',500);
		return false;
	});
	
	$('form.register input').focus(function(){
		$(this).prev('label').find('span.error').text('');
		$(this).prev('label').css('color', '#414042');
		$('div.add-info').hide();
		$(this).next().fadeIn();
  	});
  	
  	$("input[type='radio']").change( function() {
  		valeur = $(this).val();
  		if(valeur == 'refuse'){
	  		$('.register-btn').hide();
  		}
  		if(valeur == 'accept'){
	  		$('.register-btn').css('display', 'block');
  		}
  	});
  	
  	$('a.next-register1').click(function(){

    	username = $('#username').val();
    	password = $('#password').val();
    	email = $('#email').val();
    	url = $(this).parent().parent().attr('action');
    	
    	$.ajax({
	      	type: "GET",
	      	url: url,
	      	data: {inputUsername: username, inputPassword: password, inputEmail: email, step: '1'},
	      	dataType: "json",
	      	success: function(data){
	        	if(data.status == "fail"){
	        		if(data.username == 'fail'){
		        		$('label[for="username"] span').text('    Le nom d\'utilisateur est deja prit');
		        		$('label[for="username"]').css('color', '#f23d4c');
	        		}
	        		if(data.validemail == 'fail'){
		        		$('label[for="email"] span').text('    L\'email entre n\'est pas valide');
		        		$('label[for="email"]').css('color', '#f23d4c');
	        		}
	        		if(data.email == 'fail'){
		        		$('label[for="email"] span').text('    Cette email est deja prit');
		        		$('label[for="email"]').css('color', '#f23d4c');
	        		}
	        		if(data.username == 'empty'){
		        		$('label[for="username"] span').text('    Le nom d\'utilisateur est vide');
		        		$('label[for="username"]').css('color', '#f23d4c');
	        		}
	        		if(data.password == 'empty'){
		        		$('label[for="password"] span').text('    Le mot de passe est vide');
		        		$('label[for="password"]').css('color', '#f23d4c');
	        		}
	        		if(data.email == 'empty'){
		        		$('label[for="email"] span').text('    L\'email est vide');
		        		$('label[for="email"]').css('color', '#f23d4c');
	        		}
	        	}
	        	else{
	        		$('div.form-register1').hide();
	        		$('div.form-register2').show();
	        	}
	      	}
    	});
	return false;
	});
	
	$('a.next-register2').click(function(){
    	
    	country_name = $('#country_name').val();
    	country_capital = $('#country_capital').val();
    	url = $(this).parent().parent().attr('action');
    	
    	$.ajax({
	      	type: "GET",
	      	url: url,
	      	data: {inputCountryName: country_name, inputCountryCapital: country_capital, step: '2'},
	      	dataType: "json",
	      	success: function(data){
	        	if(data.status == "fail"){
	        		if(data.country_name == 'fail'){
		        		$('label[for="country_name"] span').text('    Le nom de votre pays est deja prit');
		        		$('label[for="country_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.country_capital == 'fail'){
		        		$('label[for="country_capital"] span').text('    Le nom de la capital est deja prit');
		        		$('label[for="country_capital"]').css('color', '#f23d4c');
	        		}
	        		if(data.country_name == 'empty'){
		        		$('label[for="country_name"] span').text('    Le nom de votre pays est vide');
		        		$('label[for="country_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.country_capital == 'empty'){
		        		$('label[for="country_capital"] span').text('    Le nom de la capital est vide');
		        		$('label[for="country_capital"]').css('color', '#f23d4c');
	        		}
	        	}
	        	else{
	        		$('div.form-register2').hide();
	        		$('div.form-register3').show();
	        	}
	      	}
    	});
	return false;
	});
	
	$('form.register').submit(function(){
    	
    	username = $('#username').val();
    	password = $('#password').val();
    	email = $('#email').val();
    	
    	country_name = $('#country_name').val();
    	country_continent = $('select[name="country_continent"] option:selected').val();
    	country_capital = $('#country_capital').val();
    	
    	
    	agency_name = $('#agency_name').val();
    	agency_initial = $('#agency_initial').val();
    	director_first_name = $('#director_first_name').val();
    	director_last_name = $('#director_last_name').val();
    	
    	url = $(this).attr('action');
    	
    	$.ajax({
	      	type: "GET",
	      	url: url,
	      	data: {inputUsername: username, inputPassword: password, inputEmail: email, inputCountryName: country_name, inputCountryContinent: country_continent, inputCountryCapital: country_capital, inputAgencyName: agency_name, inputAgencyInitial: agency_initial, inputDirectorFirst: director_first_name, inputDirectorLast: director_last_name, step: '3'},
	      	dataType: "json",
	      	success: function(data){
	        	if(data.status == "fail"){
	        		if(data.agency_name == 'fail'){
		        		$('label[for="agency_name"] span').text('    Le nom de votre agence est deja prit');
		        		$('label[for="agency_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.agency_initial == 'fail'){
		        		$('label[for="agency_initial"] span').text('    Les initials de votre agence sont deja prit');
		        		$('label[for="agency_initial"]').css('color', '#f23d4c');
	        		}
	        		if(data.director_first_name == 'fail'){
		        		$('label[for="director_first_name"] span').text('    Le nom de votre personnage est deja prit');
		        		$('label[for="director_first_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.director_last_name == 'fail'){
		        		$('label[for="director_last_name"] span').text('    Le prenom de votre personnage est deja prit');
		        		$('label[for="director_last_name"]').css('color', '#f23d4c');
	        		}
	        		
	        		if(data.agency_name == 'empty'){
		        		$('label[for="agency_name"] span').text('    Le nom de votre agence est vide');
		        		$('label[for="agency_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.agency_initial == 'empty'){
		        		$('label[for="agency_initial"] span').text('    Les initials de votre agence sont vide');
		        		$('label[for="agency_initial"]').css('color', '#f23d4c');
	        		}
	        		if(data.director_first_name == 'empty'){
		        		$('label[for="director_first_name"] span').text('    Le nom de votre personnage est vide');
		        		$('label[for="director_first_name"]').css('color', '#f23d4c');
	        		}
	        		if(data.director_last_name == 'empty'){
		        		$('label[for="director_last_name"] span').text('    Le prenom de votre personnage est vide');
		        		$('label[for="director_last_name"]').css('color', '#f23d4c');
	        		}
	        	}
	        	else{
	        		$('form.register').hide();
	        		$('div.title-register').hide();
	        		$('div.success-register').show();
	        	}
	      	}
    	});
	return false;
	});
});