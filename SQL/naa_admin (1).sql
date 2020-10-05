-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-10-05 16:08:01
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `naa_admin`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`ID`, `user_id`, `password`, `available`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- 表的结构 `limited_course`
--

CREATE TABLE `limited_course` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ori_price` decimal(10,2) NOT NULL,
  `off_price` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `details` varchar(100) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_modified_time` varchar(11) NOT NULL,
  `delmode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `limited_course`
--

INSERT INTO `limited_course` (`ID`, `title`, `image`, `ori_price`, `off_price`, `date`, `details`, `upload_time`, `last_modified_time`, `delmode`) VALUES
(12, '1st this is slide 1111x', 'f847a9b2b85bb26f20753c540d032817.png', '10.00', '3.00', '2020-10-28', '459df228867b5ca7b6d4dba77f5f4705.pdf', '2020-10-05 12:19:48', '', 0),
(13, 'title69', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '10.69', '0.69', '2020-10-28', '9710c8e2371055b0827cb1e43a24d376.pdf', '2020-10-04 16:58:07', '', 1),
(14, 'this is slide 222', '4271fe606df68355b83750e7a1642d19.jpg', '9.90', '0.00', '2020-10-28', 'e3653cc292bcc6b71c6981bb62a45e16.pdf', '2020-10-04 10:08:31', '', 1),
(17, 'sdgkjvgsdkgfvs', '9f4836856f7c76adfc58c38dfb2c587a.png', '0.00', '0.00', '2020-10-28', '036b28716e98b79cc5ebb923746f246a.pdf', '2020-10-04 15:53:07', '', 1),
(18, 'cba', 'b8e2b04b7eae2fcb3f48541d7de8a5f6.jpg', '0.00', '0.00', '2020-10-28', '28171574e80f0c4649f2799594cc9403.pdf', '2020-10-05 13:53:23', '', 0),
(19, 'abc', 'fbe3a9e6e390ce300a5bc990188fbbb2.jpg', '10.00', '9.99', '2020-10-28', '6ffc2e70bf167e9247cdc82aaad2b317.pdf', '2020-10-04 16:14:04', '', 0),
(20, 'Limited Course', '', '100.00', '10.00', '2020-10-28', '', '2020-10-05 13:45:29', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `professional_course`
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
-- 转存表中的数据 `professional_course`
--

INSERT INTO `professional_course` (`ID`, `title`, `image`, `details`, `upload_time`, `last_modified_time`, `delmode`) VALUES
(12, 'this is slide 1111x', 'f847a9b2b85bb26f20753c540d032817.png', '459df228867b5ca7b6d4dba77f5f4705.pdf', '2020-09-15 07:20:54', '', 1),
(13, 'this is slide 111x\'x\'x', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '9710c8e2371055b0827cb1e43a24d376.pdf', '2020-09-15 07:22:00', '', 1),
(14, 'this is slide 222', '4271fe606df68355b83750e7a1642d19.jpg', 'e3653cc292bcc6b71c6981bb62a45e16.pdf', '2020-10-04 09:43:45', '', 0),
(17, 'sdgkjvgsdkgfvs', '9f4836856f7c76adfc58c38dfb2c587a.png', '036b28716e98b79cc5ebb923746f246a.pdf', '2020-09-24 07:07:02', '', 0),
(18, 'cba', '39fb915a57077949344e12f0c01e0a1b.png', '82587fa21ba1095781e43447aaa244f7.pdf', '2020-10-04 09:47:25', '', 1),
(19, 'abc', '6b80c5317e48cf8cbfa786ccb13440a9.jpg', '8babca47fbd2947b32f8af0b8eed0493.pdf', '2020-10-04 16:03:43', '', 0),
(20, 'abc', '358806328cde9d6d481cf98026b1a4eb.jpg', 'a8984f301271b10ec7f44f8ffb3c675b.pdf', '2020-10-04 16:09:15', '', 0),
(21, 'abc', '026d7b7e461ab205449be2bce46011da.jpg', '6f999bc96b0520b03b8e640a083985ad.pdf', '2020-10-04 16:09:16', '', 0),
(22, 'Professional Course', 'c9e8d17554e5a2f9b00134f70690aa4c.jpg', '4c988486ecb46d28793615e8da3bd614.pdf', '2020-10-05 13:57:15', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `short_course`
--

CREATE TABLE `short_course` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ori_price` decimal(10,2) NOT NULL,
  `off_price` decimal(10,2) NOT NULL,
  `details` varchar(100) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_modified_time` varchar(11) NOT NULL,
  `delmode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `short_course`
--

INSERT INTO `short_course` (`ID`, `title`, `image`, `ori_price`, `off_price`, `details`, `upload_time`, `last_modified_time`, `delmode`) VALUES
(12, 'this is slide 1111x', 'f847a9b2b85bb26f20753c540d032817.png', '10.00', '3.00', '459df228867b5ca7b6d4dba77f5f4705.pdf', '2020-10-05 10:35:41', '', 0),
(13, 'title10', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '10.10', '0.10', '9710c8e2371055b0827cb1e43a24d376.pdf', '2020-10-04 15:53:31', '', 0),
(14, 'this is slide 222', '4271fe606df68355b83750e7a1642d19.jpg', '9.90', '0.00', 'e3653cc292bcc6b71c6981bb62a45e16.pdf', '2020-10-04 10:08:31', '', 1),
(17, 'sdgkjvgsdkgfvs', '9f4836856f7c76adfc58c38dfb2c587a.png', '0.00', '0.00', '036b28716e98b79cc5ebb923746f246a.pdf', '2020-10-05 10:35:46', '', 0),
(18, 'cba', '5249759ee9575f0618140ab2ae99abfd.jpg', '0.00', '0.00', '04c73f4355ab1debdb9aaefeaa693d71.pdf', '2020-10-05 11:12:16', '', 0),
(19, 'abc', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '10.00', '9.99', '05d857e794f7f1a3980765e18741c87d.pdf', '2020-10-05 11:02:03', '', 0),
(20, 'abc', '9c3910453a00924a89252fed18d1c60d.png', '100.00', '0.12', '0c6b6823d0e9dc1689c09e1c8e43804c.pdf', '2020-10-05 11:10:21', '', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `limited_course`
--
ALTER TABLE `limited_course`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `professional_course`
--
ALTER TABLE `professional_course`
  ADD PRIMARY KEY (`ID`);

--
-- 表的索引 `short_course`
--
ALTER TABLE `short_course`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `limited_course`
--
ALTER TABLE `limited_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `professional_course`
--
ALTER TABLE `professional_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `short_course`
--
ALTER TABLE `short_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
