// menu dropdown - efeito que faz aparecer o submenue
$(function(){

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

   $("#cityclick").click(function () {
      $("#box-login").toggle("fast");
});
