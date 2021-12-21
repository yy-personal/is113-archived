--
-- Database: `trial_lt2`
--
DROP DATABASE IF EXISTS `trial_lt2`;
CREATE DATABASE `trial_lt2`;
USE `trial_lt2`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `student_id` varchar(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`,`course_id`)
);

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`student_id`, `course_id`) VALUES
('1', 'IS112'),
('1', 'IS113'),
('2', 'BUS101'),
('2', 'BUS102'),
('3', 'IS113'),
('4', 'BUS101');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `school` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `school`) VALUES
('1', 'Bob', 'SIS'),
('2', 'Jim', 'LKCSB'),
('3', 'Jill', 'SIS'),
('4', 'Andrew', 'LKCSB');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(300) NOT NULL,
  `membership_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
);
--
-- Dumping data for table `account`
--

INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (1, 'John Lennon', 'john', '$2y$10$nUOnwTr4dIL9tknjDgqvXeS9RBCo8DlJYHiJuAq9tgCanj58FTrre', 'Regular');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (2, 'Paul McCartney', 'paul', '$2y$10$Hz7Q7KybHyAKKaH.FXTqcOBc0us8oUBziSF2oAzWbMCJOJJUnN0DO', 'Regular');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (3, 'Ringo Starr', 'ringo', '$2y$10$EsXkjl6veL50Zxz0231JYu5E.Rz24mnJGkgkTI1l1OHs8ksltKtYG', 'Premium');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (4, 'Michael Jackson', 'michael', '$2y$10$SOQnNZjLRnS8dAAYw2lSp.88JailkXJ24urwz4WWPgiEzLlFSgaBu', 'Premium');
INSERT INTO account (id, fullname, username, password_hash, membership_type) VALUES (5, 'Justin Bieber', 'justin', '$2y$10$nU5kcjpXJ3gCs5nqTuuZ2eT9EwgzNpVmvOhKA/QrPTpPc1pWsAq/a', 'Regular');

