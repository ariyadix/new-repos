<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_kelompok = $_POST['nama_hp'];
$id_trx = $_POST['jabatan'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['tujuan'];
$keterangan = $_POST['kesan'];
$perihal = $_POST['pesan'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
$sql = "INSERT INTO tb_bukutamu (id, nama_hp, jabatan, tanggal, tujuan, kesan, pesan, photo) VALUES 
('$id', '$id_kelompok', '$id_trx', '$tanggal', '$uraian', '$keterangan', '$perihal', '$photo')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
