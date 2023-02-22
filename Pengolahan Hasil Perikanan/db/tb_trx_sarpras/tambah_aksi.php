<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_sarpras = $_POST['id_sarpras'];
$tanggal = $_POST['tanggal'];
$uraian_kegiatan = $_POST['uraian_kegiatan'];
$kondisi = $_POST['kondisi'];
$pemeriksa = $_POST['pemeriksa'];
$lokasi = $_POST['lokasi'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
$sql = "INSERT INTO tb_trx_sarpras (id, id_sarpras, tanggal, uraian_kegiatan, kondisi, pemeriksa, lokasi, photo) VALUES 
('$id', '$id_sarpras', '$tanggal', '$uraian_kegiatan', '$kondisi', '$pemeriksa', '$lokasi', '$photo')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat3.php");
