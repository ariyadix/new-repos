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
	<h2>Laporan Rencana Transaksi</h2>
    </center>
    <div class="content container ml-0 mt-4 mb-4">
    <br>
        <table class="table">
            <thead class="thead-light">
                <tr align="center">
                    <th scope="col">No</th>
					<th scope="col">ID Kelompok</th>
					<th scope="col">ID Anggota</th>
					<th scope="col">ID Transaksi</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Uraian</th>
					<th scope="col">Volume</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Keterangan</th>
				</tr>
            </thead>
            <tbody>';
$no = 1;

$data = mysqli_query($koneksi, "select*from tb_qry_trx_rencana");
while ($d = mysqli_fetch_array($data)) {
    $html .= '
    <tr>
    <th scope="row">' . $no++ . '</th>
    <td>' . $d["id_kelompok"] . '</td>
    <td>' . $d["id_anggota"] . '</td>
    <td>' . $d["id_trx"] . '</td>
    <td>' . $d["tanggal"] . '</td>
    <td>' . $d["uraian"] . '</td>
    <td>' . $d["volume"] . '</td>
    <td>' . $d["lokasi"] . '</td>
    <td>' . $d["keterangan"] . '</td>
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
