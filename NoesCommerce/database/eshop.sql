-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 02:54 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(3, 1, '0', 5, 'Samsung Dous 2', 'samsung mobile.jpg', 1, 5000, 5000),
(15, 2, '0', 5, 'Asus', 'asus.jpg', 1, 7000, 7000),
(16, 3, '0', 5, 'HP', 'hp.jpg', 1, 11000, 11000),
(17, 14, '0', 5, 'Zip CPU', 'cpu3.jpg', 1, 15000, 15000),
(18, 15, '0', 5, 'Foxin CPU', 'cpu4.jpeg', 1, 16000, 16000),
(23, 18, '0', 7, 'HP Laptop', 'hplaptop.jpg', 1, 32000, 32000),
(24, 12, '0', 7, 'Lenovo Mouse', 'm3.jpeg', 1, 650, 650),
(25, 1, '0', 7, 'Acer R240HY', 'acer.jpg', 1, 6300, 6300),
(36, 1, '0', 13, 'Acer R240HY', 'acer.jpg', 1, 6300, 6300),
(37, 6, '0', 13, 'Lenovo Keyboard', 'key2.jpg', 1, 800, 800),
(38, 1, '0', 14, 'Acer R240HY', 'acer.jpg', 80, 6300, 504000),
(39, 13, '0', 14, 'Dell CPU ', 'cpu2.jpg', 1, 17000, 17000),
(40, 17, '0', 14, 'Integra CPU', 'cpu1.jpg', 1, 10000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Monitor'),
(2, 'Keyboard'),
(3, 'Mouse'),
(4, 'CPU'),
(5, 'Laptop'),
(6, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(2, 1, 'Asus', 7000, 'Asus', 'asus.jpg', 'asus monitor'),
(3, 1, 'HP', 11000, 'HP', 'hp.jpg', 'hp monitor'),
(4, 1, 'Samsung', 7300, 'Samsung ', 'samsung.jpg', 'samsung monitor'),
(5, 2, 'Media-Tech Keyboard', 490, 'Media-Tech Keyboard', 'key1.jpg', 'media-tech keyboard'),
(6, 2, 'Lenovo Keyboard', 800, 'Lenovo Keyboard', 'key2.jpg', 'lenovo keyboard'),
(7, 2, 'A4Tech Keyboard', 700, 'A4Tech Keyboard', 'key3.jpg', 'a4tech keyboard'),
(8, 2, 'Logi Keyboard', 390, 'Logi Keyboard', 'key4.png', 'logi keyboard'),
(9, 2, 'Zebronics Keyboard', 400, 'Zebronics Keyboard', 'key5.jpeg', 'zebronics keyboard'),
(10, 3, 'A4Tech Mouse', 400, 'A4Tech Mouse', 'm1.jpg', 'a4tech mouse'),
(11, 3, 'HP Mouse', 600, 'HP Mouse', 'm2.png', 'hp mouse'),
(12, 3, 'Lenovo Mouse', 650, 'Lenovo Mouse', 'm3.jpeg', 'lenovo mouse'),
(13, 4, 'Dell CPU ', 17000, 'Dell CPU', 'cpu2.jpg', 'dell cpu'),
(14, 4, 'Zip CPU', 15000, 'ZIP CPU', 'cpu3.jpg', 'zip cpu'),
(15, 4, 'Foxin CPU', 16000, 'Foxin CPU', 'cpu4.jpeg', 'foxin cpu'),
(16, 4, 'Zebronics CPU', 18000, 'Zebronics CPU', 'cpu5.jpeg', 'zebronics cpu'),
(17, 4, 'Integra CPU', 10000, 'Integra CPU', 'cpu1.jpg', 'integra cpu'),
(18, 5, 'HP Laptop', 32000, 'HP Loptop', 'hplaptop.jpg', 'hp laptop'),
(19, 6, 'Toshiba', 325, 'Toshiba FlashDrive', 'fd1.jpg', 'toshiba flashdrive'),
(20, 6, 'TechRepublic', 200, 'TechRepublic', 'creader1.jpg', 'techrepublic cardreader'),
(21, 6, 'Sony', 3000, 'Sony Headset', 'hp6.jpg', 'sony headset'),
(22, 6, 'Epson', 7000, 'Epson Printer', 'p2.jpeg', 'epson printer'),
(23, 6, 'Cannon', 4500, 'Cannon Printer', 's1.jpg', 'cannon printer'),
(24, 6, 'Creative', 1300, 'Creative Speaker', 'speak3.jpg', 'creative speaker'),
(25, 6, 'Frontech', 950, 'Frontech Webcam', 'wc.jpg', 'frontech webcam');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `user_id`, `amount`, `date`) VALUES
(1, 1, 12, '0000-00-00 00:00:00'),
(2, 5, 123, '2017-11-27 03:00:00'),
(185, 10, 129756, '2017-11-27 01:55:40'),
(187, 10, 140756, '2017-11-27 01:56:52'),
(189, 10, 134456, '2017-11-27 01:59:04'),
(190, 1, 30000, '2017-11-27 02:00:48'),
(191, 1, 30000, '2017-11-27 02:01:37'),
(192, 10, 30000, '2017-11-27 02:14:27'),
(193, 10, 30000, '2017-11-27 02:15:25'),
(194, 10, 30000, '2017-11-27 02:36:28'),
(195, 10, 11800, '2017-11-27 08:49:46'),
(196, 15, 8490, '2017-12-04 12:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `admin`) VALUES
(1, 'AdminCAq0uh', 'Admin', 'admin', '7488e331b8b64e5794da3fa4eb10ad5d', '0123456789', 'admin', 'admin', 1),
(4, 'Julius', 'Suarez', 'juliusraysuarez@gmail.com', 'e5ca49f47511c6467e2714bd63525d6d', '0909989900', 'sad', 'sad', 0),
(5, 'Christian', 'Cabuco', 'cabuco@gmail.com', 'b717415eb5e699e4989ef3e2c4e9cbf7', '9999999999', '090 Brgy. San Lucas II', 'San Pablo C', 0),
(6, 'Noelyn', 'Manco', 'noelyn.manco@yahoo.com', '64c4e419edfeabc3cd8d67e8546f9b3e', '9064662421', 'lucban quezon', 'lucban quez', 0),
(7, 'Jastina', 'Esquinas', 'jstna@gmail.com', 'de88e3e4ab202d87754078cbb2df6063', '1234567890', 'asd', 'ads', 0),
(10, 'Alds', 'Alds', 'ald@gmail.com', 'de88e3e4ab202d87754078cbb2df6063', '1234567890', 'asd', 'ads', 0),
(12, 'Ku', 'Suarez', 'ku@gmail.com', '5360eb1b2aa2b0790301df22218eb91e', '1234567890', 'asdas', 'asdas', 0),
(13, 'Noe', 'Manco', 'noe@yahoo.com', '292ab1cb1e43fe429f64ca8a1e757b6f', '0987654321', 'lucban', 'lucban', 0),
(15, 'Jeru Shalob', 'Barlos', 'jerushalombarlos@gmail.com', 'b891c7ae020e434e4bd8d42d7ca0dd3e', '1234567890', 'sfsd', 'fsfs', 1);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
