-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2019 at 11:20 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fz`
--
CREATE DATABASE IF NOT EXISTS `fz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fz`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'husen', 'husen'),
(4, 'hardik', 'hardik'),
(5, 'admin', 'admin'),
(6, 'hh', 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mo` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mo`, `email`, `subject`, `msg`) VALUES
(1, 'Husen Lokhandwala', '7016868559', 'husenlokhandwala1003@gmail.com', 'I forgot my password.', 'Please Send my password in my email id.     '),
(3, 'Hardik', '7890890783', 'hh2@gmail.com', 'husen', 'kjlafjjflsjdflajdf    '),
(4, 'hhhh', '8798787897', 'hh@gmail.com', 'hgfkjgj.h.jkgj', 'jyfhgmjgjhluouoibyiuvtuycrvut    ');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `dish_name` varchar(50) NOT NULL,
  `dish_price` int(5) NOT NULL,
  `dish_image` varchar(500) NOT NULL,
  `dish_catagory` varchar(50) NOT NULL,
  `dish_discription` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dish_name`, `dish_price`, `dish_image`, `dish_catagory`, `dish_discription`) VALUES
(2, 'Cutlets', 30, 'dish_images/f16bb6f4eee6c5951a8355077e820bc9cutlets.jpg', 'Fast_food', 'Nice Cutlets'),
(5, 'Roti Pizza', 99, 'dish_images/3f7e865b3b4ec15542739e8a2cc042efroti-pizza.jpg', 'Fast_food', 'Best Pizza'),
(6, 'Aloo Pattiss', 49, 'dish_images/f2a0a36a4108993fa425fd35b13435c4pattis.jpg', 'Fast_food', 'Fried Aloo pattiss is best. '),
(7, 'Masala Dosa', 99, 'dish_images/a8c86afdde0e6b43e7d37517fb800903masala dosa.jpg', 'South_Indian', 'Best Masala Dosa'),
(8, 'Cheese Burger', 50, 'dish_images/9f19f5ef78779333ccf5ba0c3b9e897eburger.jpg', 'Fast_food', 'This is a very nice and delisious food item!!:)'),
(9, 'Pizza', 149, 'dish_images/fe71a6efe15b39bbdfec2d8926c17be2Best Pizza.jpg', 'Fast_food', 'Pizza:)'),
(10, 'Spring Roll', 30, 'dish_images/434389113528679cdb05e3439737fd8aspringroll.jpeg', 'Chinese', 'Best Spring roll:)');

-- --------------------------------------------------------

--
-- Table structure for table `dishorder`
--

CREATE TABLE IF NOT EXISTS `dishorder` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_price` bigint(6) NOT NULL,
  `dish_image` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `Payment_method` varchar(50) NOT NULL,
  `Payment_status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `dishorder`
--

INSERT INTO `dishorder` (`id`, `userid`, `name`, `mo`, `email`, `street`, `village`, `pincode`, `state`, `dish_name`, `dish_price`, `dish_image`, `status`, `Payment_method`, `Payment_status`, `date`) VALUES
(7, '6', 'Husen Azizbhai', '7016868559', 'coder.husen@gmail.com', 'Near green chowk', 'Dhrangadhra', '363310', 'Gujarat', 'Cheese Burger', 50, 'dish_images/9f19f5ef78779333ccf5ba0c3b9e897eburger.jpg', 'delivered', 'COD', 'Successful', 'Sat-20-Jul-2019'),
(8, '7', 'kirtan sanghvi', '9909125999', 'kirtansanghvi@gmail.com', 'Near mahalaxmi cinema', 'Surendranagar', '363100', 'Gujarat', 'Spring Roll', 30, 'dish_images/434389113528679cdb05e3439737fd8aspringroll.jpeg', 'packed', 'Online', 'Successful', 'Sat-20-Jul-2019'),
(9, '6', 'Husen Lokhandwala', '7016868559', 'coder.husen@gmail.com', 'Vhoravad, Near masjid', 'Dhrangadhra', '363310', 'Gujarat', 'Cutlets', 30, 'dish_images/f16bb6f4eee6c5951a8355077e820bc9cutlets.jpg', 'order recieved', 'COD', 'Pending', 'Mon-29-Jul-2019'),
(10, '6', 'Husen', '7016868559', 'coder.husen@gmail.com', 'Near green chowk', 'Dhrangadhra', '363310', 'Gujarat', 'Pizza', 149, 'dish_images/fe71a6efe15b39bbdfec2d8926c17be2Best Pizza.jpg', 'delivered', 'COD', 'Successful', 'Sat-03-Aug-2019'),
(11, '6', 'Husen Lokhandwala', '7016868559', 'coder.husen@gmail.com', 'Vhoravad, Near masjid', 'Dhrangadhra', '363310', 'Gujarat', 'Masala Dosa', 99, 'dish_images/a8c86afdde0e6b43e7d37517fb800903masala dosa.jpg', 'delivered', 'COD', 'Successful', 'Fri-13-Sep-2019'),
(12, '6', 'Husen Lokhandwala', '7016868559', 'coder.husen@gmail.com', 'Vhoravad, Near masjid', 'Dhrangadhra', '363310', 'Gujarat', 'Aloo Pattiss', 49, 'dish_images/f2a0a36a4108993fa425fd35b13435c4pattis.jpg', 'delivered', 'Online', 'Successful', 'Fri-13-Sep-2019'),
(13, '6', 'Husen Lokhandwala', '7016868559', 'coder.husen@gmail.com', 'Vhoravad, Near masjid', 'Dhrangadhra', '363310', 'Gujarat', 'Spring Roll', 30, 'dish_images/434389113528679cdb05e3439737fd8aspringroll.jpeg', 'delivered', 'COD', 'Successful', 'Fri-13-Sep-2019');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Name_on_card` varchar(255) NOT NULL,
  `Card_number` varchar(255) NOT NULL,
  `exp_month` varchar(255) NOT NULL,
  `exp_yeat` varchar(255) NOT NULL,
  `cvv` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `Name_on_card`, `Card_number`, `exp_month`, `exp_yeat`, `cvv`) VALUES
(1, 'jtlekthiuyb', '9748921656340982', 'hk', 'jk', 787),
(2, 'jtlekthiuyb', '9748921656340982', 'hk', 'jk', 787),
(3, 'jtlekthiuyb', '9748921656340982', 'hk', 'jk', 787);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mo` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL,
  `p2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mo`, `email`, `p1`, `p2`) VALUES
(11, 'Hardik', '8798787897', 'hardiksorthiya6869@gmail.com', 'Abcd@123', 'Abcd@123'),
(6, 'Husen', '7016868559', 'coder.husen@gmail.com', 'Husen@123', 'Husen@123'),
(7, 'kirtan', '9909125999', 'kirtansanghvi@gmail.com', 'Abcd@123', 'Abcd@123'),
(12, 'husen', '7016867559', 'husenlokhandwala1003@gmail.com', 'Abcd@123', 'Abcd@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
