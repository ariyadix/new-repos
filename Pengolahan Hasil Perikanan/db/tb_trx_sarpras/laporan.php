<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lihat Data</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/css/main.css" rel="stylesheet" />
	<script type="text/javascript" src="chartjs/Chart.js"></script>
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
					<li class="nav-item dropdown"><a aria-expanded="false" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" id="navbarDropdown" role="button">Laporan Data </a>
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
	<title>Laporan</title>

	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="../../assets/css/styles.css" rel="stylesheet" />

	<title>GRAFIK</title>

</head>

<body>
	<center>
		<h2>Grafik Data Transaksi Sarana dan Prasarana</h2>
		<a href="laporan_pdf.php" target="_blank">Cetak</a>
	</center>
	<?php
	include 'koneksi.php';
	?>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	 <br><br>
	<!-- <div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart2"></canvas>
	</div>
	<br><br>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart3"></canvas>
	</div> --> 

	<br />
	<br />

	<!-- <table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Umur</th>
				<th>Tingkat Pendidikan</th>
			</tr>
		 </thead>
		<tbody>
			<?php
			$no = 1;
			$data = mysqli_query($koneksi, "select * from tb_trx_sarpras");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['kondisi']; ?></td>
					
					
				</tr>
				<?php
			}
				?>
		</tbody>
	 </table> -->


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [
					<?php
					$no = 0;
					$data_tahun = [];
					$data = mysqli_query($koneksi, "SELECT DISTINCT kondisi FROM tb_trx_sarpras order by kondisi ASC");
					while ($d = mysqli_fetch_array($data)) {
						$data_tahun[$no] = $d['kondisi'];
						echo "\"";
						echo $d['kondisi'];
						echo "\",";
						$no++;
					}
					?>

				],
				datasets: [{
					label: "Kondisi",
					data: [
						<?php
						$i = 0;
						while ($i < count($data_tahun)) {
							$tahun = mysqli_query($koneksi, "select * from tb_trx_sarpras  where kondisi=" . "'" . $data_tahun[$i] . "'");
							echo mysqli_num_rows($tahun);
							$i++;
						?>,
						<?php } ?>
					],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
							min: 0,
							stepSize: 1
						}
					}]
				}
			}
		});
	</script>

	
</body>
<br>
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

</html>