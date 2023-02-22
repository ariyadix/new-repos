<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
$data = mysqli_query($koneksi, "select*from tb_sapras where id=" . "'" . $id . "'");
$id_kelompok = $_POST['id_kelompok'];
$id_anggota = $_POST['id_anggota'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$tanggal_terima = $_POST['tanggal_terima'];
$keterangan = $_POST['keterangan'];
$ukuran = $_POST['ukuran'];
$jumlah = $_POST['jumlah'];
$sumber = $_POST['sumber'];
$lokasi = $_POST['lokasi'];
$kondisi_barang = $_POST['kondisi_barang'];
$photo = $_FILES['photo']['name'];
$file_tmp = $_FILES['photo']['tmp_name'];
$folder = '../file/photo/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $photo);
if ($photo == null) {
	while ($d = mysqli_fetch_array($data)) {
		$photo = $d['photo'];
	}
}

$sql = "UPDATE tb_sapras set Id_kelompok=" . "'" . $id_kelompok . "', Id_anggota=" . "'" . $id_anggota . "', 
 kode_barang=" . "'" . $kode_barang . "', nama_barang=" . "'" . $nama_barang . "', jenis=" . "'" . $jenis . "', 
 tanggal_terima=" . "'" . $tanggal_terima . "', keterangan=" . "'" . $keterangan . "',
 ukuran=" . "'" . $ukuran . "', jumlah=" . "'" . $jumlah . "', 
 sumber=" . "'" . $sumber . "', lokasi=" . "'" . $lokasi . "', 
 kondisi_barang=" . "'" . $kondisi_barang . "', photo=" . "'" . $photo . "'
 where Id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record edit successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi.php");
