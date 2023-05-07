-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 09:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
use mysite;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

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
(5, '2022_06_15_154403_create_movies_table', 1),
(6, '2022_06_24_140025_create_series_table', 1),
(7, '2022_06_27_213847_create_serie_seasons_table', 1),
(8, '2022_06_27_232246_create_serie_episodes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `story` longtext DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `trending` tinyint(4) DEFAULT NULL,
  `action` tinyint(4) DEFAULT NULL,
  `fantasy` tinyint(4) DEFAULT NULL,
  `comedy` tinyint(4) DEFAULT NULL,
  `romance` tinyint(4) DEFAULT NULL,
  `drama` tinyint(4) DEFAULT NULL,
  `mystery` tinyint(4) DEFAULT NULL,
  `adventure` tinyint(4) DEFAULT NULL,
  `hd` tinyint(4) DEFAULT NULL,
  `fhd` tinyint(4) DEFAULT NULL,
  `dvd` tinyint(4) DEFAULT NULL,
  `s` tinyint(4) DEFAULT NULL,
  `e` tinyint(4) DEFAULT NULL,
  `t` tinyint(4) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL,
  `release_year` varchar(255) DEFAULT NULL,
  `running_time` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `server_link_mega` varchar(255) DEFAULT NULL,
  `server_link_drive` varchar(255) DEFAULT NULL,
  `server_link_ok` varchar(255) DEFAULT NULL,
  `server_link_mp4upload` varchar(255) DEFAULT NULL,
  `server_link_4shared` varchar(255) DEFAULT NULL,
  `server_link_uptobox` varchar(255) DEFAULT NULL,
  `server_link_vidshare` varchar(255) DEFAULT NULL,
  `down_link_mega` varchar(255) DEFAULT NULL,
  `down_link_drive` varchar(255) DEFAULT NULL,
  `down_link_ok` varchar(255) DEFAULT NULL,
  `down_link_mp4upload` varchar(255) DEFAULT NULL,
  `down_link_4shared` varchar(255) DEFAULT NULL,
  `down_link_uptobox` varchar(255) DEFAULT NULL,
  `down_link_vidshare` varchar(255) DEFAULT NULL,
  `meta_keywords` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `slug`, `story`, `poster`, `trending`, `action`, `fantasy`, `comedy`, `romance`, `drama`, `mystery`, `adventure`, `hd`, `fhd`, `dvd`, `s`, `e`, `t`, `imdb`, `release_year`, `running_time`, `country`, `server_link_mega`, `server_link_drive`, `server_link_ok`, `server_link_mp4upload`, `server_link_4shared`, `server_link_uptobox`, `server_link_vidshare`, `down_link_mega`, `down_link_drive`, `down_link_ok`, `down_link_mp4upload`, `down_link_4shared`, `down_link_uptobox`, `down_link_vidshare`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'The Fast and the Furious', 'The-Fast-and-the-Furious', 'Los Angeles police officer Brian O\'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.', '1683397503.jpg', 1, 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 1, 0, '6.8', '2001', '106', 'USA', NULL, NULL, NULL, NULL, NULL, NULL, 'https://gvadz.click/embed-mnqxmgjol0nc.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 17:25:03', '2023-05-06 17:25:03'),
