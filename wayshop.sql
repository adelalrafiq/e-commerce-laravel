-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 02:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text_style` varchar(255) NOT NULL,
  `sort_order` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `text_style`, `sort_order`, `content`, `link`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To <br> Thewayshop', 'text-left', 1, 'See how your users experience your website in realtime or view <br>\r\ntrends to see any changes in performance over time.', '#', 1, '17758.jpg', '2020-01-06', '2020-01-06'),
(2, 'Welcome To <br> Thewayshop', 'text-center', 2, 'See how your users experience your website in realtime or view <br>\r\ntrends to see any changes in performance over time.', '#', 1, '29571.jpg', '2020-01-06', '2020-01-06'),
(3, 'Welcome To <br> Thewayshop', 'text-right', 3, 'See how your users experience your website in realtime or view <br>\r\ntrends to see any changes in performance over time.', '#', 1, '15797.jpg', '2020-01-06', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'T-Shirts', 't-shirts', 'T-Shirts', 1, '2020-01-03', '2020-01-06'),
(2, 0, 'Wallet', 'wallet', 'Wallet', 1, '2020-01-03', '2020-01-03'),
(3, 0, 'Shoes', 'shoes', 'Shoes', 1, '2020-01-03', '2020-01-03'),
(4, 0, 'Shirts', 'shirts', 'Shirts', 1, '2020-01-03', '2020-01-03'),
(7, 0, 'Bags', 'bags', 'Bags', 1, '2020-01-04', '2020-01-04'),
(8, 0, 'Women Shoes', 'women-shoes', 'Women Shoes', 1, '2020-01-04', '2020-01-04'),
(13, 1, 'White T-shirt', 'white-t-shirt', 'White T-Shirt', 1, '2020-01-06', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `color`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'White T-shirt', 'wts001', 'White', 'White T-shirt', 10, '26250.jpg', 1, '2020-01-03', '2020-01-06'),
(2, 1, 'Black T-shirt', 'bts002', 'Black', 'Black T-Shirt', 12, '11537.jpg', 1, '2020-01-06', '2020-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `sku`, `size`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 1, 'WTS001-S', 'Small', 8.00, 12, '2020-01-08', '2020-01-08'),
(2, 1, 'WTS001-M', 'Medium', 10.00, 12, '2020-01-08', '2020-01-08'),
(3, 1, 'WTS001-L', 'Large', 12.00, 12, '2020-01-08', '2020-01-08'),
(4, 1, 'WTS001-XL', 'Extra Large', 15.00, 12, '2020-01-08', '2020-01-08'),
(5, 2, 'BTS002-S', 'Small', 8.00, 12, '2020-01-08', '2020-01-08'),
(6, 2, 'BTS002-M', 'Medium', 10.00, 12, '2020-01-08', '2020-01-08'),
(7, 2, 'BTS002-L', 'Large', 12.00, 12, '2020-01-08', '2020-01-08'),
(8, 2, 'BTS002-XL', 'Extra Large', 15.00, 12, '2020-01-08', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'amaan', 'amaan@gmail.com', NULL, '$2y$10$zIXSz8eCMPSxQ8nicVJUK.N9pMjBhUEpkBUixlevxKP5Gw6rkmxCm', NULL, '2020-01-01 20:25:18', '2020-01-01 20:25:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
