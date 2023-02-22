<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_bukutamu where id=" . "'" . $id . "'");
$id_kelompok = $_POST['nama_hp'];
$id_trx = $_POST['jabatan'];
$tanggal = $_POST['tanggal'];
$uraian = $_POST['tujuan'];
$keterangan = $_POST['kesan'];
$jumlah_hadir = $_POST['pesan'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
if ($photo == null) {
	while ($d = mysqli_fetch_array($data)) {
		$photo = $d['photo'];
	}
}

$sql = "UPDATE tb_bukutamu set nama_hp=" . "'" . $id_kelompok . "', 
 jabatan=" . "'" . $id_trx . "', tanggal=" . "'" . $tanggal . "', 
 tujuan=" . "'" . $uraian . "', kesan=" . "'" . $keterangan . "',
 pesan=" . "'" . $jumlah_hadir . "', photo=" . "'" . $photo . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
