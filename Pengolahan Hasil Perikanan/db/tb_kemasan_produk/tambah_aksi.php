<?php
include ('../koneksi.php');
ob_start();
$id=$_POST['id'];
$ukuran_kemasan=$_POST['ukuran_kemasan'];
$keterangan_kemasan=$_POST['keterangan_kemasan'];


$sql="INSERT INTO tb_kemasan_produk (id, ukuran_kemasan, keterangan_kemasan) VALUES 
('$id', '$ukuran_kemasan', '$keterangan_kemasan')";
if(mysqli_query($koneksi,$sql)){
	echo "New record created successfully";
}else{
	echo "Error:".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
?>