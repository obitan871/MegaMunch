<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
         
         <div class="titel"><h1>Reports</h1></div>
                
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
                $query = "Select COUNT(users.customer_id) FROM users;";
                $totalusers;

                if ($result = $mysqli->query($query)) {
                  while ($row = $result->fetch_assoc()) {
                      $totalusers = $row["COUNT(users.customer_id)"];
                  }
                  $result->free();
                }

                $query = "Select product.name, SUM(product_orders.subtotal), COUNT(product_orders.product_order_id), SUM(product_orders.quantity), COUNT(DISTINCT(users.customer_id)) FROM product JOIN product_orders ON product.id = product_orders.product_id JOIN orders ON orders.order_id = product_orders.order_id JOIN users ON users.customer_id = orders.customer_id GROUP BY product.name;";

                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["name"];
                        $field2name = $row["SUM(product_orders.subtotal)"];
                        $totalorders = $row["COUNT(product_orders.product_order_id)"];
                        $field3name = $row["SUM(product_orders.quantity)"];
                        $field4name = $row["COUNT(DISTINCT(users.customer_id))"];

                        $field2name .= "$";
                        $field3name /= $totalorders;
                        $field4name /= $totalusers;

                        $field3name = number_format((float)$field3name, 2, '.', '');
                        $field4name = number_format((float)$field4name, 2, '.', '') * 100;

                        $field4name .= "%";


                        echo '<tr> 
                                <td>'.$field1name.'</td> 
                                <td>'.$field2name.'</td> 
                                <td>'.$field3name.'</td> 
                                <td>'.$field4name.'</td> 
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


