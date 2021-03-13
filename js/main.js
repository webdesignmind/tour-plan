const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  // Navigation arrows
  navigation: {
    nextEl: '.slider-button__next',
    prevEl: '.slider-button__prev',
  },
  effect: 'slide',
  keyboard: {
    enabled: true,
  }
});
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [-8.825719, 115.218629],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Создаем геообъект с типом геометрии "Точка".
        myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [-8.825719, 115.218629]
            },
            // Свойства.
            properties: {
                // Контент метки.
                iconContent: 'Hilton Phuket Arcadia',
            }
        }, {
            // Опции.
            // Иконка метки будет растягиваться под размер ее содержимого.
            preset: 'islands#blackStretchyIcon',
            // Метку можно перемещать.
            draggable: true
        })
    myMap.geoObjects
        .add(myGeoObject)
        ;
}
$('.parallax-window').parallax({imageSrc: '../img/newsletter-bg.jpeg'});