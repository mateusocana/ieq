$(function(){
 	$(".slide ul, .banner ul").cycle({
 		fx:'fade',
 		speed: 3000,
 		timeout: 6500,
 		next: '.next',
 		prev: '.prev',
    });
});