<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$keterangan = $_POST['keterangan'];
$perihal = $_POST['jumlah_hadir'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
$sql = "INSERT INTO tb_qry_trx_notulen (id, id_kelompok, id_trx, tanggal, uraian, keterangan, jumlah_hadir, photo) VALUES 
('$id', '$id_kelompok', '$id_trx', '$tanggal', '$uraian', '$keterangan', '$perihal', '$photo')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
