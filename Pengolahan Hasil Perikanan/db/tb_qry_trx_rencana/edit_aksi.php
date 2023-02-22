<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_qry_trx_rencana where Id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_anggota = $_POST['id_anggota'];
$id_transaksi = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$volume = $_POST['volume'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$sql = "UPDATE tb_qry_trx_rencana set id_kelompok=" . "'" . $id_kelompok . "', 
 id_anggota=" . "'" . $id_anggota . "', id_trx=" . "'" . $id_transaksi . "', 
 tanggal=" . "'" . $tanggal . "', uraian=" . "'" . $uraian . "',
 volume=" . "'" . $volume . "', lokasi=" . "'" . $lokasi . "', 
 keterangan=" . "'" . $keterangan . "'
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_rencana.php");
