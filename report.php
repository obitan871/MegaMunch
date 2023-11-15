<?php
  require_once "dbconfig.php";

  $sql = 
    "SELECT YEAR(o.orderdate), c.name, SUM(oe.price * oe.quantity) ".
    "FROM `Order` o ".
    "INNER JOIN OrderEntry oe ".
    "ON o.id = oe.oid ".
    "INNER JOIN Product p ".
    "ON oe.pid = p.id ".
    "INNER JOIN ProductCategory pc ".
    "ON p.id = pc.pid ".
    "INNER JOIN Category c ".
    "ON pc.cid = c.id ".
    "WHERE c.id < 2000 ".
    "GROUP BY c.id, YEAR(o.orderdate)";
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
  <link href="css/chart.css" rel="stylesheet" type="text/css">
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

      <p>&nbsp;</p>
      <h2></h2>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li>Analysis Report</li>
        </ul>
      </nav>

      <div class="chart-container">
      <?php
        if ($stmt = mysqli_prepare($conn, $sql)) {

          // Execute the prepared statement
          if (mysqli_stmt_execute($stmt)) {

            // Bind result to variables
            mysqli_stmt_bind_result($stmt, $year, $name, $sum);

            $max_sum = 0.00;
            $records = array();
            while (mysqli_stmt_fetch($stmt)) {
              $records[] = array($year, $name, $sum);
              if ($sum > $max_sum) {
                $max_sum = $sum;
              }
            }

            for ($i = 0; $i < 7; $i++) {
              $chartset = "<div class=\"chart-set\">\r\n";

              for ($j = 0; $j < 3; $j++) {
                $record = $records[$i * 3 + $j];

                $r_year = $record[0];
                $r_name = $record[1];
                $r_sum = $record[2];
                $val = round($r_sum * 100 / $max_sum, 2);
                
                $chartset .= "<div class=\"chart\">\r\n";
                $chartset .= "<div style=\"--val: $val\" class=\"chart-bar\" amt=\"$r_sum\"></div>\r\n";
                $chartset .= "<div class=\"chart-bar-label\">$r_year</div>\r\n";
                $chartset .= "</div>\r\n";
              }
              $chartset .= "<div class=\"chart-set-label\">$r_name</div>\r\n";
              $chartset .= "</div>\r\n";

              echo $chartset;
            }
          }

          mysqli_stmt_close($stmt);
        }
      ?>
      </div>

      <table>
        <tr>
            <th></th>
            <th>Fruit</th>
            <th>Vegetables</th>
            <th>Dairy & Eggs</th>
            <th>Meat & Seafood</th>
            <th>Bread & Bakery</th>
            <th>Beverage</th>
            <th>Snacks</th>
       </tr>
       <tr>
            <td>2021</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
       </tr>
       <tr>
            <td>2022</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
       </tr>
       <tr>
            <td>2023</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
       </tr>
      <table>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

  <?php include "cart.php"; ?>

</body>
</html>