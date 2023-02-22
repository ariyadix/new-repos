<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_qry_trx_catatan_keuangan where id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$sql = "UPDATE tb_qry_trx_catatan_keuangan set id_kelompok=" . "'" . $id_kelompok . "', 
 id_trx=" . "'" . $id_trx . "', tanggal=" . "'" . $tanggal . "', 
 uraian=" . "'" . $uraian . "', jenis_transaksi=" . "'" . $jenis_transaksi . "',
 kategori=" . "'" . $kategori . "', jumlah=" . "'" . $jumlah . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
