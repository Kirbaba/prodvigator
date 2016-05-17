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

	$(window).resize(function() {
		fotoramaResize();
	});
});




function fotoramaResize() {
	var fotorama_isset = jQuery('.fotorama');
	if (fotorama_isset.length > 0) {
		
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
}
ymaps.ready(init);
        
function init() {
    var myMap = new ymaps.Map('contacts_map', {
            center: [55.472714, 37.300045],
            zoom: 16,
            controls: [],
            
        })  ;
    myGeoObject = new ymaps.GeoObject({
        // Описание геометрии.
        geometry: {
            type: "Point",
            coordinates: [55.472714, 37.300045]
        },
        // Свойства.
        properties: {
            // Контент метки.
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }
    });
    
    myMap.behaviors.disable('scrollZoom');

    myMap.geoObjects
        .add(myGeoObject);
}