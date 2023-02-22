-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2023 at 03:14 AM
-- Server version: 8.0.32
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fkgulm_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `idbuku` int NOT NULL,
  `namabuku` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenisbuku` enum('Skripsi','Tesis','Disertasi','Karya Tulis Akhir','Karya Tulis Ilmiah') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahunterbit` year NOT NULL,
  `pengarang` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembimbing1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `penguji1` varchar(50) NOT NULL,
  `penguji2` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `tahunpenelitian` year NOT NULL,
  `upload_file` varchar(2000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`idbuku`, `namabuku`, `jenisbuku`, `tahunterbit`, `pengarang`, `pembimbing1`, `pembimbing2`, `penguji1`, `penguji2`, `departemen`, `tahunpenelitian`, `upload_file`) VALUES
(25, 'dwaawd', 'Skripsi', 2019, 'dadwa', 'dwada', 'dawdwa', 'dadwa', 'dawdaw', 'dadwa', 2020, 'KIT FKG ULM Langkah aktivasi office 365 dan Penggunaan Microsoft Teams.pdf'),
(27, 'fesfs', 'Skripsi', 2019, 'efs', 'fsefse', 'fsfs', 'fesfes', 'vrs', 'brsb', 2018, 'Enterpreuner.pdf'),
(29, 'dadwa', 'Skripsi', 2019, 'dawda', 'dadaw', 'dawda', 'dadwa', 'dawdaw', 'dadwa', 2018, 'Enterpreuner2.pdf'),
(30, 'dadwa', 'Skripsi', 2019, 'dawda', 'dadaw', 'dawda', 'dadwa', 'dawdaw', 'dadwa', 2018, 'Laporan Akhir KM MariBelajar Sarah_sarahutahaean20memb.pdf'),
(31, 'dwqdq', 'Skripsi', 2019, 'dqdqw', 'dqdwq', 'dqwdqw', 'dqwdwq', 'dwqdqw', 'dwqdqw', 2018, 'Laporan Akhir KM MariBelajar Sarah_sarahutahaean20memb.pdf'),
(32, 'wda', 'Skripsi', 2019, 'dwadwa', 'dwadaw', 'dawdwa', 'dawdaw', 'dawda', 'dadaw', 2018, 'CamScanner 12-16-2021 14.48_2.pdf'),
(33, 'dadw', 'Skripsi', 2019, 'dawwad', 'dawd', 'dawdawd', 'dawda', 'dawd', 'dawdwa', 2020, 'Enterpreuner2.pdf'),
(35, 'awdawdw', 'Skripsi', 2019, 'dwada', 'dwada', 'dawdw', 'dawdwa', 'dwadwa', 'dawdwa', 2018, 'KIT FKG ULM Langkah aktivasi office 365 dan Penggunaan Microsoft Teams.pdf'),
(36, 'dwdwa', 'Skripsi', 2011, 'dwada', 'dadwa', 'dada', 'daadw', 'dawd', 'dawd', 2010, 'KIT FKG ULM Langkah aktivasi office 365 dan Penggunaan Microsoft Teams.pdf'),
(37, 'Panduan Aktivasi dan Reset Password Email Sub Domain ulm.ac.id - Universitas Lambung Mangkurat - Untuk Mahasiswa', 'Skripsi', 2023, 'PTIK ULM', 'Prof. Dr. Nama lengkap1, Gelar', 'Dr. Nama lengkap2, Gelar', 'Prof. Dr. Nama lengkap3, Gelar', 'Prof. Dr. Nama lengkap4, Gelar', 'Informasi', 2019, 'Panduan Email ULM.pdf'),
(38, 'dwadwa', 'Skripsi', 2019, 'dadwad', 'dawda', 'dawdaw', 'dawdaw', 'dawdaw', 'dadwa', 2018, 'CV AAS.pdf'),
(39, 'Baru - Panduan Aktivasi dan Reset Password Email Sub Domain ulm.ac.id - Universitas Lambung Mangkurat - Untuk Mahasiswa', 'Skripsi', 2023, 'PTIK ULM', 'Prof. Dr. Nama lengkap1, Gelar', 'Dr. Nama lengkap2, Gelar', 'Prof. Dr. Nama lengkap3, Gelar', 'Prof. Dr. Nama lengkap4, Gelar', 'Informasi', 2019, 'Urutan verifikasi data.pdf'),
(40, 'dawdadad123', 'Skripsi', 2013, 'dadwa', 'dadwa', 'dawdaw', 'dadwa', 'dawda', 'dada', 2011, 'notul webnas efair.pdf'),
(41, 'dawdadad123', 'Skripsi', 2008, 'dadwa', 'dadaw', 'dawda', 'dadaw', 'dada', 'dadaw', 2007, 'Laporan LSP.pdf'),
(42, 'dawad123', 'Skripsi', 2023, 'dadwa', 'dadaw', 'dawda', 'dadaw', 'dadaw', 'dadwa', 2023, 'Composer-Setup.exe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`idbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `idbuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
