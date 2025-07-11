-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 06:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myra_skincare`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('akash@gmail.com|127.0.0.1', 'i:1;', 1752130333),
('akash@gmail.com|127.0.0.1:timer', 'i:1752130333;', 1752130333);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men', '2025-07-05 10:31:54', '2025-07-05 10:31:54'),
(2, 'Women', '2025-07-05 10:31:54', '2025-07-05 10:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mid_categories`
--

CREATE TABLE `mid_categories` (
  `id` int(11) NOT NULL,
  `top_category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mid_categories`
--

INSERT INTO `mid_categories` (`id`, `top_category_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Unwanted Hair', '1751955720_686cb90864918.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(2, 1, 'Hair Fall', '1751956782_686cbd2e5f521.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(3, 1, 'Stubborn Fat', '1751956825_686cbd591de90.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(4, 1, 'Dull Skin', 'dull_skin.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(5, 1, 'Acne', '1751960446_686ccb7ef144e.png', '2025-07-08 07:13:17', '2025-07-08 02:10:46'),
(6, 1, 'Anti-Aging', '1751960442_686ccb7a157ae.png', '2025-07-08 07:13:17', '2025-07-08 02:10:42'),
(7, 1, 'Tanning', '1751960433_686ccb714ec8c.png', '2025-07-08 07:13:17', '2025-07-08 02:10:33'),
(8, 1, 'Oily Skin', '1751960436_686ccb74aeaca.png', '2025-07-08 07:13:17', '2025-07-08 02:10:36'),
(9, 1, 'Double Chin', 'double_chin.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(10, 1, 'Pigmentation', 'pigmentation.png', '2025-07-08 07:13:17', '2025-07-08 07:13:17'),
(11, 1, 'Scars', '1751960929_686ccd61622b7.webp', '2025-07-08 07:13:17', '2025-07-08 02:18:49'),
(12, 1, 'Dark Circles', '1751960713_686ccc896abc9.webp', '2025-07-08 07:13:17', '2025-07-08 02:15:13'),
(13, 1, 'Dark Underarms', '1751960765_686cccbd7a7c4.webp', '2025-07-08 07:13:17', '2025-07-08 02:16:05'),
(14, 2, 'Hair Reduction', '1751961209_686cce795dab6.jpg', '2025-07-08 07:13:17', '2025-07-08 02:23:29'),
(15, 2, 'Body Slimming', '1751961218_686cce822b9b7.jpg', '2025-07-08 07:13:17', '2025-07-08 02:23:38'),
(16, 2, 'Laser Facials', '1751961234_686cce9268efb.jpg', '2025-07-08 07:13:17', '2025-07-08 02:23:54'),
(17, 3, 'Unwanted Hair', '1751959920_686cc970eded2.png', '2025-07-08 07:15:23', '2025-07-08 02:02:00'),
(18, 3, 'Hair Fall', '1751960140_686cca4c700f8.png', '2025-07-08 07:15:23', '2025-07-08 02:05:40'),
(19, 3, 'Stubborn Fat', '1751960120_686cca38bd3c3.png', '2025-07-08 07:15:23', '2025-07-08 02:05:20'),
(20, 3, 'Dull Skin', 'dull_skin.png', '2025-07-08 07:15:23', '2025-07-08 07:15:23'),
(21, 3, 'Acne', 'acne.png', '2025-07-08 07:15:23', '2025-07-08 07:15:23'),
(22, 3, 'Anti-Aging', '1751960102_686cca262fb1a.png', '2025-07-08 07:15:23', '2025-07-08 02:05:02'),
(23, 3, 'Tanning', '1751960104_686cca28d1ec2.png', '2025-07-08 07:15:23', '2025-07-08 02:05:04'),
(24, 3, 'Oily Skin', 'oily_skin.png', '2025-07-08 07:15:23', '2025-07-08 07:15:23'),
(25, 3, 'Double Chin', 'double_chin.png', '2025-07-08 07:15:23', '2025-07-08 07:15:23'),
(26, 3, 'Pigmentation', 'pigmentation.png', '2025-07-08 07:15:23', '2025-07-08 07:15:23'),
(27, 3, 'Scars', '1751959986_686cc9b22af5f.png', '2025-07-08 07:15:23', '2025-07-08 02:03:06'),
(28, 3, 'Dark Circles', '1751959989_686cc9b5da32e.png', '2025-07-08 07:15:23', '2025-07-08 02:03:09'),
(29, 3, 'Dark Underarms', '1751960020_686cc9d4eb7ca.png', '2025-07-08 07:15:23', '2025-07-08 02:03:40'),
(30, 4, 'Hair Reduction', '1751960016_686cc9d091ec0.webp', '2025-07-08 07:15:23', '2025-07-08 02:03:36'),
(31, 4, 'Body Slimming', '1751959005_686cc5dda954f.webp', '2025-07-08 07:15:23', '2025-07-08 01:46:45'),
(32, 4, 'Laser Facials', '1751959998_686cc9beddbff.webp', '2025-07-08 07:15:23', '2025-07-08 02:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `mid_category_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `highlight_points` text DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `how_it_works` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`how_it_works`)),
  `faqs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `action` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `mid_category_id`, `name`, `image`, `video`, `rating`, `price`, `duration`, `highlight_points`, `overview`, `how_it_works`, `faqs`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'Full Body Laser Hair Reduction', 'dSdzlNWiUOCliRlKowhCMMwg0jq4oPlpWoGqOOei.jpg', NULL, 4.1, 7080.00, '180', '80-90% reduction in hair growth over 6+ sessions\r\nUS FDA-approved, painless, and safe technology', 'Unwanted hair is bothersome and tedious to remove\r\nFrequent shaving or waxing can lead to ingrown hair, pigmentation, and other skin issues\r\nFortunately, we provide permanent solutions to address all your hair removal concerns\r\nThis treatment covers the entire body except for sensitive parts like ears, eyebrows, and inner butt-line hair for safety reasons.\r\n\r\nAftercare Tips\r\nRedness & Bumps are normal, these may last up to 2 hours or longer. If sensitivity persists use a cold compress\r\nAvoid soap and face wash. The treated area must be washed gently with cold or lukewarm water, pat skin dry instead of rubbing for the first 48 hours\r\nAvoid makeup & lotion, moisturizer, or deodorant for the initial 24 hours\r\nDead hair will start shedding 2-30 days after your treatment. Within this timeframe, you may notice stubble as dead hair is shed from the follicles\r\nUse sunscreen with SPF 25 or higher throughout the treatment period & for 1-2 months afterward to protect skin from harsh UV rays\r\nAvoid sweating activities such as sauna baths, workouts, swimming for up to 48 hours post treatment', '[{\"title\":\"shbdic hdojc0iwjd0\",\"image\":\"EM87nsBqzc8JHeEeryrAcswXtOdT14tXTYYBbtAA.webp\"},{\"title\":\"hbsidb ckjaso\",\"image\":\"F0Svo1su6l8AOAkvq7BJj41qnoT4Pp9vf6MQ3iyz.png\"}]', '[]', 'active', '2025-07-05 06:08:02', '2025-07-10 05:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `top_categories`
--

CREATE TABLE `top_categories` (
  `id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `top_categories`
