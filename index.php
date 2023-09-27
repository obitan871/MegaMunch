<html>
  <head>
    <title>Welcome to MegaMunch</title>
  </head>
  <body>
    <p>Welcome to MegaMunch!</p>
    
    <?php
    require_once("./user.php");

    session_start();

    $user = new User;
    if (isset($_SESSION['user'])) {
      $user = unserialize($_SESSION['user']);
    }

    if ($user->isSignedIn()) {
      echo '<p>Hello, ' . $user->username . '.</p><p><a href="signout.php">Sign Out</a></p>';
    } else {
      echo '<a href="./signin.php">Sign In</a>';
    }
    ?>
  </body>
</html>