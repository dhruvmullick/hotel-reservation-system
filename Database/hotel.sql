-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2010 at 10:54 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` varchar(30) NOT NULL DEFAULT '0',
  `r_chkindt` date NOT NULL ,
  `r_chkoutdt` date NOT NULL ,
  `r_rooms` int(30) NOT NULL DEFAULT '0',
  `r_type` varchar(20) NOT NULL DEFAULT '',
  `r_spanyreq` varchar(200) NOT NULL DEFAULT '',
  primary key (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `r_chkindt`, `r_chkoutdt`, `r_rooms`, `r_type`, `r_spanyreq`) VALUES
('1', '2010-03-12', '2010-03-12', '1', 'Deluxe','no');
-- --------------------------------------------------------

--
-- Table structure for table `tariff`
--




CREATE TABLE IF NOT EXISTS `tariff` (
  `type` varchar(50) NOT NULL DEFAULT '',
  `inrsin` varchar(30) NOT NULL DEFAULT '0',
  `inrdbl` varchar(30) NOT NULL DEFAULT '0',
  `usdsin` varchar(30) NOT NULL DEFAULT '0',
  `usddbl` varchar(30) NOT NULL DEFAULT '0',
  `totroom` int(3) NOT NULL DEFAULT '0',
   primary key(`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tariff`
--

INSERT INTO `tariff` (`type`, `inrsin`, `inrdbl`, `usdsin`, `usddbl`, `totroom`) VALUES
('Standard', '2600', '3100', '80', '90', 100),
('Deluxe', '3100', '4200', '50', '80', 50),
('Super Deluxe', '3800', '4600', '90', '110', 15),
('Suite', '4100', '6200', '80', '100', 10);
-- --------------------------------------------------------



CREATE TABLE IF NOT EXISTS `maprr` (
  `r_id` varchar(30) NOT NULL,
  `room_number` INT(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

INSERT INTO `maprr` (`r_id`, `room_number`) VALUES
('1', '501');

-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `maprt` (
  `r_id` varchar(20) NOT NULL DEFAULT '0',
  `type` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `reservation`
--

INSERT INTO `maprt` (`r_id`, `type`) VALUES
('1', 'Standard');

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` varchar(20) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `User Name` varchar(100) NOT NULL DEFAULT '',
  `User Email` varchar(100) NOT NULL DEFAULT '',
  `User Company` varchar(50) NOT NULL DEFAULT '',
  `User Phone` varchar(20) NOT NULL DEFAULT '',
  `User Address` varchar(200) NOT NULL DEFAULT '',
  primary key(`Userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Password`, `User Name`, `User Email`, `User Company`, `User Phone`, `User Address`) VALUES
('admin', 'admin','admin','admin','admin','admin','admin');



CREATE TABLE IF NOT EXISTS `mapur` (
  `Userid` varchar(20) NOT NULL DEFAULT '',
  `r_id` varchar(20) NOT NULL DEFAULT '',
  primary key(`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `mapur` (`Userid`, `r_id`) VALUES
('admin','1');

-- CREATE TABLE IF NOT EXISTS `maprr` (
--   `room_number` INT(20) NOT NULL DEFAULT 0,
--   `r_id` INT(20) NOT NULL DEFAULT 0,
--   primary key(`r_id`)
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
--
-- INSERT INTO `maprr` (`room_number`, `r_id`) VALUES
-- ('501','1');

CREATE TABLE IF NOT EXISTS `room` (
  `room_number` INT(20) NOT NULL,
  `r_id` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
    `CheckIn Date` Date,
    -- change
    `ChechOut Date` Date,
    -- change
  primary key(`room_number`),
  foreign key(`type`) references tariff(`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `room` (`room_number`,`r_id`, `type`) VALUES
(501,'1','Standard');
