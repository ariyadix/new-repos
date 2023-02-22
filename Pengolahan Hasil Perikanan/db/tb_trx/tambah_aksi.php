<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$transaksi = $_POST['transaksi'];
$keterangan_trx = $_POST['keterangan_trx'];

$sql = "INSERT INTO tb_trx (id, transaksi, keterangan_trx) VALUES 
('$id', '$transaksi', '$keterangan_trx')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat3.php");
