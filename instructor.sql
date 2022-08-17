-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 06:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerforfaculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerfa`
--

CREATE TABLE `registerfa` (
  `Id` varchar(45) NOT NULL,
  `Email Id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Post` varchar(100) NOT NULL,
  `Profile Photo` varchar(100) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `SF/Aided` varchar(20) NOT NULL,
  `Time Stamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `favourite1` text NOT NULL,
  `favourite2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerfa`
--

INSERT INTO `registerfa` (`Id`, `Email Id`, `Name`, `Password`, `Post`, `Profile Photo`, `Phone Number`, `Gender`, `SF/Aided`, `Time Stamp`, `favourite1`, `favourite2`) VALUES
('20suca01', 'fetch@gmail.com', 'russo brothers', 'dhanush', 'gray man', 'profile click me', 1234567890, 'male', 'sf', '0000-00-00 00:00:00.000000', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
