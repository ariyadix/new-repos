<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$tujuan = $_POST['tujuan'];
$keterangan = $_POST['keterangan'];
$perihal = $_POST['perihal'];
$sql = "INSERT INTO tb_qry_trx_surat (id, id_kelompok, id_trx, tanggal, tujuan, keterangan, perihal) VALUES 
('$id', '$id_kelompok', '$id_trx', '$tanggal', '$tujuan', '$keterangan', '$perihal')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
