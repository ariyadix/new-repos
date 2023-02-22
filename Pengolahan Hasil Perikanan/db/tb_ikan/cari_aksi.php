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
$raw_results = mysqli_query($koneksi, "SELECT * FROM tb_ikan WHERE (`nama_ikan` LIKE 
'%".$query."%') OR (`keterangan_ikan` LIKE '%".$query."%') OR (`website` LIKE '%".$query."%') 
") or die(mysql_error());
if(mysqli_num_rows($raw_results) > 0){ 
while($results = mysqli_fetch_array($raw_results)){
?>
<?php echo $no++; ?>
Nama Ikan: <?php echo $results['nama_ikan']; ?> <br> 
Keterangan Ikan : <?php echo $results['keterangan_ikan']; ?><br>
Website : <?php echo $results['website']; ?><br>
<?php 
 }
 }
 else{ echo "Tidak ditemukan data dalam database"; } }
 else{ 
 echo "huruf minimal untuk pencarian : ".$min_length; }
?>
</body>
</html>