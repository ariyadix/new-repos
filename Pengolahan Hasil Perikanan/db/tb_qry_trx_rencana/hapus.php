<?php
include('../koneksi.php');
ob_start();
$id = $_GET['id'];

$sql = "DELETE from tb_qry_trx_rencana where id='$id'";
if (mysqli_query($koneksi, $sql)) {
	echo "New record delete successfully";
} else {
	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
header("location:modifikasi_rencana.php");
