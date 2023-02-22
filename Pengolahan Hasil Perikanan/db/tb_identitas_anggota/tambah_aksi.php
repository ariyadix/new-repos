<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_kelompok = $_POST['id_kelompok'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jabatan_kelompok = $_POST['jabatan_kelompok'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$tingkat_pendidikan = $_POST['tingkat_pendidikan'];
$umur = $_POST['umur'];
$usaha_selain_perikanan = $_POST['usaha_selain_perikanan'];
$mulai_usaha_perikanan = $_POST['mulai_usaha_perikanan'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
$sql = "INSERT INTO tb_identitas_anggota (id, id_kelompok, nama, nik, jabatan_kelompok, alamat, hp,tingkat_pendidikan, umur, usaha_selain_perikanan, mulai_usaha_perikanan, photo) VALUES 
('$id', '$id_kelompok', '$nama', '$nik', '$jabatan_kelompok', '$alamat', '$hp', '$tingkat_pendidikan', '$umur', '$usaha_selain_perikanan', '$mulai_usaha_perikanan', '$photo')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
