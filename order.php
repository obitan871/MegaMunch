<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href="css/order.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <!-- Header section -->
    <?php include "header.php"; ?>

    <!-- Main section -->
    <main style="background: white;">

      <p>&nbsp;</p>
      <div class="order">
        <div class="order-items-header">
          <div class="order-item-header-description">Description</div>
          <div class="order-item-header-price">Price</div>
          <div class="order-item-header-quantity">Quantity</div>
          <div class="order-item-header-subtotal">Total</div>
          <div class="order-item-header-delete"></div>
        </div>
        <div class="order-items">
        </div>

        <!-- <div class="order-summary">
          <div class="order-summary-total-before-tax">
            <span>Subtotal: </span>
            <span>$88.11</span>
          </div>
          <div class="order-summary-total-tax">
            <span>Tax: </span>
            <span>$5.29</span>
          </div>
          <div class="order-summary-total-after-tax">
            <span>Total: </span>
            <span>$93.40</span>
          </div>
          <div class="order-summary-pay-this">
            <button class="order-summary-pay-this-btn">Place this Order</button>
          </div>
        </div> -->
      </div>


      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>
  
  <script src="js/order.js"></script>

</body>
</html>