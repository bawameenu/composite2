-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2018 at 09:22 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `pwd` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `email`, `fname`, `lname`, `pwd`) VALUES
(1, 'abc@gmail.com', 'bhavik', 'shah', '12345'),
(5, 'bhavikshah246@gmail.com', 'John', 'Bravo', '1234'),
(6, 'bhavikshah246@gmail.com', 'ok', 'ok', '789');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `name` text NOT NULL,
  `city` text NOT NULL,
  `images` text NOT NULL,
  `disc` text NOT NULL,
  `night` int(50) NOT NULL,
  `guest` int(50) NOT NULL,
  `service` int(50) NOT NULL,
  `tax` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`name`, `city`, `images`, `disc`, `night`, `guest`, `service`, `tax`, `price`, `status`) VALUES
('Zen Palace', 'Montreal', 'images/1.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 150, 0),
('V-Star', 'Montreal', 'images/2.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 250, 0),
('SpeedBiz', 'Montreal', 'images/3.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 100, 0),
('Sweet Home', 'Montreal', 'images/4.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 75, 0),
('Yash palace', 'Montreal', 'images/5.jpg', 'Includes information like phone numbers, email addresses, and shipping addresses', 0, 0, 0, 0, 300, 0),
('RAYWHITE', 'Toronto', 'images/7.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 1150, 0),
('5-Star', 'Toronto', 'images/10.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 2500, 0),
('Sweet Bazaar', 'Toronto', 'images/8.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 150, 0),
('Brand Palace', 'Toronto', 'images/9.jpg', 'Use TAB key to move from value to value, or CTRLarrows to move anywhere\r\n', 0, 0, 0, 0, 875, 0),
('Galaxy', 'Toronto', 'images/1.jpg', 'Includes information like phone numbers, email addresses, and shipping addresses', 0, 0, 0, 0, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE IF NOT EXISTS `room_booking` (
  `user` text NOT NULL,
  `name` text NOT NULL,
  `total` int(60) NOT NULL,
  `night` int(80) NOT NULL,
  `guest` int(50) NOT NULL,
  `service` int(60) NOT NULL,
  `tax` int(82) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`user`, `name`, `total`, `night`, `guest`, `service`, `tax`) VALUES
('John', 'V-Star', 615, 1, 1, 10, 13),
('ok', 'Sweet Bazaar', 185, 1, 1, 10, 13);
