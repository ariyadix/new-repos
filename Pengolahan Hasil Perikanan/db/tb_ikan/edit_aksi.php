<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$nama_ikan = $_POST['nama_ikan'];
$keterangan_ikan = $_POST['keterangan_ikan'];
$website = $_POST['website'];

$sql = "UPDATE tb_ikan set nama_ikan=" . "'" . $nama_ikan . "', 
 keterangan_ikan=" . "'" . $keterangan_ikan . "', website=" . "'" . $website . "'
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
