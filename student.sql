-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 06:14 AM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `favqus` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `favplace` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `roll_number` varchar(10) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `favsubject` varchar(100) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `pass_word` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `devices` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `dob`, `phonenumber`, `upload`, `favqus`, `gender`, `favplace`, `department`, `roll_number`, `batch`, `favsubject`, `shift`, `username`, `gmail`, `pass_word`, `created_at`, `devices`) VALUES
(1, 'SriHarish kumar M', '2003-02-10', '9342321825', 'harish.png', 'happiness ', 'Male', 'nothing', 'CA/IT', '20SUCA24', '2020-2023', 'programming in java', 'Self Financed', 'Harish', 'harish@gmail.com', 'harish10', '2022-09-30 07:44:19', 0),
(2, 'Hepsy Joannah A', '2002-10-13', '9944478105', 'flower.jpg', 'prooject', 'Female', 'kerala', 'CA/IT', '20SUCA35', '2020-2023', 'Maths', 'Self Financed', 'Joannah ', 'joannah@gmail.com', 'joannah', '2022-10-01 04:04:36', 0),
(3, 'Sangeetha S', '2003-03-03', '987654321', 'sangeetha.png', 'zoho', 'Female', 'chennai', 'CA/IT', '20SUCA42', '2020-2023', 'java coding', 'Self Financed', 'sangeetha', 'sangeetha@gmail.com', 'sangeeth', '2022-10-01 04:08:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
