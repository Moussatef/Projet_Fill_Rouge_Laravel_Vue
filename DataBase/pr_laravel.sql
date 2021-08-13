-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 13 août 2021 à 22:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pr_laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Moussatef', 'moussatef@admin.yc', '$2y$10$9jaFeu2CB7IY./OB4avCjO955d.4QJfhqI8Xpqdo3JfJAYBpHdEXi', '2021-08-12 14:14:06', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
CREATE TABLE IF NOT EXISTS `apprenants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `apprenants_personne_id_foreign` (`personne_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id`, `personne_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 6, NULL, '2021-08-05 10:31:11', '2021-08-05 10:31:11'),
(7, 7, NULL, '2021-08-07 18:35:52', '2021-08-07 18:35:52'),
(8, 8, NULL, '2021-08-10 11:31:41', '2021-08-10 11:31:41'),
(9, 12, NULL, '2021-08-10 12:13:07', '2021-08-10 12:13:07'),
(10, 15, NULL, '2021-08-10 12:16:58', '2021-08-10 12:16:58'),
(11, 17, NULL, '2021-08-10 12:17:30', '2021-08-10 12:17:30'),
(12, 18, NULL, '2021-08-10 12:18:56', '2021-08-10 12:18:56'),
(13, 19, NULL, '2021-08-10 12:20:19', '2021-08-10 12:20:19'),
(14, 21, NULL, '2021-08-10 12:22:07', '2021-08-10 12:22:07'),
(15, 22, NULL, '2021-08-10 12:22:53', '2021-08-10 12:22:53'),
(16, 23, NULL, '2021-08-10 12:24:13', '2021-08-10 12:24:13'),
(17, 24, NULL, '2021-08-10 12:24:52', '2021-08-10 12:24:52'),
(18, 25, NULL, '2021-08-10 12:26:49', '2021-08-10 12:26:49'),
(19, 26, NULL, '2021-08-10 12:27:56', '2021-08-10 12:27:56'),
(20, 27, NULL, '2021-08-10 12:30:18', '2021-08-10 12:30:18'),
(21, 28, NULL, '2021-08-10 12:30:47', '2021-08-10 12:30:47'),
(22, 29, NULL, '2021-08-10 12:31:20', '2021-08-10 12:31:20'),
(23, 30, NULL, '2021-08-10 12:33:46', '2021-08-10 12:33:46'),
(24, 31, NULL, '2021-08-10 12:37:07', '2021-08-10 12:37:07'),
(25, 32, NULL, '2021-08-10 12:38:01', '2021-08-10 12:38:01'),
(26, 33, NULL, '2021-08-10 12:39:20', '2021-08-10 12:39:20'),
(27, 34, NULL, '2021-08-10 12:40:10', '2021-08-10 12:40:10'),
(28, 35, NULL, '2021-08-10 12:41:24', '2021-08-10 12:41:24'),
(29, 36, NULL, '2021-08-10 12:42:10', '2021-08-10 12:42:10'),
(30, 37, NULL, '2021-08-10 12:42:52', '2021-08-10 12:42:52'),
(31, 38, NULL, '2021-08-10 16:12:14', '2021-08-10 16:12:14'),
(32, 39, NULL, '2021-08-10 18:24:05', '2021-08-10 18:24:05'),
(33, 40, NULL, '2021-08-10 18:27:36', '2021-08-10 18:27:36'),
(34, 41, NULL, '2021-08-10 18:29:04', '2021-08-10 18:29:04'),
(35, 42, NULL, '2021-08-10 18:30:07', '2021-08-10 18:30:07'),
(36, 43, NULL, '2021-08-10 18:30:31', '2021-08-10 18:30:31'),
(37, 44, NULL, '2021-08-10 18:31:04', '2021-08-10 18:31:04'),
(38, 45, NULL, '2021-08-10 18:31:44', '2021-08-10 18:31:44'),
(39, 46, NULL, '2021-08-10 18:33:03', '2021-08-10 18:33:03'),
(40, 47, NULL, '2021-08-10 18:34:51', '2021-08-10 18:34:51'),
(41, 48, NULL, '2021-08-13 20:26:39', '2021-08-13 20:26:39');

-- --------------------------------------------------------

--
-- Structure de la table `campuses`
--

DROP TABLE IF EXISTS `campuses`;
CREATE TABLE IF NOT EXISTS `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `campus_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `discord` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `campuses`
--

