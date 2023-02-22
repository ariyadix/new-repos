<?php include "header.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Input Data Klasifikasi Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <form method="post" action="tambah_data_aksi_klasifikasi.php" align="left" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <label>Klasifikasi Ikan: <br></label>
                            <input type="text" name="klasifikasi_ikan" class="form-control" placeholder="Masukan Klasifikasi Ikan" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Keterangan Klasifikasi Ikan: <br></label>
                            <input type="text" name="keterangan_klasifikasi_ikan" class="form-control" placeholder="Masukan Keteragan Klasifikasi Ikan" required />
                        </div>
                        <br>
                        
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>