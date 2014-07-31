-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2014 at 04:49 PM
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
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `image`) VALUES
(1, 0, 'About', 'This is Introdue Page', ''),
(2, 0, 'Service', 'This is Service Page', ''),
(3, 0, 'Products', 'This is Products Page', ''),
(4, 0, 'Contact', 'This is Products Page', ''),
(5, 1, 'About 1', 'This is About 1 Page', ''),
(6, 1, 'About 2', 'This is About 2 Page', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `telephone`, `message`, `created`, `modified`) VALUES
(1, 'a', 'a@yahoo.com', '1234', '11233333333333', '2014-07-31 06:17:45', '2014-07-31 06:17:45');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `content`, `created`) VALUES
(1, 'bbbbbbbd', 'ccccccccccc', '2014-07-17 13:12:19'),
(3, 'a', 'ccc', '2014-07-30 03:07:16'),
(4, 'a', 'ccc', '2014-07-30 03:07:19'),
(5, 'a', 'cccdd', '2014-07-30 03:08:30');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created`, `modified`, `published`) VALUES
(19, 'ÄÆ°a Viá»‡t Nam Ä‘i lÃªn báº±ng IT', 'Trong nhá»¯ng nÄƒm gáº§n Ä‘Ã¢y, kinh táº¿ Viá»‡t Nam phÃ¡t triá»ƒn ráº¥t máº¡nh. Äá»ƒ cÃ³ thá»ƒ Ä‘i Ä‘áº¿n cuá»‘i con Ä‘Æ°á»ng phÃ¡t triá»ƒn Ä‘Ã³, ngoÃ i nhá»¯ng ngÃ nh sáº£n xuáº¥t, Viá»‡t Nam cáº§n lá»±a chá»n má»™t ngÃ nh cÃ´ng nghá»‡ mÅ©i nhá»n', '2014-07-30 07:26:12', '2014-07-30 07:39:05', 1),
(20, 'IT lÃ  cÃ´ng viá»‡c mÃ  báº¡n cÃ³ thá»ƒ lÃ m á»Ÿ báº¥t cá»© Ä‘Ã¢u', 'IT lÃ  cÃ´ng viá»‡c mÃ  báº¡n cÃ³ thá»ƒ lÃ m á»Ÿ báº¥t cá»© Ä‘Ã¢u, miá»…n lÃ  cÃ³ Ä‘Æ°á»ng truyá»n Internet. Äá»‘i vá»›i IT, chá»‰ cáº§n báº¡n lÃ m ra sáº£n pháº©m cÃ³ cháº¥t lÆ°á»£ng cao, khÃ´ng ai coi trá»ng viá»‡c báº¡n lÃ m ra nÃ³ á»Ÿ Ä‘Ã¢u cáº£.Náº¿u Ä‘Æ°á»£c Ä‘Ã o táº¡o Ä‘Ãºng cÃ¡ch, kÄ© sÆ° láº­p trÃ¬nh Viá»‡t Nam hoÃ n toÃ n cÃ³ thá»ƒ vÆ°Æ¡n lÃªn Ä‘áº³ng cáº¥p hÃ ng Ä‘áº§u tháº¿ giá»›i. ChÃºng tÃ´i Ä‘ang toÃ n tÃ¢m toÃ n Ã½ thá»±c hiá»‡n káº¿ hoáº¡ch Ä‘Ã³, vá»›i sá»± tham gia cá»§a nhá»¯ng kÄ© sÆ° dÃ y dáº¡n kinh nghiá»‡m Ä‘áº¿n tá»« Nháº­t Báº£n. ', '2014-07-30 07:26:39', '2014-07-30 07:39:02', 1),
(21, 'Framgia cáº§n nhá»¯ng ngÆ°á»i nhÆ° tháº¿ nÃ o?', 'NgÆ°á»i yÃªu láº­p trÃ¬nh, ngÃ y cuá»‘i tuáº§n cÅ©ng cÃ³ thá»ƒ ngá»“i láº­p trÃ¬nh hoáº·c lÃ m app vÃ¬ sá»Ÿ thÃ­ch.\r\n\r\nNgÆ°á»i thÃ­ch nhá»¯ng cÃ¡i má»›i, sáºµn sÃ ng há»c há»i kÄ© thuáº­t má»›i, kiáº¿n thá»©c má»›i, Ä‘Æ°Æ¡ng Ä‘áº§u vá»›i thá»­ thÃ¡ch má»›i.\r\n\r\nNgÆ°á»i giá»i vá» cÆ¡ cáº¥u, quy trÃ¬nh (quy trÃ¬nh training, quy trÃ¬nh QA, cÆ¡ cáº¥u Transparency...).', '2014-07-30 07:27:01', '2014-07-30 07:27:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT '0',
  `qty` smallint(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `qty`, `image`, `thumbnail`, `created`, `modified`) VALUES
(1, 1, 'Cáp Micro USB Pisen 800mm', 'Cáp Micro USB Pisen 800mm To change the content of this page, create: APP/views/pages/home.ctp.\r\nTo change its layout, create: APP/views/layouts/default.ctp.\r\nYou can also add some CSS styles for your pages at: APP/webroot/css.', '12', 1, '', '', '2014-07-21 00:00:00', '2014-07-21 00:00:00'),
(2, 2, 'Cáp Iphone 4 Pisen 800mm', 'Khách hàng may mắn trong vòng quay may mắn tại Khu trải nghiệm Công Nghệ Cao Phong Vũ', '0', 0, '', '', '2014-07-21 00:00:00', '2014-07-22 00:00:00'),
(3, 1, 'Cáp Micro USB Pisen 800mm', 'Cáp Micro USB Pisen 800mm To change the content of this page, create: APP/views/pages/home.ctp.\r\nTo change its layout, create: APP/views/layouts/default.ctp.\r\nYou can also add some CSS styles for your pages at: APP/webroot/css.', '12', 1, '', '', '2014-07-21 00:00:00', '2014-07-21 00:00:00'),
(4, 2, 'Cáp Iphone 4 Pisen 800mm', 'Khách hàng may mắn trong vòng quay may mắn tại Khu trải nghiệm Công Nghệ Cao Phong Vũ', '0', 0, '', '', '2014-07-21 00:00:00', '2014-07-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `group_id`, `active`, `created`, `modified`) VALUES
(1, 'vuhuytuan', 'e10adc3949ba59abbe56e057f20f883e', 'vuhuytuan89@gmail.com', 0, 1, 0, '2014-07-05 13:44:54', '2014-07-05 13:45:21'),
(2, 'framgia', 'e10adc3949ba59abbe56e057f20f883e', 'vu.huy.tuan@framgia.com', 0, 2, 0, '2014-07-05 13:45:11', '2014-07-05 13:45:17'),
(3, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'user@gmail.com', 0, 1, 1, '2014-07-08 09:22:11', '2014-07-08 09:22:14');

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
