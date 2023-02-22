<?php
require_once("../../vendor/autoload.php");

use Dompdf\Dompdf;

include('../koneksi.php');
// $no = 1;

// $data = mysqli_query($koneksi, "select*from tb_identitas_kelompok");
// while ($d = mysqli_fetch_array($data)) {
// }
$html = '
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../assets/css/main.css" rel="stylesheet" />
<script type="text/javascript" src="chartjs/Chart.js"></script>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<title>Cetak PDF</title>

<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="../../assets/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body id="page-top">
    <center>
	<h2>Laporan Identitas Kelompok</h2>
    </center>
    <div class="content container ml-0 mt-4 mb-4">
    <br>
    
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Nomor Id</th>
                    <th scope="col">Nama Kelompok</th>
                    <th scope="col">Tahun Berdiri</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Status Kelompok</th>
                    <th scope="col">Titik Lokasi</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Penyuluh Pendamping</th>
                </tr>
            </thead>
            <tbody>';
$no = 1;

$data = mysqli_query($koneksi, "select*from tb_identitas_kelompok");
while ($d = mysqli_fetch_array($data)) {
	// $path = '../file/logo/' . $d["logo_kelompok"];
	// $type = pathinfo($path, PATHINFO_EXTENSION);
	// $data = file_get_contents($path);
	// $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	$html .= '
    <tr>
    <th scope="row">' . $no++ . '</th>
    <td>' . $d["nama_kelompok"] . '</td>
    <td>' . $d["tahun_berdiri"] . '</td>
    <td>' . $d["nomor_surat"] . '</td>
    <td>' . $d["status_kelompok"] . '</td>
    <td>' . $d["titik_lokasi"] . '</td>
    <td>' . $d["alamat"] . '</td>
    <td>' . $d["penyuluh_pendamping"] . '</td>
    </tr>';
}
$html .= '
</tbody>
</table>
</div>
</body>';

$dompdf = new Dompdf();

// $content = file_get_contents('cetak_pdf.php');
$dompdf->loadHtml($html);
// $dompdf->loadHtml($content);

$dompdf->setPaper('A4', 'potrait');

$dompdf->render();

$dompdf->stream("File.pdf", array("Attachment" => false));
