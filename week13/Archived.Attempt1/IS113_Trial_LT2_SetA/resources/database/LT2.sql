--
-- Database: `lt2`
--
DROP DATABASE IF EXISTS `2019lt2`;
CREATE DATABASE `2019lt2`;
USE `2019lt2`;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--
DROP TABLE IF EXISTS `response`;
CREATE TABLE `response` (
  `name` varchar(30) NOT NULL,
  `classLength` int NOT NULL,
  `semLength` int NOT NULL
);

--
-- Table structure for table `employee`
--
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `empId` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `role` varchar(5) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`empId`)
);

--
-- Table structure for table `spouse`
--
DROP TABLE IF EXISTS `spouse`;
CREATE TABLE `spouse` (
  `empId` int NOT NULL,
  `spouseName` varchar(20) NOT NULL
);

--
-- Table structure for table `child`
--
DROP TABLE IF EXISTS `child`;
CREATE TABLE `child` (
  `empId` int NOT NULL,
  `childName` varchar(20) NOT NULL,
  `childAge` int NOT NULL
);


--
-- Dumping data for table `response`, `employee`, `spouse`, `child` 
--

INSERT INTO `response` VALUES
('Andy', 3, 15),
('Bob', 2, 16);

INSERT INTO `employee` VALUES
(1,'Andrew','Admin','a'),
(2,'Bob','Admin','b'),
(3,'Cindy','User','c'),
(4,'Danny','User','d'),
(5,'Elvis','User','e');

INSERT INTO `spouse` VALUES
(1,'Amanda'),
(3,'Charlie'),
(5,'Elle');

INSERT INTO `child` VALUES
(1,'Alan', 8),
(1,'Adeline',3),
(1,'Ada',5),
(1,'Alison',10),
(3,'Chloe', 4),
(3,'Corrine',8),
(3,'Charmaine',3);

--
-- END OF DATA LOADING
--
