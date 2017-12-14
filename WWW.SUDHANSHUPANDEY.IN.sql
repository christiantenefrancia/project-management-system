-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2015 at 05:52 AM
-- Server version: 5.5.35-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jai`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(8) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `mail`, `comment`, `post_id`, `date`) VALUES
(40, 'Sudhanshu Pandey', 'sudhanshu.pandey159@gmail.com', 'use your real email to see gravator image in comments also tell us how you like this post about the great wall of china..i captured this photosphere on my china trip for photo shoots for my projects,also remember you can also use html format like<a href="http://www.sudhanshupandey.in">Click Here</a>', 1, '2015-01-30 12:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(124) NOT NULL,
  `post_body` varchar(4000) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_body`) VALUES
(1, 'The Great Wall Of China By Sudhanshu Pandey - Google Maps', '<iframe width="680" height="360" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?layer=c&amp;panoid=zNObRPn6CfYAAAQZJQFksQ&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C2.807200000000023%2C%2C0%2C0"></iframe><div><small><a href="https://www.google.com/maps/views/" style="color:#0000FF; text-align:left">Views</a>: <a href="https://www.google.com/maps/views/view/116135205617339345762/gphoto/6098678871343213842" style="color:#0000FF; text-align:left">Great Wall of China #greatwallofchina   #photosphere Ancient world wonder that winds for more than 5,500 miles across China, with towers &amp; walkways.- Google</a> by <a href="https://www.google.com/maps/views/profile/116135205617339345762" style="color:#0000FF; text-align:left">Sudhanshu Pandey</a></small></div>\n<p></p>\n<p><strong>About The Great Wall</strong></p></p>\n<p>The Great Wall of China is a series of fortifications made of stone, brick, tamped earth, wood, and other materials, generally built along an east-to-west line across the historical northern borders of China to protect the Chinese states and empires against the raids and invasions of the various nomadic groups of the Eurasian Steppe. Several walls were being built as early as the 7th century bc; these, later joined together and made bigger and stronger, are now collectively referred to as the Great Wall. Especially famous is the wall built 220 To 206 bc by Qin Shihuang, the First Emperor of China. Little of that wall remains. Since then, the Great Wall has on and off been rebuilt, maintained, and enhanced; the majority of the existing wall is from the Ming Dynasty. \n<p align="center"><a href="http://www.buyphp.org/buy-scripts/php-scripts/php-ajax-live-comment-system/"><img src="http://www.buyphp.org/buy-scripts/wp-content/uploads/2015/01/download-button-1272012.gif" width="200" height="40" /></a></p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
