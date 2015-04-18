-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 06:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpsltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CategoryID` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(40) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerId` int(12) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Address1` varchar(100) DEFAULT NULL,
  `Address2` varchar(100) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `State` varchar(40) DEFAULT NULL,
  `Country` varchar(40) NOT NULL,
  `ZipCode` int(12) DEFAULT NULL,
  `Phone` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PaymentMethodID` int(10) NOT NULL,
  `PaymentInfomation` varchar(100) DEFAULT NULL,
  `BillingAddress` varchar(100) DEFAULT NULL,
  `BillingCity` varchar(50) DEFAULT NULL,
  `BillingCountry` varchar(50) DEFAULT NULL,
  `ShippingAddress` varchar(100) DEFAULT NULL,
  `ShippingCity` varchar(50) DEFAULT NULL,
  `ShippingCountry` varchar(50) DEFAULT NULL,
  `DateJoined` datetime NOT NULL,
  `LastLoginDate` datetime NOT NULL,
  PRIMARY KEY (`customerId`),
  UNIQUE KEY `PaymentMethodID` (`PaymentMethodID`),
  UNIQUE KEY `UserId` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `ProductID` int(12) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Discount` double NOT NULL,
  `Total` int(11) NOT NULL,
  `OrderDetailID` int(10) NOT NULL AUTO_INCREMENT,
  `OrderID` int(10) NOT NULL,
  PRIMARY KEY (`OrderDetailID`),
  UNIQUE KEY `OrderID` (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(10) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(10) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `ShipDate` datetime NOT NULL,
  `ShipperID` int(10) NOT NULL,
  `PaymentID` int(10) DEFAULT NULL,
  `Paid` tinyint(1) NOT NULL,
  `ShippingCost` int(10) NOT NULL,
  `TransactionStatus` varchar(50) DEFAULT NULL,
  `Note` text NOT NULL,
  `Tax` int(10) NOT NULL,
  PRIMARY KEY (`OrderID`),
  UNIQUE KEY `CustomerID` (`CustomerID`),
  UNIQUE KEY `ShipperID` (`ShipperID`),
  UNIQUE KEY `PaymentID` (`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE IF NOT EXISTS `paymentmethod` (
  `PaymentMethodID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` text,
  `Note` text,
  PRIMARY KEY (`PaymentMethodID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `PaymentID` int(10) NOT NULL AUTO_INCREMENT,
  `OrderID` int(10) NOT NULL,
  `PaymentMethodID` int(10) NOT NULL,
  `Allowed` tinyint(1) NOT NULL,
  `PaymentDate` datetime NOT NULL,
  `Amount` int(10) NOT NULL,
  `Note` text,
  PRIMARY KEY (`PaymentID`),
  UNIQUE KEY `PaymentMethodID` (`PaymentMethodID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(12) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` text,
  `CategoryID` int(10) NOT NULL,
  `UnitPrice` double NOT NULL,
  `UnitsInStock` smallint(6) NOT NULL,
  `UnitsOnOrder` smallint(6) NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `Note` text,
  PRIMARY KEY (`ProductID`),
  UNIQUE KEY `CategoryID` (`CategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductDescription`, `CategoryID`, `UnitPrice`, `UnitsInStock`, `UnitsOnOrder`, `Picture`, `Note`) VALUES
(1, 'Samsung 250gb SSD', 'Samsung''s 250gb solid state drive has enough fast storage for any gamer!', 1, 100, 5, 0, 'samsung_ssd.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `ReviewID` int(12) NOT NULL AUTO_INCREMENT,
  `Description` text,
  `ProductID` int(12) NOT NULL,
  `Rate` int(1) NOT NULL,
  PRIMARY KEY (`ReviewID`),
  UNIQUE KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE IF NOT EXISTS `shippers` (
  `ShipperID` int(10) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(100) DEFAULT NULL,
  `CompanyAddresss` varchar(100) DEFAULT NULL,
  `PaymentMethodID` int(10) NOT NULL,
  `Note` text,
  PRIMARY KEY (`ShipperID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UsersID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `UserType` tinyint(1) NOT NULL,
  PRIMARY KEY (`UsersID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `Username`, `Password`, `UserType`) VALUES
(2, 'uAccess', '2f27cc9230ad19e67adb67c0004cf380ffeafeff', 0),
(3, 'chris', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0),
(4, 'Steve', 'c22b5f9178342609428d6f51b2c5af4c0bde6a42', 0),
(5, 'stop', 'c22b5f9178342609428d6f51b2c5af4c0bde6a42', 0),
(6, 'bill', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
