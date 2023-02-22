<?php
include ('../koneksi.php');
ob_start();
$id=$_POST['id'];
$nama_ikan=$_POST['nama_ikan'];
$keterangan_ikan=$_POST['keterangan_ikan'];
$website=$_POST['website'];
$sql="INSERT INTO tb_ikan (id, nama_ikan, keterangan_ikan, website ) VALUES 
('$id', '$nama_ikan', '$keterangan_ikan', '$website')";
if(mysqli_query($koneksi,$sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