INSERT INTO `campuses` (`id`, `campus_nom`, `deleted_at`, `created_at`, `updated_at`, `ville`, `adresse`, `fex`, `email`, `password`, `github`, `discord`, `linkedin`, `facebook`, `instagram`, `img`, `cover`) VALUES
(3, 'YouCode Safi', NULL, '2021-08-05 11:24:09', NULL, 'Safi', 'Safi plato hassan II', '056678855', 'yc.s@gmail.com', '$2y$10$hezwm3IIbvtmB8EIm4JkKukxi0iSKXnUN/aNGkLGB1PEtCkpsOTgC', 'youcodesafi', 'youcodesafi', 'youcode', 'youcode', 'youcode_school', '', ''),
(4, 'YouCode Youssoufia', NULL, '2021-08-05 11:24:09', NULL, 'Youssoufia', 'Youssoufia bollvard hassan II', '056678855', 'yc.y@gmail.com', '$2y$10$hezwm3IIbvtmB8EIm4JkKukxi0iSKXnUN/aNGkLGB1PEtCkpsOTgC', 'youcodeys', 'youcodesafi', 'youcode', 'youcode', 'youcode_school', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentes`
--

DROP TABLE IF EXISTS `commentes`;
CREATE TABLE IF NOT EXISTS `commentes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentes_personne_id_foreign` (`personne_id`),
  KEY `commentes_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentes`
--

INSERT INTO `commentes` (`id`, `comment`, `personne_id`, `post_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'hi', 6, 20, '2021-08-06 17:15:53', '2021-08-05 21:09:08', '2021-08-06 17:15:53'),
(4, 'hi', 6, 20, '2021-08-06 17:15:58', '2021-08-05 21:09:09', '2021-08-06 17:15:58'),
(5, 'red', 6, 20, '2021-08-06 17:16:01', '2021-08-05 21:14:44', '2021-08-06 17:16:01'),
(6, 'red', 6, 20, '2021-08-06 17:16:03', '2021-08-05 21:14:45', '2021-08-06 17:16:03'),
(7, 'sat', 6, 20, '2021-08-06 17:16:06', '2021-08-05 21:17:52', '2021-08-06 17:16:06'),
(8, 'discor', 6, 19, NULL, '2021-08-05 21:19:31', '2021-08-05 21:19:31'),
(9, 'reddit', 6, 18, NULL, '2021-08-05 21:21:45', '2021-08-05 21:21:45'),
(10, 'twitter', 6, 17, NULL, '2021-08-05 21:22:39', '2021-08-05 21:22:39'),
(11, 'linkedIn', 6, 16, NULL, '2021-08-05 21:28:38', '2021-08-05 21:28:38'),
(12, 'good', 6, 20, '2021-08-05 22:24:22', '2021-08-05 21:34:44', '2021-08-05 22:24:22'),
(13, 'Sad', 6, 20, '2021-08-06 17:16:08', '2021-08-05 21:37:12', '2021-08-06 17:16:08'),
(14, 'وفي صباح بوم الجمعة الاخيرة من السنة الهجرية 1442🌷 اللهم ارزقنا طيب الحياة وسعة الرزق وراحة البال ولباس العافية وخير العطاء ‏يارب ابسط علينا رحمتك الواسعة اللهم صل وسلم وبارك على سيدنا محمد ﷺ♥️', 6, 20, '2021-08-06 17:16:12', '2021-08-06 16:44:34', '2021-08-06 17:16:12'),
(15, 'linked in logo', 6, 20, NULL, '2021-08-06 17:17:55', '2021-08-06 17:17:55'),
(16, 'pine', 6, 15, NULL, '2021-08-06 17:18:12', '2021-08-06 17:18:12'),
(17, 'white', 6, 15, NULL, '2021-08-06 17:18:30', '2021-08-06 17:18:30'),
(18, 'good', 8, 15, NULL, '2021-08-13 04:36:56', '2021-08-13 04:36:56'),
(19, 'test', 8, 15, NULL, '2021-08-13 04:38:23', '2021-08-13 04:38:23'),
(20, 'good', 8, 15, NULL, '2021-08-13 04:38:56', '2021-08-13 04:38:56'),
(21, 'Iusto inventore cons', 6, 21, NULL, '2021-08-13 10:01:15', '2021-08-13 10:01:15'),
(22, 'code', 6, 24, '2021-08-13 20:22:05', '2021-08-13 10:01:54', '2021-08-13 20:22:05'),
(23, 'noto', 6, 23, NULL, '2021-08-13 10:05:09', '2021-08-13 10:05:09'),
(24, 'good', 6, 23, NULL, '2021-08-13 10:06:52', '2021-08-13 10:06:52'),
(25, 'good', 6, 22, NULL, '2021-08-13 10:08:45', '2021-08-13 10:08:45'),
(26, 'good', 6, 21, '2021-08-13 20:24:09', '2021-08-13 10:11:25', '2021-08-13 20:24:09'),
(27, 'code', 6, 22, NULL, '2021-08-13 10:36:52', '2021-08-13 10:36:52'),
(28, 'hello', 6, 23, NULL, '2021-08-13 10:37:09', '2021-08-13 10:37:09');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hashtages`
--

DROP TABLE IF EXISTS `hashtages`;
CREATE TABLE IF NOT EXISTS `hashtages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hashtag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hashtages_post_id_foreign` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `img_posts`
--

DROP TABLE IF EXISTS `img_posts`;
CREATE TABLE IF NOT EXISTS `img_posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `img_posts_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `img_posts`
--

INSERT INTO `img_posts` (`id`, `post_id`, `path`, `deleted_at`, `created_at`, `updated_at`) VALUES
(15, 14, '1628163166_s3.jpg', NULL, '2021-08-05 10:32:46', '2021-08-05 10:32:46'),
(16, 15, '1628164235_yoann-siloine-dyaxQ-aoGWY-unsplash.jpg', NULL, '2021-08-05 10:50:36', '2021-08-05 10:50:36'),
(17, 16, '1628164740_linkedin.png', NULL, '2021-08-05 10:59:00', '2021-08-05 10:59:00'),
(18, 17, '1628165013_twitter.png', NULL, '2021-08-05 11:03:33', '2021-08-05 11:03:33'),
(19, 18, '1628165074_reddit.png', NULL, '2021-08-05 11:04:34', '2021-08-05 11:04:34'),
(20, 19, '1628165165_discord.png', NULL, '2021-08-05 11:06:05', '2021-08-05 11:06:05'),
(21, 20, '1628165317_linkedin.png', NULL, '2021-08-05 11:08:37', '2021-08-05 11:08:37'),
(22, 22, '1628832679_image-from-rawpixel-id-586320-jpeg.jpg', NULL, '2021-08-13 04:31:19', '2021-08-13 04:31:19'),
(23, 24, '1628852500_computer-icons-source-code-coder-83394f659f7fa7d3eef6b94bb1ff1113.png', NULL, '2021-08-13 10:01:40', '2021-08-13 10:01:40');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_personne_id_foreign` (`personne_id`),
  KEY `likes_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `personne_id`, `post_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(23, 6, 14, '2021-08-05 20:10:23', '2021-08-05 10:42:14', '2021-08-05 20:10:23'),
