-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2023 at 02:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info2413`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`, `description`) VALUES
(1001, 'Fruit', NULL),
(1002, 'Vegetables', NULL),
(1003, 'Dairy & Eggs', NULL),
(1004, 'Meat & Seafood', NULL),
(1005, 'Bread & Bakery', NULL),
(1006, 'Beverage', NULL),
(1007, 'Snacks', NULL),
(2001, 'On Sale', NULL),
(2002, 'Most Popular', NULL),
(2003, 'New Arrival', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE `Order` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `orderdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subtotal` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Order`
--

INSERT INTO `Order` (`id`, `uid`, `orderdate`, `subtotal`, `tax`, `total`) VALUES
(37, 4, '2023-11-10 21:36:01', 25.00, 3.00, 28.00),
(38, 4, '2023-11-10 21:41:04', 55.00, 6.00, 62.00),
(39, 4, '2023-11-10 21:41:30', 21.00, 2.00, 24.00),
(40, 4, '2023-11-11 13:26:00', 47.00, 5.00, 53.00),
(41, 4, '2023-11-11 15:50:00', 26.00, 3.00, 29.00),
(42, 4, '2023-11-11 16:00:51', 53.00, 6.00, 59.00);

-- --------------------------------------------------------

--
-- Table structure for table `OrderEntry`
--

CREATE TABLE `OrderEntry` (
  `id` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `OrderEntry`
--

INSERT INTO `OrderEntry` (`id`, `oid`, `pid`, `price`, `quantity`) VALUES
(14, 37, 10004, 3.19, 1),
(15, 37, 10003, 5.49, 4),
(16, 38, 20002, 4.99, 3),
(17, 38, 10008, 5.97, 6),
(18, 38, 10007, 2.59, 2),
(19, 39, 20003, 1.49, 2),
(20, 39, 20005, 3.29, 2),
(21, 39, 20006, 3.99, 3),
(22, 40, 20004, 3.99, 1),
(23, 40, 20007, 4.99, 3),
(24, 40, 40001, 28.99, 1),
(25, 41, 20006, 3.99, 4),
(26, 41, 20002, 4.99, 1),
(27, 41, 20003, 1.49, 1),
(28, 41, 20004, 3.99, 1),
(29, 42, 10002, 1.69, 1),
(30, 42, 10003, 5.49, 1),
(31, 42, 10006, 10.96, 3),
(32, 42, 20005, 3.29, 2),
(33, 42, 50001, 6.49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `name`, `image`, `price`, `quantity`, `description`) VALUES
(10001, 'Banana Bunch - 1 lb', 'img/product/fruit/banana.jpg', 1.99, 2000, 'Bananas, the ultimate power-packed delight from Mother Nature, embody a wholesome treat with their naturally sweet allure. Adorned in their vibrant yellow jackets and boasting a luxuriously creamy interior, these potassium-rich gems cater to your on-the-go snacking needs, seamlessly blending into energizing smoothies or adding a delightful twist to your morning cereal. Bursting with essential vitamins and dietary fiber, bananas effortlessly elevate your diet\'s nutritional quotient. Whether savored as a quick and satisfying bite or creatively infused into diverse recipes, their innate sweetness and remarkable versatility shine through, inviting you to embrace the timeless allure of bananas, and let their invigorating essence brighten your day.'),
(10002, 'Orange - 1 lb', 'img/product/fruit/orange.jpg', 1.69, 2000, 'Oranges, nature\'s zesty burst of sunshine, are a refreshing delight with their juicy, tangy sweetness. Dressed in vibrant citrus hues, their succulent flesh is a perfect pick-me-up, whether enjoyed as a quick, on-the-go snack, squeezed into fresh, invigorating juices, or wedged into your morning salad. Packed with essential vitamins and antioxidants, oranges make a nutritious addition to your daily routine. Whether you savor them on their own or incorporate their lively flavors into an array of recipes, their natural brightness and versatility shine. Embrace the timeless appeal of oranges, relishing their vibrant juiciness, and let their revitalizing essence bring a burst of sunshine to your day.'),
(10003, 'Strawberries - 1 lb', 'img/product/fruit/strawberries.jpg', 5.49, 2000, 'Strawberries, the jewel-toned treasures of the garden, offer a delectable and vibrant delight with their sweet and slightly tart flavor. Dressed in shades of crimson and crowned with delicate green leaves, they\'re a burst of freshness that can be enjoyed in so many ways. Whether you snack on them straight from the carton, blend them into luscious smoothies, or adorn your desserts with their natural beauty, strawberries bring a burst of antioxidants, vitamin C, and dietary fiber to your plate. Whether you\'re savoring them on their own or exploring their versatility in countless culinary creations, the natural allure of strawberries is impossible to resist. Embrace the timeless charm of these ruby-red gems, savoring their juicy goodness, and let their revitalizing essence infuse your day with a touch of natural elegance.'),
(10004, 'Red Apple - 1 lb', 'img/product/fruit/red_apple.jpg', 3.19, 2000, 'Red apples, nature\'s rosy gift to your palate, embody a crisp and sweet delight with a touch of tartness. Cloaked in a ruby-hued skin and boasting a refreshing crunch, they\'re the epitome of a satisfying, wholesome snack. Whether you enjoy them as a crisp bite on the go, slice them into a crunchy salad, or dip them in peanut butter for a classic treat, red apples infuse your day with a burst of vitamins, dietary fiber, and antioxidants. Their versatility in both sweet and savory dishes makes them a kitchen favorite. Embrace the timeless allure of red apples, relishing their natural goodness, and let their revitalizing essence brighten your day.'),
(10005, 'Green Apple - 1 lb', 'img/product/fruit/green_apple.jpg', 4.09, 2000, 'Green apples, nature\'s crisp and tart wonders, bring a tangy and refreshing delight to your taste buds. Clothed in vibrant emerald skin and known for their zesty bite, they offer a guilt-free, invigorating snack. Whether you savor them as a crisp and rejuvenating on-the-go option, add them to fresh salads for a zingy twist, or enjoy them with a slice of sharp cheddar cheese for a classic pairing, green apples introduce a burst of vitamins, dietary fiber, and antioxidants to your daily regimen. Their versatility in both sweet and savory dishes sparks culinary creativity. Embrace the timeless appeal of green apples, relishing their invigorating tartness, and let their revitalizing essence infuse your day with a hint of natural vibrancy.'),
(10006, 'Purple Grape - 1 lb', 'img/product/fruit/purple_grape.jpg', 10.96, 2000, 'Purple grapes, nature\'s jewel-toned treasures, offer a lusciously sweet and slightly tart delight that\'s as refreshing as it is flavorful. Dressed in rich hues of deep purple, they are a burst of natural goodness, whether you enjoy them as a juicy on-the-go snack, freeze them for a cool treat, or sip on the delightful nectar of grape juice. Packed with vitamins, antioxidants, and dietary fiber, purple grapes bring a nutritious addition to your daily routine. Their versatility shines in both sweet and savory dishes, making them a versatile culinary muse. Embrace the timeless charm of purple grapes, savoring their succulent essence, and let their revitalizing sweetness elevate your day.'),
(10007, 'Mango - 1 lb', 'img/product/fruit/mango.jpg', 2.59, 2000, 'Mangoes, the tropical treasures of the orchard, offer a mouthwatering delight with their sweet and juicy flesh. Draped in a vibrant sunset of colors, they are the epitome of a refreshing, exotic treat. Whether you relish them as a hand-held tropical escape, blend them into tantalizing smoothies, or incorporate them into your culinary creations, mangoes bring a burst of vitamins, minerals, and antioxidants to your diet. Their versatility shines in both sweet and savory dishes, making them an essential ingredient for kitchen creativity. Embrace the timeless allure of mangoes, savoring their tropical essence, and let their revitalizing sweetness transport you to a far-off paradise.'),
(10008, 'Avacado - 1 lb', 'img/product/fruit/avacado.jpg', 5.97, 2000, 'Avocados, the creamy gems of the orchard, embody a rich, buttery delight with a touch of earthy goodness. Cloaked in velvety green skin and boasting a silky texture, they\'re the epitome of a wholesome, nutritious addition to your diet. Whether you enjoy them as a nutrient-rich addition to your salads, spread them on toast for a creamy breakfast, or blend them into a velvety-smooth guacamole, avocados bring a wealth of vitamins, healthy fats, and dietary fiber to your plate. Their versatility knows no bounds, whether used in savory dishes or in creative desserts. Embrace the timeless charm of avocados, savoring their creamy essence, and let their revitalizing richness elevate your culinary journey.'),
(20001, 'Cucumber - 1 lb', 'img/product/vegetables/cucumber.jpg', 1.99, 2000, 'Cucumbers, the cool and crisp champions of the garden, deliver a refreshingly hydrating delight with their mild, watery crunch. Cloaked in their vibrant green skin, they are the essence of a revitalizing, low-calorie snack. Whether you savor them as a guilt-free on-the-go option, add them to salads for an extra dose of freshness, or transform them into a chilled cucumber soup, cucumbers bring a burst of hydration, vitamins, and dietary fiber to your plate. Their versatility and mild flavor make them a versatile ingredient in various culinary creations. Embrace the timeless appeal of cucumbers, relishing their hydrating essence, and let their revitalizing crispness invigorate your day.'),
(20002, 'Bell Pepper - 1 lb', 'img/product/vegetables/bell_pepper.jpg', 4.99, 2000, 'Bell peppers, the colorful stars of the vegetable aisle, offer a sweet and crunchy delight with their vibrant, crisp flesh. Dressed in a rainbow of red, green, and yellow, they are the epitome of a versatile, vitamin-rich addition to your meals. Whether you enjoy them as a crunchy, low-calorie snack, add them to your stir-fries for a burst of color and flavor, or stuff them with savory fillings for a gourmet treat, bell peppers bring a burst of vitamins, antioxidants, and a sweet tang to your plate. Their versatility knows no bounds, making them a culinary essential for both sweet and savory dishes. Embrace the timeless charm of bell peppers, savoring their colorful essence, and let their revitalizing vibrancy enliven your culinary creations.'),
(20003, 'Onion - 1 lb', 'img/product/vegetables/onion.jpg', 1.49, 2000, 'Onions, the aromatic workhorses of the kitchen, offer a pungent and savory delight with their layers of flavor. Whether they\'re red, yellow, or white, these humble vegetables add depth and complexity to a wide range of culinary creations. Whether you caramelize them for a sweet and savory topping, use them as a flavorful base for soups and stews, or slice them into zesty salads, onions bring a burst of flavor and antioxidants to your dishes. Their versatility in enhancing savory recipes is unmatched, making them a must-have in any kitchen. Embrace the timeless appeal of onions, savoring their aromatic essence, and let their revitalizing pungency elevate your culinary endeavors.'),
(20004, 'Broccoli - 1 lb', 'img/product/vegetables/broccoli.jpg', 3.99, 2000, 'Broccoli, the nutrient-packed green superfood, is a hearty and wholesome delight with its earthy, tender-crisp florets. These mini-trees of goodness are rich in vitamins and minerals, offering a nutritious and satisfying addition to your diet. Whether you steam them as a healthy side dish, toss them into a stir-fry for added crunch and color, or roast them with a drizzle of olive oil for a crispy treat, broccoli brings a burst of vitamins, antioxidants, and dietary fiber to your plate. Their versatility shines in both side dishes and main courses, making them a staple in health-conscious kitchens. Embrace the timeless allure of broccoli, savoring its green essence, and let its revitalizing nutrition enhance your daily meals.'),
(20005, 'Tomatos - 1 lb', 'img/product/vegetables/tomatos.jpg', 3.29, 2000, 'Tomatoes, the juicy stars of the garden, offer a sweet and tangy delight with their plump and vibrant fruit. Whether they\'re red, yellow, or heirloom, they are the epitome of a versatile, vitamin-rich addition to your meals. Whether you slice them for a classic caprese salad, blend them into a zesty pasta sauce, or enjoy them in a fresh salsa, tomatoes bring a burst of vitamins, antioxidants, and a burst of natural sweetness to your plate. Their versatility knows no bounds, making them a culinary essential for both savory and sweet dishes. Embrace the timeless charm of tomatoes, savoring their juicy essence, and let their revitalizing versatility enliven your culinary creations.'),
(20006, 'Romaine Lettuce - 1 lb', 'img/product/vegetables/romaine_lettuce.jpg', 3.99, 2000, 'Romaine lettuce, the crisp and leafy greens from the garden, deliver a refreshing and wholesome delight with their tender crunch and mild flavor. Whether used for building a classic Caesar salad, wrapping up delicious lettuce wraps, or adding a crisp layer to your sandwiches, romaine lettuce brings a burst of hydration, vitamins, and dietary fiber to your plate. Their versatility and fresh flavor make them a go-to choice for various salads and wraps. Embrace the timeless appeal of romaine lettuce, savoring its refreshing essence, and let its revitalizing crispness invigorate your meals.'),
(20007, 'Cauliflower - 1 lb', 'img/product/vegetables/cauliflower.jpg', 4.99, 2000, 'Cauliflower, the versatile cruciferous wonder, offers a mild and creamy delight with its soft florets. Whether you\'re roasting them for a crispy side dish, mashing them as a low-carb alternative to mashed potatoes, or transforming them into a creamy cauliflower soup, this humble vegetable brings a burst of vitamins, antioxidants, and dietary fiber to your plate. Its versatility in enhancing both savory and comfort dishes is unmatched, making it a culinary essential for health-conscious kitchens. Embrace the timeless charm of cauliflower, savoring its neutral essence, and let its revitalizing nutrition elevate your daily meals.'),
(20008, 'Carrots - 1 lb', 'img/product/vegetables/carrots.jpg', 3.19, 2000, 'Carrots, the vibrant orange jewels of the garden, offer a sweet and crunchy delight with their earthy, nutritious goodness. Dressed in their vibrant orange skin, they are a burst of natural sweetness that can be enjoyed in a variety of ways. Whether you snack on them raw, add them to your salads for a splash of color and crunch, or use them as a key ingredient in comforting soups and stews, carrots bring a burst of vitamins, antioxidants, and dietary fiber to your plate. Their versatility in both savory and sweet dishes makes them a staple ingredient for any kitchen. Embrace the timeless appeal of carrots, savoring their vibrant essence, and let their revitalizing sweetness brighten your culinary creations.'),
(30001, 'Butter - 8 oz', 'img/product/dairy/butter.jpg', 5.99, 2000, 'Butter, the golden elixir of the culinary world, unfolds a rich and velvety delight with its creamy texture and nuanced flavor. Whether generously slathered on warm toast, intricately folded into layers of flaky pastry, or expertly melted over a sizzling skillet for that perfect sear, butter is the unsung hero that transforms ordinary dishes into extraordinary culinary experiences. Its versatility in both sweet and savory applications makes it a fundamental ingredient in kitchens around the globe. From enhancing the tenderness of baked goods to imparting a sumptuous depth to sauces, butter is a culinary companion that elevates the art of cooking. Embrace the indulgent allure of butter, savoring its luscious essence, and let its rich and velvety goodness elevate your culinary creations to a realm of pure gastronomic pleasure.'),
(40001, 'Tuna Fillet - 1 lb', 'img/product/seafood/tuna_fillet.jpg', 28.99, 2000, 'Tuna fillet, a culinary canvas of lean and flavorful protein, offers a versatile delight with its firm texture and ocean-fresh taste. Whether seared to perfection for a gourmet meal, grilled for a healthy barbecue option, or flaked into salads and pasta dishes, tuna fillet brings a burst of omega-3 goodness and savory satisfaction to your plate. Its adaptability in both quick weeknight dinners and sophisticated dishes makes it a kitchen essential for seafood enthusiasts. Embrace the delectable simplicity of tuna fillet, savoring its oceanic essence, and let its nutritious profile enhance your culinary repertoire.'),
(40002, 'Salmon Fillet - 1 lb', 'img/product/seafood/salmon_fillet.jpg', 29.99, 2000, 'Salmon fillet, a culinary jewel from the sea, presents a succulent and rich delight with its buttery texture and bold flavor. Whether grilled to perfection, baked with aromatic herbs, or pan-seared for a crispy skin, salmon fillet offers a gourmet experience that tantalizes the taste buds. Packed with omega-3 fatty acids and a bounty of nutrients, it\'s a nutritional powerhouse that adds elegance to any dining occasion. Its versatility in pairing with various cuisines and cooking methods makes it a prized ingredient in the world of seafood. Embrace the exquisite taste of salmon fillet, savoring its ocean-fresh essence, and let its gourmet flair elevate your culinary endeavors.'),
(50001, 'Banana Cake - 1 lb', 'img/product/bakery/banana_cake.jpg', 6.49, 2000, 'Banana cake, a delectable symphony of moistness and sweetness, beckons with the irresistible aroma of ripe bananas and a tender crumb. Each slice is a delightful indulgence, capturing the essence of freshly baked goodness. Whether enjoyed as a comforting treat with a cup of coffee or as a show-stopping dessert at special occasions, banana cake delivers a heavenly combination of ripe bananas, warm spices, and a moist texture. Its versatility in satisfying sweet cravings makes it a timeless classic in the world of baked delights. Embrace the allure of banana cake, savoring its rich essence, and let its comforting sweetness elevate your moments of indulgence.'),
(50002, 'Butter Croissants - 4 ct', 'img/product/bakery/butter_croissants.jpg', 6.59, 2000, 'Butter croissants, the epitome of French pastry perfection, present a golden and flaky delight with each buttery layer. From the moment you bite into the crisp exterior to the soft, melt-in-your-mouth interior, these crescent-shaped wonders are a testament to culinary craftsmanship. Whether enjoyed with a morning coffee, as the base for a decadent sandwich, or savored on their own, butter croissants provide a heavenly experience. The delicate balance of richness and lightness in every bite makes them a beloved treat in bakeries worldwide. Embrace the timeless elegance of butter croissants, savoring their buttery essence, and let their indulgent layers transport you to a French patisserie.'),
(60001, 'Orange Juice - 64 oz.', 'img/product/beverage/orange_juice.jpg', 6.99, 2000, 'Orange juice, the liquid sunshine of the breakfast table, presents a vibrant and refreshing delight with its sweet and tangy notes. From the first sip, you\'re greeted with the invigorating taste of freshly squeezed oranges, capturing the essence of citrus perfection. Whether enjoyed as a revitalizing morning beverage, a base for fruity cocktails, or a hydrating pick-me-up throughout the day, orange juice offers a burst of vitamin C and natural goodness. Its versatility in both sweet and savory recipes makes it a kitchen essential for those seeking a taste of pure citrus bliss. Embrace the zesty allure of orange juice, savoring its sunny essence, and let its refreshing sweetness brighten your daily routines.'),
(60002, 'Instant Coffee', 'img/product/beverage/instant_coffee.jpg', 8.99, 2000, 'Instant coffee, the convenient elixir of caffeine enthusiasts, unveils a quick and satisfying delight with every spoonful. Whether you\'re fueling up for a busy day or seeking a comforting moment of reprieve, instant coffee offers a robust and aromatic experience in an instant. Simply add hot water, and you\'re treated to a steaming cup of rich flavor and invigorating aroma. Its versatility in crafting various coffee beverages, from classic black coffee to frothy cappuccinos, makes it a go-to choice for coffee aficionados on the move. Embrace the practical allure of instant coffee, savoring its bold essence, and let its caffeinated embrace kickstart your moments of bliss.'),
(70001, 'Potato Chips', 'img/product/snacks/potato_chips.jpg', 2.99, 2000, 'Potato chips, the crispy and addictive snack-time companions, unveil a savory and satisfying delight with each perfectly seasoned bite. Whether enjoyed during movie nights, picnics, or as a sidekick to your lunch, potato chips offer a symphony of crunch and flavor. The thin slices of potatoes, expertly fried to golden perfection and lightly salted or seasoned, provide a textural and flavorful experience that\'s hard to resist. Their timeless appeal as a go-to snack for any occasion makes them a beloved classic in the world of savory treats. Embrace the simple pleasure of potato chips, savoring their crispy essence, and let their comforting crunch elevate your moments of snack-time bliss.');

-- --------------------------------------------------------

--
-- Table structure for table `ProductCategory`
--

CREATE TABLE `ProductCategory` (
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ProductCategory`
--

INSERT INTO `ProductCategory` (`pid`, `cid`) VALUES
(10001, 1001),
(10001, 2002),
(10002, 1001),
(10003, 1001),
(10003, 2001),
(10004, 1001),
(10005, 1001),
(10006, 1001),
(10006, 2002),
(10007, 1001),
(10008, 1001),
(20001, 1002),
(20002, 1002),
(20003, 1002),
(20003, 2001),
(20004, 1002),
(20004, 2002),
(20005, 1002),
(20005, 2001),
(20006, 1002),
(20007, 1002),
(20008, 1002),
(30001, 1003),
(30001, 2003),
(40001, 1004),
(40002, 1004),
(40002, 2003),
(50001, 1005),
(50002, 1005),
(60001, 1006),
(60001, 2003),
(60002, 1006),
(70001, 1007);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`) VALUES
(4, 'jiadong', '$2y$10$4pLaln9poNotdtebf3bw1ObR8CnyalNVcdFeopQQTuNXEbZZuzRlW', 'jiadong', 'chen', 'jiadong.chen1@student.kpu.ca', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `OrderEntry`
--
ALTER TABLE `OrderEntry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oid` (`oid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ProductCategory`
--
ALTER TABLE `ProductCategory`
  ADD PRIMARY KEY (`pid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Order`
--
ALTER TABLE `Order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `OrderEntry`
--
ALTER TABLE `OrderEntry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `Order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `User` (`id`);

--
-- Constraints for table `OrderEntry`
--
ALTER TABLE `OrderEntry`
  ADD CONSTRAINT `OrderEntry_ibfk_1` FOREIGN KEY (`oid`) REFERENCES `Order` (`id`),
  ADD CONSTRAINT `OrderEntry_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `Product` (`id`);

--
-- Constraints for table `ProductCategory`
--
ALTER TABLE `ProductCategory`
  ADD CONSTRAINT `ProductCategory_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `Product` (`id`),
  ADD CONSTRAINT `ProductCategory_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `Category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
