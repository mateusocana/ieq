$(function(){
 	$(".slide ul").cycle({
 		fx:'fade',
 		speed: 3000,
 		timeout: 6500,
 		next: '.next',
 		prev: '.prev',
    });
});

// outro slider - central
$(function(){
    $(".slideleft ul").cycle({
        fx:'cover',
        speed: 3000,
        timeout: 6500,
        next: '.next',
        prev: '.prev',
    });
});
