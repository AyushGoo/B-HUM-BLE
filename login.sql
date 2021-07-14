-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:50 PM
-- Server version: 5.6.21
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `fdata`
--

CREATE TABLE IF NOT EXISTS `fdata` (
`sr_no` int(100) unsigned NOT NULL,
  `fname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `mobemail` varchar(50) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `things`
--

CREATE TABLE IF NOT EXISTS `things` (
  `fullname` varchar(50) NOT NULL,
`mobileno` int(100) unsigned NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `itemdetails` varchar(50) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'GNP65B102', '$2y$10$16P2g8QYzx58B8Dsi2IBSetwwjpG7pWkGFkUjzjiuv58WINmE3d3q', '2021-04-03 11:48:38'),
(8, 'Ayush', '$2y$10$X1riBZ71AfCQQPRt1oCOKO0sYk9wT9XSofqVFiYMU2xOTc08F5Bxe', '2021-04-24 15:35:35'),
(9, 'Megha', '123456', '2021-04-24 15:42:21'),
(10, 'aaaru', 'ayu123', '2021-04-24 15:48:50'),
(11, 'nandini', '123456', '2021-04-28 20:15:15'),
(12, 'ram', '123456', '2021-05-17 16:45:04'),
(13, 'Rani Kaithe', '123456', '2021-05-22 20:05:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fdata`
--
ALTER TABLE `fdata`
 ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `things`
--
ALTER TABLE `things`
 ADD PRIMARY KEY (`mobileno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fdata`
--
ALTER TABLE `fdata`
MODIFY `sr_no` int(100) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `things`
--
ALTER TABLE `things`
MODIFY `mobileno` int(100) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
