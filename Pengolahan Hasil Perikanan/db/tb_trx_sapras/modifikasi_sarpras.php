<!DOCTYPE html>
<html>
<head>
     <title> Modifikasi Data Sarana dan Prasarana</title>
</head>
<body>
<a href="http://localhost/Aiayah%20Terbaru/Gabungan/cc.html">Beranda</a>
//
  <a href="input_data.php">Tambah Data</a>
  //
   <a href="lihat.php">Lihat Keseluruhan</a>
  //
  <a href="laporan.php">Laporan</a>
     <br/>
	 <br/>
  <br><center>
 <form action="cari_aksi.php" method="GET">
 <input type="text" name="cari" />
 <input type="submit" value="Cari" />
 </form>
<br></center>

	 <table border="1">
	        <tr>
			<th>Nomor</th>
			<th>Id</th>
			<th>Id Sarpras</th>
			<th>Tanggal</th>
			<th>Uraian Kegiatan</th>
			<th>Kondisi</th>
			<th>Pemeriksa</th>
			<th>Lokasi</th>
			<th>Photo</th>

			<th>Aksi</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			
			$data=mysqli_query($koneksi,"select*from tb_trx_sarpras");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
				    <td><?php echo $no++;?></td>
					<td><?php echo $d['id']; ?></td>
					<td><?php echo $d['id_sarpras']; ?></td>
					<td><?php echo $d['tanggal']; ?></td>
					<td><?php echo $d['uraian_kegiatan']; ?></td>
					<td><?php echo $d['kondisi']; ?></td>
					<td><?php echo $d['pemeriksa']; ?></td>
					<td><?php echo $d['lokasi']; ?></td>
					<td><?php echo $d['photo']; ?></td>
					<td>| <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>|<a href="hapus.php?id=<?php echo $d['id'];?>">Hapus</a>|</td>
					</tr>
					<?php
			}
			?>
			</table>
			</body>
			</html>