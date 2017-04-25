-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 01:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahamillet`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'kKd14euWY0OqhLwJqx0qVb2olOuE40pG', 1, '2017-04-06 07:26:38', '2017-04-06 07:26:37', '2017-04-06 07:26:38'),
(2, 2, 'Z5ew11VKzqeNJOIYlTRJjdvUVzdasL2k', 1, '2017-04-08 05:33:01', '2017-04-08 05:33:01', '2017-04-08 05:33:01'),
(3, 3, '7GvLRWZya6dFC0XLytSU820GcRXnJZs0', 1, '2017-04-08 06:04:20', '2017-04-08 06:04:19', '2017-04-08 06:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_allowed` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `discount_allowed`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Grossery & Stepals', NULL, 1, NULL, '2017-04-10 10:07:44'),
(2, 'Beverages', NULL, 1, NULL, '2017-04-08 10:52:45');

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
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(4, '2017_04_08_122131_create_categories_table', 2),
(6, '2017_04_10_104729_create_sub_categories_table', 3),
(11, '2017_04_10_154652_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(2, 1, '0quvejJYQGyxy1fWcF2s0MHxxry4FKoP', '2017-04-06 12:24:53', '2017-04-06 12:24:53'),
(4, 1, 'InWNSvKvLtj5Xia0daK5BsXc9yVd00pg', '2017-04-08 06:21:35', '2017-04-08 06:21:35'),
(6, 1, 'JjoDrtVodhuuuzgjlOCOUWKqihq3OO92', '2017-04-08 10:52:05', '2017-04-08 10:52:05'),
(7, 1, 'cQEPMBovDSrShgaubQ9E6MseR2ipBAUT', '2017-04-10 05:02:28', '2017-04-10 05:02:28'),
(8, 1, 'Olp98DQgIZnVeANp45Dn2nKf4OOOJPfx', '2017-04-10 08:08:41', '2017-04-10 08:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `cat_id` smallint(6) NOT NULL,
  `scat_id` int(11) NOT NULL,
  `package_weights` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `price`, `stock`, `cat_id`, `scat_id`, `package_weights`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Multy Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'Proso Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'Pearl Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'Finger Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '', 'Sorghum Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'Barnyard Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', 'Little Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'Foxtail Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '', 'Kodo Millet Flour', 0, 0, 1, 1, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Proso Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 'Pearl Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', 'Finger Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', 'Sorghum Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '', 'Barnyard Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '', 'Little Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '', 'Foxtail Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '', 'Kodo Millet Rice', 0, 0, 1, 2, '500 gram/ 1 Kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '', 'Proso Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '', 'Pearl Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '', 'Finger Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '', 'Sorghum Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '', 'Barnyard Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '', 'Little Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', 'Foxtail Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', 'Kodo Millet Rava', 0, 0, 1, 3, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '', 'Proso Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '', 'Pearl Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '', 'Finger Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '', 'Sorghum Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '', 'Barnyard Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '', 'Little Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '', 'Foxtail Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '', 'Kodo Millet Rava', 0, 0, 1, 4, '250 gm/500 gm/1 kg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '', 'Maha Millet Drink', 0, 0, 2, 5, '200 gram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL),
(2, 'customer', 'customer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-04-06 07:26:38', '2017-04-06 07:26:38'),
(2, 2, '2017-04-08 05:33:01', '2017-04-08 05:33:01'),
(3, 2, '2017-04-08 06:04:20', '2017-04-08 06:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` smallint(5) UNSIGNED NOT NULL,
  `discount_allowed` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `cat_id`, `discount_allowed`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Flour', 1, NULL, 1, NULL, NULL),
(2, 'Rice', 1, NULL, 1, NULL, NULL),
(3, 'Idli Rava', 1, NULL, 1, NULL, NULL),
(4, 'Upma Rava', 1, NULL, 1, NULL, NULL),
(5, 'Energy & Health Drink', 2, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@mahamillet.in', '$2y$10$KtWAqJGF9dhxUrhTJ0JMf.wCLfQMKoZBrg06k2h9kCwSKJ3ou43GW', NULL, '2017-04-10 08:08:41', 'Admin', 'MM', '2017-04-06 07:26:37', '2017-04-10 08:08:41'),
(2, 'sample@email.com', '$2y$10$KRbD.Lq0scIC3tk4XtCRjeRsi4cMdJoG2Ly2doplJLZPYfjh2HEmS', NULL, '2017-04-08 06:17:06', 'Sample', 'User', '2017-04-08 05:33:01', '2017-04-08 06:17:06'),
(3, 'sample@mm.com', '$2y$10$2Tj3wAgBXWCG0OPRhn4IJOiD.OVYdwCw6rsK.6qgEowOxPzvUCzZO', NULL, NULL, 'sample', 'user', '2017-04-08 06:04:19', '2017-04-08 06:04:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
