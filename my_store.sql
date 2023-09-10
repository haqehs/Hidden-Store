-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Adidas'),
(2, 'Zomato'),
(3, 'Swiggy'),
(4, 'Samsung'),
(5, 'Myntra'),
(6, 'Microsoft'),
(7, 'I-Phone'),
(8, 'Ford'),
(9, 'Biryani House');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(8, '::1', 3),
(17, '::1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Fruits'),
(2, 'Juices'),
(3, 'Vegetables'),
(4, 'Dairy'),
(5, 'Chips'),
(6, 'Almound'),
(7, 'ice cre'),
(8, 'Mc Doanls'),
(9, 'Laptop'),
(10, 'Non-Veg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_keyword`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`, `product_description`) VALUES
(4, 'Apple', 'Juicy apple , apple', 1, 2, 'apple.jpg', 'apple.jpg', 'apple.jpg', '230', '2023-08-21 09:47:06', 'true', 'Juicy apple at 5% discount.'),
(6, 'Pine Apple', 'pine', 1, 3, 'pineapple.jpg', 'pineapple.jpg', 'pineapple.jpg', '1298', '2023-08-21 09:58:07', 'true', 'Its a pine apple !!'),
(7, 'rasberry juice', 'juice , fruit', 2, 3, 'mangoBerry.jpg', 'mangoBerry.jpg', 'mangoBerry.jpg', '1212', '2023-08-24 08:18:50', 'true', 'its a rusberry juice'),
(8, 'orange', 'orange', 1, 2, 'orange.jpg', 'orange.jpg', 'orange.jpg', '1201', '2023-08-21 10:02:27', 'true', 'this is ornage 4% dis'),
(9, 'Luxary Whitehouse', 'House', 3, 6, 'Chemical Spaces designs unique themed pool suites at Hard Rock Las Vegas resort - Luxurylaunches.jpg', 'Chemical Spaces designs unique themed pool suites at Hard Rock Las Vegas resort - Luxurylaunches.jpg', 'Chemical Spaces designs unique themed pool suites at Hard Rock Las Vegas resort - Luxurylaunches.jpg', '$2837463', '2023-08-21 10:08:09', 'true', 'Luxary House unde $40990 with 20% discount.'),
(10, 'Rasberry', 'rasbeery', 2, 3, 'rasberry.jpg', 'rasberry.jpg', 'rasberry.jpg', '2001', '2023-08-21 10:27:25', 'true', 'This is Rasberry 20 % off'),
(11, 'bhindi', 'bhindi', 3, 2, 'graphes.jpg', 'Chemical Spaces designs unique themed pool suites at Hard Rock Las Vegas resort - Luxurylaunches.jpg', 'dragon.jpg', '12', '2023-08-21 10:37:08', 'true', 'ekdam sasta'),
(12, 'Kiwi', 'kiwi,fruit', 1, 3, 'kiwi.jpg', 'kiwi.jpg', 'kiwi.jpg', '20000', '2023-08-21 14:05:01', 'true', 'This is Kiwi 20% off'),
(13, 'Global Functionality Planner', 'G7vtfZxBwMJmLXb', 6, 5, 'dragon.jpg', 'dragon.jpg', 'dragon.jpg', '89', '2023-08-21 17:19:58', 'true', 'Illo eaque beatae consequuntur consectetur voluptatibus aspernatur alias totam quod.'),
(14, 'Principal Metrics Specialist', 'dDaVKrLGuQBEXJN', 7, 7, 'dairymilk.jpg', 'dairymilk.jpg', 'dairymilk.jpg', '2', '2023-08-22 16:37:18', 'true', 'Officiis illo adipisci adipisci quis eius ipsum odit odio.'),
(15, 'Chief Markets Planner', 'eEliGntELdNkg5u', 7, 4, 'dragon.jpg', 'graphes.jpg', 'dragon.jpg', '1', '2023-08-22 16:38:20', 'true', 'Quisquam consequuntur hic corporis sunt perferendis magni a consequuntur fugiat.'),
(16, 'Mango Shake', 'juice', 2, 2, 'mangoBerry.jpg', 'mangoBerry.jpg', 'mangoBerry.jpg', '20012', '2023-08-22 17:44:53', 'true', 'This is fresh mangi shake 1 cup at 34% discount'),
(17, 'Biryani', 'biryani , rice , plao', 8, 2, 'Love Chicken Biryani_ You Must Try These Indian Variants!.jpg', 'Karachi Style Deghi Chicken Biryani - Al Rehman Biryani - Craving Zone.jpg', 'heathy food _ asian food _ easy and quick recipe.jpg', '348', '2023-08-27 12:07:56', 'true', 'This is the most delecious biryani'),
(18, 'Chicken Tandori', 'chicken , crispy , tandori', 10, 9, 'Tandoori Chicken Recipe (Authentic, Easy & Best) - Cubes N Juliennes.jpg', 'Tandoori Chicken - Instant Pot.jpg', 'Crispy Chicken Fry.jpg', '254', '2023-08-27 18:29:00', 'true', 'Crispy , Tasty chicken tandori at 5% off from biryani house.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
