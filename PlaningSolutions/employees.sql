-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 01:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company2`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `gender` enum('male','female') DEFAULT 'male',
  `image` varchar(255) DEFAULT 'default.jpg',
  `startTime` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `department`, `age`, `gender`, `image`, `startTime`, `created_at`) VALUES
(1, 'mariam helmy', 'mariamhelmy@gmail.com', 'developer', 24, 'female', 'team-2.jpg', '2021-10-27 22:52:00', '2022-07-28 22:52:33'),
(2, 'raghda osama', 'raghdaosama@gmail.com', 'developer', 26, 'female', 'instagram1.jpg', '2021-11-29 22:55:00', '2022-07-28 22:55:55'),
(3, 'samer tarek', 'samertarek@gmail.com', 'social markting', 28, 'male', 'team-1.jpg', '2022-06-28 22:56:00', '2022-07-28 22:57:19'),
(4, 'fatma taha', 'fatmataha@gmail.com', 'graphic desiger', 25, 'female', 'instagram3.jpg', '2021-06-29 22:59:00', '2022-07-28 22:59:31'),
(5, 'zaid alsayed', 'zaidalsayed@gmail.com', 'owner', 32, 'male', 'team-3.jpg', '2018-01-28 23:01:00', '2022-07-28 23:01:21'),
(6, 'mahmoud el garabawy', 'mahmoudelgarabawy@gmail.com', 'manager', 35, 'male', 'team-3.jpg', '2018-01-29 23:04:00', '2022-07-28 23:05:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
