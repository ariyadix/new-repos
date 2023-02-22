<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Data</title>
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
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Input </a>
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
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Modifikasi </a>
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
	<title>Penginputan Data</title>
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
		<h2>Input Data Identitas Kelompok</h2>
		<form method="post" name="formKelompok" action="tambah_aksi.php" enctype="multipart/form-data" onsubmit="return validateForm()">
			<div class="form-group">
				<input type="hidden" name="id">
				<label>Nama Kelompok : <br></label>
				<input type="text" name="nama_kelompok" class="form-control" placeholder="Masukan Nama Kelompok" required />
			</div>
			<div class="form-group">
				<label>Tahun Berdiri : <br></label>
				<input type="number" min="0" max="9999" pattern="[0-9]{4}" name="tahun_berdiri" class="form-control" placeholder="Masukan Tahun Berdiri" required />
			</div>
			<div class="form-group">
				<label>Nomor Surat : <br></label>
				<input type="text" name="nomor_surat" class="form-control" placeholder="Masukan Nomor Surat" required />
			</div>
			<div class="form-group">
				<label>Upload Surat :</label><br>
				<small style="align: left; color:grey;">Tambahkan File Surat</small>
				<input type="file" name="upload_surat" required />
			</div>
			<div class="form-group">
				<label>Status Kelompok : <br></label>
				<select name="status_kelompok" class="form-control" placeholder="Masukkan Status Kelompok" required>
					<option value="0">Pilih Status Kelompok</option>
					<option value="Pemula">Pemula</option>
					<option value="Utama">Utama</option>
				</select>
			</div>
			<div class="form-group">
				<label>Titik Lokasi : <br></label>
				<input type="text" name="titik_lokasi" class="form-control" placeholder="Masukkan Titik Lokasi" required />
			</div>
			<div class="form-group">
				<label>Alamat : <br></label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required />
			</div>
			<div class="form-group">
				<label>Penyuluh Pedamping : <br></label>
				<input type="text" name="penyuluh_pendamping" class="form-control" placeholder="Masukkan Penyuluh Pendamping" required />
			</div>
			<div class="form-group">
				<label>Logo Kelompok : </label><br>
				<small style="align: left; color:grey;">Tambahkan Foto Logo</small>
				<input type="file" name="logo_kelompok" id="logo_kelompok" accept="image/jpg, image/jpeg, image/png, image/gif" onchange="return validasiFile()" required />
			</div>
			<div id="pratinjauGambar"></div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
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
	var gradeField = document.querySelector("input[name=tahun_berdiri]");

	gradeField.addEventListener("invalid", function() {
		this.setCustomValidity('');
		if (!this.validity.valid) {
			this.setCustomValidity('Nilai tahun salah');
		}
	});

	function validateForm() {
		if (document.forms["formKelompok"]["status_kelompok"].selectedIndex == 0) {
			alert("Pilih Status Kelompok!");
			document.forms["formKelompok"]["status_kelompok"].focus();
			return false;
		}
	}
</script>
<script>
	function validasiFile() {
		var inputFile = document.getElementById('logo_kelompok');
		var pathFile = inputFile.value;
		var ekstensiOk = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
		if (!ekstensiOk.exec(pathFile)) {
			alert('Silakan upload file yang memiliki ekstensi .jpeg/.jpg/.png/.gif');
			inputFile.value = '';
			return false;
		} else {
			//Pratinjau gambar
			if (inputFile.files && inputFile.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('pratinjauGambar').innerHTML = '<img src="' + e.target.result + '" width="100" height="100"/><br><br>';
				};
				reader.readAsDataURL(inputFile.files[0]);
			}
		}
	}
</script>

</html>