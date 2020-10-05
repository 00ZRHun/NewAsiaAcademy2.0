-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 06:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naa_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user_id`, `password`, `available`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `professional_course`
--

CREATE TABLE `professional_course` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_modified_time` varchar(11) NOT NULL,
  `delmode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional_course`
--

INSERT INTO `professional_course` (`ID`, `title`, `image`, `details`, `upload_time`, `last_modified_time`, `delmode`) VALUES
(12, 'this is slide 1111x', 'f847a9b2b85bb26f20753c540d032817.png', '459df228867b5ca7b6d4dba77f5f4705.pdf', '2020-09-15 07:20:54', '', 1),
(13, 'this is slide 111x\'x\'x', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '9710c8e2371055b0827cb1e43a24d376.pdf', '2020-09-15 07:22:00', '', 1),
(14, 'this is slide 111', '4271fe606df68355b83750e7a1642d19.jpg', 'e3653cc292bcc6b71c6981bb62a45e16.pdf', '2020-09-13 13:34:57', '', 0),
(17, 'sdgkjvgsdkgfvs', '9f4836856f7c76adfc58c38dfb2c587a.png', '036b28716e98b79cc5ebb923746f246a.pdf', '2020-09-24 07:07:02', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professional_course`
--
ALTER TABLE `professional_course`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professional_course`
--
ALTER TABLE `professional_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
