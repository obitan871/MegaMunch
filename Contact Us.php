<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="img/icon.png">
  
  <title>MegaMunch</title>

  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/cart.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet" />
</head>

<body>
  <div class="container">
    
    <!-- Header section -->
    <?php include 'header.php'; ?>

    <!-- Main section -->
    <main>
		<div class="User-Info">
			<h1>Contact Us</h1>
			<h2>Call Us</h2>
			<p>For online shopping support, call us at 123-456-7890. We’re available 7 days a week between 8am and 11pm EST.</p>
			<br>
			<br>
			<h2>Email Us</h2>
			<p>You can also email us at info@megamunch.com for inquires and we will respond as soon as we can get to you.<p>
		</div>
      <?php include "support.php"; ?>  
    </main>

    <!-- Footer section -->
    <footer>© 2022 - 2023 MegaMunch Ltd. All Rights Reserved.</footer>
  </div>

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

  <script src="js/carousel.js"></script>

</body>
</html>