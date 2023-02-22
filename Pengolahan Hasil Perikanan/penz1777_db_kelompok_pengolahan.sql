-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2022 at 02:26 PM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penz1777_db_kelompok_pengolahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id` int(10) NOT NULL,
  `nama_hp` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tanggal` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `kesan` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `pesan` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `tanda_tangan` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas_anggota`
--

CREATE TABLE `tb_identitas_anggota` (
  `id` int(10) NOT NULL,
  `id_kelompok` varchar(10) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jabatan_kelompok` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `hp` varchar(250) NOT NULL,
  `tingkat_pendidikan` varchar(250) NOT NULL,
  `umur` varchar(250) NOT NULL,
  `usaha_selain_perikanan` varchar(250) NOT NULL,
  `mulai_usaha_perikanan` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas_anggota`
--

INSERT INTO `tb_identitas_anggota` (`id`, `id_kelompok`, `nama`, `nik`, `jabatan_kelompok`, `alamat`, `hp`, `tingkat_pendidikan`, `umur`, `usaha_selain_perikanan`, `mulai_usaha_perikanan`, `photo`) VALUES
(1, '1', 'Yamani', '-', 'Anggota', 'Mentaos', '083155706200', 'S1', '54', 'Berkebun', '2017', 'Screenshot 2022-05-08 192255.png'),
(10, '2', 'Budiono', '-', 'Anggota', 'Mentaos', '085162973827', 'SMA/SLTA/MA/SMK', '35', 'Berkebun', '2017', 'Screenshot 2022-05-08 191405.png'),
(11, '3', 'Vina Navia', '-', 'Anggota', 'Mentaos', '085343813501', 'SMA/SLTA/MA/SMK', '17', 'Tidak Ada', '2017', 'Screenshot 2022-05-08 191731.png'),
(12, '4', 'Azizah Novita Sari', '-', 'Anggota', 'Mentaos', '085705838190', 'SMA/SLTA/MA/SMK', '19', 'Tidak ada', '2017', 'Screenshot 2022-05-08 192005.png'),
(13, '5', 'Muhammad Dzakiy Zaidan', '6306564010018469', 'Ketua Kelompok', 'Banjarbaru Utara', '085162973827', 'S2', '21', 'Pengusaha Ternama', '2019', '_MG_3813_2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas_kelompok`
--

