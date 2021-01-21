-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2021 at 06:50 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_comment`
--

DROP TABLE IF EXISTS `admin_comment`;
CREATE TABLE IF NOT EXISTS `admin_comment` (
  `cm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adcome` varchar(400) NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_comment`
--

INSERT INTO `admin_comment` (`cm_id`, `adcome`, `uname`) VALUES
(15, 'oipiopukjh', 'gramodayatest'),
(16, 'opiopiuyi', 'gramodayatest'),
(17, 'welcome to gramodya', 'gramodaya'),
(18, 'hello everyone', 'gramodaya'),
(20, 'hello everyone', 'gramodayatest'),
(29, 'specific comment for single user.', 'gramodaya'),
(30, 'warmly welcome to gramodaya.', 'newmadusha'),
(37, 'reply to new menmber', 'madusha'),
(36, 'kasun comment reply', 'kasun');

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

DROP TABLE IF EXISTS `admin_register`;
CREATE TABLE IF NOT EXISTS `admin_register` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`admin_id`, `user_name`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bank_donation`
--

DROP TABLE IF EXISTS `bank_donation`;
CREATE TABLE IF NOT EXISTS `bank_donation` (
  `bkid` int(11) NOT NULL AUTO_INCREMENT,
  `bdname` varchar(20) NOT NULL,
  `bdamou` varchar(400) NOT NULL,
  PRIMARY KEY (`bkid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_donation`
--

INSERT INTO `bank_donation` (`bkid`, `bdname`, `bdamou`) VALUES
(48, 'newmadusha', '5000'),
(41, 'root', '5000'),
(57, 'madusha', '5000'),
(58, 'newmadusha', '1000'),
(59, 'newmadusha', '1000'),
(60, 'newmadusha', '1000'),
(61, 'newmadusha', '5000'),
(62, 'newmadusha', '5000'),
(63, 'newmadusha', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `comt` varchar(400) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `uname`, `comt`) VALUES
(116, 'madusha', 'hey i am new to site'),
(108, 'kasun', 'i am new member for gramodaya.'),
(115, 'newmadusha', 'test comment');

-- --------------------------------------------------------

--
-- Table structure for table `help_desk`
--

DROP TABLE IF EXISTS `help_desk`;
CREATE TABLE IF NOT EXISTS `help_desk` (
  `helpdesk_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `reason` varchar(800) NOT NULL,
  PRIMARY KEY (`helpdesk_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help_desk`
--

INSERT INTO `help_desk` (`helpdesk_id`, `name`, `email`, `reason`) VALUES
(41, 'madusha', 'np.madushamethsiri91@gmail.com', 'can you organazie eye clinic in our area'),
(26, 'raja', 'bkabilraj@gmail.com', 'study'),
(28, 'chathumal', 'rpgachathumal@gmail.com', 'flood');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

DROP TABLE IF EXISTS `job_application`;
CREATE TABLE IF NOT EXISTS `job_application` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `initial_name` char(30) NOT NULL,
  `nic_no` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `gender` char(10) NOT NULL,
  `contact` int(20) NOT NULL,
  `hiegher_edu` varchar(400) NOT NULL,
  `wexpirience` char(10) NOT NULL,
  `abwexpirience` varchar(400) DEFAULT NULL,
  `contact_1` int(20) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`job_id`, `full_name`, `initial_name`, `nic_no`, `email`, `gender`, `contact`, `hiegher_edu`, `wexpirience`, `abwexpirience`, `contact_1`) VALUES
