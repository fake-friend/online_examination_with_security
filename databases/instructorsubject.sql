-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 03:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
  `instructor_gmail` varchar(50) NOT NULL,
  `instructor_department` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructorsubject`
--

INSERT INTO `instructorsubject` (`id`, `instructor_id`, `instructor_name`, `instructor_gmail`, `instructor_department`, `department`, `subject`, `subjectcode`, `batch`, `Year`, `semester`) VALUES
(1, '102', 'Mary ', 'mary@gmail.com', 'CA/IT', 'Tamil', 'java', 'uja20c45', '2020-2023', 'III', 'V'),
(2, '102', 'Mary ', 'mary@gmail.com', 'CA/IT', 'CA/IT', 'python', 'uca20a12', '2020-2023', 'III', 'V'),
(3, '103', 'Jessica', 'jessy@gmail.com', 'Computer Science', 'CA/IT', 'Operating System', 'UCA20OS12', '2022-2025', 'I', 'I');

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
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
