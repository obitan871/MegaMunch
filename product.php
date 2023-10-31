<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/breadcrumbs.css" rel="stylesheet" type="text/css">
  <link href="css/product.css" rel="stylesheet" type="text/css">
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
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./list.php?Category=Fruit">Fruit</a></li>
          <li>Avocados - 1 lb</li>
        </ul>
      </nav>

      <div class="product">
        <div class="product-img">
          <img src="img/product/c837a6_b5b9284a44384c8dbce0bc27bad2dda4~mv2.png">
        </div>
        <div class="product-name">
          <h2>Avocados - 1 lb</h2>
          <p>PID: 00033</p>
        </div>
        <div class="product-price">2.99</div>
        <div class="product-quantity">
          <p>Quantity</p>
          <input class="product-quantity-input" type="number" value="1" />
          <button class="product-addtocart-btn">Add to Cart</button>
        </div>
        <div class="product-info">
          <h3>Product Information</h3>
          <p>I&rsquo;m a product detail. I&rsquo;m a great place to add more information about your product such as
            sizing, material, care and cleaning instructions. This is also a great space to write what makes this
            product
            special and how your customers can benefit from this item. Buyers like to know what they’re getting before
            they purchase, so give them as much information as possible so they can buy with confidence and certainty.
          </p>
        </div>
        <div class="product-return-policy">
          <h3>Return & Refund Policy</h3>
          <p>I&rsquo;m a Return and Refund policy. I&rsquo;m a great place to let your customers know what to do in case
            they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way
            to build trust and reassure your customers that they can buy with confidence.</p>
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