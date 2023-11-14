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
		<h1>Frequently Asked Questions</h1>
		<h2>Question 1: Do you do delivery?</h2>
		<p><b>Answer: </b> No, we do not do delivery. You can order online and then come pick up the groceries later once they are collected.</p>
		<br>
		<h2>Question 2: Do you sell anything except food products?</h2>
		<p><b>Answer:</b> We only sell food products.</p>
		<br>
		<h2>Question 3: What is your return policy?</h2>
		<p><b>Answer:<b> You can return products, if you bring a recept, within 30 days of purchase. This includes items that are expired or that you tried and didn't enjoy.</p>
		<br>
		<h2>Question 4: Is this your only location?</h2>
		<p><b>Answer:</b> Yes this is our only location</p>
		<br>
		<h2>Question 5: How does your online ordering work if you don't do delivery?"</h2>
		<p><b>Answer:</b> You create an online order and then come to the store to pick it up once it's available"</p>
		<br>
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