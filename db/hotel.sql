-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 12:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) 

CREATE TABLE reservation (
    firstname varchar(20), 
    lastname varchar(20), 
    email varchar(50), 
    mobile BIGINT, 
    age INT, 
    alternate BIGINT, 
    adults INT, 
    children INT, 
    checkin DATE, 
    checkout DATE, 
    roomtype VARCHAR(20), 
    room INT, 
    message VARCHAR(100)
)

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`firstname`, `lastname`, `email`, `mobile`, `message`) VALUES
('Jatin', 'Bagai', 'jatinbagai2001cool@gmail.com', 8287816810, 'Hello 1st'),
('hey', 'hey', 'heyheyhey@hey.com', 8327267373, ''),
('jatin', 'kanishka', 'abcd@abcd.com', 1234567890, 'abcd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
