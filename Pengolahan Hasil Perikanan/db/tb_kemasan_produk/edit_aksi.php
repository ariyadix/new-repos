<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$ukuran_kemasan = $_POST['ukuran_kemasan'];
$keterangan_kemasan = $_POST['keterangan_kemasan'];

$sql = "UPDATE tb_kemasan_produk set ukuran_kemasan=" . "'" . $ukuran_kemasan . "', 
 keterangan_kemasan=" . "'" . $keterangan_kemasan . "' 
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
