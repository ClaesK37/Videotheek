-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 jan 2021 om 15:14
-- Serverversie: 10.4.16-MariaDB
-- PHP-versie: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devideotheek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
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
-- Tabelstructuur voor tabel `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nummer` int(11) NOT NULL,
  `aanwezig` tinyint(1) NOT NULL,
  `titel_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `films`
--

INSERT INTO `films` (`id`, `nummer`, `aanwezig`, `titel_id`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 1, '2020-11-05 11:12:33', '2020-11-05 11:12:33'),
(2, 11, 1, 1, '2020-11-05 11:12:47', '2020-11-05 11:12:47'),
(4, 21, 0, 2, '2020-11-05 11:13:19', '2020-11-05 11:13:35'),
(5, 22, 1, 2, '2020-11-05 11:51:01', '2020-11-05 11:51:01'),
(6, 31, 1, 4, '2020-11-05 11:53:42', '2020-11-05 11:53:42'),
(7, 41, 1, 3, '2020-11-05 11:53:59', '2020-11-05 11:53:59'),
(8, 42, 0, 3, '2020-11-05 11:54:17', '2020-11-05 11:54:34'),
(9, 51, 0, 5, '2020-11-05 12:07:24', '2020-11-05 12:09:08'),
(10, 52, 1, 5, '2020-11-05 12:07:45', '2020-11-05 12:07:45'),
(11, 32, 1, 4, '2020-11-05 12:08:05', '2020-11-05 12:08:05');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_05_113135_create_titels_table', 1),
(5, '2020_11_05_113522_create_films_table', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `titels`
--

CREATE TABLE `titels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genres` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`genres`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `titels`
--

INSERT INTO `titels` (`id`, `titel`, `genres`, `created_at`, `updated_at`) VALUES
(1, 'Safe House', '[\"Triller\",\"Actie\"]', '2020-11-05 11:05:20', '2020-11-05 11:05:20'),
(2, 'Cinderella', '[\"Komedie\",\"Romantiek\"]', '2020-11-05 11:12:09', '2020-11-05 11:12:09'),
(3, 'Girl with the dragon tattoo', '[\"Triller\",\"Detective\"]', '2020-11-05 11:52:57', '2020-11-05 11:52:57'),
(4, 'Tresspass', '[\"Triller\",\"Actie\"]', '2020-11-05 11:53:21', '2020-11-05 11:53:21'),
(5, 'Red', '[\"Actie\",\"Komedie\"]', '2020-11-05 12:05:58', '2020-11-05 12:05:58');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
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
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Werknemer1', 'werkenemer1@videotheek.be', NULL, '$2y$10$Y.T3lDr9i7pkwlVxOH5d2u8y7r0LKx6sgzSbLKitZ0V7NbU3vp9Yi', 'kgpimYSTtpJcdHVOKYQwhUW5Jy1aGVDh5w79789xEkc33PtDgjLVSgmPLFN8', '2020-11-05 11:24:37', '2020-11-05 11:24:37'),
(2, 'Werknemer2', 'werknemer2@videotheek.be', NULL, '$2y$10$9NHXJNfP7PBDf2hZ4MzjresYd5txikugwnpyNmRlAjQCTSWLtTLla', NULL, '2020-11-05 11:49:07', '2020-11-05 11:49:07'),
(3, 'werknemer3', 'werknemer3@videotheek.be', NULL, '$2y$10$1AbzRr1EPouluLSmZHPTP.3rw7Eyfv0Dy1yJLyxNwfKiA9IAVQnjy', NULL, '2020-11-05 11:50:27', '2020-11-05 11:50:27'),
(4, 'test', 'test@example.com', NULL, '$2y$10$gKrq8GliFUtZ0Ibxpq3r..7cghCmPUIRBBydgWkKlnYnXLhN3YyQi', NULL, '2021-01-06 12:52:47', '2021-01-06 12:52:47');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `films_nummer_unique` (`nummer`),
  ADD KEY `films_titel_id_foreign` (`titel_id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `titels`
--
ALTER TABLE `titels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titels_titel_unique` (`titel`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `titels`
--
ALTER TABLE `titels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_titel_id_foreign` FOREIGN KEY (`titel_id`) REFERENCES `titels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
