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
-- Table structure for table `kti`
--

CREATE TABLE `kti` (
  `idbuku` int NOT NULL,
  `namabuku` varchar(255) NOT NULL,
  `jenisbuku` enum('Karya Tulis Ilmiah') NOT NULL,
  `tahunterbit` year NOT NULL,
  `tahunpenelitian` year NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `penguji1` varchar(50) NOT NULL,
  `penguji2` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `upload_file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kti`
--

INSERT INTO `kti` (`idbuku`, `namabuku`, `jenisbuku`, `tahunterbit`, `tahunpenelitian`, `pengarang`, `pembimbing1`, `pembimbing2`, `penguji1`, `penguji2`, `departemen`, `upload_file`) VALUES
(1, 'dawad123', 'Karya Tulis Ilmiah', 2019, 2018, 'aecaa', 'adadwa', 'dadaw', 'dadaa', 'dadaw', 'dadad', 'Laporan LSP.pdf'),
(2, 'aa', 'Karya Tulis Ilmiah', 2019, 2018, 'dada', 'cacaw', 'casc', 'cacsa', 'cacas', 'dadaw', 'Laporan LSP.pdf'),
(3, 'dawdadad123', 'Karya Tulis Ilmiah', 2012, 2018, 'dawda', 'dadaw', 'dawda', 'dadw', 'dadaw', 'dawd', 'notul webnas efair.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kti`
--
ALTER TABLE `kti`
  ADD PRIMARY KEY (`idbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kti`
--
ALTER TABLE `kti`
  MODIFY `idbuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
