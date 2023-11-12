<?php
  require_once "user.php";

  // Initialize the session
  session_start();
  
  // If the current user is already logged in, redirect to the home page
  $user = new User;
  if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);
  }
?>

<header>
      <a href="index.php"><img class="header-logo" src="img/logo.png"></a>
    
      <input type="checkbox" id="header-nav-toggle" class="header-nav-toggle">
      <nav>
        <ul>
          <li><a href="list.php">Shop All</a></li>
          <li><a href="list.php?id=1001">Fruit</a></li>
          <li><a href="list.php?id=1002">Vegetables</a></li>
          <li><a href="list.php?id=1003">Dairy & Eggs</a></li>
          <li><a href="list.php?id=1004">Meat & Seafood</a></li>
          <li><a href="list.php?id=1005">Bread & Bakery</a></li>
          <li><a href="list.php?id=1006">Beverage</a></li>
          <li><a href="list.php?id=1007">Snacks</a></li>
        </ul>
      </nav>
      <label for="header-nav-toggle" class="header-nav-toggle-label"><span></span></label>
      <div class="header-search">
        <input type="text" placeholder="Search...">
      </div>
      <div class="header-user-menu">
        <ul>
          <li>
            <?php
              if ($user->isSignedIn()) {
                echo "<a href=\"signout.php\" class=\"signout\">Sign Out</a>";
              } else {
                echo "<a href=\"signin.php\" class=\"signin\">Sign In</a>";
              }
            ?>
          </li>
          <li><a href="orders.php" class="orders">Orders</a></li>
          <li><span id="cart-amount">0</span><a href="#" class="cart">Cart</a></li>
        </ul>
      </div>
    </header>
