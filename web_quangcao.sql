-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2021 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_quangcao`
--
CREATE DATABASE IF NOT EXISTS `web_quangcao` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web_quangcao`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `passwrd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `fullname`, `passwrd`) VALUES
('admin', 'admin', 'admin'),
('admin1', 'admin1', 'admin1'),
('admin10', 'admin10', 'admin10'),
('admin11', 'admin11', 'admin11'),
('admin112', 'admin112', 'admin112'),
('admin113', 'admin113', 'admin113'),
('admin119', 'admin119', 'admin119'),
('admin12', 'admin12', 'àdsfsd'),
('admin13', 'admin13', 'sdfdgs'),
('admin14', 'Vo Thanh Long', 'admin14'),
('admin2', 'admin2', 'admin2'),
('admin2121', 'admin2121', 'admin2121'),
('admin22', 'admin22', 'admin22'),
('admin24', 'admin23', 'admin25'),
('admin3', 'admin3', 'admin3'),
('admin3131', 'admin3131', 'admin3131'),
('admin4', 'admin4', 'admin4'),
('admin411', 'admin411', 'admin411'),
('admin45', 'Nguyễn Nhĩ Thái', 'admin22'),
('admin5', 'admin5', 'admin5'),
('admin6', 'admin6', 'admin6'),
('admin8', 'admin8', 'admin8'),
('admin9', 'admin9', 'admin9'),
('admin99', 'Nguyễn Nhĩ Thái', 'admin99'),
('adminamin', 'amin', 'adminamin'),
('adminn', 'adminn', 'admin'),
('arrr', 'arrr', 'arrr'),
('arrrw', 'arrrw', 'arrrw'),
('dsf', 'sdfds', 'sdf'),
('dsffds', 'sdf', 'dsf'),
('fdgfdg', 'dfdsf', 'fdgf'),
('gfhfgh', 'fgfh', 'gfhgfh'),
('min', 'min', 'min'),
('nthai', 'Nguyễn Nhĩ Thái', 'admin99'),
('sad', 'sadas', 'asdas'),
('tlong', 'thanhlong', 'admin99'),
('user', 'user', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `count_interest`
--

CREATE TABLE `count_interest` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `count_interest`
--

INSERT INTO `count_interest` (`id`, `ip_address`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `count_ip`
--

CREATE TABLE `count_ip` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `count_ip`
--

INSERT INTO `count_ip` (`id`, `ip_address`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1'),
(24, '::1'),
(25, '::1'),
(26, '::1'),
(27, '::1'),
(28, '::1'),
(29, '::1'),
(30, '::1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` int(255) NOT NULL,
  `cont_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` varchar(1000) DEFAULT NULL,
  `date_recei` datetime DEFAULT NULL,
  `stats` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `cont_name`, `email`, `question`, `date_recei`, `stats`) VALUES
(1, 'Võ Thành Long', 'thanhlongst2013@gmail.com', 'Want to work together? Get in touch!', '2021-05-08 12:01:42', 1),
(5, 'Thai zoomCop', 'longb1809703@student.ctu.edu.vn', 'Want to work together? Get in touch!', '2021-05-08 16:18:37', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `count_interest`
--
ALTER TABLE `count_interest`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `count_ip`
--
ALTER TABLE `count_ip`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `count_interest`
--
ALTER TABLE `count_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `count_ip`
--
ALTER TABLE `count_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
