-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 03:53 AM
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
-- Cấu trúc bảng cho bảng `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `specialized` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `admission` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `email`, `phone`, `birthday`, `address`, `specialized`, `education`, `admission`, `status`) VALUES
(1, 'Hoàng Đạt', 'hoangdatk95@gmail.com', '0917493396', '2021-08-30', 'ha nam', 'Công nghệ thông tin', 'Đại học chính quy', 'Thi', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(1, 'Giới Thiệu'),
(2, 'Tin Tức - Thông báo'),
(3, 'Đào Tạo'),
(4, 'Khoa học công nghệ'),
(5, 'Hợp tác đối ngoại'),
(6, 'Tuyển sinh'),
(7, 'Đảm bảo chất lượng'),
(8, 'Sinh viên'),
(9, 'Tuyển dụng');

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
(1, 'HoàngĐạt', 'hoangdatk95@gmail.com', 'HKGH777', 'des.jpg', '0917493396', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `setTime` date DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `setTime`, `content`, `image`, `status`, `id_category`, `id_user`) VALUES
(1, 'Nhiều năm ở nước ngoài, nhà khoa học nữ 8X quyết trở về Việt Nam để nghiên cứu', '2021-08-29', 'Tiến sĩ Đinh Thị Hinh từng giành học bổng toàn phần du học Hàn Quốc nhưng sau khi tốt nghiệp cô vẫn quyết tâm quay trở về Việt Nam.', 'infor1.jpg', 1, 1, 1),
(2, 'Tạm dừng đến trường, không dừng việc học', '2021-08-28', '[Dân trí] Cứ nghĩ đến hình ảnh cô gái người Thái ở bản Mường Toong 1 và chàng trai người H’Mông ở bản Huổi Hốc hàng ngày phải ra vườn hoặc lên nương tìm sóng để học trực tuyến khiến nhiều người cảm phục.', 'news3.jpg', 1, 1, 1),
(3, '[Báo lao động] Tặng 8.000 lít dung dịch sát khuẩn để học sinh phòng dịch COVID-19', '2021-02-26', '8.000 lít dung dịch sát khuẩn tay đã được Trường Đại học Phenikaa chuyển tới các trường học ở khu vực phía bắc, để chung tay cùng chuẩn các bị điều kiện tốt nhất, đảm bảo an toàn khi học sinh trở lại trường.', 'imgEvent3.jpg', 1, 1, 1),
(4, '[Giáo dục thời đại] Trường ĐH Phenikaa tặng trường học gần 8.000 lít dung dịch sát khuẩn', '2021-02-20', 'GD&TĐ - Tiếp tục hưởng ứng tinh thần tất cả chung tay phòng “chống giặc” COVID-19, lãnh đạo Trường ĐH Phenikaa đã trực tiếp trao tặng dung dịch sát khuẩn tay cho ba Sở GD&ĐT: tỉnh Vĩnh Phúc, Nam Định và Phú Thọ. Tính đến ngày 19/2/2020, trường này đã tặng', 'news2.jpg', 1, 1, 1),
(5, '[Giáo dục Việt Nam] Trường Phenikaa pha chế hơn 5.000 lít nước rửa tay tặng các trường học và cư dân', '2021-08-29', 'Với tinh thần tất cả vì cộng đồng, các cán bộ, giảng viên, và sinh viên Trường Đại học Phenikaa đã cùng nhau bắt tay vào pha chế nước rửa tay phòng chống nCoV.', 'thumbnail6.jpg', 1, 1, 1),
(8, '[Hà Nội mới Online] Thành phố Hồ Chí Minh và nhiều trường đại học cho học sinh, sinh viên nghỉ học đến ngày 16-2', '2021-08-29', 'Chiều 6-2, UBND thành phố Hồ Chí Minh đã quyết định cho hơn 1,7 triệu học sinh phổ thông; sinh viên, học viên các trường, trung tâm giáo dục thường xuyên... thuộc sự quản lý của Sở Giáo dục và Đào tạo thành phố được nghỉ học đến hết ngày 16-2, bảo đảm an ', 'thumbnail5.jpg', 1, 1, 1),
(9, '[Người lao động] \"Xông đất\" nhà khoa học Việt tuổi Tý lọt top nhà khoa học hàng đầu thế giới', '2021-08-29', '36 tuổi, TS Đào Văn Dương, Trưởng khoa Công nghệ Sinh học, hóa học và Kỹ thuật môi trường, Trường ĐH Phenikaa, nằm trong top hơn 100.000 nhà khoa học hàng đầu thế giới. Nhân dịp năm mới Canh Tý, tiến sĩ tuổi Giáp Tý đã có những chia sẻ về đam mê cũng như ', 'thumbnail5.jpg', 1, 1, 1),
(10, '[vnexpress.net] Phương án tuyển sinh dự kiến của hai đại học tư thục', '2021-08-28', 'Đại học FPT tuyển sinh hơn 1.300 chỉ tiêu. Đại học Phenikaa tuyển hơn 1.700 em, dự kiến học phí từ 20 đến 32 triệu đồng (đã được hỗ trợ 20%).', 'news1.jpg', 1, 1, 1),
(11, 'Trường Đại học Phenikaa công bố ngưỡng điểm nhận hồ sơ xét tuyển Đại học hệ chính quy theo phương thức xét điểm thi tốt nghiệp THPT năm 2021', '2021-08-29', 'Hội đồng Tuyển sinh Trường Đại học Phenikaa (PKA) công bố ngưỡng điểm nhận hồ sơ đăng ký xét tuyển (điểm sàn) đại học hệ chính quy năm 2021 vào từng ngành/chương trình theo phương thức xét điểm thi tốt nghiệp Trung học phổ thông', 'news1.jpg', 1, 2, 1),
(12, 'Trường Đại học Phenikaa công bố kết quả xét tuyển đợt 2 năm 2021 theo phương thức xét tuyển kết quả học tập THPT (học bạ)', '2021-08-29', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:', 'news2.jpg', 1, 2, 1),
(13, 'Thông báo nhập học đợt 2 năm 2021', '2021-08-29', 'Thí sinh đã đạt kết quả xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức tuyển thẳng và kết quả học tập bậc THPT (học bạ) đợt 2 năm 2021.', 'news3.jpg', 1, 2, 1),
(14, 'Trường Đại học Phenikaa hỗ trợ học phí cho sinh viên, học viên do ảnh hưởng của dịch COVID-19', '2021-08-29', 'Thấu hiểu được những khó khăn của phụ huynh và sinh viên trước tình hình dịch bệnh vẫn kéo dài, Trường Đại học Phenikaa quyết định hỗ trợ một phần kinh phí cho tất cả sinh viên, học viên đang theo học tại Trường nhằm hỗ trợ tối đa cho người học.', 'news4.jpg', 1, 2, 1),
(15, 'Trường Đại học Phenikaa nhận hồ sơ xét tuyển học bạ đợt 2 năm 2021', '2021-08-27', 'Hội đồng tuyển sinh Trường Đại học Phenikaa (PKA) thông báo nhận hồ sơ xét tuyển đại học hệ chính quy các ngành/chương trình đào tạo (CTĐT) theo phương thức kết quả học tập bậc THPT (Học bạ) đợt 2 năm 2021 như sau:', 'news14.jpg', 1, 2, 1),
(16, 'Cử nhân quốc tế Quản trị kinh doanh Trường Đại học Phenikaa – Đại học Andrews (Hoa Kỳ)', '2021-08-25', 'Thành lập năm 1874 tại bang Michigan, Đại học Andrews (Hoa Kỳ) là một trong những trường đại học lớn, lâu đời ở khu vực Trung Bắc nước Mỹ, được kiểm định Vùng (bậc kiểm định cao nhất của giáo dục Đại học Hoa Kỳ) bởi Hội đồng Kiểm định bậc cao (CHEA) và Bộ', 'thumbnail3.jpg', 1, 3, 1),
(17, 'Chương trình đào tạo ngành Trí tuệ nhân tạo và Khoa học dữ liệu', '2021-08-06', 'Chương trình Khoa học máy tính (Trí tuệ nhân tạo và Khoa học dữ liệu) sẽ cung cấp cho người học các kiến thức cập nhật và các kỹ năng cần thiết trong các lĩnh vực trọng điểm của Cách mạng công nghiệp 4.0 là trí tuệ nhân tạo và Khoa học dữ liệu: bao gồm cá', 'news7.jpg', 1, 3, 1),
(18, 'Chương trình đào tạo ngành Khoa học môi trường (Sức khoẻ môi trường và phát triển bền vững)', '2021-08-28', 'CTĐT Kỹ sư ngành Khoa học môi trường (Sức khoẻ môi trường và phát triển bền vững) tại Trường Đại học Phenikaa được cập nhật dựa trên việc đối sánh với các CTĐT tại các trường đại học tiên tiến trên thế giới (MIT, Texas southern University, Ohio University', 'news4.jpg', 1, 3, 1),
(19, 'Chương trình đào tạo ngành Kỹ thuật Cơ khí', '2021-08-26', 'Chương trình đào tạo ngành Kỹ thuật cơ khí của Trường Đại học Phenikaa được xây dựng theo chuẩn CDIO, là khung phát triển chương trình đào tạo kỹ sư của MIT (Mỹ)', 'news4.jpg', 1, 3, 1),
(20, 'Chương trình đào tạo ngành Kỹ thuật ô tô (Cơ điện tử ô tô)', '2021-08-03', 'Chương trình đào tạo chất lượng cao Cơ điện tử ô tô của Trường Đại học Phenikaa được xây dựng từ chương trình đào tạo cơ điện tử ô tô của các trường đại học hàng đầu trên thế giới; cung cấp những kiến thức hiện đại, cập nhật trong lĩnh vực cơ điện tử ô tô', 'news9.jpg', 1, 3, 1),
(21, 'Tuyển dụng Giảng viên Kỹ thuật Ô tô – Khoa Kỹ thuật Ô tô và Năng lượng', '2021-08-17', 'Trường Đại học Phenikaa có nhu cầu tuyển dụng Giảng viên Kỹ thuật Ô tô – Khoa Kỹ thuật Ô tô và Năng lượng với thông tin chi tiết như sau:', 'news7.jpg', 0, 9, 1),
(22, 'Tuyển dụng giảng viên Khối ngành Sức khỏe', '2021-08-04', 'Trường Đại học Phenikaa thông báo tuyển dụng giảng viên Khối ngành Sức khỏe cụ thể như sau: ', 'thumbnail5.jpg', 1, 9, 1),
(23, 'Tuyển dụng các Trưởng Bộ môn Khối ngành Sức khỏe', '2021-08-25', 'Trường Đại học Phenikaa thông báo tuyển dụng vị trí Trưởng Bộ môn Khối ngành Sức khỏe cụ thể như sau', 'news4.jpg', 1, 9, 1),
(24, 'Tuyển dụng Trưởng phòng Tuyển sinh và Truyền thông', '2021-08-20', 'Trường Đại học Phenikaa thông báo tuyển dụng vị trí Trưởng phòng Tuyển sinh và Truyền thông cụ thể như sau:', 'news1.jpg', 1, 9, 1),
(25, 'THƯ MỜI VIẾT BÀI HỘI THẢO KHOA HỌC QUỐC TẾ ICISN 2022', '2021-09-02', 'Nhằm đẩy mạnh công tác nghiên cứu khoa học, tạo điều kiện để các nhà nghiên cứu, các nhà khoa học trong nước và quốc tế có cơ hội trao đổi, chia sẻ thông tin, thảo luận và công bố những công trình nghiên cứu khoa học về các vấn đề liên quan đến mạng và cá', 'news2.jpg', 1, 4, 1),
(26, 'Thông báo tiếp nhận hồ sơ đăng ký đề tài Tiềm năng năm 2021.', '2021-08-12', 'Tiếp nhận hồ sơ đăng ký đề tài Tiềm năng năm 2021 theo Thông tư số 40/2014/TT-BKHCN ngày 18/12/2014 của Bộ KH&CN bắt đầu đăng ký thực hiện từ năm 2022.', 'news4.jpg', 1, 4, 1),
(27, 'TỌA ĐÀM PHENIKAA-LAB2MARKET NĂM 2021', '2021-08-18', 'Ngày 23/06/2021, Trường ĐH Phenikaa phối hợp với Quỹ BK Fund tổ chức buổi tọa đàm trực tuyến Phenikaa-Lab2market năm 2021 nhằm mục tiêu hỗ trợ các nhà khoa học của Trường đưa các kết quả nghiên cứu ra thị trường, kết nối họ với doanh nghiệp, nhà đầu tư tr', 'news7.jpg', 1, 4, 1),
(28, 'HỘI NGHỊ SINH VIÊN NGHIÊN CỨU KHOA HỌC NĂM HỌC 2020-2021', '2021-08-26', 'Ngày 15/06/2021 Trường Đại học Phenikaa đã tổ chức Hội nghị Sinh viên nghiên cứu khoa học (SV NCKH) năm học 2020-2021. Đây là sự kiện thường niên được Trường Đại học Phenikaa tổ chức nhằm tạo sân chơi kích thích niềm đam mê sáng tạo, giúp sinh viên làm qu', 'thumbnail4.jpg', 1, 4, 1);

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
(1, 'admin', '$2y$10$OCqauGG/D/JX6biOqwaZbOmcEwK5mFYBGWsVC1PQ6INdE7/Js9H.C', 'admin', 1),
(27, 'beatk99', '$2y$10$Yp58yT13pIvQbg6AAuRd/.X1SjkJp1B23y64DgIEmnF1wH8EbxFB6', 'admin', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
