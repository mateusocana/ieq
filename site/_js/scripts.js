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


// fone mask
jQuery(function($){
   $("#fone").mask("(99) 9999-9999");
});
