-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 07:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `description`, `category_id`, `image`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'Seeker', '1.) Inside the database, head to the migrations table and delete the entry of the migration related to the table you want to drop.', 2, 'public/blog/UEJaYu0Ql0UH5fQ24dDRv80ZmloP5eOS8aAmdKCr.png', 0, '2022-12-01 10:47:33', '2022-12-01 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'Chicken Caldo', 0, '2022-12-01 10:18:08', '2022-12-02 15:36:33'),
(2, 'Strength', 0, '2022-12-01 10:18:34', '2022-12-01 10:18:41'),
(3, 'Hai', 0, '2022-12-01 10:19:04', '2022-12-01 10:21:52'),
(4, 'Seeker edit', 0, '2022-12-01 10:22:08', '2022-12-01 10:22:18'),
(5, 'Sql', 0, '2022-12-01 10:22:24', '2022-12-01 10:22:27'),
(6, 'Compound', 0, '2022-12-01 10:23:15', '2022-12-01 10:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `diets`
--

CREATE TABLE `diets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `food_blogs`
--

CREATE TABLE `food_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_blogs`
--

INSERT INTO `food_blogs` (`id`, `title`, `description`, `food_id`, `image`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'Cake', '<p>Cakes and pies often include high-calorie foods like wheat flour, butter, cream, and sugar, which can be viewed separately in the baking ingredients calorie chart. The nutritional value of baked goods tends to be low because the main ingredients provide mostly fats and simple carbohydrates, which can immediately cause rapid fluctuations in blood sugar level and over time lead to increased body weight. However, a portion of calories in pies and cakes can also be from healthy ingredients such as eggs, which contain proteins and nutrients. Many items commonly used when baking pastries like spices and vanilla extract are used in such a small amount that the calories are negligible, but other flavorful additions like tree nuts and dried fruit can boost both nutritional value and calorie density. Packaged cakes and pies, even those labeled &ldquo;low-fat,&rdquo; can include high fructose corn syrup, artificial flavors, and artificial sweeteners. Although products marketed as healthy replacements can lower the total calories per serving, these are typically no better (if not worse) than the original recipe. Therefore, it&rsquo;s recommended not to consume pastries on a regular basis and to check nutrition facts on pre-made cake mixes and pies to ensure they fit into your diet.</p>', 2, 'public/blog/O1SJGQIi9hOA9mfiZBLIQF5bjMumY7MPt3oEN5CB.png', 0, '2022-12-03 11:17:06', '2022-12-03 11:17:06'),
(2, 'Cake test', '<p>fa</p>', 1, 'public/blog/vlbYQKvUHmzBAFJB0glCVF7Cpru0lbsC79rk0D9N.png', 0, '2022-12-03 11:17:21', '2022-12-03 11:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `food_calories`
--

CREATE TABLE `food_calories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_id` int(11) NOT NULL,
  `serving` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calories` int(11) NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`id`, `name`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'Cake', 0, '2022-12-03 11:41:22', '2022-12-03 11:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'public/gallery/RZdwkMzglZwVidmYHOCslWozoa2wlzuryRdKpxAS.jpg', 0, '2022-11-30 10:00:52', '2022-11-30 10:29:43'),
(2, 'public/gallery/uvjRl5nkYS3TXARzMhHm2wo5DC1VPlBIst2MxVHf.png', 0, '2022-11-30 10:01:06', '2022-11-30 10:01:06'),
(4, 'public/gallery/tZSdioYxUCi2enlTJPcwZjBTsvkK9YQlw9N6H1SP.jpg', 0, '2022-11-30 10:01:19', '2022-11-30 10:01:19'),
(5, 'public/gallery/jRyuDntocT45SG6nNFJT5Ou4qHnRDjz7bDWFzAGH.jpg', 0, '2022-11-30 10:01:30', '2022-11-30 10:08:11'),
(6, 'public/gallery/5bO2SJdX0wGFT9D4TXEEa48AWJUVz5wCwJQ4jrUx.jpg', 0, '2022-11-30 10:01:39', '2022-11-30 10:01:39'),
(7, 'public/gallery/dq9QAf9uIrMOuVJ8EecoutRLllu0I3jESQT0gfiQ.png', 0, '2022-11-30 10:31:45', '2022-11-30 10:31:45');

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
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2022_11_08_035823_create_abouts_table', 1),
(24, '2022_11_08_053218_create_blogs_table', 1),
(25, '2022_11_08_054231_create_diets_table', 1),
(26, '2022_11_08_054258_create_galleries_table', 1),
(32, '2022_12_01_163205_create_blog_categories_table', 2),
(33, '2022_12_01_170527_create_blogs_table', 3),
(34, '2022_11_30_093129_create_training_categories_table', 4),
(37, '2022_11_31_054337_create_trainings_table', 5),
(38, '2022_11_25_093129_create_training_categories_table', 6),
(39, '2022_11_30_054337_create_trainings_table', 6),
(40, '2022_11_09_093129_create_training_categories_table', 7),
(41, '2022_11_10_054337_create_trainings_table', 7),
(42, '2022_12_03_171246_create_food_calories_table', 8),
(44, '2022_11_30_093911_create_food_blogs_table', 9),
(45, '2022_11_29_093534_create_food_categories_table', 10);

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
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `name`, `description`, `training_id`, `video`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'test1', '<p>tset2</p>', 1, 'test', 1, '2022-12-02 14:36:06', '2022-12-02 14:56:44'),
(2, 'Chest Fly', '<p>ပါဠိစာအမှန် (၁၂) ကြောင်း နှင့် မြန်မာ စာအမှန် (၁၂) ကြောင်း၏ ဝဏ္ဏ syllable များကို ကျပန်း ရောမွှေ ပါသည်။ အဆိုပါ ကျပန်း ဝဏ္ဏ (၂) လုံး မှ (၆) လုံးအထိကိုစုစည်းပြီး ကျပန်း ပုဒ်စု phrase ကိုရရှိပါသည်။ အဆိုပါ ပုဒ်စု (၃) ခုမှ (၉) ခုကို စုစည်းပြီး ၀ါကျ sentence များကို တည်ဆောက်ပါသည်။ ရလဒ်အနေနှင့် စာအမှန်နှင့် အမြင်တွင်လွန်စွာ ဆင်တူပြီး ဖတ်ရှုရန် မလွယ်သော ၀ါကျများကို ရရှိပါသည်။</p>', 1, 'https://www.youtube.com/watch?v=r-5Tmpkjzjg', 0, '2022-12-02 14:57:14', '2022-12-02 14:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `training_categories`
--

CREATE TABLE `training_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disable` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_categories`
--

INSERT INTO `training_categories` (`id`, `name`, `disable`, `created_at`, `updated_at`) VALUES
(1, 'Chest', 0, '2022-12-02 14:35:50', '2022-12-02 14:35:50'),
(2, 'Back', 0, '2022-12-02 14:53:26', '2022-12-02 14:53:26');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diets`
--
ALTER TABLE `diets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_blogs`
--
ALTER TABLE `food_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_calories`
--
ALTER TABLE `food_calories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_training_id_foreign` (`training_id`);

--
-- Indexes for table `training_categories`
--
ALTER TABLE `training_categories`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diets`
--
ALTER TABLE `diets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_blogs`
--
ALTER TABLE `food_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_calories`
--
ALTER TABLE `food_calories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_categories`
--
ALTER TABLE `training_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `training_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
