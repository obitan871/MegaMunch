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
			<h1>Terms and Conditions</h1>
			<p>This website (“Site”) is provided by MegaMunch Corp. ( “MegaMunch”, “we” and/or “us”) as a 
			service to our customers (“you”). Please review the following terms and conditions that govern
			your use of this Site (the "Agreement"). MegaMunch provides you access to this Site subject to 
			the terms and conditions of this Agreement. Please note that your use of this Site constitutes 
			your unconditional agreement to follow and be bound by these terms and conditions. MegaMunch 
			reserves the right to update or modify the Agreement at any time without prior notice. If the 
			Agreement has been updated, MegaMunch will post the new Agreement on this Site and note the date
			that it was last updated. Your use of this Site following any such posting constitutes your 
			unconditional agreement to follow and be bound by the Agreement as changed.

			By using this Site, you represent that you are of the age of majority in your jurisdiction. If you are not 
			of the age of majority in your jurisdiction, you must only use this Site under the supervision of your 
			parent or legal guardian who agrees to the Agreement. If you are a parent or legal guardian agreeing 
			to the Agreement, you must monitor and supervise the use of this Site by the minor and you are fully 
			responsible for the minor’s use of this Site, including all financial charges and legal liability that he or 
			she may incur.</p>
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