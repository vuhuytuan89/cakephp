-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2014 at 06:44 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `region`) VALUES
(1, 'Customer  Services', 'Uk'),
(2, 'Sale', 'VietNam'),
(3, 'Press Office', 'UK'),
(4, 'Marketing', 'US'),
(5, 'Online Marketing', 'UK'),
(6, 'Human recourse', NULL),
(12, 'aaaaaa', 'vvvvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `images`) VALUES
(1, '20.jpg'),
(2, '21.jpg'),
(3, '22.jpg'),
(4, '20.jpg'),
(5, '21.jpg'),
(6, 'th0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `content`, `created`) VALUES
(1, 'bbbbbbb', 'ccccccccccc', '2014-07-17 13:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created`, `modified`, `published`) VALUES
(1, 'Tài li?u Practical C Programming P1 doc', 'The SQL schema shown in Listing 2-1 will handle basic post information. If you like, you \r\ncan add more fields, such as a oqii]nufield to store summaries of posts. \r\nNow, let’s insert some sample post information into our lkopotable, using the following \r\nSQL statements:', '2014-07-15 14:09:15', '2014-07-15 14:09:18', 1),
(2, 'Tài li?u Practical Database Programming With Visual', 'The SQL schema shown in Listing 2-1 will handle basic post information. If you like, you \r\ncan add more fields, such as a oqii]nufield to store summaries of posts. \r\nNow, let’s insert some sample post information into our lkopotable, using the following \r\nSQL statements:', '2014-07-15 14:09:53', '2014-07-15 14:09:56', 1),
(3, 'Tài li?u Practical C Programming P1 doc', 'The SQL schema shown in Listing 2-1 will handle basic post information. If you like, you \r\ncan add more fields, such as a oqii]nufield to store summaries of posts. \r\nNow, lets insert some sample post information into our lkopotable, using the following \r\nSQL statements:', '2014-07-15 14:09:15', '2014-07-15 14:09:18', 1),
(4, 'Tài li?u Practical Database Programming With Visual', 'The SQL schema shown in Listing 2-1 will handle basic post information. If you like, you \r\ncan add more fields, such as a oqii]nufield to store summaries of posts. \r\nNow, lets insert some sample post information into our lkopotable, using the following \r\nSQL statements:', '2014-07-15 14:09:53', '2014-07-15 14:09:56', 1),
(5, 'aaaaaa', 'sssss', '2014-07-15 08:41:01', '2014-07-15 08:41:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `gender` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `group_id`, `active`, `created`, `modified`) VALUES
(1, 'vuhuytuan', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 0, '2014-07-05 13:44:54', '2014-07-05 13:45:21'),
(2, 'framgia', 'e10adc3949ba59abbe56e057f20f883e', 0, 2, 0, '2014-07-05 13:45:11', '2014-07-05 13:45:17'),
(3, 'user', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 1, '2014-07-08 09:22:11', '2014-07-08 09:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `widgets`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
