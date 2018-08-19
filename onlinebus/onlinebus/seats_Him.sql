-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 09:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busschedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `seats6` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `seats6` (`id`,`username`,`email`,`seats`,`s1`,`s2`,`s3`,`s4`)VALUES
(1,NULL,NULL,'A',NULL,NULL,NULL,NULL),
(2,NULL,NULL,'B',NULL,NULL,NULL,NULL),
(3,NULL,NULL,'C',NULL,NULL,NULL,NULL),
(4,NULL,NULL,'D',NULL,NULL,NULL,NULL),
(5,NULL,NULL,'E',NULL,NULL,NULL,NULL),
(6,NULL,NULL,'F',NULL,NULL,NULL,NULL),
(7,NULL,NULL,'G',NULL,NULL,NULL,NULL),
(8,NULL,NULL,'H',NULL,NULL,NULL,NULL),
(9,NULL,NULL,'I',NULL,NULL,NULL,NULL),
(10,NULL,NULL,'J',NULL,NULL,NULL,NULL);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
