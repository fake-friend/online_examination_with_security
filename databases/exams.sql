-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 03:16 PM
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
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `instructor_department` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `years` varchar(3) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `unique_exam_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `instructor_id`, `instructor_name`, `gmail`, `instructor_department`, `department`, `subjects`, `subject_code`, `years`, `exam_title`, `start_time`, `duration`, `unique_exam_name`) VALUES
(5, 102, 'Mary ', 'mary@gmail.com', 'CA/IT', 'Tamil ', 'java ', 'uja20c45 ', 'III', 'threadconcept', '2022-11-11T10:00', '15', 'Mary102TamiljavaIII2022_11_11_07_43_01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_exam_name` (`unique_exam_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
