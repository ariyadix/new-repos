-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_akre`
--

-- --------------------------------------------------------

--
-- Table structure for table `addsi`
--

CREATE TABLE `addsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jns_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sppdd_sm` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sppdd_komtj` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sppdd_komlan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sppdd_komwan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint(20) UNSIGNED NOT NULL,
  `old_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(1023) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `tgl_lahir`, `tmp_lahir`, `alamat`, `img_url`, `prodi_id`, `created_at`, `updated_at`) VALUES
(1, 'dos001', 'Raditya Wijaya M.Farm', '2013-09-02', 'Bitung', 'Jr. Raden No. 257, Pariaman 37656, Sumbar', '1.jpg', 1, NULL, NULL),
(2, 'dos002', 'Gandi Banawa Gunarto S.E.I', '1994-08-25', 'Pekanbaru', 'Gg. Mulyadi No. 582, Makassar 44789, DIY', '2.jpg', 1, NULL, NULL),
(3, 'dos003', 'Ulva Kusmawati', '2002-05-19', 'Pekalongan', 'Jln. Bakhita No. 238, Surabaya 96807, Kaltara', '3.jpg', 1, NULL, NULL),
(4, 'dos004', 'Patricia Hastuti', '1998-04-30', 'Tegal', 'Kpg. Sutarto No. 663, Banda Aceh 15022, Riau', '4.jpg', 1, NULL, NULL),
(5, 'dos005', 'Melinda Gasti Hartati S.E.', '1992-06-19', 'Bitung', 'Jln. Aceh No. 150, Bogor 76482, Sulteng', '5.jpg', 1, NULL, NULL),
(6, 'dos006', 'Kawaca Bagas Pratama', '2007-03-31', 'Semarang', 'Gg. Bara No. 234, Administrasi Jakarta Barat 26829, DKI', '6.jpg', 1, NULL, NULL),
(7, 'dos007', 'Genta Lailasari S.Gz', '1977-10-02', 'Langsa', 'Gg. Sukajadi No. 621, Bontang 40069, Sumut', '7.jpg', 1, NULL, NULL),
(8, 'dos008', 'Ganep Mitra Pradana S.Farm', '1981-09-09', 'Banjarbaru', 'Ki. Bambu No. 750, Kendari 37772, Kaltara', '8.jpg', 1, NULL, NULL),
(9, 'dos009', 'Jane Yuliarti', '1975-09-12', 'Banjar', 'Psr. Umalas No. 339, Semarang 38585, Papua', '9.jpg', 1, NULL, NULL),
(10, 'dos010', 'Umar Thamrin', '2021-05-09', 'Sabang', 'Jr. Ahmad Dahlan No. 199, Administrasi Jakarta Barat 82527, Sumbar', '10.jpg', 1, NULL, NULL),
(11, 'dos011', 'Mariadi Widodo', '1996-04-09', 'Madiun', 'Dk. Basudewo No. 754, Banjar 91310, Sulsel', '11.jpg', 1, NULL, NULL),
(12, 'dos012', 'Vega Permadi', '2006-03-23', 'Bandung', 'Gg. Ikan No. 69, Pontianak 89666, Sumut', '12.jpg', 1, NULL, NULL),
(13, 'dos013', 'Rahayu Yuniar', '1975-04-30', 'Sibolga', 'Ki. Bara No. 389, Pasuruan 46113, Aceh', '13.jpg', 1, NULL, NULL),
(14, 'dos014', 'Putri Tami Suryatmi M.Ak', '1978-11-04', 'Makassar', 'Psr. Fajar No. 987, Samarinda 39617, NTT', '14.jpg', 1, NULL, NULL),
(15, 'dos015', 'Luwar Santoso', '1993-04-17', 'Yogyakarta', 'Gg. Jend. Sudirman No. 775, Semarang 13644, DKI', '15.jpg', 1, NULL, NULL),
(16, 'dos016', 'Putri Prastuti', '2005-06-15', 'Tidore Kepulauan', 'Jr. Siliwangi No. 15, Manado 89566, Sulsel', '16.jpg', 1, NULL, NULL),
(17, 'dos017', 'Galiono Siregar S.Farm', '2017-07-08', 'Bekasi', 'Jln. Baranang Siang Indah No. 399, Tarakan 37536, Bali', '17.jpg', 1, NULL, NULL),
(18, 'dos018', 'Edi Firmansyah', '1988-02-09', 'Sawahlunto', 'Kpg. Bakau No. 488, Batu 27390, Bengkulu', '18.jpg', 1, NULL, NULL),
(19, 'dos019', 'Sakura Prastuti S.I.Kom', '2004-09-01', 'Bima', 'Jln. Bambu No. 566, Tomohon 21634, Jabar', '19.jpg', 1, NULL, NULL),
(20, 'dos020', 'Vera Kayla Uyainah', '1971-03-02', 'Cimahi', 'Psr. Gading No. 734, Banjarbaru 36340, Papua', '20.jpg', 1, NULL, NULL),
(21, 'DOSENTA001', 'Violet Laksmiwati', '1997-09-29', 'Metro', 'Psr. W.R. Supratman No. 734, Pekanbaru 26888, Aceh', '1.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `tl` int(11) DEFAULT NULL,
  `jml_lulusan` int(11) DEFAULT NULL,
  `ipk_min` decimal(11,2) DEFAULT NULL,
  `ipk_rerata` decimal(11,2) DEFAULT NULL,
  `ipk_maks` decimal(11,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jcmb`
