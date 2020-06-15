-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2012 at 06:12 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `waste_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email_id`, `password`) VALUES
('gowtham', 'gowtham1906@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name_id`, `name`, `area`, `address`, `phone`, `email_id`, `password`) VALUES
(55, 'Selvarajbgihjbhjbvbb', 'AshokNagar', 'cscsc', '9262436660', '123@a.123', '123456'),
(56, 'skjfbsdhbvjhdbv f', 'Abiramapuram', 'fsf', '3333333333', 'dsas@fsf.vdevd', '111111'),
(57, 'gowtham', 'AvadiCampHO', 'jhdbhjdsgb', '9988774455', 'gowtham1906@gmail.com', '123456'),
(58, 'shirly', 'Adambakkam', 'wafewfve', '9999999999', 'fcas@jbn.fsfc', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `name_id` int(255) NOT NULL,
  `reference_number` int(50) NOT NULL AUTO_INCREMENT,
  `items` mediumtext NOT NULL,
  `trash_or_task` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  PRIMARY KEY (`reference_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`name_id`, `reference_number`, `items`, `trash_or_task`, `status`, `date`) VALUES
(55, 144, 'Computers,', 'Trash', 'New', '30-08-12'),
(55, 145, 'Copper,', 'Task', 'New', '30-08-12'),
(56, 146, 'Magazines,', 'Trash', 'New', '30-08-12'),
(56, 147, 'Brass,', 'Task', 'New', '30-08-12'),
(55, 150, 'Computers,', 'Task', 'New', '30-08-12'),
(57, 151, 'Computers,', 'Trash', 'New', '30-08-12'),
(57, 152, 'Brass,', 'Task', 'New', '30-08-12'),
(57, 153, 'Magazines,', 'Trash', 'New', '30-08-12'),
(57, 156, 'Aluminium,Batteries,Books,Bottles,Brass,', 'Trash', 'New', '31-08-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
