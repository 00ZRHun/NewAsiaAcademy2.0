-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-10-04 18:34:30
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
(12, 'this is slide 1111x', 'f847a9b2b85bb26f20753c540d032817.png', '10.00', '3.00', '2020-10-28', '459df228867b5ca7b6d4dba77f5f4705.pdf', '2020-10-04 14:55:07', '', 1),
(13, 'title10', 'e2ba8b0a45ef640cda08ee83f86c70a0.jpg', '10.10', '0.10', '2020-10-28', '9710c8e2371055b0827cb1e43a24d376.pdf', '2020-10-04 15:53:31', '', 0),
(14, 'this is slide 222', '4271fe606df68355b83750e7a1642d19.jpg', '9.90', '0.00', '2020-10-28', 'e3653cc292bcc6b71c6981bb62a45e16.pdf', '2020-10-04 10:08:31', '', 1),
(17, 'sdgkjvgsdkgfvs', '9f4836856f7c76adfc58c38dfb2c587a.png', '0.00', '0.00', '2020-10-28', '036b28716e98b79cc5ebb923746f246a.pdf', '2020-10-04 15:53:07', '', 1),
(18, 'cba', '39fb915a57077949344e12f0c01e0a1b.png', '0.00', '0.00', '2020-10-28', '82587fa21ba1095781e43447aaa244f7.pdf', '2020-10-04 09:47:25', '', 1),
(19, 'abc', 'fbe3a9e6e390ce300a5bc990188fbbb2.jpg', '10.00', '9.99', '2020-10-28', '6ffc2e70bf167e9247cdc82aaad2b317.pdf', '2020-10-04 16:14:04', '', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `limited_course`
--
ALTER TABLE `limited_course`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `limited_course`
--
ALTER TABLE `limited_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
