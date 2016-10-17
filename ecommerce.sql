-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 10:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `stock`, `price`, `description`) VALUES
(21, 'Cane Furniture', 12, 400, 'Cane furniture, designed and made by artisans from Chennai, India. '),
(58, 'Apple MacBook Pro MF839LL/A 13.3-Inch Laptop with Retina Display (2.7 GHz Intel Core i5 Processor, 8 GB RAM, 128 GB Hard Drive, OS X Yosemite)', 12, 1292, '2.7 GHz Dual-Core Intel Core i5 Processor (Turbo Boost up to 3.1 GHz, 3 MB shared L3 cache)\r\n8 GB 1866 MHz DDR3L RAM; 128 GB PCIe-based Flash Storage\r\n13.3-inch IPS Retina Display, 2560-by-1600 resolution\r\nIntel Iris Graphics, Force Touch Trackpad\r\nOS X Y'),
(59, 'Apple iPhone 7 Unlocked Phone 32 GB - US Version (Silver)', 21, 789, 'Keep everything you love about iPhone up to date, secure, and accessible from any device with iCloud.\r\nMulti-Touch display with IPS technology.\r\nWith just a single press, 3D Touch lets you do more than ever before.\r\nThe 12-megapixel iSight camera captures'),
(60, 'Motorola DROID Turbo, Black Ballistic Nylon 64GB (Verizon Wireless)', 2, 400, 'Display: 5.2-inches\r\nCamera: 21-MP\r\nProcessor Speed: 2.7 GHz\r\nOS: Android 4.4 (KitKat)\r\nThis was edited'),
(61, 'Motorola SPN5912A Wall Charger for Moto Z Droid - Black', 12, 40, 'Motorola Original Turbo Power 30 Charger SPN5912A\r\nCharge compatible device exceptionally quickly\r\nFor most mobile devices and tablets with USB Type-C charging port\r\nCompatible with Moto Z Droid and Moto Z Force Droid smartphones\r\n4.5 ft. long cable lengt');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `image`) VALUES
(33, 21, 'http://www.royalcanefurniture.com/images/144471305623463CS124.jpg'),
(34, 22, 'http://img01.deviantart.net/dd1a/i/2006/218/4/1/oil_lamp_2_by_ailinstock.jpg'),
(36, 58, 'https://images-na.ssl-images-amazon.com/images/I/91zhsBYJxGL._SL1500_.jpg'),
(37, 59, 'https://images-na.ssl-images-amazon.com/images/I/51QsA8IxAuL.jpg'),
(38, 59, 'https://images-na.ssl-images-amazon.com/images/I/51ZNDo0LgOL.jpg'),
(39, 59, 'https://images-na.ssl-images-amazon.com/images/I/51EkzarqeKL._SL1000_.jpg'),
(41, 58, 'http://cdn1.alphr.com/sites/alphr/files/apple-13-inch-macbook-pro-with-retina-display-front.jpg'),
(42, 60, 'https://images-na.ssl-images-amazon.com/images/I/913bcm6WbiL._SL1500_.jpg'),
(43, 60, 'https://images-na.ssl-images-amazon.com/images/I/81RkrLn-O4L._SL1500_.jpg'),
(44, 61, 'https://images-na.ssl-images-amazon.com/images/I/51uf-Pm43NL._SL1100_.jpg'),
(45, 61, 'https://images-na.ssl-images-amazon.com/images/I/41lMPNk75cL._SL1100_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
