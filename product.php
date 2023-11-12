<?php
  require_once "dbconfig.php";

  $pid = null;
  if (isset($_GET["id"])) {
    $pid = $_GET["id"];
  }

  $sql = "SELECT p.name, p.image, p.price, p.description, c.id, c.name ".
    "FROM Product p ".
    "INNER JOIN ProductCategory pc ".
    "ON p.id = pc.pid ".
    "INNER JOIN Category c ".
    "ON pc.cid = c.id ".
    "WHERE p.id = ? AND c.id < 2000";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="img/icon.png">

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
    <?php include "header.php"; ?>

    <!-- Main section -->
    <main style="background: white;">
      <?php
        if ($stmt = mysqli_prepare($conn, $sql)) {
          // Bind product id to prepare statement
          mysqli_stmt_bind_param($stmt, "i", $param_pid);

          $param_pid = $pid;

          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {

            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Bind result to variables
            mysqli_stmt_bind_result($stmt, $name, $image, $price, $desc, $cid, $cname);

            mysqli_stmt_fetch($stmt);
          }
        }
      ?>

      <p>&nbsp;</p>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="./list.php?id=<?php echo $cid ?>"><?php echo $cname ?></a></li>
          <li><?php echo $name ?></li>
        </ul>
      </nav>

      <div class="product" data-id="<?php echo $pid ?>">
        <div class="product-img">
          <img src="<?php echo $image ?>">
        </div>
        <div class="product-name">
          <h2><?php echo $name ?></h2>
          <p>PID: <?php echo $pid ?></p>
        </div>
        <div class="product-price"><?php echo $price ?></div>
        <div class="product-quantity">
          <p>Quantity</p>
          <input class="product-quantity-input" type="number" value="1" />
        </div>
        <button class="product-addtocart-btn">Add to Cart</button>
        <div class="product-info">
          <h3>Product Information</h3>
          <p><?php echo $desc ?></p>
        </div>
        <div class="product-return-policy">
          <h3>Return & Refund Policy</h3>
          <p>I&rsquo;m a Return and Refund policy. I&rsquo;m a great place to let your customers know what to do in case
            they are dissatisfied with their purchase. Having a straightforward refund or exchange policy is a great way
            to build trust and reassure your customers that they can buy with confidence.</p>
        </div>
      </div>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>

</body>
</html>