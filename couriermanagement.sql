-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 11:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courierdetails`
--

CREATE TABLE `courierdetails` (
  `bid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `name` text NOT NULL,
  `phnumber` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` text NOT NULL,
  `courierweight` text NOT NULL,
  `couriertype` text NOT NULL,
  `cournum` int(11) NOT NULL,
  `amount` text NOT NULL,
  `rname` text NOT NULL,
  `rphnumber` text NOT NULL,
  `address2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courierdetails`
--

INSERT INTO `courierdetails` (`bid`, `date`, `name`, `phnumber`, `address`, `pincode`, `courierweight`, `couriertype`, `cournum`, `amount`, `rname`, `rphnumber`, `address2`) VALUES
(7, '2022-01-16 20:28:00', 'srujan', '7894561230', 'abcd', '560064', '2kg', 'nnn', 111, '200', 'Virat', '9638527410', 'zzz'),
(8, '2022-01-18 21:38:00', 'Vikas', '7411118880', 'Bidar', '585401', '5kg', 'dtc', 112, '300', 'John', '7418523690', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `cid` int(100) NOT NULL,
  `customername` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`cid`, `customername`, `password`) VALUES
(1, 'customer', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `did` int(11) NOT NULL,
  `couriernumber` int(11) NOT NULL,
  `branchname` text NOT NULL,
  `staffname` text NOT NULL,
  `deliveredto` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliverydetails`
--

INSERT INTO `deliverydetails` (`did`, `couriernumber`, `branchname`, `staffname`, `deliveredto`, `date`) VALUES
(5, 111, 'Mumbai', 'Subhadip', 'srujan', '2022-01-18 20:31:00'),
(6, 112, 'Bangalore', 'Vin', 'Vikas', '2022-01-21 21:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `scheduletable`
--

CREATE TABLE `scheduletable` (
  `shid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `brcode` text NOT NULL,
  `staffname` text NOT NULL,
  `cournum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduletable`
--

INSERT INTO `scheduletable` (`shid`, `date`, `brcode`, `staffname`, `cournum`) VALUES
(14, '2022-01-17 09:30:00', '1234', 'Subhadip', 111),
(15, '2022-01-20 10:43:00', '11111', 'Vin', 112);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(11) NOT NULL,
  `branchcode` text NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `branchaddress` varchar(50) NOT NULL,
  `branchpincode` int(11) NOT NULL,
  `staffname` text NOT NULL,
  `phnumber` text NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `branchcode`, `branchname`, `branchaddress`, `branchpincode`, `staffname`, `phnumber`, `address`) VALUES
(5, '1234', 'Mumbai', 'abcd', 560064, 'Subhadip', '789458888', 'abcd'),
(6, '11111', 'Bangalore', 'abcd', 560064, 'Vin', '9988776655', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courierdetails`
--
ALTER TABLE `courierdetails`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `cournum` (`cournum`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `couriernumber` (`couriernumber`);

--
-- Indexes for table `scheduletable`
--
ALTER TABLE `scheduletable`
  ADD PRIMARY KEY (`shid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courierdetails`
--
ALTER TABLE `courierdetails`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scheduletable`
--
ALTER TABLE `scheduletable`
  MODIFY `shid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
