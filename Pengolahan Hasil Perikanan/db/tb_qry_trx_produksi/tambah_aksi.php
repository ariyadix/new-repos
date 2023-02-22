<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
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
$sql = "INSERT INTO tb_qry_trx_produksi (id, id_kelompok, id_anggota, id_trx, tanggal, uraian, id_produk_olahan, id_kemasan_produk, volume, lokasi, keterangan) VALUES 
('$id', '$id_kelompok', '$id_anggota', '$id_transaksi', '$tanggal', '$uraian', '$id_produk_olahan', '$id_kemasan_produk','$volume', '$lokasi', '$keterangan')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat_produksi.php");
