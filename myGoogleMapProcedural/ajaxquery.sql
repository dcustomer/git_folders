-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2022 at 10:01 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxquery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(5) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `city_lat` float(10,6) NOT NULL,
  `city_lng` float(10,6) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_lat`, `city_lng`) VALUES
(1, 'Dushanbe', 38.561241, 68.711533),
(2, 'Khujand', 40.286610, 69.566887),
(3, 'Kulob', 37.929039, 69.726273),
(4, 'Khorog', 37.499798, 71.516724);

-- --------------------------------------------------------

--
-- Table structure for table `city_pharmacies`
--

DROP TABLE IF EXISTS `city_pharmacies`;
CREATE TABLE IF NOT EXISTS `city_pharmacies` (
  `pharmacy_id` int(5) NOT NULL AUTO_INCREMENT,
  `pharmacy_name` varchar(100) DEFAULT NULL,
  `city_id` int(5) NOT NULL,
  `pharmacy_address` varchar(100) DEFAULT NULL,
  `pharmacy_lat` float(10,6) NOT NULL,
  `pharmacy_lng` float(10,6) NOT NULL,
  PRIMARY KEY (`pharmacy_id`),
  KEY `city_pharmacy` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_pharmacies`
--

INSERT INTO `city_pharmacies` (`pharmacy_id`, `pharmacy_name`, `city_id`, `pharmacy_address`, `pharmacy_lat`, `pharmacy_lng`) VALUES
(1, 'Pharmacy 1', 1, 'Dushanbe, Tajikistan', 38.568501, 68.743103),
(2, 'Pharmacy 2', 1, 'Dushanbe, Tajikistan', 38.569710, 68.745163),
(3, 'Pharmacy 3', 1, 'Dushanbe, Tajikistan', 38.584469, 68.759407),
(4, 'Pharmacy 4', 1, 'Dushanbe, Tajikistan', 38.560040, 68.745934),
(5, 'Pharmacy 5', 1, 'Dushanbe, Tajikistan', 38.571850, 68.788757),
(6, 'Pharmacy 1', 2, 'Khujand, Tajikistan', 40.313011, 69.638298),
(7, 'Pharmacy 2', 2, 'Khujand, Tajikistan', 40.296520, 69.586113),
(8, 'Pharmacy 3', 2, 'Khujand, Tajikistan', 40.302021, 69.613579),
(9, 'Pharmacy 4', 2, 'Khujand, Tajikistan', 40.275570, 69.604652),
(10, 'Pharmacy 1', 3, 'Kulob, Tajikistan', 37.986660, 69.829964),
(11, 'Pharmacy 2', 3, 'Kulob, Tajikistan', 37.964741, 69.808327),
(12, 'Pharmacy 3', 3, 'Kulod, Tajikistan', 37.905979, 69.801117),
(13, 'Pharmacy 1', 4, 'Khorog, Tajikistan', 37.590321, 71.534698),
(14, 'Pharmacy 2', 4, 'Khorog, Tajikistan', 37.694710, 71.507233);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `city_id` int(5) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_lat` float(10,6) NOT NULL,
  `city_lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`city_id`, `city_name`, `city_lat`, `city_lng`) VALUES
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902),
(5, 'Dushanbe', 12.345600, 45.678902);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city_pharmacies`
--
ALTER TABLE `city_pharmacies`
  ADD CONSTRAINT `city_pharmacy` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
