<?php
//  $koneksi = mysqli_connect("localhost:3306", "penz1777_user", "uD)f]~zQ&%2Y", "penz1777_db_kelompok_pengolahan");
$koneksi = mysqli_connect("localhost", "root", "", "penz1777_db_kelompok_pengolahan");

if (mysqli_connect_errno()) {
	echo "koneksi database gagal :" . mysqli_connect_errno();
}
