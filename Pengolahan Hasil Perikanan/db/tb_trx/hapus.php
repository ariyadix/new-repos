<?php
include('../koneksi.php');
ob_start();
$id = $_GET['id'];
// $data = mysqli_query($koneksi, "select*from tb_identitas_kelompok where Id=" . "'" . $id . "'");

$sql = "DELETE from tb_trx where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record delete successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi3.php");
