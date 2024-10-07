-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 01:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoneloginver2`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`id`, `user_id`, `action`, `timestamp`) VALUES
(1, 2, 'User registered', '2024-10-03 07:24:02'),
(2, 3, 'User registered', '2024-10-04 05:29:24'),
(3, 4, 'User registered', '2024-10-04 22:02:43'),
(4, 5, 'User registered', '2024-10-04 22:27:30'),
(5, 6, 'User registered', '2024-10-04 22:41:03'),
(6, 7, 'User registered', '2024-10-04 22:45:27'),
(7, 8, 'User registered', '2024-10-07 06:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `date_created`, `date_updated`) VALUES
(1, 'MLBB JERSEY', 'KPL Jersey Award', 500.00, '', '2024-10-07 17:13:32', '2024-10-07 17:13:32'),
(2, 'ML Jersey Ver 2', 'Rare Product From Imagination', 500.00, '', '2024-10-07 17:18:47', '2024-10-07 17:18:47'),
(3, 'Orange Jersey', 'Really Orange with black', 500.00, '', '2024-10-07 17:23:36', '2024-10-07 17:23:36'),
(4, 'cent jersey', 'very effective', 500.00, '', '2024-10-07 17:36:05', '2024-10-07 17:36:05'),
(5, 'random', 'random', 200.00, 'uploads/vector-creative-login-ui-template-form-design-with-technology-style-bac.jpg', '2024-10-07 17:48:11', '2024-10-07 17:48:11'),
(6, 'Boston Jersey Cool', 'Best For Basketball', 500.00, 'uploads/vector-creative-login-ui-template-form-design-with-technology-style-bac.jpg', '2024-10-07 19:33:32', '2024-10-07 19:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `contact_no`, `address`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@example.com', '$2y$10$Ybf2sYi4/zrWBpqAJZ5Bne666NBwFJqgnPHoTiJk/Mx4Dso5.s.4q', NULL, NULL, 'admin', '2024-10-03 06:56:10'),
(2, 'UserCent', 'UserCent@gmail.com', '$2y$10$ScQLAyRo0/iqKjFMzsrRPecPR1b9sU34dfLurTeS2o3hcy403uhLi', '12345678912', 'Lubao', 'user', '2024-10-03 07:24:02'),
(3, 'adsasd', 'asdn@gmail.com', '$2y$10$l4RTS2patHBpcVSG.4Mf2OOPyg8CjKRWEGATon/0J.6yBPd2UceG6', '12345678912', '123123', 'user', '2024-10-04 05:29:24'),
(4, 'UserRamJay', 'UserRamJay@gmail.com', '$2y$10$.KbUKG32IZTk47lHVEyTuug3UdP3IXfBxlivYv2S.CVS6aezIRueK', '12345678913', 'FloridaBlanca', 'user', '2024-10-04 22:02:43'),
(5, 'UchihaTom', 'UchihaTom@yahoo.com', '$2y$10$HZ9DhJ4D8pd/Im/aqseWZuZNl9Z.YVdZK4basmk1OVfIhatGLdfaC', '09194399821', 'Konohagakure', 'user', '2024-10-04 22:27:30'),
(6, 'SenjuJerry', 'SenjuJerry@yahoo.com', '$2y$10$vVOu9mmNEquGced.PFHUqOTg5hxYjUua3QIF2EN.ZmhmrPWEKi/z6', '09856643781', 'Konohagakure', 'user', '2024-10-04 22:41:03'),
(7, 'AngryBird', 'AngryBird@yahoo.com', '$2y$10$Mzqqk0SLbw9BW/kicT29FuOzSPQ/ZslUiAwSCgNN/BzRd6Lk26iFW', '1234565432', 'Bird Island', 'user', '2024-10-04 22:45:27'),
(8, 'lee', 'lee@gmail.com', '$2y$10$HzrcdBNLmigyBocz.Dlkh.EcDgHIDojSxQeFyjvK9sM2GBtlGVRk.', '091123124324', 'aweqw', 'user', '2024-10-07 06:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD CONSTRAINT `audit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
