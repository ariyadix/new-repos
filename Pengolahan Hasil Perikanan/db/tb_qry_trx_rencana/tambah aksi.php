<?php
include ('koneksi.php');
$id=$_POST['id'];
$id_kelompok=$_POST['id_kelompok'];
$id_anggota=$_POST['id_anggota'];
$id_trx=$_POST['id_trx'];
$tanggal=$_POST['tanggal'];
$uraian=$_POST['uraian'];
$volume=$_POST['volume'];
$lokasi=$_POST['lokasi'];
$keterangan=$_POST['keterangan'];
$sql="INSERT INTO tb_qry_trx_rencana (id, id_kelompok, id_anggota, id_trx, tanggal, uraian, volume, lokasi, keterangan, ) VALUES 
if(mysqli_query($koneksi,$sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
?>