--

CREATE TABLE `jcmb` (
  `ta` int(11) DEFAULT NULL,
  `dy_tmpng` int(11) DEFAULT NULL,
  `jcm_pendftr` int(11) DEFAULT NULL,
  `jcm_lulus` int(11) DEFAULT NULL,
  `jmb_reg` int(11) DEFAULT NULL,
  `jmb_transfer` int(11) DEFAULT NULL,
  `jma_reg` int(11) DEFAULT NULL,
  `jma_transfer` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kbkl`
--

CREATE TABLE `kbkl` (
  `tl` int(11) DEFAULT NULL,
  `jml_lus` int(11) DEFAULT NULL,
  `lus_trlck` int(11) DEFAULT NULL,
  `prfsi_infokom` int(11) DEFAULT NULL,
  `prfsi_non_info` int(11) DEFAULT NULL,
  `ltk_multi` int(11) DEFAULT NULL,
  `ltk_nas` int(11) DEFAULT NULL,
  `ltk_wir` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prfsi_noninfokom` int(11) DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kpl`
--

CREATE TABLE `kpl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jns_kemp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tkp_ps` decimal(11,2) DEFAULT NULL,
  `tkp_b` decimal(11,2) DEFAULT NULL,
  `tkp_c` decimal(11,2) DEFAULT NULL,
  `tkp_k` decimal(11,2) DEFAULT NULL,
  `rnc_tndlnjt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ktk`
--

CREATE TABLE `ktk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jtk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jtk_s3` int(11) DEFAULT NULL,
  `jtk_s2` int(11) DEFAULT NULL,
  `jtk_s1` int(11) DEFAULT NULL,
  `jtk_d4` int(11) DEFAULT NULL,
  `jtk_d3` int(11) DEFAULT NULL,
  `jtk_d2` int(11) DEFAULT NULL,
  `jtk_d1` int(11) DEFAULT NULL,
  `jtk_sm` int(11) DEFAULT NULL,
  `uk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ktw`
--

CREATE TABLE `ktw` (
  `ta` int(11) DEFAULT NULL,
  `jmd` int(11) DEFAULT NULL,
  `jml_6` int(11) DEFAULT NULL,
  `jml_5` int(11) DEFAULT NULL,
  `jml_4` int(11) DEFAULT NULL,
  `jml_3` int(11) DEFAULT NULL,
  `jml_2` int(11) DEFAULT NULL,
  `jml_1` int(11) DEFAULT NULL,
  `akhir_ts` int(11) DEFAULT NULL,
  `jl_ats` int(11) DEFAULT NULL,
  `rerata_masastudi` decimal(11,2) DEFAULT NULL,
  `jml_mhs` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tgl_lahir`, `tmp_lahir`, `alamat`, `img_url`, `prodi_id`, `created_at`, `updated_at`) VALUES
