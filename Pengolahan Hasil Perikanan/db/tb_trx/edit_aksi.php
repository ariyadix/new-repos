<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_trx where Id=" . "'" . $id . "'");

$transaksi = $_POST['transaksi'];
$keterangan_trx = $_POST['keterangan_trx'];


$sql = "UPDATE tb_trx set transaksi=" . "'" . $transaksi . "', 
 keterangan_trx=" . "'" . $keterangan_trx . "' 
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi3.php");
