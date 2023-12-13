-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2023 at 04:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `amelias`
--

CREATE TABLE `amelias` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amelias`
--

INSERT INTO `amelias` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'S6k9LtFFFfEoDfLLQGf1HLBGDgqw5hnHh2oc2d7z.png', 'Elon Musk Bakal Beri Wikipedia Rp16 Triliun jika Mau Ubah Nama Jadi Dickipedia', '<p>Elon Musk, sosok yang dikenal sebagai orang terkaya di dunia, kerap kali menjadi sorotan media sejak mengambil alih Twitter dan mengganti namanya menjadi X. Selain menjadi pendiri SpaceX dan Tesla, dia juga aktif berbagi pemikiran di platform media sosial ini.</p>', '2023-11-13 22:39:06', '2023-11-13 22:39:06'),
(2, 'yc5F8ugvbriPI3DRHqnqKvnb574nBW1SCO2GNveC.png', 'Putusan MK Ramai di Medsos, Netizen Plesetkan Jadi \"Mahkamah Keluarga\"', '<p>Mahkamah Konstitusi (MK) baru-baru ini membuat keputusan kontroversial yang mengizinkan kepala daerah di bawah usia 40 tahun untuk maju dalam pemilihan presiden. Keputusan ini segera menjadi topik hangat di kalangan warganet Indonesia.</p>', '2023-11-13 22:40:18', '2023-11-13 22:40:18'),
(3, 'Re6LAl0p9lrEoWqUDEbdhYw7VyQqjgOUAT3bpLYr.png', 'Indonesia Ke-2, Ini Daftar 6 PLTS Terapung Terbesar di Dunia pada Tahun 2023', '<p>Pembangunan energi surya di seluruh dunia telah mengalami peningkatan yang pesat dalam beberapa tahun terakhir. Permintaan akan energi bersih yang semakin meningkat mendorong munculnya solusi inovatif. Salah satu inovasi tersebut adalah pengembangan proyek surya terapung, atau yang dikenal dengan &#39;floatovoltaics&#39;, sebagai alternatif dari instalasi surya berbasis darat. Pembangkit listrik tenaga surya terapung menawarkan manfaat yang sama dengan proyek surya berbasis darat, serta beberapa keunggulan unik berkat desainnya yang khas.</p>', '2023-11-13 22:46:34', '2023-11-13 22:46:34'),
(4, '6z3ONOC344UXIavmNMNVlgLrg64rdb0kqNi6uPZA.png', 'Situs KPU Kebobolan, 204 Juta Data Warga Indonesia Dijual Rp 1,1 M di Forum Hacker', '<p>Menjelang Pemilu 2024 yang akan dilaksanakan beberapa bulan lagi, situs resmi KPU (Komisi Pemilihan Umum) justru kebobolan oleh serangan hacker hingga mengakibatkan bocornya data pribadi 204 juta warga Indonesia.</p>\r\n\r\n<p>Kejadian ini&nbsp;pertama kali diungkap&nbsp;oleh konsultan keamanan siber Teguh Aprianto, pada Selasa, 28 November 2023, melalui unggahannya di&nbsp;platform media sosial X yang&nbsp;menampilkan potongan layar seorang&nbsp;hacker bernama Jimbo di forum hacker Breachforums dengan caption &quot;KPU.GO.ID 2024 Voters RAW DATABASE&quot;.</p>', '2023-12-08 20:32:08', '2023-12-08 20:36:55'),
(5, '83wZH52gjbbawvf1fu40cfUpGViFYBxgje6sbVDL.png', 'Revisi Kedua UU ITE: Sebarkan Konten Asusila untuk Membela Diri Tidak akan Dipidana', '<p>Pada tanggal 5 Desember 2023, Dewan Perwakilan Rakyat (DPR) menyetujui Rancangan Undang-Undang tentang Perubahan Kedua atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik (ITE) dalam rapat paripurna.</p>\r\n\r\n<p>Salah satu perubahan penting dalam revisi ini adalah pasal mengenai kesusilaan, yaitu pasal 27 ayat (1) UU ITE. Perubahan ini bertujuan untuk menciptakan ruang digital yang bersih, sehat, beretika, produktif, dan berkeadilan.</p>', '2023-12-08 20:34:52', '2023-12-08 20:34:52'),
(6, 'MDsC2ZLIHym9X1Iu44l08IAYxTGcPjKimQgsAdWa.png', 'Israel Persiapkan Pompa untuk Banjiri Terowongan Milik Hamas Menggunakan Air Laut', '<p>Seiring perkembangan konflik di Timur Tengah, strategi yang digunakan oleh Israel untuk mengatasi terowongan buatan pejuang Hamas di Jalur Gaza menjadi perhatian utama. Meskipun teknologi yang dimiliki Israel diakui memiliki keunggulan, namun kelihatannya belum sepenuhnya efektif dalam menangani tantangan ini. Salah satu pendekatan baru yang sedang dipertimbangkan adalah penggunaan air laut untuk menjinakkan terowongan tersebut.</p>\r\n\r\n<p>Dalam upaya untuk mengatasi ketidakmampuan teknologi saat ini, Israel sedang mempertimbangkan strategi baru yang cukup unik, yaitu membanjiri terowongan dengan air laut. Pendekatan ini diharapkan dapat secara efektif menjinakkan struktur terowongan yang sulit diakses. Meskipun terkesan sederhana, penggunaan air laut dapat menjadi solusi yang efektif untuk mengatasi tantangan ini.</p>', '2023-12-08 20:40:54', '2023-12-08 20:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_035630_create_amelias_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Amel', 'fvamelia@gmail.com', NULL, '$2y$10$p.ECsHwHTX3zUkgqmSwrwuzvoWrB0cYQp8bx7kaQmnrat7E.UMnJy', NULL, '2023-11-13 19:11:07', '2023-11-13 19:11:07'),
(3, 'admin', 'admin1@gmail.com', NULL, '$2y$10$2yBFdrBMX.U6oCjMv/YTr.2II01tz0d/pnQ2CZBCBVP4nOFY7TynK', NULL, '2023-12-12 19:13:33', '2023-12-12 19:13:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amelias`
--
ALTER TABLE `amelias`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `amelias`
--
ALTER TABLE `amelias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
