<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
      <section id="welcome">
        <div class="welcome-menu">
          <div class="logo">
            <img src="https://seeklogo.com/images/L/lucias-restaurant-terrace-bar-logo-997AA4FDEA-seeklogo.com.png">
          </div>
          <div class="menu">
            <!-- <div class="menu-title">
              Menu
            </div> -->
            <ul class="links">
              <li>
                <a href="#">Menu</a>
              </li>
              <li>
                <a href="#">Waitlist</a>
              </li>
              <li>
                <a href="#">Offers</a>
              </li>
              <li>
                <a href="#">Giftcards</a>
              </li>
            </ul>
          </div>
          <div class="bottom">
            <div class="location">
              <div class="address">
                4094 rue Wellington, Verdun. <br>
                H3G 1ML Montreal, QC., Canada.
              </div>
              <div class="phone-number">
                <a href="tel:4389213663">514-226-0550 </a>
              </div>
            </div>
            <div class="delivery-options">
              Livraison • Pick-Up
            </div>
            <div class="social-icons">
              <a href="#" class="cdn-icons">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#" class="cdn-icons">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#" class="cdn-icons">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="#" class="cdn-icons">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="welcome-jumbo">
          <div class="welcome-message">
            <div class="status">  The New </div>
            <h1>Billy Burger</h1>
          </div>
          <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
        </div>
      </section>
      <section id="information">
        <div class="restaurant-image">
          <img src="img/top-down.jpg">
        </div>
        <div class="info">
          <h2> Slick. And Classy. That's how we <span> roll. </span> </h2>
          <div class="paragraph">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <a href="#" class="about-link">
            <span> Find out what makes us a Montreal favorite </span>
            <div class="circle-right">
              <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
          </a>
        </div>
      </section>
      <section id="food-preview">
        <h2> We have everything you ❤️ so much. </h2>
        <div class="button-rounded"> View Menu </div>
        <div class="container">
          <div class="left-btn">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="right-btn">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
          <div class="food-slider">
            <div class="sliding-system">
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Starters
                  </div>
                  <p class="food-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Burgers
                  </div>
                  <p class="food-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Entrees
                  </div>
                  <p class="food-description">
                    Garden Medleys Chicken Cat Food
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Sides
                  </div>
                  <p class="food-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Desserts
                  </div>
                  <p class="food-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
              <div  class="slide">
                <div class="background"> </div>
                <div class="content">
                  <div class="food-title">
                    Desserts
                  </div>
                  <p class="food-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>
      <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
      <script src="/js/dist/FirstComp.js"></script>
      <script src="/js/dist/main.js"></script> -->
    </body>
</html>
