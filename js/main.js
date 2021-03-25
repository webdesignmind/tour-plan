$(document).ready(function () {
  var hotelSwiper = new Swiper(".hotel-slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    // Navigation arrows
    navigation: {
      nextEl: ".hotel-slider__button--next",
      prevEl: ".hotel-slider__button--prev",
    },
    effect: "slide",
    keyboard: {
      enabled: true,
    },
  });
  var reviewsSwiper = new Swiper(".reviews-slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    // Navigation arrows
    navigation: {
      nextEl: ".reviews-slider__button--next",
      prevEl: ".reviews-slider__button--prev",
    },
  });

  var menuButton = $(".menu-button");
  menuButton.on("click", function () {
    $(".navbar-bottom").toggleClass("navbar-bottom--visible");
  });

  ymaps.ready(init);

  function init() {
    var myMap = new ymaps.Map(
        "map",
        {
          center: [-8.825719, 115.218629],
          zoom: 15,
        },
        {
          searchControlProvider: "yandex#search",
        }
      ),
      // Создаем геообъект с типом геометрии "Точка".
      myGeoObject = new ymaps.GeoObject(
        {
          // Описание геометрии.
          geometry: {
            type: "Point",
            coordinates: [-8.825719, 115.218629],
          },
          // Свойства.
          properties: {
            // Контент метки.
            iconContent: "Hilton Phuket Arcadia",
          },
        },
        {
          // Опции.
          // Иконка метки будет растягиваться под размер ее содержимого.
          preset: "islands#blackStretchyIcon",
          // Метку можно перемещать.
          draggable: true,
        }
      );
    myMap.geoObjects.add(myGeoObject);
  }

  // Пралакс эффект
  $(".parallax-window").parallax({ imageSrc: "../img/newsletter-bg.jpeg" });

  const activeClass = "active";

  // data-active
  const activeBlockList = document.querySelectorAll("[data-active-block]");
  if (activeBlockList) {
    for (const activeBlock of activeBlockList) {
      const activeControlList = document.querySelectorAll(
        `[data-active-control="${activeBlock.dataset.activeBlock}"]`
      );
      for (const activeControl of activeControlList) {
        function toggle() {
          for (const activeControlItem of activeControlList)
            activeControlItem.classList.toggle(activeClass);
          activeBlock.classList.toggle(activeClass);
        }
        activeControl.addEventListener("click", () => {
          toggle();
        });
        document.addEventListener("keydown", (event) => {
          if (
            event.code == "Escape" &&
            activeBlock.classList.contains(activeClass)
          ) {
            toggle();
          }
        });
      }
    }
  }

  //Обработка форм (валидация)
  //jqueryv
  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Please specify your name",
          minlength: "Name must be at least 2 letters",
        },
        email: {
          required: "We need your email address to contact you",
          email: "Your email address must be in the format of name@domain.com",
        },
        phone: {
          required: "Please enter your phone",
        },
      },
    });
  });
});
