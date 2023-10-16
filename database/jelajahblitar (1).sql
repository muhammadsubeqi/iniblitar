-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 02:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jelajahblitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Wisata Sejarah', 'icon/bEywC93oLZiGeiqBfpw44D2ADgSqR2KQ4iepWoEj.jpg', 'wisata-sejarah', '2022-10-10 08:05:14', '2023-10-15 21:53:32'),
(5, 'Wisata Religi', 'icon/yXubVI2MROVDS35WSATpNkUbjgbV6ho0lO3Vwv7r.jpg', 'wisata-religi', '2022-10-10 08:05:30', '2023-10-15 21:53:42'),
(6, 'Wisata Alam', 'icon/gCwZ9tohqsQXUbYxxe9MhRth1Tti6nkCgKI9jbQu.png', 'wisata-alam', '2022-10-10 08:05:49', '2023-10-15 21:53:53'),
(7, 'Taman', 'icon/g5bGmonWyjT2CYU4WznWB8nItzBvVkaCO1FQm6f2.png', 'taman', '2022-10-10 08:06:12', '2023-10-15 21:53:59'),
(8, 'Restaurant', 'icon/qGUV4e3X7lH0O0fs0ALMgcMSCfeHC6y93klv2rCb.png', 'restaurant', '2022-10-10 08:07:11', '2023-10-15 21:54:07'),
(9, 'Caffee', 'icon/Lp1bnQeFgB5K1maeMMCNELEHMCTooqjqzKlWkAQ2.png', 'caffee', '2022-10-10 08:07:30', '2023-10-15 21:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `districts_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `categories_id`, `districts_id`, `name`, `content`, `images`, `map`, `created_at`, `updated_at`) VALUES
(13, 4, 12, 'Candi Penataran', '<p style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">Candi Panataran adalah sebuah candi berlatar belakang Hindu (Siwaitis) yang terletak Desa Penataran Kecamatan Nglegok, tepatnya di lereng barat daya Gunung Kelud, di sebelah utara Blitar jarak tempuh dari pusat kota kurang lebih 12 Km. Komplek Candi ini merupakan yang terbesar di Jawa Timur.</p><p style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">Candi ini di bangun dari Kerajaan Kediri dan dipergunakan sampai dengan Kerajaan Majapahit, Seperti pada umumnya relief candi di Jawa Timur yang dipahat berdasarkan analogi romantika hidup tokoh yang didharmakan di tempat tersebut, relief Ramayana dengan tokoh Rama dan Shinta, dan relief Krisnayana dengan tokoh Krisna dan Rukmini, yang dipahatkan pada dinding candi Penataran dapat dikatakan mirip dengan kisah Ken Arok dan Ken Dedes.</p><p style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">Keberadaan Wisata Candi Penataran sangat membantu mengangkat perekonomian masyarakat di Sekitar Candi, banyaknya kios-kios penjual sangat memudahkan wisatawan untuk mencari oleh-oleh, selain itu untuk lebih memikat Wisatawan Pemerintah Kabupaten Blitar juga membangun Fasilitas Wisata lain yaitu pemandian atau kolam renang yang jaraknya tiak terlalu jauh dari Kawasan Candi Penataran.</p>', 'content/eQeXChsE6Q2U36NqOhE9chh1E79XbQXAZd9YV3g8.jpg', 'https://maps.app.goo.gl/rVvaRtj7NaiYe3WK8', '2023-10-15 22:04:15', '2023-10-15 22:04:15'),
(14, 6, 24, 'Pantai Tambakrejo', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Pantai Tambakrejo merupakan pantai yang paling populer untuk semua kalangan di Blitar maupun luar Blitar. Salah satu pantai yang paling ramai dengan berbagai macam fasilitas yang ada di Blitar.</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Pantai ini terletak di Desa Tambakrejo, Kec. Wonotirto, Kab. Blitar. Jarak dari pusat kota kurang lebih 30km. Dibutuhkan waktu kurang lebih hampir 1 jam perjalanan karena kondisi jalan yang tidak terlalu luas.</p><div class=\"google-auto-placed ap_container\" style=\"box-sizing: inherit; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px; width: 740px; height: auto; clear: both; text-align: center;\"><ins data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-5353356447592021\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\" style=\"box-sizing: inherit; text-decoration-line: none; display: block; margin: auto; background-color: transparent; height: 0px;\"><div id=\"aswift_2_host\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" style=\"box-sizing: inherit; border: none; height: 0px; width: 740px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"740\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-5353356447592021&amp;output=html&amp;h=280&amp;adk=321493898&amp;adf=3859711278&amp;pi=t.aa~a.1381849204~i.3~rp.4&amp;w=740&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1697432687&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=1192221545&amp;ad_type=text_image&amp;format=740x280&amp;url=https%3A%2F%2Fjelajahblitar.com%2Fpantai-tambakrejo%2F&amp;fwr=0&amp;pra=3&amp;rh=185&amp;rw=740&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTUuMC4wIiwieDg2IiwiIiwiMTE4LjAuNTk5My43MCIsW10sMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMTguMC41OTkzLjcwIl0sWyJHb29nbGUgQ2hyb21lIiwiMTE4LjAuNTk5My43MCJdLFsiTm90PUE_QnJhbmQiLCI5OS4wLjAuMCJdXSwwXQ..&amp;dt=1697432687556&amp;bpp=2&amp;bdt=1472&amp;idt=2&amp;shv=r20231011&amp;mjsv=m202310100101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D0e35494c238883a6-229dc8f5ece40092%3AT%3D1697432688%3ART%3D1697432688%3AS%3DALNI_MZH5jmKujbZdEJOPgDfItICy2qyBw&amp;gpic=UID%3D00000c63502ee366%3AT%3D1697432688%3ART%3D1697432688%3AS%3DALNI_MbhLIfmHQPa50YSYCxi5tC_vjr60Q&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=434971669809&amp;frm=20&amp;pv=1&amp;ga_vid=682992692.1697432687&amp;ga_sid=1697432687&amp;ga_hid=1059333217&amp;ga_fc=1&amp;u_tz=420&amp;u_his=4&amp;u_h=768&amp;u_w=1366&amp;u_ah=720&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=305&amp;ady=1360&amp;biw=1349&amp;bih=643&amp;scr_x=0&amp;scr_y=89&amp;eid=44759926%2C44759875%2C31078594%2C44805099%2C44805112%2C31078663%2C31078665%2C31078670&amp;oid=2&amp;pvsid=3878477378796175&amp;tmod=1999728443&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C720%2C1366%2C643&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;td=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;xpc=4QSrjUIjkx&amp;p=https%3A//jelajahblitar.com&amp;dtd=24\" data-google-container-id=\"a!3\" data-google-query-id=\"CLb51cPl-YEDFdUfewcdv0IJ1w\" data-load-complete=\"true\" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border-width: 0px; border-style: initial; max-width: 100%; left: 0px; position: absolute; top: 0px; width: 740px; height: 0px;\"></iframe></div></ins></div><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Ada banyak hal yang bisa dilakukan di&nbsp;<a href=\"https://jelajahblitar.com/pantai-tambakrejo/\" style=\"box-sizing: inherit; transition: color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s; color: rgb(33, 86, 122);\">pantai tambakrejo</a>&nbsp;seperti bersantai bersama keluarga, memancing, bahkan menikmati aneka kuliner seafood dengan harga standard. Pantai ini juga merupakan satu-satunya pantai di Blitar yang memiliki TPI (Tempat Pelelangan Ikan).</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Sehingga kalau memang niat untuk beli aneka ikan, tidak ada tempat yang lebih baik dibandingkan pantai ini</p>', 'content/fWy4TS7V8CwG36DTfNe0cAsWZdhPqDqqM612vVnk.jpg', 'https://maps.app.goo.gl/zqvS8BHDcPsYGcay7', '2023-10-15 22:07:03', '2023-10-15 22:07:03'),
(15, 6, 7, 'Hutan Pinus Loji', '<p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 32px; color: rgb(27, 38, 44);\" class=\"\"><b>Lokasi Hutan Pinus Loji</b></p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Secara administratif masih termasuk kawasan Desa Tulungrejo, Kecamatan Gandusari, Kabupaten Blitar. Bisa dijangkau dengan mudah menggunakan kendaraan roda dua maupun roda empat. Kondisi jalan aspal dari Wlingi sampai ke lokasi</p><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Estimasi jarak tempuh dari Kota Blitar sekitar satu jam perjalanan. Kalau kamu mau pergi ke Batu melalui jalur alternatif Ngantang, kamu bisa mampir ke Hutan Pinus ini karena masih berada dalam satu kawasan.</p><h2 class=\"wp-block-heading\" id=\"wisata-sekitar-loji\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 32px; font-weight: 600; color: rgb(27, 38, 44);\">Wisata Sekitar Loji</h2><p style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; border: 0px; color: rgb(27, 38, 44); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 19px;\">Selain hutan pinus loji, ada beberapa destinasi wisata yang bisa kamu kunjungi ketika berada di kawasan ini. Diantaranya ada&nbsp;<a href=\"https://jelajahblitar.com/rambut-monte/\" data-type=\"post\" data-id=\"474\" style=\"box-sizing: inherit; transition: color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s; color: rgb(33, 86, 122);\">Telaga Rambut Monte</a>&nbsp;dengan warna air hijau tosca yang menarik atau mau mampir juga di&nbsp;<a href=\"https://jelajahblitar.com/perkebunan-teh-sirah-kencong/\" data-type=\"post\" data-id=\"409\" style=\"box-sizing: inherit; transition: color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s; color: rgb(33, 86, 122);\">Kebun Teh Sirah Kencong</a>&nbsp;yang jaraknya ya lumayan sih sebenernya.</p>', 'content/z5HYwX8ayHc23rv29kz4ZHvVXqXUY8ZvKhBCjxzQ.jpg', 'https://maps.app.goo.gl/5EYTV8BETqKbnM1F6', '2023-10-15 22:12:01', '2023-10-15 22:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `map`, `created_at`, `updated_at`) VALUES
(4, 'Bakung', 'https://goo.gl/maps/azckTKDg3JQhH86x9', '2022-10-10 08:09:54', '2022-10-10 08:09:54'),
(5, 'Binangun', 'https://goo.gl/maps/qYaFp2Gfg7oUFHnk9', '2022-10-10 08:10:24', '2022-10-10 08:10:24'),
(6, 'Doko', 'https://goo.gl/maps/cHU9HPx4DRTeUfii6', '2022-10-10 08:10:58', '2022-10-10 08:10:58'),
(7, 'Gandusari', 'https://goo.gl/maps/d5QMmCLDeXmKjZJc9', '2022-10-10 08:11:24', '2022-10-10 08:11:24'),
(8, 'Garum', 'https://goo.gl/maps/TpnehxxHHEMfe93s7', '2022-10-10 08:11:53', '2022-10-10 08:11:53'),
(9, 'Kademangan', 'https://goo.gl/maps/fhkzqyz5qRCUsGqh6', '2022-10-10 08:12:17', '2022-10-10 08:12:17'),
(10, 'Kanigoro', 'https://goo.gl/maps/NacktnuEpHv36g4V7', '2022-10-10 08:12:43', '2022-10-10 08:12:43'),
(11, 'Kesamben', 'https://goo.gl/maps/e97NvMqyNYnjK2tJA', '2022-10-10 08:13:11', '2022-10-10 08:13:11'),
(12, 'Nglegok', 'https://goo.gl/maps/PCeP123RkxhZJXAK9', '2022-10-10 08:13:33', '2022-10-10 08:13:33'),
(13, 'Panggungrejo', 'https://goo.gl/maps/ubcpkx2s2VpifJVx7', '2022-10-10 08:13:56', '2022-10-10 08:13:56'),
(14, 'Ponggok', 'https://goo.gl/maps/rWVvm4i3f1U7NAMe6', '2022-10-10 08:14:40', '2022-10-10 08:14:40'),
(15, 'Selopuro', 'https://goo.gl/maps/vze5aM7AZFsbZLXf7', '2022-10-10 08:15:07', '2022-10-10 08:15:07'),
(16, 'Selorejo', 'https://goo.gl/maps/EXJLpmo5JsBxNxQF8', '2022-10-10 08:15:43', '2022-10-10 08:15:43'),
(17, 'Srengat', 'https://goo.gl/maps/SESHPTDJ34m7f3FB9', '2022-10-10 08:16:06', '2022-10-10 08:16:06'),
(18, 'Sutojayan', 'https://goo.gl/maps/7Phhm88NmFCJDPC6A', '2022-10-10 08:16:29', '2022-10-10 08:16:29'),
(19, 'Talun', 'https://goo.gl/maps/ymDGtRUANxayigQh8', '2022-10-10 08:16:50', '2022-10-10 08:16:50'),
(20, 'Udanawu', 'https://goo.gl/maps/27AkUeXUoDZkrV9x9', '2022-10-10 08:17:10', '2022-10-10 08:17:10'),
(21, 'Wates', 'https://goo.gl/maps/JLdEJgyvW1Tics2u8', '2022-10-10 08:17:34', '2022-10-10 08:17:34'),
(22, 'Wlingi', 'https://goo.gl/maps/k3J3Sq7HEwZXCbuh9', '2022-10-10 08:17:57', '2022-10-10 08:17:57'),
(23, 'Wonodadi', 'https://goo.gl/maps/iAejm46HY9gBFcTw9', '2022-10-10 08:18:27', '2022-10-10 08:18:27'),
(24, 'Wonotirto', 'https://goo.gl/maps/xFVSCyvJkqn4dcUHA', '2022-10-10 08:18:52', '2022-10-10 08:18:52');

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
(5, '2022_09_13_024440_create_categories_table', 1),
(6, '2022_09_13_024513_create_districts_table', 1),
(7, '2022_09_13_024539_create_destinations_table', 1);

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
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$VelSrdzZiox68LgekCveFOCJtOkWd8TBzMIWvdvqfvNBl3n9g7ip.', NULL, '2022-10-07 23:01:42', '2022-10-07 23:01:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
