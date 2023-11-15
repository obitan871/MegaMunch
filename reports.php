<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="img/icon.png">

  <title>Welcome to MegaMunch</title>
  <link href="css/breadcrums.css" rel="stylesheet" type="text/css">

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/categories.css" rel="stylesheet" type="text/css">
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
    
    <!-- Header section -->
    <?php include 'header.php'; ?>

    <!-- Main section -->
    <main class="reports" style="background: white;">
        
         <p>&nbsp;</p>
         
         <div class="titel"><h1 style="text-align: center">Reports</h1></div>
                
         <div class="table-section"> 
             
             <table>
                 
                     
             <?php 
                    
                echo '<table border="4" align="center" cellspacing="3" cellpadding="3"> 
                    <tr> 
                        <td> <font face="Arial">Product</font> </td> 
                        <td> <font face="Arial">Net Sales</font> </td>
                        <td> <font face="Arial">Average Quantity per Order</font> </td>
                        <td> <font face="Arial">Popularity (Percentage of Total Users)</font> </td>
                    </tr>';

                $username = "root"; 
                $password = ""; 
                $database = "info2413"; 
                $mysqli = new mysqli("localhost", $username, $password, $database); 
                $query = "Select COUNT(user.id) FROM user;";
                $totalusers;

                if ($result = $mysqli->query($query)) {
                  while ($row = $result->fetch_assoc()) {
                      $totalusers = $row["COUNT(user.id)"];
                  }
                  $result->free();
                }

                $query = "Select product.name, SUM(orderentry.price), COUNT(orderentry.id), SUM(orderentry.quantity), COUNT(DISTINCT(user.id)) FROM product JOIN orderentry ON product.id = orderentry.pid JOIN `order` ON `order`.id = orderentry.oid JOIN user ON user.id = `order`.uid GROUP BY product.name;";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $productname = $row["name"];
                        $netsales = $row["SUM(orderentry.price)"];
                        $totalorders = $row["COUNT(orderentry.id)"];
                        $avgquantity = $row["SUM(orderentry.quantity)"];
                        $popularity = $row["COUNT(DISTINCT(user.id))"];

                        $netsales = "$" . $netsales;
                        $avgquantity /= $totalorders;
                        $popularity /= $totalusers;

                        $avgquantity = number_format((float)$avgquantity, 2, '.', '');
                        $popularity = number_format((float)$popularity, 2, '.', '') * 100;

                        $popularity .= "%";


                        echo '<tr> 
                                <td>'.$productname.'</td> 
                                <td>'.$netsales.'</td> 
                                <td>'.$avgquantity.'</td> 
                                <td>'.$popularity.'</td> 
                            </tr>';
                    }
                    $result->free();
                } 



                ?>
                        </table>
                    </div>
         
                                 <p>&nbsp;</p>
                                 <p>&nbsp;</p>

                    <?php include "support.php"; ?>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  

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


</body>
</html>
