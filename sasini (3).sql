-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2023 at 07:28 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasini`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `phone` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `massege` varchar(2000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `phone`, `email`, `address`, `massege`) VALUES
(1, 'ushshanka', 712345533, 'ushshanka@gmail.com', 'colombo', '                        good');

-- --------------------------------------------------------

--
-- Table structure for table `empreg`
--

DROP TABLE IF EXISTS `empreg`;
CREATE TABLE IF NOT EXISTS `empreg` (
  `Fid` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `conpass` varchar(10) NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `empreg`
--

INSERT INTO `empreg` (`Fid`, `fname`, `email`, `Password`, `conpass`) VALUES
(1, 'sasini', 'sasinitaneesha', 'Kast1234*', ''),
(2, 'tanee', 'tanee@gmail.com', 'tanee12', ''),
(6, '', 'kavindu@gmail.com', 'ka12', ''),
(7, 'santa', 'santa@gmail.com', 'santa1', ''),
(8, 'dulani', 'dulani1@gmail.com', '34', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `package` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `qty` int NOT NULL,
  `total` int NOT NULL,
  `order_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` int NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `order_type` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `package`, `price`, `qty`, `total`, `order_date`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `hotel`, `order_type`) VALUES
(5, 'Lunch Menu 02', 3000, 2, 6000, '2023-07-16', 'sasini tanee', 712345678, 'sasinitaneesha@gmail.com', 'horana', 'Signature_cuisine_galle', 'dine_in'),
(4, 'Breakfast Menu 01', 1500, 1, 1500, '2023-07-16', 'Sayuru De Alwis', 715801256, 'sayurudealwis99@gmail.com', '27. Ayurvedha Medical College Road, Rajagiriya', 'Signature_cuisine_colombo', 'dine_in'),
(11, 'Breakfast Menu 01', 1500, 2, 3000, '2023-07-25', 'ushshanka', 712345678, 'ushshanka@gmail.com', 'colombo', 'Signature_cuisine_colombo', 'dine_in');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `pacTitle` varchar(100) NOT NULL,
  `Pprice` int NOT NULL,
  `description` varchar(5000) NOT NULL,
  `pack_identifire` int NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pacTitle`, `Pprice`, `description`, `pack_identifire`) VALUES
(1, 'Breakfast Menu 01', 1500, 'Kiribath (2pcs),\r\nKatta Sambol,\r\n Fish Ambulthiyal,\r\n Red Rice,\r\n Potato White Curry or Dhal Curry (Select One),\r\n Tomato Curry,\r\n Seeni Sambol,\r\nVegetable Noodles', 1),
(2, 'Breakfast Menu 02', 1750, 'Kiribath (2pcs), \r\nKatta Sambol, \r\nPotato, \r\nWhite Curry or Dhal Curry (Select One), \r\nTomato Curry, \r\nSeeni Sambol, \r\nPlain Hoppers & Egg Hoppers,\r\n Miris Malu,\r\n Vegetable Noodles', 1),
(4, 'Lunch Menu 02', 3000, 'Steamed Basmathi Rice, \r\nPapadam,\r\n Fish Cutlet, \r\nFish Ambulthiyal,\r\n Dhal Curry,\r\n Tomato & Onion Salad,\r\n Ghee Rice with Crispy Onion, \r\nBrinjal Pehi, \r\nChicken Mustard Dry Curry ,\r\nPork Pepper Curry or Tempered Cuttle Fish (Select One) ,\r\nVegetable Khorma,\r\n Potato Curry or Tomato Curry (Select One)', 2),
(3, 'Lunch Menu 01', 2800, 'Steamed Basmathi Rice, \r\nChick Pea Salad,\r\n Vegetable Fried Rice,\r\n Potato Tempered,\r\n Brinjal Morju, \r\nPapadam, \r\nChatti Roast Chicken with Hot Gravy,\r\n Tomato & Onion Salad Mustard,\r\n Fish Curry, \r\nFresh Green Bean Curry', 2),
(5, 'Dinner Menu 01', 2450, 'Chicken Fried Rice,\r\n Chilli Chicken,\r\n Vegetable Chopsuey,\r\n Stir Fried, \r\nVegetable Noodles, \r\nSweet & Sour Fish Fried, \r\nGarlic & Kankung,\r\n Fresh Mushroom Devilled', 3),
(6, 'Dinner Menu 02', 1750, 'Mixed Vegetable Curry, \r\n Cream Caramel or Chocolate Biscuit Pudding (Select One), \r\nFish Cutlet,\r\n  Vegetable Biriyani,\r\n Roast Chicken with Spicy Gravy,\r\n Savoury Egg,\r\n  Raita ,\r\n Fresh Mint Sambol', 3);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpass` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`userid`, `username`, `email`, `password`, `conpass`, `isAdmin`) VALUES
(1, 'kavindu', 'kavindu@gmail.com', 'ka12', '', NULL),
(2, 'ushshanka', 'ushshanka@mail.com', 'u12', '', NULL),
(17, 'santha', 'santha@gmail.com', '44', '', NULL),
(16, 'dulani1', 'dulani1@gmail.com', '34', '', NULL),
(15, 'Sayuru De Alwis', 'sayuru99@sasinimodaya.com', '99', '', NULL),
(13, 'santa', 'santa@gmail.com', 'santa1', '', NULL),
(18, 'Sayuru99', 'sayurudealwis99@gmail.com', 'sayuru123', 'sayuru123', 1),
(19, 'kavindu Ushshanka', 'ushshanka@gmail.com', 'u123', '', NULL),
(20, 'malsha', 'malsha@gmail.com', 'mal1', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
