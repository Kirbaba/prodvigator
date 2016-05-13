jQuery(document).ready(function($) {
	fotoramaResize();

	$('.navigation__toggle').on("click", function(event) {
		event.preventDefault();	
		 $(".navigation__menu").slideToggle();

	});

	
	/*$('.navigation__menu li').hover(function() {	
		var current = ($(this).attr('data-sub'));
		console.log(current);
		$("."+current).slideDown();	
	}, function() {
		var current = ($(this).attr('data-sub'));
		$("."+current).slideUp();
	});*/
	
});

$(window).resize(function() {
	fotoramaResize();
});

function fotoramaResize() {
	var $fotoramaDiv = $('.fotorama').fotorama();
	var fotorama = $fotoramaDiv.data('fotorama');
	
	if ($(window).width() <= 980) {
		fotorama.resize({
			height: 700
		});
	}
	if ($(window).width() <= 320) {
		fotorama.resize({
			height: 700
		});
	}
}
