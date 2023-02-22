<?php
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../koneksi.php';
$id = $_GET['id'];
$proses = $_GET['proses'];
$namabuku = $_POST['namabuku'];
$jenisbuku = $_POST['jenisbuku'];
$pengarang = $_POST['pengarang'];
$pembimbing1 = $_POST['pembimbing1'];
$pembimbing2 = $_POST['pembimbing2'];
$penguji1 = $_POST['penguji1'];
$penguji2 = $_POST['penguji2'];
$penguji3 = $_POST['penguji3'];
$departemen = $_POST['departemen'];
$tahunterbit = $_POST['tahunterbit'];
$tahunpenelitian = $_POST['tahunpenelitian'];

$upload_file = $_FILES['upload_file']['name'];
// $file_tmp = $_FILES['upload_file']['tmp_name'];
// $folder = 'file/';
// $cek_file = move_uploaded_file($file_tmp, $folder . $upload_file);
// if ($upload_file == null) {
// 	while ($d = mysqli_fetch_array($data)) {
// 		$upload_file = $d['upload_file'];
// 	}
// }

if(isset($_FILES['upload_file']['name'])){
    $upload_file = $_FILES['upload_file']['name'];
    $file_tmp = $_FILES['upload_file']['tmp_name'];
    $folder = 'file/';
    $cek_file = move_uploaded_file($file_tmp, $folder . $upload_file);
} else {
    //error handling
}







if($proses == "tambah"){
    $sql = "INSERT INTO kta (namabuku,jenisbuku,pengarang,pembimbing1,pembimbing2,penguji1,penguji2,penguji3,departemen,tahunterbit,tahunpenelitian,upload_file) VALUES ('$namabuku','$jenisbuku','$pengarang','$pembimbing1','$pembimbing2','$penguji1','$penguji2','$penguji3','$departemen','$tahunterbit','$tahunpenelitian','$upload_file')";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$namabuku,$jenisbuku,$pengarang,$pembimbing1,$pembimbing2,$penguji1,$penguji2,$penguji3,$departemen,$tahunterbit,$tahunpenelitian,$upload_file]);
    if($hasil){
    echo
        '<script>alert("Berhasil");window.location="indexkta.php";</script>';
    }else{
    echo
        '<script>alert("Gagal");window.location="indexkta.php";</script>';
    }

}elseif($proses == "edit"){
    $sql = "UPDATE kta set namabuku='$namabuku',jenisbuku='$jenisbuku',pengarang='$pengarang',pembimbing1='$pembimbing1',pembimbing2='$pembimbing2',penguji1='$penguji1',penguji2='$penguji2',penguji3='$penguji3',departemen='$departemen',tahunterbit='$tahunterbit',tahunpenelitian='$tahunpenelitian',upload_file='$upload_file' WHERE idbuku='$id'";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$namabuku,$jenisbuku,$pengarang,$pembimbing1,$pembimbing2,$penguji1,$penguji2,$penguji3,$departemen,$tahunterbit,$tahunpenelitian,$upload_file]);
    if($hasil){
    echo
        '<script>alert("Berhasil");
        window.location="index-kta-admin.php";</script>';
    }else{
    echo
        '<script>alert("Gagal");window.location="index-kta-admin.php";</script>';
    }
//     $sql = "UPDATE skripsi set namabuku=" . "'" . $namabuku . "', 
//  jenisbuku=" . "'" . $jenisbuku . "', pengarang=" . "'" . $pengarang . "', 
//  pembimbing1=" . "'" . $pembimbing1 . "', pembimbing2=" . "'" . $pembimbing2 . "',
//  penguji1=" . "'" . $penguji1 . "', penguji2=" . "'" . $penguji2 . "', 
//  departemen=" . "'" . $departemen . "', tahunterbit=" . "'" . $tahunterbit . "' 
//  tahunpenelitian=" . "'" . $tahunpenelitian . "', upload_file=" . "'" . $upload_file . "' 
//  where idbuku='$id'";
// if (mysqli_query($koneksi, $sql)) {
// 	echo "New record edit successfully";
// } else {
// 	echo "Error:" . $sql . "<br>" . mysqli_error($koneksi);
// }
    
 
    
    
    
    
    
}elseif($proses == 'hapus'){
    $sql = "DELETE FROM kta WHERE idbuku='$id'";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$id]);
    if($hasil){
        echo
            '<script>alert("Berhasil");window.location="index-kta-admin.php";</script>';
        }else{
        echo
            '<script>alert("Gagal");window.location="index-kta-admin.php";</script>';
        }
}

?>