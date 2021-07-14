-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:07 PM
-- Server version: 5.6.21
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'ayush kaithe', 'ayushkaithe0340@gmail.com', '2147483647', 'amazing site i have seen'),
(2, 'john', 'john@gmail.com', '2147483647', 'jhhh'),
(3, 'john', 'ayushka@gmail.com', '2147483647', 'amazing site i have seen'),
(4, 'john', 'ayushkaithe0340@gmail.com', '7558205821', 'amazing site i have seen');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` char(1) NOT NULL,
  `department` varchar(100) NOT NULL,
  `itemdetail` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `mobile`, `email`, `gender`, `department`, `itemdetail`, `image`) VALUES
(24, 'shivansh', '2564236541', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' xzx', 0x616c6c5f696d616765732f3463373465363733376137303063373739343532396565323736353765373936576861747341707020496d61676520323032312d30342d31362061742031302e35322e303020414d2e6a706567),
(25, 'Ayush kaithe', '7558205821', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' njhh', 0x616c6c5f696d616765732f3237323834373332356361383032656534313433303236643539373766303733757365722e706e67),
(26, 'Ayush kaithe', '7558205821', 'ayushkaithe80340@gmail.com', 'm', 'ETC', ' ddddsffd', 0x616c6c5f696d616765732f343437353963383665396531616165653836316530306436663466663766623670686f746f2e6a7067),
(27, 'bhuneshwari', '8087213343', 'bhuneshwarikaithe43@gmail.com', 'f', 'IT', ' cloths,food', 0x616c6c5f696d616765732f3261623130633064643638666436366566323331656133316163653233333935332e6a666966);

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE IF NOT EXISTS `data1` (
`id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`id`, `fname`, `age`, `mobile`, `gender`, `reason`, `image`, `amount`) VALUES
(2, 'Ayush kaithe', 20, '7558205821', 'm', ' Accident', 0x616c6c5f696d616765732f3937626231636633383761346335353039366439383963626639613832656435, 500);

-- --------------------------------------------------------

--
-- Table structure for table `data2`
--

CREATE TABLE IF NOT EXISTS `data2` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `department` varchar(100) NOT NULL,
  `itemdetail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data2`
--

INSERT INTO `data2` (`id`, `name`, `mobile`, `email`, `gender`, `department`, `itemdetail`, `image`) VALUES
(2, 'Ayush kaithe', '7558205821', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' sss', 'all_images/358e64c8d163633c61e0c3fda8ba3391admin.png'),
(3, 'shivansh', '7558205821', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' a', 'all_images/dc69e116d90a07f3711456985e237539WhatsApp Image 2021-04-16 at 10.52.00 AM.jpeg'),
(4, 'Ayush kaithe', '2564236541', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' x', 'all_images/3f68fd2bf86065dbe03cae5b76e5eaeab2.jpg'),
(5, 'Ayush kaithe', '7558205821', 'ayushk.it@sbjit.edu.in', 'm', 'ELECTRICAL', ' mkjhu', 'all_images/6d11ce14a26b91c3ab44a6409735e530photo.jpg'),
(6, 'bhuneshwari', '8087213343', 'bhuneshwarikaithe43@gmail.com', 'f', 'IT', ' book', 'all_images/38515426b42240482eaf7cca6c15d0f54.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `data3`
--

CREATE TABLE IF NOT EXISTS `data3` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `department` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data3`
--

INSERT INTO `data3` (`id`, `name`, `mobile`, `email`, `gender`, `department`, `location`, `image`) VALUES
(6, 'Ayush kaithe', '7558205821', 'ayushkaithe80340@gmail.com', 'm', 'IT', ' near canteen', 'all_images/52b54750850e7ac7d329822b13e25f921.jfif'),
(7, 'Megha agrawal', '7057868644', 'megha@gmail.com', 'f', 'IT', ' In CSE department', 'all_images/11abaae940afa62b48be6e8005d8e6f24.jfif'),
(8, 'sakshi verma', '7558584366', 'sakshi@gmail.com', 'f', 'IT', ' Parking Area', 'all_images/0e7fa4ac189af414d0ebf3327a1774be3.jfif'),
(9, 'Piyush dhore', '7851236459', 'piyush@gmail.com', 'm', 'MECHANICAL', 'Near Admin Department', 'all_images/e7086be467b55c3b9a4fedf87d5879fa2.jfif'),
(10, 'shivansh', '6324568752', 'shiv@gmail.com', 'm', 'ETC', '1st year entrance', 'all_images/96a498434b0438393038572b4853aa24image (7).jpg'),
(11, 'Nandu', '9562436542', 'nandu@gmail.com', 'm', 'ELECTRICAL', 'Etc department', 'all_images/49dd1f166a5d6c0096d8dbea00c0fd03image (11).jpg'),
(12, 'shubham wase', '7057868644', 'shubham@gmail.com', 'm', 'IT', ' workshop', 'all_images/eabee36aae537965d080d5c2bb5a0c76image (12).jpg'),
(13, 'ram', '925647855', 'ram@gmail.com', 'm', 'IT', ' Etc department', 'all_images/d0a5beaf5af6ce96b741e430f01c0eddimage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data2`
--
ALTER TABLE `data2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data3`
--
ALTER TABLE `data3`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data2`
--
ALTER TABLE `data2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data3`
--
ALTER TABLE `data3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
