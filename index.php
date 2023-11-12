<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="img/icon.png">
  
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
    <?php include 'header.php'; ?>

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
              <a href="list.php?id=2001"><img class="carousel-img" src="img/pic_1.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href="list.php?id=2002"><img class="carousel-img" src="img/pic_2.jpg"></a>
            </li>
            <li class="carousel-slide">
              <a href="list.php?id=2003"><img class="carousel-img" src="img/pic_3.jpg"></a>
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
        </div>
      </div>

      <div class="shop-by-category">
        <h1>Shop by Category</h1>
        <div class="categories">
          <div class="cat-fruits"><a href="list.php?id=1001">Fruits</a></div>
          <div class="cat-vegetables"><a href="list.php?id=1002">Vegetables</a></div>
          <div class="cat-dairyeggs"><a href="list.php?id=1003">Dairy & Eggs</a></div>
          <div class="cat-meatseafood"><a href="list.php?id=1004">Meat & Seafood</a></div>
          <div class="cat-breadbakery"><a href="list.php?id=1005">Bread & Bakery</a></div>
          <div class="cat-beverage"><a href="list.php?id=1006">Beverage</a></div>
          <div class="cat-snacks"><a href="list.php?id=1007">Snacks</a></div>
        </div>
      </div>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>

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

</body>
</html>