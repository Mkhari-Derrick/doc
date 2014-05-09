-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 10:45 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Apr 20, 2014 at 04:13 PM
-- Last update: Apr 20, 2014 at 04:25 PM
--

CREATE TABLE IF NOT EXISTS `admin` (
  `add_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cell` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `re_password` varchar(20) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`add_id`, `name`, `surname`, `username`, `email`, `cell`, `password`, `re_password`) VALUES
(1, 'you', 'me', 'there', 'avelomaboti@gmail.co', '07884542', '124', '124'),
(2, 'you', 'me', 'there', 'avelomaboti@gmail.co', '07884542', '124', '124');

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--
-- Creation: Apr 21, 2014 at 07:45 PM
-- Last update: May 07, 2014 at 04:51 AM
--

CREATE TABLE IF NOT EXISTS `comp` (
  `comp_id` int(10) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(50) NOT NULL,
  `comp_vendor` varchar(50) NOT NULL,
  `comp_price` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `comp_serial` varchar(50) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`comp_id`, `comp_name`, `comp_vendor`, `comp_price`, `category`, `comp_serial`) VALUES
(14, 'giddy', 'austine', '45.00', 'hardrive', '12345'),
(10, 'eeeee', 'hgg', '100', 'hardrive', 'vhtdgh'),
(12, 'mecer', 'mab', '12.00', 'mouse', '4578'),
(13, 'samsung', 'mab', '78.00', 'keyboard', '7845');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
-- Creation: May 09, 2014 at 01:04 AM
-- Last update: May 09, 2014 at 01:30 AM
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('nhlamulo', 'hard drives', 'anhlamulo@yahoo.com', 'ssssss');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Apr 20, 2014 at 01:11 PM
-- Last update: May 08, 2014 at 11:24 PM
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `re_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `username`, `email`, `cell`, `password`, `re_password`) VALUES
(1, 'maboti', 'vona', 'maboti', 'avelomaboti@gmail.com', '0714638763', '1234', '1234'),
(2, 'name', 'sur', 'user', 'anhlamulo@yahoo.com', '5478', '125', '125'),
(3, 'nhlamulo', 'mafuks', 'baloyi', 'anhlamulo@yahoo.com', '0791482618', '12345', '12345'),
(4, 'collen', 'baloyi', 'colbaz', 'collen@gmail.com', '0815246688', '1999', '1999'),
(5, 'derri', 'mkhari', 'matshe', 'mkhariderrick@gmail.com', '0733514425', '4425', '4425'),
(6, 'maboti', 'mafukele', 'maboti', 'anhlamulo@yahoo.com', '0791482618', '1234', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
