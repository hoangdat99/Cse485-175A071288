-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 26, 2021 lúc 11:04 AM
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
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `fullName`, `email`, `Code`, `image`, `phoneNumber`, `id_user`) VALUES
(1, 'HoàngĐạt', 'hoangdatk95@gmail.com', 'HKGH777', 'des.jpg', '0917493396', 1),
(6, 'Hoàng Đạt', 'nnga11340@gmail.com', '346145', 'imgEvent4.jpg', '0917493396', 2),
(7, 'Hoàng Đạt', 'mrteenteen@yahoo.com.vn', 'HKGH999', 'imgEvent5.jpg', '0917493396', 14),
(8, 'Hoàng Đạt', 'nnga11340@gmail.com', 'e8f9e4bgjihbg8gg', 'imgNotification1.jpg', '0917493396', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setTime` date DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `setTime`, `content`, `image`, `status`, `user_id`) VALUES
(1, 'Công thức và cách tính điểm xét tốt nghiệp THPT 2021 nhanh nhất, chính xác nhất', '2021-08-17', 'Bao nhiêu điểm thì đậu tốt nghiệp THPT và cách tính điểm xét tuyển như thế nào là câu hỏi được 2k3 quan tâm lúc này! Trường Đại học Phenikaa hướng dẫn thí sính cách tính điểm xét tốt nghiệp THPT 2021 cũng như một số điều kiện cần để được xét tốt nghiệp nă', 'news9.jpg', 1, 1),
(9, 'Thí sinh cần làm gì sau khi biết điểm thi tốt nghiệp THPT?', '2021-08-17', 'Hôm nay (26.7), các địa phương công bố kết quả thi tốt nghiệp THPT đợt 1 của gần 1 triệu thí sinh cả nước. Kết quả kỳ thi này vừa được dùng để xét công nhận tốt nghiệp, vừa xét tuyển vào các trường ĐH và CĐ.', 'thumbnail3.jpg', 1, 1),
(10, 'Thông báo nhập học đợt 1 năm 2021', '2021-08-20', 'Thí sinh đã đạt kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và kết quả học tập bậc THPT (học bạ) đợt 1 năm 2021.', 'imgNotification4.jpg', 0, 1),
(11, 'Trường Đại học Phenikaa nhận hồ sơ xét tuyển học bạ đợt 2 năm 2021', '2021-08-17', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo nhận hồ sơ xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:', 'news2.jpg', 0, 1),
(12, 'Trường Đại học Phenikaa công bố kết quả xét tuyển đợt 2 năm 2021 theo phương thức xét tuyển kết quả học tập THPT (học bạ)', '2021-08-17', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và theo phương thức kết quả học tập bậc THPT (Học bạ)', 'news13.jpg', 0, 1),
(13, 'Công bố ngưỡng điểm nhận hồ sơ xét tuyển Đại học hệ chính quy theo phương thức xét điểm thi tốt nghiệp THPT năm 2021', '2021-08-17', 'Hội đồng Tuyển sinh Trường Đại học Phenikaa (PKA) công bố ngưỡng điểm nhận hồ sơ đăng ký xét tuyển (điểm sàn) đại học hệ chính quy năm 2021 vào từng ngành/chương trình theo phương thức xét điểm thi tốt nghiệp Trung học phổ thông (THPT) năm 2021 như sau:', 'imgNotification2.jpg', 1, 1),
(14, 'Tuổi trẻ hôm nay', '2021-08-26', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và theo phương thức kết quả học tập bậc THPT (Học bạ)', 'imgEvent5.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `score` double DEFAULT NULL,
  `id_subject` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `scores`
--

INSERT INTO `scores` (`id`, `score`, `id_subject`, `id_user`) VALUES
(1, 9, 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `nameSubject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `nameSubject`) VALUES
(1, 'Math 3'),
(4, 'English 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `useName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passWord` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `useName`, `passWord`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user1', '123456', 'admin', 1),
(3, 'user2', '123457', 'teacher', 1),
(14, 'hocsinh12', '123456', 'Student', 1),
(16, 'user3', '123456', 'student', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
