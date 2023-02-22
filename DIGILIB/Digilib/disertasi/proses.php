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
$promotor = $_POST['promotor'];
$copromotor1 = $_POST['copromotor1'];
$copromotor2 = $_POST['copromotor2'];
$pengujiint1 = $_POST['pengujiint1'];
$pengujiint2 = $_POST['pengujiint2'];
$pengujiint3 = $_POST['pengujiint3'];
$pengujieks = $_POST['pengujieks'];
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
    $sql = "INSERT INTO disertasi (namabuku,jenisbuku,pengarang,promotor,copromotor1,copromotor2,pengujiint1,pengujiint2,pengujiint3,pengujieks,departemen,tahunterbit,tahunpenelitian,upload_file) VALUES ('$namabuku','$jenisbuku','$pengarang','$promotor','$copromotor1','$copromotor2','$pengujiint1','$pengujiint2','$pengujiint3','$pengujieks','$departemen','$tahunterbit','$tahunpenelitian','$upload_file')";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$namabuku,$jenisbuku,$pengarang,$promotor,$copromotor1,$copromotor2,$pengujiint1,$pengujiint2,$pengujiint3,$pengujieks,$departemen,$tahunterbit,$tahunpenelitian,$upload_file]);
   
   
   if($hasil){
    echo
        '<script>alert("Berhasil");window.location="indexdisertasi.php";</script>';
    }else{
    echo
        '<script>alert("Gagal");window.location="indexdisertasi.php";</script>';
    }

}elseif($proses == "edit"){
    $sql = "UPDATE disertasi set namabuku='$namabuku',jenisbuku='$jenisbuku',pengarang='$pengarang',promotor='$promotor',copromotor1='$copromotor1',copromotor2='$copromotor2',pengujiint1='$pengujiint1',pengujiint2='$pengujiint2',pengujiint3='$pengujiint3',pengujieks='$pengujieks',departemen='$departemen',tahunterbit='$tahunterbit',tahunpenelitian='$tahunpenelitian',upload_file='$upload_file' WHERE idbuku='$id'";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$namabuku,$jenisbuku,$pengarang,$promotor,$copromotor1,$copromotor2,$pengujiint1,$pengujiint2,$pengujiint3,$pengujieks,$departemen,$tahunterbit,$tahunpenelitian,$upload_file]);
    if($hasil){
    echo
        '<script>alert("Berhasil");
        window.location="index-disertasi-admin.php";</script>';
    }else{
    echo
        '<script>alert("Gagal");window.location="index-disertasi-admin.php";</script>';
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
    $sql = "DELETE FROM disertasi WHERE idbuku='$id'";
    $data = $conn->prepare($sql);
    $hasil = $data->execute([$id]);
    if($hasil){
        echo
            '<script>alert("Berhasil");window.location="index-disertasi-admin.php";</script>';
        }else{
        echo
            '<script>alert("Gagal");window.location="index-admin.php";</script>';
        }
}

?>