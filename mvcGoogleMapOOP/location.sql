-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2022 at 09:51 AM
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
-- Database: `location`
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_lat`, `city_lng`) VALUES
(1, 'Dushanbe', 38.560661, 68.786903),
(2, 'Khujand', 40.286610, 69.566887),
(3, 'Kulob', 37.929039, 69.726273),
(4, 'Khorog', 37.499798, 71.516724),
(5, 'Gissar', 38.526909, 68.538078);

-- --------------------------------------------------------

--
-- Table structure for table `city_pharmacies`
--

DROP TABLE IF EXISTS `city_pharmacies`;
CREATE TABLE IF NOT EXISTS `city_pharmacies` (
  `pharmacy_id` int(5) NOT NULL AUTO_INCREMENT,
  `pharmacy_name` varchar(100) NOT NULL,
  `pharmacy_address` varchar(100) NOT NULL,
  `pharmacy_lat` float(10,6) NOT NULL,
  `pharmacy_lng` float(10,6) NOT NULL,
  `pharmacy_img` varchar(200) DEFAULT NULL,
  `city_id` int(5) NOT NULL,
  PRIMARY KEY (`pharmacy_id`),
  KEY `fk_cities_pharmacies` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city_pharmacies`
--

INSERT INTO `city_pharmacies` (`pharmacy_id`, `pharmacy_name`, `pharmacy_address`, `pharmacy_lat`, `pharmacy_lng`, `pharmacy_img`, `city_id`) VALUES
(1, 'Drug Store', 'Dushanbe, Tajikistan', 38.571861, 68.791191, 'img/dushPhar1.jpg', 1),
(2, 'Аптека / Атриет', 'Dushanbe, Tajikistan', 38.567841, 68.743210, 'img/dushPhar2.jpg', 1),
(3, 'Дорухона', 'Dushanbe, Tajikistan', 38.559109, 68.745438, 'img/dushPhar3.jpg', 1),
(4, 'Аптека Мадад', 'Dushanbe, Tajikistan', 38.546631, 68.775818, 'img/dushPhar4.jpg', 1),
(5, 'Дорухона(гизои спорти)', 'Dushanbe, Tajikistan', 38.551529, 68.801826, 'img/dushPhar5.jpg', 1),
(6, 'Pharmacy 1', 'Khujand, Tajikistan', 40.313011, 69.638298, NULL, 2),
(7, 'Pharmacy 2', 'Khujand, Tajikistan', 40.296520, 69.586113, NULL, 2),
(8, 'Pharmacy 3', 'Khujand, Tajikistan', 40.302021, 69.613579, NULL, 2),
(9, 'Pharmacy 4', 'Khujand, Tajikistan', 40.275570, 69.604652, NULL, 2),
(10, 'Pharmacy 1', 'Kulob, Tajikistan', 37.986660, 69.829964, NULL, 3),
(11, 'Pharmacy 2', 'Kulob, Tajikistan', 37.964741, 69.808327, NULL, 3),
(12, 'Pharmacy 3', 'Kulod, Tajikistan', 37.905979, 69.801117, NULL, 3),
(13, 'Pharmacy 1', 'Khorog, Tajikistan', 37.590321, 71.534698, NULL, 4),
(14, 'Pharmacy 2', 'Khorog, Tajikistan', 37.694710, 71.507233, NULL, 4),
(16, 'Pharmacy 10', 'Dushanbe, Tajikistan', 38.253456, 68.987656, NULL, 1),
(18, 'Somonpharmatsevtika', 'Gissar, Tajikistan', 38.524620, 68.561394, 'img/gisPhar2.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `login`, `pass`) VALUES
(1, 'Amin', 'Aminov', 'amin86@mail.ru', 'aminBro', 'amin'),
(2, 'john', 'johns', 'john23@mail.ru', 'johnBig', 'john'),
(3, 'ÑˆÐ°Ñ€Ð¸Ñ„', 'Ð Ð°Ð¼Ð°Ð·Ð¾Ð½Ð¾Ð²', 'sharif@mail.ru', 'sharifSheriff', 'asdf'),
(4, 'фарид', 'фаридов', 'farid87@mail.ru', 'farid', 'rarid'),
(5, 'amir', 'amirov', 'amir45@mail.ru', 'amir', '63eefbd45d89e8c91f24b609f7539942'),
(6, '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city_pharmacies`
--
ALTER TABLE `city_pharmacies`
  ADD CONSTRAINT `fk_cities_pharmacies` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
