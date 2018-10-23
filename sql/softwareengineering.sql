-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 09:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softwareengineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ItemID` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT '1',
  `Price` int(11) NOT NULL,
  `Name` text NOT NULL,
  `CartID` int(11) NOT NULL,
  `PaymentStatus` int(11) NOT NULL DEFAULT '0',
  `OrderStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ItemID`, `Quantity`, `Price`, `Name`, `CartID`, `PaymentStatus`, `OrderStatus`) VALUES
(0, 0, 0, 'name', 18, 0, 0),
(0, 0, 0, 'name', 19, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT '1',
  `Price` int(11) NOT NULL,
  `RestaurantID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ItemID`, `Name`, `Quantity`, `Price`, `RestaurantID`) VALUES
(1, 'Fries', 1, 100, 1),
(2, 'Chapati', 1, 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `RestaurantID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `OwnerID` int(11) NOT NULL,
  `Location` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`RestaurantID`, `Name`, `Description`, `OwnerID`, `Location`, `Rating`, `Image`) VALUES
(3, 'Eatplicity', 'Nothing but good food', 1, 'first floor', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gender` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Type` text NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Gender`, `Password`, `Type`, `Status`) VALUES
(1, 'Jane Doe', 'jd@gmail.com', '', 'Janedoe', 'User', 0),
(2, 'Ariel', 'ariel@gmail.com', 'Female', '$2y$10$kAzen3BGZnJgZjXUMD6EvOig30f6aQhvzx4YbK3Abmq9PH/J5RI5e', 'User', 0),
(3, 'Winter', 'winter@gmail.com', 'Male', '$2y$10$g2IKTIzzRogGNu3UfKX5.ehTbH7CmJ8.XHANVYmWEv4scK.Uv2que', 'User', 0),
(4, 'may', 'may@yahoo.com', 'Female', '$2y$10$1Uqcz1RNZ3BIZ3w526IlEeiL0MVyDhW6dLUjdP67JPFYx0oTrgmVS', 'User', 0),
(5, 'sweet', 'sweet@yahoo.com', 'Female', '$2y$10$iWz8sji2MZEQcbM.nkA72eBSX4MAMrewVce2g0jXzrhX.fnAj15uS', 'User', 0),
(6, 'Nicole Olga', 'nicole.muswanya@strathmore.edu', 'Female', '$2y$10$iJxldzXNgohpfOb70nQV4Ob4SAiZieevreIO0bDDM3LlRNEtpdky6', 'User', 0),
(9, 'Isacck Motanya', 'motanya@strathmore.edu', 'Male', '$2y$10$2SSzIHemokrdBX9vRUBbYezhxVKl/3ZEk3.WOJ/exwd..VixnrE7O', 'Student', 0),
(10, 'John Doe', 'john@strathmore.edu', 'Male', '$2y$10$wdv8oIhGE3s88Q8cWd.2wuPsIt2mafR380nZX.m4joy5BWNu3qoMe', 'Student', 0),
(99099, 'Anna Mae', 'amae@yahoo.com', 'Female', '$2y$10$o10y5qtYrPN6d6kxQh6oru3ZjWMPb9cwwwWbKapnHIBA0kZi96DR.', 'User', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `RestaurantID` (`RestaurantID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`RestaurantID`),
  ADD KEY `OwnerID` (`OwnerID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `RestaurantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`OwnerID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
