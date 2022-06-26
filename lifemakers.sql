-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 06:45 AM
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
-- Database: `lifemakers`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `img`, `created_at`, `updated_at`) VALUES
(1, 'مؤسسة صناع الحياة مصر (LMF) هي مؤسسة أهلية وطنية غير حكومية وغير هادفة للربح أسست عام 2011 ومسجلة مركزيا برقم قيد 839 لسنة 2018 وتعمل طبقا لقانون الجمعيات والمؤسسات الأهلية المصري.', '62aa3dcb80b28.jpg', '2022-06-15 17:57:27', '2022-06-15 18:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `img`, `created_at`, `updated_at`) VALUES
(3, '5852 سقفًا\r\nجواكت وملابس شتوية لـ 8000 مستفيد\r\nمفروشات وألحفة لـ6850 أسرة', '62aafdd860da8.jpeg', '2022-06-16 07:54:32', '2022-06-16 07:54:32'),
(4, '1355 عملية جراحية وعملية عيون\r\n1908 نظارات طبية\r\n43 قافلة طبية 25 قافلة بيطرية\r\n200 جهاز تعويضي\r\nتطوير الوحدات الصحية بروافع العيساوية\r\nتجهيز قسم لعلاج الأطفال المبتسرين بمستشفي المنشأة المركزي\r\nتأمين صحي لـ 1454 مستفيدًا', '62aafdf5e4805.jpeg', '2022-06-16 07:55:01', '2022-06-16 07:55:01'),
(5, '5852 سقفًا\r\nجواكت وملابس شتوية لـ 8000 مستفيد\r\nمفروشات وألحفة لـ6850 أسرة', '62aafe2b88851.jpeg', '2022-06-16 07:55:55', '2022-06-16 07:55:55'),
(6, 'زراعة 2500 شجرة\r\nاشتراك 4500 وحدة سكنية مشتركة بمنظومة الجمع السكني\r\nزراعة وتجهيز 75 سقفًا منزليًا\r\nتطوير وتنظيف 7 بؤر قمامة وتحويلهم إلى مساحات خضراء', '62aafe49ec6ba.jpeg', '2022-06-16 07:56:25', '2022-06-16 07:56:25'),
(7, 'تعليم وتدريب 90 طالبًا المبادئ الأساسية للبرمجة\r\nتدريب 90 سيدة على مهارات الخياطة\r\nتسجيل المناهج الدراسية للطلاب المكفوفين\r\nتصميم برنامج متطور لدعم الطلاب المكفوفين نفسيًا\r\nمحو أمية مايقرب من 350 شخصًا وحصولهم على الشهادات', '62aafe6598fdb.jpeg', '2022-06-16 07:56:53', '2022-06-16 07:56:53'),
(8, '6556 وجبة غذائية\r\n3300 قارورة مياه\r\nلحوم ودواجن لـ 39000 مستفيد\r\nملابس لـ6700 مستفيد\r\nغطاء ومفروشات لـ1420 مستفيدًا\r\nبناء 140 سقفًا\r\nتوفير 15 جهازًا كهربئيًا كراتين غذائية لـ880 مستفيدا', '62aafe7d293ab.jpeg', '2022-06-16 07:57:17', '2022-06-16 07:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donate_amount` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Month` smallint(6) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `donate_amount`, `quantity`, `payment_method`, `name`, `email`, `phone`, `address`, `Month`, `created_at`, `updated_at`) VALUES
(1, '$1000', '758', 'لائتمان - بطاقة الخصم', 'محمود احمد', 'soso@gamil.com', '01157593629', '15 شارع فضل متفرع من فصيل الرئيسي', 1, '2022-06-16 10:44:39', '2022-06-16 10:44:39');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_15_164804_create_sliders_table', 2),
(6, '2022_06_15_164832_create_abouts_table', 2),
(7, '2022_06_15_165017_create_achievements_table', 2),
(8, '2022_06_15_165106_create_success_partners_table', 2),
(9, '2022_06_16_115007_create_donates_table', 3);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `created_at`, `updated_at`) VALUES
(2, '62aa255379776.png', '2022-06-15 15:44:00', '2022-06-15 16:30:43'),
(4, '62aa256cbafb8.png', '2022-06-15 15:45:33', '2022-06-15 16:31:08'),
(7, '62aa33201ce405.91410312.jpg', '2022-06-15 17:29:36', '2022-06-15 17:29:36'),
(8, '62aa33201df001.85843359.jpg', '2022-06-15 17:29:36', '2022-06-15 17:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `success_partners`
--

CREATE TABLE `success_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_partners`
--

INSERT INTO `success_partners` (`id`, `img`, `created_at`, `updated_at`) VALUES
(7, '62ab0c4273bb86.48194823.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(8, '62ab0c4274a280.18516613.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(9, '62ab0c42756f78.02742423.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(10, '62ab0c427601c7.83205073.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(11, '62ab0c42769812.13578566.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(12, '62ab0c42774983.98469709.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(13, '62ab0c4277fe60.64281225.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(14, '62ab0c4278b6d5.90724653.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(15, '62ab0c42794de7.32466412.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(16, '62ab0c4279f025.58496591.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02'),
(17, '62ab0c427a9f27.97779662.png', '2022-06-16 08:56:02', '2022-06-16 08:56:02');

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
(1, 'mahmoud ahmed', 'ma0670870@gmail.com', NULL, '$2y$10$huc3kpK.5rq.0rTYgYRmAOIyNevZiwObdo0QGH3EB2OdQP6GvyxCy', NULL, '2022-06-15 11:15:41', '2022-06-15 11:15:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_partners`
--
ALTER TABLE `success_partners`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `success_partners`
--
ALTER TABLE `success_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
