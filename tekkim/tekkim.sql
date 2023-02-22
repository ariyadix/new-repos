-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2020 pada 08.36
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemvote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` tinyint(2) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `hak_akses` enum('admin','operator-teknik','operator-fekon','operator-fok','operator-mipa','operator-fis','operator-fip','operator-hukum','operator-pertanian','operator-fsb','operator-fik','dekan','rektor') NOT NULL,
  `login_terakhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `hak_akses`, `login_terakhir`) VALUES
(17, 'Aziza Dwi', '030318108', '010317', 'admin', '2020-10-29 15:32:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_capres`
--

CREATE TABLE `detail_capres` (
  `id_detail_capres` tinyint(4) NOT NULL,
  `nama_capres` varchar(100) NOT NULL,
  `fakultas_capres` varchar(100) NOT NULL,
  `jurusan_capres` varchar(100) NOT NULL,
  `prodi_capres` varchar(100) NOT NULL,
  `angkatan_capres` char(4) NOT NULL,
  `gambar_capres` varchar(255) DEFAULT NULL,
  `id_paslon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_capres`
--

INSERT INTO `detail_capres` (`id_detail_capres`, `nama_capres`, `fakultas_capres`, `jurusan_capres`, `prodi_capres`, `angkatan_capres`, `gambar_capres`, `id_paslon`) VALUES
(1, 'Ketua 1', 'Teknik', 'Teknologi Informasi', 'Perawat', '2018', 'foto4.png', 3),
(2, 'Ketua 2', 'Hukum', 'Teknik Kimia', 'Pendidikan Hukum', '2019', 'foto15.png', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_cawapres`
--

CREATE TABLE `detail_cawapres` (
  `id_detail_cawapres` tinyint(4) NOT NULL,
  `nama_cawapres` varchar(100) NOT NULL,
  `fakultas_cawapres` varchar(100) NOT NULL,
  `jurusan_cawapres` varchar(100) NOT NULL,
  `prodi_cawapres` varchar(100) NOT NULL,
  `angkatan_cawapres` char(4) NOT NULL,
  `gambar_cawapres` varchar(255) DEFAULT NULL,
  `id_paslon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_cawapres`
--

INSERT INTO `detail_cawapres` (`id_detail_cawapres`, `nama_cawapres`, `fakultas_cawapres`, `jurusan_cawapres`, `prodi_cawapres`, `angkatan_cawapres`, `gambar_cawapres`, `id_paslon`) VALUES
(1, 'Wakil Ketua 1', 'Olahraga & Kesehatan', 'Teknik Kimia', 'Perawat', '2018', 'foto14.png', 3),
(2, 'Wakil Ketua 2', 'Ekonomi', 'Pendidikan', 'Manajemen', '2019', 'foto5.png', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` tinyint(2) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Angkatan 2016'),
(2, 'Angkatan 2017'),
(3, 'Angkatan 2018'),
(4, 'Angkatan 2019'),
(5, 'Angkatan 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paslon`
--

CREATE TABLE `paslon` (
  `id_paslon` tinyint(2) NOT NULL,
  `nama_koalisi` varchar(100) NOT NULL,
  `nama_paslon` varchar(100) NOT NULL,
  `fakultas_koalisi` varchar(255) NOT NULL,
  `nomor_urut` char(2) NOT NULL,
  `visimisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paslon`
--

INSERT INTO `paslon` (`id_paslon`, `nama_koalisi`, `nama_paslon`, `fakultas_koalisi`, `nomor_urut`, `visimisi`) VALUES
(3, 'UNG Bersatu', 'Paslon 1', 'Teknik, Ilmu Sosial, Ilmu Pendidikan, Ilmu Kelautan, Hukum', '1', '<p>Visi <br>---<br>Misi</p>\r\n<p>---</p>'),
(4, 'Menuju PERUBAHAN!', 'Paslon 2', 'Pertanian, Olahraga & Kesehatan, Ilmu Sastra & Budaya, Ekonomi, MIPA', '2', '<p>Visi <br>---<br>Misi</p>\r\n<p>---</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nim_pemilih` char(10) NOT NULL,
  `nama_pemilih` varchar(100) NOT NULL,
  `token_pemilih` varchar(10) NOT NULL,
  `status_pemilih` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `telah_memilih` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `terakhir_login` datetime NOT NULL,
  `id_fakultas` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nim_pemilih`, `nama_pemilih`, `token_pemilih`, `status_pemilih`, `telah_memilih`, `terakhir_login`, `id_fakultas`) VALUES
(1554, '1', 'pemilih 1', 'a', 'ya', 'ya', '2020-10-29 15:32:03', 1),
(1555, '2', 'pemilih 2', 'b', 'ya', 'tidak', '0000-00-00 00:00:00', 2),
(1556, '3', 'pemilih 3', 'c', 'ya', 'tidak', '0000-00-00 00:00:00', 3),
(1557, '4', 'pemilih 4', 'd', 'ya', 'tidak', '0000-00-00 00:00:00', 4),
(1558, '5', 'pemilih 5', 'e', 'ya', 'tidak', '0000-00-00 00:00:00', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilihan`
--

CREATE TABLE `pemilihan` (
  `id_pemilihan` int(11) NOT NULL,
  `waktu_memilih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pemilih` int(11) NOT NULL,
  `id_paslon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilihan`
--

INSERT INTO `pemilihan` (`id_pemilihan`, `waktu_memilih`, `id_pemilih`, `id_paslon`) VALUES
(72, '2020-10-29 15:32:07', 1554, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_capres`
--
ALTER TABLE `detail_capres`
  ADD PRIMARY KEY (`id_detail_capres`),
  ADD KEY `id_paslon` (`id_paslon`);

--
-- Indeks untuk tabel `detail_cawapres`
--
ALTER TABLE `detail_cawapres`
  ADD PRIMARY KEY (`id_detail_cawapres`),
  ADD KEY `id_paslon` (`id_paslon`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`id_paslon`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`),
  ADD UNIQUE KEY `nim_pemilih` (`nim_pemilih`),
  ADD KEY `id_fakultas` (`id_fakultas`),
  ADD KEY `nim_pemilih_2` (`nim_pemilih`);

--
-- Indeks untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD PRIMARY KEY (`id_pemilihan`),
  ADD KEY `id_pemilih` (`id_pemilih`),
  ADD KEY `id_paslon` (`id_paslon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `detail_capres`
--
ALTER TABLE `detail_capres`
  MODIFY `id_detail_capres` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_cawapres`
--
ALTER TABLE `detail_cawapres`
  MODIFY `id_detail_cawapres` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `paslon`
--
ALTER TABLE `paslon`
  MODIFY `id_paslon` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1559;

--
-- AUTO_INCREMENT untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  MODIFY `id_pemilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_capres`
--
ALTER TABLE `detail_capres`
  ADD CONSTRAINT `detail_capres_ibfk_1` FOREIGN KEY (`id_paslon`) REFERENCES `paslon` (`id_paslon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_cawapres`
--
ALTER TABLE `detail_cawapres`
  ADD CONSTRAINT `detail_cawapres_ibfk_1` FOREIGN KEY (`id_paslon`) REFERENCES `paslon` (`id_paslon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD CONSTRAINT `pemilih_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemilihan`
--
ALTER TABLE `pemilihan`
  ADD CONSTRAINT `pemilihan_ibfk_1` FOREIGN KEY (`id_paslon`) REFERENCES `paslon` (`id_paslon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemilihan_ibfk_2` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
