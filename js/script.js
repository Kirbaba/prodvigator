jQuery(document).ready(function($) {
	fotoramaResize();

	$('.navigation__toggle').on("click", function(event) {
		event.preventDefault();	
		 $(".navigation__menu").slideToggle();

	});
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
}
