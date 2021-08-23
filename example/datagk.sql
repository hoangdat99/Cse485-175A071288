-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 23, 2021 lúc 05:00 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datagk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person`
--

CREATE TABLE `person` (
  `idPerson` int(11) NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workPhone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonePerson` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `person`
--

INSERT INTO `person` (`idPerson`, `fullName`, `position`, `workPhone`, `email`, `phonePerson`, `id_unit`) VALUES
(1, 'Mr.A', 'Hiệu Trưởng', '0101', '0101@gmail.com', '010101', 1),
(2, 'Mr.B', ' Phó Hiệu Trưởng', '0201', '0201@gmail.com', '020101', 1),
(3, 'Mr.C', 'Trưởng Hội Đồng', '0301', '0301@gmail.com', '030101', 2),
(4, 'Mr.D', 'Trưởng Khoa', '0401', '0401@gmail.com', '040101', 3),
(5, 'Mr.E', 'Trưởng Bộ Môn', '0501', '0501@gmail.com', '050101', 4),
(6, 'Mr.F', 'Phó Bộ Môn', '0601', '0601@gmail.com', '060101', 5),
(7, 'Mr.G', 'Phó Khoa', '0701', '0701@gmail.com', '070101', 6),
(8, 'Mr.H', 'Giảng Viên', '0801', '0801@gmail.com', '080101', 7),
(9, 'Mr.J', 'Trưởng Bộ Môn', '0901', '0901@gmail.com', '090101', 8),
(10, 'Mr.K', 'Thủ Thư', '01001', '01001@gmail.com', '0100101', 9),
(11, 'Mr.L', 'Trạm Trưởng', '01101', '01101@gmail.com', '0110101', 10),
(13, 'Mr.1', 'Trợ Lý', '0012131', 'troly@gmail.com', '012465564', 10),
(14, 'Nguyễn Văn A', 'Giảng Viên', '0123456', 'anv@gmail.com', '0145789', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `unit`
--

INSERT INTO `unit` (`id`, `name`, `address`, `phone`, `website`, `id_parent`) VALUES
(1, 'Ban Giám Hiệu', 'N1', '01', '01@gmail.com', NULL),
(2, 'Hội Đồng Trường', 'N2', '02', '02@gmail.com', NULL),
(3, 'Khoa Kỹ Thuật', 'N3', '03', '03@gmail.com', NULL),
(4, 'Kỹ Thuật Điện', 'N4', '04', '04@gmail.com', 3),
(5, 'Kỹ Thuật Ô tô', 'N5', '05', '05@gmail.com', 3),
(6, 'Khoa Kinh Tế', 'N6', '06', '06@gmail.com', NULL),
(7, 'Khinh Tế Đối Ngoại', 'N7', '071', '071@gmail.com', 6),
(8, 'Kinh tế Học', 'N7', '072', '072@gmail.com', 6),
(9, 'Thư Viện', 'N8', '08', '08@gmail.com', NULL),
(10, 'Y Tế', 'N9', '09', '09@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passWord` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `userName`, `passWord`) VALUES
(1, 'admin', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idPerson`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Chỉ mục cho bảng `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parent` (`id_parent`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `person`
--
ALTER TABLE `person`
  MODIFY `idPerson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id`);

--
-- Các ràng buộc cho bảng `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`id_parent`) REFERENCES `unit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
