-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 02:25 PM
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
  `instructor_name` text NOT NULL,
  `dob` date NOT NULL,
  `phone_number` int(10) NOT NULL,
  `file` int(11) NOT NULL,
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

INSERT INTO `instructor` (`id`, `instructor_id`, `instructor_name`, `dob`, `phone_number`, `file`, `favques`, `department`, `post`, `batch`, `gender`, `class`, `username`, `gmail`, `password`, `created_at`, `updated_at`, `deleted_at`, `devices`) VALUES
(1, '1', 'harish', '2003-02-10', 95626565, 0, 'teach', 'bca', 'hod', 'Self Financed', 'Male', '2nd year', 'sriharishkumar', 'harish@gmail.com', '12345678', '2022-09-11 12:18:08', '2022-09-11 12:18:08', '2022-09-11 12:18:08', 0),
(2, '1', 'harish', '2003-02-10', 95626565, 0, 'teach', 'bca', 'hod', 'Self Financed', 'Male', '2nd year', 'sriharishkumar', 'harish@gmail.com', '12345678', '2022-09-11 12:19:07', '2022-09-11 12:19:07', '2022-09-11 12:19:07', 0);

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
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
