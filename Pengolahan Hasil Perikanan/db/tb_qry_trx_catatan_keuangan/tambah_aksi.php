<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$sql = "INSERT INTO tb_qry_trx_catatan_keuangan (id, id_kelompok, id_trx, tanggal, uraian, jenis_transaksi, kategori, jumlah) VALUES 
('$id', '$id_kelompok', '$id_trx', '$tanggal', '$uraian', '$jenis_transaksi', '$kategori', '$jumlah')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
