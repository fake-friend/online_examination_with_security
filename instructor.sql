-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 05:23 PM
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
-- Database: `online_examination_with_security`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(45) NOT NULL,
  `instructor_id` varchar(100) NOT NULL,
  `instructor_name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `files` int(11) NOT NULL,
  `favques` varchar(1000) NOT NULL,
  `department` varchar(500) NOT NULL,
  `post` varchar(500) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `class` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp(),
  `devices` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `instructor_id`, `instructor_name`, `dob`, `phone_number`, `files`, `favques`, `department`, `post`, `batch`, `gender`, `class`, `username`, `gmail`, `password`, `created_at`, `updated_at`, `deleted_at`, `devices`) VALUES
(1, '20suca41', 'vinno', '2022-09-03', 1234567890, 0, 'youu', 'bachelor of computer application', 'ddddd', 'self financed', 'female', '3rd year', 'vinoth', 'vi@gmail.com', '34vinoth', '2022-09-03 10:36:35', '2022-09-03 10:36:35', '2022-09-03 10:36:35', 1),
(2, '20suca42', 'sangee', '1980-10-10', 9848734, 0, 'programmer', 'bca', 'hod', 'Self Financed', 'Female', '1st year', 'sangiii', 'sange@gmail.com', '1234567', '2022-09-13 06:29:32', '2022-09-13 06:29:32', '2022-09-13 06:29:32', 1),
(3, '20suca48', 'arulmozhi', '2022-09-03', 1234567890, 0, 'prince', 'bca', 'prince of chozhas', 'Self Financed', 'Male', '3rd year', 'varman', 'varman@gmail.com', 'vanathi', '2022-09-27 11:35:55', '2022-09-27 11:35:55', '2022-09-27 11:35:55', 1),
(4, '20suca100', 'kundhavai', '2022-09-09', 2147483647, 0, 'princess', 'tam', 'princess of chozhas', 'Self Financed', 'Female', '3rd year', 'kundhavaivandhiyadevan', 'kundhavai@gmail.com', 'devan', '2022-09-27 11:53:26', '2022-09-27 11:53:26', '2022-09-27 11:53:26', 1),
(5, '20suca101', 'vanathi', '2022-09-24', 1234567890, 0, 'princess', 'tam', 'princess of chozhas', 'Aided', 'Female', '3rd year', 'vanathiarulmozhi', 'vanathi@gmail.com', '6789012', '2022-09-27 11:57:44', '2022-09-27 11:57:44', '2022-09-27 11:57:44', 1),
(6, '20suca102', 'adithyakarikalan', '2022-09-22', 1234567890, 0, 'prince', 'tam', 'prince of chozhas', 'Self Financed', 'Male', '3rd year', 'adithya', 'adithyakarikalan@gmail.com', 'nandhini', '2022-09-27 13:17:42', '2022-09-27 13:17:42', '2022-09-27 13:17:42', 0),
(7, '20suca42', 'maniratnam', '2022-09-08', 1234567890, 0, 'princess', 'bsc-it', 'prince of chozhas', 'Aided', 'Female', '1st year', 'roja', 'roja@gmail.com', '098765', '2022-09-27 13:22:05', '2022-09-27 13:22:05', '2022-09-27 13:22:05', 0);

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
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
