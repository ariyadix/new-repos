<?php
include("koneksi.php");
ob_start();

$klasifikasi_ikan = $_POST['klasifikasi_ikan'];
$keterangan_klasifikasi_ikan = $_POST['keterangan_klasifikasi_ikan'];
$sql = "INSERT INTO tb_klasifikasi_ikan (klasifikasi_ikan, keterangan_klasifikasi_ikan) VALUES  
	('$klasifikasi_ikan','$keterangan_klasifikasi_ikan')";
if (mysqli_query($koneksi, $sql)) {
    echo "Data baru telah tersimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:lihat_data_klasifikasi.php");
?>