-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 05:49 AM
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
-- Database: `livewire_app`
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', NULL, NULL),
(2, 'Clothing', NULL, NULL),
(3, 'Books', NULL, NULL),
(4, 'Furniture', NULL, NULL),
(5, 'Sports Equipment', NULL, NULL),
(6, 'Gadgets', NULL, NULL),
(7, 'Fitness Gear', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 14, NULL, NULL),
(2, 2, 14, NULL, NULL),
(3, 3, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahmedabad', NULL, NULL),
(2, 1, 'Surat', NULL, NULL),
(3, 1, 'Rajkot', NULL, NULL),
(4, 2, 'Mumbai', NULL, NULL),
(5, 3, 'Miami', NULL, NULL),
(6, 4, 'Cordova', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'India', NULL, NULL),
(2, 'United States', NULL, NULL);

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `filepath`, `created_at`, `updated_at`) VALUES
(3, 'Test', 'photos/hYZ5VfwzANpCWPEcLtP5d9IdaQ7tBClOmZgNSN4g.jpg', '2025-03-17 03:11:58', '2025-03-17 03:11:58'),
(4, 'Test', 'photos/UAi4MQ4gGZTyfxigNV8Zo75xLpcZArhtqmLe64Uf.jpg', '2025-03-17 03:28:16', '2025-03-17 03:28:16');

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
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_16_084202_create_products_table', 2),
(5, '2025_03_16_093710_create_images_table', 3),
(6, '2025_03_27_071447_create_categories_table', 4),
(7, '2025_04_02_062514_create_posts_table', 5),
(8, '2025_04_03_104542_create_category_product_table', 6),
(9, '2025_04_03_150647_create_countries_table', 7),
(10, '2025_04_03_151028_create_states_table', 8),
(11, '2025_04_03_151704_create_cities_table', 9),
(12, '2025_04_06_035226_create_test_products_table', 10);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(3, 'Vel quasi asperiores', 'At quia tempora inci', '2025-04-02 20:46:27', '2025-04-02 20:46:27'),
(4, 'Natus delectus aspe', 'Facilis quas eiusmod', '2025-04-02 20:46:35', '2025-04-02 20:46:35'),
(5, 'Corporis culpa quo n', 'Saepe eveniet est q', '2025-04-02 20:46:46', '2025-04-02 20:46:46'),
(6, 'Explicabo Reiciendi', 'Consectetur amet ul', '2025-04-02 20:46:55', '2025-04-02 20:46:55'),
(7, 'Delectus corporis o', 'Voluptas non fugiat', '2025-04-02 20:47:06', '2025-04-02 20:47:06'),
(8, 'Commodi eveniet lab', 'Consequatur qui off', '2025-04-02 20:47:19', '2025-04-02 20:47:19'),
(9, 'Quis iste in veritat', 'Consequatur digniss', '2025-04-02 23:31:46', '2025-04-02 23:31:46'),
(10, 'Eum quis id blandit', 'Culpa aut exercitati', '2025-04-02 23:45:38', '2025-04-02 23:45:38'),
(11, 'Dolor saepe autem la', 'Velit blanditiis qui', '2025-04-02 23:49:14', '2025-04-02 23:49:14'),
(12, 'qwer edit', 'tyui edit', '2025-04-02 23:52:04', '2025-04-03 00:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `status` varchar(255) NOT NULL DEFAULT 'On Sale',
  `publish_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `detail`, `category_id`, `status`, `publish_date`, `created_at`, `updated_at`) VALUES
(2, 'Fritz Chase', '706', 'Asperiores dolores t', 1, 'Out Of Stock', NULL, '2025-03-26 08:07:50', '2025-03-26 08:07:50'),
(3, 'Patrick Preston', '281', 'Minim placeat ipsum', 2, 'Available', NULL, '2025-03-26 09:26:14', '2025-03-26 09:26:14'),
(4, 'Quamar Knapp', '967', 'Reprehenderit in ir', 3, 'On Sale', NULL, '2025-03-26 09:32:40', '2025-03-26 09:32:40'),
(5, 'Malachi Kidd', '359', 'Dolor nisi facere il', 4, 'Out Of Stock', NULL, '2025-03-27 21:12:54', '2025-03-27 21:12:54'),
(6, 'Talon Nielsen', '17', 'Sint quasi molestiae', 5, 'Available', NULL, '2025-03-27 23:32:47', '2025-03-27 23:32:47'),
(7, 'Echo Whitfield', '931', 'Sit dolor perferendi', 6, 'On Sale', NULL, '2025-03-28 02:04:34', '2025-03-28 02:04:34'),
(8, 'Ivy Summers', '572', 'Odit velit eos rer', 7, 'Available', '2025-04-02', '2025-04-01 00:01:47', '2025-04-01 00:01:47'),
(9, 'Judah Stevens', '416', 'Elit sed qui esse t', 1, 'On Sale', '2025-04-03', '2025-04-01 00:05:23', '2025-04-01 00:05:23'),
(10, 'Nehru Heath', '224', 'Minim modi natus ips', 2, 'Out Of Stock', '2025-04-04', '2025-04-03 03:00:22', '2025-04-03 03:00:22'),
(11, 'Sierra Russell', '813', 'Quia id veritatis si', 3, 'On Sale', '2025-04-05', '2025-04-03 03:06:56', '2025-04-03 03:06:56'),
(12, 'Isabelle Barron', '266', 'In aut assumenda off', 7, 'On Sale', '2025-04-06', '2025-04-03 03:13:04', '2025-04-03 03:13:04'),
(14, 'Florence Daniel', '288', 'Pariatur Eu expedit', 1, 'On Sale', '2025-04-01', '2025-04-03 05:44:12', '2025-04-03 05:44:12');

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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('L4Q4UKSmwc5ihLRxLNDP6n0fNaFhlsewvEPNdP3l', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGFVTmNRME9mTW5aUEV0aFhia0cyNHVEeGR4Q3ZqNHNRUUdnNVJ3NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc0MzY0Njk0NDt9fQ==', 1743699624),
('UwuXrZUsp7gPfeGFe8vzcA4VktFX2ZG7ilwX432G', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTXVIUDJjNUpJd3RLenRETVVibGlLWmF3QTJkcXRhQlVncE5EWVRxeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743911319);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gujarat', NULL, NULL),
(2, 1, 'Maharastra', NULL, NULL),
(3, 2, 'Florida', NULL, NULL),
(4, 2, 'Alaska', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_products`
--

CREATE TABLE `test_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sylvia Best', 'motepityz@mailinator.com', NULL, '$2y$12$n0d5OXsXiV43oVqBjnOm4e3ZE5lpw1c/HFYE2QabS6fPBgfc1v29a', '1qaUFExeWYGK6gdXqEjQQINRgVs1qcv9GNDk9t0QUhnU62bNlat6xpZEqenu', '2025-03-14 01:44:34', '2025-03-14 01:44:34'),
(2, 'Driscoll Grimes', 'gudewu@mailinator.com', NULL, '$2y$12$mw.YW2qSbbv.iNUOc.B/wOgaSZs3s92NHraYoslbTV1PK1jNCraMO', 'sN9Qwesg3ETvEkOGr5iImGSDI9eTAYWrLrIlMgbDJI9Pzwmcc415qa7oaryW', '2025-03-26 06:14:01', '2025-03-26 06:14:01'),
(3, 'Prof. Freda Smitham', 'wilbert.lowe@example.org', '2025-03-26 06:33:42', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'oyRC1xfQSm', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(4, 'Mr. Murray Lubowitz PhD', 'ward64@example.net', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'YH0XCpwtF4', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(6, 'Art Ward', 'erin.rohan@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'nVZ7Ccr8eM', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(7, 'Oleta Ullrich', 'bgreen@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'inVxJPeCPV', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(8, 'Carmelo Champlin DDS', 'marcelina.marvin@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'UGUJr3hanv', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(9, 'Mrs. Letitia Schulist PhD', 'nikolaus.thelma@example.com', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', '8bXxpyU6yh', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(10, 'Hudson McClure', 'rowe.christelle@example.net', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'GKdNO5qnlS', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(11, 'Ms. Mona Crooks', 'bosco.sydni@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'QUysXyHZgz', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(12, 'Cathrine Kirlin IV', 'moore.elenora@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'WMCwcdfgyW', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(13, 'Raul Steuber', 'nhauck@example.net', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'XUgMJBT6MV', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(14, 'Dr. Gail Kassulke', 'zelma91@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'hpUPVUcTSa', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(16, 'Lucius Rempel', 'khauck@example.com', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'SRioWvX5Nq', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(17, 'Ms. Ally Anderson', 'tessie.pacocha@example.net', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'KMsJJKcjQR', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(18, 'Dr. Davonte Reinger', 'melany.mcclure@example.org', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'VYW15E0n71', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(19, 'Theron Ziemann', 'joe.ullrich@example.com', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'JjwCzWfhod', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(20, 'Madie Torp', 'nhammes@example.com', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'VlSGTf1NHt', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(21, 'Benedict Ankunding', 'heller.greg@example.com', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'PrVt0H7xep', '2025-03-26 06:33:43', '2025-03-26 06:33:43'),
(22, 'Jabari Hirthe', 'kub.maryam@example.net', '2025-03-26 06:33:43', '$2y$12$wyS984ruORRSApMvhHR1Q.KXyOwGrp2iq9uuxj7E33x/g1Qvl.DVK', 'HioKoPC1Cc', '2025-03-26 06:33:43', '2025-03-26 06:33:43');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_products`
--
ALTER TABLE `test_products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `test_products`
--
ALTER TABLE `test_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
