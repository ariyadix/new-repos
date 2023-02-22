<?php
include("koneksi.php");
ob_start();

$id_klasifikasi_ikan = $_POST['id_klasifikasi_ikan'];
$nama_ikan_indonesia = $_POST['nama_ikan_indonesia'];
$nama_ikan_tradisional = $_POST['nama_ikan_tradisional'];
$nama_ikan_latin = $_POST['nama_ikan_latin'];
$habitat_ikan = $_POST['habitat_ikan'];
$deskripsi_ikan = $_POST['deskripsi_ikan'];
$unggah_foto_ikan = $_FILES['unggah_foto_ikan']['name'];
$file_tmp = $_FILES['unggah_foto_ikan']['tmp_name'];
$folder = 'galeri/';
$cek_photo = move_uploaded_file($file_tmp, $folder . $unggah_foto_ikan);
$embed_youtube_ikan = $_POST['embed_youtube_ikan'];
$sql = "INSERT INTO tb_ikan (nama_ikan_indonesia, id_klasifikasi_ikan, nama_ikan_tradisional, nama_ikan_latin, habitat_ikan, deskripsi_ikan, unggah_foto_ikan, embed_youtube_ikan) VALUES  
	('$nama_ikan_indonesia','$id_klasifikasi_ikan','$nama_ikan_tradisional','$nama_ikan_latin','$habitat_ikan','$deskripsi_ikan','$unggah_foto_ikan','$embed_youtube_ikan')";
if (mysqli_query($koneksi, $sql)) {
    echo "Data baru telah tersimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat_data.php");
?>