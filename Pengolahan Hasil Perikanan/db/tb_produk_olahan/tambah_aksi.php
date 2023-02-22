<?php
include('../koneksi.php');
ob_start();
$id = $_POST['Id'];
$nama = $_POST['nama'];
$id_ikan = $_POST['Id_ikan'];
$bahan = $_POST['bahan'];
$cara_pembuatan = $_POST['cara_pembuatan'];
$sql = "INSERT INTO tb_produk_olahan (Id, nama, Id_ikan, bahan, cara_pembuatan) VALUES 
('$id', '$nama', '$id_ikan', '$bahan', '$cara_pembuatan')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat2.php");
