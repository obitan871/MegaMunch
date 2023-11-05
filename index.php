<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Welcome to MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/carousel.css" rel="stylesheet" type="text/css">
  <link href="css/categories.css" rel="stylesheet" type="text/css">
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <!-- Header section -->
    <header>
      <h1 class="header-logo">MegaMunch</h1>

      <input type="checkbox" id="header-nav-toggle" class="header-nav-toggle">
      <nav>
        <ul>
          <li><a href="#">Shop All</a></li>
          <li><a href="#">Fruit</a></li>
          <li><a href="#">Vegetables</a></li>
          <li><a href="#">Dairy & eggs</a></li>
          <li><a href="#">Meat & Seafood</a></li>
          <li><a href="#">Bread & bakery</a></li>
          <li><a href="#">Beverage</a></li>
          <li><a href="#">Snacks</a></li>
        </ul>
      </nav>
      <label for="header-nav-toggle" class="header-nav-toggle-label"><span></span></label>

      <div class="header-search">
        <input type="text" placeholder="Search...">
      </div>

      <div class="header-user-menu">
        <ul>
          <li><a href="#" class="signin">Sign In</a></li>
          <li><a href="#" class="orders">Orders</a></li>
          <li><span id="cart-amount">0</span><a href="#" class="cart">Cart</a></li>
        </ul>
      </div>
    </header>

    <!-- Main section -->
    <main>
      <div class="carousel">
        <button class="carousel-btn carousel-btn--left">
          <svg>
            <use href="#prev"></use>
          </svg>
        </button>
        <div class="carousel-track-container">
          <ul class="carousel-track">
            <li class="carousel-slide">
              <a href=""><img class="carousel-img" src="img/pic_1.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href=""><img class="carousel-img" src="img/pic_2.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href=""><img class="carousel-img" src="img/pic_3.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href=""><img class="carousel-img" src="img/pic_4.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href=""><img class="carousel-img" src="img/pic_5.jpg"></a>
            </li>
          </ul>
        </div>
        <button class="carousel-btn carousel-btn--right">
          <svg>
            <use href="#next"></use>
          </svg>
        </button>
        <div class="carousel-nav">
          <button class="carousel-indicator"></button>
          <button class="carousel-indicator"></button>
          <button class="carousel-indicator"></button>
          <button class="carousel-indicator"></button>
          <button class="carousel-indicator"></button>
        </div>
      </div>

      <div class="shop-by-category">
        <h1>Shop by Category</h1>
        <div class="categories">
          <div class="cat-fruits"><a href="#">Fruits</a></div>
          <div class="cat-vegetables"><a href="#">Vegetables</a></div>
          <div class="cat-dairyeggs"><a href="#">Dairy & Eggs</a></div>
          <div class="cat-meatseafood"><a href="#">Meat & Seafood</a></div>
          <div class="cat-breadbakery"><a href="#">Bread & Bakery</a></div>
          <div class="cat-beverage"><a href="#">Beverage</a></div>
          <div class="cat-snacks"><a href="#">Snacks</a></div>
        </div>
      </div>

      <div class="support-info">
        <div class="store-location">
          <h3>Store Location</h3>
          <ul>
            <li>12666 72 Avenue</li>
            <li>Surrey, BC V3W 2M8</li>
            <li>info@megamunch.com</li>
          </ul>
          <h4>123-456-7890</h4>
        </div>
        <div class="customer-support">
          <h3>Customer Support</h3>
          <ul>
            <li>Contact Us</li>
            <li>Help Center</li>
            <li>About Us</li>
            <li>Careers</li>
          </ul>
        </div>
        <div class="policy">
          <h3>Policy</h3>
          <ul>
            <li>Shipping & Returns</li>
            <li>Terms & Conditions</li>
            <li>Payment Methods</li>
            <li>FAQ</li>
          </ul>
        </div>

        <hr />
      </div>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php
    include "cart.php";
  ?>

  <svg>
    <symbol id="next" viewBox="0 0 256 512">
      <path fill="white"
        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
    </symbol>

    <symbol id="prev" viewBox="0 0 256 512">
      <path fill="white"
        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
    </symbol>
  </svg>

  <script src="js/carousel.js"></script>
  <script src="js/cart.js"></script>
</body>

</html>