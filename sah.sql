-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 07:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sah`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity`, `ip_address`, `user_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Successfully deleted user: 6', '127.0.0.1', 1, '2021-03-14', '2021-03-14 08:28:53', '2021-03-14 08:28:53'),
(2, 'Successfully updated user: 5', '127.0.0.1', 1, '2021-03-14', '2021-03-14 08:30:07', '2021-03-14 08:30:07'),
(3, 'Successfully updated category: 7', '127.0.0.1', 1, '2021-03-14', '2021-03-14 08:45:21', '2021-03-14 08:45:21'),
(4, 'User: 1has just logged out', '127.0.0.1', 1, '2021-03-14', '2021-03-14 15:54:02', '2021-03-14 15:54:02'),
(5, 'User: has just loggedn in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:00:10', '2021-03-14 16:00:10'),
(6, 'User: has just loggedn in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:37:24', '2021-03-14 16:37:24'),
(7, 'User: has just loggedn in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:38:23', '2021-03-14 16:38:23'),
(8, 'User: has just loggedn in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:38:50', '2021-03-14 16:38:50'),
(9, 'User: 5has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:51:29', '2021-03-14 16:51:29'),
(10, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:52:35', '2021-03-14 16:52:35'),
(11, 'User: 4has just logged in', '127.0.0.1', 4, '2021-03-14', '2021-03-14 16:54:02', '2021-03-14 16:54:02'),
(12, 'User: 4has just logged out', '127.0.0.1', 4, '2021-03-14', '2021-03-14 16:54:12', '2021-03-14 16:54:12'),
(13, 'User: 5has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:57:45', '2021-03-14 16:57:45'),
(14, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:57:52', '2021-03-14 16:57:52'),
(15, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:58:46', '2021-03-14 16:58:46'),
(16, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:59:17', '2021-03-14 16:59:17'),
(17, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 16:59:33', '2021-03-14 16:59:33'),
(19, 'User: 7has just logged in', '127.0.0.1', 7, '2021-03-14', '2021-03-14 17:03:21', '2021-03-14 17:03:21'),
(20, 'User: 7has just logged out', '127.0.0.1', 7, '2021-03-14', '2021-03-14 17:03:29', '2021-03-14 17:03:29'),
(21, 'User: 5has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 17:35:26', '2021-03-14 17:35:26'),
(22, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 17:35:34', '2021-03-14 17:35:34'),
(23, 'User: 5has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 17:39:24', '2021-03-14 17:39:24'),
(24, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 17:40:55', '2021-03-14 17:40:55'),
(25, 'User: 5has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 17:41:13', '2021-03-14 17:41:13'),
(26, 'User: 5has just commented on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 18:05:19', '2021-03-14 18:05:19'),
(27, 'User: 5has just commented on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 18:19:24', '2021-03-14 18:19:24'),
(28, 'User: 5has just commented on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 18:20:59', '2021-03-14 18:20:59'),
(29, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 18:39:12', '2021-03-14 18:39:12'),
(30, 'Dijanahas just send admin a message.', '127.0.0.1', 5, '2021-03-14', '2021-03-14 18:52:00', '2021-03-14 18:52:00'),
(31, 'User: 5has just logged out', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:01:15', '2021-03-14 19:01:15'),
(32, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:10:53', '2021-03-14 19:10:53'),
(33, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:21:35', '2021-03-14 19:21:35'),
(34, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:22:02', '2021-03-14 19:22:02'),
(35, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:22:26', '2021-03-14 19:22:26'),
(36, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:22:26', '2021-03-14 19:22:26'),
(37, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:22:57', '2021-03-14 19:22:57'),
(38, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:26:11', '2021-03-14 19:26:11'),
(39, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:31:38', '2021-03-14 19:31:38'),
(40, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:36:57', '2021-03-14 19:36:57'),
(41, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:37:38', '2021-03-14 19:37:38'),
(42, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:38:03', '2021-03-14 19:38:03'),
(43, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:38:19', '2021-03-14 19:38:19'),
(44, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:39:00', '2021-03-14 19:39:00'),
(45, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:39:09', '2021-03-14 19:39:09'),
(46, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:42:15', '2021-03-14 19:42:15'),
(47, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:42:53', '2021-03-14 19:42:53'),
(48, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:44:26', '2021-03-14 19:44:26'),
(49, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:44:46', '2021-03-14 19:44:46'),
(50, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:46:26', '2021-03-14 19:46:26'),
(51, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:46:53', '2021-03-14 19:46:53'),
(52, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-14', '2021-03-14 19:56:51', '2021-03-14 19:56:51'),
(53, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-14', '2021-03-14 22:19:17', '2021-03-14 22:19:17'),
(54, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-14 23:10:05', '2021-03-14 23:10:05'),
(55, 'User: dijana has just logged in', '127.0.0.1', 4, '2021-03-15', '2021-03-14 23:25:21', '2021-03-14 23:25:21'),
(56, 'User: dijana has just logged out', '127.0.0.1', 4, '2021-03-15', '2021-03-14 23:25:44', '2021-03-14 23:25:44'),
(57, 'User: dijana has just logged in', '127.0.0.1', 4, '2021-03-15', '2021-03-14 23:41:42', '2021-03-14 23:41:42'),
(58, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 06:39:37', '2021-03-15 06:39:37'),
(59, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 08:44:14', '2021-03-15 08:44:14'),
(60, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 09:21:42', '2021-03-15 09:21:42'),
(61, 'User: 5has just updated his comment on post: 5', '127.0.0.1', 5, '2021-03-15', '2021-03-15 09:21:54', '2021-03-15 09:21:54'),
(62, 'User: 5has just commented on post: 5', '127.0.0.1', 5, '2021-03-15', '2021-03-15 09:22:02', '2021-03-15 09:22:02'),
(63, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 10:03:17', '2021-03-15 10:03:17'),
(64, 'User: adminda has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:03:26', '2021-03-15 10:03:26'),
(65, 'User: adminda has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:08:47', '2021-03-15 10:08:47'),
(66, 'User: adminda has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:13:03', '2021-03-15 10:13:03'),
(67, 'Successfully deleted category: 7', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:13:13', '2021-03-15 10:13:13'),
(68, 'User: adminda has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:20:00', '2021-03-15 10:20:00'),
(69, 'User: adminda has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 10:37:25', '2021-03-15 10:37:25'),
(70, 'User: adminda has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 12:25:10', '2021-03-15 12:25:10'),
(71, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 12:52:47', '2021-03-15 12:52:47'),
(72, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 12:55:09', '2021-03-15 12:55:09'),
(73, 'User: 5has just commented on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:01:29', '2021-03-15 13:01:29'),
(74, 'User: 5has just commented on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:24:40', '2021-03-15 13:24:40'),
(75, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:27:42', '2021-03-15 13:27:42'),
(76, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:29:25', '2021-03-15 13:29:25'),
(77, 'User: 5has just commented on post: 7', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:30:09', '2021-03-15 13:30:09'),
(78, 'User: 5has just updated his comment on post: 7', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:30:14', '2021-03-15 13:30:14'),
(79, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 13:30:49', '2021-03-15 13:30:49'),
(80, 'User: adminda has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 14:25:36', '2021-03-15 14:25:36'),
(81, 'User: adminda has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:06:16', '2021-03-15 16:06:16'),
(82, 'User: adminda has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:17:14', '2021-03-15 16:17:14'),
(83, 'Successfully updated user: 1', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:21:32', '2021-03-15 16:21:32'),
(84, 'User: adminda has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:40:05', '2021-03-15 16:40:05'),
(85, 'User: admin has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:40:14', '2021-03-15 16:40:14'),
(86, 'User: admin has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:55:22', '2021-03-15 16:55:22'),
(87, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 16:55:28', '2021-03-15 16:55:28'),
(88, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 16:55:35', '2021-03-15 16:55:35'),
(89, 'User: admin has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:55:41', '2021-03-15 16:55:41'),
(90, 'Successfully updated category: 1', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:56:09', '2021-03-15 16:56:09'),
(91, 'Successfully updated category: 2', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:56:52', '2021-03-15 16:56:52'),
(92, 'Successfully updated category: 1', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:57:05', '2021-03-15 16:57:05'),
(93, 'Successfully updated category: 3', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:57:42', '2021-03-15 16:57:42'),
(94, 'Successfully updated category: 4', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:58:12', '2021-03-15 16:58:12'),
(95, 'Successfully updated category: 5', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:58:47', '2021-03-15 16:58:47'),
(96, 'User: admin has just logged out', '127.0.0.1', 1, '2021-03-15', '2021-03-15 16:59:32', '2021-03-15 16:59:32'),
(97, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 16:59:39', '2021-03-15 16:59:39'),
(98, 'User: 5has just updated his comment on post: 2', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:01:11', '2021-03-15 17:01:11'),
(99, 'User: 5has just updated his comment on post: 2', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:01:17', '2021-03-15 17:01:17'),
(100, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:03', '2021-03-15 17:02:03'),
(101, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:15', '2021-03-15 17:02:15'),
(102, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:16', '2021-03-15 17:02:16'),
(103, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:31', '2021-03-15 17:02:31'),
(104, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:40', '2021-03-15 17:02:40'),
(105, 'User: 5has just updated his comment on post: 21', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:02:44', '2021-03-15 17:02:44'),
(106, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:28:54', '2021-03-15 17:28:54'),
(107, 'User: korisnik has just logged in', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:30:41', '2021-03-15 17:30:41'),
(108, 'User: korisnik has just logged out', '127.0.0.1', 5, '2021-03-15', '2021-03-15 17:31:37', '2021-03-15 17:31:37'),
(109, 'User: admin has just logged in', '127.0.0.1', 1, '2021-03-15', '2021-03-15 17:31:43', '2021-03-15 17:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_table` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `thumbnail`, `related_table`) VALUES
(1, 'quizzes', '1615831025.jpg', 'posts'),
(2, 'interviews', '1615831012.jpg', 'posts'),
(3, 'tactics', '1615831062.jpg', 'posts'),
(4, 'funny', '1615831092.jpg', 'posts'),
(5, 'memes', '1615831127.jpg', 'images');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(9, 'sta sas', 1, 13, NULL, '2021-03-14 13:33:22'),
(11, 'Inventore corrupti minus mollitia id odit neque ut. Et commodi quia error autem quae. Autem dolor a quia harum. Debitis maxime eum ipsa.', 1, 9, NULL, NULL),
(23, 'sta imaa d', 1, 6, '2021-03-13 20:18:03', '2021-03-14 12:35:56'),
(24, 'very nice!', 5, 2, '2021-03-13 22:18:20', '2021-03-15 17:01:11'),
(25, 'loved it!', 5, 2, '2021-03-13 22:20:33', '2021-03-15 17:01:17'),
(26, 'You know, these are pretty hard...', 5, 21, '2021-03-14 12:18:09', '2021-03-15 17:02:03'),
(27, 'mmm, no theyre nooot', 5, 21, '2021-03-14 12:18:16', '2021-03-15 17:02:15'),
(29, 'novi komena', 5, 5, '2021-03-14 18:02:50', '2021-03-15 09:21:54'),
(30, 'hm', 5, 5, '2021-03-14 18:03:59', '2021-03-14 19:31:38'),
(31, 'eos', 5, 5, '2021-03-14 18:05:19', '2021-03-14 19:56:51'),
(32, 'a', 5, 5, '2021-03-14 18:19:23', '2021-03-14 19:26:10'),
(33, 'oke', 5, 5, '2021-03-14 18:20:59', '2021-03-14 19:22:02'),
(34, 'dadsa', 5, 5, '2021-03-15 09:22:02', '2021-03-15 09:22:02'),
(35, 'sus, what do u know?!??!', 5, 21, '2021-03-15 13:01:29', '2021-03-15 17:02:44'),
(36, 'well, im you, so...', 5, 21, '2021-03-15 13:24:40', '2021-03-15 17:02:40'),
(37, 'okej', 5, 7, '2021-03-15 13:30:09', '2021-03-15 13:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_src`, `img_alt`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'chess.png', 'opis', 1, NULL, NULL, NULL),
(2, '1615827204.png', 'chess players smart', NULL, 5, NULL, NULL),
(3, '1615827233.jpg', 'meme  n1', NULL, 5, NULL, NULL),
(4, '1615827256.png', 'meme  n2', NULL, 5, NULL, NULL),
(5, '1615827275.png', 'meme  n3', NULL, 5, NULL, NULL),
(6, '1615827294.jpg', 'meme  n4', NULL, 5, NULL, NULL),
(7, '1615827438.jpg', 'meme  n5', NULL, 5, NULL, NULL),
(8, '1615827461.png', 'meme  n6', NULL, 5, NULL, NULL),
(9, '1615827483.png', 'meme  n7', NULL, 5, NULL, NULL),
(10, '1615827614.png', 'meme  n7', NULL, 5, NULL, NULL),
(11, '1615827673.jpg', 'meme  n8', NULL, 5, NULL, NULL),
(12, 'conta.png', 'opis', 1, NULL, NULL, NULL),
(13, 'log.png', 'opis', 14, NULL, NULL, NULL),
(14, 'log.png', 'opis', 5, NULL, NULL, NULL),
(15, 'conta.png', 'opis', 14, NULL, NULL, NULL),
(16, 'chess.png', 'opis', 0, NULL, NULL, NULL),
(17, 'conta.png', 'opis', 6, NULL, NULL, NULL),
(18, 'log.png', 'opis', 10, NULL, NULL, NULL),
(19, 'conta.png', 'opis', 6, NULL, NULL, NULL),
(20, 'chess.png', 'opis', 11, NULL, NULL, NULL),
(21, 'chess.png', 'opis', 4, NULL, NULL, NULL),
(22, 'log.png', 'opis', 7, NULL, NULL, NULL),
(23, 'chess.png', 'opis', 11, NULL, NULL, NULL),
(24, 'log.png', 'opis', 12, NULL, NULL, NULL),
(25, 'conta.png', 'opis', 7, NULL, NULL, NULL),
(27, '1615647060.jpg', 'dijana', NULL, 7, NULL, NULL),
(29, '1615827732.jpg', 'meme  n10', NULL, 5, NULL, NULL),
(30, '1615827761.png', 'meme  n11', NULL, 5, NULL, NULL),
(31, '1615827804.png', 'london system', NULL, 5, NULL, NULL),
(32, '1615827880.png', 'meme  n12', NULL, 5, NULL, NULL),
(33, '1615827901.jpg', 'carlsen caruana', NULL, 5, NULL, NULL),
(34, '1615827916.png', 'meme  n15', NULL, 5, NULL, NULL),
(35, '1615827935.png', 'meme  n19', NULL, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`, `parent_id`, `order`) VALUES
(1, 'Home', 'home', NULL, 0),
(2, 'Chess articles', 'articles', NULL, 1),
(3, 'Chess quizzes', 'quizzes', 2, 2),
(4, 'Chess interviews', 'interviews', 2, 3),
(5, 'Chess tactics', 'tactics', 2, 4),
(6, 'Funny chess', 'funny', NULL, 5),
(7, 'Chess memes', 'memes', NULL, 6),
(8, 'About', 'about', NULL, 7),
(9, 'Contact', 'contact', NULL, 8),
(10, 'User', '#', NULL, 9),
(11, 'Log in', 'login', 10, 10),
(12, 'Register', 'register', 10, 11),
(13, 'Logout', 'logout', 10, 12);

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
(35, '2021_03_09_234112_create_menus_table', 1),
(36, '2021_03_10_011044_create_categories_table', 1),
(37, '2021_03_10_104600_create_posts_table', 1),
(38, '2021_03_10_125916_create_images_table', 1),
(41, '2021_03_11_085619_create_roles_table', 2),
(42, '2021_03_11_085626_create_users_table', 3),
(43, '2021_03_10_232506_create_comments_table', 4),
(44, '2021_03_14_084614_create_errors_table', 5),
(45, '2021_03_14_084707_create_activities_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `thumbnail`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Chess Player, Youtuber, Vast Knowledge Seeker: Agadmator Interview', 'Introduction\r\nHello everyone!\r\n\r\nEven though the second half of 2020 has been very quiet for this blog, I seem to be on a roll with interview lately.\r\n\r\nAfter the recent interview with my colleague Maaike Keetman, today I am happy to announce the return of the interview series. And in quite some style.\r\n\r\nBecause – as some of you might have figured out from my blatant ripping of my interviewee’s trademark opening words at the very beginning – today we will be talking with none other but my fellow countryman, the owner of the largest Chess Youtube Channel in the world, the famous Agadmator.\r\n\r\nFor those of you who have never heard of him 1 Agadmator – better known to Croatian authorities under his real name Antonio Radić – is a chess player from a small town of Križevci in Croatia who currently runs the largest chess Youtube channel in the world (which recently crossed 900k subscribers – at the time of writing2).\r\n\r\nEver since starting the channel back in 2017, Agadmator has been uploading almost daily chess videos and growing his fanbase exponentially. Today he is one of the most recognizable „personas“ within the chess world, whose endeavors have recently extended way beyond Youtube.\r\n\r\nIn this interview, we will take an opportunity to talk a bit about what’s going on in his life – about the current state of his Youtube Channel, about his other projects such as his Podcast or Manga, about his future plans and about other off-the-channel events.\r\n\r\nPlease note that we will not talk about how he started to play chess or how and why he decided to start his own Youtube channels, as he has already talked about these topics extensively in a number of previous interviews, some of which can be found in the „References and Further Reading (and Listening)“ section at the end of this interview.\r\n\r\nMany thanks to Antonio for taking the time from his busy schedule to do this.\r\n\r\nHope you will enjoy it!\r\n\r\nQ: Hi Antonio! Thank you very much for taking the time out of your busy schedule to do this interview, it is my pleasure and privilege to be able to ask you some questions.\r\n\r\nAllow me to start by asking a question or two about your health. 3 Recently, you had undergone a hearth surgery. In a video of yours and in our prior conversations, you mentioned it is a heart valve replacement. From what I have figured, it is a „routine“ surgery, but whenever someone relatively young requires a heart surgery it makes everyone worry. Would you mind sharing which cause requires a heart valve replacement surgery and how did you realize you might need one?\r\n\r\nA: In my case, it was a birth defect. My valve never fully developed and I knew it would have to be taken care of one day. When they told me I needed surgery, it wasn’t that big of a surprise.\r\n\r\nQ: How did the operation go? Considering the current situation with the COVID, I imagine it is not the best time to get „sick“ in any sense of the word. Did precautionary measures make your stay in the hospital more difficult (was anyone able to visit you, for example?).\r\n\r\nA: The actual stay in the hospital was very pleasant and we were not really “bothered” by COVID. We were not allowed to ever leave our floor. But all the tests and examinations leading to the surgery were a bit annoying as I had to get tested every time and they don’t do tests in my hometown so it was always time-consuming.\r\n\r\nQ: Last, but not least, I would like to do some non-Youtube and non-chess talk in the final bit of the interview.\r\n\r\nDespite all the major events and successes, you will most certainly remember 2020 by proposing to your long-term girlfriend Jelena. 9 Huge congratulations! Was the proposal a complete surprise for her, or did she SUBTLY HINT that she would like to get a ring before?\r\n\r\nA: Nah, it was a complete surprise. I was very sneaky about it. It’d be much better if she said Yes, though..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\n……..\r\n\r\nNah, just kidding, she did say yes :).\r\n\r\nQ:I wish you all the best in both your personal and private life and can’t wait to see what you have in store for the chess world in 2021.\r\n\r\nA: Thank you for this amazing interview. I can’t remember the last time I answered so many questions hahaha. Looking forward to your daily jokes! (not a joke)\r\n\r\nBe careful with what you wish, it might come true :D. Thanks once again for this amazing interview!', '1615823385.jpg', '1987-03-20', 2, NULL, '2021-03-15 14:49:46'),
(2, 'Chess Author, Player, Manager: Maaike Keetman Interview', 'Introduction\r\nWFM Maaike Keetman is a Dutch chess player who was a part of the Dutch Female National Team at the Baku Chess Olympiad in 2016. Outside of the Dutch chess circles, she is probably better known as Chessable’s employee as during her two-year reign in this company she supervised, edited and quality controlled hundreds of Chessable courses. In fact, due to her contributions and work-ethic, in late 2020 she became a Publishing Manager at that very company, at the age of 21.\r\n\r\nOn top of it all, Maaike also managed to apply all the knowledge about course creation she gained over the years and channel it into the creation of her very own course. In October 2020, the world saw her debut as a Chessable author as her highly successful (and verbose)1  Chessable course on the Nimzo Indian defense, titled The Fierce Nimzo-Indian, was released.\r\n\r\nIn all sincerity, Maaike is one of the nicest and friendliest people I have encountered and I am happy she is not only my colleague, but also a friend – and am therefore really looking forward to this interview!\r\n\r\nMaaike Keetman as a Chess Player\r\nQ: Hi Maiike and welcome to Chessentials, it is really nice and exciting to have you here! First of all, since I am not well-versed in Dutch names, would you mind sharing how did you get your name? Does it have any deeper meaning?\r\n\r\nA: Maiike doesn’t have a deeper meaning 🙂 however, Maaike is the Dutch/Frisian (an area in the Netherlands where they also have their own dialect) version of Maria.\r\n\r\nQ: In the interview for Chessable Blog you have already talked about how you got involved in chess 2 and you mentioned you started playing chess after your brother started playing it. But I haven’t realized who actually taught you the rules? Was it your brother, your parents or were you some sort of self-learning prodigy? 😀\r\n\r\nA: My parents did (mainly my father). We read many books together when I was young, as my English wasn’t good enough yet to understand it all, so he helped me read them.\r\nQ: If you could invite three persons to dinner, whom would you invite and why?\r\n\r\nA: Maxime Vachier-Lagrave. And maybe just Vjeko and our other publishing manager Juan Almaguer, as we always have a lot of fun together! 😀 10\r\n\r\nQ: Do you have a life motto? If yes, which is it?\r\n\r\nA: Not really, although in Dutch I like to say, „rustig aan, komt goed“ which is something like, relax take it easy. Given how much there is to do often, it is usually helpful to take a deep breath and just be calm!', '1615823651.png', '1999-08-11', 2, NULL, '2021-03-15 14:54:13'),
(3, '5 Types of Chess Players', '5 Types of Chess Players?\r\nWay back in the past, I stumbled on a Quora question titled “What are 5 types of chess players?”.\r\n\r\nI read the answer by the user Charles Slade and thoroughly enjoyed it. I knew I would be unable to surpass it, but I wouldn’t be I if I didn’t at least try. As usual, I showed no respect for the format and came up with 7 types of chess players.\r\n\r\nFast forward to the future. Running out of the ideas for the blog, I decided to recycle a bunch of my Quora answers. Since the XYZ Types of Chess Players sounded like a cool article and I really liked Charles’ answer. So I decided to contact him and ask him whether he has anything against me posting it on the blog.\r\n\r\nFortunately, he said yes, so I decided to merge it with my own answer to produce the final result – a list of 12 types of chess players.\r\n\r\nHope you guys will enjoy it 🙂\r\n\r\n1. The Memorizer / Cyborg\r\n“Memorizer” is a derogatory term. This person can bang out 30 moves of theory in every opening. Their 31st move will almost certainly be a stinker. They can’t really play chess, they just memorize.\r\n\r\nA friend of mine (rated mid/high 2200) loves playing against these players. He’ll select a line in which the book goes all the way to, say, a “drawn” K+R vs. K+R endgame. He’ll then win that endgame.\r\n\r\nI saw one particularly bitter memorizer sneer at him after a game: “Why did you keep playing after move 40? The endgame is drawn.” My friend gave one of the best retorts I’ve heard in a while: “The endgame isn’t drawn, it’s even.”\r\n\r\n(Subtext: “You suck at endgames.”)\r\n\r\nWhen a memorizer actually knows how to play chess a little (and their memorization goes very deep), they graduate to become a cyborg. They do what the computer says so often, they start to look like a computer themselves.\r\n\r\nTo be sure, “cyborg” is sometimes also used to describe someone who’s cheating via a computer. That’s not necessarily what I’m talking about here.\r\n\r\n2. The rating whore.\r\nThis is pretty self-explanatory. This person doesn’t wake up thinking about how to get better at chess. They wake up thinking about how to get a higher rating. Maybe that means becoming better at chess, but that’s kind of secondary consideration.\r\n\r\nThese players will never want to play lower-rated players — because if they lose the game, they’ll lose a lot of points. They don’t want to play if their rating is too high, because… they’ll lose a lot of points. If their rating crosses a threshold that’s important to them mid-tournament, they’ll actually withdraw from the tournament to “lock-in” that rating.\r\n\r\nIf they are beating a higher-rated player and the higher-rated player offers a draw, they’ll often accept. Better to get those rating points in hand.\r\n\r\nEven outside tournament chess, you can sometimes spot these guys. You’re playing a casual game. Maybe you’re playing against them, maybe you’re playing against someone else and they’re watching. But if you reveal that you might at least know possibly something about chess, their first question will be: “what’s your rating?”\r\n\r\nAs in, “uh oh, I don’t know what to do with you. Am I supposed to arrogantly dismiss you? Or genuflect and kiss your ring? I can’t take this uncertainty!”\r\n\r\n3. The guy who tries too hard to be original\r\nThis is a minority type, but this type is near and dear to my heart. This guy in your town is absolutely unique. But there’s one of these guys in every town.\r\n\r\nThis guy plays weird openings. Expect 1. g4, 2. a4, etc. He doesn’t follow conventional wisdom. In many cases, the reason is so that you’re “out of the book” and he has the advantage. He never realizes that the conventional wisdom is conventional for a reason: straying too far from the path just means you suck.\r\n\r\n(By way of analogy, yes: a football defender will be confused if you’re a wide receiver who skips backward instead of runs forwards. That doesn’t mean you’ll be harder to defend though.)\r\n\r\n4. The guy who can’t let it go. (Related: the guy who was always winning, until he lost.)\r\nYou play a 40 move game. He loses. No matter what the circumstances are, he’ll want to go back a few moves and analyze it. “All I had to do was play Nf5 instead of a3, and I’m winning.” No. No you’re not. You made a mistake on move 12 that lead to your position slowly collapsing. Going back to move 37 isn’t going to reveal your error.\r\n\r\nHilariously, if you indulge this person as much as they’d like, you eventually will get back to revisiting what he played on move 12. If he discovers a better move on move 12, he’ll confidently proclaim like he knew all along: “See? I was winning!”\r\n\r\nRelatedly, this guy is annoying even when they’re watching. Two strong players play a tense and interesting game. One finally succumbs. This guy will pipe up, “Why didn’t you take the knight a few moves ago?” A fatal mistake is to indulge with an answer, otherwise, you’ll be lead down an infinitely-expanding labyrinth of inane suggestions.\r\n\r\nMy greatest contribution to chess has nothing to do with a clever opening variation or a strategic philosophy. My contribution is a response to this kind of guy. “Why didn’t you take the knight?” “I didn’t see it.” This is a great response, because it (a) ends the conversation, and (b) makes this guy feel good that he saw a move that you — the great player you are — didn’t. He won’t disturb that feeling by asking a follow-up.\r\n\r\n5. Scaredy cat / White to trade and win\r\nI don’t know why this person plays chess. Given his choice, he wouldn’t move a piece past the fourth rank. Ever. The order of the day is duck and cover.\r\n\r\nA related person, though not always the same person, is the “white to trade and win” guy. Give this guy a pawn, and suddenly the only plan he can execute is to trade all the pieces. If you have any sense of dynamic play, these guys are fun to play. They’ll tie themselves in knots trying to trade pieces or hang on to their pawn, “sac sac mate” is always looming.', '1615823756.jpg', '1979-11-03', 4, NULL, '2021-03-15 14:55:56'),
(4, '3 types of blitz chess online players', 'Blitz chess online\r\nThe 21st century can truly be regarded as the golden era for all the connoisseurs of the chess game.\r\n\r\nI have already written about huge positive impact Internet has had on our ancient game.  This impact is especially significant in the domain of the blitz chess.\r\n\r\nConsidering that the tempo of life is faster than ever before, most people don’t have time to play long chess games on a regular basis. Therefore, shorter time controls are slowly starting to dominate and not only on an amateur level; there are more blitz tournaments on a professional level than ever before.\r\n\r\nThe Internet is very important in that regard. Nowadays, it takes less time and effort to play a blitz game than ever before. With a decent personal computer and internet connection, it takes only a couple of clicks and you can play against anyone in the world.\r\n\r\n\r\nUnfortunately, nothing comes without the price. The Internet has managed to bring the worst out of people. This should be familiar to anyone who has ever played a multiplayer computer game, visited an online forum or spent hours of his life in the youtube comment section.\r\n\r\nHowever, the troll mentality is apparent in blitz chess arena as well. And it is not only the consequence of anonymity (although it certainly plays a role). Merely the fact that you don’t see your opponent lowers the bar of acceptable behaviour. Previously, if you wanted to insult someone, you had to do it face to face. Today, three strokes on the keyboard are enough and you rarely have to fear the outcome.\r\n\r\nTherefore, I have decided to write the following post, in honour of different types of blitz chess online players I have faced during my playing career. The list might seem too pessimistic to some; I have tried to amend myself with the last point which will hopefully serve as a light at the end of a tunnel.\r\n\r\nHope you will enjoy it. Let us start with the most obvious type of the player – the “I will only play one game” prick.\r\n\r\n1. The “No Rematch” guy\r\nWe all know that feeling. You sit down, start a new game, get the Black pieces, screw something up in the opening, resign after 1 minute of play and 15 moves and then ask for a rematch.\r\n\r\nAfter all, you are a slow starter, you haven’t even played a normal game, your opponent hasn’t lost that much time and there is no way he has to go already since the game has barely started before it was over.\r\n\r\nThen, suddenly, after sending a rematch request, a crude reality in form of “xy has declined your rematch proposal” sobers you up. It may be just me, but I find it quite irritating; are we here to play some chess or to collect virtual rating points?\r\n\r\nIn my experience, this behaviour is typical for someone much stronger than yourself. As if they are saying: “You are not worthy of my time”.  Like they have never screwed anything during the opening phase of the game.\r\n\r\nI think that not giving the opportunity to play with colours reversed is slightly rude, especially if the winning side has the White pieces in the first game.\r\n\r\nVladimir Kramnik knows a thing or two about not giving a rematch :evil laughter:\r\n\r\n2. The “OMG You Are So Lucky” guy\r\nThere is nothing more frustrating than claiming a big advantage early in the blitz game and then ending the game in one of the two following ways:\r\n\r\nNot being to able to finish your opponent as quickly as possible and losing on time\r\nGetting swindled by your opponent and ruining a winning position\r\nQuite often, instead of blaming ourselves for stupid mistakes we made, our first impulse is to blame the opponent. The “OMG You Are So Lucky” comment is often inevitable.\r\n\r\nI think that anyone who plays blitz chess online on a regular basis has taken the role of “OMG You Are So Lucky” guy at least once.\r\n\r\nI know I certainly have. Not that I am terribly proud of it, though. Because everyone who has played DOTA at least once in his life knows that luck is no excuse.\r\n\r\n3. The “Woody Wood Pusher” guy\r\nI find myself mildly annoyed when playing against someone who plays 15 minutes in 3 seconds. Usually, such players are only fast and concern themselves primarily with quantity, and not by the quality of their moves.\r\n\r\nWhen you are playing the “Woody Wood Pusher” guy, it is hard to avoid taking the “OMG You Are So Lucky ” guy role. These guys are often tactically very tricky and alert and often punish your sub-optimal moves. Thus, they either swindle you, or you lose on time against them, which triggers your rage button.\r\n\r\nThe main difficulty in facing the “Woody Wood Pusher” is a psychological one. You have to be calm enough and be patient in converting your advantage; while moving quickly enough in order not to jeopardize your clock situation. As you lose games against them, this task gets progressively harder; your emotions start to take over.\r\n\r\nYou might say that I am lamenting with justification. After all, I have just stated above that time is one of the assets in blitz chess online. Doesn’t complaining against it suddenly make me a huge hypocrite?\r\n\r\nWell, there might be some truth to it. But ignoring the position when your opponent has 10 seconds on the clock is one thing; playing purely for the time from the start is another thing. I mean, we are talking about blitz chess online, I am of opinion that movement of the pieces should be the most important thing up to a certain point of the game.', '1615823961.jpg', '1988-04-26', 4, NULL, '2021-03-15 14:59:21'),
(5, 'Weird Chess Openings', 'No, this is not a post about the London System.\r\n\r\nSome time ago, I stumbled on an entertaining question on Quora titled What are the coolest chess opening names.\r\n\r\nI wrote a short, but a rather superficial answer. But I immediately realized it would be an interesting topic for an extended, more thorough and researched article.\r\n\r\nIt took me a while to actually sit down, do the research and write it. But I finally managed. Today, I am able to present you with the result of my work. An article devoted to weird chess openings – openings that have funny, cool, entertaining or just plain weird names.\r\n\r\nThe article is structured as a list. The name of the variation is followed up with the actual moves and some of my comments. I have tried to find the origin of the name whenever possible. Unfortunately for the reader, I was able to do so for only a small sample of openings considered. As for the rest, you will have to put up with my dubious writing style and pitiful humour attempts.\r\n\r\nHope you will enjoy the show.\r\n\r\nLIST OF WEIRD CHESS OPENINGS\r\nThe Fried Liver (Fegatello) Attack\r\nA variation of the Two Knights Defence including a Knight sacrifice on f7 first appeared in a game between two Italian Masters in 1610. Since the sacrifice leads to a position where the Black king has to endure an attack in the center, the variation later became known as The Fegatello or Fried Liver Attack.\r\n\r\nThe exact etymology is not known. In The Oxford Companion To Chess, David Hooper and Kenneth Whyld speculated that the name implies that the sacrifice of White’s knight is like a slice of liver used as bait in a trap 1 (in the Italian language, the word Fegatello is an idiom meaning “dead as a piece of liver”).\r\n\r\nFried Fox / Pork Chop (Hammerschlag Opening)\r\nIn the 19th century, an English player Thomas Wilson Barnes used a provocative opening – 1 e4 f6!? to beat none other but the greatest player of the era – Paul Charles Morphy. His name has been connected to the advance of the f-pawn with both colors (including 1 f3).\r\n\r\nEver since, the opening theory has advanced and introduced the so-called Fried Fox / Pork Chop / Hammerschlag. I couldn’t find any origin for its name...\r\n\r\nHyperaccelerated Pterodactyl\r\nWhile we are at the Modern Defence – only chess players are capable of using the words “Hyperaccelerated” and “Pterodactyl” in a single sentence. The Hyperaccelerated Pterodactyl Variation refers to the set-up where Black plays 1… g6, 2….Bg7 and 3…c5:', '1615824105.jpg', '2012-08-13', 4, NULL, '2021-03-15 15:01:45'),
(6, 'Chess2Chess Quiz #1', 'Questions\r\n\r\nQuestion 1\r\nToday is Valentine’s Day and is there a better way to celebrate the occasion but by giving spotlight to chess players that are often not given the credit they deserve – (great) female chess players.\r\n\r\nIn that context, it is virtually impossible to have a conversation without talking about the Polgar family, which yielded three great chess players and the greatest female chess player that ever lived. For starters, we will be asking you for the names of the three Polgar sisters that shook the chess world and also for the name of the father of the Polgar family, who was the man behind this “project”.\r\n\r\nQuestion 2\r\nEven though the Polgar sisters broke many boundaries and became first in many regards, they weren’t the first women players to be awarded the title of Grandmaster.\r\n\r\nThis honor was awarded to one of their predecessors – a famous Georgian player who was also the fifth women chess champion. She was granted the title after scoring “only” two grandmaster norms in 23 games but being awarded the title by FIDE due to her outstanding performance at the Lone Pine tournament in 1977.\r\n\r\nFor half a point, we ask you:\r\n\r\na) The name of the afore-mentioned Georgian player?\r\nb) The name of the female player who became the first Grandmaster in a more “conventional” way, scoring three norms and exceeding 2500.\r\n\r\nQuestion 3\r\nSince we already mentioned Female World Chess Championship:\r\n\r\na) Which female chess player, born in Russia to a Czechoslovakian father and English mother, was the first-ever female player to compete with male players in top tournaments and the first-ever Women World Chess Champion, capturing the title in 1927 and defending it further 6 times with a whopping score of +78=4-1?\r\n\r\nb) Which female chess player from Germany was her World Championship challenger in the first-ever Women World Chess Championship matches held in 1934 and 1937?', '1615824306.jpg', '1995-06-27', 1, NULL, '2021-03-15 15:05:06'),
(7, 'Funny chess problems', 'Funny chess problems?\r\n\r\nOne of the greatest young chess talents in the World, 12-year-old International Master Nihal Sarin recently visited the quarters of the Chessbase in Hamburg, Germany.\r\n\r\nIn the article report following that visit, there was a number of funny chess problems whose solutions really made me smirk more than once.\r\n\r\nAnd I immediately reminisced the similar delightful problems I’ve stumbled upon in the ancient chess book by Yugoslav Master Dragoslav Andrić : Šah – Igra Miliona (eng. Chess – The game of the millions).\r\n\r\n\r\nI know that people don’t usually associate the word “funny” with the word “chess problem”.\r\n\r\nHowever, I hope that this article will change your opinion. And that at least one of the problems will make you laugh.\r\n\r\n In contrast to the most of the jokes on this blog.\r\n\r\nThe definition of the promotion rule\r\nI would like to start with the summary of the set of problems given by the Nihal Sarin from the aforementioned article.\r\n\r\nThe problems revolved around the correct definition of the promotion rule. \r\n\r\nThe most common definition, also used by the author of these lines (cf. Basic chess rules) typically goes along the following lines:\r\n\r\n“When the pawn reaches the last rank, a player can promote it to a piece of his choice.”', '1615825270.jpg', '1987-11-02', 4, NULL, '2021-03-15 15:21:11'),
(8, 'Funny chess stories', 'Quod ratione asperiores ad tempora optio libero ipsa. Itaque non quo rerum repudiandae dolores.\r\n\r\nFunny chess stories?\r\nSince I have started answering chess related questions on Quora, I have tried covering a broad variety of chess topics.\r\n\r\nSo far, my most upvoted answers have included some chess anecdotes from my own tournament experience.\r\n\r\nThat’s how I got the idea to write this post. During the last couple of years, I have heard and read a lot of chess stories that put a big laugh on my face.\r\n\r\nI’ve decided that putting the most remarkable ones in one place might make a lot of sense.\r\n\r\n\r\nI know you are probably wondering how can anyone use the words funny and chess in the same sentence.\r\n\r\nBut people have wondered the same about my own jokes and I am sure you all find them hilarious.\r\n\r\nAren’t you guys?\r\n\r\n..\r\n\r\nGuys?\r\n\r\n\r\nHave you heard it before?\r\nI would like to start with a chess story I can easily relate to. It will become much more clear why after you read it.\r\n\r\n“German grandmaster Wolfgang Unzicker loved to tell jokes, even at the most inappropriate occasions. He would often start telling one immediately after a chess game, while he and his opponent were still signing the scoresheet.\r\n\r\nOnce he tried doing that after a game against Vasja Pirc. He started with the customary: ‘Excuse me, grandmaster, but did I ever tell you this joke..’\r\n\r\n‘Is it good?’ – asked Pirc.\r\n\r\n‘ Oh, excellent.’- replied Unzicker.\r\n\r\n‘Then it means you haven’t told it to me.’ “\r\n\r\nA chess master\r\nWolfgang Unzicker wasn’t the only grandmaster with a developed sense of humour.\r\n\r\nThe fourth World Champion Alexander Alekhine also made some brilliant jokes throughout his life.\r\n\r\nOnce he found himself on the same banquet together with his big rival Efim Bogoljubow. Bogoljubow started trash talking Alekhine; the latter replied with the following joke:\r\n\r\n“I have dreamt that I have died and arrived at the gates of heaven. Saint Peter approached me and asked me what have I done during my days on Earth.\r\n\r\n‘I was a chess master and the Champion of the World.’\r\n\r\n‘Chess master? I am sorry, we don’t accept chess masters in heaven.’\r\n\r\n‘What do you mean. Here, there is Bogoljubow lying on this cloud.’\r\n\r\n‘Bogoljubow? Oh, he is not a chess master. He only thinks he is one.’\r\n\r\nTime is relative\r\n“Long before the days of Fischer, main contenders for the USA crown were Samuel Reshevsky, and less famous player, James T. Sherwin.\r\n\r\nDuring the USA Championship Sherwin was in excellent form and won all his games up to a certain point. Reshevsky was in a serious danger of falling behind since he settled for two draws in the early rounds.\r\n\r\nAt that moment, he addressed Sherwin with the following words:\r\n\r\n‘I see you are playing well. If you continue to do so, I will have to beat you.’\r\n\r\n‘Oh, and what if I beat you?’\r\n\r\n‘That can happen in a thousand years’\r\n\r\nNaturally, in the last round, Sherwin beat Reshevsky in their individual encounter.\r\n\r\nWhen they were signing the scoresheets, he merely remarked:\r\n\r\n‘ You know, grandmaster, time flies really fast..’ ”\r\n\r\nHappy anniversary\r\nThe next one is probably my favourite one, as it describes  typical shortcomings of a chess player 😀\r\n\r\n“I remember once I was in Switzerland and my wife told me, ‘I put some  of your stuff in the safe – the code is very easy to remember, it’s  2706, so you can take whatever you need.’\r\n\r\nAnd I told her, ‘Well, 2706 is not really a good Elo rating. Normally it’s rounded off to the nearest 5  or 10’. So I told her I couldn’t see how I could remember that. She looked a bit shocked and then she explained to me that the 27th of June is our anniversary. “', '1615825381.jpg', '1989-05-22', 4, NULL, '2021-03-15 15:23:02'),
(9, 'Best chess quotes', 'If you ever played chess, chances are you have probably heard the famous quote by Francois Andre Philidor: “ The pawns are the soul of chess.”\r\n\r\nGems such as this represent a priceless part of the rich chess heritage. Numerous chess players, World Champions and famous persons have talked and written about chess and uttered some immortal phrases in the process.\r\n\r\nTherefore, I’ve decided to make a list of most interesting and entertaining chess quotes. And to ruin as many of them as possible with my own thoughts and commentary in the process.\r\n\r\nI hope you will enjoy it.\r\n\r\nQuotes about chess\r\n1. ” One of the greatest advantages of chess over other sports is that you can always resign.” –  Joe Gallagher\r\n     And also one of the greatest disadvantages, since often you refuse to resign and continue to suffer only to realize that it was all in vain in the end.\r\n\r\n2. ” I prefer to lose a really good game than to win a bad one.” –  David Levy\r\n    I personally prefer to win a really good game than to lose a bad one, but what do I know..\r\n\r\n3. ” You cannot play at Chess if you are kind-hearted.” – French proverb\r\n4. ” One who has never seen a game of chess is, in my opinion, an unhappy person.” –  Anatoly Karpov\r\n\r\n5. “ Chess, like love, like music, has the power to make people happy ”- Siegbert Tarrasch\r\n         Unless we are talking about Nicki Minaj’s musical escapades, which make me as happy as encountering the London System with the Black pieces.', '1615825588.jpg', '2001-03-24', 2, NULL, '2021-03-15 15:26:29'),
(10, 'Chess in popular culture', 'Chess gone mainstream\r\nFebruary 19th, 2017 will go down in history of chess as a date when chess became an integral part of the mainstream popular culture.\r\nBecause on February 19th, 2017, the 15th episode of the 28th season (already?!) of the Simpsons, labeled “The Cad and the Hat“, officialy aired.\r\n\r\nAn episode in which apart from standard brother-sister love between Bart and Lisa Simpson, also introduces Homer Simpson as a “chess savant” and features the Chess World Champion Magnus Carlsen as a guest.\r\n\r\nThe reaction of the chess community worldwide was predictable. Since chess is often underestimated and rarely publicized in the media, everybody was delighted that chess came under the spotlight for once.\r\n\r\nEven though there are some people who think that Simpsons should have been canceled some 10 years ago. But haters gonna hate..\r\n\r\nThe following reddit thread is the best evidence of both claims presented above.\r\n\r\nHowever, although by far the most prominent, the leading role played by chess in the Simpsons is not the only instance of appearance of chess in popular culture.\r\n\r\nThroughout the last century there has been a significant amount of chess references in books, movies, musical videos and insanely politicaly correct internet comics.\r\n\r\nTherefore, I’ve decided to make an overview of the most important instances of chess appearing in popular culture.\r\n\r\nHope you will enjoy getting acquainted with science fiction, con artists, Serbian folk music and beautiful woman.\r\n\r\n[Spoiler alert] \r\n\r\nI have mentioned important plot details of the various movies/books/comics in this post. So be warned!\r\n\r\n[/Spoiler alert]\r\n\r\nHarry Potter and the Sorcerer’s Stone\r\nIf you are a 90s kid, prepare yourself for a huge burst of a nostalgia for starters.\r\n\r\nBecause I reckon there is a very high probability that the book series about The-boy-who-lived brought alot of joy and delight into your childhood.\r\n\r\nUnless you spent your childhood going around burning the books together with the work of Stephen King and AC/DC albums.\r\n\r\nIn that case I doubt there was joy and delight in your life at all.\r\n\r\nAnyway, one of the most prominent public exposures of chess made its appearance already in the first book of the series, The Sorcerer’s Stone.\r\n\r\nBecause when they aren’t saving the world, learning the spells or having a confusing mixes of feelings typical for teenagers, the heroes of the story like to play the wizard chess in their free time.\r\n\r\nThe wizard chess has the same rules as the conventional chess. The only slight difference is the fact that the pieces communicate with the players and that they capture one another in quite brutal and violent fashion.\r\n\r\nThe wizard chess is very important throughout the first book. Apart from making Ronald Wesley good at something, winning in wizard chess on a giant chessboard is one of the key tasks in the labyrinth that leads to the Sorcerer’s stone. \r\n\r\nThe three youngsters take  places of the three pieces on the chessboard and Ronald Wesley conducts the game heroically, sacrificing himself in the key moment to ensure the checkmate of the opposing king.\r\n\r\nAnd also another one of Rupert’s Grint silly faces in the movie adaptation of the book.\r\n\r\nStar Trek\r\nRecently, I have asked a close personal female… acquitance.. whether she watches Game of Thrones.\r\n\r\nHer response went something along the lines:\r\n\r\n“Isn’t that show only followed by those… wierd people?”\r\nI didn’t even try to proceed with Star Trek references after that. But since we have already started going in the SF direction with the previous part of the post, there is no way out now.\r\n\r\nTrue fans of Star Trek have benefited heavily from following their favourite show throughout the years:\r\n\r\nStar Trek has improved their linguistic capabilities by being forced to learn the Klingon Language (I have just found out that The Klingon Language Institute actually exists)\r\nStar Trek has allowed the kids to be cool by allowing them to play the advanced version of the Rock – Paper – Scissors game \r\nStar Trek has introduced one of the most popular chess variants out there or the so called 3d chess\r\n\r\nIf you want to rule the rules of 3d chess, it is not that simple. The history of the rules of the 3d chess is very complicated and I haven’t managed to find a 100% reliable source for learning the game.\r\n\r\nThe most of the literature is more occupied with the pure process of manufacturing the board. The Star Trek history bible, the Starfleet Technical Reference Manual gives detailed instructions about making your own board, but there is zero information about the rules of the game.\r\n\r\nTherefore, I am sorry to inform you, but you probably won’t get the role in the new season of the Big Bang Theory and the opportunity to beat the master of 3d chess, dr. Sheldon Cooper.', '1615825819.jpg', '2014-04-16', 4, NULL, '2021-03-15 15:30:19'),
(11, 'Chess2Chess Chess Quiz #1', 'Introduction\r\nBack in my student days, I used to be a big fan of pub quizzes. Every Friday, I would go to a nearby cinema where a weekly pub quiz competition was organized.\r\n\r\nEventually, I gave it up and took up some other hobbies. But in the meantime, my love for the concept definitely remained and even today I go to a pub quiz every now and then (although much less regularly than before).\r\n\r\nI was never particularly good at pub quizzes as my knowledge has way too many holes. However, I was always pretty knowledgeable about chess and chess history and I always regretted it that regular pub quizzes don’t have that many chess questions.\r\n\r\nSince there are many thematic quizzes out there, I realized I might have a lot of fun participating in a thematic chess quiz. Alas, apart from quizzes at certain competitions here in Croatia, I haven’t found anybody hosting a chess quiz on a regular basis.\r\n\r\nThis is how I got the idea of solving this “problem” and doing a chess quiz of my own. I am happy to announce the first edition of Chessentials Chess Quiz #1 was held on 16th January 2021. I hope I will manage to sustain it and keep it a regular monthly thing.\r\n\r\nIn this article, you will find the questions, the answers, and the final standings of the quiz. You can test yourself by trying to answer the questions. If you want to participate in the subsequent chess quizzes, keep track of my Twitter or Facebook as they will be announced there!\r\n\r\nHappy solving! Hope you will enjoy it!\r\n\r\nQuestions\r\nChess In Popular Culture\r\nQuestion 1: \r\n\r\nIn many ways, 2020 has been a groundbreaking year for chess. Quarantine contributed to more and more people being drawn to the game and chess was continually #growing throughout the year.\r\nBut toward the end of the year, things spiraled out of control as Netflix released the TV show Queen’s Gambit, which led to an unprecedented chess boom. Since most of you have (hopefully) watched it, it seemed suitable to open the first edition of the Chessentials chess quiz with an easy one: for half a point:\r\n\r\nA) We ask you to tell us the name of the main character of the show \r\n\r\nQuestion 2:\r\n\r\nEven though Queen’s Gambit is by far the most popular appearance of chess in popular culture, it is far from being the only one. Every kid from the 90s might recall a famous chess scene that appears in another series featuring a famous orphan with a healthy dose of egoism and anger management issues – the Harry Potter saga.\r\n\r\nIn a famous scene from the first book/movie from the series (The Philosopher’s Stone), Harry, Ron and Hermione become “living chess pieces” in order to win a  game of “wizard-chess” on a giant board enchanted by professor McGonagall. For half a point, we ask you:\r\n\r\na) Ron, as the best player, took the role of the knight (image on the next slide) and conducted the game. The role of which chess pieces did Harry and Hermione take (respectively)?\r\n\r\nb) Which famous American International Master, book author, and book reviewer was asked to compose a chess problem involving a “Ron sacrifice” for the purpose of the movie, only to be one of the very few people NOT to be featured in the end credits of the movie?\r\n\r\nQuestion 3:\r\n\r\nEven though Queen’s Gambit is by far the most popular appearance of chess in popular culture, it is far from being the only chess novel ever written (or best, according to me).\r\n\r\nWhen he was not obsessed with underage girls, this Russian writer was fairly obsessed with the game and was an accomplished chess problem composer.\r\n\r\nOne of his earliest novels from 1930 (adapted to a movie in 2000) features a tragic story about a chess player driven to insanity by the game. For half a point, we ask you:\r\n\r\na) The name of this Russian writer?\r\n\r\nb) The name of the movie/novel?\r\n\r\nQuestion 4:\r\n\r\nWhile we are at chess movies – in another book adaptation, we follow the chess path of a 7-year old prodigy on his path toward becoming the champion like Bobby Fischer. For half a point, we ask you:\r\n\r\nA) The name of the player whose father Fred wrote the original book and who would become one of the youngest International Master in the world in 1992, at the age of 16 and who have up chess completely in 1999/2000.\r\n\r\nB) The name of the movie?', '1615826057.jpg', '1995-02-24', 1, NULL, '2021-03-15 15:34:18'),
(12, 'Chess tactics 1 | Definitions', 'Attacking f7/f2\r\nA tactic or threat that involves the targeting of the opponent\'s \"weakest square.\" Often f7 and f2 are referred to as the weakest squares on a chessboard because they are protected only by the king at the start, so often these tactics would occur somewhere in the opening to early middlegame stages. There are many possible attacking ideas and threats that take place surrounding those two critical points.\r\n\r\nAttacking the Castled King \r\nAll tactics that involve attacking a castled king. These would be ideas such as sacrifices to the surrounding pawns of a castled position, pawn storms, as well as many other possible tactical themes  -- with the specific distinction that the pattern was used to attack a castled King\'s position, either kingside or queenside.\r\n\r\nBack Rank \r\nA back-rank mate is when either the rook or queen is attacking the enemy King, and this enemy King is trapped \"on the back rank\" (which means either the 1st or 8th rank) by his own army.\r\n\r\nBasic Checkmates:\r\nAny type of basic checkmating \"pattern\". This definition does not apply to any position that happens to be checkmate in one or two moves, but rather, tactics that either use or climax in a basic checkmating pattern such as: King and Queen vs King; King and Rook vs King; two Rooks vs King; and two Bishops vs King.\r\n\r\nDesperado:   \r\nA desperado tactic can sometimes be considered a sacrifice, depending on the position. The move captures an enemy piece when either one or more of your own pieces is already hanging (undefended). When material is going to be lost regardless, these situations present a rare opportunity to be \"reckless\" and take out an enemy piece along the way. This tactic often happens when both white and black have pieces under attack.', '1615826230.jpg', '1979-09-02', 3, NULL, '2021-03-15 15:37:10'),
(13, 'Chess in popular culture #2', 'Aaaaand we\'re back on the this topic:\r\n\r\nJames Bond: From Russia with Love\r\nAlthough I have watched almost every James Bond sequel out there, I was still rather surprised when I found out that there is a chess scene featured as early as movie number two.\r\n\r\nSomehow I have forgotten that the main villain of the infamous SPECTRE organization featured in From Russia With Love,  is also a chess grandmaster.\r\n\r\nIn the opening scene of the movie, the head of the SPECTRE, Kronsteen, also known as “number 5”, uses a brilliant combination to beat the Canadian grandmaster, McAdams.\r\n\r\nNaturally, the combination comes in the crucial moment of a match the duo plays in Venice, Italy. The game is played with the result standing at 11.5 – 11.5, and with the nice tactical sequence Kronsteen wins the match.\r\n\r\nBronstein’s comment is well worth noting:\r\n\r\n“I don’t know what kind of Devil possesed me to reply with e5. I have forgotten that Spassky, very much as Spielmann in the past, enjoys playing the King’s Gambit.”\r\n\r\nPawn Sacrifice\r\nMoving away from the world of fiction, the next three chess appearances will be more biography/drama orientated.\r\n\r\nLet’s start with the movie that probably caused even more stirr in the chess world than the aforementioned Simpsons’ episode.\r\n\r\nI am talking about the movie that allowed Tobey McGuire’s one and only I-am-on-the-verge-of-crying face gain some credibility.\r\n\r\nThe biographical movie about Robert James Fischer. The Pawn Sacrifice.\r\n\r\nThe movie follows the life and games of Bobby Fischer, culminating in the  so-called “Match of the Century”, a World Championship match against the Soviet Grandmaster Boris Spassky.\r\n\r\nNaturally, since the match happened during the Cold War, movie depicts the match as the clash of ideologies.\r\n\r\nFor instance, I found the scene in which Nixon follows the chess game on the TV-set very dramatic.\r\n\r\nThe movie crew has really made a thorough and detailed preparation.\r\n\r\nIn preparing to write the movie’s script, screenwriter Steven Knight read many of the books that have been written about Bobby Fischer and the “Match of the Century”, as well as speaking with people who knew him.\r\n\r\n“The most useful material was archival footage of him being interviewed,” said screenwriter Knight. “Bobby spoke and moved oddly, and to see that was helpful. If you noticed him walking down the street, you’d think, ‘there is a curious person’. He might have ended up just another homeless person, but he was just so good at chess that he was saved by it. And, of course, cursed by it as well.”\r\n\r\nAnd whereas the magnitude and importance of the “Match of the century” are well known to any chess player, the movie really did alot for chess promotion outside the chess community.', '1615826485.jpg', '1988-01-31', 4, NULL, '2021-03-15 15:41:26'),
(14, 'Chess in popular culture #3', 'No need for further introduction:\r\n\r\nSearching for Bobby Fischer\r\nAnother famous chess appearance in the popular culture is once again inevitably linked with the name of Bobby Fischer.\r\n\r\nAnd once again we have an instance of a movie adaptation based on an autobiographical novel by Fred Waitzkin.\r\n\r\nIn  Searching for Bobby Fischer we follow a young chess prodigy, Josh Waitzkin on his path toward becoming a chess champion.\r\n\r\nThe movie is very touching as we see a seven year old being torn between playing chess for fun and playing chess professionally, as the following scene testifies (source: IMDB) :\r\n\r\nBruce Pandolfini: His chess ideas are like pieces of his body he’s reluctant to give up. For instance, he simply can’t cope with being told not to bring his queen out too early in the game. Why shouldn’t he? He’s won many a game in Washington Square doing exactly that, why is this suddenly wrong?\r\n\r\nFred: Try getting him to brush his teeth sometime.\r\n\r\nBruce Pandolfini: What I’m trying to teach him and what he’s learning there are two very different things. Park hustlers play tactics, not position. They rely on wild, unpredictable moves meant to intimidate their opponent. Great in a two-minute speed game for drug money, but it’ll cost Josh dearly in real games.\r\n\r\nFred: Well, he’s learning some new words!\r\n\r\nBruce Pandolfini: I was wondering if you could keep him from playing there so much.\r\n\r\nFred: Sure.\r\n\r\nBonnie: No. It’d kill him not to play in the park. He loves it. \r\n\r\nApart from boy struggling, we also follow the struggles of his father Fred, who is torn between pushing his son to maximize his potential and allowing him to have a normal childhood.\r\n\r\nThe tournament in the film was meant to resemble Waitzkin’s 1986 U.S. Primary Championships, in which he drew a tough opponent named Jeff Sarwer (who Jonathan Poe is meant to characterize), to share the championship title. The final game is given below.\r\n\r\nDzenan Loncarevic\r\n\r\n\r\nTo conclude, I would like to present mr. Dzenan Loncarevic, a Serbian folk singer, and his brilliant heartbreaking hit, Laufer.\r\n\r\nApart from giant chess board in the music video, this video presents an unique insight into the mind of a typical Balkan boy.\r\n\r\nOr a girl.\r\n\r\nA rough translation of the chorus is as follows:\r\n\r\n“Life isn’t fair.. \r\n\r\nIt makes you think that everything is possible.\r\n\r\nAnd it isn’t.\r\n\r\nBeauty and the beast.\r\n\r\nMission impossible just like the two of us.\r\n\r\nBlack queen and White bishop.”\r\n\r\nVery deep.\r\n\r\nGreat, now I am crying again.\r\n\r\nThe end?\r\nHey hey, what about all the beautiful women you promised? You only gave us a teenage Emma Watson.\r\n\r\nOkay okay here is a photo from the set of the movie Friends with benefits.\r\n\r\nThis photo was not a part of the movie and has no relation to chess popular culture whatsoever.\r\n\r\nIt is also probably the best part of the article.\r\n\r\nThose eyes…That smile…\r\n\r\nAsthon Kutcher, you lucky bastard.', '1615826756.jpg', '1975-10-06', 4, NULL, '2021-03-15 15:45:56');
INSERT INTO `posts` (`id`, `title`, `text`, `thumbnail`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(15, '6 Types of Chess Players - 2nd edition', '1. The “overly-shy-beginner” guy\r\nYou know those novices who appear in the tournament hall for the first time and then stand as close to the wall as possible, as if they wish they had Harry Potter’s Cloak of Invisibility?\r\n\r\nWho are moving their pieces slowly and uncertainly with a hand that is shaking tremendously?\r\n\r\nWho have the look of utter confusion and shame when they press the wrong clock or write the wrong moves on their scoresheet?\r\n\r\nWho get paired against someone rated around 2100-2200 and then state excitedly: “Oh my god, I am playing a Candidate Master!”?\r\n\r\nWho almost lose their consciousness when a Grandmaster enters a hall because for them it is as if the gods themselves descended on this sorrow land?\r\n\r\nWhose pure joy and excitement after a won game are contagious and a pleasure to watch for us more experienced players?\r\n\r\nBecause most of us were once like them.\r\n\r\n2. The “overly-confident-beginner” guy\r\nOn the other side of the spectrum, we have beginners who have won a game or two on the Internet or beaten their dad or grandfather and now they think they are the champions of the world.\r\n\r\nThey call everyone “a patzer”, state that “chess is easy” and that “becoming a Grandmaster is nothing special since basically anyone can do it”.\r\n\r\nThey think other people should lose their consciousness because when they appear it is as if the gods themselves have descended on this sorrow land.\r\n\r\nThey are a good example of the Dünning Kruger effect and are, in general, arrogant assholes people emigrate to avoid.\r\n\r\nNot to mention that, despite their mediocre play, it is never their fault. They always have a perfect excuse ready.\r\n\r\nWhich brings me to the next type.\r\n\r\n3.The “excuse” guy\r\nSo, you have just lost a game and you think it is because of your bad play?\r\n\r\nWell, think again.\r\n\r\nThere is a high probability it might have something to do with the lighting.\r\n\r\nOr the lack of fresh air in the hall.\r\n\r\nOr the facts there were cameras disturbing you.\r\n\r\nOr the fact “Russians” and “Jews” conspired against you.\r\n\r\nOr the fact your cat kept meowing the previous night and you were unable to get some sleep.\r\n\r\nOr the fact your teammate started coughing loudly just when your game has reached the critical moment.\r\n\r\nOr the fact your opponent must have cheated. Definitely! 100%!\r\n\r\nWhichever path you chose, the main thing to remember is: whenever you lose a game, it is never your fault and there is a plausible external reason for it.\r\n\r\nP.S. In some cultures, this type of player is also known as Robert James Fischer\r\n\r\n4.The “can’t-handle-the-nerves” guy\r\nWe all know that one guy. He has big talent, good knowledge of openings and superb calculations skills.\r\n\r\nBut he is never able to display them in a tournament game.\r\n\r\nIt is inexplicable. He crushes everybody over the Internet. He is a complete monster in training games.\r\n\r\nBut the moment someone tells him the game will be rated “for real”, he loses his ability to play.\r\n\r\nThis type of players can be easily recognized. They are often shaking even more than “shy-beginner-guy” and often go down the “quick-drawer” path simply because they have trouble handling the stress and fathoming the possibility that they might lose.\r\n\r\n5.The “can’t-handle-the-loss” guy\r\nAlthough few chess players handle the defeat graciously, some of them go over the top and behave outright rude and badly.\r\n\r\nIn my relatively short career, I have been insulted, cursed at, called “patzer” and recommended to “give up chess”. My opponents often refuse to give me their hand after their game, or even worse – angrily slam the pieces on the board and then leave, fuming with anger.\r\n\r\nAnd that counts only over the board games. When you add all the comments I received (but also awarded, mind you) in Chesscube, Lichess and Chesscom chats, things get even worse.\r\n\r\nThere is no denying it is not easy to lose in chess. But behaving like a 5-year-old brat also should not be excusable.\r\n\r\nP.S. In some cultures, this type of player is also known as Viktor Korchnoi.*\r\n\r\n6.The nice guy\r\nFinally, allow me to conclude this answer on a more optimistic note.\r\n\r\nMore often than not, you have the chance to play against someone and enjoy it from the very start until the very end.\r\n\r\nThere aren’t any dirty moves, bitter comments, badmouthing or anything of a sort. You two meet as two chess enthusiasts, enjoy the battle and congratulate yourselves on the fighting spirit and good moves displayed.\r\n\r\nAnd if you are feeling particularly adventurous, you even analyze a game or two together and become friends.\r\n\r\nEven if the nice guy is much stronger than you, he will never look down upon you just because you are not equal in strength. He knows it is much wiser to judge people on the basis of their character, their actions and their treatment of other people than on their chess strength.\r\n\r\nAlso, a nice guy will gladly take pictures with annoying fans and even raise his thumb up after the fans awkwardly do it themselves first.\r\n\r\nP.S. In some cultures, this type of player is also known as Ian Nepomniachtchi.\r\n\r\nBe like Nepomniachtchi.', '1615826974.jpg', '1975-04-10', 4, NULL, '2021-03-15 15:49:34'),
(21, 'Chess tactics 2 | Definitions', 'Exchange Sacrifice:  \r\nA small sacrifice of material (see \"sacrifice\") to achieve something greater. The term \"exchange sacrifice\" specifically refers to the sacrifice of a rook for a minor piece (knight or bishop) and is usually only one necessary step along the way of a forcing sequence of moves.  \r\n\r\nFork / Double Attack:  \r\nA double attack is an attack or threat on two things at once. The advantage of a double attack is that it is hard to defend two things with one move. We use the term fork to describe a double attack by a single unit, usually a knight, queen, or pawn.\r\n\r\nHanging Piece:\r\n\"Hanging\" is another way of saying \"undefended\" or \"loose\" in chess. A tactic that involves simply taking or exposing undefended pieces in some way would qualify.  Under this theme, one might also consider a forcing combination that climaxes with a double attack, with one or more of the targets being undefended.\r\n\r\nInterference:\r\nTo move a piece between two other attacking pieces when at least one of those attacking pieces is an opponent\'s piece. Sometimes a piece will interfere with two attacking pieces, thus creating confusion and often overloading (see \"overloading\") those pieces.\r\n\r\nMating Net:\r\nA position where the king is trapped & will soon be checkmated. The area of the board where the king is tied down is often like a \"net\" closing tighter & tighter. A player might create a mating net by cutting off all escapes for the enemy king, often by relatively quiet, non-checking moves -- but once the net is created, a forcing sequence of moves will lead to checkmate inevitably.', '1615827080.jpg', '2021-03-13', 3, '2021-03-13 11:09:14', '2021-03-15 15:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$gG/FI8EbwioG4uibgFuII.Q87ycrf2IODV5jNBFJ6ezdiDoRNoB6O', 1, 1, NULL, '2021-03-15 17:31:43'),
(4, 'dijana', 'dijana.lazic991@gmail.com', '$2y$10$WYbx8ZtjBTrmUGBD4vM6iOWlPOfXXa6bQdgRRsD6DY35VuPtUpLPu', 1, 2, '2021-03-12 23:45:08', '2021-03-14 23:41:42'),
(5, 'korisnik', 'korisnik@gmail.com', '$2y$10$bbAfFDhzOn0ZTEoLTO1PfuetD65aRdYW223Lny2upB6P.fvYvseC2', 0, 2, '2021-03-13 22:16:44', '2021-03-15 17:31:37'),
(7, 'proba', 'proba@gmail.com', '$2y$10$xwsRT8QMovPik./ufhhWeOTUeBl4ljyMnBXqHvjUdHCkKrCfS/KEe', 0, 2, '2021-03-14 17:02:29', '2021-03-14 17:02:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
