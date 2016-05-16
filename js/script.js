jQuery(document).ready(function($) {
	fotoramaResize();

	$('.navigation__toggle').on("click", function(event) {
		event.preventDefault();	
		 $(".js_mobile_nav").slideToggle();

	});

	$(".drop").on('click',  function(event) {
		var open = $(this).data('open');
		if ($(window).width() <= 980) {
			if(open == "0") {
				event.preventDefault();
				$(this).data('open', '1');
			} 
			

		}
		
		/* Act on the event */
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
