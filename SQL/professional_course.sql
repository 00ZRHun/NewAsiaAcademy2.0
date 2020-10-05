-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-10-04 11:57:23
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
(18, 'cba', '39fb915a57077949344e12f0c01e0a1b.png', '82587fa21ba1095781e43447aaa244f7.pdf', '2020-10-04 09:47:25', '', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `professional_course`
--
ALTER TABLE `professional_course`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `professional_course`
--
ALTER TABLE `professional_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