(1, '1910817210001', 'Kairav Jasmani Simbolon S.E.', '1997-12-04', 'Jambi', 'Dk. Raden No. 603, Bontang 73383, Kaltara', '1.jpg', 1, NULL, NULL),
(2, '1910817210002', 'Danang Marpaung M.Ak', '2009-08-08', 'Tegal', 'Dk. Achmad Yani No. 305, Tebing Tinggi 96447, Papua', '2.jpg', 1, NULL, NULL),
(3, '1910817210003', 'Jasmani Waskita', '1998-06-14', 'Samarinda', 'Gg. Abdul. Muis No. 869, Padang 90510, Sumsel', '3.jpg', 1, NULL, NULL),
(4, '1910817210004', 'Kasim Estiono Pradipta', '2002-07-03', 'Bitung', 'Dk. Gatot Subroto No. 605, Solok 72471, Sumut', '4.jpg', 1, NULL, NULL),
(5, '1910817210005', 'Dalima Eva Rahayu S.E.', '2009-07-11', 'Tidore Kepulauan', 'Jr. Ciwastra No. 989, Tidore Kepulauan 92652, Jambi', '5.jpg', 1, NULL, NULL),
(6, '1910817210006', 'Elisa Kuswandari', '2018-03-12', 'Metro', 'Psr. Sugiyopranoto No. 285, Kendari 60252, Sulteng', '6.jpg', 1, NULL, NULL),
(7, '1910817210007', 'Yani Zaenab Hasanah S.H.', '1988-11-21', 'Mataram', 'Kpg. Salatiga No. 840, Tanjung Pinang 15202, Jatim', '7.jpg', 1, NULL, NULL),
(8, '1910817210008', 'Farah Chelsea Novitasari', '2018-01-10', 'Batu', 'Jr. Ronggowarsito No. 993, Mojokerto 12925, Sulteng', '8.jpg', 1, NULL, NULL),
(9, '1910817210009', 'Bagus Hardi Ardianto S.Pt', '2018-10-25', 'Samarinda', 'Ds. Bagas Pati No. 40, Kupang 26977, Jabar', '9.jpg', 1, NULL, NULL),
(10, '1910817210010', 'Arsipatra Utama', '1970-09-27', 'Binjai', 'Kpg. Teuku Umar No. 735, Tegal 57932, Papua', '10.jpg', 1, NULL, NULL),
(11, '1910817210011', 'Cagak Balapati Waluyo S.H.', '1972-03-22', 'Pekanbaru', 'Gg. Bara Tambar No. 660, Banjar 24374, NTB', '11.jpg', 1, NULL, NULL),
(12, '1910817210012', 'Indah Agnes Wulandari', '1976-08-27', 'Cimahi', 'Dk. Cokroaminoto No. 367, Madiun 94912, Papua', '12.jpg', 1, NULL, NULL),
(13, '1910817210013', 'Edi Damanik', '1986-09-13', 'Pekanbaru', 'Psr. Bazuka Raya No. 701, Bima 47385, Sulbar', '13.jpg', 1, NULL, NULL),
(14, '1910817210014', 'Maya Safitri', '2003-12-20', 'Samarinda', 'Psr. Untung Suropati No. 607, Denpasar 75800, Sulbar', '14.jpg', 1, NULL, NULL),
(15, '1910817210015', 'Saadat Maulana', '2015-05-24', 'Tual', 'Ki. Bara No. 488, Lhokseumawe 94647, Jambi', '15.jpg', 1, NULL, NULL),
(16, '1910817210016', 'Laila Usamah', '1983-03-09', 'Bandung', 'Ds. Yogyakarta No. 766, Denpasar 62784, Kaltim', '16.jpg', 1, NULL, NULL),
(17, '1910817210017', 'Jarwa Gunarto', '2019-05-19', 'Binjai', 'Kpg. Padma No. 605, Bandar Lampung 76221, Papua', '17.jpg', 1, NULL, NULL),
(18, '1910817210018', 'Icha Ratih Fujiati', '1988-11-11', 'Binjai', 'Jr. Sukabumi No. 456, Cimahi 62454, Riau', '18.jpg', 1, NULL, NULL),
(19, '1910817210019', 'Saka Jailani', '1990-10-14', 'Ambon', 'Jr. Honggowongso No. 919, Tangerang Selatan 71710, Sumut', '19.jpg', 1, NULL, NULL),
(20, '1910817210020', 'Rina Kani Pudjiastuti S.I.Kom', '1980-11-21', 'Kotamobagu', 'Ds. Bagonwoto  No. 521, Jambi 81919, NTB', '20.jpg', 1, NULL, NULL),
(21, 'koti001', 'Nilam Zizi Pratiwi', '2021-06-14', 'Payakumbuh', 'Kpg. Bara Tambar No. 384, Administrasi Jakarta Barat 48495, Sumbar', '1.jpg', 1, NULL, NULL),
(22, 'koti002', 'Cengkal Kambali Lazuardi S.Gz', '1992-10-06', 'Ambon', 'Dk. Bacang No. 34, Probolinggo 44958, NTB', '2.jpg', 1, NULL, NULL),
(23, 'koti003', 'Eva Widiastuti S.T.', '2000-08-19', 'Payakumbuh', 'Ds. Baranang Siang No. 973, Administrasi Jakarta Timur 36117, Bali', '3.jpg', 1, NULL, NULL),
(24, 'koti004', 'Nilam Handayani', '1987-09-12', 'Pekanbaru', 'Dk. Thamrin No. 269, Administrasi Jakarta Barat 62870, DKI', '4.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `matriks`
--

CREATE TABLE `matriks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `row_id` int(11) DEFAULT NULL,
  `t_group` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `skor` double(8,2) DEFAULT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `komentar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_09_01_000000_create_prodi_table', 1),
(4, '2021_09_01_011515_create_dosen_table', 1),
(5, '2021_09_01_100000_create_users_table', 1),
(6, '2022_01_12_021236_create_mahasiswa_table', 1),
(7, '2022_01_12_021240_create_reviewer_table', 1),
(8, '2022_01_24_174121_create_audits_table', 1),
(9, '2022_02_04_070048_create_permission_table', 1),
(10, '2022_02_04_121130_rename_permission_column', 1),
(11, '2022_03_16_094513_create_led_table', 1),
(12, '2022_04_10_014009_create_matriks_table', 1),
(13, '2022_04_10_084911_create_table_jcmb', 1),
(14, '2022_04_10_094905_create_utils_table', 1),
(15, '2022_04_26_011530_add_comment_collumn_matriks_table', 1),
(16, '2022_05_15_092006_create_lkps_bulk_tables', 1),
(17, '2022_06_06_012131_change_type_audit_column', 1),
(18, '2022_06_06_031459_change_id_jcmb_column', 1),
(19, '2022_06_07_130457_fix_column_lkps', 1),
(20, '2022_06_07_204517_change_column_addsi', 1),
(21, '2022_06_07_211530_add_collumns_spps_table', 1),
(22, '2022_06_09_005643_change_column_reratadtpr', 1),
(23, '2022_06_09_013325_change_column_sarpra', 1),
(24, '2022_06_09_013807_change_column_ipk', 1),
(25, '2022_06_09_014005_change_column_ktl', 1),
(26, '2022_06_09_014642_change_column_kpl', 1),
(27, '2022_06_09_014903_change_column_mt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mt`
--

CREATE TABLE `mt` (
  `tl` int(11) DEFAULT NULL,
  `jml_lus` int(11) DEFAULT NULL,
  `jml_lust` int(11) DEFAULT NULL,
  `rerata_tunggu` decimal(11,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`access`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `access`, `created_at`, `updated_at`) VALUES
('101', '\"[1,2]\"', NULL, NULL),
('102', '\"[1,2]\"', NULL, NULL),
('301', '\"[1,2]\"', NULL, NULL),
('401', '\"[1,2]\"', NULL, NULL),
('402', '\"[1,2]\"', NULL, NULL),
('501', '\"[1,2]\"', NULL, NULL),
('502', '\"[1,2]\"', NULL, NULL),
('503', '\"[1,2]\"', NULL, NULL),
('901', '\"[1,2]\"', NULL, NULL),
('902', '\"[1,2]\"', NULL, NULL),
('903', '\"[1,2]\"', NULL, NULL),
('904', '\"[1,2]\"', NULL, NULL),
('905', '\"[1,2]\"', NULL, NULL),
('906', '\"[1,2]\"', NULL, NULL);

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
-- Table structure for table `pnpkm`
--

CREATE TABLE `pnpkm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dtpr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pub_infokom` int(11) DEFAULT NULL,
  `pen_infokom` int(11) DEFAULT NULL,
  `pen_infokomHKI` int(11) DEFAULT NULL,
  `pkm_infokomadop` int(11) DEFAULT NULL,
  `pkm_infokomhki` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_pembukaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sk_pembukaan` date DEFAULT NULL,
  `pejabat_sk_pembukaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thn_menerima_mhs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_ban_pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`, `alamat`, `email`, `website`, `no_sk_pembukaan`, `tgl_sk_pembukaan`, `pejabat_sk_pembukaan`, `thn_menerima_mhs`, `akreditasi`, `no_sk_ban_pt`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reratadtpr`
--

CREATE TABLE `reratadtpr` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_dosen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks_pss` decimal(11,2) DEFAULT NULL,
  `skd_psl_pts` decimal(11,2) DEFAULT NULL,
  `skd_ptl` decimal(11,2) DEFAULT NULL,
  `skd_penelitian` decimal(11,2) DEFAULT NULL,
  `skd_pengmas` decimal(11,2) DEFAULT NULL,
  `sksmen_pts` decimal(11,2) DEFAULT NULL,
  `sksmen_ptl` decimal(11,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rev_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `rev_id`, `nama`, `instansi`, `tgl_lahir`, `tmp_lahir`, `alamat`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'rev001', 'Reviewer 1', NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL),
(2, 'rev002', 'Reviewer 2', NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL),
(3, 'rev003', 'Reviewer 3', NULL, NULL, NULL, NULL, 'default.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sarpra`
--

CREATE TABLE `sarpra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sar_pra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dy_tamp` int(11) DEFAULT NULL,
  `luasr` decimal(11,2) DEFAULT NULL,
  `jmd` int(11) DEFAULT NULL,
  `jam_lay` int(11) DEFAULT NULL,
  `prngkt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spps`
--

CREATE TABLE `spps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml` int(11) DEFAULT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ts` int(11) DEFAULT NULL,
  `sd_type` int(11) DEFAULT NULL,
  `bukti_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 2,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dosen_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mhs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rev_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `level`, `password`, `remember_token`, `prodi_id`, `dosen_id`, `mhs_id`, `rev_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'clara.hassanah@example.com', 'DOS001', 3, '$2y$10$/S8uQrUPSjGc3Uyk.Ht2IeGUrDK7rBsj/8BnMSdWOsRBvnTOrz5q.', 'VjZ9zEPMgN', NULL, 1, NULL, NULL, NULL, NULL),
(2, NULL, 'aris28@example.com', 'DOS002', 3, '$2y$10$ifIBHKKWwqR8QZbzhUQyEOeLeftt6Y/Wozt5funskj6drYp2/XQWG', 'oxWyZLqW06', NULL, 2, NULL, NULL, NULL, NULL),
(3, NULL, 'oni94@example.com', 'DOS003', 3, '$2y$10$uQXBR6WojFICvqzoLVXM7udzADl.0mnVKnQvy8ybB45Fl2Q7Dnliu', 'YSRi1N4Huc', NULL, 3, NULL, NULL, NULL, NULL),
(4, NULL, 'saptono.kartika@example.org', 'DOS004', 3, '$2y$10$3efxBtsjVVqtnaoSPT89suqPwRpM2KJo8kC347FPQyYTrJzSKkqda', 'Np7TnzNCCs', NULL, 4, NULL, NULL, NULL, NULL),
(5, NULL, 'damar54@example.org', 'DOS005', 3, '$2y$10$wlaf/0fzKBlAPjjObcBQDuuc7sBmb31w7RQEi64KlZcSBhIRIxSRu', 'rSQXNy0OEe', NULL, 5, NULL, NULL, NULL, NULL),
(6, NULL, 'lmaheswara@example.net', 'DOS006', 3, '$2y$10$7vieT/AfmpLUDFWyi06CXuLndpErpNtxaTqhwawUvYhEdl4YfMzW2', 'pAY1BBgdy0', NULL, 6, NULL, NULL, NULL, NULL),
(7, NULL, 'cengkir.tampubolon@example.org', 'DOS007', 3, '$2y$10$prSLaKTPDuEHwyd0E.GIEev4IfQ5GzlrOl9gKv3dw6fMLZ/fw4DH2', '3GMXvB8rnz', NULL, 7, NULL, NULL, NULL, NULL),
(8, NULL, 'ian47@example.org', 'DOS008', 3, '$2y$10$fo2GhyS/W3/JmJhKRafOOeMJ/4Z36JA5CLckuJj1YgbjC1nDsmMt6', 'TvpwmlwpC1', NULL, 8, NULL, NULL, NULL, NULL),
(9, NULL, 'permata.umay@example.com', 'DOS009', 3, '$2y$10$hx/DTD88qf/0ATMfWhqE.uInTlcCNd5cQRJNFr1WPBN117m1Hy0Wu', 'ZObmmaFtgg', NULL, 9, NULL, NULL, NULL, NULL),
(10, NULL, 'paris01@example.org', 'DOS010', 3, '$2y$10$stuAatW9RiuczI4xMINKY.xAm7J3N/TdLt6QrIEwpBKW30CLZKgry', 'refgqhpFSj', NULL, 10, NULL, NULL, NULL, NULL),
(11, NULL, 'onajmudin@example.net', 'DOS011', 3, '$2y$10$M99x/YbYAJdjW0ZVfUE7fOMZxgiyBLnzvWnyMJm.L6YKvPMr9g5xe', 'YBwPGKKlDt', NULL, 11, NULL, NULL, NULL, NULL),
(12, NULL, 'wibowo.gamblang@example.net', 'DOS012', 3, '$2y$10$sxVoQhbpmJ07Dju/DY/izOn2jBWL0RbzYymJk3pBmDzLBUSVF8d/.', '7OVkVmIk8a', NULL, 12, NULL, NULL, NULL, NULL),
(13, NULL, 'eka.padmasari@example.net', 'DOS013', 3, '$2y$10$qQ6nznXOyYaY9iYMept6vetQqosqfnFsf0fVAQxkbZBGrOqK3QOb6', 'HQAW8LswnW', NULL, 13, NULL, NULL, NULL, NULL),
(14, NULL, 'vanya44@example.com', 'DOS014', 3, '$2y$10$tBHlyvX023VWsR.xfJBxnekIre5fPrwAkM.AgibQTkaTy3eYAcnXy', 't1NEUT32gJ', NULL, 14, NULL, NULL, NULL, NULL),
(15, NULL, 'klestari@example.com', 'DOS015', 3, '$2y$10$6oizhVcXUNrb4OipYSJE/uJXcr8LDqTlK2S1.F3zr32sczDC6WLma', 'Hzlq1gkex1', NULL, 15, NULL, NULL, NULL, NULL),
(16, NULL, 'maimunah.safitri@example.net', 'DOS016', 3, '$2y$10$MFgS/3Dc4I0qgYpKfBFNKeZHCXsYbNMOgz3Kd5fHUB3la8Drbb/se', 'A4rmDUhaLF', NULL, 16, NULL, NULL, NULL, NULL),
(17, NULL, 'safina.mardhiyah@example.org', 'DOS017', 3, '$2y$10$T79BcrBvM6HtLSfB8tZYTuA/A6EY79htDJmhAGQclxkS24IkYLxcG', 'cRlK6RTzzM', NULL, 17, NULL, NULL, NULL, NULL),
(18, NULL, 'asihombing@example.org', 'DOS018', 3, '$2y$10$OM1OwLrJkXiMkZn.U6zJx.bbmRvUUyZe6optRFO0oMkM/HuSdyFmW', 'xATnJS5Etm', NULL, 18, NULL, NULL, NULL, NULL),
(19, NULL, 'bfirmansyah@example.com', 'DOS019', 3, '$2y$10$W1UuDYShmKOe.k6VNWbK0u7Mx3HcVttlYXUOQXAlhrkiTXG.xRVjO', 'HPYaJ8bATc', NULL, 19, NULL, NULL, NULL, NULL),
(20, NULL, 'citra.tamba@example.org', 'DOS020', 3, '$2y$10$qLEYqhCbuk8wrucQz2i4ZOaMyk1ne43FDRXu/5K5GSd8JYwlNMAua', 'Cf39RImbSm', NULL, 20, NULL, NULL, NULL, NULL),
(21, NULL, 'sihombing.bambang@example.org', 'DOSENTA001', 3, '$2y$10$br2h84A7r.yXvtsHjy/EkOUnNSFlHKngDg5CkaN8Hlb7OxUr/TnUq', 'xfgIrwWS04', NULL, 21, NULL, NULL, NULL, NULL),
(22, NULL, 'jatmiko.sudiati@example.com', '1910817210001', 4, '$2y$10$D4xJ38VN3oYpYEWghnldz.wanGR9vZJ7PyxjS6OZOk69FHVHLa/p.', 'PAiPmIe2fI', NULL, NULL, 1, NULL, NULL, NULL),
(23, NULL, 'jprasetyo@example.net', '1910817210002', 4, '$2y$10$NWJEydB06k0JtyzsVPGyUef8VuXn54ll7Wj2MeAWoWI236mXMnbS.', 'Ik3zukuSjq', NULL, NULL, 2, NULL, NULL, NULL),
(24, NULL, 'daliman02@example.com', '1910817210003', 4, '$2y$10$Q0.Mru8vbeJhkn3Bb8L8k.AkMOccZ3MBXPqz/DQ1sHNRzVhh1azHy', 'BzHEfjlS9f', NULL, NULL, 3, NULL, NULL, NULL),
(25, NULL, 'eyulianti@example.net', '1910817210004', 4, '$2y$10$tfOz2ff32jblWCdEsh3l..7zEsVBShk5.fuAw511Tbs5FQn/YlpFe', 'jQJnMUBA9F', NULL, NULL, 4, NULL, NULL, NULL),
(26, NULL, 'ramadan.zizi@example.net', '1910817210005', 4, '$2y$10$jsJPt69Es3i2kjzVoLKDFuGO2t7ow7bQ.soPZppTgRN7/zm3VcLWq', 'N8rLn7Rs3S', NULL, NULL, 5, NULL, NULL, NULL),
(27, NULL, 'mprastuti@example.org', '1910817210006', 4, '$2y$10$z19No9.Hi3F6yEJc0WVHXOUr/aN0IsbRhUX0xS67PStAHEea1b0jW', '4veGFYfmiY', NULL, NULL, 6, NULL, NULL, NULL),
(28, NULL, 'ika.suartini@example.org', '1910817210007', 4, '$2y$10$54w.97Rhfg7gWN5603J62.Ac0vI1FK9OOlPAApCNtg9oMxf/8iTFO', '7V86TQjE0Y', NULL, NULL, 7, NULL, NULL, NULL),
(29, NULL, 'saptono.fitriani@example.com', '1910817210008', 4, '$2y$10$ym3MWDvW2CAPG2N.2XUiNuC/Yl213kwHRfJRp52dPPSoLiU4GCQ6m', '3HK3k3sb8V', NULL, NULL, 8, NULL, NULL, NULL),
(30, NULL, 'tina.oktaviani@example.net', '1910817210009', 4, '$2y$10$Mhb0R/ak7hlLCqsB8nPCg.9qAVZy0IRPXP/mAkz5sljcSH3yAejs6', 'q6B67qmBpI', NULL, NULL, 9, NULL, NULL, NULL),
(31, NULL, 'patricia97@example.com', '1910817210010', 4, '$2y$10$CLM/uNAFQf89LHtG/l22r.YB/FzhqfKILgimiisjBk/u0YVODFnIy', '2HwirciRrK', NULL, NULL, 10, NULL, NULL, NULL),
(32, NULL, 'bdongoran@example.net', '1910817210011', 4, '$2y$10$8W443TjtAWIhodA0wdOZH.rh3oFvWR857eWDCsxOw52exM6DBHy3q', 'w5IjQNGQja', NULL, NULL, 11, NULL, NULL, NULL),
(33, NULL, 'sihotang.gilda@example.org', '1910817210012', 4, '$2y$10$Sl5YEaZ.OV6GFIssK8ItFeSAKnjOyEKm/5M/ZUon3USZy8Zmh7L2e', 'itTNBv8Kzk', NULL, NULL, 12, NULL, NULL, NULL),
(34, NULL, 'umar.pudjiastuti@example.net', '1910817210013', 4, '$2y$10$qrg7b4.4Q.D1L2/ajEyVWuPXVDp.iuzWQtB9Nh5eqs81D6OfV9s7W', 'YkH2pfFOtx', NULL, NULL, 13, NULL, NULL, NULL),
(35, NULL, 'zpurnawati@example.com', '1910817210014', 4, '$2y$10$Va5caDNUeSntEzzJOaFP8.JhTjR8FchHGD/5f.R6u6WqOvdLEMsBK', '6tlH9SRzXl', NULL, NULL, 14, NULL, NULL, NULL),
(36, NULL, 'nurdiyanti.atma@example.com', '1910817210015', 4, '$2y$10$tBBOswbytXdJYvRH72MTd.dngzt0zhojeo0SykVIwN/fmWz8jp/c2', 'nSSwNkGEBI', NULL, NULL, 15, NULL, NULL, NULL),
(37, NULL, 'qprayoga@example.com', '1910817210016', 4, '$2y$10$HuqPB.GEOqpOrrgZ.ffLdO.doozwOIbOy0DdZ0ElQsTPsZg9dbRQ6', 'uYMEKmZL6f', NULL, NULL, 16, NULL, NULL, NULL),
(38, NULL, 'mayasari.wirda@example.org', '1910817210017', 4, '$2y$10$ahMXovq2H.Ipcuu/jrDGgOYe8aVk8QxCemLKO9xyrsGuAFSW/ioOa', 'ivucGVYnks', NULL, NULL, 17, NULL, NULL, NULL),
(39, NULL, 'januar.nadine@example.com', '1910817210018', 4, '$2y$10$lGnNL0UER/9cUwdbRxa9ZO3mbfkdSWGpoKS/V7D0BII//Q18Rjr3G', 'gquBqnHtQp', NULL, NULL, 18, NULL, NULL, NULL),
(40, NULL, 'anggraini.emong@example.com', '1910817210019', 4, '$2y$10$r3PXX.PFYY7wO6HiSXRDQOrhwh108LtCbmMczLBVYwxihtBoOh9MO', 'hVboSRfyzI', NULL, NULL, 19, NULL, NULL, NULL),
(41, NULL, 'syahrini86@example.com', '1910817210020', 4, '$2y$10$I/903OH1mjUygJtdfeCmyeK4CbxbdBL.gE5fkdBBbilgih/HhWTOK', 'TBb07lz5zz', NULL, NULL, 20, NULL, NULL, NULL),
(42, NULL, 'ohartati@example.net', 'koti001', 4, '$2y$10$V6EvBsIl1Y7SIPnKSzskDuNVpdqOWZ.gA2Fb//Oyzf5fCL1OsQ9vq', 'IwcV9C63a7', NULL, NULL, 21, NULL, NULL, NULL),
(43, NULL, 'agustina.ina@example.org', 'koti002', 4, '$2y$10$6pfgFs2JFg5qPM65uoWmd.WX0xbfreeWVJfzTmndLCWE4d9AiGGHe', 'OSGa8mIGZu', NULL, NULL, 22, NULL, NULL, NULL),
(44, NULL, 'nuwais@example.net', 'koti003', 4, '$2y$10$fTVxHFnXGq5.OEBPTlL1dOM6yvCv9/OvY0EdaKi/Go0EImYV4Jvui', 'Bn7PnpayZd', NULL, NULL, 23, NULL, NULL, NULL),
(45, NULL, 'jkuswoyo@example.net', 'koti004', 4, '$2y$10$PEQX/HhvXsSMb3f/mr2uMu7xJuJJ6EnYYGJYPvVJCjwPrUJfiJrba', 'yckW0T8loj', NULL, NULL, 24, NULL, NULL, NULL),
(46, NULL, 'balapati91@example.com', 'rev001', 5, '$2y$10$W..YqxsNvhNmFvFNZau2luq2t6kOT9Qslw89hceSm8XrEYNn2txte', '6MgT5mGCgf', NULL, NULL, NULL, 1, NULL, NULL),
(47, NULL, 'saputra.mutia@example.com', 'rev002', 5, '$2y$10$kv6LHx/VSbo8Kh9AJZ3H5O1e7Ls8fORnhQVakfm44S.aVfmEGNSDe', 'QdGyB2RkYd', NULL, NULL, NULL, 2, NULL, NULL),
(48, NULL, 'mangunsong.muhammad@example.net', 'rev003', 5, '$2y$10$BJHNvPm8uPlw7/LTMsYbZe4Ashy9FOfwuquTyUCmaDdD3k2JsY2sm', 'LpMdCPnZlI', NULL, NULL, NULL, 3, NULL, NULL),
(49, NULL, 'admin01@admin', 'pr001', 2, '$2y$10$uXGBErmvgM.gcOuHzn5PlecpU4URr0MorlKZnwV4CxIV0/D4Rz9U.', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(50, 'SuperAdmin', 'admin@admin', 'admin', 1, '$2y$10$z.TN0ngJk2VMRIaxvq3ateI2qEnOmemKHDEKRgvDgtMBq8/0XFJZy', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `utils`
--

CREATE TABLE `utils` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) DEFAULT NULL,
  `prodi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addsi`
--
ALTER TABLE `addsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addsi_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosen_nip_unique` (`nip`),
  ADD KEY `dosen_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ipk_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `jcmb`
--
ALTER TABLE `jcmb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jcmb_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `kbkl`
--
ALTER TABLE `kbkl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kbkl_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `kpl`
--
ALTER TABLE `kpl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kpl_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `ktk`
--
ALTER TABLE `ktk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ktk_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `ktw`
--
ALTER TABLE `ktw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ktw_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`id`),
  ADD KEY `led_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD KEY `mahasiswa_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `matriks`
--
ALTER TABLE `matriks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matriks_user_id_foreign` (`user_id`),
  ADD KEY `matriks_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt`
--
ALTER TABLE `mt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mt_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pnpkm`
--
ALTER TABLE `pnpkm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pnpkm_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reratadtpr`
--
ALTER TABLE `reratadtpr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reratadtpr_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reviewer_rev_id_unique` (`rev_id`);

--
-- Indexes for table `sarpra`
--
ALTER TABLE `sarpra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sarpra_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `spps`
--
ALTER TABLE `spps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spps_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_prodi_id_unique` (`prodi_id`),
  ADD UNIQUE KEY `users_dosen_id_unique` (`dosen_id`),
  ADD UNIQUE KEY `users_mhs_id_unique` (`mhs_id`),
  ADD UNIQUE KEY `users_rev_id_unique` (`rev_id`);

--
-- Indexes for table `utils`
--
ALTER TABLE `utils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utils_prodi_id_foreign` (`prodi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addsi`
--
ALTER TABLE `addsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jcmb`
--
ALTER TABLE `jcmb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kbkl`
--
ALTER TABLE `kbkl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kpl`
--
ALTER TABLE `kpl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktk`
--
ALTER TABLE `ktk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktw`
--
ALTER TABLE `ktw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `matriks`
--
ALTER TABLE `matriks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mt`
--
ALTER TABLE `mt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pnpkm`
--
ALTER TABLE `pnpkm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reratadtpr`
--
ALTER TABLE `reratadtpr`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sarpra`
--
ALTER TABLE `sarpra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spps`
--
ALTER TABLE `spps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addsi`
--
ALTER TABLE `addsi`
  ADD CONSTRAINT `addsi_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ipk`
--
ALTER TABLE `ipk`
  ADD CONSTRAINT `ipk_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jcmb`
--
ALTER TABLE `jcmb`
  ADD CONSTRAINT `jcmb_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kbkl`
--
ALTER TABLE `kbkl`
  ADD CONSTRAINT `kbkl_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kpl`
--
ALTER TABLE `kpl`
  ADD CONSTRAINT `kpl_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ktk`
--
ALTER TABLE `ktk`
  ADD CONSTRAINT `ktk_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ktw`
--
ALTER TABLE `ktw`
  ADD CONSTRAINT `ktw_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `led`
--
ALTER TABLE `led`
  ADD CONSTRAINT `led_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matriks`
--
ALTER TABLE `matriks`
  ADD CONSTRAINT `matriks_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matriks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mt`
--
ALTER TABLE `mt`
  ADD CONSTRAINT `mt_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pnpkm`
--
ALTER TABLE `pnpkm`
  ADD CONSTRAINT `pnpkm_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reratadtpr`
--
ALTER TABLE `reratadtpr`
  ADD CONSTRAINT `reratadtpr_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sarpra`
--
ALTER TABLE `sarpra`
  ADD CONSTRAINT `sarpra_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spps`
--
ALTER TABLE `spps`
  ADD CONSTRAINT `spps_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `utils`
--
ALTER TABLE `utils`
  ADD CONSTRAINT `utils_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
