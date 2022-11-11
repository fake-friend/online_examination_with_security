-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 06:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `mary102pythoniii2022_11_11_07_58_09`
--

CREATE TABLE `mary102pythoniii2022_11_11_07_58_09` (
  `question_number` int(3) DEFAULT NULL,
  `questions` varchar(200) DEFAULT NULL,
  `a` varchar(100) DEFAULT NULL,
  `b` varchar(100) DEFAULT NULL,
  `c` varchar(100) DEFAULT NULL,
  `d` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mary102pythoniii2022_11_11_07_58_09`
--

INSERT INTO `mary102pythoniii2022_11_11_07_58_09` (`question_number`, `questions`, `a`, `b`, `c`, `d`, `answer`) VALUES
(1, 'A binary value contains?', 'text value', 'number value', 'zeros and ones', 'multiple datas', 'zeros and ones'),
(2, 'what is HTML?', 'Hyper Text Markup Language', 'Human Text Markup Language', 'Hyper Transfer Markup Language', 'Hyper Text Machine Language', 'Hyper Text Markup Language'),
(3, 'what is PHP?', 'Hyper text preprocessor', 'preprocessor Hyper Text', 'public hyper text', 'public preprocessor hyper text', 'Hyper text preprocessor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
