-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 08:57 AM
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
  `CartID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `RestaurantID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `PaymentStatus` tinyint(1) NOT NULL,
  `OrderStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ItemID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Value` text NOT NULL,
  `RestaurantID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `Status` tinyint(1) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Gender`, `Password`, `Type`, `Status`, `Image`) VALUES
(1, 'Jane Doe', 'jd@gmail.com', '', 'Janedoe', 'User', 0, ''),
(2, 'Ariel', 'ariel@gmail.com', 'Female', '$2y$10$kAzen3BGZnJgZjXUMD6EvOig30f6aQhvzx4YbK3Abmq9PH/J5RI5e', 'User', 0, ''),
(3, 'Winter', 'winter@gmail.com', 'Male', '$2y$10$g2IKTIzzRogGNu3UfKX5.ehTbH7CmJ8.XHANVYmWEv4scK.Uv2que', 'User', 0, ''),
(4, 'may', 'may@yahoo.com', 'Female', '$2y$10$1Uqcz1RNZ3BIZ3w526IlEeiL0MVyDhW6dLUjdP67JPFYx0oTrgmVS', 'User', 0, ''),
(5, 'sweet', 'sweet@yahoo.com', 'Female', '$2y$10$iWz8sji2MZEQcbM.nkA72eBSX4MAMrewVce2g0jXzrhX.fnAj15uS', 'User', 0, ''),
(99099, 'Anna Mae', 'amae@yahoo.com', 'Female', '$2y$10$o10y5qtYrPN6d6kxQh6oru3ZjWMPb9cwwwWbKapnHIBA0kZi96DR.', 'User', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`),
  ADD KEY `UserID` (`UserID`,`ItemID`,`RestaurantID`),
  ADD KEY `RestaurantID` (`RestaurantID`),
  ADD KEY `ItemID` (`ItemID`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurants` (`RestaurantID`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`ItemID`) REFERENCES `menu` (`ItemID`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurants` (`RestaurantID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`OwnerID`) REFERENCES `cart` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
