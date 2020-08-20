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
