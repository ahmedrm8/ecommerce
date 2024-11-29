-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 01:05 AM
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
-- Database: `web_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `cart_pro_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_user_id`, `cart_pro_id`, `count`) VALUES
(35, 7, 43, 3),
(37, 7, 45, 1),
(38, 7, 47, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `msg_fname` varchar(255) NOT NULL,
  `msg_lname` varchar(255) NOT NULL,
  `msg_email` varchar(255) NOT NULL,
  `msg_phone` varchar(255) NOT NULL,
  `msg_msge` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `msg_fname`, `msg_lname`, `msg_email`, `msg_phone`, `msg_msge`, `view`) VALUES
(1, 'Chanda', 'Langley', 'kybegako@mailinator.com', '+1 (187) 407-6304', 'In ut eu veniam ius', 1),
(2, 'Cadman', 'Crawford', 'nacikof@mailinator.com', '+1 (724) 175-5719', 'In ipsam nostrum con', 1),
(3, 'Katelyn', 'Marshall', 'guhygip@mailinator.com', '+1 (299) 331-1291', 'Veritatis quam labor', 1),
(4, 'Evelyn', 'George', 'qyvasydiw@mailinator.com', '+1 (798) 685-5184', '', 1),
(5, 'Trevor', 'Hood', 'nawed@mailinator.com', '+1 (367) 101-5332', 'Et at tenetur est od', 1),
(6, 'Aileen', 'Mcneil', 'tydeja@mailinator.com', '+1 (457) 797-9061', 'Unde perferendis sim', 1),
(8, 'Yuri', 'Munoz', 'bonobelyr@mailinator.com', '+1 (296) 341-1042', 'Autem quia dolore te', 1),
(9, 'Ali', 'Flynn', 'rone@mailinator.com', '+1 (742) 553-1058', 'Sit tempora reiciend', 1),
(10, 'Aquila', 'Salinas', 'pehurugev@mailinator.com', '+1 (546) 249-8243', 'Maiores ipsum suscip', 1),
(11, 'Colton', 'Hunt', 'xutycinah@mailinator.com', '+1 (444) 784-3923', 'Provident ut quaera', 1),
(12, 'Noel', 'Puckett', 'taqu@mailinator.com', '+1 (512) 271-7446', 'Voluptatibus itaque ', 1),
(16, 'Dora', 'Mccormick', 'zahe@mailinator.com', '+1 (238) 891-8167', 'Aut quisquam omnis e', 1),
(17, 'Dora', 'Mccormick', 'zahe@mailinator.com', '+1 (238) 891-8167', '', 1),
(18, 'Dora', 'Mccormick', 'zahe@mailinator.com', '+1 (238) 891-8167', 'Aut quisquam omnis e', 1),
(24, 'Allegra', 'Witt', 'hicalomac@mailinator.com', '+1 (201) 788-1895', 'Facere expedita ipsu', 1),
(27, 'Vivien', 'Conner', 'zenun@mailinator.com', '+1 (581) 977-4815', 'Consequatur Earum e', 1),
(28, 'Graiden', 'Johnston', 'sefydo@mailinator.com', '+1 (826) 596-5736', 'Aperiam rerum in omn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `priv`
--

CREATE TABLE `priv` (
  `priv_id` int(11) NOT NULL,
  `priv_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `priv`
--

INSERT INTO `priv` (`priv_id`, `priv_name`) VALUES
(1, 'super admin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_sale` int(11) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_sale`, `pro_description`, `pro_img`, `pro_cat_id`) VALUES
(43, 'Red digital smartwatch', 250, 0, '', '[\"4ac26f7dea39b09655b0f9444f197bdc.jpg\",\"8754d343fac9fe3c26dfc2eef9dfe781.jpg\",\"2cff431715dee5ef952524cc696e6b82.jpg\",\"9fd586c9a3cc2f6d0fd265edff139e1d.jpg\"]', 1),
(44, 'Kui Ye Chen’s AirPods', 250, 0, '', '[\"1f67de3cc0ac76c0b2748764f0cc6621.jpg\",\"8b41f11760c3a90651175320edeb1c43.jpg\"]', 2),
(45, 'Air Jordan 12 gym red', 300, 0, '', '[\"06153355403630d2f19d15cccd929a80.jpg\"]', 1),
(46, 'Cyan cotton t-shirt', 25, 0, '', '[\"7672a130b391b1db719e5f14897d21e1.jpg\"]', 1),
(47, 'Timex Unisex Originals', 351, 0, '', '[\"3479a65c2385e2010c8bb7e6084604f1.jpg\",\"696c8ca066d3eae911e9c3affbb427a1.jpg\",\"0428486c2cc1c1f88038c9a267f695f0.jpg\"]', 1),
(48, 'Red digital smartwatch', 253, 0, '', '[\"7018076002a952dc1d7e1941e28eb289.jpg\"]', 1),
(49, 'Nike air max 95', 300, 0, '', '[\"d3b5feccd5085aa4a6b5290f5ef97ea6.jpg\"]', 1),
(50, 'Joemalone Women prefume', 25, 0, '', '[\"69a5108058ddd2f414ebd4dcb6ef27f6.jpg\"]', 1),
(51, 'Apple Watch', 351, 0, '', '[\"4a67235391a62c11faef41d3d1d04307.jpg\"]', 1),
(52, 'Men silver Byron Watch', 378, 0, '', '[\"8df1e5f5dcaa8935212300cbab776989.jpg\"]', 1),
(53, 'Ploaroid one step camera', 495, 0, '', '[\"f716c108f7af038d75a1f2891758ef77.jpg\"]', 1),
(54, 'Gray Nike running shoes', 658, 0, '', '[\"94c005b644b06ea705fae15627174726.jpg\"]', 1),
(55, 'Black DSLR lense', 0, 0, '', '[\"5994214ffeee1d0423e9272309fa4f17.jpg\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_priv` int(11) NOT NULL,
  `user_gender` tinyint(4) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_address`, `user_phone`, `user_email`, `user_priv`, `user_gender`, `user_status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'cairo', '01026075973', 'email@email.com', 1, 0, 1),
(7, 'user', '202cb962ac59075b964b07152d234b70', 'nadeca', 'wexotudy', 'zivoqo', 3, 1, 0),
(9, 'cizabizihi', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'polezefe', 'cyledaseg', 'tamevu', 1, 0, 0),
(11, 'daryvek', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'sitizo', 'bicyxi', 'fynuve', 3, 1, 0),
(12, 'sucodyte', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'lytyhuxify', 'ryhogynadi', 'zijoguc', 1, 1, 1),
(13, 'superadmin', '202cb962ac59075b964b07152d234b70', '', '', '', 1, 0, 0),
(14, 'nykuquf', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'hilaboc', 'bylebycil', 'rytonixa', 3, 0, 0),
(17, 'vozunej', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'hujeliho', 'jifozesyxu', 'dylonyfyh', 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `priv`
--
ALTER TABLE `priv`
  ADD PRIMARY KEY (`priv_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_cat_id` (`pro_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_priv` (`user_priv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `priv`
--
ALTER TABLE `priv`
  MODIFY `priv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`pro_cat_id`) REFERENCES `categories` (`cat_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_priv`) REFERENCES `priv` (`priv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
