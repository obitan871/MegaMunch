<?php
// Initialize the session
session_start();

require_once('./user.php');

// If the current user is already logged in, redirect to the home page
$user = new User;
if (isset($_SESSION['user'])) {
  $user = unserialize($_SESSION['user']);
}

if ($user->isSignedIn()) {
  header("location: index.php");
  exit;
}

$username = $password = "";
$error_message = "";

// Handle login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty(trim($_POST["username"]))) {
    $error_message = "Please enter user name";
  } else {
    $username = trim($_POST["username"]);
  }

  if (empty(trim($_POST["password"]))) {
    $error_message = "Please enter your password";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate credential
  if (empty($error_message)) {

    //
    //
    //

    // Start a new session
    session_start();

    // Initialize user information
    $user->id = $id;
    $user->username = $username;
    $user->isSignedIn = true;

    // Initialize session variables
    $_SESSION['user'] = serialize($user);

    // Redirect to the home page
    header("location: index.php");
  }
}
?>

<html>
<head>
    <title>Sign In | MegaMunch</title>
  </head>
  <body>
    <div class="logo"></div>
    <p>Sign In</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div>
        <label>User Name:</label>
        <input type="text" name="username">
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password">
      </div>
      <div>
        <input type="submit" value="Sign In">
      </div>
      <p>New to MegaMunch? <a href="./register.php">Sign up now</a></p>
    </form>
  </body>
</html>