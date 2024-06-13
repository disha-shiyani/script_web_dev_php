-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:26 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atmiya_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_sku` varchar(50) DEFAULT NULL,
  `product_barcode` varchar(50) DEFAULT NULL,
  `product_weight` decimal(10,2) DEFAULT NULL,
  `product_dimensions` varchar(100) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_variants` varchar(255) DEFAULT NULL,
  `shipping_info` varchar(255) DEFAULT NULL,
  `seo_info` varchar(255) DEFAULT NULL,
  `product_brand` varchar(100) DEFAULT NULL,
  `product_features` text DEFAULT NULL,
  `product_benefits` text DEFAULT NULL,
  `related_products` varchar(255) DEFAULT NULL,
  `product_reviews` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image_filenames` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimensions`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefits`, `related_products`, `product_reviews`, `created_at`, `image_filenames`) VALUES
(5, 'Apple Iphone Pro', 'welcome', 'Mobileggdgdf', '323232.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 11:17:09', 'product_image/3.jpg'),
(20, 'Apple Iphone Pro 15 testwrerwerwer', 'sasassdsad', 'fassasafsasafs', '12450.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-27 04:07:11', 'product_image/2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
