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
		<h2>GRAFIK <br/>Grafik</h2>
<a href="input_data.php">+ &nbsp; Tambah Data</a>
	//
 <a href="lihat3.php">Lihat Keseluruhan</a>
 //
  <a href="modifikasi.php">Modifikasi</a>
  //
  <a href="laporan.php">Laporan</a>
   //
  <a href="Laporan_pdf.php">Cetak</a>
     <br/>
	 <br/>
	</center>
 <center><a href="cetak.php" target="_blank">CETAK</a></center>
 <br/>
  <br/>
 
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
				<th>Transaksi</th>
				<th>Keterangan Trx</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tb_trx");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['transaksi']; ?></td>
					<td><?php echo $d['keterangan_trx']; ?></td>
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
				labels: [
					<?php
					$no = 0;
					$data_tahun = [];
					$data = mysqli_query($koneksi, "SELECT DISTINCT transaksi FROM tb_trx order by transaksi ASC");
					while ($d = mysqli_fetch_array($data)) {
						$data_tahun[$no] = $d['transaksi'];
						echo "\"";
						echo $d['transaksi'];
						echo "\",";
						$no++;
					}
					?>
						],
				datasets: [{
					label: "transaksi",
					data: [
						<?php
						$i = 0;
						while ($i < count($data_tahun)) {
							$tahun = mysqli_query($koneksi, "select * from tb_trx where transaksi=" . "'" . $data_tahun[$i] . "'");
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
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>