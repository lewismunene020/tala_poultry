-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 10:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` text NOT NULL,
  `admin_job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_pass`, `admin_email`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'admin', 'password', 'admin@test.com', 'web-gdeefcd52f_1920.png', 'Kenya', 'System Admin', 'admin@test.com', 'System Admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(10, 'Ruched Dresses', 'Bring the heat this season with our latest collection of ruched dresses. We’ve got white ruched dresses perfect for day drinks, and long sleeve ruched dresses to take you from day to night.'),
(11, 'Satin Dresses', 'Hot date in your diary but nothing to wear? Enter our edit of smokin’ satin dresses to keep you winning all day and all night long.'),
(12, 'Corset Tops', 'Show off that fierce figure doll in our hot new edit of corset tops.'),
(13, 'Satin Tops', 'Slinky style is what we’re going for this season with silky camisole & crop tops to take your casualwear to the next level.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_ip`, `customer_image`) VALUES
(3, 'Test Name', 'test@test.com', 'password', 'KE', 'Nairobi', '12345678', 'Westlands', '127.0.0.1', 'sunset-g049418715_640.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer` int(11) NOT NULL DEFAULT 0,
  `date` text NOT NULL,
  `product_title` text NOT NULL,
  `product_url` varchar(255) DEFAULT NULL,
  `product_img1` varchar(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(2, 2, 13, 0, '2022-12-13 20:09:33', 'Plus Floral Print Satin Wrap Top', 'product-2', 'female-dusky pink-plus-floral-print-satin-wrap-top.jpeg', 'female-dusky pink-plus-floral-print-satin-wrap-top2.jpeg', 'female-dusky pink-plus-floral-print-satin-wrap-top3.jpeg', 2400, 'female dusky, pink plus, floral print, satin wrap top', '<ul>\r\n<li>Style: Wrap Top</li>\r\n<li>Design: Floral</li>\r\n<li>Fabric: Woven</li>\r\n<li>Sleeve Length: Long Sleeve</li>\r\n</ul>\r\n<p class=\"b-product_details-composition\">100% Polyester. Machine Wash. Model wears a size 16.</p>'),
(4, 1, 10, 0, '2022-12-14 11:46:55', ' Plus Dark Floral Ruched Dress', NULL, 'female-black-plus-dark-floral-ruched-dress.jpeg', 'female-black-plus-dark-floral-ruched-dress2.jpeg', 'female-black-plus-dark-floral-ruched-dress3.jpeg', 3000, 'ruched dress', '<ul>\r\n<li>Style: Midi Dress</li>\r\n<li>Design: Floral</li>\r\n<li>Fabric: Woven</li>\r\n<li>Length: Midi</li>\r\n</ul>\r\n<p class=\"b-product_details-composition\">100% Polyester. Machine Wash. Model wears a UK size 16.</p>'),
(6, 1, 11, 0, '2022-12-14 17:21:07', ' Floral Print High Neck Ruched Midi Dress', NULL, 'female-black-floral-print-high-neck-ruched-midi-dress.jpeg', 'female-black-floral-print-high-neck-ruched-midi-dress2.jpeg', 'female-black-floral-print-high-neck-ruched-midi-dress3.jpeg', 3700, 'floral high neck', '<ul>\r\n<li>Style: Bodycon Dress</li>\r\n<li>Design: Floral</li>\r\n<li>Fabric: Satin</li>\r\n<li>Length: Midi</li>\r\n<li>Neckline: High Neck</li>\r\n<li>Sleeve Length: Long Sleeve</li>\r\n</ul>\r\n<p class=\"b-product_details-composition\">100% polyester. Machine wash. Model wears UK size 10</p>'),
(7, 2, 12, 0, '2022-12-14 17:36:02', ' Denim Lace Up Corset Top', NULL, 'female-mid blue-denim-lace-up-corset-top.jpeg', 'female-mid blue-denim-lace-up-corset-top2.jpeg', 'female-mid blue-denim-lace-up-corset-top3.jpeg', 1500, 'denim corset', '<ul>\r\n<li>Style: Corset</li>\r\n<li>Fabric: Denim</li>\r\n<li>Length: Cropped</li>\r\n<li>Sleeve Length: strappy</li>\r\n</ul>\r\n<p class=\"b-product_details-composition\">100% Cotton. Machine Washable. Model Wears UK Size 10.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Dresses', 'Dress to impress this season with our latest collection of dresses. From cute dresses in new-season prints to must-have designs in mini, midi and maxi styles, eCom has a ladies dress for every occasion.'),
(2, 'Tops', 'Ecom’s women’s tops collection has the everyday essentials you need to always stay on top of your style game. After something dressy? Choose bodysuits, blouses and off the shoulder tops to team with statement trousers, while T-shirts, camisoles and vest tops are for all you casual babes.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(11) NOT NULL,
  `slide_name` text NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Dresses', 'business-g2531768ea_1920.jpg'),
(2, 'tops', 'mannequin-g7708be3dd_1920.jpg'),
(3, 'tshirts', 't-shirt-g9af8b4c0a_1920.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
