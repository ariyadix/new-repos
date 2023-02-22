<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_trx_sarpras where id=" . "'" . $id . "'");
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
if ($photo == null) {
	while ($d = mysqli_fetch_array($data)) {
		$photo = $d['photo'];
	}
}

$sql = "UPDATE tb_trx_sarpras set id_sarpras=" . "'" . $id_sarpras . "', 
 tanggal=" . "'" . $tanggal . "', uraian_kegiatan=" . "'" . $uraian_kegiatan . "', 
 kondisi=" . "'" . $kondisi . "', pemeriksa=" . "'" . $pemeriksa . "',
 lokasi=" . "'" . $lokasi . "',  photo=" . "'" . $photo . "'
 where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_sarpras.php");
