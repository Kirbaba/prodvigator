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