--

INSERT INTO `top_categories` (`id`, `gender_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'SKIN CONCERN', '2025-07-05 10:32:56', '2025-07-05 10:32:56'),
(2, 1, 'TREATMENTS', '2025-07-05 10:32:56', '2025-07-05 10:32:56'),
(3, 2, 'SKIN CONCERN', '2025-07-05 10:32:56', '2025-07-08 06:50:05'),
(4, 2, 'TREATMENTS', '2025-07-05 10:32:56', '2025-07-08 06:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` enum('admin','customer') DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'test', 'test@gmail.com', NULL, '$2y$12$W1twci91jx2l9IPWaJ92POPWuCEXMvMaPoYavEgmMxKrrHnuA2x86', NULL, '2025-07-01 00:47:37', '2025-07-01 00:47:37', 'admin'),
(2, 'Akash', 'akash@gmail.com', NULL, '$2y$12$Qt9RL7FahBIJiXVCAD1k5uaYegpEcZMlViH6g2nBM5bRzyMSecI9W', NULL, '2025-07-10 01:34:05', '2025-07-10 01:34:05', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_categories`
--
ALTER TABLE `mid_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `top_category_id` (`top_category_id`,`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mid_category_id` (`mid_category_id`,`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `top_categories`
--
ALTER TABLE `top_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gender_id` (`gender_id`,`name`);

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
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mid_categories`
--
ALTER TABLE `mid_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `top_categories`
--
ALTER TABLE `top_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mid_categories`
--
ALTER TABLE `mid_categories`
  ADD CONSTRAINT `mid_categories_ibfk_1` FOREIGN KEY (`top_category_id`) REFERENCES `top_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`mid_category_id`) REFERENCES `mid_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `top_categories`
--
ALTER TABLE `top_categories`
  ADD CONSTRAINT `top_categories_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