CREATE TABLE `tb_identitas_kelompok` (
  `Id` int(10) NOT NULL,
  `nama_kelompok` varchar(250) NOT NULL,
  `tahun_berdiri` varchar(250) NOT NULL,
  `nomor_surat` varchar(250) NOT NULL,
  `upload_surat` varchar(250) NOT NULL,
  `status_kelompok` varchar(250) NOT NULL,
  `titik_lokasi` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `penyuluh_pendamping` varchar(250) NOT NULL,
  `logo_kelompok` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas_kelompok`
--

INSERT INTO `tb_identitas_kelompok` (`Id`, `nama_kelompok`, `tahun_berdiri`, `nomor_surat`, `upload_surat`, `status_kelompok`, `titik_lokasi`, `alamat`, `penyuluh_pendamping`, `logo_kelompok`) VALUES
(1, 'Yamani', '2017', '-', 'contoh.txt', 'Anggota', 'Mentaos', 'Mentaos', '-', 'satu.jpg'),
(2, 'Budiono', '2017', '-', 'ulm.png', 'Anggota', 'Mentaos', 'Mentaos', '-', 'laut.jpg'),
(8, 'Vina Navia', '2017', '-', 'contoh.txt', 'Anggota', 'Mentaos', 'Mentaos', '-', 'satu.jpg'),
(9, 'Azizah Novita Sari', '2017', '-', 'contoh.txt', 'Anggota', 'Mentaos', 'Mentaos', '-', 'satu.jpg'),
(10, 'Mia Wulandari', '2017', '1', '', 'Pemula', 'Mentaos', 'Mentaos', '-', 'satu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `Id` int(10) NOT NULL,
  `nama_ikan` varchar(250) NOT NULL,
  `keterangan_ikan` longtext NOT NULL,
  `website` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ikan`
--

INSERT INTO `tb_ikan` (`Id`, `nama_ikan`, `keterangan_ikan`, `website`) VALUES
(1, 'Patin', 'Ikan Patin digunakan sebagai bahan baku pembuatan beberapa produk makanan antara lain yaitu nugget, tahu bakso, siomay, akar pinang dan kembang goyang. Dalam proses produksinya yaitu dimulai dengan menyiapkan bahan baku ikan patin segar sebagai bahan utama dari produk olahan ini.', 'https://instagram.com/kelompok.nilaanjani?igshid=YmMyMTA2M2Y'),
(2, 'Patin', 'Ikan Patin digunakan sebagai bahan utama produk olahan nugget, tahu bakso, siomay, akar pinang dan kembang goyang.', 'https://instagram.com/kelompok.nilaanjani?igshid=YmMyMTA2M2Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kemasan_produk`
--

CREATE TABLE `tb_kemasan_produk` (
  `Id` int(10) NOT NULL,
  `ukuran_kemasan` varchar(250) NOT NULL,
  `keterangan_kemasan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kemasan_produk`
--

INSERT INTO `tb_kemasan_produk` (`Id`, `ukuran_kemasan`, `keterangan_kemasan`) VALUES
(5, 'Besar', '250 gram'),
(6, 'Sedang', '200 gram'),
(7, 'Kecil', '150 gram');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_olahan`
--

CREATE TABLE `tb_produk_olahan` (
  `Id` int(10) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `Id_ikan` varchar(250) NOT NULL,
  `bahan` varchar(250) NOT NULL,
  `cara_pembuatan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk_olahan`
--

INSERT INTO `tb_produk_olahan` (`Id`, `nama`, `Id_ikan`, `bahan`, `cara_pembuatan`) VALUES
(1, 'Nugget', 'Patin', '1. Tepung Terigu\r\n2. Tepung Beras\r\n3. Telur\r\n4. Pengenyal\r\n5. Bawang Bombay\r\n6. Bawang Putih\r\n7. Jarum Tiram\r\n8. Lada\r\n9. Penyedap Rasa\r\n10. MSG\r\n11. Garam', 'Langkah pertama, kocok terlebih dahulu telur ayam. Setelah itu masukkan bawang putih halus, kaldu bubuk, garam, gula pasir, dan lada bubuk. Aduk semuanya hingga tercampur rata\r\nSetelah itu, masukkan tepung terigu kedalam adonan telur tadi.\r\nJika sudah tercampur rata, masukkan pula daging ikan patin dan aduk hingga rata.\r\nSetelah itu, masukkan adonan kedalam loyang yang sudah diolesi dengan minyak.\r\nKemudian kukus kurang lebih 20 menit atau sampai matang.\r\nSambil kita menunggu adonan ikannya matang, selanjutnya kita buat adonan lapisan nugget.\r\nSiapkan 2 wadah untuk tepung panir dan telur ayam kocok.\r\nAdonan ikan patin yang sudah matang lalu dipotong dengan ukuran sesuai selera.\r\nSetelah itu, celupkan kedalam kocokan telur lalu lapisi dengan tepung panir. Ulangi langkah ini sampai adonan nugget habis.\r\nPanaskan minyak dalam jumlah banyak lalu goreng nugget ikan.\r\nGoreng sampai kekuningan, jika sudah matang lalu angkat dan tiriskan.\r\nNugget ikan patin siap disajikan.\r\n'),
(2, 'Siomay', 'Patin', '1. Tepung Kanji\r\n2. Tepung terigu\r\n3. Bawang bombay\r\n4. Bawang Putih\r\n5. Lada\r\n6. Telur\r\n7. Bawang Perai\r\n8. Wortel\r\n9. Garam\r\n10. MSG\r\n11. Penyedap Rasa', 'Langkah pertama, kocok terlebih dahulu telur ayam. Setelah itu masukkan bawang putih halus, kaldu bubuk, garam, gula pasir, dan lada bubuk. Aduk semuanya hingga tercampur rata\r\nSetelah itu, masukkan tepung terigu kedalam adonan telur tadi.\r\nJika sudah tercampur rata, masukkan pula daging ikan patin dan aduk hingga rata.\r\nSetelah itu, masukkan adonan kedalam loyang yang sudah diolesi dengan minyak.\r\nKemudian kukus kurang lebih 20 menit atau sampai matang.\r\nSambil kita menunggu adonan ikannya matang, selanjutnya kita buat adonan lapisan nugget.\r\nSiapkan 2 wadah untuk tepung panir dan telur ayam kocok.\r\nAdonan ikan yang sudah matang lalu dipotong dengan ukuran sesuai selera.\r\nSetelah itu, celupkan kedalam kocokan telur lalu lapisi dengan tepung panir. Ulangi langkah ini sampai adonan nugget habis.\r\nPanaskan minyak dalam jumlah banyak lalu goreng nugget ikan.\r\nGoreng sampai kekuningan, jika sudah matang lalu angkat dan tiriskan.\r\nNugget ikan patin siap disajikan.\r\n'),
(3, 'Pentol', 'Patin', '1. Tepung Kanji\r\n2. Pengenyal\r\n3. Bawang Prei\r\n4. Bawang Putih\r\n5. Seledri\r\n6. Penyedap Rasa\r\n7. Telur\r\n8. Garam\r\n9. MSG', 'Blender hingga lunak,daging ikan.\r\nBawang putih halus,royco,telur,campur dalam wadah.\r\nCampur bumbu dan daging ikan,aduk hingga membentuk adonan.\r\nDidihkan air masukkan 1 bungkus royco ayam adan lada bubuk,matikan api.\r\nBulatkan adonan,masukkan kedalam air panas td,lakukan hingga habis.\r\nMasak kembali dengan api kecil hingga mendidih.'),
(4, 'Akar Pinang', 'Patin', '1. Tepung Ketan\r\n2. Bawang Putih\r\n3. Penyedap Rasa\r\n4. Seledri\r\n5. Garam\r\n6. Telur\r\n7. Bawang Bombay\r\n8. Margarin\r\n9. MSG', 'Kocok lepas 2 butir telur dengan santan Di wadah lain, masukkan tepung terigu + margarin + royco + daging giling ikan patin dan bawang putih bubuk, aduk2.Tuangkan campuran telur + santan ke dalam tepung.Uleni adonan sampai rata dan kalis. Jika adonan sudah pas, ketika ditarik akan kelihatan bertekstur. Cetak adonan langsung di atas penggorengan, goreng dengan api sedang. Goreng hingga kuning ke emasan. Angkat dan tiriskan, biarkan hingga dingin. Simpan di toples kedap udara.'),
(5, 'Kembang Goyang', 'Patin', '1. Tepung Beras2. Tepung Terigu3. Tepung Tapioka4. Santan5. Telur6. Vanili7. Gula', 'Pertama-tama, silakan siapkan wadah yang akan digunakan untuk membuat adonan kembang goyang. Lalu campurkan semua bahan ke dalam wadah tersebut. Aduk-aduk semua bahan hingga tercampur dengan merata. Kemudian silakan saring adonan sampai tidak ada bagian bergerindil. Dalam wajan silakan panaskan minyak dalam jumlah yang cukup banyak. Lalu ambil cetakan dan panaskan dengan cara mencelupkannya ke dalam minyak panas. Celupkan sebentar saja. Kemudian cetakan celupkan ke dalam adonan namun pastikan jangan sampai tenggelam. Kemudian angkat. Cetakan masukan dalam penggorengan sambil digoyang-goyang sampai kue lepas. Silakan ulangi langkah yang sama sampai adonan habis. Kembang goyang digoreng hingga benar-benar matang dan warnanya menjadi kuning kecoklatan. Jika sudah seperti itu, silakan angkat dan tiriskan terlebih dahulu hingga dingin. Terakhir anda bisa langsung menyajikannya atau disimpan dalam toples yang kedap udara.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_trx_catatan_keuangan`
--

CREATE TABLE `tb_qry_trx_catatan_keuangan` (
  `id` int(10) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_trx` int(11) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `jenis_transaksi` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `jumlah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_trx_kegiatan`
--

CREATE TABLE `tb_qry_trx_kegiatan` (
  `id` int(10) NOT NULL,
  `id_kelompok` varchar(250) NOT NULL,
  `id_trx` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian_kegiatan` varchar(250) NOT NULL,
  `tanggal_kegiatan` varchar(250) NOT NULL,
  `unggah_photo_1` varchar(250) NOT NULL,
  `unggah_photo_2` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_trx_produksi`
--

CREATE TABLE `tb_qry_trx_produksi` (
  `Id` int(10) NOT NULL,
  `id_kelompok` varchar(250) NOT NULL,
  `id_anggota` varchar(250) NOT NULL,
  `id_trx` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `id_produk_olahan` varchar(250) NOT NULL,
  `id_kemasan_produk` varchar(250) NOT NULL,
  `volume` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_qry_trx_produksi`
--

INSERT INTO `tb_qry_trx_produksi` (`Id`, `id_kelompok`, `id_anggota`, `id_trx`, `tanggal`, `uraian`, `id_produk_olahan`, `id_kemasan_produk`, `volume`, `lokasi`, `keterangan`) VALUES
(11, '01', '02', '03', '9 April 2022', 'Penjualan', 'Nugget', 'Sedang', '170', 'Mentaos', 'Makanan basah'),
(12, '01', '02', '03', '9 April', 'Penjualan', 'Akar Pinang', 'Besar', '25', 'Mentaos', 'Makanan kering'),
(13, '01', '02', '03', '9 April 2022', 'Penjualan', 'Pentol', 'Kecil', '50', 'Mentaos', 'Makanan basah'),
(14, '01', '02', '03', '9 April 2022', 'Penjualan', 'Kembang Goyang', 'Kecil', '35', 'Mentaos', 'Makanan kering'),
(15, '01', '02', '03', '9 April 2022', 'Penjualan', 'Siomay', 'Kecil', '25', 'Mentaos', 'Makanan basah'),
(16, '01', '02', '03', '9 April 2022', 'Penjualan', 'Nugget', 'Besar', '20', 'Mentaos', 'Makanan basah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_trx_rencana`
--

CREATE TABLE `tb_qry_trx_rencana` (
  `Id` int(10) NOT NULL,
  `id_kelompok` varchar(250) NOT NULL,
  `id_anggota` varchar(250) NOT NULL,
  `id_trx` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `volume` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_qry_trx_rencana`
--

INSERT INTO `tb_qry_trx_rencana` (`Id`, `id_kelompok`, `id_anggota`, `id_trx`, `tanggal`, `uraian`, `volume`, `lokasi`, `keterangan`) VALUES
(4, '01', '02', '03', '20 Maret 2021', '-', '5.175.000', 'Mentaos', '1 bulan'),
(5, '01', '02', '03', '20 April 2021', '-', '10.351.800', 'Mentaos', '2 bulan'),
(6, '01', '02', '03', '07 Juli 2021', '-', '15.175.800', 'Mentaos', '3 Bulan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_trx_surat`
--

CREATE TABLE `tb_qry_trx_surat` (
  `id` int(10) NOT NULL,
  `id_kelompok` varchar(250) NOT NULL,
  `id_trx` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `perihal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_qry_trx_surat`
--

INSERT INTO `tb_qry_trx_surat` (`id`, `id_kelompok`, `id_trx`, `tanggal`, `tujuan`, `keterangan`, `perihal`) VALUES
(1, '1234', '123', '2022-05-08', 'Tes', 'Surat Masuk', 'Laporan2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_qry_try_notulen`
--

CREATE TABLE `tb_qry_try_notulen` (
  `id` int(10) NOT NULL,
  `id_kelompok` varchar(250) NOT NULL,
  `id_trx` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jumlah_hadir` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sapras`
--

CREATE TABLE `tb_sapras` (
  `Id` int(10) NOT NULL,
  `Id_kelompok` varchar(250) NOT NULL,
  `Id_anggota` varchar(250) NOT NULL,
  `kode_barang` varchar(250) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `jenis` varchar(250) NOT NULL,
  `tanggal_terima` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `ukuran` varchar(250) NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `sumber` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `kondisi_barang` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sapras`
--

INSERT INTO `tb_sapras` (`Id`, `Id_kelompok`, `Id_anggota`, `kode_barang`, `nama_barang`, `jenis`, `tanggal_terima`, `keterangan`, `ukuran`, `jumlah`, `sumber`, `lokasi`, `kondisi_barang`, `photo`) VALUES
(8, '1', '2', '001', 'Panci', 'Sarana', '2022-05-26', 'Milik Kelompok', 'Besar', '2', 'Hibah/hadiah', 'Mentaos', 'Rusak Berat', 'panci.jpg'),
(9, '2', '3', '002', 'Baskom', 'Barang produksi', '2017', 'Sarana', 'Besar', '4', 'Pribadi', 'Mentaos', 'Baik', 'baskom.jpg'),
(10, '3', '4', '003', 'Talenan', 'Barang produksi', '2017', 'Sarana', 'Sedang', '2', 'Pribadi', 'Mentaos', 'Baik', 'talenan.jpg'),
(11, '4', '5', '004', 'Pisau', 'Barang produksi', '2017', 'Sarana', 'Sedang', '4', 'Pribadi', 'Mentaos', 'Baik', 'pisau.jpeg'),
(12, '5', '6', '005', 'Spatula', 'Barang produksi', '2017', 'Sarana', 'Sedang', '3', 'Pribadi', 'Mentaos', 'Baik', 'spatula.jpg'),
(13, '6', '7', '006', 'Piring melamin', 'Barang produksi', '2017', 'Sarana', 'Sedang', '6', 'Pribadi', 'Mentaos', 'Baik', 'piring.jpg'),
(14, '7', '8', '007', 'Parutan', 'Barang produksi', '2017', 'Sarana', 'Sedang', '2', 'Pribadi', 'Mentaos', 'Baik', 'parutan.jpg'),
(15, '8', '9', '008', 'Centong', 'Barang produksi', '2017', 'Sarana', 'Sedang', '6', 'Pribadi', 'Mentaos', 'Baik', 'centong kayu.jpg'),
(16, '9', '10', '009', 'Sendok sayur', 'Barang produksi', '2017', 'Sarana', 'Sedang', '3', 'Pribadi', 'Mentaos', 'Baik', 'sendok sayur.jpg'),
(17, '10', '11', '0010', 'Wajan', 'Barang produksi', '2017', 'Sarana', 'Besar', '2', 'Pribadi', 'Mentaos', 'Baik', 'wajan.jpg'),
(18, '11', '12', '0011', 'Sendok', 'Barang produksi', '2017', 'Sarana', 'Sedang', '6', 'Pribadi', 'Mentaos', 'Baik', 'sendok.jpg'),
(19, '12', '13', '0012', 'Serok', 'Barang produksi', '2017', 'Sarana', 'Sedang', '3', 'Pribadi', 'Mentaos', 'Baik', 'serok.jpg'),
(20, '13', '14', '0013', 'Kompor', 'Barang produksi', '2017', 'Sarana', 'Besar', '1', 'Pribadi', 'Mentaos', 'Baik', 'kompor.jpeg'),
(21, '14', '15', '0014', 'Regulator', 'Barang produksi', '2017', 'Sarana', 'Sedang', '1', 'Pribadi', 'Mentaos', 'Baik', 'regulator.jpg'),
(22, '15', '16', '0015', 'Timbangan digital', 'Barang produksi', '2017', 'Sarana', 'Sedang', '1', 'Pribadi', 'Mentaos', 'Baik', 'timbangan.jpg'),
(23, '16', '17', '0017', 'Sealer', 'Barang produksi', '2017', 'Sarana', 'Sedang', '1', 'Pribadi', 'Mentaos', 'Baik', 'sealer.jpg'),
(24, '17', '18', '0018', 'Penggiling daging', 'Barang produksi', '2017', 'Sarana', 'Besar', '1', 'Pribadi', 'Mentaos', 'Baik', 'penggiling.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx`
--

CREATE TABLE `tb_trx` (
  `Id` int(10) NOT NULL,
  `transaksi` varchar(250) NOT NULL,
  `keterangan_trx` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_trx`
--

INSERT INTO `tb_trx` (`Id`, `transaksi`, `keterangan_trx`) VALUES
(5, 'pembelian barang', 'produksi'),
(6, 'pembelian bahan baku', 'produksi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trx_sarpras`
--

CREATE TABLE `tb_trx_sarpras` (
  `id` int(10) NOT NULL,
  `id_sarpras` varchar(250) NOT NULL,
  `tanggal` varchar(250) NOT NULL,
  `uraian_kegiatan` varchar(250) NOT NULL,
  `kondisi` varchar(250) NOT NULL,
  `pemeriksa` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_trx_sarpras`
--

INSERT INTO `tb_trx_sarpras` (`id`, `id_sarpras`, `tanggal`, `uraian_kegiatan`, `kondisi`, `pemeriksa`, `lokasi`, `photo`) VALUES
(4, 'Baskom', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'baskom.jpg'),
(5, 'Talenan', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'talenan.jpg'),
(6, 'Pisau', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'pisau.jpeg'),
(9, 'Piring Melamin', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'piring.jpg'),
(10, 'Spatula', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'spatula.jpg'),
(11, 'Regulator', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'regulator.jpg'),
(12, 'Serok', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'serok.jpg'),
(13, 'Parutan', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'parutan.jpg'),
(14, 'Centong', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'centong kayu.jpg'),
(15, 'Timbangan Digital', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'timbangan.jpg'),
(16, 'Sendok Sayur', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'sendok sayur.jpg'),
(17, 'Kompor', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'kompor.jpeg'),
(18, 'Panci', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'panci.jpg'),
(19, 'Wajan', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'wajan.jpg'),
(20, 'Sendok', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'sendok.jpg'),
(21, 'Sealer', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'sealer.jpg'),
(22, 'Penggiling Daging', '6 Mei 2022', 'Produksi', 'Baik', 'Anggota POPKLAHSAR Nila Anjani', 'Mentaos, Banjarbaru', 'penggiling.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_identitas_anggota`
--
ALTER TABLE `tb_identitas_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_identitas_kelompok`
--
ALTER TABLE `tb_identitas_kelompok`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_kemasan_produk`
--
ALTER TABLE `tb_kemasan_produk`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_produk_olahan`
--
ALTER TABLE `tb_produk_olahan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_qry_trx_catatan_keuangan`
--
ALTER TABLE `tb_qry_trx_catatan_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_qry_trx_kegiatan`
--
ALTER TABLE `tb_qry_trx_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_qry_trx_produksi`
--
ALTER TABLE `tb_qry_trx_produksi`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_qry_trx_rencana`
--
ALTER TABLE `tb_qry_trx_rencana`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_qry_trx_surat`
--
ALTER TABLE `tb_qry_trx_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_qry_try_notulen`
--
ALTER TABLE `tb_qry_try_notulen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sapras`
--
ALTER TABLE `tb_sapras`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_trx`
--
ALTER TABLE `tb_trx`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_trx_sarpras`
--
ALTER TABLE `tb_trx_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_identitas_anggota`
--
ALTER TABLE `tb_identitas_anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_identitas_kelompok`
--
ALTER TABLE `tb_identitas_kelompok`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_kemasan_produk`
--
ALTER TABLE `tb_kemasan_produk`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_produk_olahan`
--
ALTER TABLE `tb_produk_olahan`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_qry_trx_catatan_keuangan`
--
ALTER TABLE `tb_qry_trx_catatan_keuangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_qry_trx_kegiatan`
--
ALTER TABLE `tb_qry_trx_kegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_qry_trx_produksi`
--
ALTER TABLE `tb_qry_trx_produksi`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_qry_trx_rencana`
--
ALTER TABLE `tb_qry_trx_rencana`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_qry_trx_surat`
--
ALTER TABLE `tb_qry_trx_surat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_qry_try_notulen`
--
ALTER TABLE `tb_qry_try_notulen`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sapras`
--
ALTER TABLE `tb_sapras`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_trx`
--
ALTER TABLE `tb_trx`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_trx_sarpras`
--
ALTER TABLE `tb_trx_sarpras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
