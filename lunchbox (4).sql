-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 05:40 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunchbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(2, 1, '::1', 1, 1),
(4, 8, '::1', 1, 2),
(7, 37, '::1', 2, 1),
(8, 27, '::1', 2, 3),
(10, 33, '::1', 2, 4),
(16, 27, '::1', 3, 1),
(18, 25, '::1', 3, 2),
(23, 49, '::1', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_icon` text NOT NULL,
  `cat_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_icon`, `cat_detail`) VALUES
(1, 'Rice', 'rice.png', 'category'),
(2, 'Soup', 'soup.png', 'category'),
(3, 'Noodle', 'noodle.png', 'category'),
(4, 'Snacks', 'snack.png', 'category'),
(5, 'Vegetarian', 'salad.png', 'category'),
(6, 'Cold Drinks', 'coldDrink.png', 'category'),
(7, 'Hot Drinks', 'hotDrink.png', 'category'),
(8, 'Dessert', 'dessert.png', 'category'),
(9, 'Meal for 2', 'mealFor2.png', 'combo'),
(10, 'Meal for 4', 'mealFor4.png', 'combo'),
(11, 'Meal for 6', 'mealFor6.png', 'combo');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`user_id`, `firstname`, `lastname`, `phonenumber`, `city`, `address`) VALUES
(1, 'grady', 'alexander', '8212121', 'bali', 'bali'),
(2, 'a', 'b', 'c', 'd', 'e'),
(3, 'a', 'a', '123', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryonline`
--

CREATE TABLE `deliveryonline` (
  `user_id` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `address` int(11) NOT NULL,
  `cardname` int(11) NOT NULL,
  `cardnumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `comment`, `feedback`) VALUES
(NULL, 'the food is good', 'Statisfied');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 2, 7, 1, '07M47684BS5725041', 'Completed'),
(2, 2, 2, 1, '07M47684BS5725041', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_image`, `product_keywords`) VALUES
(1, 1, 'Fried Rice', 20000, 'FriedRice.jpg', 'Fried Rice'),
(2, 1, 'Nasi Uduk', 30000, 'NasiUduk.jpg', 'nasi Uduk'),
(3, 1, 'Nasi Kuning', 35000, 'YellowRice.jpg', 'nasi kuning yellow rice'),
(4, 1, 'Steam Rice', 25000, 'SteamRice.jpg', 'Steam Rice'),
(5, 1, 'Gudeg', 35000, 'Gudeg.jpg', 'Gudeg'),
(6, 1, 'Ballinese mix rice', 35000, 'BalineseMixRIce.JPG', 'Ballinese Mix Rice'),
(7, 2, 'Soto Betawi', 12000, 'SotoBetawi.jpg', 'Soto Betawi'),
(8, 2, 'Rawon', 25000, 'Rawon.jpg', 'Rawon'),
(9, 2, 'Soto Mee', 25000, 'SotoMee.jpg', 'Soto Mee'),
(10, 2, 'Oxtail Soup', 35000, 'OxtailSoup.jpg', 'Oxtail Soup'),
(11, 2, 'Bakso', 30000, 'Bakso.jpg', 'Bakso'),
(12, 2, 'Tongseng', 35000, 'Tongseng.jpg', 'Tongseng'),
(13, 3, 'Fried Noodle', 25000, 'FriedNoodle.jpg', 'Fried Noodle'),
(14, 3, 'Mushroom Noodle', 35000, 'ChickenMushroomNoodle.png', 'Mushroom Noodle'),
(15, 3, 'Fishball Noodle', 25000, 'FishballNoodle.jpg', 'Fish Ball Noodle'),
(16, 3, 'Meatball Noodle', 40000, 'MeatBallNoodle.jpg', 'Meatball Noodle'),
(17, 3, 'Chicken Noodle', 30000, 'ChickenNoodle.JPG', 'Chicken Noodle'),
(18, 3, 'Javanese Noodle', 18000, 'JavaneseNoodle.JPG', 'Javanese Noodle'),
(19, 6, 'Cendol', 8000, 'cendol.jpg', 'Cendol'),
(20, 6, 'Cincau', 6000, 'cincau.jpg', 'Cincau'),
(21, 6, 'Coconut', 15000, 'coconut.jpg', 'Coconut'),
(22, 6, 'Es Doger', 12000, 'esDoger.jpg', 'Es Doger'),
(23, 6, 'Es Teler', 12000, 'esTeler.jpg', 'es Teler'),
(24, 6, 'Es Buah', 20000, 'esBuah.jpg', 'Es Buah'),
(25, 7, 'Bajigur', 6000, 'bajigur.jpg', 'Bajigur'),
(26, 7, 'Bandrek', 7000, 'bandrek.png', 'Bandrek'),
(27, 7, 'Bir Pletok', 12000, 'birPletok.jpg', 'Bir Pletok'),
(28, 7, 'Kopi Tubruk', 15000, 'kopiTubruk.jpg', 'Kopi Tubruk'),
(29, 7, 'traditional Tea', 6000, 'traditionalTea.jpg', 'Traditional Tea'),
(30, 7, 'Wedang Jahe', 8000, 'wedangJahe.jpg', 'Wedang Jahe'),
(31, 4, 'Corn Fritters', 12000, 'cornFritters.jpeg', 'Corn Fritters'),
(32, 4, 'Banana Fritters', 18000, 'bananaFritters.jpg', 'Banana Fritters'),
(33, 4, 'Onde Onde', 10000, 'ondeOnde.jpg', 'Onde Onde'),
(34, 4, 'Fried Cassava', 15000, 'friedCassava.jpg', 'Fried Cassava'),
(35, 4, 'Klepon', 8000, 'klepon.jpg', 'Klepon'),
(36, 4, 'Serabi', 6000, 'serabi.jpg', 'Serabi'),
(37, 5, 'Gado Gado', 25000, 'gadoGado.jpg', 'Gado Gado'),
(38, 5, 'Arancini', 18000, 'arancini.jpg', 'Arancini'),
(39, 5, 'Vegetable Fried Rice', 30000, 'vegetableFriedRice.jpg', 'Vegetable Fried Rice'),
(40, 5, 'Vege Stuffed Tofu', 15000, 'tofu.jpg', 'Vege Stuffed Tofu'),
(41, 5, 'Lumpia', 15000, 'lumpia.jpg', 'Lumpia'),
(42, 5, 'Greek Salad', 20000, 'greekSalad.jpg', 'Greek Salad'),
(43, 8, 'Coconut Pancake Rolls', 10000, 'CoconutPancakesRolls.png', 'coconut pancake rolls dessert'),
(44, 8, 'Katayap', 6000, 'Katayap.jpg', 'Katayap dessert'),
(45, 8, 'Kolak Pisang', 12000, 'KolakPisang.jpeg', 'Kolak Pisang dessert'),
(46, 8, 'Rangi cake', 6000, 'RangiCake.jpg', 'rangi cake dessert'),
(47, 8, 'Spekoek', 8000, 'Spekoek.jpeg', 'spekoek dessert'),
(48, 8, 'Surabaya Layered Cake', 5000, 'SurabayaLayeredCake.jpeg', 'surabaya layered cake dessert'),
(49, 10, 'Combo 1 (4 person)', 75000, 'mealFor4_1.jpg', 'Combo 1 (4 person) meal for 4'),
(50, 10, 'Combo 2 (4 person)', 80000, 'mealFor4_2.jpg', 'Combo 2 (4 person) meal for 4'),
(51, 9, 'Combo 1 (2 persons)', 40000, 'mealFor2_1.jpg', 'Combo 1 (2 persons) meal for 2 fried rice'),
(52, 9, 'Combo 2 (2 persons)', 70000, 'mealFor2_2.jpg', 'Combo 2 (1 person) meal for 2 noodle'),
(53, 11, 'Combo 1 (6 Person)', 120000, 'mealFor6_1.jpg', 'Combo 1 (6 Person)'),
(54, 11, 'Combo 2 (6 Person)', 130000, 'mealFor6_2.jpg', 'Combo 2 (6 Person)');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(4) NOT NULL,
  `confirm_psw` varchar(4) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'normal_user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `password`, `confirm_psw`, `user_type`) VALUES
(1, 'Admin', 'Admin', '1234', '1234', 'special_user'),
(2, 'Ria', 'Luthra', '1111', '1111', 'normal_user'),
(3, 'Rima', 'bvcgfc', '2222', '2222', 'normal_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `deliveryonline`
--
ALTER TABLE `deliveryonline`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `deliveryonline`
--
ALTER TABLE `deliveryonline`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
