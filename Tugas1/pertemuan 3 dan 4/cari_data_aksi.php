<?php include "header.php";
include "koneksi.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Cari Data Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container align-items-center" style="text-align: center !important">
                <div class="row align-items-center" data-aos="zoom-in">
                    <table class="table-bordered">
                        <thead class="thead-light">
                            <tr align="center">
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama Ikan Indonesia</th>
                                <th scope="col">Nama Ikan Tradisional</th>
                                <th scope="col">Nama Ikan Latin</th>
                                <th scope="col">Habitat Ikan</th>
                                <th scope="col">Deskripsi Ikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
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
                                if (mysqli_num_rows($raw_results) > 0) {
                                    while ($d = mysqli_fetch_array($raw_results)) {
                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $d['nama_ikan_indonesia']; ?></td>
                                            <td><?php echo $d['nama_ikan_tradisional']; ?></td>
                                            <td><?php echo $d['nama_ikan_latin']; ?></td>
                                            <td><?php echo $d['habitat_ikan']; ?></td>
                                            <td><?php echo $d['deskripsi_ikan']; ?></td>
                                        </tr>
                        </tbody>
                    </table>
        <?php
                                    }
                                } else {
                                    echo "Tidak ditemukan data dalam database";
                                }
                            } else {
                                echo "huruf minimal untuk pencarian : " . $min_length;
                            }
        ?>
                </div>
            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>