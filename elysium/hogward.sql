-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogward`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `membername` varchar(200) NOT NULL,
  `memberic` varchar(15) NOT NULL,
  `memberid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `memberaddress` varchar(100) NOT NULL,
  `membercity` varchar(50) NOT NULL,
  `memberpostcode` int(10) NOT NULL,
  `memberstate` varchar(10) NOT NULL,
  `membergender` varchar(10) NOT NULL,
  `memberemail` varchar(100) NOT NULL,
  `memberform` varchar(10) NOT NULL,
  `memberage` int(10) NOT NULL,
  `memberphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`membername`, `memberic`, `memberid`, `password`, `memberaddress`, `membercity`, `memberpostcode`, `memberstate`, `membergender`, `memberemail`, `memberform`, `memberage`, `memberphone`) VALUES
('Nursyamiza Azwa ', '981112105522', 'Azwa9988', 'Azwa9988', '44, Jalan Damai', 'Alor Setar', 25100, 'Kedah', 'Female', 'azwawa@mm.com', 'Waja', 23, '016642314'),
('Mohd Qhaiyum Shah Bin Raman', '970701126675', 'qhaiyumm', '1234', 'No. 1244, Jalan Batu 1 1/2, Jalan Utara', 'Sandakan', 90000, 'Sabah', 'Male', 'qhaiyumshah@gmail.com', 'Saga', 22, '0142012100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
