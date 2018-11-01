-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 03:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `record_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`record_id`, `product_id`, `quantity`, `status`, `regDate`) VALUES
(1, 3, 23, '', '2018-08-30 22:02:37'),
(2, 3, 23, 'ACTIVE', '2018-08-30 22:03:27'),
(3, 3, 23, 'ACTIVE', '2018-08-30 22:03:49'),
(4, 3, 23, 'ACTIVE', '2018-08-30 22:03:52'),
(5, 3, 23, 'ACTIVE', '2018-08-30 22:04:01'),
(6, 5, 12, 'ACTIVE', '2018-08-30 22:07:28'),
(7, 5, 12, 'ACTIVE', '2018-08-30 22:07:54'),
(8, 5, 12, 'ACTIVE', '2018-08-30 22:08:32'),
(9, 3, 5, 'ACTIVE', '2018-08-30 22:45:18'),
(10, 3, 12, 'ACTIVE', '2018-08-30 23:27:05'),
(11, 3, 12, 'ACTIVE', '2018-08-30 23:28:43'),
(12, 3, 1, 'ACTIVE', '2018-08-30 23:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_logs`
--

CREATE TABLE `inventory_logs` (
  `log_id` int(100) NOT NULL,
  `log_date` varchar(1024) NOT NULL,
  `user_id` int(100) NOT NULL,
  `activity` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_logs`
--

INSERT INTO `inventory_logs` (`log_id`, `log_date`, `user_id`, `activity`, `status`, `regDate`) VALUES
(1, '2018/08/31', 6, ' has added a new MDF to stock with quantity12', 'UNREAD', '2018-08-30 23:27:05'),
(2, '2018/08/31', 6, ' has added a new MDF to stock with quantity 12', 'UNREAD', '2018-08-30 23:28:43'),
(3, '2018/08/31', 6, 'John Karim has added a new MDF to stock with quantity 1', 'UNREAD', '2018-08-30 23:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `items_categories`
--

CREATE TABLE `items_categories` (
  `category_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `status` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_categories`
--

INSERT INTO `items_categories` (`category_id`, `name`, `unit_price`, `image`, `status`, `regDate`) VALUES
(3, 'MDF', 0, '537866900.PNG', 'ACTIVE', '2018-08-30 10:51:41'),
(4, 'PLACARI', 0, '1321391218.jpg', 'ACTIVE', '2018-08-30 11:06:16'),
(5, 'MDF-DOOR', 10000, '1056426144.jpg', 'ACTIVE', '2018-08-30 21:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `record_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `supplier` varchar(1024) NOT NULL,
  `unit_price` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_logs`
--

CREATE TABLE `system_logs` (
  `log_id` int(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `setting_id` int(100) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(1024) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `status` varchar(100) NOT NULL,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `user_id` int(100) NOT NULL,
  `user_code` int(100) NOT NULL,
  `names` varchar(1024) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `lastLogin` varchar(100) NOT NULL,
  `verified` int(2) NOT NULL,
  `isOnline` varchar(50) NOT NULL,
  `isAdmin` int(2) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`user_id`, `user_code`, `names`, `email`, `password`, `phone`, `type`, `status`, `gender`, `lastLogin`, `verified`, `isOnline`, `isAdmin`, `regDate`) VALUES
(1, 10001, 'Sugira samuel', 'sam@gmail.com', 'samuels', 123456789, 'ADMIN', 'ACTIVE', '', '', 1, 'NO', 1, '2018-08-23 10:34:33'),
(2, 0, 'manikiza', 'sam@kiza.com', 'samuels', 0, 'ADMIN', 'DELETED', 'M', '', 1, '', 0, '2018-08-30 13:23:16'),
(3, 0, 'manikiza', 'samuel@gmail.com', 'samuels', 0, 'ADMIN', 'DELETED', 'M', '', 1, '', 0, '2018-08-30 13:23:46'),
(4, 0, 'sss', 'sam@kiza.com', 'samuels', 0, 'ADMIN', 'DELETED', 'M', '', 1, '', 0, '2018-08-30 13:24:52'),
(5, 0, 'manikiza', 'sugira@gmail.com', 'samuels', 2147483647, 'FINANCE', 'ACTIVE', 'F', '', 1, '', 0, '2018-08-30 13:33:55'),
(6, 0, 'John Karim', 'john@gmail.com', '123456', 2147483647, 'STOCK', 'ACTIVE', 'M', '', 1, '', 0, '2018-08-30 14:36:38'),
(7, 0, 'radio Admin', 'info@radio1.rw', '123456', 2147483647, 'STOCK', 'ACTIVE', 'M', '', 1, '', 0, '2018-08-30 14:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `status`, `regDate`) VALUES
(1, 'samuel', 'samuel', 'admin', 'offline\r\n', '2018-03-06 05:00:23'),
(2, 'stock', 'samuel', 'seller', 'offline\r\n', '2018-03-06 05:00:54'),
(3, 'sam@gmail.com', '123456', '', '', '2018-08-23 08:15:04'),
(4, 'sam@gmail.com', '123456', '', '', '2018-08-23 08:15:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `inventory_logs`
--
ALTER TABLE `inventory_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `items_categories`
--
ALTER TABLE `items_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `system_logs`
--
ALTER TABLE `system_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory_logs`
--
ALTER TABLE `inventory_logs`
  MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items_categories`
--
ALTER TABLE `items_categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `raw_materials`
--
ALTER TABLE `raw_materials`
  MODIFY `record_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_logs`
--
ALTER TABLE `system_logs`
  MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `setting_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
