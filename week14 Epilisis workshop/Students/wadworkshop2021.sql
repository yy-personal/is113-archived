-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2021 at 03:16 PM
-- Server version: 5.7.23
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
-- Database: `wadworkshop2021`
--
CREATE DATABASE `wadworkshop2021`;
USE  `wadworkshop2021`;
-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(100) COLLATE utf8_bin NOT NULL,
  `courseCode` varchar(100) COLLATE utf8_bin NOT NULL,
  `courseDesc` varchar(100) COLLATE utf8_bin NOT NULL,
  `weekOfDay` varchar(100) COLLATE utf8_bin NOT NULL,
  `startTime` varchar(100) COLLATE utf8_bin NOT NULL,
  `numUnits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `studentName`, `courseCode`, `courseDesc`, `weekOfDay`, `startTime`, `numUnits`) VALUES
(1, 'Apple LEE', 'IDIS001', 'Analytical Skills', 'TUE', '1330', 1),
(2, 'Apple LEE', 'IS112', 'Data Management', 'TUE', '830', 2),
(3, 'Apple LEE', 'IS113', 'Web Application Development', 'THU', '1530', 2),
(4, 'Apple LEE', 'WRIT001', 'Programme in Writing and Reasoning', 'MON', '1000', 1),
(5, 'Apple LEE', 'WRIT001', 'Programme in Writing and Reasoning', 'WED', '1000', 1),
(6, 'Bruce LOH', 'OBHR001', 'Leadership and Team Building', 'WED', '1200', 2),
(7, 'Bruce LOH', 'IS112', 'Data Management', 'TUE', '830', 2),
(8, 'Bruce LOH', 'IS113', 'Web Application Development', 'THU', '1530', 2),
(9, 'Bruce LOH', 'WRIT001', 'Programme in Writing and Reasoning', 'FRI', '1000', 1),
(10, 'Bruce LOH', 'WRIT001', 'Programme in Writing and Reasoning', 'WED', '1000', 1),
(11, 'Colin TEO', 'CS110', 'Great Ideas in Computer Science', 'TUE', '830', 2),
(12, 'Colin TEO', 'CS111', 'Programming Methodology', 'TUE', '1200', 2),
(13, 'Colin TEO', 'CS112', 'Database Systems', 'THU', '1530', 2),
(14, 'Colin TEO', 'CS113', 'Object Oriented Programming', 'MON', '830', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'JohnPhan', 'Password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
