-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 01:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `circle_of_influence`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `influencer_id` bigint(20) UNSIGNED NOT NULL,
  `influencer_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selection_id` bigint(20) UNSIGNED NOT NULL,
  `influencer_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`id`, `user_id`, `type_id`, `tenant_id`, `influencer_id`, `influencer_note`, `selection_id`, `influencer_no`, `created_at`, `updated_at`) VALUES
(3, 4, 1, 1, 3, 'asd', 8, 1, NULL, NULL),
(4, 4, 2, 1, 3, 'adsa', 8, 2, NULL, NULL),
(5, 4, 1, 1, 2, 'asdas', 9, 1, NULL, NULL),
(6, 4, 2, 1, 3, 'adasd', 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `influencer_types`
--

CREATE TABLE `influencer_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `influencer_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `influencer_types`
--

INSERT INTO `influencer_types` (`id`, `influencer_type`, `type_status`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 1, '2022-01-30 04:41:11', '2022-01-30 04:41:11'),
(2, 'Professional', 1, '2022-01-30 04:41:16', '2022-01-30 04:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2022_01_21_210031_create_user_influencers_table', 1),
(8, '2022_01_25_175706_create_influencer_selections_table', 1),
(21, '2014_10_12_000000_create_users_table', 2),
(22, '2014_10_12_100000_create_password_resets_table', 2),
(23, '2019_08_19_000000_create_failed_jobs_table', 2),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(25, '2022_01_18_120814_create_tenants_table', 2),
(26, '2022_01_19_122026_create_influencer_types_table', 2),
(27, '2022_01_26_201131_create_selections_table', 2),
(28, '2022_01_26_201218_create_influencers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `selections`
--

CREATE TABLE `selections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `selections`
--

INSERT INTO `selections` (`id`, `activity_name`, `created_at`, `updated_at`) VALUES
(1, '20220130.104312.narutouzumaki', '2022-01-30 04:43:12', '2022-01-30 04:43:12'),
(2, '20220130.104515.narutouzumaki', '2022-01-30 04:45:15', '2022-01-30 04:45:15'),
(3, '20220130.104539.narutouzumaki', '2022-01-30 04:45:39', '2022-01-30 04:45:39'),
(4, '20220130.104707.narutouzumaki', '2022-01-30 04:47:07', '2022-01-30 04:47:07'),
(5, '20220130.104723.narutouzumaki', '2022-01-30 04:47:23', '2022-01-30 04:47:23'),
(6, '20220130.104734.narutouzumaki', '2022-01-30 04:47:34', '2022-01-30 04:47:34'),
(7, '20220130.105603.narutouzumaki', '2022-01-30 04:56:03', '2022-01-30 04:56:03'),
(8, '20220130.121938.narutouzumaki', '2022-01-30 06:19:38', '2022-01-30 06:19:38'),
(9, '20220130.122028.narutouzumaki', '2022-01-30 06:20:28', '2022-01-30 06:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenant_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenant_status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_tenant_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tenant_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `tenant_name`, `tenant_desc`, `tenant_status`, `meta_tenant_title`, `meta_tenant_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Default', 'Default', 1, 'Default', 'Default', '2022-01-30 04:39:27', '2022-01-30 04:39:27'),
(2, 'Asia', 'Asia', 1, 'Asia', 'Asia', '2022-01-30 04:40:54', '2022-01-30 04:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `tenant_id` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `mobile`, `address`, `email_verified_at`, `password`, `role_as`, `tenant_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', '123456789', 'Romania', '2022-01-30 04:31:41', '$2y$10$88bms1lwaSSGKXHUAc7eGOwqpVkkQ7FGpNkl5PhpN441lDSRbuGNW', 1, 1, NULL, '2022-01-30 04:30:00', '2022-01-30 04:30:00'),
(2, 'nahid', 'hasan', 'nahidhasan', 'nahid@codu.site', '12345678', 'Bangladesh', '2022-01-30 04:31:41', '$2y$10$22TAHTzgIS5wD6BWY3oE5unNMlmbxF4RQs4u4T5cX2VjDvf.yy4zO', 0, 1, NULL, '2022-01-30 04:31:31', '2022-01-30 04:31:41'),
(3, 'son', 'goku', 'songoku', 'songoku@codu.site', '12345678', 'USA', '2022-01-30 04:32:49', '$2y$10$Mh3b5ioIgWxqhuS1g89okOYOVJRi8/gcAmCAcu6kyGIkr8gXINVrG', 0, 1, NULL, '2022-01-30 04:32:39', '2022-01-30 04:32:49'),
(4, 'naruto', 'uzumaki', 'narutouzumaki', 'naruto@codu.site', '12345678', 'Leaf Village', '2022-01-30 04:34:53', '$2y$10$fmC0grs6Hiu.tdJeQDLxie5hNUaqKLy.hcfQSxxoWSk7fKXjs84Q.', 0, 1, NULL, '2022-01-30 04:34:44', '2022-01-30 04:34:53');

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
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `influencers_user_id_foreign` (`user_id`),
  ADD KEY `influencers_type_id_foreign` (`type_id`),
  ADD KEY `influencers_tenant_id_foreign` (`tenant_id`),
  ADD KEY `influencers_influencer_id_foreign` (`influencer_id`),
  ADD KEY `influencers_selection_id_foreign` (`selection_id`);

--
-- Indexes for table `influencer_types`
--
ALTER TABLE `influencer_types`
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
-- Indexes for table `selections`
--
ALTER TABLE `selections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `influencer_types`
--
ALTER TABLE `influencer_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selections`
--
ALTER TABLE `selections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `influencers`
--
ALTER TABLE `influencers`
  ADD CONSTRAINT `influencers_influencer_id_foreign` FOREIGN KEY (`influencer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `influencers_selection_id_foreign` FOREIGN KEY (`selection_id`) REFERENCES `selections` (`id`),
  ADD CONSTRAINT `influencers_tenant_id_foreign` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`),
  ADD CONSTRAINT `influencers_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `influencer_types` (`id`),
  ADD CONSTRAINT `influencers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
