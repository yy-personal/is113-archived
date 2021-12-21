-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2019 at 07:08 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_club`
--
CREATE DATABASE IF NOT EXISTS `wad_club` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wad_club`;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(64) DEFAULT NULL,
  `ACTIVE` char(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`ID`, `NAME`, `ACTIVE`) VALUES
(1, 'Coffee Appreciation Club', 'Y'),
(2, 'PHP Supporters', 'Y'),
(3, 'Python Gourment Club', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `club_person`
--

DROP TABLE IF EXISTS `club_person`;
CREATE TABLE IF NOT EXISTS `club_person` (
  `CLUB_ID` int(11) NOT NULL,
  `PERSON_ID` int(11) NOT NULL,
  PRIMARY KEY (`CLUB_ID`,`PERSON_ID`),
  KEY `PERSON_ID` (`PERSON_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_person`
--

INSERT INTO `club_person` (`CLUB_ID`, `PERSON_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 16),
(2, 3),
(2, 4),
(2, 5),
(2, 10),
(2, 11),
(3, 8),
(3, 9),
(3, 10),
(3, 18),
(3, 19),
(3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`ID`, `NAME`) VALUES
(1, 'Apple Zhang'),
(2, 'Ben Yong'),
(3, 'Charles Tan'),
(4, 'Donny Wong'),
(5, 'Elaine Lee'),
(6, 'Lee Yong Zhang'),
(7, 'Chan Heng, Benedict'),
(8, 'Tan Kah Kee'),
(9, 'Huang Sarah'),
(10, 'Yong Chun'),
(11, 'April Zhang Limin'),
(12, 'Ong Kee Seng'),
(13, 'Charlie, Lim Fan'),
(14, 'Sarah Wong Chun Li'),
(15, 'Hong Kah, Blaine'),
(16, 'Ng Sarah'),
(17, 'Chen Ling'),
(18, 'Chao Charlie'),
(19, 'Kim Yong Jun'),
(20, 'Sarah Moon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
