<?php include "header.php"; ?>
<?php
                    include('koneksi.php');
                        $query = $_POST['cari'];
                        $no = 1;
                        $min_length = 3;
                        if (strlen($query) >= $min_length) {
                            $query = htmlspecialchars($query);
                            $query = mysqli_real_escape_string($koneksi, $query);
                            $raw_results = mysqli_query($koneksi, "SELECT * FROM tb_ikan WHERE (`nama_ikan_indonesia` LIKE 
                                        '%" . $query . "%') OR (`nama_ikan_tradisional` LIKE '%" . $query . "%') OR (`nama_ikan_latin` LIKE '%" . $query . "%') 
                                        OR (`habitat_ikan` LIKE '%" . $query . "%')
                                        ") or die(mysqli_error($koneksi));
                            if (mysqli_num_rows($raw_results) > 0) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Manajemen Perikanan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Chart JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <!-- <script src="assets/js/chart.min.js"></script> -->

    <!-- <script src="assets/js/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script>
        function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById("cetak_pdf");
            // Choose the element and save the PDF for our user.
            var opt = {
                margin: 0,
                // padding: 0,
                filename: 'Laporan Data Ikan.pdf',
                image: {
                    type: 'jpeg',
                    quality: 1
                },
                html2canvas: {
                    scale: 1
                },
                pagebreak: {
                    mode: ['avoid-all', 'css', 'legacy']
                },
                jsPDF: {
                    unit: 'in',
                    format: 'B4',
                    orientation: 'portrait'
                }
            };
            html2pdf().set(opt).from(element).save();
        }
    </script>
</head>

<body>

   
    <br><br>
    <center><button class="btn btn-success" onclick="generatePDF()">Download as PDF</button></center>

    <!-- CONTENT -->
    <div class="px-2 mt-4 container">
        <div id="cetak_pdf">
            <P class="h1 text-center mb-3">LAPORAN DATA IKAN</P>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="align-middle">No</th>
                        <th class="align-middle">Nama Ikan Indonesia</th>
                        <th class="align-middle">Nama Ikan Tradisional</th>
                        <th class="align-middle">Nama Ikan Latin</th>
                        <th class="align-middle text-center">Habitat Ikan</th>
                        <th class="align-middle text-center">Deskripsi Ikan</th>
                        <th class="align-middle text-center">Foto Ikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                while ($d = mysqli_fetch_array($raw_results)) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $d['nama_ikan_indonesia']; ?></td>
                                        <td><?php echo $d['nama_ikan_tradisional']; ?></td>
                                        <td><?php echo $d['nama_ikan_latin']; ?></td>
                                        <td><?php echo $d['habitat_ikan']; ?></td>
                                        <td><?php echo $d['deskripsi_ikan']; ?></td>
                                        <td><img src="galeri/<?php echo $d['unggah_foto_ikan']; ?>" width="150px" height="150px" /></td>
                                    </tr>
                    <?php
                                }
                            } else {
                                    echo "Tidak ditemukan data dalam database";
                                }
                        } else {
                            echo "huruf minimal untuk pencarian : " . $min_length;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- END OF CONTENT -->
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Tawar', 'Payau', 'Dasar Perairan Laut', 'Perairan Laut Dangkal', 'Rawa', 'Sungai'],
                datasets: [{
                    label: '',
                    data: [<?php
                            $jumlah_tawar = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%air tawar%';");
                            echo mysqli_num_rows($jumlah_tawar);
                            ?>,
                        <?php
                        $jumlah_payau = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%payau%';");
                        echo mysqli_num_rows($jumlah_payau);
                        ?>,
                        <?php
                        $jumlah_dpl = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%Dasar Laut%';");
                        echo mysqli_num_rows($jumlah_dpl);
                        ?>,
                        <?php
                        $jumlah_pld = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%Laut Dangkal%';");
                        echo mysqli_num_rows($jumlah_pld);
                        ?>,
                        <?php
                        $jumlah_rawa = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%rawa%';");
                        echo mysqli_num_rows($jumlah_rawa);
                        ?>,
                        <?php
                        $jumlah_sungai = mysqli_query($koneksi, "SELECT *
                            from tb_ikan WHERE habitat_ikan LIKE'%sungai%';");
                        echo mysqli_num_rows($jumlah_sungai);
                        ?>,

                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        })
    </script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <br><br>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Refa Nursakinah</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Refa Nursakinah</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>