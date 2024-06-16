-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 03:03 PM
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
-- Database: `webgg`
--

-- --------------------------------------------------------

--
-- Table structure for table `contrac_us`
--

CREATE TABLE `contrac_us` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contrac_us`
--

INSERT INTO `contrac_us` (`name`, `email`, `subject`, `message`) VALUES
('chanon sukrod', 'chanonsukrod@gmail.com', 'gg', 'ggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `userID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`userID`, `username`, `password`, `name`, `email`, `address`) VALUES
(10, 'cha', '123456', 'tell', 'chanonsukrod@gmail.com', '123'),
(12, 'root', '123456', 'tell', 'chanonsu64@nu.ac.th', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `OrderID` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bd` text NOT NULL,
  `nbd` text NOT NULL,
  `wd` text NOT NULL,
  `nwd` text NOT NULL,
  `cs` text NOT NULL,
  `ncs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`OrderID`, `email`, `bd`, `nbd`, `wd`, `nwd`, `cs`, `ncs`) VALUES
(1, '', '1, 0, 0, 1, 0, 0', '2, 0, 0, 1, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(2, '', '1, 1, 0, 0, 0, 0', '2, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(3, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(4, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(5, '', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(6, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(7, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(8, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(9, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(10, '', '', '', '', '', '', ''),
(11, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(12, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(13, '', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(14, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(15, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(16, '', '0, 0, 0, 0, 0, 1', '0, 0, 0, 0, 0, 2', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(17, '', '0, 1, 0, 0, 0, 1', '0, 2, 0, 0, 0, 2', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(18, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(19, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(20, '', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(21, '', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(22, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(23, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(24, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(25, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(26, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(27, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 1, 0, 0', '0, 0, 0, 2, 0, 0'),
(28, '', '0, 0, 0, 1, 0, 0', '0, 0, 0, 2, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(29, '', '0, 0, 0, 1, 0, 0', '0, 0, 0, 2, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(30, '', '0, 0, 0, 1, 0, 0', '0, 0, 0, 2, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(31, '', '0, 0, 0, 1, 0, 0', '0, 0, 0, 2, 0, 0', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 1, 0, 0, 0, 1', '0, 2, 0, 0, 0, 2'),
(32, '', '1, 1, 0, 0, 0, 0', '2, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(33, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(34, '', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0'),
(35, '', '0, 1, 0, 0, 0, 0', '0, 2, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0'),
(36, '', '1, 0, 0, 0, 0, 0', '2, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0', '0, 0, 0, 0, 0, 0');

-- --------------------------------------------------------

--
-- Table structure for table `price_info`
--

CREATE TABLE `price_info` (
  `bd` text NOT NULL,
  `price_bd` float NOT NULL,
  `wd` text NOT NULL,
  `price_wd` float NOT NULL,
  `cs` text NOT NULL,
  `price_cs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `price_info`
--

INSERT INTO `price_info` (`bd`, `price_bd`, `wd`, `price_wd`, `cs`, `price_cs`) VALUES
('bd1', 10, 'wd1', 20, 'cs1', 34),
('bd2', 12, 'wd2', 22.5, 'cs2', 45),
('bd3', 11, 'wd3', 25, 'cs3', 45),
('bd4', 13, 'wd4', 26, 'cs4', 48),
('bd5', 12.5, 'wd5', 35, 'cs5', 56),
('bd6', 15, 'wd6', 45, 'cs6', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`OrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `OrderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
