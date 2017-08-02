-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 06:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `password`, `avatar`, `join_date`) VALUES
(1, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'avatar/shahed.png', '2017-06-06 22:02:22'),
(2, 'Shahin', 'Kabir', 'kabir@gmail.com', 'c8dfece5cc68249206e4690fc4737a8d', 'avatar/mehedi.png', '2017-06-06 22:03:31'),
(3, 'Anowar', 'Hoshen', 'anowar@gmail.com', '3456', 'avatar/anowar.png', '2017-06-06 22:04:15'),
(4, 'Iqbal', 'Hoshen', 'iqbal@gmail.com', '4567', 'avatar/iqbal.png', '2017-06-06 22:05:05'),
(5, 'Milon', 'Mahmud', 'mahmud@gmail.com', '65355ffd13a9960d7b41fad036e5e2e2', 'avatar/rahman.png', '2017-06-06 22:05:48'),
(6, 'Nazmul', 'Hasan', 'nazmul@gmail.com', '6789', 'avatar/nazmul.png', '2017-06-06 22:06:45'),
(17, 'Morshed', 'Mazhar', 'mazhar@gmail.com', 'f8a65e9c6e6395ad93a0a083c497e427', '', '2017-06-08 20:30:45'),
(18, 'Niaj', 'Morshed', 'niajmorshed@gmail.com', '7776e88b0c189539098176589250bcba', '', '2017-06-08 20:33:44'),
(20, 'Niaj', 'Morshed', 'niajmorshed@gmail.com', 'a97ef13de4161e32718c92e6117173ce', '', '2017-06-08 22:56:58'),
(21, 'Abdur', 'Rahman', 'rahman@yahoo.com', 'd79aac075930c83c2f1e369a511148fe', '', '2017-06-09 04:06:15'),
(22, 'Nazmul', 'Hasan', 'nazmul@gmail.com', 'ceebc1c9fda3d8efb2166a48e8a3d0b3', '', '2017-06-09 08:59:25'),
(23, 'Nazmul', 'Hasan', 'nazmul@gmail.com', '98ac35a97ee12c0adde6520b4e97dd9b', '', '2017-06-09 09:03:14'),
(24, 'Iqbal', 'Hoshen', 'iqbal@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', '', '2017-06-09 09:10:13'),
(25, 'Anowar', 'Hoshen', 'anowar@gmail.com', 'def7924e3199be5e18060bb3e1d547a7', '', '2017-06-09 09:11:52'),
(26, 'Mizanur', 'Rahman', 'mizan@yahoo.com', '81b073de9370ea873f548e31b8adc081', '', '2017-06-09 19:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `customer_id`, `address`, `address2`, `city`, `state`, `zipcode`) VALUES
(3, 3, 'anowar shop,nimtala terminal,ctg', '8 no ward, kabirhat pourashava, noakhali', 'noakhali', 'bangladesh', '1238'),
(4, 4, 'hazi bari,7 no ward, kabirhat pourashava,noakhali', 'iqbal shop,ctg-epz,ctg', 'ctg', 'bangladesh', '1300'),
(5, 5, '127/A, Kurmitola,Dhaka', '534/4, Jigatola,Dhaka', 'Dhaka', 'Bangladesh', '1207'),
(6, 6, 'chairman bari, 7 no ward,kabirhat pourashava,noakhali', 'azimpur bus stand, dhaka', 'dhaka', 'bangladesh', '1200'),
(7, 17, '123-A,park street,CA, USA', '143-A,park street,CA, USA', 'Los Angels', 'Californaia', '400-23'),
(8, 18, '545, Lake-view,Thailand', '645,Sira street,Thailand', 'owkawa', 'Thailad', '6546-24'),
(10, 20, '545, Lake-view,Thailand', '645,Sira street,Thailand', 'owkawa', 'Thailad', '6546-444'),
(11, 21, '4234,Dhaka,bangladehs, 534,ctg,bangladesh', '534,ctg,bangladesh', 'Dhaka', 'Bangladesh', '1203'),
(12, 22, 'Chairman bari, 7 no ward,kabirhat pourashava,noakhali', 'Azimpur bus stand, dhaka', 'Dhaka', 'Bangladesh', '1200'),
(13, 23, 'Chairman bari, 7 no ward,kabirhat pourashava,Noakhali', 'Azimpur bus stand, dhaka', 'Dhaka', 'Bangladesh', '1200'),
(14, 24, 'Hazi bari, 7 no ward, kabirhat pourashava,noakhali', 'iqbal shop,ctg-epz,ctg', 'Chittagong', 'Bangladesh', '1300'),
(15, 25, 'Anowar shop,nimtala terminal,ctg', '8 no ward, kabirhat pourashava, noakhali', 'Noakhali', 'Bangladesh', '1238'),
(16, 26, '4234,Dhaka,bangladehs', '534,ctg,bangladesh', 'Dhaka', 'Bangladesh', '1203');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer` int(11) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer`, `product`) VALUES
(1, 1, 2),
(2, 2, 5),
(3, 1, 8),
(4, 6, 3),
(5, 4, 7),
(6, 1, 7),
(7, 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `categories` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `categories`, `image`, `c_date`) VALUES
(1, 'Limu Scart', 'Latest Collection of Limu scart.', '$12', 1, 'images/limu.jpg', '2017-06-07 07:12:25'),
(2, 'Air Cooler', 'Top branded International air cooler', '$30', 4, 'images/cooler.jpg', '2017-06-07 07:14:36'),
(3, 'Real Madrid Jerseys', 'Latest designed Real Madrid jerseys.', '$15', 6, 'images/jersey.jpg', '2017-06-07 07:16:17'),
(4, 'Home Decor Light Shade ', 'Many colors home decor light shade', '$8', 8, 'images/light.jpg', '2017-06-07 07:18:13'),
(5, 'G-Shocks & S-Shocks', 'Latest collection of G-Shock & S-Shockswrist watch ', '$15', 10, 'images/watch.jpg', '2017-06-07 07:21:50'),
(6, 'Candles', 'Nice colored glass candles are available.', '$5', 12, 'images/candle.jpg', '2017-06-07 07:23:41'),
(7, 'Razor ', 'Latest qualities razor set collection', '$7', 14, 'images/razor.jpg', '2017-06-07 07:25:09'),
(8, 'Kitchen Sink', 'Full steet body, durable Kitchen Sink collection', '$9', 16, 'images/sink.jpg', '2017-06-07 07:27:05'),
(12, 'Air pump', 'Awesome air pump', '$25', 20, '', '2017-06-11 14:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name2` varchar(50) DEFAULT NULL,
  `descr` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name2`, `descr`, `image`) VALUES
(1, 'Fashion', 'The latest fashion and accessories', 'images/fashion.jpg'),
(4, 'Auto', 'Auto parts and home goods', 'images/auto.jpg'),
(6, 'Sporting Goods', 'Jerseys, equipment and more', 'images/sport.jpg'),
(8, 'Home and Garden', 'Products for your home', 'images/home.jpg'),
(10, 'Gift', 'Products for gifting friends', 'images/gift.jpg'),
(12, 'Love Couple', 'New couple celebrating products', 'images/couple.jpg'),
(14, 'Mens Club', 'New products for men', 'images/men.jpg'),
(16, 'Kitchen Equipment', 'Latest kitchen equipment collection', 'images/kitchen.jpg'),
(17, '93e002c712ad248bb0ade31909cef876', 'Amazing collection', ''),
(18, '93e002c712ad248bb0ade31909cef876', 'Amazing collection', ''),
(19, 'House hold', 'House hold collection', ''),
(20, 'House hold', 'House hold collection', '');

-- --------------------------------------------------------

--
-- Table structure for table `riviews`
--

CREATE TABLE `riviews` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `rating` int(2) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riviews`
--

INSERT INTO `riviews` (`id`, `title`, `body`, `rating`, `customer_id`, `product_id`, `review_date`) VALUES
(1, 'Kitchen sink', 'This is good product I\'ve ever used.', 3, 1, 8, '2017-06-07 18:37:13'),
(2, 'Air cooler awesome', 'This air cooler is awesome in use', 4, 2, 2, '2017-06-07 18:38:22'),
(3, 'Limu Scrart coloring nice', 'Color of the Limu Scart amazingly superb.', 5, 3, 1, '2017-06-07 18:40:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer` (`customer`),
  ADD KEY `product` (`product`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories` (`categories`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riviews`
--
ALTER TABLE `riviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `riviews`
--
ALTER TABLE `riviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product`) REFERENCES `product` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categories`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `riviews`
--
ALTER TABLE `riviews`
  ADD CONSTRAINT `riviews_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `riviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
