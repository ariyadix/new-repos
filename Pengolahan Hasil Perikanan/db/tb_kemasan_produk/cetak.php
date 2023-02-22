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
		<h2>GRAFIK Kemasan Produk <br/>Grafik</h2>
<a href="input.php">+ &nbsp; Tambah Data</a>
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
				<th>Ukuran Kemasan</th>
				<th>Keterangan Kemasan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tb_kemasan_produk");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['ukuran_kemasan']; ?></td>
					<td><?php echo $d['keterangan_kemasan']; ?></td>
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
				labels: ["Besar", "Sedang", "Kecil"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_besar = mysqli_query($koneksi,"select * from tb_kemasan_produk where ukuran_kemasan='Besar'");
					echo mysqli_num_rows($jumlah_besar);
					?>,
					<?php 
					$jumlah_sedang = mysqli_query($koneksi,"select * from tb_kemasan_produk where ukuran_kemasan='Sedang'");
					echo mysqli_num_rows($jumlah_sedang);
					?>,
					<?php 
					$jumlah_kecil = mysqli_query($koneksi,"select * from tb_kemasan_produk where ukuran_kemasan='Kecil'");
					echo mysqli_num_rows($jumlah_kecil);
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