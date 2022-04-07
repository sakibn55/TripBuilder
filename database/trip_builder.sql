-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 06:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip_builder`
--
CREATE DATABASE IF NOT EXISTS `trip_builder` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `trip_builder`;

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

DROP TABLE IF EXISTS `airlines`;
CREATE TABLE IF NOT EXISTS `airlines` (
  `airline_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`airline_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`airline_id`, `code`, `name`) VALUES
(1, 'AC', 'Air Canada'),
(3, 'QA', 'Qatar Airways'),
(4, 'YUL', 'Pierre Elliott Trudeau International');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

DROP TABLE IF EXISTS `airports`;
CREATE TABLE IF NOT EXISTS `airports` (
  `airport_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `city_code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `region_code` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  PRIMARY KEY (`airport_id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`airport_id`, `code`, `city_code`, `name`, `city`, `country_code`, `region_code`, `latitude`, `longitude`, `timezone`) VALUES
(1, 'YUL', 'YMQ', 'Pierre Elliott Trudeau International', 'Montreal', 'CA', 'QC', '45.457714', '-73.749908', 'America/Montreal'),
(2, 'YVR', 'YVR', 'Vancouver International', 'Vancouver', 'CA', 'BC', '49.194698', '-123.179192', 'America/Vancouver');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
CREATE TABLE IF NOT EXISTS `flights` (
  `flight_id` int(11) NOT NULL AUTO_INCREMENT,
  `airline` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `departure_airport` varchar(255) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_airport` varchar(255) NOT NULL,
  `arrival_time` time NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`flight_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_id`, `airline`, `number`, `departure_airport`, `departure_time`, `arrival_airport`, `arrival_time`, `price`) VALUES
(1, 'AC', 301, 'YUL', '07:35:00', 'YVR', '10:05:00', 273.23),
(2, 'AC', 302, 'YVR', '11:30:00', 'YUL', '19:11:00', 220.63),
(4, 'QA', 303, 'YUL', '08:35:00', 'YVR', '11:05:00', 300.63),
(5, 'QA', 304, 'YVR', '12:30:00', 'YUL', '20:11:00', 240.63),
(6, 'AC', 317, 'YUL', '07:35:00', 'YCC', '09:30:00', 146.42),
(7, 'AC', 318, 'YCC', '10:10:00', 'YVR', '10:38:00', 86.23),
(8, 'AC', 346, 'YVR', '11:30:00', 'YCC', '18:35:00', 75.41),
(9, 'AC', 347, 'YCC', '19:15:00', 'YUL', '19:46:00', 150.56);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
