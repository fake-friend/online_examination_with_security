-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 06:03 AM
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
-- Database: `online_examination_with_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(45) NOT NULL,
  `instructor_id` varchar(500) NOT NULL,
  `instructor_name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `files` varchar(50) NOT NULL,
  `favques` varchar(1000) NOT NULL,
  `department` varchar(500) NOT NULL,
  `post` varchar(500) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `class` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `passwords` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `devices` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `instructor_id`, `instructor_name`, `dob`, `phone_number`, `files`, `favques`, `department`, `post`, `batch`, `gender`, `class`, `username`, `gmail`, `passwords`, `created_at`, `devices`) VALUES
(1, '1', 'Harish', '2022-10-01', 1234567890, 'Screenshot (26).png', 'Programmer', 'bca', 'Head of Department', 'Self Financed', 'Male', '3rd year', 'harishkumar', 'harish@gmail.com', '24022002', '2022-10-01 03:48:23', 0),
(4, '2', 'hepsy', '2022-10-02', 987654321, 'Screenshot (24).png', 'developer', 'bsc-it', 'Assistant Professor', 'Self Financed', 'Female', '2nd year', 'hepsyjoannah', 'hepsy@gmail.com', '13102002', '2022-10-01 03:59:54', 0),
(5, '3', 'sangeetha', '2022-10-03', 637416043, 'Screenshot (27).png', 'utopia', 'eng', 'Assistant Professor', 'Self Financed', 'Female', '2nd year', 'sangeetha', 'sangee@gmail.com', '03032003', '2022-10-01 04:02:42', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
