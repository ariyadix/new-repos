<?php include "header.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Alur Input Data Ikan</h2>
        </div>
        <div class="section-title">
            <h4>1. Isi Form Sesuaikan dengan format yang ada.
                <br>2. Pilih Submit untuk menambahkan data bilamana data dirasa sudah benar
            </h4>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <form method="post" align="left" enctype="multipart/form-data">
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
                        <button type="text" name="" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section><!-- End Cliens Section-->
        <div class="section-title">
            <h2>Alur Input Klasifikasi Ikan</h2>
        </div>
        <div class="section-title">
            <h4>1. Isi Form Sesuaikan dengan format yang ada.
                <br>2. Pilih Submit untuk menambahkan data bilamana data dirasa sudah benar
            </h4>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <form method="post" align="left" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id">
                            <label>Klasifikasi Ikan: <br></label>
                            <input type="text" name="klasifikasi_ikan" class="form-control" placeholder="Masukan Klasifikasi Ikan" required />
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Keterangan Klasifikasi Ikan: <br></label>
                            <input type="text" name="" class="form-control" placeholder="Masukan Keteragan Klasifikasi Ikan" required />
                        </div>
                        <br>
                        
                        <br>
                        <button type="" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>