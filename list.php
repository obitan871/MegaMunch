<?php
  require_once "dbconfig.php";

  $cid = null;
  if (isset($_GET["id"])) {
    $cid = $_GET["id"];
  }

  $sql = "SELECT p.id, p.name, p.image, p.price, c.name ".
    "FROM Product p ".
    "INNER JOIN ProductCategory pc ".
    "INNER JOIN Category c ".
    "WHERE p.id = pc.pid AND pc.cid = c.id AND p.quantity > 0";
  
  if ($cid != null) {
    $sql .= " AND pc.cid = ?";
  }
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
  <link href="css/itemlist.css" rel="stylesheet" type="text/css">
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <!-- Header section -->
    <?php include 'header.php'; ?>

    <!-- Main section -->
    <main style="background: white;">
      <?php
        if ($stmt = mysqli_prepare($conn, $sql)) {
          if ($cid != null) {
            // Bind category to prepare statement
            mysqli_stmt_bind_param($stmt, "i", $param_cid);
      
            $param_cid = $cid;
          }
          
          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {
      
            // Bind result to variables
            mysqli_stmt_bind_result($stmt, $id, $name, $image, $price, $cname);
      
            mysqli_stmt_fetch($stmt);
          }
        }
      ?>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><?php echo ($cid != null) ? $cname : "Shop All"; ?></li>
        </ul>
      </nav>

      <div class="items">
        <?php
          do {
            echo "<div class=\"item\" data-id=\"$id\">\r\n".
                 "  <a href=\"product.php?id=$id\"><img src=\"$image\" class=\"item-img\"></a>\r\n".
                 "  <div class=\"item-name\">$name</div>\r\n".
                 "  <div class=\"item-price\">$price</div>\r\n".
                 "  <div class=\"item-quantity\">\r\n".
                 "    <input class=\"item-quantity-input\" type=\"number\" value=\"1\" />\r\n".
                 "  </div>\r\n".
                 "  <button class=\"item-addtocart-btn\">Add to Cart</button>\r\n".
                 "</div>\r\n";
          } while (mysqli_stmt_fetch($stmt));

          mysqli_stmt_close($stmt);

          // Close database connection
          mysqli_close($conn);
        ?>
      </div>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>

</body>
</html>