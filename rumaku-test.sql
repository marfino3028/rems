-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2020 at 01:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumaku-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', '$2y$10$iEvfFKz0RS1qeV7k4K.aL.SCJNNBs8mKW7b.7AZMXbRVPe6.Xg1Ey', 1, NULL, '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(2, 'Mandor 1', 'mandor@admin.com', '$2y$10$YfQgGnLJFN3UJuo8bvdXU.fh/Iub7IE6/js7YOQcpRv8D2NzVImHe', 1, NULL, '2020-05-19 09:25:07', '2020-05-19 09:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`) VALUES
(1, 1, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rumah_id` bigint(20) UNSIGNED NOT NULL,
  `gambar_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `normal_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_deskripsi` text COLLATE utf8mb4_unicode_ci,
  `kategori_img` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori_name`, `kategori_deskripsi`, `kategori_img`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL),
(2, 'Commercial Property', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL),
(3, 'Condo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL),
(4, 'House', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL),
(5, 'Land', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL),
(6, 'Villa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.', 'https://via.placeholder.com/500', NULL, NULL);

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
(2, '2017_03_06_023521_create_admins_table', 1),
(3, '2017_03_06_053834_create_admin_role_table', 1),
(4, '2018_03_06_023523_create_roles_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_01_120121_create_permissions_table', 1),
(7, '2019_12_01_163205_create_permission_role_table', 1),
(8, '2019_12_01_163233_create_admin_permission_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2020_05_20_100339_create_kategoris_table', 3),
(11, '2020_05_20_100845_create_rumahs_table', 3),
(12, '2020_05_20_102250_create_gambars_table', 3);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'CreateAdmin', 'Admin', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(2, 'CreateRole', 'Role', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(3, 'ReadAdmin', 'Admin', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(4, 'ReadRole', 'Role', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(5, 'UpdateAdmin', 'Admin', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(6, 'UpdateRole', 'Role', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(7, 'DeleteAdmin', 'Admin', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(8, 'DeleteRole', 'Role', '2020-05-19 08:56:49', '2020-05-19 08:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(10, 3, 4, NULL, NULL);

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
(1, 'super', '2020-05-19 08:56:49', '2020-05-19 08:56:49'),
(3, 'mandor', '2020-05-19 09:24:35', '2020-05-19 09:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `rumahs`
--

CREATE TABLE `rumahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `rumah_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_lantai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_kt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_km` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_luas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_jumlahblock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_lokasi` text COLLATE utf8mb4_unicode_ci,
  `rumah_deskripsi` text COLLATE utf8mb4_unicode_ci,
  `rumah_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rumah_maps` text COLLATE utf8mb4_unicode_ci,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aksdlka', 'qwe@mail.com', NULL, '$2y$10$4WgVX2Q9/pB7MQT80LuDNuNjLHqFLJUGdWtjAWCcHBSi8HSB.2wyq', NULL, '2020-05-19 09:26:22', '2020-05-19 09:26:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permission_admin_id_permission_id_unique` (`admin_id`,`permission_id`),
  ADD KEY `admin_permission_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambars_rumah_id_foreign` (`rumah_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_name_index` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_role_role_id_permission_id_unique` (`role_id`,`permission_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `rumahs`
--
ALTER TABLE `rumahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rumahs_user_id_foreign` (`user_id`),
  ADD KEY `rumahs_kategori_id_foreign` (`kategori_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rumahs`
--
ALTER TABLE `rumahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD CONSTRAINT `admin_permission_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gambars`
--
ALTER TABLE `gambars`
  ADD CONSTRAINT `gambars_rumah_id_foreign` FOREIGN KEY (`rumah_id`) REFERENCES `rumahs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rumahs`
--
ALTER TABLE `rumahs`
  ADD CONSTRAINT `rumahs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rumahs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
