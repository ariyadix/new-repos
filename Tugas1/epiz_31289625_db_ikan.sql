-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.epizy.com
-- Generation Time: May 30, 2022 at 05:52 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31289625_db_ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikan`
--

CREATE TABLE `tb_ikan` (
  `id_ikan` int(10) NOT NULL,
  `nama_ikan_indonesia` varchar(250) NOT NULL,
  `nama_ikan_tradisional` varchar(250) NOT NULL,
  `nama_ikan_latin` varchar(250) NOT NULL,
  `id_klasifikasi_ikan` int(10) NOT NULL,
  `habitat_ikan` mediumtext NOT NULL,
  `deskripsi_ikan` longtext NOT NULL,
  `unggah_foto_ikan` varchar(250) NOT NULL,
  `embed_youtube_ikan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ikan`
--

INSERT INTO `tb_ikan` (`id_ikan`, `nama_ikan_indonesia`, `nama_ikan_tradisional`, `nama_ikan_latin`, `id_klasifikasi_ikan`, `habitat_ikan`, `deskripsi_ikan`, `unggah_foto_ikan`, `embed_youtube_ikan`) VALUES
(1, 'Ikan Nila', 'Ikan Muhajir', 'Oreochromis niloticus', 3, 'Air Tawar', 'Ikan nila (Oreochromis niloticus) merupakan salah satu komoditas penting perikanan air tawar Indonesia. Ikan nila berasal dari Afrika dan telah diperkenalkan hampir ke semua negara tropis di dunia.  Ikan nila merupakan ikan tropis yang hidup pada perairan hangat yang berasal dari benua Afrika dan memiliki sifat cepat tumbuh dan berkembang biak pada umur masih muda, sekitar 3.6 bulan Ikan nila akan mampu bertahan hidup pada air dengan salinitas 50 g/l dan tumbuh baik pada air dengan salinitas 18ppt. sedangkan ikan nila dengan jenis Tilapia Aurea dan Tilapia Nilotica akan berkembang biak dan tumbuh baik pada salinitas perairan berkisar 10-20 g/l.', 'Nila.JPG', 'https://www.youtube.com/embed/g9FNJKesHZw'),
(2, 'Ikan Mas', 'Ikan Masmasan', 'Cyprinus carpio', 3, 'Air Tawar', 'Ikan mas (Cyprinus carpio) adalah ikan air tawar yang memiliki nilai ekonomis penting dan sudah tersebar luas di Indonesia. Di Indonesia, ikan mas mulai dipelihara sekitar tahun 1920 -an. Ikan mas yang terdapat di Indonesia merupakan ikan mas yang dibawa dari Cina, Eropa, Taiwan dan Jepang. Di alam bebas ikan mas hidup di pinggiran sungai, danau, atau perairan tawar lain dengan kedalaman air yang tidak terlalu dalam dan tidak terlalu deras aliran airnya. Lingkungan perairan yang ideal untuk tempat hidup ikan mas adalah daerah dengan ketinggian 150 ï¿½ 600 m di atas permukaan laut. Habitat utama ikan mas adalah dalam air tawar. Namun dapat hidup juga di daerah muara sungai yang airnya payau.', 'Mas.JPG', 'https://www.youtube.com/embed/LVpa_2CVQIM'),
(3, 'Ikan Cakalang', 'Ikan Kausa', 'Katsuwonus pelamis', 3, 'Laut', 'Ikan Cakalang (Katsuwonus pelamis) adalah ikan berukuran sedang dari familia Skombride (tuna). Satu-satunya spesies dari genusKatsuwonus. Cakalang terbesar, panjang tubuhnya bisa mencapai 1 m dengan berat lebih dari 18 kg. Ikan cakalang termasuk ikan perenang yang cepat dan juga mempunyai pola makan tidak teratur atau rakus. Ikan cakalang juga hidup bergerombol atau membentuk suatu kelompok dalam skla yang besar. Ikan cakalang juga senang melawan arus. Suhu yang ideal untuk ikan cakalang adalah 26ï¿½C ï¿½ 32ï¿½C dan salinitas 33%. Ikan cakalang menyebar luas diseluruh perairan sub tropis dan tropis, Anatara lain lautan hindia, atlantik dan pasifik kecuali lautan mediterania. Ikan cakalang sangat menyukai daerah dimana terjadinya pertemua antara arus /air (convergence) yang pada umumnya terdapat pulau-pulau.Ikan cakalang juga perairan yang dimana terjadinya pertemua antara masa air panas dan dingin, penaikan tekanan air dan parameter hidrografi yang terdapat pencampuran yang tidak tetap. Pada siang hari biasanya ikan cakalang berada dikedalaman 260 meter dan pada malam hari ikan cakalang biasanya akan muncul kepermukaan.', 'Cakalang.JPG', 'https://www.youtube.com/embed/IfVgOx34HPg'),
(4, 'Ikan Gabus', 'Ikan Haruan', 'Channa Striata', 3, 'Air Tawar', 'Ikan gabus merupakan salah satu jenis ikan karnivora air tawar yang menghuni kawasan Asia Tenggara, namun belum banyak diketahui tentang sejarah dan sifat biologisnya. Ikan jenis ini dikenal sebagai ikan konsumsi dan banyak ditemui di pasaran. Dalam ukuran kecil (anakan) ikan gabus terlihat eksotis sehingga banyak dimanfaatkan sebagai ikan hias dalam akuarium. Di Indonesia, ikan ini dikenal dengan banyak nama daerah yaitu aruan, haruan (Malaysia, Banjarmasin, Banjarnegara), kocolan (Betawi), bogo (Sidoarjo), bayong, licingan (Banyumas), kutuk (Jawa). Spesies ini memiliki rasa yang khas, tekstur daging tebal dan putih sehingga harganya pun cukup mahal baik dalam bentuk segar maupun kering (ikan asin). Selain itu, memiliki kandungan albumin yang diperlukan tubuh manusia dalam mengatasi berbagai penyakit terutama yang disebabkan berkurangnya jumlah protein darah. Tubuh ikan gabus umumnya berwarna coklat sampai hitam pada bagian atas dan coklat muda sampai keputihputihan pada bagian perut. Kepala agak pipih dan bentuknya seperti ular dengan sisik-sisik besar di atas kepala, oleh sebab itu, dijuluki sebagai ï¿½snake headï¿½. Sisi atas tubuh ikan gabus dari kepala hingga ke ekor berwarna gelap, hitam kecoklatan atau kehijauan. Sisi bawah tubuh berwarna putih mulai dagu ke belakang. Sisi samping bercoret tebal (striata, bercoret-coret) dan agak kabur, warna tersebut seringkali menyerupai lingkungan sekitarnya. Mulut ikan gabus besar, dengan gigi-gigi yang tajam. Sirip punggung memanjang dengan sirip ekor membulat di bagian ujungnya. ', 'gabus.JPG', 'https://www.youtube.com/embed/ibtr4rOih6c'),
(5, 'Ikan Betok', 'Ikan Papuyu', 'Anabas testudineus', 3, 'Di Rawa', 'Ikan betok adalah nama sejenis ikan yang umumnya hidup liar di perairan tawar. Ikan ini juga dikenal dengan beberapa nama lain seperti betok atau betik (Jawa), puyu (Melayu) atau pepuyu (Banjar), bale ceppeï¿½ (Bugis). Ikan betok (Anabas testudineus) memiliki beragam keistimewaan diantaranya dilengkapi dengan organ labirin untuk membantu dalam proses pengambilan udara pada saat perairan mulai dangkal dan kekeringan. Ikan betok dikenal sebagai predator dalam perairan tawar yang mampu bergerak bebas dan aktif dalam mencari makanannya. Sama halnya dengan ikan lain, kebiasan makan dan cara memakan ikan betok secara alami bergantung kepada lingkungan tempat ikan itu hidup. Ikan ini memangsa aneka serangga dan hewan-hewan air yang berukuran kecil. Ikan betok jarang dipelihara orang, dan lebih sering ditangkap sebagai ikan liar. Dalam keadaan normal, sebagaimana ikan umumnya, betok bernafas dalam air dengan insang. Akan tetapi, seperti ikan gabus dan lele, betok juga memiliki kemampuan untuk mengambil oksigen langsung dari udara.', 'betok.JPG', 'https://www.youtube.com/embed/w13r1WwJaSk'),
(6, 'Ikan Tambakan', 'Ikan Biawan', 'Helostoma temminckii', 3, 'Air Tawar', 'Ikan tembakang yang disebut pula dengan nama tambakan ini biasa hidup di perairan rawa atau black fish yang banyak ditumbuhi tanaman air. Ikan tembakang bisa hidup pada saat kondisi perairan asam sekitar (pH 5, 5 sampai dengan 6, 5) dengan kadar oksigen yang relative rendah yaitu antara 3 hingga 5 mg/l. Ikan tembakang ini adalah satu-satunya ikan yang berasal dari anggota keluarga anabantidae dan bisa ditemukan di daerah Asia Tenggara. Uniknya, ikan tembakang ini selain bisa dikonsumsi dan sangat bermanfaat untuk tubuh, maka jenis ikan ini juga dipelihara  sebagai  ikan  hias,  karena  warnanya  yang  indah. ', 'tambakan.JPG', 'https://www.youtube.com/embed/DM_wKFZU4ew'),
(7, 'Ikan Hara', 'Ikan Kelabau', 'Osteochilus melanopleurus', 3, 'Air Tawar', 'Ikan bertubuh sedang, panjang total hingga 370 mm. Tinggi tubuh pada awal sirip dorsal (punggung) 2,7-3 berbanding panjang standar (tanpa sirip ekor). Panjang kepala 4-5 berbanding panjang standar. Moncong (rostrum) membulat tumpul, tanpa pori (lubang-lubang kecil) di atasnya. Sungut maksilar lebih panjang daripada diameter mata, sungut rostral lebih pendek. Sisik-sisik dengan gurat sisi berjumlah 41-53, terpisahkan dari pangkal sirip dorsal oleh 11-12 deret sisik. Sirip dorsal dengan jari-jari keras (duri) dan 16-18 jari-jari lunak, jari-jari sebelah depan memanjang, hingga setinggi tubuh atau lebih pendek. Awal sirip dorsal kira-kira sejajar dengan gurat sisi ke-12, berjarak dari belakang kepala kira-kira sejauh 20 sisik. Rumus sirip pektoral (dada) 15-17, sirip ventral (perut) 8 dan sirip anal (dubur) 5. Sisi punggung berwarna zaitun, memucat di sisi samping, dan ke bawah berwarna keperakan. Suatu noktah atau coreng besar kehitaman, vertikal, biasa terdapat di wilayah belakang gelangan bahu. Sisik-sisik dengan warna yang lebih gelap di bagian pangkalnya. Iris mata kuning atau kemerahan, sirip-sirip berwarna kemerahan atau keunguan', 'hara.JPG', 'https://www.youtube.com/embed/vUo9I8MBwoM'),
(8, 'Ikan Sepat', 'Ikan Sapat ', 'Osphronemidae', 3, 'Di Rawa', 'ikan sepat ini adalah jenis ikan air tawar yang umumnya hidup berkelompok atau bergerombol. Biasanya habitat ikan sepat ini akan lebih mudah kita temui di sungai, danau, rawa, sawah, maupun di saluran irigasi. Ikan sepat juga sering dijual di pasar, sehingga sangat mudah untuk mendapatkannya. Pada umunya ikan sepat ini jika dilihat secara sekilas maka mirip dengan ikan gurami, perbedaannya hanya di berat tubuh ikan sepat yang lebih kecil jika dibandingkan ikan gurami. Ikan sepat ini juga memiliki banyak jenis. Jenis-jenisnya yaitu seperti trichogaster leerii atau sepat mutiara, trichogaster microlepis, trichogaster pectoralis atau sepat siam, dan sepat rawa atau trichogaster trichopterus.', 'sepat.JPG', 'https://www.youtube.com/embed/UaXb8NGDYTc'),
(9, 'Ikan Betutu', 'Ikan Bakut', 'Oxyeleotris marmorata', 3, 'Air Tawar', 'Ikan betutu adalah salah satu jenis ikan air tawar, yang menyebar di Asia Tenggara hingga kepulauan Nusantara. Ikan ini memiliki bentuk yang sangat unik dan juga memiliki warna yang sangat bervariasi.  Ikan betutu ini memiliki nama latin atau ilmiah Oxyeleotris marmorata yang termasuk dalam keluarga Elotridae. kan betutu ini memiliki tubuh yang terdiri dari kepala, badan dan ekor dengan perbandingan antara 1: 4 : 1. Kepala pada ikan betutu ini sangat besar di bandingkan dengan ukuran atau bentuk tubuhnya, memiliki tutup insang, mata, hidung, mulut yang menghiasi bagian kepala. Bentuk insang ikan betutu ini gepeng atau pipih yang menutup atau membuka bagian belakang kepala. Bagian mata pada ikan betutu ini terdapat di kepala dengan ukuran bulat kecil berwarna coklat muda dan juga memiliki lingkaran yang hampir menyerupai cincin. Bagian hidung pada ikan betutu ini terletak pada bagian atas kepala, dan bagian mulut pada ikan ini berada di depan kepala yang membelah. Semua bagian ikan betutu ini di tutup dengan sisik kecil atau halus, mulai dari kepala hingga pangkal ekor dengan warna coklat muda atau campuran. Ikan ini juga terdapat bercak hitam atau cokelat, yang terdapat di bagian tertentu tubuh ikan betutu. Bagian lainnya yaitu sirip dada, sirip perut, sirip dubur, dan sirip ekor yang tampak dilihat.', 'betutu.JPG', 'https://www.youtube.com/embed/pSoccJowmY8'),
(10, 'Ikan Belida', 'Ikan Pipih', 'Chitala lopis', 3, 'Air tawar', 'Ikan air tawar pemangsa ikan kecil dan krustasea ini saat dewasa dapat tumbuh dengan bobot antara 1,5 sampai 7 kg. Secara fisik, ikan belida memiliki ciri khas berpunggung pisau, yaitu punggungnya meninggi sehingga bagian perut tampak lebar dan pipih. Belida adalah ikan yang cenderung aktif pada malam hari dan mulai berburu mangsa pada sore hari. Ikan ini menyukai area sungai yang gelap, seperti dibawah bebatuan, semak atau pepohonan. Selain dijadikan sebagai ikan konsumsi, belida juga bisa menjadi ikan hias peliharaan di aquarium. Entah disadari maupun tidak, populasi belida saat ini kian menurun. Faktor utamanya adalah karena nilai ekonomi ikan ini sehingga banyak diburu. Selain itu, bentuk uniknya yang pipih sangat menarik minat kolektor ikan hias.', 'belida.JPG', 'https://www.youtube.com/embed/YmCSl3CTtyw');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klasifikasi_ikan`
--

CREATE TABLE `tb_klasifikasi_ikan` (
  `id_klasifikasi_ikan` int(10) NOT NULL,
  `klasifikasi_ikan` varchar(250) NOT NULL,
  `keterangan_klasifikasi_ikan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_klasifikasi_ikan`
--

INSERT INTO `tb_klasifikasi_ikan` (`id_klasifikasi_ikan`, `klasifikasi_ikan`, `keterangan_klasifikasi_ikan`) VALUES
(1, 'Agnatha', 'Ikan tanpa rahang'),
(2, 'Chondrichthyes', 'Ikan bertulang rawan'),
(3, 'Osteichthyes', 'Ikan bertulang keras'),
(8, 'Caphalaspidomorphi', 'Ikan tak berahang primitif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tb_klasifikasi_ikan`
--
ALTER TABLE `tb_klasifikasi_ikan`
  ADD PRIMARY KEY (`id_klasifikasi_ikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ikan`
--
ALTER TABLE `tb_ikan`
  MODIFY `id_ikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_klasifikasi_ikan`
--
ALTER TABLE `tb_klasifikasi_ikan`
  MODIFY `id_klasifikasi_ikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
