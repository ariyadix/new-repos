<?php include "header.php"; ?>
    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function generatePDF() {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById("cetak_pdf");
            // Choose the element and save the PDF for our user.
            var opt = {
                margin: 0,
                // padding: 10,
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

    <!-- ======= Header ======= -->
   

    <!-- ======= Hero Section ======= -->

    <br><br>
    <div class="container-fluid" data-aos="fade-up">

<div class="section-title">
    <h2>Cari Data Ikan Yang Ingin Dicetak</h2>
</div>
<section id="clients" class="clients section-bg">
    <div class="container align-items-center" style="text-align: center !important">
        <div class="row align-items-center" data-aos="zoom-in">
            <form class="row inline-block " action="cari_data_aksi_cetak.php" method="post">
                <div class="col align-items-center clearfix">
                    <input class="form-control" type="text" name="cari" />
                </div>
                <div class="col-auto text-right">
                    <input class="btn btn-primary" type="submit" value="Cari" />
                </div>
            </form>
        </div>
    </div>
</section><!-- End Cliens Section-->
   

    <!-- CONTENT -->
    <div class="px-2 mt-4 container">
        <div id="cetak_pdf">
            <P class="h1 text-center mb-3">LAPORAN DATA IKAN</P>
            <canvas id="myChart" style="width: 800px;margin: 0px auto;"></canvas>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5"class="align-middle">No</th>
                        <th width="50" class="align-middle">Nama Ikan Indonesia</th>
                        <th width="50" class="align-middle">Nama Ikan Tradisional</th>
                        <th width="10" class="align-middle">Nama Ikan Latin</th>
                        <th class="align-middle text-center">Habitat Ikan</th>
                        <th class="align-middle text-center">Deskripsi Ikan</th>
                        <th class="align-middle text-center">Foto Ikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('koneksi.php');
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_ikan");
                    while ($d = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['nama_ikan_indonesia'] ?></td>
                            <td><?php echo $d['nama_ikan_tradisional'] ?></td>
                            <td><?php echo $d['nama_ikan_latin'] ?></td>
                            <td><?php echo $d['habitat_ikan'] ?></td>
                            <td><?php echo $d['deskripsi_ikan'] ?></td>
                            <td><img src="galeri/<?php echo $d['unggah_foto_ikan']; ?>" width="150px" height="150px" /></td>
                        </tr> <?php } ?>
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