<?php
include('koneksi.php');
ob_start();
$id = $_GET['id'];

$sql = "DELETE from tb_ikan where id_ikan='$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil terhapus";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_data.php");
