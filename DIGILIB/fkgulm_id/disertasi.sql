-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2023 at 03:12 AM
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
-- Table structure for table `disertasi`
--

CREATE TABLE `disertasi` (
  `idbuku` int NOT NULL,
  `namabuku` varchar(255) NOT NULL,
  `jenisbuku` enum('Disertasi') NOT NULL,
  `tahunterbit` year NOT NULL,
  `tahunpenelitian` year NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `promotor` varchar(50) NOT NULL,
  `copromotor1` varchar(50) NOT NULL,
  `copromotor2` varchar(50) NOT NULL,
  `pengujiint1` varchar(50) NOT NULL,
  `pengujiint2` varchar(50) NOT NULL,
  `pengujiint3` varchar(50) NOT NULL,
  `pengujieks` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `upload_file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disertasi`
--

INSERT INTO `disertasi` (`idbuku`, `namabuku`, `jenisbuku`, `tahunterbit`, `tahunpenelitian`, `pengarang`, `promotor`, `copromotor1`, `copromotor2`, `pengujiint1`, `pengujiint2`, `pengujiint3`, `pengujieks`, `departemen`, `upload_file`) VALUES
(1, 'dadaw1235', 'Disertasi', 2016, 2011, 'dwadaw', 'dwadw', 'daawdwa', 'dawdwa', 'dadw', 'dwadwa', 'dwadwa', 'dwad', 'dawdwa', 'notul webnas efair.pdf'),
(2, 'e12e12', 'Disertasi', 2019, 2020, 'e21e11111', 'e1e2', 'e21e21', 'e211', 'e121e2', 'e21e21', 'e21e', 'dqdwq', 'e21e21', 'Laporan LSP.pdf'),
(3, 'xaxa', 'Disertasi', 2010, 2010, 'xxX', 'xsaxa', 'xsaxa', 'xsaxs', 'xsax', 'xSX', 'xsSs', 'xxa', 'xXA', ''),
(4, 'dawdawd', 'Disertasi', 2010, 2010, 'dadad', 'dawdaw', 'dadaw', 'dadaw', 'dwadaw', 'dada', 'dawdaw', 'dawda', 'dawd', ''),
(5, 'xawwa', 'Disertasi', 2010, 2010, 'dawdaw', 'dadad', 'dadaw', 'dadaw', 'dawdaw', 'dawdaw', 'dawda', 'dadaw', 'dadaw', ''),
(6, 'xcaa', 'Disertasi', 2010, 2010, 'dawda', 'dawdaw', 'dawd', 'dwada', 'dawda', 'dawdaw', 'dadw', 'dadw', 'dawdw', ''),
(7, 'dadwa', 'Disertasi', 2010, 2010, 'dawdwad', 'dawd', 'dawd', 'dwadaw', 'dawdwd', 'dawah', 'dawd', 'dawdaw', 'dadaw', ''),
(8, 'dawdawd', 'Disertasi', 2010, 2010, 'dawdaw', 'dawdad', 'dadaw', 'dawdw', 'dadwdaw', 'dawdaw', 'dadw', 'dadawd', 'dadw', ''),
(9, 'dawd', 'Disertasi', 2010, 2010, 'dawd', 'dawd', 'dawdw', 'dawda', 'dawd', 'dawdwa', 'dada', 'dadaw', 'dadaw', ''),
(10, 'ddawd', 'Disertasi', 2010, 2010, 'dawda', 'dawdwa', 'dwad', 'dawda', 'dadaw', 'dwad', 'dawdaw', 'dadaw', 'dad', ''),
(11, 'dawdaw', 'Disertasi', 2010, 2010, 'dawda', 'dawd', 'dawd', 'dadwa', 'dadawd', 'dawdaw', 'dadaw', 'dadaw', 'dadaw', ''),
(12, 'dawdadad123', 'Disertasi', 2020, 2019, 'dadwa', 'dawd', 'dawd', 'dadaw', 'dawd', 'dawdaw', 'dawdaw', 'dawda', 'dadaw', 'Laporan LSP.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disertasi`
--
ALTER TABLE `disertasi`
  ADD PRIMARY KEY (`idbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disertasi`
--
ALTER TABLE `disertasi`
  MODIFY `idbuku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
