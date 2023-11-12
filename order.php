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

// Initialize variable
$order_submission_result = "";

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check credential
  if (!$user->isSignedIn()) {
    header("location: signin.php");
    exit;
  }

  // Process form data
  $entries = json_decode($_POST["orderData"], true);
  if ($entries != null) {
    $subtotal = 0.00;

    for ($i = 0; $i < count($entries); $i++) {
      $entry = $entries[$i];

      $subtotal += round((double)$entry["price"] * (int)$entry["quantity"], 2);
    }

    $tax = round($subtotal * 0.12, 2);
    $total = $subtotal + $tax;

    $oid = -1;

    $sql = "INSERT INTO `Order` (uid, subtotal, tax, total) VALUES (?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind parameters
      mysqli_stmt_bind_param($stmt, "iiii", $param_user, $subtotal, $tax, $total);

      $param_user = $user->id;

      if (mysqli_stmt_execute($stmt)) {
        $oid = mysqli_insert_id($conn);

        $order_submission_result = "<h2 id=\"result\">Thank you for your order! (id: " . $oid . ")</h2>";
      } else {
        $order_submission_result = "<h2 id=\"result\">Sorry. Something went wrong. Please try again later.</h2>";
      }

      mysqli_stmt_close($stmt);
    }

    $sql = "INSERT INTO OrderEntry (oid, pid, price, quantity) VALUES (?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "iidi", $param_oid, $param_pid, $param_price, $param_quantity);

      for ($i = 0; $i < count($entries); $i++) {
        $entry = $entries[$i];

        $param_oid = $oid;
        $param_pid = $entry["id"];
        $param_price = $entry["price"];
        $param_quantity = $entry["quantity"];

        mysqli_stmt_execute($stmt);
      }

      mysqli_stmt_close($stmt);
    }

    echo '<script type="text/javascript">cartData = []; localStorage.clear();</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <?php include "header.php"; ?>

    <!-- Main section -->
    <main style="background: white;">

    <p>&nbsp;</p>
      <p>&nbsp;</p>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li>View cart</li>
        </ul>
      </nav>

<?php
      if ($order_submission_result == "") {
        include "orderform.php";
      } else {
        echo $order_submission_result . "<br>";
      }
      ?>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>
  
  <script src="js/order.js"></script>

</body>
</html>