-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 03:39 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trucksmarkt`
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
(1, 'Welkom in ons Markt', 'left-text', 1, 'Markt van Transport', '#', 1, '68712.jpg', '2020-01-09', '2020-01-09'),
(2, 'Welkom in ons Markt', 'left-center', 2, 'Markt van Transport', '#', 1, '5565.jpg', '2020-01-09', '2020-01-09'),
(3, 'Welkom in ons Markt', 'left-right', 3, 'Markt van Transport', '#', 1, '8860.jpg', '2020-01-09', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `product_color`, `size`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Volvo FH 420', '001', 'White', '1-Small', '8', 1, '', '', NULL, NULL),
(2, 1, 'Volvo FH 420', '001', 'White', 'Medium', '10', 1, '', '', NULL, NULL);

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
(1, 0, 'Aanhanger', '#', 'Aanhanger', 1, '2020-01-09', '2020-01-09'),
(2, 0, 'Bestelwagen of truck tot 7,5t', '#', 'Bestelwagen of truck tot 7,5t', 1, '2020-01-09', '2020-01-09'),
(3, 0, 'Bouwmachine', '#', 'Bouwmachine', 1, '2020-01-09', '2020-01-09'),
(4, 0, 'Bus', '#', 'Bus', 1, '2020-01-09', '2020-01-09'),
(5, 0, 'Landbouwvoertuig', '#', 'Landbouwvoertuig', 1, '2020-01-09', '2020-01-09'),
(6, 0, 'Oplegger', '#', 'Oplegger', 1, '2020-01-09', '2020-01-09'),
(7, 0, 'Truck zwaarder dan 7,5t', '#', 'Truck zwaarder dan 7,5t', 1, '2020-01-09', '2020-01-09'),
(8, 0, 'Vorkheftruck', '#', 'Vorkheftruck', 1, '2020-01-09', '2020-01-09'),
(9, 0, 'Vrachtwagen met oplegger', '#', 'Vrachtwagen met oplegger', 1, '2020-01-09', '2020-01-09'),
(10, 9, 'Volvo FH 420', '#', 'Volvo FH 420', 1, '2020-01-09', '2020-01-09'),
(11, 9, 'Volvo FH 440', '#', 'Volvo FH 440', 1, '2020-01-09', '2020-01-09'),
(12, 9, 'Volvo FH 460', '#', 'Volvo FH 460', 1, '2020-01-09', '2020-01-09'),
(13, 9, 'Volvo FH 480', '#', 'Volvo FH 480', 1, '2020-01-09', '2020-01-09');

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
  `featured_products` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `code`, `color`, `description`, `price`, `image`, `status`, `featured_products`, `created_at`, `updated_at`) VALUES
(1, 10, 'Volvo FH 420', '001', 'White', 'Volvo FH 420', 5900, '66129.jpg', 1, 1, '2020-01-09', '2020-01-10');

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
(1, 1, 'WTS001-S', 'Small', 8.00, 12, '2020-01-08', '2020-01-09'),
(2, 1, 'WTS001-M', 'Medium', 10.00, 12, '2020-01-08', '2020-01-09'),
(3, 1, 'WTS001-L', 'Large', 12.00, 12, '2020-01-08', '2020-01-09'),
(4, 1, 'WTS001-XL', 'Extra Large', 15.00, 12, '2020-01-08', '2020-01-09'),
(5, 2, 'BTS002-S', 'Small', 8.00, 12, '2020-01-08', '2020-01-08'),
(6, 2, 'BTS002-M', 'Medium', 10.00, 12, '2020-01-08', '2020-01-08'),
(7, 2, 'BTS002-L', 'Large', 12.00, 12, '2020-01-08', '2020-01-08'),
(9, 2, 'BTS002-XL', 'Extra Large', 15.00, 12, '2020-01-08', '2020-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '8499.jpg', '2020-01-10', '2020-01-10'),
(2, 1, '2337.jpg', '2020-01-10', '2020-01-10'),
(3, 1, '5371.jpg', '2020-01-10', '2020-01-10'),
(7, 1, '2333.jpg', '2020-01-10', '2020-01-10'),
(8, 1, '2892.jpg', '2020-01-10', '2020-01-10');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
