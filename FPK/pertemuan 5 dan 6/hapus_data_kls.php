<?php
include('koneksi.php');
ob_start();
$id = $_GET['id_klasifikasi_ikan'];

$sql = "DELETE from tb_klasifikasi_ikan where id_klasifikasi_ikan='$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil terhapus";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_data_klasifikasi.php");
