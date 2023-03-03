-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 03:08 PM
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
-- Database: `gasvalidation`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedbackid` int(4) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedbackid`, `fullname`, `tel`, `email`, `subject`, `message`, `date`) VALUES
(13, 'vincennt', '0703504761', 'vincentbettoh@gmail.com', 'yes ', 'dfdfdf', 'Aug-31-2022 00:44');

-- --------------------------------------------------------

--
-- Table structure for table `gases`
--

CREATE TABLE `gases` (
  `gasid` int(4) NOT NULL,
  `gasname` varchar(50) NOT NULL,
  `gasweight` varchar(50) NOT NULL,
  `gasSerialNumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gases`
--

INSERT INTO `gases` (`gasid`, `gasname`, `gasweight`, `gasSerialNumber`) VALUES
(6, 'Vincent kipkurui', '12345', 'AX644651908'),
(7, 'TOTAL', '89', 'AX1614099553'),
(8, 'Top', '8.4', 'AX379541100');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'administrator', '12345'),
(9, 'lucy', '12345'),
(6, 'Vincent', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `gases`
--
ALTER TABLE `gases`
  ADD PRIMARY KEY (`gasid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedbackid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gases`
--
ALTER TABLE `gases`
  MODIFY `gasid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
