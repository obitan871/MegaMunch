<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>

<!-- Header section -->
<header>
  <h1 class="header-logo">MegaMunch</h1>
  
  <input type="checkbox" id="header-nav-toggle" class="header-nav-toggle">
  <nav>
    <ul>
      <li><a href="#">Shop All</a></li>
      <li><a href="#">Fruits</a></li>
      <li><a href="#">Vegetables</a></li>
      <li><a href="#">Dairy & eggs</a></li>
      <li><a href="#">Meat & Seafood</a></li>
      <li><a href="#">Bread & bakery</a></li>
      <li><a href="#">Beverage</a></li>
      <li><a href="#">Snaks</a></li>
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
      <li><a href="#" class="cart">Cart</a></li>
    </ul>
  </div>
</header>

<div class="separator"></div>

<!-- Main section -->
<main>
  <div class="carousel">
    <button class="carousel-btn carousel-btn--left">
      <span class="material-symbols-outlined">navigate_before</span>
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
      <span class="material-symbols-outlined">navigate_next</span>
    </button>
    <div class="carousel-nav">
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
    </div>
  </div>

</main>

<!-- Footer section -->

<script src="js/carousel.js"></script>

</body>
</html>