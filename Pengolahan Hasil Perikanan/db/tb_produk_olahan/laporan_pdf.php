<?php
require_once("../../vendor/autoload.php");

use Dompdf\Dompdf;

include('../koneksi.php');

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
	<h2>Laporan Produk Olahan</h2>
    </center>
    <div class="content container mt-4 mb-4">
    <br>
        <table class="table">
            <thead class="thead-light">
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">ID Ikan</th>
                    <th scope="col">Bahan</th>
                    <th scope="col">Cara Pembuatan</th>
				</tr>
            </thead>
            <tbody>';
$no = 1;

$data = mysqli_query($koneksi, "select*from tb_produk_olahan");
while ($d = mysqli_fetch_array($data)) {
    // $path = '../file/logo/' . $d["logo_kelompok"];
    // $type = pathinfo($path, PATHINFO_EXTENSION);
    // $data = file_get_contents($path);
    // $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    $html .= '
    <tr>
    <th scope="row">' . $no++ . '</th>
    <td>' . $d["nama"] . '</td>
    <td>' . $d["Id_ikan"] . '</td>
    <td>' . $d["bahan"] . '</td>
    <td>' . $d["cara_pembuatan"] . '</td>
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

$dompdf->setPaper('B4', 'potrait');

$dompdf->render();

$dompdf->stream("File.pdf", array("Attachment" => false));
