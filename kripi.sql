-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 03:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kripi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', '$2y$04$sJbJqpv7TH5RrgTPq0raburfQ6g1XOQtgd59Dgz.VCGlr8f5gUvm6', 'DC2nPnRWSwbMKJu4u3uBCdL4xgCX2f6bmus8J1ICTp12WuMcrjj5dg3IrVPX', '2018-12-28 20:30:36', '2018-12-28 20:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `artstyles`
--

CREATE TABLE `artstyles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artstyles`
--

INSERT INTO `artstyles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '3D style', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `art_basics`
--

CREATE TABLE `art_basics` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `art_basics`
--

INSERT INTO `art_basics` (`id`, `nama`, `opsi`, `created_at`, `updated_at`) VALUES
(1, 'Hitam Putih', 'Warna', NULL, NULL),
(2, 'Warna', 'Full', NULL, NULL),
(3, 'Warna Full', 'Warna', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `art_basic_post`
--

CREATE TABLE `art_basic_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `art_basic_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `art_basic_post`
--

INSERT INTO `art_basic_post` (`id`, `art_basic_id`, `post_id`) VALUES
(7, 1, 3),
(8, 2, 3),
(9, 3, 3),
(10, 1, 4),
(11, 1, 5),
(12, 2, 5),
(13, 3, 5),
(14, 2, 6),
(16, 3, 8),
(17, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `art_ups`
--

CREATE TABLE `art_ups` (
  `id` int(10) UNSIGNED NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `art_ups`
--

INSERT INTO `art_ups` (`id`, `option`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Full Warna', NULL, NULL, NULL),
(2, 'Tambah Jumlah Subyek', NULL, NULL, NULL),
(3, 'Komposisi Badan Full', NULL, NULL, NULL),
(4, 'Full Warna Latar', NULL, NULL, NULL),
(5, 'Jual Hak Cipta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `art_up_post`
--

CREATE TABLE `art_up_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `art_up_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `art_up_post`
--

INSERT INTO `art_up_post` (`id`, `art_up_id`, `post_id`) VALUES
(3, 1, 3),
(4, 2, 3),
(5, 3, 3),
(6, 4, 3),
(7, 5, 3),
(8, 1, 4),
(9, 2, 4),
(10, 3, 4),
(11, 4, 4),
(12, 5, 4),
(13, 1, 5),
(14, 2, 5),
(15, 3, 5),
(16, 4, 5),
(17, 5, 5),
(18, 1, 6),
(19, 1, 9),
(20, 2, 9),
(21, 3, 9),
(22, 4, 9),
(23, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `bgs`
--

CREATE TABLE `bgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bgs`
--

INSERT INTO `bgs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Satu Warna', NULL, NULL),
(2, 'Multi Warna', NULL, NULL),
(3, 'Full Warna', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bg_post`
--

CREATE TABLE `bg_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `bg_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bg_post`
--

INSERT INTO `bg_post` (`id`, `bg_id`, `post_id`, `created_at`, `updated_at`) VALUES
(7, 1, 3, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 1, 4, NULL, NULL),
(11, 1, 5, NULL, NULL),
(12, 2, 5, NULL, NULL),
(13, 3, 5, NULL, NULL),
(14, 1, 6, NULL, NULL),
(16, 3, 8, NULL, NULL),
(17, 1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `lokasi`, `rekening`, `about`) VALUES
(1, 'Pembeli Manja', 'coba@gmail.com', '$2y$10$q0ngzTZ0TX7fUk0552yYROOEcf1p39PEDbK0brpJvUqvgq0wml/H2', 'UHxSXmyyvXv0jDrf8bmNIJTLKqNPFWBvFBH4peFEVW46QyzFIZqeCGnkbEHo', '2018-12-28 20:45:17', '2018-12-30 13:36:58', 'Macanda', '1234566', 'Hy I\'m Lazy People'),
(2, 'Pembeli Keren', 'user@tese.com', '$2y$10$pK43VcsAHX/.rCMGwzZw2O2CW3GWH/oyoUfaHapWY6gi0fMrS/UUi', 'RLhs1z8Tw5bEdgDMyqXyj4wdyXzXzPv5KCyl6Iul20pvaVLYcBqVAnKkW7Cx', '2018-12-31 20:23:01', '2018-12-31 20:23:01', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '1 Orang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `category_id`, `post_id`) VALUES
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(8, 1, 8),
(9, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Close Up', NULL, NULL),
(2, 'Mid Body', NULL, NULL),
(3, 'Full Body', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_post`
--

CREATE TABLE `image_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_post`
--

INSERT INTO `image_post` (`id`, `image_id`, `post_id`, `created_at`, `updated_at`) VALUES
(7, 1, 3, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 1, 4, NULL, NULL),
(11, 1, 5, NULL, NULL),
(12, 2, 5, NULL, NULL),
(13, 3, 5, NULL, NULL),
(14, 2, 6, NULL, NULL),
(16, 1, 8, NULL, NULL),
(17, 2, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci,
  `buyer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_buyer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci,
  `nama_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `pesan`, `buyer_id`, `created_at`, `updated_at`, `nama_buyer`, `reply`, `nama_user`) VALUES
(4, 1, 'bro art kek gini waktu pengerjaannya berapa lama ?', 1, '2019-01-03 06:45:30', '2019-01-03 06:45:30', 'Pembeli Manja', NULL, NULL),
(5, 1, 'Bro ini harganya bisa nego ?', 2, '2019-01-03 06:47:06', '2019-01-03 06:47:06', 'Pembeli Keren', NULL, NULL),
(6, 1, 'HI broo', 2, '2019-01-03 07:56:03', '2019-01-03 07:56:03', 'Pembeli Keren', NULL, NULL),
(8, 1, NULL, 2, '2019-01-08 07:33:48', '2019-01-08 07:33:48', NULL, NULL, NULL),
(9, 1, NULL, 2, '2019-01-08 07:55:46', '2019-01-08 07:55:46', NULL, 'cantik', 'Uzumaki'),
(10, 1, 'mkasih lo', 2, '2019-01-08 08:09:00', '2019-01-08 08:09:00', NULL, NULL, NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2017_03_06_023521_create_admins_table', 1),
(9, '2017_03_06_053834_create_admin_role_table', 1),
(10, '2018_03_06_023523_create_roles_table', 1),
(11, '2018_12_29_033338_create_buyers_table', 2),
(12, '2018_11_03_152512_create_posts_table', 3),
(13, '2018_11_06_145031_create_artstyles_table', 3),
(14, '2018_11_06_164741_create_categories_table', 3),
(15, '2018_11_06_171412_create_art_basics_table', 3),
(16, '2018_11_06_173804_create_art_ups_table', 3),
(17, '2018_11_08_103220_create_category_post_table', 4),
(18, '2018_11_08_105011_create_art_basic_post_table', 4),
(19, '2018_11_08_105248_create_art_up_post_table', 4),
(20, '2018_11_11_061205_create_extra', 4),
(21, '2018_11_14_120139_create_subjects_table', 4),
(22, '2018_11_14_120330_create_post_subject_table', 4),
(23, '2018_11_14_122802_create_images_table', 4),
(24, '2018_11_14_122817_create_bgs_table', 4),
(25, '2018_11_14_124010_create_image_post_table', 4),
(26, '2018_11_14_124024_create_bg_post_table', 4),
(27, '2018_11_17_062305_create_profils_table', 4),
(28, '2018_11_17_081519_create_picture_table', 4),
(29, '2018_12_29_074211_create_dummy', 5),
(30, '2018_12_29_081642_create_dum', 6),
(32, '2018_12_29_152926_create_du', 7),
(35, '2018_12_30_140532_create_orders_table', 8),
(36, '2018_12_30_202414_cre', 9),
(38, '2018_12_30_220406_create_ulasans_table', 10),
(39, '2019_01_03_070244_create_messages_table', 11),
(40, '2019_01_03_134025_cc', 12),
(42, '2019_01_08_143052_cread', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instruksi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'PROSES',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `post_id`, `by`, `pic`, `gambar`, `orientasi`, `instruksi`, `total`, `status`, `created_at`, `updated_at`) VALUES
(13, 1, 8, 'bung', '1546268086.JPG', '1546312833.JPG', 'Landscape', 'perbesar kepalanya bro', 100000, 'BERHASIL', '2018-12-31 20:20:06', '2019-01-08 10:49:57'),
(14, 2, 6, 'Uzumaki', '1546097775.png', '1546313072.JPG', 'Landscape', 'tambah aksesori bro', 50000, 'BERHASIL', '2018-12-31 20:23:48', '2019-01-10 05:32:49'),
(15, 1, 6, 'Uzumaki', '1546097775.png', '1546497264.jpg', 'Landscape', 'Tambah dahinya bro', 50000, 'BERHASIL', '2019-01-02 23:33:48', '2019-01-08 10:48:11'),
(16, 2, 9, 'Uzumaki', '1546527058.jpg', '1546527176.jpg', 'Square', 'Tambah aksesoris bro', 13000, 'CANCEL', '2019-01-03 07:52:31', '2019-01-08 11:16:29'),
(17, 2, 9, 'Uzumaki', '1546527058.jpg', '1547123871.png', 'Landscape', 'Maantaaaa', 30000, 'TERIMA', '2019-01-10 05:37:32', '2019-01-10 06:40:00'),
(18, 2, 9, 'Uzumaki', '1546527058.jpg', '1547126462.png', 'Landscape', 'gfgh', 13000, 'TERIMA', '2019-01-10 06:20:36', '2019-01-10 06:28:25'),
(19, 2, 9, 'Uzumaki', '1546527058.jpg', '1547128000.jpg', 'Square', 'kuuiyu', 1000, 'PROSES', '2019-01-10 06:46:09', '2019-01-10 06:46:41'),
(20, 2, 9, 'Uzumaki', '1546527058.jpg', '1547128706.jpg', 'Landscape', 'cdfg', 1000, 'TERIMA', '2019-01-10 06:58:09', '2019-01-10 07:20:47');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `art_id` int(10) UNSIGNED DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tools` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devday` int(10) UNSIGNED NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_1` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extra_2` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extra_3` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extra_4` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `extra_5` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `nama`, `harga`, `art_id`, `deskripsi`, `tools`, `devday`, `post_image`, `created_at`, `updated_at`, `by`, `extra_1`, `extra_2`, `extra_3`, `extra_4`, `extra_5`) VALUES
(3, 'Contoh', 1000, 1, 'awerdtfyguhi', 'photoshop', 1, '1546069830.jpg', '2018-12-29 00:50:30', '2018-12-29 08:35:27', 'Uzumaki', 0, 0, 0, 0, 0),
(4, 'Hacking Guy', 5000, 1, 'dtfyugihjk', 'photoshop', 1, '1546096466.jpg', '2018-12-29 08:14:27', '2018-12-29 08:35:06', 'Uzumaki', 0, 0, 0, 0, 0),
(5, 'Brace IDM', 4000, 1, 'rtdyvhbjbkbjkbjbj', 'photoshop', 1, '1546096751.png', '2018-12-29 08:19:12', '2018-12-29 08:34:16', 'artis', 0, 0, 0, 0, 0),
(6, 'Lukomotif', 50000, 1, 'erdtfygh', 'photoshop', 12, '1546097775.png', '2018-12-29 08:36:16', '2018-12-29 08:36:16', 'Uzumaki', 0, 0, 0, 0, 0),
(8, 'baju sexi', 100000, 1, 'Beli ajah', 'photoshop', 1, '1546268086.JPG', '2018-12-31 07:54:50', '2018-12-31 07:54:50', 'bung', 0, 0, 0, 0, 0),
(9, 'Vectorina Pertama', 1000, 1, 'Ini pertama', 'Corel dan photoshop', 3, '1546527058.jpg', '2019-01-03 07:50:59', '2019-01-03 07:50:59', 'Uzumaki', 12000, 1000, 2000, 1000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `post_subject`
--

CREATE TABLE `post_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_subject`
--

INSERT INTO `post_subject` (`id`, `post_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(7, 3, 1, NULL, NULL),
(8, 3, 2, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 5, 1, NULL, NULL),
(12, 5, 2, NULL, NULL),
(13, 5, 3, NULL, NULL),
(14, 6, 2, NULL, NULL),
(16, 8, 1, NULL, NULL),
(17, 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super', '2018-12-28 20:30:36', '2018-12-28 20:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '1 Subyek', NULL, NULL),
(2, '2 Subyek', NULL, NULL),
(3, '3 atau lebih', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ulasans`
--

CREATE TABLE `ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bintang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ulasans`
--

INSERT INTO `ulasans` (`id`, `name`, `bintang`, `ulasan`, `post_id`, `created_at`, `updated_at`) VALUES
(3, 'Pembeli Manja', '5', 'Mantap, konichiwa..', 3, '2018-12-30 17:35:32', '2018-12-30 17:35:32'),
(4, 'Pembeli Manja', '9', 'MANTAP', 8, '2018-12-31 08:04:29', '2018-12-31 08:04:29'),
(5, 'Pembeli Keren', '5', 'mantap bro terus berkarya deh', 6, '2018-12-31 20:28:42', '2018-12-31 20:28:42'),
(6, 'Pembeli Keren', '5', 'mantap jiwa', 9, '2019-01-03 07:55:10', '2019-01-03 07:55:10'),
(7, 'Pembeli Keren', '5', 'good job dude', 9, '2019-01-08 10:51:19', '2019-01-08 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lokasi`, `rekening`, `about`) VALUES
(1, 'Uzumaki', 'user@tese.com', NULL, '$2y$10$xFqm3DKsX2N9Qimk0GagzeVcYWbyK2K7ubueLt9xXJ3lnHk0vORse', '7u7EaqKFPLRKRFVwDQQAB3Ebm3l9zXkC1hE9zlUBmKgEj1qdZk3cNbviHQ7k', '2018-12-28 20:43:32', '2018-12-29 01:39:42', 'Daysuke', '12345', 'I\'m the Lyon'),
(2, 'artis', 'superadministrator@app.com', NULL, '$2y$10$VLfycFssPNFMFZb6XAz9A.rw0LbF8kSbZ1mPc168x8ghD2hmzxL.a', '4hBIPEX9wyJbgICLv95c0GvPcoQ9Px7MAW1w9pR5zLkZj21j9TED2RWDIfYw', '2018-12-29 00:32:07', '2018-12-29 00:32:07', NULL, NULL, NULL),
(3, 'bung', 'bung@gmail.com', NULL, '$2y$10$x5HS6GkDJLmG5THe10VrN.HOPoUDtnHVQlRgEZZnl.bgfhOj0tCga', 'yL2FR4azsnEwI8Go61nGQ4ejUgLqIL5cAc6MRqZlErugpE4op50ufcsz6PhH', '2018-12-31 07:50:19', '2018-12-31 07:50:19', NULL, NULL, NULL);

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
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `artstyles`
--
ALTER TABLE `artstyles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_basics`
--
ALTER TABLE `art_basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_basic_post`
--
ALTER TABLE `art_basic_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `art_basic_post_art_basic_id_foreign` (`art_basic_id`),
  ADD KEY `art_basic_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `art_ups`
--
ALTER TABLE `art_ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_up_post`
--
ALTER TABLE `art_up_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `art_up_post_art_up_id_foreign` (`art_up_id`),
  ADD KEY `art_up_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `bgs`
--
ALTER TABLE `bgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg_post`
--
ALTER TABLE `bg_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bg_post_bg_id_foreign` (`bg_id`),
  ADD KEY `bg_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buyers_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_post`
--
ALTER TABLE `image_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_post_image_id_foreign` (`image_id`),
  ADD KEY `image_post_post_id_foreign` (`post_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_buyer_id_foreign` (`buyer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_subject`
--
ALTER TABLE `post_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_subject_post_id_foreign` (`post_id`),
  ADD KEY `post_subject_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasans_post_id_foreign` (`post_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artstyles`
--
ALTER TABLE `artstyles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `art_basics`
--
ALTER TABLE `art_basics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `art_basic_post`
--
ALTER TABLE `art_basic_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `art_ups`
--
ALTER TABLE `art_ups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `art_up_post`
--
ALTER TABLE `art_up_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bgs`
--
ALTER TABLE `bgs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bg_post`
--
ALTER TABLE `bg_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_post`
--
ALTER TABLE `image_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_subject`
--
ALTER TABLE `post_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `art_basic_post`
--
ALTER TABLE `art_basic_post`
  ADD CONSTRAINT `art_basic_post_art_basic_id_foreign` FOREIGN KEY (`art_basic_id`) REFERENCES `art_basics` (`id`),
  ADD CONSTRAINT `art_basic_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `art_up_post`
--
ALTER TABLE `art_up_post`
  ADD CONSTRAINT `art_up_post_art_up_id_foreign` FOREIGN KEY (`art_up_id`) REFERENCES `art_ups` (`id`),
  ADD CONSTRAINT `art_up_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `bg_post`
--
ALTER TABLE `bg_post`
  ADD CONSTRAINT `bg_post_bg_id_foreign` FOREIGN KEY (`bg_id`) REFERENCES `bgs` (`id`),
  ADD CONSTRAINT `bg_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `image_post`
--
ALTER TABLE `image_post`
  ADD CONSTRAINT `image_post_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  ADD CONSTRAINT `image_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `buyers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_subject`
--
ALTER TABLE `post_subject`
  ADD CONSTRAINT `post_subject_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD CONSTRAINT `ulasans_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
