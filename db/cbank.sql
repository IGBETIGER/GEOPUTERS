-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 03:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposithistory`
--

CREATE TABLE `deposithistory` (
  `dep_id` int(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `dep_date` date NOT NULL,
  `dep_status` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transferID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` bigint(20) NOT NULL,
  `routing_number` bigint(20) DEFAULT NULL,
  `swift_code` bigint(20) DEFAULT NULL,
  `account_type` varchar(40) NOT NULL,
  `transfer_status` int(11) NOT NULL,
  `transfer_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `account_number` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `rank` int(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `currency` varchar(225) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `last_deposit` bigint(255) NOT NULL,
  `last_withdraw` bigint(255) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code1` bigint(255) NOT NULL,
  `code2` bigint(255) NOT NULL,
  `code3` bigint(255) NOT NULL,
  `code4` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `account_number`, `username`, `rank`, `password`, `email`, `phone`, `currency`, `balance`, `last_deposit`, `last_withdraw`, `account_type`, `reg_date`, `code1`, `code2`, `code3`, `code4`) VALUES
(1, 'KZFSvx2lxYNY', 'Inspiration', '0093872423', 'Endless', 0, 'connectme', 'coded@gmail.com', '08167645936', '$', 30000, 5000, 1000, 'savings', '2018-11-11 12:52:52', 2113, 3333, 444, 2222),
(2, 'Morris', 'Gettam', '0000004343', 'morris11', 1, 'connectme', 'jenu@hubii-network.com', '0349343334', 'Â¥', 200, 0, 200, 'Current', '2018-11-19 01:42:08', 111, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawhistory`
--

CREATE TABLE `withdrawhistory` (
  `wit_id` int(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `wit_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposithistory`
--
ALTER TABLE `deposithistory`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`transferID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_number` (`account_number`);

--
-- Indexes for table `withdrawhistory`
--
ALTER TABLE `withdrawhistory`
  ADD PRIMARY KEY (`wit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposithistory`
--
ALTER TABLE `deposithistory`
  MODIFY `dep_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `transferID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `withdrawhistory`
--
ALTER TABLE `withdrawhistory`
  MODIFY `wit_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
