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
		<h2>GRAFIK Identitas Anggota <br/>Grafik</h2>
<a href="input_data.php">+ &nbsp; Tambah Data</a>
	//
 <a href="lihat.php">Lihat Keseluruhan</a>
 //
  <a href="modifikasi.php">Modifikasi</a>
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
				<th>Nama Kelompok</th>
				<th>Tingkat Pendidikan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tb_identitas_anggota");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['tingkat_pendidikan']; ?></td>
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
				labels: ["Tidak Lulus", "SD/MI", "SMP/SLTP/MTs", "SMA/SLTA/MA/SMK", "D3", "D4", "S1", "S2"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_tdlulus = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='Tidak Lulus SD'");
					echo mysqli_num_rows($jumlah_tdlulus);
					?>,
					<?php 
					$jumlah_SD = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='SD/MI'");
					echo mysqli_num_rows($jumlah_SD);
					?>,
					<?php 
					$jumlah_D1 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='SMP/SLTP/MTs'");
					echo mysqli_num_rows($jumlah_D1);
					?>,
					<?php 
					$jumlah_D2 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='SMA/SLTA/MA/SMK'");
					echo mysqli_num_rows($jumlah_D2);
					?>,
					<?php 
					$jumlah_D3 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='D3'");
					echo mysqli_num_rows($jumlah_D3);
					?>,
					<?php 
					$jumlah_D4 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='D4'");
					echo mysqli_num_rows($jumlah_D4);
					?>,
					<?php 
					$jumlah_S1 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='S1'");
					echo mysqli_num_rows($jumlah_S1);
					?>,
					<?php 
					$jumlah_S2 = mysqli_query($koneksi,"select * from tb_identitas_anggota where tingkat_pendidikan='S2'");
					echo mysqli_num_rows($jumlah_S2);
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