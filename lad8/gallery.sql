-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2020 lúc 08:47 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gallery`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `descgellary` longtext NOT NULL,
  `imgfullname` longtext NOT NULL,
  `ordergellary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `descgellary`, `imgfullname`, `ordergellary`) VALUES
(1, 'Nail', 'Sofly hand', 'img/gallery/hand.jpg', 1),
(2, 'Teamwork', 'Working together', 'img/gallery/teamwork.jpg', 2),
(3, 'Sky', 'Walking on the Sky', 'img/gallery/bluesky.jpg', 3),
(4, 'Cascade', 'Panorama picture', 'img/gallery/cascade.jpg', 4),
(5, 'Mount', 'Mount is nice view', 'img/gallery/mount.jpg', 5),
(6, 'Face', 'It is sexy girl ', 'img/gallery/face.jpg', 6),
(7, 'Flying', 'Flying on the Skype', 'img/gallery/flying.jpg', 7),
(8, 'Country', 'Country side í very beautiful', 'img/gallery/countryside.jpg', 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
