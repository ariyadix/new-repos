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
		<h2>GRAFIK Produk Olahan <br/>Grafik</h2>
<a href="input_data.php">+ &nbsp; Tambah Data</a>
	//
 <a href="lihat2.php">Lihat Keseluruhan</a>
 //
  <a href="modifikasi2.php">Modifikasi</a>
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
				<th>Id Ikan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tb_produk_olahan");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['id_ikan']; ?></td>
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
				labels: ["Ikan Patin"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_ikan = mysqli_query($koneksi,"select * from tb_produk_olahan where id_ikan='Ikan Patin'");
					echo mysqli_num_rows($jumlah_ikan);
					?>,
					
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