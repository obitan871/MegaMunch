<?php
  require_once "dbconfig.php";
  require_once "user.php";

  // Initialize the session
  session_start();
  
  // If the current user is already logged in, redirect to the home page
  $user = new User;
  if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
  }

  // Check credential
  if (!$user->isSignedIn()) {
    header("location: signin.php");
    exit;
  }

  $sql = "SELECT o.id, o.orderdate, o.subtotal, o.tax, o.total, p.name, p.image, oe.price, oe.quantity " .
    "FROM `Order` o " .
    "INNER JOIN OrderEntry oe " .
    "ON o.id = oe.oid " .
    "INNER JOIN Product p " .
    "ON oe.pid = p.id " .
    "WHERE o.uid = ?";  
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
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href="css/order.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <!-- Header section -->
    <?php include 'header.php'; ?>

    <!-- Main section -->
    <main style="background: white;">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li>Orders</li>
        </ul>
      </nav>

      <?php
        if ($stmt = mysqli_prepare($conn, $sql)) {
          // Bind category to prepare statement
          mysqli_stmt_bind_param($stmt, "i", $param_uid);
          $param_uid = $user->id;
          
          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
            // Bind result to variables
            mysqli_stmt_bind_result($stmt, $oid, $odate, $osubtotal, $otax, $ototal, 
              $pname, $pimage, $oeprice, $oequantity);

            // Fetch data and output
            $last_oid = -1;
            $summary = "";
            while (mysqli_stmt_fetch($stmt)) {
              if ($oid != $last_oid) { // new order id begins
                echo $summary;

                echo "<div class=\"order\">" .
                  "<h4 style=\"display: flex; justify-content: end;\">Order Date: " . $odate . "</h4>" .
                  "<div class=\"order-items-header\">" .
                    "<div class=\"order-item-header-description\">Description</div>" .
                    "<div class=\"order-item-header-price\">Price</div>" .
                    "<div class=\"order-item-header-quantity\">Quantity</div>" .
                    "<div class=\"order-item-header-subtotal\">Total</div>" .
                    "<div class=\"order-item-header-delete\"></div>" .
                  "</div>" .
                  "<div class=\"order-items\">";

                $last_oid = $oid;
              }

              $subtotal = round((double)$oeprice * (int)$oequantity, 2);

              echo "<div class=\"order-item\">" .
                "<img src=\"$pimage\">" .
                "<div class=\"order-item-name\">$pname</div>" .
                "<div class=\"order-item-price\">$oeprice</div>" .
                "<div class=\"order-item-quantity\">" .
                  "<span class=\"order-item-quantity-num\">$oequantity</span>" .
                "</div>" .
                "<div class=\"order-item-subtotal\">$subtotal</div>" .
                "</div>";


              $summary = "<div class=\"order-summary\">" .
                      "<div class=\"order-summary-subtotal\">" .
                        "<span>Subtotal: </span>" .
                        "<span class=\"order-summary-subtotal-num\">$osubtotal</span>" .
                      "</div>" .
                      "<div class=\"order-summary-tax\">" .
                        "<span>Tax: </span>" .
                        "<span class=\"order-summary-tax-num\">$otax</span>" .
                      "</div>" .
                      "<div class=\"order-summary-total\">" .
                        "<span>Total: </span>" .
                        "<span class=\"order-summary-total-num\">$ototal</span>" .
                      "</div>" .
                    "</div>" .
                  "</div>" .
                "</div>";
            }
            echo $summary;
          }
          mysqli_stmt_close($stmt);
        }
        mysqli_close($stmt);
      ?>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>

</body>
</html>