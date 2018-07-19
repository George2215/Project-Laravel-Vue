$(document).ready(function() {
	
		var acerca = $('#acerca-de').offset().top,
			contacto = $('#contacto').offset().top;

	$('#btn-acerca').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({
			scrollTop: acerca
		}, 500);
	});

	$('#btn-contacto').on('click', function(e){
		e.preventDefault();
		$('html,body').animate({
			scrollTop:contacto
		},500);
	});

});