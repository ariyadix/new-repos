<?php include "header.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Input Data Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <form method="post" action="tambah_data_aksi.php" align="left" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <label>Nama Ikan Indonesia: <br></label>
                            <input type="text" name="nama_ikan_indonesia" class="form-control" placeholder="Masukan Nama Ikan Indonesia" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Nama Ikan Tradisional: <br></label>
                            <input type="text" name="nama_ikan_tradisional" class="form-control" placeholder="Masukan Nama Ikan Tradisional" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Nama Ikan Latin: <br></label>
                            <input type="text" name="nama_ikan_latin" class="form-control" placeholder="Masukan Nama Ikan Latin" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Habitat Ikan: <br></label>
                            <input type="text" name="habitat_ikan" class="form-control" placeholder="Masukan Habitat Ikan" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Deskripsi Ikan: <br></label>
                            <br>
                            <textarea class="form-control" name="deskripsi_ikan" rows="5"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Embed Youtube Ikan (hanya masukkan link): <br></label>
                            <input type="url" name="embed_youtube_ikan" class="form-control" placeholder="Masukan Embed Youtube Ikan" required />
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>