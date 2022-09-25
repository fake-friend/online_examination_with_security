-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 06:42 PM
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
  `phonenumber` int(10) NOT NULL,
  `file_image` int(11) NOT NULL,
  `favqus` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `roll_number` varchar(10) NOT NULL,
  `batch` varchar(50) NOT NULL,
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

INSERT INTO `student` (`id`, `student_name`, `dob`, `phonenumber`, `file_image`, `favqus`, `gender`, `department`, `roll_number`, `batch`, `shift`, `username`, `gmail`, `pass_word`, `created_at`, `devices`) VALUES
(1, 'joannah   ', '2000-12-13', 2147483647, 0, 'happiness  ', 'Female', 'tam', '20SUCA35 ', '', 'Self Financed', 'Joannah ', 'joannah12345@gmail.com', 'joannah', '2022-09-13 12:46:11', 0),
(2, 'joannah  ', '2020-12-10', 2147483647, 0, 'happiness  ', 'Female', 'tam', '20SUCA35 ', '', 'Self Financed', 'Joannah ', 'joannah12345@gmail.com', 'joannah ', '2022-09-13 12:49:42', 0),
(3, 'joannah  ', '2020-12-10', 2147483647, 0, 'happiness  ', 'Female', 'tam', '20SUCA35 ', '', 'Self Financed', 'Joannah ', 'joannah12345@gmail.com', 'joannah ', '2022-09-13 13:29:36', 0);

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
