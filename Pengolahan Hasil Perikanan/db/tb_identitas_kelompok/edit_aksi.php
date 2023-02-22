<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_identitas_kelompok where Id=" . "'" . $id . "'");

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
echo $logo_kelompok;
if ($logo_kelompok == null) {
	while ($d = mysqli_fetch_array($data)) {
		$logo_kelompok = $d['logo_kelompok'];
	}
} elseif ($upload_surat == null) {
	while ($d = mysqli_fetch_array($data)) {
		$upload_surat = $d['upload_surat'];
	}
} else {
	while ($d = mysqli_fetch_array($data)) {
		$upload_surat = $d['upload_surat'];
		$logo_kelompok = $d['logo_kelompok'];
	}
}
$file_tmp = $_FILES['logo_kelompok']['tmp_name'];
$folder = '../file/logo/';
$cek_surat = move_uploaded_file($file_tmp, $folder . $logo_kelompok);
// $logo_kelompok = $_POST['logo_kelompok'];

$sql = "UPDATE tb_identitas_kelompok set nama_kelompok=" . "'" . $nama_kelompok . "', 
 tahun_berdiri=" . "'" . $tahun_berdiri . "', nomor_surat=" . "'" . $nomor_surat . "', 
 upload_surat=" . "'" . $upload_surat . "', status_kelompok=" . "'" . $status_kelompok . "',
 titik_lokasi=" . "'" . $titik_lokasi . "', alamat=" . "'" . $alamat . "', 
 penyuluh_pendamping=" . "'" . $penyuluh_pendamping . "', logo_kelompok=" . "'" . $logo_kelompok . "' 
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
