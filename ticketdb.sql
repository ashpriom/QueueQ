-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2010 at 08:51 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `ticket_id` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`ticket_id`, `message`, `status`) VALUES
('4089', 'oop', 'Invalid'),
('4089', '', ''),
('4089', 'oop', 'Invalid'),
('4089', '', ''),
('4089', 'sdfsdfsf', ''),
('4089', 'sdfsdfsf', ''),
('4089', 'sdfsdfsf', ''),
('4089', 'keno', 'Resolved'),
('4089', 'keno', 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `title` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `details` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `dept_name` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `name`, `email`, `title`, `details`, `dept_name`) VALUES
('4089', 'op', 'op@yahoo.com', 'op', 'op', 'Customer Support'),
('18307', 'dasa', 'dasa@gmail.com', 'dasa', 'dasa', 'Customer Support');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_history`
--

CREATE TABLE IF NOT EXISTS `ticket_history` (
  `ticket_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `details` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ticket_history`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ticket_id` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ticket_id`, `message`, `status`) VALUES
('4089', 'vv', ''),
('4089', 'vv', ''),
('4089', 'fgfgdfgd', ''),
('4089', 'fgfgdfgd', '');
