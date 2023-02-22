<?php
// $koneksi=mysqli_connect("sql202.epizy.com","epiz_31289625","gwoiWmGa8zJX","epiz_31289625_db_ikan");
$koneksi=mysqli_connect("localhost","root","","epiz_31289625_db_ikan");
if (mysqli_connect_error())
{
    echo "Koneksi database gagal:".mysqli_connect_error();
}