(2, 'Fast & Furious Presents: Hobbs & Shaw', 'Fast-&-Furious-Presents:-Hobbs-&-Shaw', 'Lawman Luke Hobbs and outcast Deckard Shaw form an unlikely alliance when a cyber-genetically enhanced villain threatens the future of humanity.', '1683400801.jpg', 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 1, 0, '6.5', '2019', '137', 'USA', NULL, NULL, 'https://gvadz.click/embed-qn3lksskv7rz.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:20:01', '2023-05-06 18:20:01'),
(3, 'Interstellar', 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', '1683402464.jpg', 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, '8.6', '2014', '166', 'USA', 'https://gvadz.click/embed-hzyh1yhciv2a.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:47:44', '2023-05-06 18:47:44'),
(4, 'The Revenant', 'The-Revenant', 'A frontiersman on a fur trading expedition in the 1820s fights for survival after being mauled by a bear and left for dead by members of his own hunting team.', '1683402547.jpg', 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, '8.0', '2015', '156', 'USA', 'https://gvadz.click/embed-xv1df76jb3f3.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:49:07', '2023-05-06 18:49:07');

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
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `story` longtext DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `trending` tinyint(4) DEFAULT NULL,
  `action` tinyint(4) DEFAULT NULL,
  `fantasy` tinyint(4) DEFAULT NULL,
  `comedy` tinyint(4) DEFAULT NULL,
  `romance` tinyint(4) DEFAULT NULL,
  `drama` tinyint(4) DEFAULT NULL,
  `mystery` tinyint(4) DEFAULT NULL,
  `adventure` tinyint(4) DEFAULT NULL,
  `hd` tinyint(4) DEFAULT NULL,
  `fhd` tinyint(4) DEFAULT NULL,
  `dvd` tinyint(4) DEFAULT NULL,
  `s` tinyint(4) DEFAULT NULL,
  `e` tinyint(4) DEFAULT NULL,
  `t` tinyint(4) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL,
  `release_year` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `meta_keywords` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `slug`, `story`, `poster`, `trending`, `action`, `fantasy`, `comedy`, `romance`, `drama`, `mystery`, `adventure`, `hd`, `fhd`, `dvd`, `s`, `e`, `t`, `imdb`, `release_year`, `country`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'The Blacklist', 'The-Blacklist', 'A new FBI profiler, Elizabeth Keen, has her entire life uprooted when a mysterious criminal, Raymond Reddington, who has eluded capture for decades, turns himself in and insists on speaking only to her.', '1683401762.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, '8.0', '2013', 'USA', NULL, '2023-05-06 18:36:02', '2023-05-06 18:36:02'),
(2, 'The 100', 'The-100', 'Set 97 years after a nuclear war destroyed civilization, when a spaceship housing humanity\'s lone survivors sends 100 juvenile delinquents back to Earth, hoping to repopulate the planet.', '1683401823.jpg', 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, '7.6', '2014', 'USA', NULL, '2023-05-06 18:37:03', '2023-05-06 18:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `serie_episodes`
--

CREATE TABLE `serie_episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `season_id` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `server_link_mega` varchar(255) DEFAULT NULL,
  `server_link_drive` varchar(255) DEFAULT NULL,
  `server_link_ok` varchar(255) DEFAULT NULL,
  `server_link_mp4upload` varchar(255) DEFAULT NULL,
  `server_link_4shared` varchar(255) DEFAULT NULL,
  `server_link_uptobox` varchar(255) DEFAULT NULL,
  `server_link_vidshare` varchar(255) DEFAULT NULL,
  `down_link_mega` varchar(255) DEFAULT NULL,
  `down_link_drive` varchar(255) DEFAULT NULL,
  `down_link_ok` varchar(255) DEFAULT NULL,
  `down_link_mp4upload` varchar(255) DEFAULT NULL,
  `down_link_4shared` varchar(255) DEFAULT NULL,
  `down_link_uptobox` varchar(255) DEFAULT NULL,
  `down_link_vidshare` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serie_episodes`
--

INSERT INTO `serie_episodes` (`id`, `season_id`, `number`, `server_link_mega`, `server_link_drive`, `server_link_ok`, `server_link_mp4upload`, `server_link_4shared`, `server_link_uptobox`, `server_link_vidshare`, `down_link_mega`, `down_link_drive`, `down_link_ok`, `down_link_mp4upload`, `down_link_4shared`, `down_link_uptobox`, `down_link_vidshare`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'https://vegaasvid.site/play/09745600', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:39:03', '2023-05-06 18:39:03'),
(2, '2', '1', 'https://govad.xyz/embed-olr02vkp144h.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:41:10', '2023-05-06 18:43:35'),
(3, '3', '1', 'https://gvadz.click/embed-b54m3xvpopd4.html', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-06 18:44:46', '2023-05-06 18:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `serie_seasons`
--

CREATE TABLE `serie_seasons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serie_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `story` longtext DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serie_seasons`
--

INSERT INTO `serie_seasons` (`id`, `serie_id`, `name`, `story`, `poster`, `created_at`, `updated_at`) VALUES
(2, '1', '1', '.', '1683402057.jpg', '2023-05-06 18:40:57', '2023-05-06 18:40:57'),
(3, '2', '1', '.', '1683402246.jpg', '2023-05-06 18:44:06', '2023-05-06 18:44:06');

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
  `is_admin` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hachem', 'hachem@gmail.com', NULL, '$2y$10$KxBVohnN6mEx8UBTr3oS0ecnxpkIfDI2uQAWk/DRGbkjzIjjuBsy2', '1', 'tkXVPR50YNHxrVvk21XLE45LItU2hOZzOVhArZy4m3jCVnyNcgNoctrYihR1', '2023-05-06 17:18:52', '2023-05-06 17:18:52'),
(2, 'souiher', 'souiher@gmail.com', NULL, '$2y$10$yJH6ZLgBD9cfndm.QiqDM.SKMFqEHkcPRegj7P3okJAfY/XuxJ0iy', '0', NULL, '2023-05-06 18:45:16', '2023-05-06 18:45:16');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serie_episodes`
--
ALTER TABLE `serie_episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serie_seasons`
--
ALTER TABLE `serie_seasons`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `serie_episodes`
--
ALTER TABLE `serie_episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `serie_seasons`
--
ALTER TABLE `serie_seasons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
