-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2023 at 02:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PembayaranAir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(2) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `whatsapp`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Coba 3', '6286756473845', 'd00190219bf34e2ae5399f27e233696046accda5', '2', NULL, '2023-01-23 22:04:20', '2023-01-29 00:03:42'),
(8, 'Bos 1', '6285749234823', '$2y$10$rMVMsz4V/HW3kVoFRQSNLejnYP4roWrStQYncWWZCGQrrHTQpUreS', '1', NULL, '2023-01-24 01:23:45', '2023-01-24 01:23:59'),
(9, 'David', '6285704604185', 'a7f4fbd4c2126c6ead0b398d988deb8c865c25a3', '1', NULL, '2023-01-28 23:27:19', '2023-01-28 23:51:26'),
(10, 'dads', '621241241341', 'a7f4fbd4c2126c6ead0b398d988deb8c865c25a3', '3', NULL, '2023-01-28 23:48:19', '2023-01-28 23:48:19');

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
-- Table structure for table `golongans`
--

CREATE TABLE `golongans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tarif` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `kode`, `nama`, `tarif`, `created_at`, `updated_at`) VALUES
(4, 'R1', 'Rumah Tangga 1', '1000', '2023-01-24 03:09:34', '2023-01-24 03:10:23'),
(5, 'R2', 'Rumah Tangga Dua', '1100', '2023-01-24 03:09:51', '2023-01-24 05:52:23'),
(8, 'P1', 'Pabrik 1 Satu', '5000', '2023-01-24 08:48:12', '2023-01-24 08:48:19');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_21_104425_create_pelanggans_table', 1),
(6, '2023_01_21_105242_create_golongans_table', 1),
(7, '2023_01_23_114503_create_pemakaians_table', 1),
(8, '2023_01_23_120709_create_whatsapps_table', 1),
(9, '2023_01_25_061302_create_tahuns_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `golongan` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `kode`, `nama`, `whatsapp`, `password`, `golongan`, `status`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '112233', 'David Galih', '6284753', '$2y$10$UZjKcUc2HkMGi9.GTq4PNe36E.WyqtfYnGft2FFKAVzNqm.ecGbS6', 5, 1, 'jalan jalan mana saja ok', NULL, '2023-01-24 08:34:07', '2023-01-25 21:15:14'),
(5, '123451', 'PT DIkomo', '6285704724283', '$2y$10$yIe2wR3tTW/uW3iziJynuueEmW2ZgodPSyl.Offo9oG9lCG1s281e', 8, 0, '1Jalan indonesia', NULL, '2023-01-24 19:41:11', '2023-01-27 02:05:59'),
(6, '11223344', 'Perusahaan Dikomo', '6285746243753', '$2y$10$2.TnfRvHHN1SjzyUmxPeHuGI3l7V7vhzmBoxEELpN2dEdBmG6kMru', 8, 1, 'Jalanin aja dulu', NULL, '2023-01-28 04:54:09', '2023-01-28 04:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaians`
--

CREATE TABLE `pemakaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodeTagihan` varchar(255) NOT NULL,
  `bulan` varchar(3) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `pemakaianBlnIni` varchar(10) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_pelanggan` bigint(20) NOT NULL,
  `id_admin` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemakaians`
--

INSERT INTO `pemakaians` (`id`, `kodeTagihan`, `bulan`, `tahun`, `pemakaianBlnIni`, `metode`, `status`, `id_pelanggan`, `id_admin`, `created_at`, `updated_at`) VALUES
(2, '23122022-14:35-1', '12', '2022', '70', 'Tunai', '1', 1, 6, NULL, '2023-01-25 03:33:14'),
(6, '123143', '01', '2023', '120', 'BCA', '1', 1, 6, NULL, '2023-01-28 05:15:56'),
(19, '280123-122437-6', '01', '2023', '10', '0', '0', 6, 6, '2023-01-28 05:24:37', '2023-01-28 05:24:37'),
(20, '280123-122455-6', '02', '2023', '25', 'Tunai', '1', 6, 6, '2023-01-28 05:24:55', '2023-01-28 05:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahuns`
--

CREATE TABLE `tahuns` (
  `tahun` varchar(5) NOT NULL,
  `status` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahuns`
--

INSERT INTO `tahuns` (`tahun`, `status`, `created_at`, `updated_at`) VALUES
('2021', '0', '2023-01-25 23:21:01', '2023-01-26 05:27:22'),
('2022', '1', NULL, '2023-01-26 00:42:51'),
('2023', '1', '2023-01-25 07:03:11', '2023-01-25 07:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapps`
--

CREATE TABLE `whatsapps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isActive` varchar(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_whatsapp_unique` (`whatsapp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `golongans`
--
ALTER TABLE `golongans`
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
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelanggans_whatsapp_unique` (`whatsapp`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `golongan` (`golongan`);

--
-- Indexes for table `pemakaians`
--
ALTER TABLE `pemakaians`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemakaians_kodetagihan_unique` (`kodeTagihan`),
  ADD KEY `tahun` (`tahun`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahuns`
--
ALTER TABLE `tahuns`
  ADD PRIMARY KEY (`tahun`);

--
-- Indexes for table `whatsapps`
--
ALTER TABLE `whatsapps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whatsapps_whatsapp_unique` (`whatsapp`),
  ADD UNIQUE KEY `whatsapps_nama_unique` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongans`
--
ALTER TABLE `golongans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemakaians`
--
ALTER TABLE `pemakaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatsapps`
--
ALTER TABLE `whatsapps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD CONSTRAINT `pelanggans_ibfk_1` FOREIGN KEY (`golongan`) REFERENCES `golongans` (`id`);

--
-- Constraints for table `pemakaians`
--
ALTER TABLE `pemakaians`
  ADD CONSTRAINT `pemakaians_ibfk_1` FOREIGN KEY (`tahun`) REFERENCES `tahuns` (`tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
