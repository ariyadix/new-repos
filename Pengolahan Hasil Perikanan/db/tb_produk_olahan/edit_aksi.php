<?php
include('../koneksi.php');
ob_start();
$id = $_POST['Id'];
$data = mysqli_query($koneksi, "select*from tb_produk_olahan where id=" . "'" . $id . "'");
$nama = $_POST['nama'];
$id_ikan = $_POST['Id_ikan'];
$bahan = $_POST['bahan'];
$cara_pembuatan = $_POST['cara_pembuatan'];
$sql = "UPDATE tb_produk_olahan set nama=" . "'" . $nama . "', 
 Id_ikan=" . "'" . $id_ikan . "', bahan=" . "'" . $bahan . "', 
 cara_pembuatan=" . "'" . $cara_pembuatan . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi2.php");
