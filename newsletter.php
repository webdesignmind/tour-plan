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

    <div class="container">
      <div class="hotel">
        <h1 class="hotel-info__name hotel-name">Подписка оформлена</h1>
        <p class="hotel-description hotel-info__description">
      Теперь вы будуте получать все новые новости
        </p>
     </div>
    </div>


    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <a href="#" class="footer__logo">
            <img
              src="img/vertical-logo.svg"
              alt="Logo: Best Tour Plan"
              class="footer__logo"
            />
          </a>
          <div class="footer__list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-list -->

          <div class="footer__list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work?</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link"
                  >Promote your Business on BTP</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer-list -->

          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link"
                ><img src="img/facebook-icon.svg" alt="iсon: facebook"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/youtube-icon.svg" alt="icon: youtube"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/instagram-icon.svg" alt="icon: instagram"
              /></a>
            </div>
          </div>
          <!-- /.footer__social-network -->

          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-list -->

          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </p>
            <ul class="footer__ul">
              <li class="footer__item footer__item--mb-2">
                <img
                  class="footer__icon"
                  src="img/pin-icon.svg"
                  alt="icon: pin"
                />
                <a href="#" class="footer__item"
                  >9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                  States</a
                >
              </li>
              <li class="footer__item footer__item--mb-2">
                <img
                  class="footer__icon"
                  src="img/phone-icon.svg"
                  alt="icon: phone"
                />
                <div class="footer__item--tel">
                  Tel (business hours) :
                  <a href="tel:2691500" class="footer__item footer__item--mb-5"
                    >269 1500</a
                  >
                  <br />
                  Tel (hotline) Monday - Saturday:
                  <a href="tel:2691500" class="footer__item footer__item--mb-5"
                    >52-56-61-38</a
                  >
                  (08:00 am – 20:00 pm) <br />
                  Tel (hotline) Sunday:
                  <a href="tel:2691500" class="footer__item footer__item--mb-5"
                    >52-56-61-38</a
                  >
                  (08:00 am – 14:00 pm)
                </div>
              </li>
              <li class="footer__item footer__item--mb-2">
                <a href="mailto:cherly.lawson@example.com" class="footer__item">
                  <img
                    class="footer__icon"
                    src="img/mail-icon.svg"
                    alt="icon: mail"
                  />
                  cherly.lawson@example.com
                </a>
              </li>
            </ul>
            <!-- /.footer__ul -->
          </div>
          <!-- /.footer__contact-details -->

          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mb-3">Send us a message</h3>
            <form action="#" class="form footer__form">
              <input
                type="text"
                class="input footer__input"
                placeholder="Your Full Name*"
              />
              <input
                type="text"
                class="input footer__input"
                placeholder="Phone Number*"
              />
              <textarea
                class="message footer__message"
                cols="30"
                rows="5"
                placeholder="Message"
              ></textarea>
              <button class="button footer__button" type="submit">Send</button>
              <span class="footer__info">* Required Fields</span>
            </form>
          </div>
          <!-- /.footer__contact-form -->
        </div>
        <!-- /.footer-wrapper -->
        <div class="footer__bottom">
          <div class="footer__bottom--links">
            <a href="#" class="footer__bottom--link">Disclaimer</a>
            <a href="#" class="footer__bottom--link">Conditions of use</a>
            <a href="#" class="footer__bottom--link">Cancellation policy</a>
          </div>
          <img
            src="img/footer-bottom.jpg"
            alt="image: pay cards"
            class="footer__bottom--image"
          />
        </div>
        <!-- /.footer__bottom -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
  </body>
</html>

