-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2011 at 05:38 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `camp1` varchar(40) NOT NULL,
  `camp2` varchar(30) NOT NULL,
  `camp3` int(11) NOT NULL,
  `camp4` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `camp1`, `camp2`, `camp3`, `camp4`) VALUES
(1, 'Test camp 1', 'camp 2 test', 123213, 'camp 4 text type'),
(2, 'Test camp 1', 'camp 2 test', 123213, 'camp 4 text type'),
(11, '111111', '222222', 333333, '444444'),
(10, '1', '2', 3, '4'),
(9, 'test11', 'camp22', 555, 'test44'),
(8, 'testcamp1', 'camp2', 43243432, 'test'),
(12, '1', '2', 0, 'asdfdsfdsafa'),
(13, '123213', '3213213213', 312321, '12321321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