(86, 'maduhsa methsiri', 'M.methsiri', NULL, 'np.madushamethsiri91@gmail.com', 'male', 717210866, 'i did charted', 'yes', NULL, 775678656),
(81, 'anushka chathumal', 'r.p.g.a.chathumal', '961951429v', 'rpgachathumal@gamil.com', 'male', 766130950, 'i did charted', 'yes', '2 year', 115879635),
(85, 'anushka chathumal', 'r.p.g.a.chathumal', NULL, 'a.k.chamantha@gmail.com', 'male', 1234567890, 'i did charted', 'yes', NULL, 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission`) VALUES
(12, 'we are succusfully organize two eye clinc in last month'),
(13, 'we could eble to give 5 scholarships to selected students in last month');

-- --------------------------------------------------------

--
-- Table structure for table `physical_donation`
--

DROP TABLE IF EXISTS `physical_donation`;
CREATE TABLE IF NOT EXISTS `physical_donation` (
  `pd_id` int(10) NOT NULL AUTO_INCREMENT,
  `pdname` varchar(20) NOT NULL,
  `contac` int(3) NOT NULL,
  `contact` int(7) NOT NULL,
  `pdam` varchar(400) NOT NULL,
  PRIMARY KEY (`pd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_donation`
--

INSERT INTO `physical_donation` (`pd_id`, `pdname`, `contac`, `contact`, `pdam`) VALUES
(104, 'madusha', 70, 1234567, '100 story books'),
(103, 'newmadusha', 70, 1234567, 'test'),
(102, 'newmadusha', 70, 1234567, 'book');

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

DROP TABLE IF EXISTS `register_form`;
CREATE TABLE IF NOT EXISTS `register_form` (
  `register_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `contact_1` int(10) NOT NULL,
  `contact_2` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `con_pass` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `last_login` datetime(1) DEFAULT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`register_id`, `user_name`, `contact_1`, `contact_2`, `email`, `password`, `con_pass`, `dob`, `gender`, `last_login`) VALUES
(45, 'mathu', 70, 1234567, 'bkabilraj@gmail.com', '1234', '1234', '2018-09-05', 'male', NULL),
(46, 'raja', 70, 3350214, 'raj@gamil.com', '1234', '1234', '2018-08-08', 'male', NULL),
(49, '4555', 70, 1231, 'np.madushamethsiri81@gmail.com', '12wq', '12wq', '2019-08-02', 'female', NULL),
(36, 'madushamethsiri', 70, 123432, 'np.madushamethsiri81@gmail.com', '12345', '12345', '2018-10-12', 'female', NULL),
(58, 'madusha23', 70, 1234523, 'np.madushamethsiri81@gmail.com', '1234', '1234', '2019-11-20', 'male', NULL),
(70, 'user', 70, 1234567, 'np.madushamethsiri81@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234', '2020-02-15', 'male', NULL),
(71, '6767', 70, 1234567, 'np.madushamethsiri81@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234', '2020-02-15', 'male', NULL),
(72, 'fdgfg', 70, 1234567, 'np.madushamethsiri81@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1234', '2020-02-08', 'male', NULL),
(73, 'newuser', 70, 1234567, 'lchamantha@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-02-29', 'male', NULL),
(74, 'test', 70, 1231231, 'sdfs@ddfdf', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-02-15', 'male', '2020-12-04 07:32:10.0'),
(75, 'gramodaya', 77, 1234567, 'rgrgrfg@fsdf.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2000-03-21', 'male', '2020-03-15 22:04:27.0'),
(76, 'anushka', 70, 1334895, 'rpgachathumal@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1995-05-05', 'male', NULL),
(77, 'kasun', 70, 1234567, 'kasun@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1995-04-12', 'male', NULL),
(78, 'gramodayatest', 70, 1234567, 'ddfgfgf@fdfdftest', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2000-02-10', 'male', NULL),
(79, 'newmadusha', 70, 1234567, 'gdfgdfg@dgfgf.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2000-12-10', 'male', '2020-12-04 10:12:24.0'),
(80, 'methsiri', 70, 1234567, 'lcffgfghgfhamantha@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1990-11-17', 'male', NULL),
(81, 'madusha', 70, 1234567, 'np.madushamethsiri91@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1990-06-10', 'male', '2020-11-27 20:39:36.0');

-- --------------------------------------------------------

--
-- Table structure for table `up_coming_events`
--

DROP TABLE IF EXISTS `up_coming_events`;
CREATE TABLE IF NOT EXISTS `up_coming_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `date1` date NOT NULL,
  `description1` varchar(600) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_coming_events`
--

INSERT INTO `up_coming_events` (`event_id`, `date1`, `description1`) VALUES
(22, '2020-06-30', 'medical clinic'),
(24, '2020-06-26', 'seminor for student in badulla town area'),
(23, '2020-06-23', 'tree planting');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
