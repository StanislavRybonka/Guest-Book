-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 10:12 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guest.book.info`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_comment`
--

CREATE TABLE IF NOT EXISTS `users_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `users_id` varchar(255) NOT NULL,
  `browser_info` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users_comment`
--

INSERT INTO `users_comment` (`id`, `name`, `email`, `message`, `users_id`, `browser_info`, `comment_date`) VALUES
(1, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '1270', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:22:31'),
(2, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '1270', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:22:38'),
(3, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '127', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:24:07'),
(4, 'fddfdf', 'fgfgdfg@fgfgfggfg.com', 'dfdfgdggg', '127', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:26:11'),
(5, 'fddfdf', 'stanislav1991r@gmail.com', 'dfdfgdggg', '127', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:26:19'),
(6, 'fddfdf', 'stanislav1991r@gmail.com', 'dfdfgdggg', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:27:14'),
(7, 'Ben', 'fgfgdfg@fgfgfggfg.com', 'Hello', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:27:21'),
(8, 'Stanislav', 'stanislav1991r@gmail.com', 'Hello Stanislav', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:28:05'),
(9, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:30:06'),
(10, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-13 14:41:38'),
(11, 'Ben', 'stanislav1991r@gmail.com', 'Hello', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-16 20:31:37'),
(12, 'Petro', 'petro@gmail.com', 'Poka poka', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-18 15:44:54'),
(13, 'ddd', 'petro@gmail.com', 'Hello', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-18 16:34:13'),
(14, 'Den', 'den@gmail.com', 'Buy', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-18 17:09:30'),
(15, 'Vlad', 'vlad@gmail.com', 'I am vlad', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko/20100101 Firefox/46.0', '2016-05-18 18:18:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
