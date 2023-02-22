<?php include ('koneksi.php');?>
<html>
<head>
<title>
</title>
</head>
<body>
<br>
 <a href="lihat.php">Kembali</a>
<h2>Hasil Pencarian :</h2>
<?php
$query = $_GET['cari']; 
$no = 1;
$min_length = 3;
if(strlen($query) >= $min_length){
$query = htmlspecialchars($query); 
$query = mysqli_real_escape_string($koneksi,$query);
$raw_results = mysqli_query($koneksi, "SELECT * FROM tb_identitas_anggota WHERE (`id_kelompok` LIKE 
'%".$query."%') OR (`nama` LIKE '%".$query."%') OR (`nik` LIKE '%".$query."%') OR (`jabatan_kelompok` LIKE '%".$query."%') OR (`alamat` LIKE '%".$query."%') OR (`hp` LIKE '%".$query."%') OR (`tingkat_pendidikan` LIKE '%".$query."%')OR (`umur` LIKE '%".$query."%')OR (`usaha_selain_perikanan` LIKE '%".$query."%')OR (`mulai_usaha_perikanan` LIKE '%".$query."%') OR (`photo` LIKE '%".$query."%')
") or die(mysql_error());
if(mysqli_num_rows($raw_results) > 0){ 
while($results = mysqli_fetch_array($raw_results)){
?>
<?php echo $no++; ?>
Id Kelompok : <?php echo $results['id_kelompok']; ?> <br> 
Nama : <?php echo $results['nama']; ?><br>
Nik : <?php echo $results['nik']; ?><br>
Jabatan Kelompok : <?php echo $results['jabatan_kelompok']; ?><br>
Alamat : <?php echo $results['alamat']; ?><br>
Hp : <?php echo $results['hp']; ?><br>
Tingkat Pendidikan : <?php echo $results['tingkat_pendidikan']; ?><br>
Umur : <?php echo $results['umur']; ?><br>
Usaha Selain Perikanan : <?php echo $results['usaha_selain_perikanan']; ?><br>
Mulai Usaha Perikanan : <?php echo $results['mulai_usaha_perikanan']; ?><br>
Photo : <?php echo $results['photo']; ?><br>
<?php 
 }
 }
 else{ echo "Tidak ditemukan data dalam database"; } }
 else{ 
 echo "huruf minimal untuk pencarian : ".$min_length; }
?>
</body>
</html>