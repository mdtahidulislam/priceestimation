-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 01:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `price_estimation`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `product_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `mid`, `product_type`) VALUES
(4, 4, 'komla'),
(34, 3, 'school');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `mid` int(11) NOT NULL,
  `manufacture_name` varchar(255) NOT NULL,
  `ptid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`mid`, `manufacture_name`, `ptid`) VALUES
(1, 'Asus Bangla', 19),
(2, 'Lenovo', 19),
(3, 'HP', 19),
(4, 'Naogaor', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pid` int(11) NOT NULL,
  `prodname` varchar(500) NOT NULL,
  `descp` varchar(100) NOT NULL,
  `manufacture_name` varchar(255) NOT NULL,
  `prod_type` varchar(255) NOT NULL,
  `generation` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `unitprice` decimal(6,2) NOT NULL,
  `wholesale` decimal(6,2) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pid`, `prodname`, `descp`, `manufacture_name`, `prod_type`, `generation`, `model`, `unitprice`, `wholesale`, `img`) VALUES
(1, 'Latop', 'Description goes here', 'asus bangla', 'computer', '5th', 'asus', '9999.99', '9999.99', ''),
(2, 'player', 'description', 'Lenovo', 'Computer', '4th', 'wetewtwe', '123.00', '122.00', 'zpc-logo.png'),
(3, 'Computer', 'gajdgsjhagd', '', '', '5th Gen', 'ASUS 01', '9999.99', '9999.99', ''),
(4, 'Computer', 'grweiyqiuwryiuqw', '', '', '1 st gen', 'deshi', '9999.99', '9999.99', ''),
(5, 'notun', 'aHRFITQWEURFTGUIWYT', '', '', '5th Gen', 'ASUS 01', '9999.99', '9999.99', ''),
(6, 'kolom', 'jhfdkasfjg', '', '', 'hfkjh', 'hth', '9999.99', '2124.00', ''),
(7, 'alu', 'weuouio', '', '', 'uerouowu', 'ouweoriuo', '9999.99', '243.00', ''),
(8, 'mobile', 'description', '', '', '3rd ', '1100', '4000.00', '3000.00', ''),
(9, 'Computer', 'gajdgsjhagd', '', '', '5th Gen', 'ouweoriuo', '9999.99', '123.00', ''),
(10, 'mobile', 'description', '', '', '1 st gen', '1100', '4000.00', '3000.00', 'zpc-logo.png'),
(11, 'khata', 'adffasf', 'HP', 'school', '5th Gen', 'ASUS 01', '9999.99', '9999.99', 'zpc-logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
