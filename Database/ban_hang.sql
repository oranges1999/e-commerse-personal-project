-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 02:36 PM
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
-- Database: `ban_hang`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Action games', 1, '2023-09-18', '2023-09-18'),
(2, 'RPG games', 1, '2023-09-18', '2023-09-18'),
(3, 'RTS games', 1, '2023-09-18', '2023-09-18'),
(4, 'Racing games', 1, '2023-09-18', '2023-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `score_id` bigint(20) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `status_id` bigint(20) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(12, 1, 1, '01:15:13 AM, 12-10-2023', '01:15:13 AM, 12-10-2023'),
(13, 1, 1, '01:32:43 AM, 12-10-2023', '09:23:27 PM, 12-10-2023');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(18, 12, 15, '1', '01:15:13 AM, 12-10-2023', '01:15:13 AM, 12-10-2023'),
(19, 12, 16, '3', '01:15:13 AM, 12-10-2023', '01:15:13 AM, 12-10-2023'),
(20, 13, 15, '10', '01:32:43 AM, 12-10-2023', '01:32:43 AM, 12-10-2023'),
(21, 13, 17, '20', '01:32:43 AM, 12-10-2023', '01:32:43 AM, 12-10-2023');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `productImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `qty`, `created_by`, `created_at`, `updated_at`, `price`, `productImg`) VALUES
(15, 'Games 1', 4, '100', 1, '08:25:11 PM, 11-10-2023', '06:49:44 PM, 12-10-2023', '200', '../../asset/productImg/1697030711620271Li0DpTQOL._AC_UF1000,1000_QL80_.jpg'),
(16, 'game 2', 2, '10', 1, '08:25:27 PM, 11-10-2023', '08:25:27 PM, 11-10-2023', '200', '../../asset/productImg/1697030727875181lrfL9cgaL._AC_UF1000,1000_QL80_.jpg'),
(17, 'game 3', 3, '10', 1, '08:25:47 PM, 11-10-2023', '08:25:47 PM, 11-10-2023', '200', '../../asset/productImg/1697030747268MV5BNzQwZmU2MWQtODM2Ni00YTZjLWJiNzQtZTA0MDBiMzk1YjMzXkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg'),
(18, 'game 4', 4, '10', 1, '08:26:25 PM, 11-10-2023', '08:26:25 PM, 11-10-2023', '200', '../../asset/productImg/169703078516171LSwnEXpXL._AC_UF894,1000_QL80_.jpg'),
(19, 'Game 5', 1, '1000', 1, '07:31:52 PM, 12-10-2023', '07:31:52 PM, 12-10-2023', '300', '../../asset/productImg/16971139128010default-ultimate.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` bigint(20) NOT NULL,
  `meaning` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `meaning`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Tệ', '2023-09-18', '2023-09-18', 1),
(2, 'Tạm được', '2023-09-18', '2023-09-18', 1),
(3, 'Được', '2023-09-18', '2023-09-18', 1),
(4, 'Tốt', '2023-09-18', '2023-09-18', 1),
(5, 'Rất tốt', '2023-09-18', '2023-09-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) NOT NULL,
  `meaning` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `meaning`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Đang xác nhận', '2023-09-18', '2023-09-18', 1),
(6, 'Đang đóng gói', '2023-10-12', '2023-10-12', 1),
(7, 'Đang vận chuyển', '2023-10-12', '2023-10-12', 1),
(8, 'Hoàn thành', '2023-10-12', '2023-10-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` text DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `confirmed` varchar(255) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `phone`, `address`, `created_at`, `updated_at`, `password`, `avatar`, `dateOfBirth`, `gender`, `email`, `confirmed`, `status`, `fullname`) VALUES
(1, 'huy123', 1, '0123456789', 'abc đường xyz tp yuh', '2023-09-18', '2023-09-18', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 1, 'Nguyễn Như Huy(admin)'),
(13, 'nhuhuy1999', 0, NULL, NULL, '0000-00-00', '0000-00-00', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(14, 'huy329', 0, NULL, NULL, '0000-00-00', '0000-00-00', '6faa8040da20ef399b63a72d0e4ab575', NULL, NULL, NULL, NULL, NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `score_id` (`score_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`score_id`) REFERENCES `scores` (`id`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
