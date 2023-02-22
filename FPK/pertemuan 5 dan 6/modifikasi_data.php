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
                                <th scope="col">No</th>
                                <th scope="col">ID Klasifikasi Ikan</th>
                                <th scope="col">Nama Ikan Indonesia</th>
                                <th scope="col">Nama Ikan Tradisional</th>
                                <th scope="col">Nama Ikan Latin</th>
                                <th scope="col">Habitat Ikan</th>
                                <th scope="col">Deskripsi Ikan</th>
                                <th scope="col">Foto Ikan</th>
                                <th scope="col">Embed Youtube Ikan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;

                            $data = mysqli_query($koneksi, "select*from tb_ikan");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td><?php echo $d['id_klasifikasi_ikan']; ?></td>
                                    <td><?php echo $d['nama_ikan_indonesia']; ?></td>
                                    <td><?php echo $d['nama_ikan_tradisional']; ?></td>
                                    <td><?php echo $d['nama_ikan_latin']; ?></td>
                                    <td><?php echo $d['habitat_ikan']; ?></td>
                                    <td><?php echo $d['deskripsi_ikan']; ?></td>
                                    <td><div class="portfolio-img"><a href="galeri/<?php echo $d['unggah_foto_ikan']; ?>" target="_blank"><img src="galeri/<?php echo $d['unggah_foto_ikan']; ?>" class="img-fluid" alt=""></div></a></td>
                                    <td><?php echo "<iframe width='250' height='200' src='";
                                        echo $d['embed_youtube_ikan'];
                                        echo "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"; ?></td>
                                    <td>
                                        <a href="edit_data.php?id=<?php echo $d['id_ikan']; ?>" class="btn btn-warning btn-md" role="button">Edit</a>
                                        <br><br>
                                        <a href="hapus_data.php?id=<?php echo $d['id_ikan']; ?>" class="btn btn-danger btn-sm" role="button">Hapus</a>
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