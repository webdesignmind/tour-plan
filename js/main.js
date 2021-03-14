var hotelSwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
  effect: 'slide',
  keyboard: {
    enabled: true,
  }
});
var reviewsSwiper = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
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