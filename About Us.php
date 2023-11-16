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
			<p>Welcome to MegaMunch, your one-stop destination for all your grocery needs! At MegaMunch, we are committed to revolutionizing the way you shop for groceries, making it not just a chore but an experience that is convenient, delightful, and tailored to your lifestyle.

Our Mission<br>
At MegaMunch, our mission is simple: to provide you with a seamless online grocery shopping experience that caters to your diverse tastes and preferences.<br>
We understand the importance of quality, variety, and efficiency in your day-to-day life, and we are here to exceed your expectations.<br>

What Sets Us Apart?<br>
Mega Selection: Dive into a world of choice with MegaMunch. Our extensive product range spans from farm-fresh produce and pantry staples to international delights and specialty items.<br>
We take pride in offering you a vast selection that meets your unique culinary needs.<br>
Quality Assurance: Your satisfaction is our priority. MegaMunch sources only the freshest and highest-quality products to ensure that every item in your cart meets our rigorous standards.<br>
From the farm to your doorstep, we guarantee freshness at every step. <br>
Tech-Driven Convenience: Embrace the future of grocery shopping with our user-friendly website and mobile app. MegaMunch leverages cutting-edge technology to provide you with a hassle-free shopping experience.<br>
Easily navigate through our platform, enjoy personalized recommendations, and breeze through the checkout process.<br>
Express Delivery: Time is precious, and we understand that. MegaMunch offers prompt and reliable delivery services, bringing your groceries to your doorstep with efficiency and care.<br>
Say goodbye to the hassle of traditional grocery shopping and hello to the convenience of MegaMunch.<br>
Customer-Centric Approach: Your satisfaction is our success. Our dedicated customer support team is always ready to assist you<br>.
We value your feedback and are committed to continuously improving our services based on your needs and preferences.<br>
MegaMunch Community: Join a community of food enthusiasts and health-conscious individuals who trust MegaMunch for their grocery needs.<br>
Follow us on social media for exciting recipes, cooking tips, and exclusive offers.<br>
Experience the MegaMunch difference today. Let us be your partner in creating memorable meals, hassle-free. Welcome to a world of Mega choices, Mega freshness, and Mega convenience at MegaMunch!<br>
 You can find us at 12666 72 Avenue Surrey, BC V3W 2M8.</p>
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
