<?php include "header.php"; ?>
<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from tb_klasifikasi_ikan where id_klasifikasi_ikan=" . "'" . $_GET['id'] . "'");
?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Edit Data Klasifikasi Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <?php
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="edit_data_aksi_kls.php" align="left" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="id_klasifikasi_ikan" value="<?php echo $d['id_klasifikasi_ikan']; ?>">
                                <label>Klasifikasi Ikan: <br></label>
                                <input type="text" value="<?php echo $d['klasifikasi_ikan']; ?>" name="klasifikasi_ikan" class="form-control" placeholder="Masukan Klasifikasi Ikan" required />
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Keterangan Klasifikasi Ikan: <br></label>
                                <input type="text" value="<?php echo $d['keterangan_klasifikasi_ikan']; ?>" name="keterangan_klasifikasi_ikan" class="form-control" placeholder="Masukan Keterangan Klasifikasi Ikan" required />
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>