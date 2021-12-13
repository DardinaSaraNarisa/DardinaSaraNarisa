-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `resturant_info`
--

CREATE TABLE `resturant_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Location` varchar(40) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `image` text DEFAULT NULL,
  `Display` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resturant_info`
--

INSERT INTO `resturant_info` (`ID`, `Name`, `Location`, `ContactNumber`, `Email`, `image`, `Display`) VALUES
(8, 'takeout', 'mirpur', '12312321', 'takeout@takeout.com', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resturant_info`
--
ALTER TABLE `resturant_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resturant_info`
--
ALTER TABLE `resturant_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
