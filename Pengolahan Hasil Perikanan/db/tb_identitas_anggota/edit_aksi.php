<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_identitas_anggota where id=" . "'" . $id . "'");
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
if ($photo == null) {
	while ($d = mysqli_fetch_array($data)) {
		$photo = $d['photo'];
	}
}

$sql = "UPDATE tb_identitas_anggota set id_kelompok=" . "'" . $id_kelompok . "', 
 nama=" . "'" . $nama . "', nik=" . "'" . $nik . "', 
 jabatan_kelompok=" . "'" . $jabatan_kelompok . "', alamat=" . "'" . $alamat . "',
 hp=" . "'" . $hp . "', tingkat_pendidikan=" . "'" . $tingkat_pendidikan . "', 
 umur=" . "'" . $umur . "', usaha_selain_perikanan=" . "'" . $usaha_selain_perikanan . "', 
 mulai_usaha_perikanan=" . "'" . $mulai_usaha_perikanan . "', photo=" . "'" . $photo . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
