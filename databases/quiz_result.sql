-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 02:28 PM
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
-- Database: `quiz_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamil`
--

CREATE TABLE `tamil` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `rollnumber` varchar(15) NOT NULL,
  `year` varchar(15) NOT NULL,
  `quiz` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tamil`
--

INSERT INTO `tamil` (`id`, `name`, `rollnumber`, `year`, `quiz`, `mark`) VALUES
(1, '0', '20suca24', '3', '0', 0),
(6, 'harish', '20suca25', '3', 'test1', 0),
(9, 'harish', '20suca26', '3', 'test1', 3),
(10, 'harish', '20suca27', '3', 'test1', 0),
(11, 'harish', '20suca28', '3', 'test1', 1),
(12, 'harish', '20suca29', '3', 'test1', 1),
(13, 'harish', '20suca30', '3', 'test1', 0),
(16, 'harish', '20suca31', '3', 'test1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamil`
--
ALTER TABLE `tamil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamil`
--
ALTER TABLE `tamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