(24, 6, 15, '2021-08-05 20:10:18', '2021-08-05 10:55:00', '2021-08-05 20:10:18'),
(30, 6, 20, '2021-08-05 20:10:39', '2021-08-05 19:56:24', '2021-08-05 20:10:39'),
(31, 6, 19, '2021-08-07 18:33:17', '2021-08-05 19:57:53', '2021-08-07 18:33:17'),
(32, 6, 18, NULL, '2021-08-05 19:58:56', '2021-08-05 19:58:56'),
(33, 6, 17, NULL, '2021-08-05 19:59:55', '2021-08-05 19:59:55'),
(34, 6, 16, NULL, '2021-08-05 20:04:18', '2021-08-05 20:04:18'),
(35, 6, 20, '2021-08-05 20:16:01', '2021-08-05 20:10:57', '2021-08-05 20:16:01'),
(36, 6, 15, '2021-08-13 10:01:00', '2021-08-05 20:11:09', '2021-08-13 10:01:00'),
(37, 6, 20, '2021-08-05 20:16:10', '2021-08-05 20:16:08', '2021-08-05 20:16:10'),
(38, 6, 20, '2021-08-05 21:28:18', '2021-08-05 21:28:07', '2021-08-05 21:28:18'),
(39, 6, 14, '2021-08-06 17:18:18', '2021-08-05 21:28:53', '2021-08-06 17:18:18'),
(40, 6, 20, '2021-08-05 21:31:18', '2021-08-05 21:31:13', '2021-08-05 21:31:18'),
(41, 6, 20, '2021-08-07 18:34:18', '2021-08-05 21:31:23', '2021-08-07 18:34:18'),
(42, 6, 19, NULL, '2021-08-07 18:33:20', '2021-08-07 18:33:20'),
(43, 6, 20, NULL, '2021-08-07 18:34:20', '2021-08-07 18:34:20'),
(44, 6, 21, '2021-08-12 10:37:19', '2021-08-12 10:37:13', '2021-08-12 10:37:19'),
(45, 6, 21, '2021-08-13 20:22:16', '2021-08-12 11:57:54', '2021-08-13 20:22:16'),
(46, 8, 22, NULL, '2021-08-13 04:31:33', '2021-08-13 04:31:33'),
(47, 8, 21, NULL, '2021-08-13 04:31:34', '2021-08-13 04:31:34'),
(48, 8, 15, NULL, '2021-08-13 04:31:36', '2021-08-13 04:31:36'),
(49, 8, 23, NULL, '2021-08-13 04:41:22', '2021-08-13 04:41:22'),
(50, 6, 23, NULL, '2021-08-13 04:42:22', '2021-08-13 04:42:22'),
(51, 6, 22, NULL, '2021-08-13 04:42:26', '2021-08-13 04:42:26'),
(52, 6, 15, NULL, '2021-08-13 10:01:02', '2021-08-13 10:01:02'),
(53, 6, 24, '2021-08-13 20:22:10', '2021-08-13 10:01:47', '2021-08-13 20:22:10'),
(54, 6, 14, NULL, '2021-08-13 10:04:42', '2021-08-13 10:04:42'),
(55, 6, 21, NULL, '2021-08-13 20:22:18', '2021-08-13 20:22:18');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `discord` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `reddit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `personal` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_personal_foreign` (`personal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_07_06_124447_create_personnes_table', 1),
(6, '2021_07_06_132837_create_apprenants_table', 1),
(7, '2021_07_06_143244_create_responsables_table', 1),
(8, '2021_07_06_150632_create_posts_table', 1),
(9, '2021_07_06_181523_create_post_profils_table', 1),
(10, '2021_07_06_182042_create_categories_table', 1),
(11, '2021_07_06_182118_create_post_problems_table', 1),
(12, '2021_07_06_183228_create_img_posts_table', 1),
(13, '2021_07_15_193221_create_likes_table', 1),
(14, '2021_07_15_193734_create_commentes_table', 1),
(15, '2021_07_15_194818_create_admins_table', 1),
(16, '2021_07_15_195058_create_hashtages_table', 1),
(17, '2021_08_03_154236_create_campuses_table', 2),
(18, '2021_08_01_174926_create_campuses_table', 3),
(19, '2021_08_03_173908_create_foreing_key_for_campus', 3),
(20, '2021_08_04_105911_create_media_table', 4),
(21, '2021_08_05_000911_creat-column-campus_info', 4),
(22, '2021_08_05_111834_creat-column-campus_img', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Personne', 1, 'moussatefToken', '31b6f015c3bd32e6a2120fed99dd2e0a98b4184c238f6d44f2a5273ff968c595', '[\"*\"]', '2021-08-02 10:00:05', '2021-08-02 08:33:31', '2021-08-02 10:00:05'),
(2, 'App\\Models\\Personne', 2, 'moussatefToken', '2f7e657c3c14b042d72be4247ee61ee8001cf5a6a19ceae41b580f463bdeb749', '[\"*\"]', '2021-08-02 10:05:31', '2021-08-02 10:04:14', '2021-08-02 10:05:31'),
(3, 'App\\Models\\Personne', 2, 'moussatefTokenUser@', 'c3afbe27b3baf83092c78201dcd83e404355a81a56b76789395ae192f039857e', '[\"*\"]', NULL, '2021-08-02 10:25:42', '2021-08-02 10:25:42'),
(4, 'App\\Models\\Personne', 2, 'moussatefTokenUser@', 'd505eadd0d1bfc8aeb1d5253195691d23fa86565da4894cb96f14540f3cd855b', '[\"*\"]', NULL, '2021-08-02 12:03:36', '2021-08-02 12:03:36'),
(5, 'App\\Models\\Personne', 3, 'moussatefToken', '36f6d23bb39a229c1a6679aed0f3340351af2135a62102f08fbdc4089308f0e2', '[\"*\"]', '2021-08-02 13:42:15', '2021-08-02 12:03:58', '2021-08-02 13:42:15'),
(6, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', 'ff5103109532ab6c719ad706c1cf0e25de8789dd175283c01403a57606360dae', '[\"*\"]', NULL, '2021-08-02 13:44:42', '2021-08-02 13:44:42'),
(7, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', '1ee05c86d514576bae2f3aa38cb072213db18b4956f03a438c481677eeb1d82f', '[\"*\"]', NULL, '2021-08-02 13:44:50', '2021-08-02 13:44:50'),
(8, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', '7694b35b0a797cc3cd0b4e272ad7450fd1722b6d1adff07701dd0b54775c893d', '[\"*\"]', NULL, '2021-08-02 14:18:33', '2021-08-02 14:18:33'),
(9, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', '6e4dd081c310f1421499cab6d82003701b02f8937a0bd69ab6eb2b6fbc6f9f32', '[\"*\"]', NULL, '2021-08-02 14:22:09', '2021-08-02 14:22:09'),
(10, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', 'bf6efd63594d8ee03006e953f0916130f13c77a3e5e59d619beb1bef15fc772d', '[\"*\"]', NULL, '2021-08-02 14:22:23', '2021-08-02 14:22:23'),
(11, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', '7c2f7107c3865117040708f65418d1364edd0b0888bb6754d8b2c4b063daba2a', '[\"*\"]', '2021-08-02 21:25:32', '2021-08-02 14:23:41', '2021-08-02 21:25:32'),
(12, 'App\\Models\\Personne', 3, 'moussatefTokenUser@', '86269b48b04b81a4a29bfbe9b8acfb92afcb9008595dfb13d11b4fa68517da11', '[\"*\"]', '2021-08-03 14:15:50', '2021-08-02 21:27:37', '2021-08-03 14:15:50'),
(13, 'App\\Models\\Personne', 4, 'moussatefTokenUser@', 'b343662f388fffaafffd2b9252fe335dd2e888c9957fe0ae0c5933e73148eb51', '[\"*\"]', '2021-08-03 19:25:57', '2021-08-03 17:58:00', '2021-08-03 19:25:57'),
(14, 'App\\Models\\Personne', 5, 'moussatefTokenUser@', 'd6eefe83159b5cbe002072893a92342c307d156ad41c13030f5d97d9b8559f7f', '[\"*\"]', '2021-08-04 13:02:46', '2021-08-03 19:31:37', '2021-08-04 13:02:46'),
(15, 'App\\Models\\Personne', 5, 'moussatefTokenUser@', '47f1b66fba5b69f9fb07b20f88a4592b5943cd54faf190d8a0a81cf1f8616136', '[\"*\"]', '2021-08-04 23:06:08', '2021-08-04 13:07:00', '2021-08-04 23:06:08'),
(16, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '7424c55472e62de872e1b75f42f9255361eec3bd061c3139d63181a364dbbf2d', '[\"*\"]', '2021-08-07 18:34:59', '2021-08-05 10:32:15', '2021-08-07 18:34:59'),
(17, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', 'bab5315e5e35560eca49e8bfc7834faf2f38d6edefdd1046776983a5b695f9f6', '[\"*\"]', '2021-08-05 21:23:09', '2021-08-05 16:34:30', '2021-08-05 21:23:09'),
(18, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '4daf3f1da0dbb91e9c6e6bb589b760f35d2c3002e475cfaf5378e18cc08eedae', '[\"*\"]', '2021-08-09 10:58:52', '2021-08-07 18:36:41', '2021-08-09 10:58:52'),
(19, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '56720ffb6cb1426edd34db5641c807577fb95fc4abb86ff07abfe3f3ee2e8b97', '[\"*\"]', '2021-08-11 18:25:28', '2021-08-11 18:21:19', '2021-08-11 18:25:28'),
(20, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', 'ce71b2bcf89c2a869f77615b4851ec780e1fde6fbd154af7f63f879c101a49a7', '[\"*\"]', '2021-08-12 10:37:19', '2021-08-11 18:27:32', '2021-08-12 10:37:19'),
(21, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '1ab69729b1ac528b68c08412720c6a6c79d06636f2c64679452bfc9d66ea0492', '[\"role:user\"]', '2021-08-12 13:02:54', '2021-08-12 11:48:43', '2021-08-12 13:02:54'),
(22, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '3b1969dd24ce5c6b65fa58fad59e195f1fbcf5abf520ede275bb3f10ac34f332', '[\"role:admin\"]', NULL, '2021-08-12 13:20:02', '2021-08-12 13:20:02'),
(23, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'a6a973465545916add4eb5cb2c9dc6338a01c1fedbfae1821990f30f04016b5f', '[\"role:admin\"]', NULL, '2021-08-12 13:21:47', '2021-08-12 13:21:47'),
(24, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'e07bd103747df5e873e106893c1f3c0b41b660042938c93da38e3aadc2a05379', '[\"role:admin\"]', NULL, '2021-08-12 13:22:58', '2021-08-12 13:22:58'),
(25, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '954772cb677db8c5d1fb87f614277bfb3eecfee71156f6b133c5e2572dc12157', '[\"role:admin\"]', NULL, '2021-08-12 13:23:47', '2021-08-12 13:23:47'),
(26, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '39560a7d9845f43cd9a609b46c94a42291b3095c29eef492a38ebf6c4cb9c9a8', '[\"role:admin\"]', NULL, '2021-08-12 13:24:21', '2021-08-12 13:24:21'),
(27, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'dc4e1f0b9a2d5b7896e69d968544fe6c0086b77a53c71429c609ee57f1cc689d', '[\"role:admin\"]', NULL, '2021-08-12 13:28:27', '2021-08-12 13:28:27'),
(28, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '8c1791ee6a739e816976766f62b40af525d8f12158fba24db9ad612f1470f5bb', '[\"role:admin\"]', NULL, '2021-08-12 13:31:02', '2021-08-12 13:31:02'),
(29, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '8bf2e1dbe4c4bea4a0617cd288dd502780971d6d4291e630480b75eb3725bfa9', '[\"role:admin\"]', NULL, '2021-08-12 13:45:34', '2021-08-12 13:45:34'),
(30, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '11509c8578f1fc7a846e95487577d64dd6e675265a5352eb67e04b309eef4443', '[\"role:admin\"]', NULL, '2021-08-12 13:46:44', '2021-08-12 13:46:44'),
(31, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '8020ec8871028ebf0000197e5cdccb0b17812f5db7c96abbb405b3f255ebce0f', '[\"role:admin\"]', NULL, '2021-08-12 13:47:39', '2021-08-12 13:47:39'),
(32, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '0bd9e663d5f06ac895d7b6dea01c5792a07149ec968e99d219e2bab344fa235b', '[\"role:admin\"]', NULL, '2021-08-12 13:48:15', '2021-08-12 13:48:15'),
(33, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '53d7a53c5b4949f4387a407f028cd3fe3cb8d6e1ee61712f1086afff612b0c56', '[\"role:admin\"]', NULL, '2021-08-12 14:58:47', '2021-08-12 14:58:47'),
(34, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'df81840e4a9730850bbe760b52b6028323ca2e97ce13c2d44ae32100df1c7c4a', '[\"role:admin\"]', NULL, '2021-08-12 14:59:25', '2021-08-12 14:59:25'),
(35, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '8f3e84064e136767dace99b1388b280f684511da840a31a2f29ca02ab8224f00', '[\"role:admin\"]', NULL, '2021-08-12 15:00:48', '2021-08-12 15:00:48'),
(36, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'ee9779f6096d010f19537374c993a6386e6b9959227040ac4d89ce75fbf8404a', '[\"role:admin\"]', NULL, '2021-08-12 15:00:57', '2021-08-12 15:00:57'),
(37, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'bfadd5e2493659a101ce1a83c6529b76621306683cad72b5a9270de6e4b5b7d8', '[\"role:admin\"]', NULL, '2021-08-12 15:01:07', '2021-08-12 15:01:07'),
(38, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '02bcb4ab38e51881c37463979286c6efb02641adc398aab884940f424183224d', '[\"role:admin\"]', NULL, '2021-08-12 15:01:58', '2021-08-12 15:01:58'),
(39, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'e048b32fa1721344e0266d0c6682bc27cb58fbdb27ede65ac787c5b48bc592c4', '[\"role:admin\"]', NULL, '2021-08-12 15:03:31', '2021-08-12 15:03:31'),
(40, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '65fb595baa1677d7839e8424915b81c1a9db8c283a62ab07b5de22bd5a316c54', '[\"role:admin\"]', NULL, '2021-08-12 15:03:55', '2021-08-12 15:03:55'),
(41, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '90d09a281e6fbe5d33b6881349a959a6d93a38651cfb9b8902f44772053d0383', '[\"role:admin\"]', NULL, '2021-08-12 15:04:44', '2021-08-12 15:04:44'),
(42, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'f8f17da7086a295d2960d2e4dc597cecb5b34313d3bd446b6589f367277244b8', '[\"role:admin\"]', NULL, '2021-08-12 15:07:13', '2021-08-12 15:07:13'),
(43, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'ab8506d8287ef4b034eeaac327d1e6ea6f37c439be81b3169237d2d846fd707a', '[\"role:admin\"]', '2021-08-12 15:08:40', '2021-08-12 15:07:50', '2021-08-12 15:08:40'),
(44, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '25d2ad82ba4c81f28394f1e0b0a680f2e1b9b850e7d9605e26774e01f1514042', '[\"role:admin\"]', NULL, '2021-08-12 15:09:21', '2021-08-12 15:09:21'),
(45, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '84d98f17a9b89d996ca213e9697c010876c43455af7658ed4ba8bb843f7ee168', '[\"role:admin\"]', '2021-08-12 15:10:57', '2021-08-12 15:09:44', '2021-08-12 15:10:57'),
(46, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '71a7148f0c22c8e15cdf6135613ac0fc9e02de030438477fe3de339727eb2c55', '[\"role:admin\"]', '2021-08-12 15:28:55', '2021-08-12 15:19:12', '2021-08-12 15:28:55'),
(47, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'a4dfa33828814b4c14cb88a4c77bf2a2d120f719a69fa158ca78c7822aca07d7', '[\"role:admin\"]', '2021-08-12 16:48:22', '2021-08-12 15:29:18', '2021-08-12 16:48:22'),
(48, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', 'c064e67d09635150fa5dd5f1433599938ac2cd69afdff4f44db973c11fdb00b1', '[\"role:user\"]', '2021-08-12 19:57:31', '2021-08-12 19:50:08', '2021-08-12 19:57:31'),
(49, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '0ab622dc1213e4094608ccd52c9ba412091a3107586b6f01d04ff93617f7926a', '[\"role:user\"]', '2021-08-12 20:13:52', '2021-08-12 20:09:20', '2021-08-12 20:13:52'),
(50, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '7660c78bc15ee97c65dfb3e3d0f845ee1e26d62ea06ee12f0dac563486a54f9f', '[\"role:admin\"]', '2021-08-12 20:23:48', '2021-08-12 20:17:32', '2021-08-12 20:23:48'),
(51, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '768165d6300454b29b50814cf8bf5e631b4f7afd6a2a11e090c9f28b7fe60181', '[\"role:user\"]', '2021-08-13 04:30:51', '2021-08-13 04:30:36', '2021-08-13 04:30:51'),
(52, 'App\\Models\\Personne', 8, 'moussatefTokenUser@', '9d144ecfa08deca277c7e330a5997e418117aff8a9026182d1d42db07e6627a8', '[\"role:user\"]', '2021-08-13 04:41:22', '2021-08-13 04:31:02', '2021-08-13 04:41:22'),
(53, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '1b1c4eb8b3a8d02243ff900810d7a0def7b7cf354a013779e43d2bfad150f371', '[\"role:user\"]', '2021-08-13 20:24:09', '2021-08-13 04:42:16', '2021-08-13 20:24:09'),
(54, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', 'ab3a177c9ddcb8fb88a3764b8d857189b188809f4ebe374271cf7c838a9ff054', '[\"role:admin\"]', '2021-08-13 20:28:19', '2021-08-13 20:27:14', '2021-08-13 20:28:19'),
(55, 'App\\Models\\Personne', 6, 'moussatefTokenUser@', '7baa15059c6ac42b5897c18354a63b439a534fcd7ba4a30e2deb68de17b19943', '[\"role:user\"]', '2021-08-13 20:30:41', '2021-08-13 20:28:40', '2021-08-13 20:30:41'),
(56, 'App\\Models\\Admin', 1, 'moussatefTokenAdmin@', '6308309320509333c7c8bbf0cc9bebbc8e3d20dd8ae8dc8a115b3215b410fd35', '[\"role:admin\"]', '2021-08-13 20:34:32', '2021-08-13 20:34:29', '2021-08-13 20:34:32');

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

DROP TABLE IF EXISTS `personnes`;
CREATE TABLE IF NOT EXISTS `personnes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `date_N` date NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `campus_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personnes_email_unique` (`email`),
  KEY `personnes_campus_id_foreign` (`campus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `telephon`, `date_N`, `adresse`, `email`, `github`, `linkedin`, `facebook`, `instagram`, `password`, `img`, `cover`, `bio`, `validation`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `campus_id`) VALUES
(6, 'Othman', 'Moussatef', '0637274172', '1998-10-14', '135 riyad safi', 'otman.moussetaf@gmail.com', 'Moussatef', 'othman-moussatef', 'moussatef', 'moussatef_', '$2y$10$9jaFeu2CB7IY./OB4avCjO955d.4QJfhqI8Xpqdo3JfJAYBpHdEXi', '1628173647_QTR11058MD.jpg', '1628163071_s1.jpg', 'programming it\'s not just coding it is meandset', 'true', NULL, NULL, '2021-08-05 10:31:11', '2021-08-05 13:27:27', 3),
(7, 'Hahn', 'Tamara Byrd', 'Quia est non velit', '1985-06-05', 'Repellendus In quae', 'maqiwu@mailinator.com', 'Non minima incidunt', 'Eu est minima et in', 'Fuga Atque irure se', 'Animi laboriosam t', '$2y$10$RxcnQ6XD2oq1OfdqGxc1n.GcYNH0zZwhR0Mbf1yrU9vHNagjPFj2.', '1628364951_OCP_Group.svg.png', '1628364951_s3.jpg', 'Ex excepturi et non', 'true', NULL, NULL, '2021-08-07 18:35:51', '2021-08-10 18:22:14', 4),
(8, 'Haynes', 'Russell Moses', 'Officiis totam verit', '2000-01-12', 'Corporis rem labore', 'cuxy@mailinator.com', 'Amet laborum aut qu', 'Nihil temporibus off', 'Quibusdam consectetu', 'Saepe rerum eius qui', '$2y$10$jcaDngzcLOtLaVKp.IGs/uORiRh3IKvWfvIGyl3gujUZSR/lfR.MC', '1628598700_index.png', '1628598700_s1.jpg', 'Tempora hic sit per', 'true', NULL, NULL, '2021-08-10 11:31:41', '2021-08-10 18:22:47', 3),
(9, 'Pacheco', 'Imani Knapp', 'Culpa consequuntur', '2017-12-30', 'Impedit ipsam dolor', 'hygodupoza@mailinator.com', 'Nisi nulla cum quide', 'Vel aliquid quos ali', 'Ex rem veniam conse', 'Et sapiente pariatur', '$2y$10$HijFvZfXB/yU/ap/kKyaR.qbgFfen0coTisodQBPE.YBgA5HGkoEm', 'ycc.jpg', 'cover.jpg', 'Exercitationem eu es', 'false', NULL, NULL, '2021-08-10 11:56:15', '2021-08-10 11:56:15', 4),
(11, 'Pope', 'Danielle Webster', 'Libero officiis in a', '1993-07-05', 'Reiciendis natus rer', 'lazucab@mailinator.com', 'Qui ut deserunt iure', 'Hic sed in quisquam', 'In earum aut laudant', 'Voluptatem fugiat', '$2y$10$Cg9OhGvGWPvnEnmbZ0sfUeEzfmPI4fYkUs.W4LsBkwCSGHWuhK6.e', 'ycc.jpg', 'cover.jpg', 'Ea enim adipisicing', 'false', NULL, NULL, '2021-08-10 12:11:21', '2021-08-10 12:11:21', 3),
(12, 'Pacheco', 'Ezra Buckley', 'Dolor eiusmod ration', '1989-02-24', 'Voluptas dolore adip', 'qepyzytor@mailinator.com', 'Ut impedit dolore q', 'Ipsam dolores iste p', 'Quod ad magnam possi', 'Laborum Similique d', '$2y$10$AHqJtyoP6GItBTK8v8Teq.VmBDshxDRHhxTwZTP7ueoGnt8PwFQwS', 'ycc.jpg', 'cover.jpg', 'In est velit quos ex', 'true', NULL, NULL, '2021-08-10 12:13:07', '2021-08-10 20:08:57', 3),
(13, 'Cole', 'Desirae Collins', 'Et est quisquam temp', '2003-01-28', 'Quibusdam totam veri', 'meduv@mailinator.com', 'Officia in ab omnis', 'Nemo dolores maiores', 'Atque blanditiis pro', 'Enim nulla laborum n', '$2y$10$RZSZ.l27hmgub2hbz57rIec6.aqVvtf1NUIvM13SZsZaOUvO.QCba', 'ycc.jpg', 'cover.jpg', 'Ipsa in velit labor', 'false', NULL, NULL, '2021-08-10 12:15:00', '2021-08-10 12:15:00', 4),
(14, 'Flores', 'Isadora Stevenson', 'Fugit rerum rerum p', '2015-12-16', 'Eligendi rerum non s', 'hori@mailinator.com', 'Dolorem molestias id', 'At illum dolore inc', 'Blanditiis sunt eos', 'Officia est dolore l', '$2y$10$z4A5WcRRCtzDTR4Jv.IBf.WIxLyjiIcO1vCVh70v55L4BMHa8CVo6', 'ycc.jpg', 'cover.jpg', 'Cum irure nemo aliqu', 'false', NULL, NULL, '2021-08-10 12:16:16', '2021-08-10 12:16:16', 3),
(15, 'Lindsey', 'Madison Welch', 'Aute labore nobis cu', '1994-01-21', 'Est non molestias of', 'vidoso@mailinator.com', 'Sit ea nihil enim s', 'Accusamus incidunt', 'Eveniet eiusmod qui', 'Incidunt cupiditate', '$2y$10$7CHWUm9O4yfs41Q7gpaQuucAEhuqEq3T3MjtEOOywIw3GJ1Eb3c5K', 'ycc.jpg', 'cover.jpg', 'Officia aliquip saep', 'true', NULL, NULL, '2021-08-10 12:16:58', '2021-08-10 20:10:36', 3),
(17, 'Waters', 'Ursula Stone', 'Neque voluptatem ei', '2006-12-14', 'Debitis ut atque eiu', 'dasabyde@mailinator.com', 'Cupidatat repudianda', 'Do sunt deserunt ani', 'Non dignissimos volu', 'Facere fugiat et ve', '$2y$10$eBRJolm49rE75tHPdcnWjuTuJuUlu7uoRLTdE4Z4iwF1hebFlRr3i', 'ycc.jpg', 'cover.jpg', 'Omnis nulla qui tene', 'true', NULL, NULL, '2021-08-10 12:17:30', '2021-08-10 20:09:50', 3),
(18, 'Mann', 'Acton Sharpe', 'Sit accusantium poss', '1981-02-01', 'Eius labore aliquip', 'vudu@mailinator.com', 'Et voluptate delenit', 'Reprehenderit alias', 'Omnis nisi enim amet', 'Et maiores assumenda', '$2y$10$i4NbY1KFzPZqK5JZe1HrQ.Yt2lCIRE2GcrAggjnSu6C2eax9Ric.C', 'ycc.jpg', 'cover.jpg', 'Ullam lorem optio s', 'true', NULL, NULL, '2021-08-10 12:18:56', '2021-08-10 20:10:56', 4),
(19, 'Hahn', 'Odessa Kennedy', 'Inventore in volupta', '2012-08-17', 'Voluptatem Est aut', 'wacezaly@mailinator.com', 'Fugiat temporibus d', 'Exercitation id inci', 'Incidunt in eum mag', 'Cupidatat velit even', '$2y$10$32ALQb3MXN4PgMGB/tyhw.o1xBr5oKUopEs7Z6uDsISRRAY8r/quu', 'ycc.jpg', 'cover.jpg', 'Id et at ipsum reru', 'true', NULL, NULL, '2021-08-10 12:20:19', '2021-08-10 20:11:33', 3),
(21, 'Howe', 'Anjolie Stone', 'Autem sit maiores h', '2020-06-26', 'Facilis ullam ipsum', 'reqykikoh@mailinator.com', 'Id expedita dicta vo', 'Sint id numquam dol', 'Voluptatem iusto ame', 'Eos qui qui sint quo', '$2y$10$HzZIaQ8sLP1dpsU/U2M6RexIRLPUfCzM8EnksGxAwFbVYeryGrNem', 'ycc.jpg', 'cover.jpg', 'Non ab soluta modi p', 'true', NULL, NULL, '2021-08-10 12:22:07', '2021-08-10 20:14:32', 3),
(22, 'Howell', 'Hamish Burgess', 'Quos cupiditate natu', '1991-08-07', 'Lorem officia ad ut', 'riponu@mailinator.com', 'Excepteur dolor fugi', 'Molestias odio neces', 'Voluptatum officia e', 'Mollit voluptate dig', '$2y$10$tq8jrpSy5yIFZvdPES2GIu5w0BEpJc7TL5fDm2Aa4UtwKuzeqjRLq', 'ycc.jpg', 'cover.jpg', 'Eos consequatur Per', 'true', NULL, NULL, '2021-08-10 12:22:53', '2021-08-10 20:12:06', 4),
(23, 'Gay', 'Thomas Oneil', 'Vitae vel nobis eius', '1982-12-12', 'Nobis rerum exercita', 'sylawigor@mailinator.com', 'Nam sint voluptatem', 'Do officia in nobis', 'Culpa tenetur est q', 'Cupiditate non cillu', '$2y$10$hvNWzuCGn9wlxtdDN6ZZTu0pzrzvstFaGhLcbAr6k13SYxT38r5KK', 'ycc.jpg', 'cover.jpg', 'Laborum Quibusdam f', 'true', NULL, NULL, '2021-08-10 12:24:13', '2021-08-10 20:12:23', 3),
(24, 'Holman', 'Murphy Schroeder', 'Nam nesciunt minus', '2008-05-14', 'Praesentium excepteu', 'xyzyvono@mailinator.com', 'Ea illum et in quia', 'Nisi quia consequatu', 'Aute magni excepteur', 'Et distinctio Cum f', '$2y$10$dM7Csbjty.k4PirV3rT4OOCXKYUTS1C4QVjcqSNhdgvoStxJUAJA6', 'ycc.jpg', 'cover.jpg', 'Aliquid quis velit', 'true', NULL, NULL, '2021-08-10 12:24:52', '2021-08-10 20:12:48', 3),
(25, 'Houston', 'Hollee Mcguire', 'Qui in deserunt fugi', '1978-08-11', 'Et placeat reiciend', 'jepahu@mailinator.com', 'Voluptatem quo place', 'Molestiae aut et quo', 'Magnam dolor asperio', 'Possimus iste earum', '$2y$10$KR1nu1g1R0be7jnSHwZqH.a9xgrSFwmzJXTDfmBUmNGrIv8abMsWm', 'ycc.jpg', 'cover.jpg', 'Ipsum non excepturi', 'true', NULL, NULL, '2021-08-10 12:26:49', '2021-08-10 20:32:15', 3),
(26, 'Foster', 'Lane Pennington', 'Neque delectus et e', '1981-02-16', 'Sunt sunt maxime a', 'cyjyfu@mailinator.com', 'Nemo est et ut eius', 'Pariatur Accusantiu', 'Ab recusandae Ea pe', 'Modi aut ad nihil eo', '$2y$10$rySiocUiyX/D7XklXWOk/.sf9vAU4WCFy28hNAdP7n1vKOZRTQnFO', 'ycc.jpg', 'cover.jpg', 'Enim qui qui rerum e', 'true', NULL, NULL, '2021-08-10 12:27:56', '2021-08-10 20:32:50', 3),
(27, 'Burks', 'Dolan Baldwin', 'Reprehenderit suscip', '1976-04-27', 'Dolore placeat ipsu', 'xetet@mailinator.com', 'Cillum rerum beatae', 'Non fuga Dicta labo', 'Quo tenetur quis do', 'Cumque porro molesti', '$2y$10$YQoQmMfUy6yD4ITJ5hK1H.icyxiNT0..T/5Ci./FZ1EBp/7xYoRyW', 'ycc.jpg', 'cover.jpg', 'Ut ea sint velit et', 'true', NULL, NULL, '2021-08-10 12:30:18', '2021-08-10 20:33:12', 3),
(28, 'Garrison', 'Ruby Fields', 'Itaque sit temporibu', '1987-02-16', 'Iusto quia commodo i', 'kizasaki@mailinator.com', 'Accusantium alias do', 'Ut dolor officia ips', 'Dolores aliquip mini', 'Expedita libero aspe', '$2y$10$SqMc77oa89RlAaTlI5r3BeORaG8DQYjC4Ak.0Z5sKoTFPjox6HiQ2', 'ycc.jpg', 'cover.jpg', 'Quis beatae perspici', 'true', NULL, NULL, '2021-08-10 12:30:47', '2021-08-11 18:03:44', 3),
(29, 'Figueroa', 'Francis Dixon', 'Voluptatem optio a', '1993-06-11', 'Nihil qui eligendi e', 'berirofu@mailinator.com', 'Rem aut magni dolori', 'Sed illum rem nulla', 'Esse qui facere ea i', 'Harum ut deleniti as', '$2y$10$1wpS4JsCX3bXGrttJm4hheXBuyJMzyJrXY8R4nABlehcVjn9iOhQm', 'ycc.jpg', 'cover.jpg', 'Dicta iure sit fugia', 'true', NULL, NULL, '2021-08-10 12:31:20', '2021-08-11 18:04:03', 4),
(30, 'Edwards', 'Howard Olsen', 'Proident asperiores', '2017-02-05', 'Magnam ducimus vel', 'ruwibima@mailinator.com', 'Vitae qui est volup', 'Quae possimus et qu', 'Reiciendis accusamus', 'Maiores aliquip ad e', '$2y$10$L6m/5ryvDP4mqrMPhphreeznkLx9h9NIQIwDIY04hbgS4lFCIQIsO', 'ycc.jpg', 'cover.jpg', 'Cumque ab accusantiu', 'true', NULL, NULL, '2021-08-10 12:33:46', '2021-08-11 18:04:49', 3),
(31, 'Bentley', 'Phillip Gregory', 'Dolor reiciendis in', '1982-05-04', 'Ut reprehenderit inc', 'wepahekub@mailinator.com', 'Voluptates dolores a', 'Quibusdam quis ipsa', 'Lorem voluptas expli', 'Molestias autem et n', '$2y$10$iW306/qiSVO8BE1sgfZUC.wxsW3EcbdxcahdsR.JJwInrUdS6.3D2', 'ycc.jpg', 'cover.jpg', 'Quia adipisicing cor', 'true', NULL, NULL, '2021-08-10 12:37:07', '2021-08-11 18:05:24', 3),
(32, 'Cohen', 'Remedios Sargent', 'Odit ut saepe evenie', '2002-08-29', 'Nemo natus quo cupid', 'xuqibyz@mailinator.com', 'Mollit aliquid commo', 'Quos in molestiae im', 'Dolor voluptatem Au', 'Nulla eu consequatur', '$2y$10$0GHGA8f19EsP5/QILENVKuw40rOohGOVcWADAOqSug5bEACENOw0y', 'ycc.jpg', 'cover.jpg', 'Enim quisquam autem', 'true', NULL, NULL, '2021-08-10 12:38:01', '2021-08-11 18:05:32', 4),
(33, 'Owen', 'Hyatt Pruitt', 'Sit dolor vero labor', '1998-05-30', 'Fugiat ex exercitati', 'roduxaget@mailinator.com', 'Aperiam error quis a', 'Eveniet animi magn', 'Et asperiores nostru', 'Id provident sint', '$2y$10$o6LG45TyCWrkNJJ6smuqCO.tuRFd.jzYWv77k0MttB16LLT9XBfCS', 'ycc.jpg', 'cover.jpg', 'Ut consequatur Volu', 'true', NULL, NULL, '2021-08-10 12:39:20', '2021-08-11 20:06:41', 4),
(34, 'Stark', 'Xandra Mcconnell', 'Eos modi laboriosam', '2013-06-22', 'Odio et rerum facili', 'fenumij@mailinator.com', 'Sint Nam est vel dol', 'Omnis in est eos i', 'Qui qui ullamco aut', 'Qui quas totam dolor', '$2y$10$IXHypziB1KE53GftK4sNuez9T2zCGx5owTO.6q14686wMzEWPPQpu', 'ycc.jpg', 'cover.jpg', 'Omnis quo mollit ad', 'true', NULL, NULL, '2021-08-10 12:40:10', '2021-08-11 20:06:49', 3),
(35, 'Hernandez', 'Amber Parks', 'Et sint harum sunt', '2014-04-25', 'Cillum culpa ut ver', 'jowazez@mailinator.com', 'Quas nisi dolores ip', 'Molestiae voluptatem', 'Sit vel incidunt q', 'Quo quae nihil volup', '$2y$10$mOD.hIAVeIR8LxyVo1LUZuRiKMQBbCIE2pu01HHmQ8QdxHa48iV4W', 'ycc.jpg', 'cover.jpg', 'Cupidatat quaerat vo', 'true', NULL, NULL, '2021-08-10 12:41:24', '2021-08-11 20:06:54', 4),
(36, 'Hunt', 'Fritz Greer', 'Aut ut dolore non ei', '1972-01-30', 'Et est suscipit fuga', 'vywitynuja@mailinator.com', 'Voluptas do rerum fu', 'Dolorum dolores esse', 'Quaerat dolorum aut', 'Exercitation pariatu', '$2y$10$yoQxwzXVeE6Hhw4xlWlZOO67lYhw2W5hq61g1.cBAmnF6mdjpmRL.', 'ycc.jpg', 'cover.jpg', 'Hic esse aut minus q', 'true', NULL, NULL, '2021-08-10 12:42:10', '2021-08-11 20:48:08', 3),
(37, 'Mccall', 'Carl Hoover', 'Est ut ex maxime vol', '1979-06-22', 'Dolore ut iste volup', 'dyxog@mailinator.com', 'Aut quis esse ex omn', 'Possimus est labori', 'Vel doloremque ea co', 'Quia molestiae persp', '$2y$10$7rn6/ToR.kGEPqx12GlJxeZJWPwGHtWqTjC.aHbutpxZPG6Nha9Qa', 'ycc.jpg', 'cover.jpg', 'Delectus adipisci i', 'true', NULL, NULL, '2021-08-10 12:42:52', '2021-08-11 20:48:23', 3),
(38, 'Stark', 'Nadine Rios', 'Labore ipsa non lib', '1973-12-16', 'Voluptate nisi offic', 'jalekyx@mailinator.com', 'Odit deleniti velit', 'Itaque adipisicing e', 'Quis optio consecte', 'Nostrud sed qui volu', '$2y$10$kEDPBR0YiC259S7QLxerHOqlfn00CY1tBkjxC8VRRVs3ZkQX3Xw9u', 'ycc.jpg', 'cover.jpg', 'Consequatur Excepte', 'true', NULL, NULL, '2021-08-10 16:12:14', '2021-08-11 20:48:55', 4),
(39, 'Hodges', 'Nevada Leach', 'Irure maiores non mi', '2008-11-24', 'Consequuntur unde si', 'pejewetowu@mailinator.com', 'Vero ut cupidatat do', 'Aut accusantium quia', 'Quisquam nemo molest', 'A sed aliqua Assume', '$2y$10$Gzuea9Z.AoCztNPdLQH22OCkM5HwZnZqG10FqUBb8HlK9/CVcwEmy', 'ycc.jpg', 'cover.jpg', 'In praesentium ut no', 'true', NULL, NULL, '2021-08-10 18:24:05', '2021-08-11 21:33:20', 4),
(40, 'Oconnor', 'Owen Cotton', 'Aliquid saepe ab sun', '1970-04-14', 'Autem explicabo Eiu', 'keditali@mailinator.com', 'At velit ea delectus', 'Officia ab ut rerum', 'Dolor alias molestia', 'Cupidatat laborum po', '$2y$10$Y1670/WjtfUc4UuclYpoP.XZNOGFx04RCSblj6MXqhD7FG.o/GA7C', 'ycc.jpg', 'cover.jpg', 'Proident ea qui vel', 'true', NULL, NULL, '2021-08-10 18:27:36', '2021-08-12 10:36:19', 4),
(41, 'Sherman', 'Suki Day', 'Amet molestiae aut', '2017-02-19', 'Eaque ex dolor nesci', 'qynimipum@mailinator.com', 'Voluptatem repellend', 'Ipsum eiusmod eius', 'Et quia cillum illum', 'Ut eligendi et maxim', '$2y$10$YS7sn2qNnOpNRUZhrovqP.CMSOavzKRpFHsZFX2993tJrkxkw0uYW', 'ycc.jpg', 'cover.jpg', 'Dolor molestias ipsa', 'false', NULL, NULL, '2021-08-10 18:29:04', '2021-08-10 18:29:04', 3),
(42, 'Wall', 'Laith Wagner', 'Dolorem officiis vol', '1985-08-01', 'Amet aut omnis duci', 'logorunax@mailinator.com', 'Quia est consectetu', 'Velit est sed delec', 'Nobis eiusmod amet', 'Sit explicabo Dolo', '$2y$10$hJ.feEo7o5FAmgGt2yLF8ufzG5jHVrTkVGJ38q1kGkDe6KNweYBHa', 'ycc.jpg', 'cover.jpg', 'Ut laborum ullamco v', 'false', NULL, NULL, '2021-08-10 18:30:07', '2021-08-10 18:30:07', 4),
(43, 'Huff', 'Anastasia Garrison', 'Quia porro quibusdam', '2006-03-01', 'Saepe natus rerum et', 'qeqosocaq@mailinator.com', 'Nisi eligendi aut qu', 'Ut tempora dicta tem', 'Iure culpa error eum', 'Occaecat corrupti u', '$2y$10$Npu60WelhZ21x/DyYbkzr.bpxwOH0qlcSMxClRiZVg0EqRJq6Zp0u', 'ycc.jpg', 'cover.jpg', 'Est quas quia magni', 'false', NULL, NULL, '2021-08-10 18:30:31', '2021-08-10 18:30:31', 4),
(44, 'Hunter', 'Robin Mercado', 'Officia dolores labo', '1989-08-08', 'Et consequatur provi', 'gynimyso@mailinator.com', 'Est quia dolor qui m', 'Nam sit deserunt sit', 'Laborum molestiae cu', 'Omnis id exercitatio', '$2y$10$6JKdTCTaNqR.cbOfNm4yAeTk9XTARuF9t4vCovLHbtGGVjPwlS/Bi', 'ycc.jpg', 'cover.jpg', 'Velit delectus libe', 'false', NULL, NULL, '2021-08-10 18:31:04', '2021-08-10 18:31:04', 3),
(45, 'Dickerson', 'Lacy Moran', 'Quia alias esse ex c', '2000-08-11', 'Eum velit laudantium', 'sedecy@mailinator.com', 'Et velit laboriosam', 'Provident exercitat', 'Eligendi qui ipsum', 'Dignissimos distinct', '$2y$10$7Ew6hEQnxrRu3sF.1UpAKuLGe0IyHS1XNwFxoy0K70wmKPzQmRbbC', 'ycc.jpg', 'cover.jpg', 'Perspiciatis esse', 'false', NULL, NULL, '2021-08-10 18:31:44', '2021-08-10 18:31:44', 3),
(46, 'Austin', 'Jessamine Dunn', 'Quis adipisci cupidi', '1990-11-21', 'Obcaecati fugiat par', 'wynud@mailinator.com', 'Ipsum sunt laudantiu', 'Soluta rerum ut sit', 'Provident alias in', 'Alias amet facere d', '$2y$10$IB5YXtftjZR1vRCwKicE.u3AORC0nETUsUbk4c9W5U7GLf9CBSE7q', 'ycc.jpg', 'cover.jpg', 'Saepe accusamus aspe', 'false', NULL, NULL, '2021-08-10 18:33:03', '2021-08-10 18:33:03', 4),
(47, 'Henry', 'Olivia Price', 'Et aperiam optio ei', '1978-01-26', 'Consequuntur consequ', 'qeselanu@mailinator.com', 'Et aut facilis dolor', 'Accusamus quia esse', 'Blanditiis est aliqu', 'Aliquid duis invento', '$2y$10$hG5N7annjttuHRbh47jn/ecpSg4TKu3l.28zhR1MZC0IgdCal.INi', 'ycc.jpg', 'cover.jpg', 'Ut culpa labore err', 'false', NULL, NULL, '2021-08-10 18:34:51', '2021-08-10 18:34:51', 4),
(48, 'Cummings', 'Ruth Nash', 'Facilis veniam volu', '2021-08-08', 'Quam fugiat in natus', 'buvevav@mailinator.com', 'Eum minus nesciunt', 'Quas magna quo minim', 'Reiciendis praesenti', 'Nobis sed dolore ali', '$2y$10$7F2ve.O732BVUxBfH2GYxO53k55vfsJpSNuEAD8ske..MRpTSCKSS', '1628889999_social-media.png', '1628889999_s3.jpg', 'Laboris exercitation', 'false', NULL, NULL, '2021-08-13 20:26:39', '2021-08-13 20:26:39', 4);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_personne_id_foreign` (`personne_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `personne_id`, `titre`, `description`, `public`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 6, 'At ex et velit at e', 'Rerum soluta nisi te', 0, NULL, '2021-08-05 10:32:46', '2021-08-13 10:04:50'),
(15, 6, 'Excepteur sint nisi', 'Quis animi et rerum', 0, NULL, '2021-08-05 10:50:35', '2021-08-05 10:50:35'),
(16, 6, 'Tenetur ex alias lor', 'Suscipit sit quia qu', 0, '2021-08-12 20:09:33', '2021-08-05 10:59:00', '2021-08-12 20:09:33'),
(17, 6, 'Rerum ad ut magnam c', 'Corporis deleniti oc', 0, '2021-08-12 20:09:38', '2021-08-05 11:03:33', '2021-08-12 20:09:38'),
(18, 6, 'Necessitatibus volup', 'Expedita et inventor', 0, '2021-08-12 20:09:41', '2021-08-05 11:04:34', '2021-08-12 20:09:41'),
(19, 6, 'At fugiat harum simi', 'Consequuntur qui qui', 0, '2021-08-12 20:10:03', '2021-08-05 11:06:05', '2021-08-12 20:10:03'),
(20, 6, 'Quia sint dolorem au', 'Aut iure rerum volup', 0, '2021-08-12 20:09:49', '2021-08-05 11:08:37', '2021-08-12 20:09:49'),
(21, 6, 'Id animi dolores do', 'Cupidatat praesentiu', 0, NULL, '2021-08-12 10:37:09', '2021-08-12 10:37:09'),
(22, 8, 'Saepe sit ipsam cill', 'In ad incididunt vel', 0, NULL, '2021-08-13 04:31:19', '2021-08-13 04:31:19'),
(23, 8, 'Nisi eu et ullamco m', 'Et quis aliquip tene', 0, NULL, '2021-08-13 04:41:21', '2021-08-13 04:41:21'),
(24, 6, 'Earum ad adipisicing', 'Proident natus aliq', 0, NULL, '2021-08-13 10:01:40', '2021-08-13 10:01:40');

-- --------------------------------------------------------

--
-- Structure de la table `post_problems`
--

DROP TABLE IF EXISTS `post_problems`;
CREATE TABLE IF NOT EXISTS `post_problems` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_problems_post_id_foreign` (`post_id`),
  KEY `post_problems_categorie_id_foreign` (`categorie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `post_profils`
--

DROP TABLE IF EXISTS `post_profils`;
CREATE TABLE IF NOT EXISTS `post_profils` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_profils_post_id_foreign` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `post_profils`
--

INSERT INTO `post_profils` (`id`, `post_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 14, NULL, '2021-08-05 10:32:46', '2021-08-05 10:32:46'),
(15, 15, NULL, '2021-08-05 10:50:35', '2021-08-05 10:50:35'),
(16, 16, NULL, '2021-08-05 10:59:00', '2021-08-05 10:59:00'),
(17, 17, NULL, '2021-08-05 11:03:33', '2021-08-05 11:03:33'),
(18, 18, NULL, '2021-08-05 11:04:34', '2021-08-05 11:04:34'),
(19, 19, NULL, '2021-08-05 11:06:05', '2021-08-05 11:06:05'),
(20, 20, NULL, '2021-08-05 11:08:37', '2021-08-05 11:08:37'),
(21, 21, NULL, '2021-08-12 10:37:09', '2021-08-12 10:37:09'),
(22, 22, NULL, '2021-08-13 04:31:19', '2021-08-13 04:31:19'),
(23, 23, NULL, '2021-08-13 04:41:21', '2021-08-13 04:41:21'),
(24, 24, NULL, '2021-08-13 10:01:40', '2021-08-13 10:01:40');

-- --------------------------------------------------------

--
-- Structure de la table `responsables`
--

DROP TABLE IF EXISTS `responsables`;
CREATE TABLE IF NOT EXISTS `responsables` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `personne_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `responsables_personne_id_foreign` (`personne_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD CONSTRAINT `apprenants_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentes`
--
ALTER TABLE `commentes`
  ADD CONSTRAINT `commentes_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `hashtages`
--
ALTER TABLE `hashtages`
  ADD CONSTRAINT `hashtages_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `img_posts`
--
ALTER TABLE `img_posts`
  ADD CONSTRAINT `img_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD CONSTRAINT `personnes_campus_id_foreign` FOREIGN KEY (`campus_id`) REFERENCES `campuses` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `post_problems`
--
ALTER TABLE `post_problems`
  ADD CONSTRAINT `post_problems_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_problems_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `post_profils`
--
ALTER TABLE `post_profils`
  ADD CONSTRAINT `post_profils_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `responsables`
--
ALTER TABLE `responsables`
  ADD CONSTRAINT `responsables_personne_id_foreign` FOREIGN KEY (`personne_id`) REFERENCES `personnes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
