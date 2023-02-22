<?php include "header.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Modifikasi Data Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row" data-aos="zoom-in">
                    <table class="table-bordered">
                        <thead class="thead-light">
                            <tr align="center">
                                <th scope="col">Nomor</th>
                                <th scope="col">Klasifikasi Ikan</th>
                                <th scope="col">Keterangan Klasifikasi Ikan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;

                            $data = mysqli_query($koneksi, "select*from tb_klasifikasi_ikan");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $d['klasifikasi_ikan']; ?></td>
                                    <td><?php echo $d['keterangan_klasifikasi_ikan']; ?></td>
                                   <td>
                                        <a href="edit_data_kls.php?id=<?php echo $d['id_klasifikasi_ikan']; ?>" class="btn btn-warning btn-md" role="button">Edit</a>
                                      
                                        <a href="hapus_data_kls.php?id_klasifikasi_ikan=<?php echo $d['id_klasifikasi_ikan']; ?>" class="btn btn-danger btn-md" role="button">Hapus</a>
                                
                                </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>