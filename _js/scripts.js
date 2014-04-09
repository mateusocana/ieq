// menu dropdown - efeito que faz aparecer o sub-menu
$(document).ready(function(){
   $('nav ul li').hover(
       function(){
	     $('.sub-menu', this).fadeIn(40);
	   },

	   function(){
	     $('.sub-menu', this).fadeOut(60);
	   }	
	);
});

// login box
$("#box-login").hide();

$("#loginclick").click(function () {
    $("#box-login").toggle("fast");
});

// caroulsel - últimas noticias 
$(document).ready(function(){
   $(".carousel").jCarouselLite({
    // vertical: 'true',
    auto: 3500,
    speed: 4000,
    visible: 4,
    btnNext: ".news-next",
    btnPrev: ".news-prev",
   });
});
