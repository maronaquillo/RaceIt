-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 10:13 AM
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
-- Table structure for table `wp_events`
--

CREATE TABLE IF NOT EXISTS `wp_events` (
`event_id` bigint(20) unsigned NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_timezone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_address1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_state` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `event_province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_postal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `event_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_shortname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_description` text COLLATE utf8_unicode_ci NOT NULL,
  `event_details` text COLLATE utf8_unicode_ci NOT NULL,
  `event_organizer` bigint(20) unsigned NOT NULL,
  `event_type` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_events`
--
ALTER TABLE `wp_events`
 ADD PRIMARY KEY (`event_id`), ADD KEY `event_organizer` (`event_organizer`), ADD KEY `event_organizer_2` (`event_organizer`), ADD KEY `event_organizer_3` (`event_organizer`), ADD KEY `event_type` (`event_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_events`
--
ALTER TABLE `wp_events`
MODIFY `event_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_events`
--
ALTER TABLE `wp_events`
ADD CONSTRAINT `wp_events_ibfk_1` FOREIGN KEY (`event_organizer`) REFERENCES `wp_users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `wp_events_ibfk_2` FOREIGN KEY (`event_type`) REFERENCES `wp_event_types` (`event_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
