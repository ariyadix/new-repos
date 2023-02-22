<?php
include ('koneksi.php');
$id=$_POST['id'];
$id_sarpras=$_POST['id_sarpras'];
$tanggal=$_POST['tanggal'];
$urairan_kegiatan=$_POST['urairan_kegiatan'];
$kondisi=$_POST['kondisi'];
$pemeriksa=$_POST['pemeriksa'];
$lokasi=$_POST['lokasi'];
$photo=$_POST['photo'];

$sql="INSERT INTO tb_trx_sarpras (id, id_sarpras, tanggal, uraian, kondisi, pemeriksa, lokasi, photo) VALUES 
('$id', '$id_sarpras', '$tanggal', '$uraian_kegiatan', '$kondisi', '$pemeriksa', '$lokasi','$photo')";
if(mysqli_query($koneksi,$sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
?>