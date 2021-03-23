<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <title>Best Tour Plan - Hotel booking</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=aa917028-80cb-47a3-92cc-03d2fa091f6f&lang=ru_RU"></script>
  </head>

  <body>
    <header class="navbar navbar__mobile-fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="#" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Beat Tour Plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile--hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: Search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile--hidden">
            <img
              src="img/avatar.jpeg"
              alt="avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <div class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a
                href="#"
                class="user navbar__user navbar__user--mobile--visible"
              >
                <img
                  src="img/avatar.jpeg"
                  alt="avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light">Nathan</span>
              </a>
              <!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form
                action="#"
                class="search navbar__search navbar__search--mobile--visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: Search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
      </div>
      <!-- /.navbar-bottom -->
    </header>
    <!-- /.header -->

    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
        <!-- /.breadcrumb-list -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->