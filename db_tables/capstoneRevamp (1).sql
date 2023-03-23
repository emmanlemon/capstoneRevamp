-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2023 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoneRevamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnailImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `shortDescription`, `fullDescription`, `header`, `thumbnailImage`, `fullImage`, `created_at`, `updated_at`) VALUES
(4, 'asdas', '', 'sadsa', NULL, '221489473_4012864035477828_357138612137997816_n.jpg', '221489473_4012864035477828_357138612137997816_n.jpg', '2022-12-08 11:49:58', '2022-12-08 11:49:58'),
(5, 'JUST IN: SEPNAS SOARS AGAIN!', 'The PHINMA-University of Pangasinan  conducted a ceremony, March 1, 2022,', 'The winners under junior high school and senior high school category for the #TaketheLead. We\'re Very Proud to say that Our School obtained a two Major Awards. Out of 14 participants in Junior High School Category KRIZTINE YAMBAO (JHS CATEGORY) really did ascend as she bagged the FIRST SPOT! SEPNAS Family is very Proud of you! Continue to bring light and inspiration to others by being good Leaders! #TatakSEPNAS #TatakSSG #KasamaMoAngPHINMAEd  #MakingLivesBetterThroughEducation  #TakeTheLead2022', 'https://www.youtube.com/', '274333233_1193458454517777_1033353473041095719_n.jpg', '274333233_1193458454517777_1033353473041095719_n.jpg', '2023-01-13 07:43:57', '2023-01-13 07:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnailImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `shortDescription`, `fullDescription`, `header`, `thumbnailImage`, `fullImage`, `created_at`, `updated_at`) VALUES
(5, 'Balik Eskwela 2k23', 'Kumusta, SEPNASians?  Handa na ba kayo? Tara Na!!!', 'Kumusta, SEPNASians?  Handa na ba kayo?  Tuloy na tuloy na bukas, January 4, 2023, ang ating pagbabalik sa ating minamahal na eskwelahan. Excited na kaming makita kayong muli!  Kitakits bukas, 7:15 AM!  #TatakSSGSEPNAS', 'Balik Eskwela 2k23', 'balik eskwela.jpg', 'balik eskwela.jpg', '2023-01-13 06:57:07', '2023-01-13 06:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulletin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulletin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `bulletin`, `bulletin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'sample', 'achievements', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 'sample', 'announcements', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'sampleee', 'achievements', 9, '2022-12-02 08:21:34', '0000-00-00 00:00:00'),
(4, 2, 'hakdog', 'news', 9, '2022-12-02 08:21:34', '0000-00-00 00:00:00'),
(5, 3, 'sampleeulit', 'news', 9, '2022-12-02 08:21:34', '0000-00-00 00:00:00'),
(6, 1, 'hadoda', 'news', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 'asdasdas', 'news', 9, '2022-12-06 11:09:35', '2022-12-06 11:09:35'),
(9, 2, 'asdasdasdasda', 'news', 9, '2022-12-06 11:25:09', '2022-12-06 11:25:09'),
(10, 2, 'sample lang po', 'news', 9, '2022-12-06 11:26:10', '2022-12-06 11:26:10'),
(11, 2, 'sadasdsasada', 'news', 9, '2022-12-06 11:31:16', '2022-12-06 11:31:16'),
(12, 2, 'hakdog', 'news', 9, '2022-12-06 11:33:00', '2022-12-06 11:33:00'),
(13, 2, 'asdadas', 'news', 9, '2022-12-06 14:35:46', '2022-12-06 14:35:46'),
(14, 2, 'asdas', 'news', 9, '2022-12-06 14:37:28', '2022-12-06 14:37:28'),
(15, 2, 'asdas', 'news', 9, '2022-12-06 14:37:28', '2022-12-06 14:37:28'),
(16, 2, 'asdas', 'news', 9, '2022-12-06 14:37:28', '2022-12-06 14:37:28'),
(17, 2, 'sample lang', 'news', 9, '2022-12-06 14:37:43', '2022-12-06 14:37:43'),
(18, 3, 'samplee lang din ulit', 'news', 9, '2022-12-06 14:43:21', '2022-12-06 14:43:21'),
(19, 3, 'sample lang po', 'achievements', 3, '2022-12-06 14:51:38', '2022-12-06 14:51:38'),
(20, 3, 'Tara Pa enroll na tayo', 'announcements', 2, '2022-12-07 07:09:59', '2022-12-07 07:09:59'),
(21, 3, 'asdsadas', 'announcements', 2, '2022-12-07 17:01:27', '2022-12-07 17:01:27'),
(22, 3, 'ayaw ko pa pumasok ahhaha', 'announcements', 2, '2022-12-07 17:01:32', '2022-12-07 17:01:32'),
(23, 3, 'sampleee lang sadadsa', 'news', 9, '2022-12-08 06:32:40', '2022-12-08 06:32:40'),
(24, 3, 'edi wow', 'announcements', 2, '2022-12-08 06:50:50', '2022-12-08 06:50:50'),
(25, 7, 'asdasdsa', 'news', 9, '2022-12-09 02:36:27', '2022-12-09 02:36:27'),
(26, 7, 'sample', 'announcements', 2, '2022-12-10 04:23:06', '2022-12-10 04:23:06'),
(27, 7, 'asdsa', 'achievements', 4, '2022-12-10 04:34:36', '2022-12-10 04:34:36'),
(28, 7, 'sampleee', 'announcements', 2, '2022-12-14 03:04:36', '2022-12-14 03:04:36'),
(29, 7, 'adsas', 'announcements', 2, '2023-01-05 13:58:14', '2023-01-05 13:58:14'),
(30, 7, 'sample lit', 'announcements', 2, '2023-01-09 04:49:48', '2023-01-09 04:49:48'),
(31, 8, 'sampleee', 'announcements', 2, '2023-01-09 06:42:11', '2023-01-09 06:42:11'),
(32, 7, 'adadsa', 'announcements', 2, '2023-01-09 08:09:31', '2023-01-09 08:09:31'),
(33, 4, 'sample', 'announcements', 3, '2023-01-10 15:49:14', '2023-01-10 15:49:14'),
(34, 4, 'ZXzX', 'announcements', 5, '2023-01-13 08:07:11', '2023-01-13 08:07:11'),
(35, 9, 'astig', 'announcements', 5, '2023-01-18 02:18:51', '2023-01-18 02:18:51'),
(36, 10, 'amazing', 'announcements', 5, '2023-01-18 02:44:47', '2023-01-18 02:44:47'),
(37, 4, 'samplee', 'announcements', 5, '2023-01-18 05:08:16', '2023-01-18 05:08:16'),
(38, 4, 'sample', 'achievements', 5, '2023-01-19 02:28:56', '2023-01-19 02:28:56'),
(39, 11, 'hello', 'announcements', 5, '2023-01-20 04:55:55', '2023-01-20 04:55:55'),
(40, 12, 'samplee', 'announcements', 5, '2023-01-20 06:04:33', '2023-01-20 06:04:33'),
(41, 4, 'sampleedin', 'announcements', 5, '2023-01-23 15:47:35', '2023-01-23 15:47:35'),
(42, 4, 'gdgf', 'announcements', 5, '2023-01-23 15:58:36', '2023-01-23 15:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `message`, `email`, `recipient`, `created_at`, `updated_at`) VALUES
(1, 'distinctio', 'dolores', 'Debitis quia.', 'lilla72@example.net', 'repellat adipisci sit quam veniam', '2022-12-02 08:21:34', '2022-12-02 08:21:34'),
(2, 'deleniti', 'voluptatem', 'Delectus quidem.', 'wcummerata@example.org', 'fuga deserunt optio omnis molestiae pariatur', '2022-12-02 08:21:34', '2022-12-02 08:21:34'),
(3, 'quis', 'totam', 'Dicta aut.', 'cortez40@example.com', 'vel accusamus odit nobis quibusdam id numquam quis eius amet', '2022-12-02 08:21:34', '2022-12-02 08:21:34'),
(4, 'quas', 'necessitatibus', 'Quam dolores.', 'ukling@example.net', 'dicta qui autem qui provident impedit hic repudiandae quod unde', '2022-12-02 08:21:34', '2022-12-02 08:21:34'),
(5, 'quis', 'omnis', 'Magnam non.', 'gfeil@example.org', 'dicta ut soluta aliquam qui ipsam quia est perferendis', '2022-12-02 08:21:34', '2022-12-02 08:21:34'),
(6, 'asdsa', 'asd', 'asdsa', 'emman@gmail.com', 'admin', '2022-12-08 12:20:39', '2022-12-08 12:20:39'),
(7, 'emman', 'sample', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-03 04:41:49', '2023-01-03 04:41:49'),
(8, 'emman', 'sample', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-03 04:42:08', '2023-01-03 04:42:08'),
(9, 'emman', 'sample', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-03 04:43:02', '2023-01-03 04:43:02'),
(10, 'sada', 'asdas', 'asdsa', 'asdsa', 'admin', '2023-01-03 04:43:12', '2023-01-03 04:43:12'),
(11, 'eqwe', 'qweq', 'qwewq', 'qweq', 'admin', '2023-01-03 04:43:56', '2023-01-03 04:43:56'),
(12, 'asdsa', 'asdas', 'sada', 'asdsa@gmail.com', 'admin', '2023-01-03 04:44:23', '2023-01-03 04:44:23'),
(13, 'asdsa', 'asdas', 'sada', 'asdsa@gmail.com', 'admin', '2023-01-03 04:44:24', '2023-01-03 04:44:24'),
(14, 'asdsa', 'asdas', 'sada', 'asdsa@gmail.com', 'admin', '2023-01-03 04:44:24', '2023-01-03 04:44:24'),
(15, 'asdsa', 'sadsa', 'sadas', 'sada@gmail.com', 'admin', '2023-01-03 04:45:01', '2023-01-03 04:45:01'),
(16, 'asdsa', 'asd', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-03 04:45:33', '2023-01-03 04:45:33'),
(17, 'asdsaa', 'asdas', 'asdsa', 'sada@gmail.com', 'admin', '2023-01-03 04:46:22', '2023-01-03 04:46:22'),
(18, 'adsa', 'ada', 'asdsa', 'adsa@gmail.com', 'admin', '2023-01-05 06:07:09', '2023-01-05 06:07:09'),
(19, 'asdsa', 'asdsa', 'asdas', 'asdas', 'admin', '2023-01-05 14:34:03', '2023-01-05 14:34:03'),
(20, 'asda', 'asda', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:34:22', '2023-01-05 14:34:22'),
(21, 'asd', 'asdas', 'dad', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:41:03', '2023-01-05 14:41:03'),
(22, 'emman', 'asdas', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:41:18', '2023-01-05 14:41:18'),
(23, 'asdsa', 'sample', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:41:46', '2023-01-05 14:41:46'),
(24, 'emman', 'asd', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:43:13', '2023-01-05 14:43:13'),
(25, 'asd', 'asdsa', 'asdsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:45:37', '2023-01-05 14:45:37'),
(26, 'asda', 'asdsa', 'asd', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:54:48', '2023-01-05 14:54:48'),
(27, 'asdas', 'asdas', 'asd', 'asda@gmail.com', 'admin', '2023-01-05 14:55:40', '2023-01-05 14:55:40'),
(28, 'asd', 'aasd', 'asdsa', 'Emman@outsoar.ph', 'admin', '2023-01-05 14:57:19', '2023-01-05 14:57:19'),
(29, 'asd', 'asdas', 'adsa', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 14:57:35', '2023-01-05 14:57:35'),
(30, 'asda', 'asdas', 'asdas', 'admin@gmail.com', 'admin', '2023-01-05 14:57:58', '2023-01-05 14:57:58'),
(31, 'asdasd', 'asdas', 'asd', 'asda@gmail.com', 'admin', '2023-01-05 15:00:03', '2023-01-05 15:00:03'),
(32, 'asdas', 'adsa', 'asda', 'emmanuellemon12@yahoo.com', 'registrar', '2023-01-05 15:20:56', '2023-01-05 15:20:56'),
(33, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:07', '2023-01-05 15:23:07'),
(34, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:13', '2023-01-05 15:23:13'),
(35, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:15', '2023-01-05 15:23:15'),
(36, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:15', '2023-01-05 15:23:15'),
(37, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:15', '2023-01-05 15:23:15'),
(38, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:16', '2023-01-05 15:23:16'),
(39, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:16', '2023-01-05 15:23:16'),
(40, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:16', '2023-01-05 15:23:16'),
(41, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:17', '2023-01-05 15:23:17'),
(42, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:17', '2023-01-05 15:23:17'),
(43, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:17', '2023-01-05 15:23:17'),
(44, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:18', '2023-01-05 15:23:18'),
(45, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:18', '2023-01-05 15:23:18'),
(46, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:18', '2023-01-05 15:23:18'),
(47, 'emman', 'sample', 'asdsa', 'asda@gmail.com', 'admin', '2023-01-05 15:23:52', '2023-01-05 15:23:52'),
(48, 'adas', 'asdsa', 'asdas', 'emmanuellemon12@yahoo.com', 'registrar', '2023-01-05 15:27:21', '2023-01-05 15:27:21'),
(49, 'asd', 'asd', 'asd', 'Emman@outsoar.ph', 'admin', '2023-01-05 15:33:11', '2023-01-05 15:33:11'),
(50, 'asd', 'asd', 'asd', 'Emman@outsoar.ph', 'admin', '2023-01-05 15:33:23', '2023-01-05 15:33:23'),
(51, 'asd', 'asd', 'asd', 'Emman@outsoar.ph', 'admin', '2023-01-05 15:33:27', '2023-01-05 15:33:27'),
(52, 'asd', 'asd', 'asd', 'Emman@outsoar.ph', 'admin', '2023-01-05 15:33:28', '2023-01-05 15:33:28'),
(53, 'asd', 'asd', 'asd', 'Emman@outsoar.ph', 'admin', '2023-01-05 15:33:28', '2023-01-05 15:33:28'),
(54, 'asdsa', 'asdas', 'asda', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 15:34:59', '2023-01-05 15:34:59'),
(55, 'asda', 'asda', 'asda', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 15:36:32', '2023-01-05 15:36:32'),
(56, 'asdsa', 'asda', 'asdas', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 15:37:15', '2023-01-05 15:37:15'),
(57, 'adsa', 'asdsa', 'asdas', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-05 15:38:37', '2023-01-05 15:38:37'),
(58, 'asd', 'sad', 'sda', 'dsa@gmail.com', 'registrar', '2023-01-09 04:51:57', '2023-01-09 04:51:57'),
(59, 'sample', 'sample', 'samplee', 'sample@gmail.com', 'admin', '2023-01-09 06:35:47', '2023-01-09 06:35:47'),
(60, 'Emmanuel Joshua A. Lemon', 'sample', 'ijikn', 'emmanuellemon12@yahoo.com', 'admin', '2023-01-10 15:46:11', '2023-01-10 15:46:11'),
(61, 'asaasd', 'sada', 'dsada', 'dsad@gmail.com', 'admin', '2023-01-13 01:39:44', '2023-01-13 01:39:44'),
(62, 'Emmanuel Joshua A. Lemona', 'sampl', 'asdsa', 'aada@gmail.com', 'admin', '2023-03-03 08:38:30', '2023-03-03 08:38:30'),
(63, 'Emmanuel', 'samplasdsa', 'asdsaasdsa', 'aada@gmail.com', 'admin', '2023-03-03 08:39:23', '2023-03-03 08:39:23'),
(64, 'Emmanueaaa', 'samplasdsa', 'asdsaasdsa', 'aada@gmail.com', 'admin', '2023-03-03 08:40:52', '2023-03-03 08:40:52'),
(65, 'Cedric Mendoza', 'sample', 'sample', 'sample@gmail.com', 'registrar', '2023-03-03 12:44:49', '2023-03-03 12:44:49'),
(66, 'Mariel Lemon', 'rthjdhfxcfghj', 'ghdfhfcvhjkv', 'hgkjghf@gmail.com', 'admin', '2023-03-03 13:01:40', '2023-03-03 13:01:40'),
(67, 'Emmanuel Joshua A. Lemonaaa', 'sadad', 'dasda', 'asd@gmail.com', 'admin', '2023-03-05 11:52:31', '2023-03-05 11:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(100, '2022_12_02_101621_create_answers_table', 3),
(101, '2022_12_02_101621_create_entries_table', 3),
(102, '2022_12_02_101621_create_questions_table', 3),
(103, '2022_12_02_101621_create_sections_table', 3),
(104, '2022_12_02_101621_create_surveys_table', 3),
(105, '2014_10_12_000000_create_users_table', 4),
(106, '2014_10_12_100000_create_password_resets_table', 4),
(107, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(108, '2019_08_19_000000_create_failed_jobs_table', 4),
(109, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(110, '2022_10_29_032601_create_sessions_table', 4),
(111, '2022_11_01_141218_create_contacts_table', 4),
(112, '2022_11_02_134141_create_achievements_table', 4),
(113, '2022_11_08_024623_create_announcements_table', 4),
(114, '2022_11_09_033002_create_news_table', 4),
(115, '2022_12_01_024210_create_upcoming_events_table', 4),
(119, '2022_12_05_210240_create_comments_table', 5),
(122, '2022_12_08_191430_create_polls_table', 6),
(123, '2022_12_08_191557_create_options_table', 6),
(128, '2022_12_11_123609_create_responses_table', 7),
(135, '2023_01_08_161234_create_votes_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnailImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `shortDescription`, `fullDescription`, `header`, `thumbnailImage`, `fullImage`, `created_at`, `updated_at`) VALUES
(10, 'Happy Birthday Dr. Marites V. Cabatbat!', 'Happy Birthday Principal!!!', 'Your SEPNAS Family wishes you a dynamic impetus in watering and nurturing the seeds of the students who will later soar high as meaningful trees of excellence in the community. From the bottom of our hearts, we would like to exclaim that we love you sincerely!', 'Happy Birthday Dr. Marites V. Cabatbat!', '69604837_771558619925978_3974823831075291136_n.png', '69604837_771558619925978_3974823831075291136_n.png', '2023-01-13 07:02:54', '2023-01-13 07:02:54'),
(11, 'Concert With The Cause', 'Mamaya na, SEPNASians! Tara na at Maki-jamming!', 'Suportahan natin ang SSG SEPNAS sa Concert for a Cause, Live mamaya sa Deped Tayo San Carlos City - Pangasinan page.  Tara na at Maki-jamming! Kitakits! 💚💛', 'Concert With The Cause', '319800218_2643562575779112_6522971712061089021_n.jpg', '319800218_2643562575779112_6522971712061089021_n.jpg', '2023-01-13 07:04:07', '2023-01-13 07:04:07'),
(12, 'Flag Raising Sepnas', 'Sepnas ang aking pangalawang tahanan!!!', 'Flag Raising Ceremony Photo  #TatakSSG  #TatakSEPNAS', 'Flag Raising Sepnas', 'Flag Rising.jpg', 'Flag Rising.jpg', '2023-01-13 07:10:09', '2023-01-13 07:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `votes_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `poll_id`, `content`, `votes_count`, `created_at`, `updated_at`) VALUES
(1, 1, 'sample1', 1, '2022-12-08 13:06:38', '2023-03-03 15:15:31'),
(2, 1, 'sample2', 2, '2022-12-08 13:06:38', '2023-03-03 15:15:31'),
(3, 1, 'sample3', 0, '2022-12-08 13:07:36', '2023-03-03 15:15:31'),
(4, 1, 'sample4', 0, '2022-12-08 13:07:36', '2023-03-03 15:15:31'),
(5, 1, 'sample5', 2, '2022-12-08 13:07:55', '2023-03-03 15:15:31'),
(6, 3, 'asdsa', 0, '2022-12-08 13:07:55', '2022-12-08 13:07:55'),
(7, 3, 'asdas', 0, '2022-12-08 13:07:55', '2022-12-08 13:07:55'),
(8, 3, 'asdas', 0, '2022-12-08 13:07:55', '2022-12-08 13:07:55'),
(9, 3, 'asdas', 0, '2022-12-08 13:07:55', '2022-12-08 13:07:55'),
(10, 4, 'aaaaa', 0, '2022-12-08 13:58:31', '2022-12-08 13:58:31'),
(11, 4, 'aaaaa', 0, '2022-12-08 13:58:31', '2022-12-08 13:58:31'),
(12, 4, 'aaaa', 0, '2022-12-08 13:58:31', '2022-12-08 13:58:31'),
(13, 4, 'aaa', 0, '2022-12-08 13:58:31', '2022-12-08 13:58:31'),
(14, 5, 'asdsa', 0, '2022-12-08 13:58:48', '2022-12-08 13:58:48'),
(15, 5, 'aaa', 0, '2022-12-08 13:58:48', '2022-12-08 13:58:48'),
(16, 5, 'aaaa', 0, '2022-12-08 13:58:49', '2022-12-08 13:58:49'),
(17, 5, 'aaa', 0, '2022-12-08 13:58:49', '2022-12-08 13:58:49'),
(18, 6, 'blue', 0, '2022-12-09 02:46:03', '2022-12-09 02:46:03'),
(19, 6, 'red', 0, '2022-12-09 02:46:03', '2022-12-09 02:46:03'),
(20, 6, 'green', 0, '2022-12-09 02:46:03', '2022-12-09 02:46:03'),
(26, 1, 'sample6', 0, '2023-03-03 13:41:17', '2023-03-03 15:15:31'),
(27, 1, 'sample7', 0, '2023-03-03 13:41:17', '2023-03-03 15:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('emman@gmail.com', '$2y$10$Vvj1LHpS3Hod0jXXsfuJS.9ji2xXIpGJRYQZE5QF/M/dfnvaHgRzu', '2022-12-10 04:53:54'),
('ced@gmail.com', '$2y$10$bmDI06CjF2ThqNeVzc0Q9OqBBgO0SKVovpFB5YQEvVIP/QXPzAvaq', '2022-12-11 03:36:55'),
('emmanuellemon111200@gmail.com', '$2y$10$b7yXS8EvRKOXXihaR.xoDO9iotCsImxI74mLEbmp550t2vJkO7Q4a', '2022-12-19 04:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PENDING','STARTED','FINISHED') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is the best programming language now?', 'STARTED', '2022-12-08 13:06:37', '2023-03-03 13:27:29'),
(2, 'asdasdsaasdsadas', 'PENDING', '2022-12-08 13:07:36', '2022-12-08 13:07:36'),
(3, 'asdasdsaasdsadas', 'PENDING', '2022-12-08 13:07:55', '2022-12-08 13:07:55'),
(4, 'aaaaaa', 'PENDING', '2022-12-08 13:58:31', '2022-12-08 13:58:31'),
(5, 'sample', 'PENDING', '2022-12-08 13:58:48', '2022-12-08 13:58:48'),
(6, 'Sample Poll', 'PENDING', '2022-12-09 02:46:01', '2022-12-09 02:46:01'),
(11, 'asdsa', 'PENDING', '2023-03-02 15:24:42', '2023-03-02 15:24:42');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2rp1Q7FEE0MQ09dSIla6Y5hXRLdRjXWaiRwOGufG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjhvVXhtc3VPeFozN0IwNm80V2hSQXBmc0ZTYjNBN2hOUHdqbGN4VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0dXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1678017154),
('WB5pLjJPbolXXAcM0Nv4bLLmhmz9m0Bnhi2yHD3p', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM1ZUQWZ4bHpsVzR6b1ZoUEl5aXVrM2xnZFgybzlidEk3QWs0cXRzaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wb2xsL3ByaW50LzEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDkySVhVTnBrak8wck9RNWJ5TWkuWWU0b0tvRWEzUm85bGxDLy5vZy9hdDIudWhlV0cvaWdpIjt9', 1677858797);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE `upcoming_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnailImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `title`, `shortDescription`, `fullDescription`, `header`, `date`, `thumbnailImage`, `fullImage`, `created_at`, `updated_at`) VALUES
(2, 'Soiree 2k23', 'Soiree 2k23', 'Sample', 'sasad', '2023-02-14', 'soiree.jpeg', 'oustoar.jpeg', '2022-12-03 01:59:51', '2022-12-03 01:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', '2022-12-02 08:21:32', '$2y$10$SuoxlFhCG36ZBvMFlFMg5OEi6r/TsGrhlq9ycNM9nFY7xlpKD8xom', 'eyJpdiI6ImlYQVJUZDdpZTdDV3JzdGZ6YUtvSkE9PSIsInZhbHVlIjoiMldub1RtRGN4VU9DS3FhdjdBK084bERwbm1ocllCYnVXR1NNaWJDeXNSdz0iLCJtYWMiOiJmZWI1ZTA5OTU4NTM5NGZiODZmZDBjYTQ5NmU4NTVmNzEzMjU0NmZhNmUwZDVmMTVjOWU4MmIzZGVkMmU4NDcwIiwidGFnIjoiIn0=', 'eyJpdiI6Ilo4T1FoaittazdDc3FpSVBsTmJrTkE9PSIsInZhbHVlIjoiQlRDbW5VelQwcU9FMm9ZaUdUQ0VZakVtbkxTZ2hNY0tISmt0SVBPMjBuZFIyNENMMENibXpvV3hDMGthN3NYWkpreFBvYjFjMFNNdlNqbkpHeDUyS3NIMmFsUVY5K3MxS0NqbVFkeVRxbnRNU1J3L2Z5RkJVbTlwckttb0VtYXBmaG5XcmIwaHZlNEhvMk9EOHFqYnNKMnd3K0x0amJVR2toSy81NFExQTMwSXZMNEhjS3JNdjdqdEtsK3EvMHRKWEppSUdqKytSTFJaZnkwcStBNVpqVlQ0TlBXU3V0Zm1tT0ZuaWsrV2tLM0ZkMlBmQTVZKy9mK1o0TG9WaGk1Q0trMjN6TUE1OTVFME1Oa1U1b1lVcFE9PSIsIm1hYyI6IjE2OTc5ZjM5MWU5N2UxN2Y5OTc5NjUwZjc4ZGQ4YTNmNDdmMjhjMzc1ZDQ2ZDdiMGZkNTlkMTNhODBlZjFlYjEiLCJ0YWciOiIifQ==', '2022-12-10 05:28:21', 'LIUIEgJi93oj7FrapgqptxorXRfHMpbQUzplYyOgXFdIdpPe2r19DI0yoNAp', NULL, 'profile-photos/XuoLfC7oDX7RVq7O0yOCnwb1Bxo44sKlJui0zt3O.png', '2022-12-02 08:21:32', '2022-12-11 03:51:26'),
(2, 'Emmanuel Joshua Lemon', 'emmanuellemon111200@gmail.com', '0', '2022-12-02 08:21:33', '$2y$10$18egt5XWOPSxr0FFmbg92umKdUVE/Z8YQJs5n./XCX9rqD0j8ZF6W', NULL, NULL, NULL, 'd6YlTxKeyy8OQve4KPHotUNkxDKK1rU0QS1rfcJ8qvv0iP7sFzd1T46ftkl8', NULL, 'profile-photos/atcaATeL05a8PxPMiHKt7rjss9X3k8egV6Xe4Eoq.jpg', '2022-12-02 08:21:33', '2022-12-10 05:39:35'),
(3, 'Emmanuel Joshua Lemon', 'ced@gmail.com', '0', '2022-12-02 08:21:33', '$2y$10$IKLQsCNFX0YXpESdg2ta7O2poeWn7venVC.Txbs4/vjNx4NIFf3yy', NULL, NULL, NULL, 'iMn38lqwuhP5MUyCCaxbDDDCYGjkwTxL2rT6eCqRAJnDE2kwgmKeG5QMsyY9', NULL, 'profile-photos/gjyqtg9Pzk0LUiOCaBCdx2cWSjuWZFSbHgR5s7MH.png', '2022-12-02 08:21:33', '2022-12-11 03:46:38'),
(4, 'Jessie Lacson', 'jes@gmail.com', '0', '2022-12-02 08:21:33', '$2y$10$7qbvySxjOeM9IRIxa0CTg.W..nU296JKm7P/63unHIzW9iYGqUJGa', 'eyJpdiI6Im5UdzdhcHVTRHUyS3BMTHkyWUlUbGc9PSIsInZhbHVlIjoiQnRFUFpabmY0WkhmcCsvVUtoRm5xUWZsUEVjU0hGWVI4eXVCWDE0SjVaND0iLCJtYWMiOiJjMDM5NWZjNmQ5Y2Y1MDEzNzcyNzM4ZjhmZTk0MjU2ZjExYjRhZTIyYzY3ZGZhYzFiN2Q4ZGM5OThiZDUwNDJlIiwidGFnIjoiIn0=', 'eyJpdiI6IkZScXV4ZjA4K3llbWxTYXY5alhSVVE9PSIsInZhbHVlIjoiSktYclMySTJUU01QSEg0a01oeHIwZFZnSnRpUVZuVy9ORzdLMWxxamh3SEVWSE94U2oxdFZHbjJGMTd0OURweWxCQ1RFRGpMYjFvUnRIQzBPNnJ3ZnZBci9jUWhFNU1BekFDS2E3dHdPMnd4L2FKL1NHbkJvNFRSczJhRjljVEordTZGQVc1d1VMMk1jWUdXdm1yWnBleFQ2NTh0YThpS1p2SEhUc2xnYjdXdktISHdBYjUwQTU2bkNLT0hvdmdXZ0NWRVBxd2xLZHNjNUdyOWl3QTA0VXlPeVhwQmtpU2tEZ2lLZFI1T0paNGxLVW0xbTFqL1NYaHlEZ2tFU1dhb1F6aXBGaVZnMGtsengyOWRoTG5iS0E9PSIsIm1hYyI6Ijk0Zjk2ZGNhNWFhMDY2OWJlNmJmZDMyNTJmZjFmMWMxMWEyYTI1NzNkYjZjOTlkNzFiN2I1OGI2ZTIwNjM1MWMiLCJ0YWciOiIifQ==', '2023-01-23 15:49:07', 'FeablfJVPZ3IhQGdj12rRkedSnOYVBwbPgOul9V5rRPttaqlYVU3rE0V1Eqr', NULL, 'profile-photos/CV4xRejyulkJES4MaazxozfOFVwnYZodlpJKd6qh.jpg', '2022-12-02 08:21:33', '2023-01-23 15:50:50'),
(5, 'Prof. Janice Torphy', 'bmosciski@example.net', '0', '2022-12-02 08:21:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'U9qVzw6o6i', NULL, NULL, '2022-12-02 08:21:33', '2022-12-02 08:21:33'),
(6, 'Gudrun Kub V', 'admin1@gmail.com', '1', '2022-12-02 08:21:33', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'bYxbSDL9VZLA32MkePYILoTBhtHmIUGeb7MknvkfIJygY38m2kEST5VdKtSF', NULL, NULL, '2022-12-02 08:21:33', '2022-12-02 08:21:33'),
(7, 'sample', 'sample@gmail.com', '1', NULL, '$2y$10$O.BxxIJO.3VWg6zbatkE2OAW/NEpEKeF/l096UGZh3LmtgkY9XJZq', 'eyJpdiI6ImYySERZR2dIaDlvWm5vN1NPNVoxbEE9PSIsInZhbHVlIjoielkzYkJ3enhYMEhta0dLT3BTRk03NEVGcFZCNXluTWdHc2JzUHVHd1BQUT0iLCJtYWMiOiI1YzM3NzVmMjNjZjE5NTA4ZTQyMmMyNzI5OGZjNTdkMTAzNzdiNzM5ZjU0YmZkM2I1NGQxNjZiNTg0YjE2YWVhIiwidGFnIjoiIn0=', 'eyJpdiI6IkhRbkNpd0hXSlYwWkNaZENZS1ZKYkE9PSIsInZhbHVlIjoiMXhzNEI1OXlVc21WV1dGb0pDUlc2RHpIYUU4VG9CeFFUWUIwNlZHSStHNm5JbVJ5RTFKUHVpOHJBamVRQWhKYm5QbmszcGVqc0pYK1lMS2l4OVloNlRYbEZoSFJhMlByL3B3L3Q0aWpOeWg2SjEwUW83cGFpaDdhd2RxYlJFMFlLcm5zUFBBTHNCVzJweXZYQUl6S1d4N2MxN0FndWU2ZUpVcmp6LytQMDNBM2dTdE55em9xOHBsUHhoRE1WOXRiZ1E5bkpMSXNlV1JnNFRvUFM1OERyQmhoMlFJelV4ZHB4NHFPMnFxQnAwV1REaTlpTjc0SmM3bkhEbFVwS0tCNjRkWkNhb21KelU5S2xIdW5oNExUZlE9PSIsIm1hYyI6IjMxNDk2Yjg1MDE1ODZiNTNkZTZhYWZlM2M3MDcyNzUzZGRmNTY4Y2IyOGJiMmRkNWQ2ZTkzNDE1YTcyZjEwNGIiLCJ0YWciOiIifQ==', '2022-12-10 04:52:44', NULL, NULL, NULL, '2022-12-08 15:27:36', '2023-01-09 04:51:07'),
(8, 'emman', 'emmanuellemon123@yahoo.com', '0', NULL, '$2y$10$1h/cpUno1WUvCEiJs9LHf.v0SKswYCTnJXOl80HE0I/zOPgvCRM7K', 'eyJpdiI6IlhpZjhOdUF0R2Y1S0EvdVprU0paaGc9PSIsInZhbHVlIjoiNXUxT0RhakhLdGFhWWpMMnNhU2pEeExOa08xc3VVdm1HZFpTT2JMVm5Qcz0iLCJtYWMiOiI5MjVkMjU3NjA3ZmU3N2JmOTE1NWFiNDhlNzliYTJjZThiZjQyYzZjMjhiOGM2OTIwNjc5NmQ4NGY0OWNiOWM2IiwidGFnIjoiIn0=', 'eyJpdiI6ImM0YkpJRFNLeFlqYlhtTHRCM09MVlE9PSIsInZhbHVlIjoiQ0lZY0FVYmhFUEJYQUI4ejMvY0RSMDVXbStQamtIZ21DeG1GbG9kMjFSZTEwU1ozdlhDS2YxQmo5TVlnenBnVXpXWk5Hd01XWEdJK3J1UkFuYzZKOFJPbFlmZEJxSjlCaUc3cGFldXBVUUZqVU5ZZG1KYjZiUk9hMUVYd3dCYWlzU2YwYXp1Z016T3B1OXFiVlJsdTJXWFZoaGJqbVlqdjlLQU4zUmExSmZnbUJqcEozYVBoS0ZxSWZsZVNnZzJmRkpPcldUUXNzLzBPdUFJQkdoQ2h0WlF4aldiWFdoaWJmN3RjdURoRU1HMzI5STREY2FuR1dLa0o2OG90RCt3d2k2RFhwb2RwRm1FOWFQVkQ1L2VmVGc9PSIsIm1hYyI6Ijc1YjNhODUxMTcyMWJiYzJkNWVkZmEyOTM0M2VjZTA3MWZlMTM0ZGQ4NmEwYmUxMjA1NWFhMjExZmJiYmIyZGQiLCJ0YWciOiIifQ==', '2023-01-09 06:40:08', '6jdye0UYZrcy7dlnrvnv0dQEge2CkVrzUcCJUIi5oLVqKa2nqqRw3GRM70NZ', NULL, 'profile-photos/nXofH0ge1pn1WduV93LCZevPI9tTQSXHKp3ErZWR.jpg', '2023-01-09 06:38:24', '2023-01-09 06:46:13'),
(9, 'Cyrus Lethan Mendoza', 'cyrusmendoza64@gmail.com', '0', NULL, '$2y$10$nPh3X6R2YHpXNCN9cnhgwO/08fSxgC2OA17UneYGDsXKTVe0/Szgq', 'eyJpdiI6InZZQzVYSXBRWGhhL0FGYXArc1MxWFE9PSIsInZhbHVlIjoicmpZbC9yd0YyZjFtMnkvV1Z2aS95aS9vNEdRcEtaZEFlYzJiZjFxR3NSMD0iLCJtYWMiOiJhOWYwOGViNGE2NDc1MWJjNTJkZDk4ZTA0MjEyZDQ4ODY0OWIzNDIyNzVlMDg2NTYzYjg2MGZkMjc3YmQ0NjViIiwidGFnIjoiIn0=', 'eyJpdiI6IjErblM0WnpBRTliT2tmK0pDeU1qTGc9PSIsInZhbHVlIjoidDJYWGptRXFCQ3ZYc0VtWXkxS0ttbFZJdXFIdUI3dW5DL1BUeCtWdmVFbDBNSXB5TUNqMlhzcURXZEJlZUtKNDdmMUw0RFFVRzBTV1ZBbUZFSUR6ZjQrVEVZZGU4NmVMdDVPcU54c1FUWko4YjVCYlNvOTV5OWlLaWprd2lrcVhGRTliNEdONHJIa1gxRjlBZ09NWWpCT1NyeGtBOWFIZW5McG54UVhEdzgvOVpJZjRrNnVWUFZKc3VoZWx6SnNOaXJXRzErdVB1UmZoQW5TY0JTNDJnR1ZqZjdGdGk4aUJvajVTdUNaOGM0T1pDYzJxZ3pSNjBMdzBBRWdOKy9JSFU3eFJZZnVYdm1kT3p2V1d2bDQ4cGc9PSIsIm1hYyI6ImI1YzJiNDViZjNiZTQzNDIyMGNhYWQzMjAwMjUyYWFhMjNkOTYwNmY0Mzg1ODViNzM4NjljZmY4NDA0ZWE3NTEiLCJ0YWciOiIifQ==', '2023-01-18 02:17:43', NULL, NULL, 'profile-photos/cOQFS2vrnne0VHCcbgyQJFoO1b69vqCHhQWmR3FD.jpg', '2023-01-18 02:15:08', '2023-01-18 02:19:21'),
(10, 'Arwin Posadas Macaraeg', 'arwin@gmail.com', '0', NULL, '$2y$10$T/EF2oGXUUu/u9EV90nA8eb9Wm53OF70d.JMtCJJY6qYL38ZfMt6a', 'eyJpdiI6IkN1WUh3RkRXYWxJc2tSeVZQQVp3TXc9PSIsInZhbHVlIjoialN2aTkzOUNzZGNaNWIwckl4L3VURlVVa1lUTTZJeGt1S3p2V0ZDTUFxND0iLCJtYWMiOiJhZGZkNjdiM2Y0MjMxZjk3M2RiYTc0ZWIwZTE4YjgxZGE0MDFlZTkwNTkwZjIxZmU4ZjVkMTgyYzFjY2U2OTRmIiwidGFnIjoiIn0=', 'eyJpdiI6Imx4ZHpZc3VlRVBzaUdLM0hRQUxwVHc9PSIsInZhbHVlIjoiY1lOT3FZT0VlbkdEaEtncGV3a01TUS94ZVJPOE1lQ2RTY25QZDU1WWNSbU9EZ2Nla0dCLyt4RVZmRlJtMm83QnA1Y0NvekM1RnMxQms2UlltN0gva3BPc1h1SmlXQmduYW1Wcll1LzVoSUZtd3Nsc0ovZ0hwYmNxTFlLa1VhcmNWSEZ3cmpzNFdVUERZWjlZNCsvN2Jab0tvbUxqdVdQbnZQdGVDa2JESUZXZE5Rei9jU1FCMTF1YWZOemJuU2tYdTh6OU51ZTV1ME5na1AxcUswZGxqVExCVHNyWVlyd1EyOEpyVmhhSWVsMXNZVTB2WmpjTU8wVTVVU2FPdEU5NTdkYk96T1VORC9KVHRXTStRV1JEd3c9PSIsIm1hYyI6IjA3MTJjM2ZhNzQ5NTNlMzFiZDM5NzRmMTQzYjQ1YzZmN2Q2ZGRkNTAyZjFmNWFhYjVkMWE2OThlODMzY2Q1YWQiLCJ0YWciOiIifQ==', '2023-01-18 02:46:31', NULL, NULL, NULL, '2023-01-18 02:42:39', '2023-01-18 02:46:31'),
(11, 'jessie', 'jessie@gmail.com', '0', NULL, '$2y$10$0cHbVUnaJaAv5Ysw7NVO3uOljqpXdDiFoWVFfoiNFMBdKe4I2lUhG', 'eyJpdiI6IlRDNG9tM2JtS05zVHdOalZqWmRVK0E9PSIsInZhbHVlIjoiKy85aTYrQ3JLZDJkdFp0N3RaSVNua3lrcXlaMElaWHVhWFRkU1IyZXE0RT0iLCJtYWMiOiJmNGEwNDZmMWNjZDg3MjQxYTQyOTQ2ZTUwNTg2YTkyNWQzMjVmOWRmNWU4NTFiZjc4NjZhNDc5OTUxYTFjMDJlIiwidGFnIjoiIn0=', 'eyJpdiI6IkFWUHlYMzNwaGxNbjdCQnNHVnh4aXc9PSIsInZhbHVlIjoiMnZZOTVTWTBqYmRzUlNwL3p5QVkrdGFFbjROOEVVaSt4NnFob203QkRsL0Z2eUZ6a0FrN09kZVpNZjFoQk05ZEtoaTh2MHZWQU5YN1o0em5sWW9zdG1IdklIRkNncGltYzRXdmR0Y2xoYTZ2UWF6Y0ZKdWMyT2h0d3Iwbng5UzJOVVp2eUZmcU9EYnNGS3ordE5udjJDTzlZWnd3T3NGSWJET21YY1E1a1VkNldkQXg5azIrWURmZmtWR0lwdEgzVkpPRGNhNmVCOFBxRDE2NEhFNXRvcUpZK3JZZE1XM3NFUWI5OS9EVHhHZnZCRm56WDY2T3RicW5jczAvbnRobVVtNDlaeE5EWkRYRmREaVZOcmRVdWc9PSIsIm1hYyI6IjlkMGFiNjgzMTc4YTQwNjY1ODY4MTMxMTEyZmVjYjdlZmRjOTkzMTY0MGE1YzhmNWIyNWUxMGVkZDM0ZTY4ZGUiLCJ0YWciOiIifQ==', '2023-01-20 04:57:45', NULL, NULL, NULL, '2023-01-20 04:55:35', '2023-01-20 04:57:45'),
(12, 'cedrick', 'ced1@gmail.com', '0', NULL, '$2y$10$QZkn.DuP/yRi9KKnQnCETeNIA0Fh4VT04IEN.W8EeQLuMKuU../Z2', 'eyJpdiI6IllENmk5ZUZPYVRKeGNGVWtIVS9rcUE9PSIsInZhbHVlIjoiRUtPZEdSWTduOHRtYXRaQWhIbElLR2k5VnpTWVc3MTZ6MXJaTWdzb0lsND0iLCJtYWMiOiI2Y2IxMGQ0ODNjYjcyNDViMGFhMjQyNWIzMTU0ODhkYjYxMjBmOGViMTVkMWNmN2IwZmI3MTI5YjA1MGRmMGQxIiwidGFnIjoiIn0=', 'eyJpdiI6InRKSytYQVhkNFJUSjlhN01oSFEyRlE9PSIsInZhbHVlIjoienZwTGdjcndheHQzcFRDQ1lpd2ljZ1pTZmg2Vms3UmQxUEdrdDNjUWlmRDhFYVZDTXV1U05yejg0U1gzeXVUY3NHYnlXNTFlQ0g3YTJXYVdkNXhleVZSZnJ4VWxBSkZpL0ZrNzMydmRLK09TRm5pdWl3c1IweXRJdlFXMmFWRVNudlJqaWRsSU1OTFdUalFEbUpPaEt6Y3lFUHFiTEpkV1gxVFRORis0K3cwTk4zLzl0U0N2Z3pObVBINEZVam9RK1A2QTJ0TnFPUU15K2c5N0VraFRGZmVCUnh2M0FmL1psbDJDZUxpTG12c3U0RmZySGxkOEZMK1NWSU5FME1XM3hrNXNpQUZtdXNDNElvTVFHZm85NUE9PSIsIm1hYyI6Ijg0MTNiMGI0MGNkZTMwYjRiOWI1NGYxNzM5NjU3ODExZGIzOTQ4NzMwYzNhOTMzOTc3ODVmOGZhM2Y0MzNlZjgiLCJ0YWciOiIifQ==', '2023-01-20 06:04:20', NULL, NULL, NULL, '2023-01-20 06:02:25', '2023-01-20 06:04:20'),
(14, 'sample', 'sample1@gmail.com', '0', NULL, '$2y$10$di4NqnGW1ww4VfmE.YlJQ.FLlyPP5vs.VWBlReWvL/NboQwN03Mdu', 'eyJpdiI6Ikk0NUJJbzdQbGdsMHBLWC9lTGhaQmc9PSIsInZhbHVlIjoid3ZYSWdISU5MRTRwd3FSNlBkajljWEJRV2tpU2pZRzFWOFhCVHBjc1JQdz0iLCJtYWMiOiIzMGJiMzg5NmQ4OWIzNDI2Y2FkNjM1NDY0NTFmZDI1Yzk2YjJhMzc3ZjBlNmY4MTU0YjQxNzgzYWQwNzM0NzEzIiwidGFnIjoiIn0=', 'eyJpdiI6ImZqVGZQdEgyVkN5ekVjSlpwSVVZa0E9PSIsInZhbHVlIjoiVWJzQUhEOWkzM3UzWjFIVzY0d1UzSVJBS3JmTENOK0ZlK0grcnhGN3l4TFNkS1paZzZ2QkNPZXFSSnd4MkdXWjdJZmdXSmRWbkt1RkRXU09IUkFVMlkyR2RheHo0VnRhWmhkQ0NhaXVrR1l2bmlnWGZ0WEgvUHI2dithSUhhaFhIN3RoMEhYdU1wVkJNa1hRcEJ1S25hK1VKWENUaTRDOXY4UWxLMHFIZE42S1RHU3dCbi96Vk5wMEtSK1JBV3VJTm5mQUlOa0RJWUx6OEVUaHVhNVJFU01ta3h5NHJSRGZ4d0lFc1MyNUZvZjl5Y2Y1ckdFc0c4enRVQjR2TmtyZFUvZEF1U0JvUHNRMVhZc1lyUnNreGc9PSIsIm1hYyI6IjE5NTRlMDM1YTMxMDQyNGU2MGYzNzNjODQyNTA3NjVhNmUzMzI4M2M1MmZmN2Q1ZmFjYTMyN2FlN2RlMDA2MjIiLCJ0YWciOiIifQ==', '2023-02-06 07:34:19', NULL, NULL, NULL, '2023-02-06 07:33:13', '2023-02-06 07:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `voted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `poll_id`, `option_id`, `user_id`, `voted`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 7, 'sample', '2023-01-13 01:15:46', '2023-01-13 01:15:46'),
(7, 1, 5, 9, 'sample', '2023-01-18 02:18:29', '2023-01-18 02:18:29'),
(8, 1, 5, 10, 'sample', '2023-01-18 02:43:08', '2023-01-18 02:43:08'),
(9, 1, 2, 4, 'sample', '2023-01-18 05:07:54', '2023-01-18 05:07:54'),
(10, 1, 2, 11, 'sample', '2023-01-20 04:56:28', '2023-01-20 04:56:28'),
(11, 1, 1, 12, 'sample', '2023-01-20 06:02:46', '2023-01-20 06:02:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_poll_id_foreign` (`poll_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_poll_id_foreign` (`poll_id`),
  ADD KEY `votes_option_id_foreign` (`option_id`),
  ADD KEY `votes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `votes_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`),
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
