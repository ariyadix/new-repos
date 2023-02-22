<?php
include('../koneksi.php');
$data = mysqli_query($koneksi, "select*from tb_qry_trx_surat where Id=" . "'" . $_GET['id'] . "'");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/css/main.css" rel="stylesheet" />
	<header class="navbar sticky-top navbar-expand-lg navbar-dark  main-nav">
		<div class="container"><a class="navbar-brand" href="#"><img class="main-logo-putih" src="../../assets/img/header.png" /> <img class="main-logo-hitam" src="../../assets/img/header.png" /></a><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 py-3">
					<li class="nav-item"><a aria-current="page" class="nav-link" href="../../index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="../../biodata.html">Biodata</a></li>
					
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Lihat Data Kelompok </a>
						<ul aria-labelledby="navbarDropdown" class="dropdown-menu">
							<li><a class="dropdown-item" href="../tb_identitas_kelompok/lihat.php">Data Identitas Kelompok</a></li>
							<li><a class="dropdown-item" href="../tb_identitas_anggota/lihat.php">Data Identitas Anggota</a></li>
							<li><a class="dropdown-item" href="../tb_sapras/lihat.php">Data Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_ikan/lihat.php">Data Ikan</a></li>
							<li><a class="dropdown-item" href="../tb_kemasan_produk/lihat.php">Data Kemasan Produk</a></li>
							<li><a class="dropdown-item" href="../tb_produk_olahan/lihat2.php">Data Produk Olahan</a></li>
							<li><a class="dropdown-item" href="../tb_trx/lihat3.php">Data Trx</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_rencana/lihat_rencana.php">Data Qry Trx Rencana</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_produksi/lihat_produksi.php">Data Trx Produk</a></li>
							<li><a class="dropdown-item" href="../tb_trx_sarpras/lihat3.php">Data Trx Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_surat/lihat.php">Data Qry Trx Surat</a></li>
							 <li><a class="dropdown-item" href="../tb_qry_trx_notulen/lihat.php">Data Qry Trx Notulen</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_catatan_keuangan/lihat.php">Data Qry Trx Catatan Keuangan</a></li>
							<li><a class="dropdown-item" href="../tb_bukutamu/lihat.php">Data Qry Trx Catatan Buku Tamu</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Input </a>
						<ul aria-labelledby="navbarDropdown" class="dropdown-menu">
							<li><a class="dropdown-item" href="../tb_identitas_kelompok/input.php">Input Data Identitas Kelompok</a></li>
							<li><a class="dropdown-item" href="../tb_identitas_anggota/input.php">Input Data Identitas Anggota</a></li>
							<li><a class="dropdown-item" href="../tb_sapras/input.php">Input Data Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_ikan/input.php">Input Data Ikan</a></li>
							<li><a class="dropdown-item" href="../tb_kemasan_produk/input_data.php">Input Data Kemasan Produk</a></li>
							<li><a class="dropdown-item" href="../tb_produk_olahan/input_data.php">Input Data Produk Olahan</a></li>
							<li><a class="dropdown-item" href="../tb_trx/input_data.php">Input Data Trx</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_rencana/input_rencana.php">Input Data Qry Trx Rencana</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_produksi/input_data.php">Input Data Trx Produk</a></li>
							<li><a class="dropdown-item" href="../tb_trx_sarpras/input_sarpras.php">Input Data Trx Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_surat/input.php">Input Data Qry Trx Surat</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_notulen/input.php">Input Data Qry Trx Notulen</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_catatan_keuangan/input.php">Input Data Qry Trx Catatan Keuangan</a></li>
							<li><a class="dropdown-item" href="../tb_bukutamu/input.php">Input Qry Trx Catatan Buku Tamu</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Modifikasi </a>
						<ul aria-labelledby="navbarDropdown" class="dropdown-menu">
							<li><a class="dropdown-item" href="../tb_identitas_kelompok/modifikasi.php">Modifikasi Data Identitas Kelompok</a></li>
							<li><a class="dropdown-item" href="../tb_identitas_anggota/modifikasi.php">Modifikasi Data Identitas Anggota</a></li>
							<li><a class="dropdown-item" href="../tb_sapras/modifikasi.php">Modifikasi Data Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_ikan/modifikasi.php">Modifikasi Data Ikan</a></li>
							<li><a class="dropdown-item" href="../tb_kemasan_produk/modifikasi.php">Modifikasi Data Kemasan Produk</a></li>
							<li><a class="dropdown-item" href="../tb_produk_olahan/modifikasi2.php">Modifikasi Data Produk Olahan</a></li>
							<li><a class="dropdown-item" href="../tb_trx/modifikasi3.php">Modifikasi Data Trx</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_rencana/modifikasi_rencana.php">Modifikasi Data Qry Trx Rencana</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_produksi/modifikasi_produksi.php">Modifikasi Data Trx Produk</a></li>
							<li><a class="dropdown-item" href="../tb_trx_sarpras/modifikasi_sarpras.php">Modifikasi Data Trx Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_surat/modifikasi.php">Modifikasi Data Qry Trx Surat</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_notulen/modifikasi.php">Modifikasi Data Qry Trx Notulen</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_catatan_keuangan/modifikasi.php">Modifikasi Data Qry Trx Catatan Keuangan</a></li>
							<li><a class="dropdown-item" href="../tb_bukutamu/modifikasi.php">Modifikasi Data Qry Trx Catatan Buku Tamu</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Laporan Data </a>
						<ul aria-labelledby="navbarDropdown" class="dropdown-menu">
							<li><a class="dropdown-item" href="../tb_identitas_kelompok/laporan.php">Data Identitas Kelompok</a></li>
							<li><a class="dropdown-item" href="../tb_identitas_anggota/laporan.php">Data Identitas Anggota</a></li>
							<li><a class="dropdown-item" href="../tb_sapras/laporan.php">Data Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_ikan/laporan.php">Data Ikan</a></li>
							<li><a class="dropdown-item" href="../tb_kemasan_produk/laporan.php">Data Kemasan Produk</a></li>
							<li><a class="dropdown-item" href="../tb_produk_olahan/laporan.php">Data Produk Olahan</a></li>
							<li><a class="dropdown-item" href="../tb_trx/laporan.php">Data Trx</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_rencana/laporan.php">Data Qry Trx Rencana</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_produksi/laporan.php">Data Trx Produk</a></li>
							<li><a class="dropdown-item" href="../tb_trx_sarpras/laporan.php">Data Trx Sapras</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_surat/laporan.php">Data Qry Trx Surat</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_notulen/laporan.php">Data Qry Trx Notulen</a></li>
							<li><a class="dropdown-item" href="../tb_qry_trx_catatan_keuangan/laporan.php">Laporan Data Qry Trx Catatan Keuangan</a></li>
							<li><a class="dropdown-item" href="../tb_bukutamu/laporan.php">Data Qry Trx Catatan Buku Tamu</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</header>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<title>Edit Data</title>
	<link rel="icon" type="image" href="img/ulm.png" width="25px" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="../../assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top" bgcolor="red">
	<div class="content container mt-4 mb-4">
		<h2>Edit Data Transaksi Surat</h2>
		<?php
		while ($d = mysqli_fetch_array($data)) {
		?>
			<form method="post" name="formCttKeuangan" onsubmit="return validateForm()" action="edit_aksi.php" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<label>ID Kelompok : <br></label>
					<input type="text" value="<?php echo $d['id_kelompok']; ?>" name="id_kelompok" class="form-control" placeholder="Masukan ID Kelompok" required />
				</div>
				<div class="form-group">
					<label>ID Transaksi : <br></label>
					<input type="text" value="<?php echo $d['id_trx']; ?>" name="id_trx" class="form-control" placeholder="Masukan ID Transaksi" required />
				</div>
				<div class="form-group">
					<label>Tanggal : <br></label>
					<input type="date" value="<?php echo $d['tanggal']; ?>" name="tanggal" class="form-control" placeholder="Masukan Tanggal" required />
				</div>
				<div class="form-group">
					<label>Tujuan : <br></label>
					<input type="text" value="<?php echo $d['tujuan']; ?>" name="tujuan" class="form-control" placeholder="Masukan Tujuan" required />
				</div>
				<div class="form-group">
					<label>Keterangan : <br></label>
					<select name="keterangan" class="form-control" placeholder="Masukkan Keterangan" required>
						<option <?php if (!empty($d['keterangan'])) {
									echo $d['keterangan'] == '0' ? 'selected' : '';
								} ?> value="0">Pilih Keterangan</option>
						<option <?php if (!empty($d['keterangan'])) {
									echo $d['keterangan'] == 'Surat Masuk' ? 'selected' : '';
								} ?> value="Surat Masuk">Surat Masuk</option>
						<option <?php if (!empty($d['keterangan'])) {
									echo $d['keterangan'] == 'Surat Keluar' ? 'selected' : '';
								} ?> value="Surat Keluar">Surat Keluar</option>
					</select>
				</div>
			
				<div class="form-group">
					<label>Perihal : <br></label>
					<input type="text" value="<?php echo $d['perihal']; ?>" name="perihal" class="form-control" placeholder="Masukkan Perihal" required />
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		<?php
		}
		?>
	</div>
</body>
<footer>
	<div class="main-footer-menu main-biru py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mb-3">
					<div class="mb-3"><a href=""><img class="w-100" src="../../assets/img/header.png" /></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">Copyright &copy; 2021 KELOMPOK 3. Hak Cipta Dilindungi Undang-Undang.</div>
</footer>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery-3.6.0.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script>
	function validateForm() {
		if (document.forms["formCttKeuangan"]["jenis_transaksi"].selectedIndex == 0) {
			alert("Pilih Jenis Transaksi!");
			document.forms["formCttKeuangan"]["jenis_transaksi"].focus();
			return false;
		}
		if (document.forms["formCttKeuangan"]["kategori"].selectedIndex == 0) {
			alert("Pilih Kategori!");
			document.forms["formCttKeuangan"]["kategori"].focus();
			return false;
		}
	}
</script>

</html>