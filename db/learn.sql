-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2025 at 01:45 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_reports`
--

CREATE TABLE `health_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'LINE User ID',
  `temp` decimal(5,2) DEFAULT NULL COMMENT 'Temperature (°C)',
  `heart_rate` int(11) DEFAULT NULL COMMENT 'Heart Rate (bpm)',
  `systolic` int(11) DEFAULT NULL COMMENT 'Systolic Blood Pressure',
  `diastolic` int(11) DEFAULT NULL COMMENT 'Diastolic Blood Pressure',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Health Status',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_reports`
--

INSERT INTO `health_reports` (`id`, `user_id`, `temp`, `heart_rate`, `systolic`, `diastolic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:09:25', '2025-01-10 05:09:25'),
(2, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:09:51', '2025-01-10 05:09:51'),
(3, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:10:13', '2025-01-10 05:10:13'),
(4, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:10:36', '2025-01-10 05:10:36'),
(5, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:10:43', '2025-01-10 05:10:43'),
(6, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:11:22', '2025-01-10 05:11:22'),
(7, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:13:49', '2025-01-10 05:13:49'),
(8, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:14:16', '2025-01-10 05:14:16'),
(9, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:14:25', '2025-01-10 05:14:25'),
(10, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:15:18', '2025-01-10 05:15:18'),
(11, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:15:25', '2025-01-10 05:15:25'),
(12, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:15:33', '2025-01-10 05:15:33'),
(13, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:15:48', '2025-01-10 05:15:48'),
(14, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:16:07', '2025-01-10 05:16:07'),
(15, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:16:15', '2025-01-10 05:16:15'),
(16, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:17:04', '2025-01-10 05:17:04'),
(17, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:19:35', '2025-01-10 05:19:35'),
(18, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:22:05', '2025-01-10 05:22:05'),
(19, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:22:44', '2025-01-10 05:22:44'),
(20, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:31:18', '2025-01-10 05:31:18'),
(21, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:31:33', '2025-01-10 05:31:33'),
(22, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:31:41', '2025-01-10 05:31:41'),
(23, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:36:17', '2025-01-10 05:36:17'),
(24, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:36:34', '2025-01-10 05:36:34'),
(25, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:36:47', '2025-01-10 05:36:47'),
(26, 'U47ccb440747cf58110dbb2d68debde94', 37.30, 80, 99, 80, 'good', '2025-01-10 05:36:52', '2025-01-10 05:36:52'),
(27, '1', 37.30, 80, 99, 80, 'good', '2025-01-10 05:38:36', '2025-01-10 05:38:36'),
(28, '1', 37.30, 80, 99, 80, 'good', '2025-01-10 06:02:26', '2025-01-10 06:02:26'),
(29, '1', 37.30, 80, 99, 80, 'good', '2025-01-10 06:02:45', '2025-01-10 06:02:45'),
(30, '1', 37.30, 80, 99, 80, 'good', '2025-01-10 06:02:59', '2025-01-10 06:02:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_10_115829_create_health_reports_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider_id`, `avatar`, `display_name`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'De\'Trin', NULL, 'U47ccb440747cf58110dbb2d68debde94', 'https://profile.line-scdn.net/0hzcfXFBZbJUxbITEvuOdaG2dkKyEsDyMEI0FqL3YgfHsiRWATZU9vLCsnK3UkFzIcMhU9K38hLn53', NULL, NULL, NULL, NULL, NULL, '2025-01-08 17:06:21', '2025-01-08 17:06:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `health_reports`
--
ALTER TABLE `health_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_reports`
--
ALTER TABLE `health_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
