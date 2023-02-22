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
                            <select name="id_klasifikasi_ikan" class="form-control" placeholder="Masukkan ID Klasifikasi Ikan" required>
                            <option value="0">Pilih ID Klasifikasi Ikan</option>
                            <?php
                                include 'koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi, "select*from tb_klasifikasi_ikan");
                                while ($d = mysqli_fetch_array($data)) {
                            ?>   
                                <option value="<?php echo $d['id_klasifikasi_ikan']; ?>"><?php echo $d['id_klasifikasi_ikan']; echo" - "; echo $d['klasifikasi_ikan']; ?></option>
                            <?php
                                }
                            ?>	
                            </select>
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
			        	<label>Unggah Foto Ikan: </label><br>
				        <small style="align: left; color:grey;"> Unggah Foto Ikan </small>
				        <input type="file" name="unggah_foto_ikan" id="unggah_foto_ikan" accept="image/jpg, image/jpeg, image/png, image/gif" onchange="return validasiFile()" required />
			            </div>
			            <div id="pratinjauGambar"></div>
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