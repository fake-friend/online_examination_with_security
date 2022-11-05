-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 03:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_examination_with_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructorsubject`
--

CREATE TABLE `instructorsubject` (
  `id` int(45) NOT NULL,
  `instructor_id` varchar(500) NOT NULL,
  `instructor_name` varchar(500) NOT NULL,
  `department` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `Year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructorsubject`
--

INSERT INTO `instructorsubject` (`id`, `instructor_id`, `instructor_name`, `department`, `subject`, `subjectcode`, `Year`) VALUES
(1, '101 ', 'Albert ', 'CA/IT', 'Java', 'uca22c51', 'I'),
(2, '102 ', 'Mary  ', 'Computer Science', 'Cloud Computing', 'ucs22c52', 'I'),
(3, '103 ', 'Jessica ', 'Mathematics', 'Algebra', 'uma21c53', 'II'),
(4, '104 ', 'David Michael ', 'Physics', 'Discrete Mathematics', 'uph21c55', 'II'),
(5, '105 ', 'Joseph David ', 'CA/IT', 'Internet Security', 'uca20c56', 'III'),
(6, '106 ', 'Jennifer ', 'Computer Science', 'Trigonometry', 'ucs20c57', 'III');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructorsubject`
--
ALTER TABLE `instructorsubject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructorsubject`
--
ALTER TABLE `instructorsubject`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
