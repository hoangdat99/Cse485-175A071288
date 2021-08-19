-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 10:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
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
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fullName`, `email`, `Code`, `image`, `phoneNumber`, `id_user`) VALUES
(1, 'Mr.Admin', '', '', NULL, '0123456', 1),
(2, 'Hoàng Đạt', 'hoangdatk95@gmail.com', 'HKGH777', 'des.jpg', '0917493396', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mock_data`
--

CREATE TABLE `mock_data` (
  `id` int(11) DEFAULT NULL,
  `score` decimal(3,1) DEFAULT NULL,
  `id_subject` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mock_data`
--

INSERT INTO `mock_data` (`id`, `score`, `id_subject`, `id_user`) VALUES
(1, '5.3', 34, 29),
(2, '8.1', 49, 100),
(3, '7.1', 49, 41),
(4, '3.2', 40, 62),
(5, '2.6', 32, 60),
(6, '3.0', 2, 21),
(7, '7.8', 17, 13),
(8, '8.1', 18, 41),
(9, '3.9', 50, 50),
(10, '5.4', 15, 70),
(11, '5.1', 38, 79),
(12, '9.7', 27, 17),
(13, '4.3', 37, 86),
(14, '2.9', 31, 91),
(15, '2.1', 50, 28),
(16, '9.9', 41, 26),
(17, '4.5', 31, 45),
(18, '3.4', 49, 29),
(19, '3.4', 21, 31),
(20, '5.5', 39, 52),
(21, '9.2', 17, 70),
(22, '8.5', 1, 18),
(23, '9.8', 1, 43),
(24, '2.2', 39, 15),
(25, '8.7', 20, 75),
(26, '1.6', 21, 18),
(27, '1.1', 17, 62),
(28, '7.6', 31, 70),
(29, '6.0', 48, 85),
(30, '6.2', 4, 3),
(31, '9.8', 44, 56),
(32, '5.8', 15, 48),
(33, '9.6', 6, 45),
(34, '2.3', 49, 93),
(35, '7.0', 27, 5),
(36, '7.6', 50, 7),
(37, '7.9', 12, 12),
(38, '1.9', 27, 85),
(39, '6.7', 9, 9),
(40, '3.8', 43, 27),
(41, '1.8', 2, 53),
(42, '6.0', 34, 41),
(43, '3.6', 9, 94),
(44, '1.7', 21, 4),
(45, '7.5', 2, 76),
(46, '7.3', 28, 23),
(47, '2.3', 11, 22),
(48, '7.6', 5, 77),
(49, '1.4', 27, 7),
(50, '7.8', 27, 79),
(51, '2.9', 26, 42),
(52, '4.7', 24, 80),
(53, '1.2', 47, 61),
(54, '8.7', 11, 88),
(55, '8.8', 32, 5),
(56, '4.6', 5, 56),
(57, '2.3', 43, 7),
(58, '7.6', 7, 3),
(59, '3.2', 20, 32),
(60, '4.2', 9, 87),
(61, '8.4', 6, 42),
(62, '8.9', 43, 99),
(63, '3.2', 24, 86),
(64, '4.6', 47, 12),
(65, '4.2', 47, 76),
(66, '2.7', 3, 55),
(67, '2.5', 50, 66),
(68, '6.6', 22, 100),
(69, '6.8', 32, 63),
(70, '2.5', 47, 65),
(71, '1.9', 44, 64),
(72, '2.8', 49, 12),
(73, '1.5', 33, 5),
(74, '6.9', 23, 43),
(75, '5.3', 37, 30),
(76, '1.2', 19, 25),
(77, '5.1', 36, 66),
(78, '7.3', 4, 86),
(79, '5.8', 49, 84),
(80, '7.6', 30, 20),
(81, '8.7', 19, 9),
(82, '2.9', 37, 92),
(83, '8.1', 16, 32),
(84, '1.0', 24, 66),
(85, '1.5', 41, 92),
(86, '3.8', 36, 74),
(87, '9.2', 39, 65),
(88, '3.2', 42, 72),
(89, '5.7', 41, 92),
(90, '3.6', 27, 68),
(91, '6.8', 13, 47),
(92, '5.0', 48, 29),
(93, '6.1', 8, 27),
(94, '4.5', 1, 91),
(95, '4.7', 1, 98),
(96, '7.5', 3, 6),
(97, '8.9', 42, 8),
(98, '9.9', 2, 95),
(99, '5.6', 39, 50),
(100, '2.2', 21, 91);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setTime` date DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `setTime`, `content`, `image`, `user_id`) VALUES
(1, 'tiêu đề 1', '0000-00-00', 'Đây là nội dung 1', '', 1),
(2, 'tiêu đề 2', '0000-00-00', 'Đây là nội dung 2', '', 3),
(3, 'tiêu đề 3', '0000-00-00', 'Đây là nội dung 2', '', 2),
(4, 'tiêu đề 4', '0000-00-00', 'Đây là nội dung 4', '', 3),
(5, 'tiêu đề 5', '0000-00-00', 'Đây là nội dung 2', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `score` double DEFAULT NULL,
  `id_subject` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `score`, `id_subject`, `id_user`) VALUES
(1, 5, 5, 17),
(2, 7.7, 10, 17),
(3, 3.3, 2, 19),
(4, 6.7, 10, 17),
(5, 2.3, 8, 15),
(6, 8.4, 10, 20),
(7, 1.9, 8, 18),
(8, 3.4, 8, 15),
(9, 1.3, 11, 15),
(10, 5.3, 2, 18),
(11, 4.7, 4, 16),
(12, 9.8, 2, 18),
(13, 6, 3, 17),
(14, 9.6, 5, 14),
(15, 6.8, 1, 14),
(16, 8.2, 4, 15),
(17, 4.8, 11, 17),
(18, 6.4, 5, 14),
(19, 3.6, 7, 16),
(20, 6.1, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `nameSubject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `nameSubject`) VALUES
(1, 'Công nghệ Web'),
(2, 'Toán Cao Cấp'),
(3, 'Tư tưởng Hồ Chí Minh'),
(4, 'Lập trình nâng cao'),
(5, 'Đại số tuyến tính'),
(6, 'Hệ điều hành'),
(7, 'Cấu trúc dữ liệu và giải thuật'),
(8, 'Thuật toán ứng dụng'),
(9, 'Tiếng anh 1'),
(10, 'Tiếng anh 2'),
(11, 'Tiếng anh 3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `useName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passWord` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `useName`, `passWord`, `role`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'user1', '123456', 'admin', 0),
(3, 'user2', '123457', 'teacher', 1),
(4, 'beatk99', '123456', 'teacher', 1),
(13, 'hocsinh1', '123456', 'student', 1),
(14, 'hocsinh2', '123456', 'student', 1),
(15, 'hocsinh3', '123456', 'student', 1),
(16, 'hocsinh4', '123456', 'student', 1),
(17, 'hocsinh5', '123456', 'student', 1),
(18, 'hocsinh6', '123456', 'student', 1),
(19, 'hocsinh7', '123456', 'student', 1),
(20, 'hocsinh8', '123456', 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `scores_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
