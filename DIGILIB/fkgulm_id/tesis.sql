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
-- Table structure for table `tesis`
--

CREATE TABLE `tesis` (
  `idbuku` int NOT NULL,
  `namabuku` varchar(255) NOT NULL,
  `jenisbuku` enum('Tesis') NOT NULL,
  `tahunterbit` year NOT NULL,
  `tahunpenelitian` year NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `penguji1` varchar(50) NOT NULL,
  `penguji2` varchar(50) NOT NULL,
  `penguji3` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `upload_file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tesis`
--

INSERT INTO `tesis` (`idbuku`, `namabuku`, `jenisbuku`, `tahunterbit`, `tahunpenelitian`, `pengarang`, `pembimbing1`, `pembimbing2`, `penguji1`, `penguji2`, `penguji3`, `departemen`, `upload_file`) VALUES
(1, 'dawdadad', 'Tesis', 2019, 2019, 'dadwa', 'ddaw', 'dadwa', 'dadaw', 'dadwa', 'dawdaw', 'dadaw', 'notul webnas efair.pdf'),
(2, 'dwadaw', 'Tesis', 2019, 2020, 'dwadwa', 'dawdaw', 'dawda', 'dawd', 'dawdwa', 'dawd', 'dawd', 'notul webnas efair.pdf'),
(3, 'rwr', 'Tesis', 2019, 2018, 'rw4rw', 'rw4r', 'r4wr', 'rwr4', 'r4wr', 'rw4r', 'rw4r', 'Laporan LSP.pdf'),
(4, 'rwr', 'Tesis', 2019, 2018, 'rw4rw', 'rw4r', 'r4wr', 'rwr4', 'r4wr', 'rw4r', 'rw4r', 'Laporan LSP.pdf'),
(5, 'rwr', 'Tesis', 2019, 2018, 'rw4rw', 'rw4r', 'r4wr', 'rwr4', 'r4wr', 'rw4r', 'rw4r', 'Laporan LSP.pdf'),
(6, 'dwada', 'Tesis', 2018, 2010, 'dawd', 'dawd', 'dawdaw', 'dadaw', 'dawdaw', 'dadaw', 'dadw', 'Laporan LSP.pdf'),
(7, 'dawdadad123', 'Tesis', 2011, 2020, 'dadwa', 'dadaw', 'dawda', 'dawwad', 'dadaw', 'dadwa', 'dawda', 'notul webnas efair.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`idbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tesis`
--
ALTER TABLE `tesis`
  MODIFY `idbuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
