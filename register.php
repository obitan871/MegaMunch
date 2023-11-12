<?php
require_once "dbconfig.php";

// Initialize variables
$username = $password = $confirm_password = $fname = $lname = $email = "";
$username_error = $password_error = $confirm_password_error = $fname_error = $lname_error = $email_error = "";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check username
    if (empty(trim($_POST["username"]))) {
        $username_error = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_error = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Perform duplicate check
        $sql = "SELECT id FROM `User` WHERE username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to prepare statement
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {

                // Store result
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) > 0) {
                    $username_error = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Sorry. Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Check password
    if (empty(trim($_POST["password"]))) {
        $password_error = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_error = "Password must have at least six characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_error = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_error) && ($password != $confirm_password)) {
            $confirm_password_error = "Password doesn't match.";
        }
    }

    // Check first name
    if (empty(trim($_POST["fname"]))) {
        $fname_error = "Please enter your first name.";
    } else {
        $fname = trim($_POST["fname"]);
    }

    // Check last name
    if (empty(trim($_POST["lname"]))) {
        $lname_error = "Please enter your last name.";
    } else {
        $lname = trim($_POST["lname"]);
    }

    // Check email
    if (empty(trim($_POST["email"]))) {
        $email_error = "Please enter your email address.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email is invalid.";
    } else {
        $email = trim($_POST["email"]);

    }

    // If no input errors, create new user record
    if (empty($username_error) && empty($password_error) && empty($confirm_password_error) &&
        empty($fname_error) && empty($lname_error) && empty($email_error)) {
        // Perform an insertion
        $sql = "INSERT INTO `User` (username, password, firstname, lastname, email) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to prepare statement
            mysqli_stmt_bind_param($stmt, "sssss", $username, $param_password, $fname, $lname, $email);

            echo "alert(\"" . $password . ": " . password_hash($password, PASSWORD_DEFAULT) . "\");";
            
            // Set parameters
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                header("location: index.php");
            } else {
                echo "Sorry. Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register | MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/signup.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">

    <!-- Header section -->
    <?php include 'header.php'; ?>

    <!-- Main section -->
    <main style="background: white;">
      <div class="signup-table">

        <h2>Sign Up</h2>
        <p>Please fill this form to create an account</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <!-- username -->
          <div class="signup-username">
            <label>Username: </label>
            <input type="text" name="username" <?php echo (!empty($username_error)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
            <span class="signup-error"><?php echo $username_error; ?></span>
          </div>
    
          <!-- password -->
          <div class="signup-password">
            <label>Password: </label>
            <input type="password" name="password" <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>">
            <span class="signup-error"><?php echo $password_error; ?></span>
          </div>
    
          <!-- confirm password -->
          <div class="signup-confirm-password">
            <label>Confirm Password: </label>
            <input type="password" name="confirm_password" <?php echo (!empty($confirm_password_error)) ? 'is-invalid' : ''; ?> value="<?php echo $confirm_password; ?>">
            <span class="signup-error"><?php echo $confirm_password_error; ?></span>
          </div>
    
          <!-- first name -->
          <div class="signup-first-name">
            <label>First Name: </label>
            <input type="text" name="fname" <?php echo (!empty($fname_error)) ? 'is-invalid' : ''; ?> value="<?php echo $fname; ?>">
            <span class="signup-error"><?php echo $fname_error; ?></span>
          </div>

          <!-- last name -->
          <div class="signup-last-name">
            <label>Last Name: </label>
            <input type="text" name="lname" <?php echo (!empty($lname_error)) ? 'is-invalid' : ''; ?> value="<?php echo $lname; ?>">
            <span class="signup-error"><?php echo $lname_error; ?></span>
          </div>

          <!-- email -->
          <div class="signup-email">
            <label>Email: </label>
            <input type="text" name="email" <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?> value="<?php echo $email; ?>">
            <span class="signup-error"><?php echo $email_error; ?></span>
          </div>
    
          <!-- submit -->
          <div class="signup-submit">
            <input type="submit" class="signup-submit-btn" value="Create Account">
          </div>
          <p>Already have an account? <a href="signin.php">Sign In here</a>.</p>
        </form>
      </div>

      <?php include "support.php"; ?>
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>

  </div>
</body>

</html>