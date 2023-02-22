<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_qry_trx_surat where id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$tujuan = $_POST['tujuan'];
$keterangan = $_POST['keterangan'];
$perihal = $_POST['perihal'];

$sql = "UPDATE tb_qry_trx_surat set id_kelompok=" . "'" . $id_kelompok . "', 
 id_trx=" . "'" . $id_trx . "', tanggal=" . "'" . $tanggal . "', 
 tujuan=" . "'" . $tujuan . "', keterangan=" . "'" . $keterangan . "',
 perihal=" . "'" . $perihal . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
