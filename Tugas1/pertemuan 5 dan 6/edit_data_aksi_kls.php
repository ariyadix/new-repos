<?php
include("koneksi.php");
ob_start();

$id = $_POST['id_klasifikasi_ikan'];
$klasifikasi_ikan = $_POST['klasifikasi_ikan'];
$keterangan_klasifikasi_ikan = $_POST['keterangan_klasifikasi_ikan'];

$sql = "UPDATE tb_klasifikasi_ikan set klasifikasi_ikan=" . "'" . $klasifikasi_ikan . "', 
keterangan_klasifikasi_ikan=" . "'" . $keterangan_klasifikasi_ikan . "'
where id_klasifikasi_ikan='$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil teredit";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_data_klasifikasi.php");
