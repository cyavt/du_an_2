-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2023 lúc 10:06 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lifebuoy_in`
--

CREATE TABLE `lifebuoy_in` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '''0''',
  `heart_rate` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '''0''',
  `water_state` int(3) NOT NULL DEFAULT 0,
  `bat_cap` float NOT NULL DEFAULT 0,
  `token` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lifebuoy_in`
--

INSERT INTO `lifebuoy_in` (`id`, `name`, `location`, `heart_rate`, `water_state`, `bat_cap`, `token`) VALUES
(1, 'Phao số 1', '16.0818292, 108.2248840', '60', 3, 60, '00001'),
(2, 'Phao số 2', '16.0795693, 108.2267455', '66', 2, 20, '00002'),
(3, 'Phao số 3', '16.0804336, 108.2254419', '76', 1, 30, '00003'),
(4, 'Phao số 4', '16.0782036, 108.2255720', '70', 3, 30, '00004');

--
-- Bẫy `lifebuoy_in`
--
DELIMITER $$
CREATE TRIGGER `lifebuoy_water_state_trigger` AFTER UPDATE ON `lifebuoy_in` FOR EACH ROW BEGIN
  IF NEW.water_state <> OLD.water_state THEN
    INSERT INTO log_activities (`token`, `water_state`, `heart_rate`, `bat_cap`, `location`, `createDT`) VALUES (NEW.token, NEW.water_state, NEW.heart_rate, NEW.bat_cap, NEW.location, CURRENT_TIMESTAMP);
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_activities`
--

CREATE TABLE `log_activities` (
  `token` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `heart_rate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `water_state` int(3) NOT NULL,
  `bat_cap` float NOT NULL,
  `location` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CreateDT` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `log_activities`
--

INSERT INTO `log_activities` (`token`, `heart_rate`, `water_state`, `bat_cap`, `location`, `CreateDT`) VALUES
('00001', '2', 2, 60, '16.0818292, 108.2248840', '2023-06-13 13:43:16'),
('00001', '2', 1, 60, '16.0818292, 108.2248840', '2023-06-13 13:43:44'),
('00001', '2', 2, 60, '16.0818292, 108.2248840', '2023-06-13 13:43:59'),
('00001', '2', 4, 60, '16.0818292, 108.2248840', '2023-06-13 13:44:03'),
('00001', '2', 3, 60, '16.0818292, 108.2248840', '2023-06-13 13:44:17'),
('00003', '76', 1, 30, '16.0804336, 108.2254419', '2023-06-13 13:55:49'),
('00001', '60', 4, 60, '16.0818292, 108.2248840', '2023-06-13 14:07:39'),
('00001', '60', 3, 60, '16.0818292, 108.2248840', '2023-06-13 14:09:09'),
('00001', '60', 4, 60, '16.0818292, 108.2248840', '2023-06-13 14:11:10'),
('00001', '60', 3, 60, '16.0818292, 108.2248840', '2023-06-13 14:13:03'),
('00001', '60', 4, 60, '16.0818292, 108.2248840', '2023-06-13 14:13:10'),
('00001', '60', 3, 60, '16.0818292, 108.2248840', '2023-06-13 14:13:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `domain` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL,
  `data1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data1`)),
  `data2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data2`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `state`
--

INSERT INTO `state` (`id`, `status`, `color`) VALUES
(1, 'Đã tắt', 'purple'),
(2, 'Đang hoạt động', 'primary'),
(3, 'Đang tiếp xúc nước', 'success'),
(4, 'Cảnh báo', 'danger');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lifebuoy_in`
--
ALTER TABLE `lifebuoy_in`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`) USING BTREE,
  ADD KEY `water_state` (`water_state`);

--
-- Chỉ mục cho bảng `log_activities`
--
ALTER TABLE `log_activities`
  ADD KEY `token` (`token`);

--
-- Chỉ mục cho bảng `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lifebuoy_in`
--
ALTER TABLE `lifebuoy_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `lifebuoy_in`
--
ALTER TABLE `lifebuoy_in`
  ADD CONSTRAINT `lifebuoy_in_ibfk_1` FOREIGN KEY (`water_state`) REFERENCES `state` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
