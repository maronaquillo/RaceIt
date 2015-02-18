-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2015 at 07:22 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raceit`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_event_types`
--

CREATE TABLE IF NOT EXISTS `wp_event_types` (
`event_type_id` bigint(20) unsigned NOT NULL,
  `event_type_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_event_types`
--

INSERT INTO `wp_event_types` (`event_type_id`, `event_type_name`) VALUES
(1, 'Adventure Event'),
(2, 'Basketball Event');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_event_types`
--
ALTER TABLE `wp_event_types`
 ADD PRIMARY KEY (`event_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_event_types`
--
ALTER TABLE `wp_event_types`
MODIFY `event_type_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
