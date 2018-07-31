-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 09:07 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skynetcable`
--
CREATE DATABASE IF NOT EXISTS `skynetcable` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `skynetcable`;

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--
-- Creation: Sep 08, 2017 at 12:20 PM
--

CREATE TABLE `bill_info` (
  `bill_no` int(15) NOT NULL,
  `bill_time` datetime NOT NULL,
  `pay_status` varchar(10) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collec_info`
--
-- Creation: Sep 13, 2017 at 12:36 PM
--

CREATE TABLE `collec_info` (
  `coll_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `bill_no` int(10) NOT NULL,
  `deposit_status` varchar(10) NOT NULL,
  `coll_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Creation: Sep 22, 2017 at 12:06 PM
-- Last update: Sep 22, 2017 at 04:29 PM
--

CREATE TABLE `customer` (
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `mobile_no` varchar(12) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `uname` varchar(25) DEFAULT NULL,
  `passwd` varchar(15) DEFAULT NULL,
  `acc_type` varchar(10) DEFAULT NULL,
  `s_quest` varchar(30) DEFAULT NULL,
  `s_ans` varchar(30) DEFAULT NULL,
  `usertype` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `sub_id` int(10) DEFAULT NULL,
  `cus_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
-- Creation: Sep 13, 2017 at 04:16 PM
-- Last update: Sep 22, 2017 at 02:16 PM
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `experience` varchar(10) NOT NULL DEFAULT '0 yr.',
  `address` varchar(50) NOT NULL,
  `contact_no` int(12) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `area` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `e_name`, `designation`, `salary`, `experience`, `address`, `contact_no`, `email_id`, `area`) VALUES
(1, 'fqfq', 'fafa', '32525', 'vaaaggaeg', 'avdfagaga', 253525, 'vavdavav', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--
-- Creation: Sep 21, 2017 at 08:22 AM
-- Last update: Sep 22, 2017 at 02:04 PM
--

CREATE TABLE `package` (
  `pack_id` int(10) NOT NULL,
  `pack_name` varchar(15) NOT NULL,
  `speed` varchar(10) DEFAULT NULL,
  `fup` varchar(11) DEFAULT NULL,
  `postfup` varchar(11) DEFAULT NULL,
  `cost` int(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_info`
--
-- Creation: Sep 21, 2017 at 08:27 AM
--

CREATE TABLE `subscription_info` (
  `sub_id` int(10) NOT NULL,
  `sub_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `sub_status` varchar(10) NOT NULL,
  `cus_id` int(10) NOT NULL,
  `pack_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sub_id_2` (`sub_id`);

--
-- Indexes for table `collec_info`
--
ALTER TABLE `collec_info`
  ADD PRIMARY KEY (`coll_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `bill_no` (`bill_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sub_id_2` (`sub_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `subscription_info`
--
ALTER TABLE `subscription_info`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collec_info`
--
ALTER TABLE `collec_info`
  MODIFY `coll_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subscription_info`
--
ALTER TABLE `subscription_info`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD CONSTRAINT `bill_info_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subscription_info` (`sub_id`);

--
-- Constraints for table `collec_info`
--
ALTER TABLE `collec_info`
  ADD CONSTRAINT `collec_info_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `collec_info_ibfk_2` FOREIGN KEY (`bill_no`) REFERENCES `bill_info` (`bill_no`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subscription_info` (`sub_id`);

--
-- Constraints for table `subscription_info`
--
ALTER TABLE `subscription_info`
  ADD CONSTRAINT `subscription_info_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_info_ibfk_2` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
