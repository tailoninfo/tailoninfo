'use strict'
var h_tela = 0;
var w_tela = 0;
var w_tela_ini = 0;
var y = 0;
var y2 = 0;
var controle_click = false;
	
$(document).ready(function(){

ajust();

window.onload=function(){
	//setTimeout('ajust()',500);
	};

$("#bt-menu, #mask-menu").click(function() {
	
	
	if($(this).attr('id') === 'bt-menu'){
		$(this).toggleClass('open');
	}
	
	$('#menu-mobile, #menu-mobile-int, #container-site, #mask-menu').toggleClass('open');
	
	if(controle_click === false){
		lock_scroll(true);
		controle_click = true;
	}else{
		lock_scroll(false);
		controle_click = false;
	}
	
	
	
	
	/*$( "#area_menu_mobile" ).toggleClass( "slideRight", 200 );
	if(controle_click === false){
		$('a#logo_mobile').animate({opacity:0},200);
		$('#mask_menu').fadeIn(200);
		y2 = y;
		$('#conteudo_page').css('position','fixed').css('height',h_tela + 'px');
		$('#conteudo_page_int').css('margin-top','-' + y + 'px');
		controle_click = true;
		
	}else{
		$('#conteudo_page').css('position','relative').css('height','auto');			
		$('#conteudo_page_int').css('margin-top','0px');
		$('html, body').animate({ scrollTop: y2 }, 0);
		$('#mask_menu').fadeOut(200);
		$('a#logo_mobile').animate({opacity:1},200);
		controle_click = false;
	}*/
});

	

$('#intro').each(function(){
	var $obj = $(this);

	$(window).scroll(function() {
		
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 	
		
		//var calc = (w_tela * 0.5) - 15;
		
		var bgpos = '50% '+ yPos + 'px';

		if(w_tela > 960){
		
			$obj.css('background-position', bgpos );
			
		}

	}); 
});


	window.addEventListener("resize", ajust);


	$(window).scroll(function(){


		y = $(document).scrollTop();


	});

});		

function ajust(){
	
	y2 = y;
	
	//recebendo valores tela
	h_tela = window.innerHeight;
	w_tela = window.innerWidth;
	
	
	if(w_tela < 961){
		if(w_tela !== w_tela_ini){
			$('#intro').css('height',h_tela + 'px');
			w_tela_ini = w_tela;
		}
	}else{
		$('#intro').css('height',h_tela + 'px');
	}
	
	if(w_tela < 961){
		if(w_tela !== w_tela_ini){
			$('#list-categorias a').css('height',h_tela / 2 + 'px');
			w_tela_ini = w_tela;
		}
	}else{
		$('#list-categorias a').css('height',h_tela + 'px');
	}
	
}


function lock_scroll(bool){
	
	
	if(bool === true){
		$('body').bind('scroll touchmove mousewheel', function(e){
			e.preventDefault();
			return false;
		});
	}else{
		$('body').unbind('scroll touchmove mousewheel');
	}
	
}
	



	
	
	
