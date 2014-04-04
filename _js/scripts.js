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
$(function(){
   $(".carousel").jCarouselLite({
    vertical: 'true',
    auto: 3500,
    speed: 4000,
    visible: 4,
    btnNext: ".news-next",
    btnPrev: ".news-prev",
    scroll: 1
   });
});

// // abre modal 
// $(function () {
//   // Associa o evento do popover ao clicar no link.
//   $('#a-popover').popover({
//      trigger: 'manual',
//      html: true,
//      title: 'Título popover',
//      content: $('#div-popover').html() // Adiciona o conteúdo da div oculta para dentro do popover.
//   }).click(function (e) {
//      e.preventDefault();
//      // Exibe o popover.
//      $(this).popover('show');
//   });

//   $('#btn-fechar').live('click', function (e) {
//      // Oculta o popover ao clicar no botão fechar.
//      $('#a-popover').popover('hide');
//   });

//   $('#btn-modal').live('click', function (e) {
//      // Oculta o popover ao clicar no botão abrir modal.
//      $('#a-popover').popover('hide');
//      // Abre o modal.
//      $('#div-modal').modal();
//   });
// });
