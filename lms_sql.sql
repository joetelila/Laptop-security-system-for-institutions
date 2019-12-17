-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2019 at 10:15 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ASTU`
--

-- --------------------------------------------------------

--
-- Table structure for table `astustuds`
--

CREATE TABLE `astustuds` (
  `id` int(10) UNSIGNED NOT NULL,
  `User_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year_joined` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currently` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `astustuds`
--

INSERT INTO `astustuds` (`id`, `User_id`, `first_name`, `last_name`, `dept`, `year_joined`, `currently`, `gender`, `created_at`, `updated_at`) VALUES
(4, 'NSR/1122/07', 'DANIEL', 'KIFLE', 'CSE', '2006', '1', 'male', '2018-05-06 14:15:26', '2018-05-06 14:15:26'),
(5, 'NSE/1232/07', 'KIFLE', 'TELILA', 'CSE', '2006', '1', 'male', '2018-05-06 14:23:14', '2018-05-06 14:23:14'),
(6, 'ASTU/3212/05', 'TEMESGEN', 'TAYE', 'CSE', '2005', '1', 'male', '2018-05-06 14:25:24', '2018-05-06 14:25:24'),
(7, 'ASTW/2321/06', 'Yeabsera', 'assefa', 'CSE', '1996', '1', 'male', '2018-05-06 14:33:17', '2018-05-06 14:33:17'),
(8, 'ASTU/1231/08', 'Fekadu', 'Yesehak', 'CSE', '2008', '1', 'male', '2018-05-06 15:44:08', '2018-05-06 15:44:08'),
(9, 'NSR/1212/07', 'DANIEL', 'KIFLE', 'CSE', '2007', '1', 'male', '2018-05-06 16:09:01', '2018-05-06 16:09:01'),
(10, 'ASTU/12322/08', 'ENDRIS', 'MOHAMMED', 'CSE', '2002', '1', 'male', '2018-05-07 03:49:36', '2018-05-07 03:49:36'),
(11, 'ASTU/1232/08', 'Kibru', 'Assefa', 'CSE', '2006', '1', 'male', '2018-07-05 10:11:00', '2018-07-05 10:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `guest_laptops`
--

CREATE TABLE `guest_laptops` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guest_laptops`
--

INSERT INTO `guest_laptops` (`id`, `Title`, `Fname`, `Lname`, `Gender`, `brand`, `model`, `ser_number`, `ser_loc`, `color`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Mr.', 'Daniel', 'Kifle', 'male', '2', 'Model 001', 'AX123C0921', 'undrLaptop', '2', '1', '2018-05-06 12:48:42', '2018-05-06 12:48:42'),
(11, 'Mr.', 'Tamerat', 'Aseffa', 'male', '8', 'Model 0012', 'ASDA2QWE2', 'undrLaptop', '4', '1', '2018-05-06 15:39:11', '2018-05-06 15:39:11'),
(12, 'Ms.', 'Mahlet', 'Abebe', 'male', '3', 'Model 0012', 'ASD123QSD', 'undrLaptop', '4', '1', '2018-05-06 15:49:38', '2018-05-06 15:49:38'),
(13, 'Mr.', 'BOGE', 'ADANU', 'male', '4', 'Model 0012', 'ASDASD2123', 'undrLaptop', '2', '1', '2018-05-06 16:20:15', '2018-05-06 16:20:15'),
(14, 'Mr.', 'Daniello', 'John', 'male', '4', 'Kermodel 1231', 'DSSD23DSD', 'undrLaptop', '4', '1', '2018-05-06 17:28:52', '2018-05-06 17:28:52'),
(15, 'Prof.', 'asdwrew', 'werw54', 'male', '4', 'sddfsfsdfsdf', 'sdfsdf', 'undrLaptop', '2', '1', '2018-05-09 07:12:14', '2018-05-09 07:12:14'),
(16, 'Ms.', 'Adanech', 'Shiferaw', 'female', '3', 'Model 1232', 'Q234RFSDFWE2423DSZX', 'undrBattr', '1', '1', '2018-06-27 10:40:43', '2018-06-27 10:40:43'),
(17, 'Mr.', 'YOSEPH', 'ABERA', 'male', '4', 'MODEL 1232', 'QWE12321QWE', 'undrLaptop', '3', '1', '2018-07-05 10:14:07', '2018-07-05 10:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_04_15_045728_create_students_table', 2),
('2018_04_15_084622_create_student_laptops_table', 3),
('2018_04_15_085145_create_student_laptops_table', 4),
('2018_04_15_093927_create_student_laptops_table', 5),
('2018_05_05_110815_create_staff_laptops_table', 6),
('2018_05_05_130319_create_guest_laptops_table', 7),
('2018_05_06_091422_create_studs_table', 8),
('2018_05_06_092139_create_astustuds_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_laptops`
--

CREATE TABLE `staff_laptops` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dept` int(255) NOT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff_laptops`
--

INSERT INTO `staff_laptops` (`id`, `Title`, `Fname`, `Dept`, `Lname`, `Job`, `Gender`, `brand`, `model`, `ser_number`, `ser_loc`, `color`, `status`, `created_at`, `updated_at`) VALUES
(28, 'Mr.', 'YOHANNES', 0, 'KIFLE', 'Academic and Research Assistant', 'male', '1', 'MacBook Air', 'AC0912SDFE2', 'undrLaptop', '3', '1', '2018-05-06 12:39:12', '2018-05-06 12:39:12'),
(29, 'Dr.', 'ssdf234', 0, 'sdfsd23', 'Academic and Research Assistant', 'male', '7', 'asd312', 'ads123', 'undrLaptop', '3', '1', '2018-05-06 12:40:40', '2018-05-06 12:40:40'),
(30, 'Mr.', 'YOHANNES', 0, 'KIFLE', 'Academic and Research Assistant', 'male', '3', 'Model 0012', 'ASD342SDF234', 'undrLaptop', '3', '1', '2018-05-06 15:54:22', '2018-05-06 15:54:22'),
(31, 'Mr.', 'YOHANNES', 0, 'KIFLE', 'Academic and Research Assistant', 'male', '2', 'Model 001', 'SDFSD234DS', 'undrLaptop', '2', '1', '2018-05-07 03:51:31', '2018-05-07 03:51:31'),
(32, 'Prof.', 'ABEBE', 0, 'DESSE', 'Lecturer', 'male', '2', 'Model 1321', '43DFG2342SDF', 'undrLaptop', '3', '1', '2018-06-29 07:26:12', '2018-06-29 07:26:12'),
(33, 'Prof.', 'Bekele', 0, 'Degne', 'Lecturer', 'male', '2', 'Model 123112', 'SDFW4534SASDF', 'undrLaptop', '3', '1', '2018-06-29 07:30:13', '2018-06-29 07:30:13'),
(34, 'Prof.', 'TAYE', 0, 'GELA', 'Lecturer', 'male', '5', 'MODEL12312', 'SDF23422SDF', 'undrLaptop', '1', '1', '2018-06-29 07:35:54', '2018-06-29 07:35:54'),
(35, 'Prof.', 'Daniel', 0, 'Assefa', 'ARA', 'male', '3', 'Model 001', 'WER22453234DSDA', 'undrLaptop', '2', '1', '2018-07-03 14:32:37', '2018-07-03 14:32:37'),
(36, 'Mr.', 'Yohannis', 0, 'Kifle', 'ARA', 'male', '1', 'MacBook Air', 'CFE234DF34', 'undrLaptop', '2', '1', '2018-07-05 10:07:24', '2018-07-05 10:07:24'),
(37, 'Prof.', 'Abenezer', 0, 'Alemayehu', 'Lecturer', 'male', '2', 'Abeni Model', 'QWE3234SDF2342', 'undrLaptop', '1', '1', '2018-09-03 11:56:04', '2018-09-03 11:56:04'),
(38, 'Mr.', 'Ahmed', 0, 'Yoha', 'Lecturer', 'male', '1', 'Mac Book Air', '3423123SDFSDF', 'undrLaptop', '2', '1', '2018-11-22 03:52:20', '2018-11-22 03:52:20'),
(39, 'Mr.', 'Kaleb', 0, 'Debebe', 'Lecturer', 'male', '4', 'Model1232231', 'ASDASD34234234', 'undrLaptop', '2', '1', '2018-12-01 11:05:12', '2018-12-01 11:05:12'),
(40, 'Mr.', 'Endale', 0, 'Aragu', 'Lecturer', 'male', '4', 'Model 1212', 'FSDF123242SDF', 'undrLaptop', '1', '1', '2019-01-15 04:12:37', '2019-01-15 04:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `student_laptops`
--

CREATE TABLE `student_laptops` (
  `id` int(10) UNSIGNED NOT NULL,
  `students_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ser_loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_laptops`
--

INSERT INTO `student_laptops` (`id`, `students_id`, `brand`, `model`, `ser_number`, `ser_loc`, `color`, `status`, `created_at`, `updated_at`) VALUES
(75, 'NSR/1122/07', '2', 'Model 001', 'Serial 00123', 'undrLaptop', '2', '1', '2018-05-06 14:21:37', '2018-05-06 14:21:37'),
(76, 'NSE/1232/07', '5', 'MODEL 001', 'SDSFD34ERT34', 'undrLaptop', '2', '1', '2018-05-06 14:24:15', '2018-05-06 14:24:15'),
(77, 'ASTU/3212/05', '5', 'MODEL 0123', 'SDSF234SDF', 'undrLaptop', '4', '1', '2018-05-06 14:25:57', '2018-05-06 14:25:57'),
(78, 'ASTW/2321/06', '1', 'Model 0012', 'ASD34SD', 'undrLaptop', '4', '1', '2018-05-06 14:33:44', '2018-05-06 14:33:44'),
(79, 'NSR/1122/07', '3', 'Model 0012', 'ASDAS234SDVCX345', 'undrLaptop', '3', '1', '2018-05-06 14:51:52', '2018-05-06 14:51:52'),
(80, 'NSR/1122/07', '4', 'MODEL 0012', '12131SDQD123', 'undrLaptop', '4', '1', '2018-05-06 15:04:43', '2018-05-06 15:04:43'),
(81, 'NSE/1232/07', '2', 'Model 0123sad', 'ASD234SDF345', 'undrLaptop', '3', '1', '2018-05-06 15:35:38', '2018-05-06 15:35:38'),
(82, 'ASTU/1231/08', '2', 'Model 0012', '213ASD234', 'undrLaptop', '2', '1', '2018-05-06 15:44:47', '2018-05-06 15:44:47'),
(83, 'ASTU/3212/05', '4', 'Model 00122', 'SDFASD242423', 'undrLaptop', '5', '1', '2018-05-06 15:53:08', '2018-05-06 15:53:08'),
(84, 'NSR/1212/07', '3', 'MODEL 00123123', 'ASDF34SDF234DFXZCR', 'undrLaptop', '2', '1', '2018-05-06 16:10:28', '2018-05-06 16:10:28'),
(85, 'ASTU/12322/08', '7', 'MODEL 0012', 'ASDAS3423WD', 'undrLaptop', '1', '1', '2018-05-07 03:50:16', '2018-05-07 03:50:16'),
(86, 'NSR/1122/07', '1', 'Model 0021', 'SDF3234SFDSF', 'undrLaptop', '2', '1', '2018-05-09 06:31:21', '2018-05-09 06:31:21'),
(87, 'NSR/1122/07', '1', 'MODEL 001222', 'ASD324SDF546', 'undrLaptop', '4', '1', '2018-05-09 07:11:22', '2018-05-09 07:11:22'),
(88, 'ASTU/1232/08', '3', 'Model 1223', 'SDADS234WER', 'undrLaptop', '1', '1', '2018-07-05 10:11:40', '2018-07-05 10:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `email`, `password`, `gender`, `last_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yohannes', 'joey@gmail.com', '$2y$10$lWiil4mNeYOC5Jj.kPBQlukOpwAoTJV4rh4QigsKZAEr2XccKQWky', 'Male', 'Kifle', 'mNR62dbIcWzfWNB7Q0CIdMuIoR2C1OteU06lAgrIygzAG7J2BfXdqyRZFiCP', NULL, '2018-12-01 11:00:20'),
(2, 'Desalegn', 'desu@gmail.com', '$2y$10$TtDsQmH7iuN23sFuI.JYqe86tUM4D//A.FcdncMg2aBTx9eSMRMYm', 'Male', 'Abebaw', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astustuds`
--
ALTER TABLE `astustuds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `astustuds_user_id_unique` (`User_id`);

--
-- Indexes for table `guest_laptops`
--
ALTER TABLE `guest_laptops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guest_laptops_ser_number_unique` (`ser_number`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `staff_laptops`
--
ALTER TABLE `staff_laptops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_laptops_ser_number_unique` (`ser_number`);

--
-- Indexes for table `student_laptops`
--
ALTER TABLE `student_laptops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_laptops_ser_number_unique` (`ser_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astustuds`
--
ALTER TABLE `astustuds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `guest_laptops`
--
ALTER TABLE `guest_laptops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `staff_laptops`
--
ALTER TABLE `staff_laptops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `student_laptops`
--
ALTER TABLE `student_laptops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;