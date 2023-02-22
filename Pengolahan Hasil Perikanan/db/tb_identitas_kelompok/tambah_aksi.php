<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$nama_kelompok = $_POST['nama_kelompok'];
$tahun_berdiri = $_POST['tahun_berdiri'];
$nomor_surat = $_POST['nomor_surat'];

$upload_surat = $_FILES['upload_surat']['name'];
$file_tmp = $_FILES['upload_surat']['tmp_name'];
$folder = '../file/surat/';
$cek_surat = move_uploaded_file($file_tmp, $folder . $upload_surat);
// $upload_surat = $_POST['upload_surat'];

$status_kelompok = $_POST['status_kelompok'];
$titik_lokasi = $_POST['titik_lokasi'];
$alamat = $_POST['alamat'];
$penyuluh_pendamping = $_POST['penyuluh_pendamping'];

$logo_kelompok = $_FILES['logo_kelompok']['name'];
$file_tmp = $_FILES['logo_kelompok']['tmp_name'];
$folder = '../file/logo/';
$cek_logo = move_uploaded_file($file_tmp, $folder . $logo_kelompok);
// $logo_kelompok = $_POST['logo_kelompok'];

$sql = "INSERT INTO tb_identitas_kelompok (id, nama_kelompok, tahun_berdiri, nomor_surat, upload_surat, status_kelompok, titik_lokasi, alamat, penyuluh_pendamping, logo_kelompok) VALUES 
('$id', '$nama_kelompok', '$tahun_berdiri', '$nomor_surat', '$upload_surat', '$status_kelompok', '$titik_lokasi', '$alamat', '$penyuluh_pendamping', '$logo_kelompok')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
