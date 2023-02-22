<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_qry_trx_notulen where id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_trx = $_POST['id_trx'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['uraian'];
$keterangan = $_POST['keterangan'];
$jumlah_hadir = $_POST['jumlah_hadir'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
if ($photo == null) {
	while ($d = mysqli_fetch_array($data)) {
		$photo = $d['photo'];
	}
}

$sql = "UPDATE tb_qry_trx_notulen set id_kelompok=" . "'" . $id_kelompok . "', 
 id_trx=" . "'" . $id_trx . "', tanggal=" . "'" . $tanggal . "', 
 uraian=" . "'" . $uraian . "', keterangan=" . "'" . $keterangan . "',
 jumlah_hadir=" . "'" . $jumlah_hadir . "', photo=" . "'" . $photo . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
