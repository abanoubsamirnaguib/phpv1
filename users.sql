-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 03:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Email address` varchar(50) NOT NULL,
  `Phone No.` varchar(20) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Email address`, `Phone No.`, `Color`, `message`) VALUES
(1, 'Abanoubsamir@gmail.com', '01234', 'qq12', '1111223'),
(2, 'Abanoubsamir@gmail.com', '012219660840', 'red', 'sdssd'),
(3, 'Abanoubsamir@gmail.com', '01221966084', 'red', 'qqqq'),
(4, 'Abanoubsamir@gmail.com', '01221966084', 'q', 'sdsd12313'),
(5, 'Abanoubsamir@gmail.com', '01221966084', 'red', '111111'),
(23, 'Abanoubsamir@gmail.com', '1221966084', 'red', 'ererer'),
(24, 'Abanoubsamir@gmail.com', '1221966084', 'red', '111'),
(25, 'Abanoubsamir@gmail.com', '1221966084', 'red', '111'),
(26, 'Abanoubsamir@gmail.com', '1221966084', 'red', '111111'),
(27, 'Abanoubsamir@gmail.com', '1221966084', 'red', '111111'),
(28, 'Abanoubsamir@gmail.com', '1221966084', '11111', 'qqqq'),
(29, 'Abanoubsamir@gmail.com', '1221966084', '11111', 'qqqq'),
(30, 'Abanoubsamir@gmail.com', '1221966084', 'red', 'sdsd12313'),
(31, 'Abanoubsamir@gmail.com', '1221966084', 'red', 'sdsd12313'),
(32, 'Abanoubsamir@gmail.com', '1221966084', 'red', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
