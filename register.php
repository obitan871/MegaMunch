<?php
require_once "dbconfig.php";

// Initialize variables
$username = $email = $password = $confirm_password = "";
$username_error = $email_error = $password_error = $confirm_password_error = "";

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check username
    if (empty(trim($_POST["username"]))) {
        $username_error = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_error = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Perform duplicate check
        $sql = "SELECT id FROM users WHERE username = ?";

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

    // Check email
    if (empty(trim($_POST["email"]))) {
        $email_error = "Please enter your email address.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email is invalid.";
    } else {
        $email = trim($_POST["email"]);
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

    // If no input errors, create new user record
    if (empty($username_error) && empty($password_error) && empty($confirm_password_error)) {
        // Perform an insertion
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to prepare statement
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_email);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_email = $email;

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

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <!-- username -->
      <div>
        <label>Username: </label>
        <input type="text" name="username" <?php echo (!empty($username_error)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
        <span><?php echo $username_error; ?></span>
      </div>

      <!-- email -->
      <div>
        <label>Email: </label>
        <input type="text" name="email" <?php echo (!empty($email_error)) ? 'is-invalid' : ''; ?> value="<?php echo $email; ?>">
        <span><?php echo $email_error; ?></span>
      </div>

      <!-- password -->
      <div>
        <label>Password: </label>
        <input type="password" name="password" <?php echo (!empty($password_error)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>">
        <span><?php echo $password_error; ?></span>
      </div>

      <!-- confirm password -->
      <div>
        <label>Confirm Password: </label>
        <input type="password" name="confirm_password" <?php echo (!empty($confirm_password_error)) ? 'is-invalid' : ''; ?> value="<?php echo $confirm_password; ?>">
        <span><?php echo $confirm_password_error; ?></span>
      </div>

      <!-- submit & reset -->
      <div>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
      </div>
      <p>Already have an account? <a href="signin.php">Sign In here</a>.</p>
    </form>
  </main>
</body>

</html>