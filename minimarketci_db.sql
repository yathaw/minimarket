-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2019 at 09:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarketci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(225) NOT NULL,
  `categories_photo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_photo`) VALUES
(1, 'Fruit', 'image/category/fruit.png'),
(2, 'Drink', 'image/category/drink.png'),
(3, 'Stationery', 'image/category/stationery.png'),
(4, 'Furniture', 'image/category/furniture.png'),
(6, 'Beauty', 'image/category/cosmetics.png'),
(7, 'Snack', 'image/category/snack.png'),
(8, 'Rice', 'image/category/rice.png'),
(9, 'Oil', 'image/category/olive-oil.png'),
(10, 'Milk', 'image/category/milk.png'),
(11, 'Noodles', 'image/category/noodles.png'),
(12, 'Meat', 'image/category/meat.png'),
(14, 'testings', 'image/category/1000000282405_1_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `items_id` int(11) NOT NULL,
  `items_name` varchar(225) NOT NULL,
  `items_price` varchar(225) NOT NULL,
  `items_description` text NOT NULL,
  `items_photo` text NOT NULL,
  `items_categoriesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `items_name`, `items_price`, `items_description`, `items_photo`, `items_categoriesid`) VALUES
(1, 'Saji Vegetable Oil', '4100', '\r\nNUTRITIONAL \r\nServing per Bottle : 142 (2KG)\r\nServing Size : 15ml\r\nEnergy 122kcal', 'image/item/1000000000213.jpg', 9),
(2, 'Cp Pork Sausage', '2100', 'CP Pork Sausage 250kg', 'image/item/1000000014420_1_1.jpg', 12),
(3, 'Beautiful Myanmar Paw San Hmwe', '16500', '    Beautiful Myanmar Paw San Hmwe Rice 12Kg\r\n-Premium quality paw san hmwe rice\r\n-Unique fragrant rice that triples its length after cooking\r\n-Quality product of Shwe Myanmar\r\n-Net weight : 12 kg     ', 'image/item/1000000000063_3.png', 8),
(4, 'Nursery Sticky Rice White', '3750', '\r\nNursery Sticky Rice\r\n- Net weight : 2KG\r\n- Quality product of  Myanmar', 'image/item/1000000000101_5.png', 8),
(5, 'Nursery Sticky Rice Black', '5400', 'Nursery Sticky Rice( Black )\r\n- Net weight : 2KG\r\n- Quality product of  Myanmar', 'image/item/1000000000102_5.png', 8),
(6, 'Garnier Men Acno Fight Anti-acne Whitening SerumCream', '1950', 'Fights pimples and skin dullness in a ultra light and quick absorbing mattifying serum.\r\nAcnofight serum gives you clearer and whiter skin with 12 powerful benefits', 'image/item/1000000216168_1_1.jpg', 6),
(7, 'Kelly`s Premium Apple Baked Ham', '7000', 'Kelly`sPremiumAppleBakedHam200g', 'image/item/1000000029125_1_1.jpg', 12),
(8, 'City Selection Purified Drinking Water', '150', '600ml', 'image/item/1000000304031_1_1.jpg', 2),
(9, 'City Selection Purified Drinking Water ( 12x600ml )', '1650', 'CitySelectionPurifiedDrinkingWater12x600ml', 'image/item/1000000304031_2_1.jpg', 2),
(10, 'Dutch Mill Pasteurized Milk ', '3600', '1.8Ltr(Plain)', 'image/item/1000000214630_1_1_2.jpg', 10),
(11, 'Marigold Uht Milk Chocolate', '2150', 'Chocolate flavoured milk\r\nRich in calcium, vitamins and protein\r\nUltra heat treated ( UHT ) to ensure freshness\r\nHalal\r\nNet weight : 1 litre\r\nPacked in Malaysia \r\n\r\nNutrition Facts\r\nServing size\r\n100ml\r\nAmount per serving\r\nCalories\r\n63kcal\r\nFat\r\n1.4g\r\nProtein\r\n2.8g\r\nCarbohydrate\r\n9.8g\r\nSugar\r\n9.4g\r\nFiber\r\n0.4g\r\nVitamin D3\r\n2.5mcg\r\nVitamin A\r\n150mcg\r\nCalcium\r\n130mg', 'image/item/1000000001588_2.png', 10),
(12, 'Dole Fuji Apple', '1600', 'DoleFujiApple(250-350g)', 'image/item/1000000034672_1_1.jpg', 1),
(13, 'Cow head Uht Milk Full Cream', '2400', 'Cowhead UHT Milk Full Cream 1L\r\n- Pure full cream milk from natural fresh milk\r\n- UHT processed to maintain long life and retain qualities and flavour of milk\r\n- Halal\r\n- Product of Australia\r\n- Net weight : 1 Litre\r\n\r\nNutrition Information\r\nServing Size :       250ml \r\nEnergy                   161Cal\r\nFat                             8.5g\r\nCholesterol           27.5mg\r\nCarbohydrate        12.8g   \r\nSugars                      12.8g\r\nProtein                       8.3g\r\nSodium                   125mg\r\nCalcium                 300mg', 'image/item/1000000006061.png', 10),
(14, 'Vietnam Dragon Fruit', '4400', 'VietnamDragonFruit(Approx.1kg)', 'image/item/1000000131298_1_1_1.jpg', 1),
(15, 'Samyang Carbo Hot Chicken Flavor Ramen', '1800', 'SamyangCarboHotChickenFlavorRamen130g', 'image/item/1000000284756_1_1.jpg', 11),
(16, 'Samyang 2xspicy Hot Chicken Flavor Ramen Bowl', '2150', 'Samyang2xspicyHotChickenFlavorRamenBowl105g', 'image/item/1000000283712_1_1.jpg', 11),
(17, 'PencilCaseDf-5545 (Pro)', '2500', 'PencilCaseDf-5545(Pro)(Pink/blue/purple)', 'image/item/1000000282405_1_1.jpg', 3),
(18, 'City Value Biscuits Chicken Flavour', '2400', 'CityValueBiscuitsChickenFlavour450g', 'image/item/1000000299968_1_1.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderdetails_id` int(11) NOT NULL,
  `orderdetails_userid` int(11) NOT NULL,
  `orderdetails_itemid` int(11) NOT NULL,
  `orderdetails_qty` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_date` varchar(225) NOT NULL,
  `orders_total` varchar(225) NOT NULL,
  `orders_ordersdetailid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stocks_id` int(11) NOT NULL,
  `stocks_date` date NOT NULL,
  `stocks_amount` varchar(225) NOT NULL,
  `stocks_itemsid` int(11) NOT NULL,
  `stocks_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `types_id` int(11) NOT NULL,
  `types_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(225) NOT NULL,
  `users_phoneno` varchar(225) NOT NULL,
  `users_address` text NOT NULL,
  `users_email` varchar(225) NOT NULL,
  `users_password` text NOT NULL,
  `users_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stocks_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stocks_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
