<?php
include('../koneksi.php');
ob_start();
$id = $_POST['id'];
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

$sql = "INSERT INTO tb_sapras (Id, Id_kelompok, Id_anggota, kode_barang, nama_barang, jenis, tanggal_terima, keterangan, ukuran, jumlah, sumber, lokasi, kondisi_barang, photo) VALUES 
('$id', '$id_kelompok', '$id_anggota', '$kode_barang', '$nama_barang', '$jenis', '$tanggal_terima', '$keterangan', '$ukuran', '$jumlah', '$sumber', '$lokasi', '$kondisi_barang', '$photo')";
if (mysqli_query($koneksi, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat.php");
