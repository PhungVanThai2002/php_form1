-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2023 lúc 05:32 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `form1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `ngaysinh` varchar(20) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `quequan` varchar(255) NOT NULL,
  `sothich` varchar(30) NOT NULL,
  `khunggio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `form1`
--

INSERT INTO `form1` (`id`, `hovaten`, `ngaysinh`, `gioitinh`, `quequan`, `sothich`, `khunggio`) VALUES
(1, 'thai', '16/12/2002', 'nam', 'Vinh Phuc', '0', '0'),
(2, 'thai', '16/12/2002', 'nam', 'Vinh Phuc', '0', '0'),
(3, 'thai', '16/12/2002', 'nam', 'Vinh Phuc', ' amnhac ', 'sang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
