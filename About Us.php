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
			<h1>About Us</h1>
			<p>We are a small grocery store that is founded by some kwantlen students. We specalize in selling 
			food products of various kinds. Founded in 2023 we work to guatantee customer satisfaction with our 
			products. We offer the ability to order online to pick up at a later date if you don't wish to 
			come to the store and shop yourself. You can find us at 12666 72 Avenue Surrey, BC V3W 2M8.</p>
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