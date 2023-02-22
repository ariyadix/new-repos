<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_qry_trx_produksi where id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_anggota = $_POST['id_anggota'];
$id_transaksi = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$id_produk_olahan = $_POST['id_produk_olahan'];
$id_kemasan_produk = $_POST['id_kemasan_produk'];
$volume = $_POST['volume'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$sql = "UPDATE tb_qry_trx_produksi set id_kelompok=" . "'" . $id_kelompok . "', 
 id_anggota=" . "'" . $id_anggota . "', id_trx=" . "'" . $id_transaksi . "', 
 tanggal=" . "'" . $tanggal . "', uraian=" . "'" . $uraian . "',
 id_produk_olahan=" . "'" . $id_produk_olahan . "', id_kemasan_produk=" . "'" . $id_kemasan_produk . "',volume=" . "'" . $volume . "', lokasi=" . "'" . $lokasi . "', 
 keterangan=" . "'" . $keterangan . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_produksi.php");
