$(function(){
	
	$('.link-setup').click(function(){
		$('div.step1').hide();
		$('div.step2').fadeIn();
	
		number = 0;
	    loader();
	    return false;
    });
	
    function loader(){ 
	    setTimeout(loader, 1000);

	    pourcent = number*5;
	    url = $('a.link-setup').attr('href');
	    
	    $('div.front-bar span').text(pourcent + '%');
	    $('div.front-bar').css('width', pourcent + '%');
	    number = number+1;
	    
	    switch(number)
		{
		case 4:
		  $('p.status-setup').hide().text('-- Mise en place de vos cadres aux murs --').fadeIn();
		  break;
		case 8:
		  $('p.status-setup').hide().text('-- Installation de votre ordinateur --').fadeIn();
		  break;
		case 12:
		  $('p.status-setup').hide().text('-- Allumage de votre frigo personnel --').fadeIn();
		  break;
		case 16:
		  $('p.status-setup').hide().text('-- Installation de votre nom sur la porte --').fadeIn();
		  break;
		case 20:
		  $('p.status-setup').hide().text('-- Tout est pret ! Entrez dans votre bureau. --').fadeIn();
		  break;
		}
	    
	    if(number == 20){
		    window.location = url;
	    }
    }
});
