-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 10:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `acc_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `balance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`acc_no`, `name`, `balance`) VALUES
(1108154, 'Joey', 478385),
(1108156, 'Karl', 550200),
(1118549, 'Ivy', 151555),
(1118795, 'Jack', 6381880),
(1118846, 'Rob', 587172000),
(1184841, 'Ayush', 20078),
(1187596, 'Jimmy', 80000),
(1187654, 'Chandler', 60585),
(1187915, 'John', 90000),
(1557846, 'Chris', 87815);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `sender` varchar(50) DEFAULT NULL,
  `reciever` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`sender`, `reciever`, `amount`) VALUES
('Joey', 'Ayush', 2322),
('Jack', 'Ivy', 2222),
('Suresh', 'Suresh', 2222),
('Chandler', 'Joey', 233),
('Rob', 'Jimmy', 233),
('John', 'Chris', 233),
('Karl', 'Ivy', 233),
('Jimmy', 'John', 5555),
('John', 'Joey', 450),
('Chris', 'Joey', 154),
('Ivy', 'Karl', 5555),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`acc_no`);

--
-- AUTO_INCREMENT for dumped tables
--
--
ALTER TABLE `bank`
  MODIFY `acc_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
