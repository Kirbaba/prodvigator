jQuery(document).ready(function($) {
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

});

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