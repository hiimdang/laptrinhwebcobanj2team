-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql104.epizy.com
-- Thời gian đã tạo: Th12 01, 2021 lúc 08:45 AM
-- Phiên bản máy phục vụ: 5.7.35-38
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `epiz_30453936_user_information`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gf_Infor`
--

CREATE TABLE `gf_Infor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `age` int(11) NOT NULL,
  `gender` bit(2) NOT NULL,
  `link_facebook` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `gf_Infor`
--

INSERT INTO `gf_Infor` (`id`, `name`, `age`, `gender`, `link_facebook`) VALUES
(1, 'Captain prox', 20, b'01', 'https://www.facebook.com/Prox.Error404/'),
(2, 'Test', 19, b'00', 'Khum xài facebook :('),
(3, 'Khum có tên :(', 69, b'01', 'Khum xài facebook :('),
(4, 'cuikho210', 12, b'01', 'fb.me/bark.black.313'),
(5, 'Lavie', 19, b'00', 'Thoi hong cho dau ahihi'),
(7, 'Củi Khô', 20, b'01', 'Khum xài facebook :(');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gf_Infor`
--
ALTER TABLE `gf_Infor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gf_Infor`
--
ALTER TABLE `gf_Infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
