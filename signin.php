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
    <link rel="icon" href="img/icon.png">
    <title> Sign In | MegaMunch </title>
    <link href="css/signin.css" rel="stylesheet" type="text/css">
  </head>

  <body>
   
    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        
        <div class="logo">
            <h1><img class="logo-icon" src="img/icon.png"> MegaMunch Login</h1>
        </div>
        
        <div class="imgcontainer">
            <img src="img/avatar.png" alt="Avatar" class="avatar">
        </div>
     
         
        <div class="container">       
             
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"> 

    <button type="submit">Login</button>
      
     
    <p>New to MegaMunch? <a href="./register.php"> Register Now </a></p>
   
         
          </div>
       
        
    </form>
  </body>
</html>