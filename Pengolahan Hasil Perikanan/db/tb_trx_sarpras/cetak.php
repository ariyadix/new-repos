<!DOCTYPE html>
<html>
<head>
	<title>GRAFIK</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>GRAFIK Trx Sarpras <br/>Grafik</h2>
<a href="input_data.php">+ &nbsp; Tambah Data</a>
	//
 <a href="lihat3.php">Lihat Keseluruhan</a>
 //
  <a href="modifikasi_sarpras.php">Modifikasi</a>
  //
  <a href="laporan.php">Laporan</a>
   //
  <a href="laporan_pdf.php">Cetak</a>
     <br/>
	 <br/>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Sarpras</th>
				<th>Kondisi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tb_trx_sarpras");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['id_sarpras']; ?></td>
					<td><?php echo $d['kondisi']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Baskom", "Talenan", "Pisau", "Piring Melamin", "Spatula", "Regulator", "Serok", "Parutan", "Centong", "Timbangan Digital", 
				"Sendok Sayur", "Kompor", "Panci", "Wajan", "Sendok", "Sealer", "Penggiling Daging",],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_Baskom = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Baskom'");
					echo mysqli_num_rows($jumlah_Baskom);
					?>,
					<?php 
					$jumlah_Talenan = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Talenan'");
					echo mysqli_num_rows($jumlah_Talenan);
					?>,
					<?php 
					$jumlah_Pisau = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Pisau'");
					echo mysqli_num_rows($jumlah_Pisau);
					?>,
					<?php 
					$jumlah_Pisau = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Pisau'");
					echo mysqli_num_rows($jumlah_Pisau);
					?>,
					<?php 
					$jumlah_PiringMelamin = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Piring Melamin'");
					echo mysqli_num_rows($jumlah_PiringMelamin);
					?>,
					<?php 
					$jumlah_Spatula = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Spatula'");
					echo mysqli_num_rows($jumlah_Spatula);
					?>,
					<?php 
					$jumlah_Regulator = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Regulator'");
					echo mysqli_num_rows($jumlah_Regulator);
					?>,
					<?php 
					$jumlah_Serok = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Serok'");
					echo mysqli_num_rows($jumlah_Serok);
					?>,
					<?php 
					$jumlah_Parutan = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Parutan'");
					echo mysqli_num_rows($jumlah_Parutan);
					?>,
					<?php 
					$jumlah_Centong = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Centong'");
					echo mysqli_num_rows($jumlah_Centong);
					?>,
					<?php 
					$jumlah_TimbanganDigital = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Parutan'");
					echo mysqli_num_rows($jumlah_Parutan);
					?>,
					<?php 
					$jumlah_SendokSayur = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Sendok Sayur'");
					echo mysqli_num_rows($jumlah_SendokSayur);
					?>,
					<?php 
					$jumlah_Kompor = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Kompor'");
					echo mysqli_num_rows($jumlah_Kompor);
					?>,
					<?php 
					$jumlah_Panci = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Panci'");
					echo mysqli_num_rows($jumlah_Panci);
					?>,
					<?php 
					$jumlah_Wajan = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Wajan'");
					echo mysqli_num_rows($jumlah_Wajan);
					?>,
					<?php 
					$jumlah_Sendok = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Sendok'");
					echo mysqli_num_rows($jumlah_Sendok);
					?>,
					<?php 
					$jumlah_Sealer = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Sealer'");
					echo mysqli_num_rows($jumlah_Sealer);
					?>,
					<?php 
					$jumlah_PenggilingDaging = mysqli_query($koneksi,"select * from tb_trx_sarpras where id_sarpras='Penggiling Daging'");
					echo mysqli_num_rows($jumlah_PenggilingDaging);
					?>
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
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	<script>
		window.print();
	 </script>
</body>
</html>