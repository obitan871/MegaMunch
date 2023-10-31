<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/breadcrumbs.css" rel="stylesheet" type="text/css">
  <link href="css/itemlist.css" rel="stylesheet" type="text/css">
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
          <li><span>0</span><a href="#" class="cart">Cart</a></li>
        </ul>
      </div>
    </header>

    <!-- Main section -->
    <main style="background: white;">

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li>Shop All</li>
        </ul>
      </nav>

      <div class="items">
        <div class="item">
          <a href="#"><img src="img/product/c837a6_11d76874bf4f4964b3d89b3fde8b03d4~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Baguette - 12 oz.</div>
          <div class="item-price">3.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_36d41200f4b64ce9ae3217477852d196~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Chocolate Cookies - 4 ct.</div>
          <div class="item-price">5.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_425b5fac1bc5421eb1308140de5f20db~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Carrots - 1 lb</div>
          <div class="item-price">5.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_4cb5c7b10bf34549861bc763c08ecddd~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Croissants - 4 ct.</div>
          <div class="item-price">6.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_4da77aa2a0d64d599c150d9d023a931a~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Cucumber - 1 lb</div>
          <div class="item-price">0.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_7326ce5047ce43be94fa9c7963950913~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Red Bell Pepper - 1 lb</div>
          <div class="item-price">4.49</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_7d0cb61ce3f64c9092c5e58e6270bb90~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Banana Chocolate Chip Cake</div>
          <div class="item-price">5.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
        </div>
        <div class="item">
          <a href="#"><img src="img/product/c837a6_b5b9284a44384c8dbce0bc27bad2dda4~mv2.png" alt=""
              class="item-img"></a>
          <div class="item-name">Avocados - 1 lb</div>
          <div class="item-price">2.99</div>
          <div class="item-quantity">
            <input class="item-quantity-input" type="number" value="1" />
          </div>
          <button class="item-addtocart-btn">Add to Cart</button>
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

  <script src="js/cart.js"></script>
</body>

</html>