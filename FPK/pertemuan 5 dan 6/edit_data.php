<?php include "header.php"; ?>
<?php
include('koneksi.php');
$data = mysqli_query($koneksi, "select * from tb_ikan where id_ikan=" . "'" . $_GET['id'] . "'");
?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Edit Data Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container-fluid">

                <div class="row d-flex" data-aos="zoom-in">
                    <?php
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="edit_data_aksi.php" align="left" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="id_ikan" value="<?php echo $d['id_ikan']; ?>">
                                <label>Nama Ikan Indonesia: <br></label>
                                <input type="text" value="<?php echo $d['nama_ikan_indonesia']; ?>" name="nama_ikan_indonesia" class="form-control" placeholder="Masukan Nama Ikan Indonesia" required />
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Nama Ikan Tradisional: <br></label>
                                <input type="text" value="<?php echo $d['nama_ikan_tradisional']; ?>" name="nama_ikan_tradisional" class="form-control" placeholder="Masukan Nama Ikan Tradisional" required />
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Nama Ikan Latin: <br></label>
                                <input type="text" value="<?php echo $d['nama_ikan_latin']; ?>" name="nama_ikan_latin" class="form-control" placeholder="Masukan Nama Ikan Latin" required />
                            </div>
                            <br>
                            <div class="form-group">    
                                <select name="id_klasifikasi_ikan" class="form-control" placeholder="Masukkan ID Klasifikasi Ikan" required>
                                <option value="0">Pilih ID Klasifikasi Ikan</option>
                                <?php
                                    $dataID = mysqli_query($koneksi, "select*from tb_klasifikasi_ikan");
                                    while ($dataIni = mysqli_fetch_array($dataID)) {
                                ?>   
                                    <option value="<?php echo $dataIni['id_klasifikasi_ikan']; ?>" <?php if($d['id_klasifikasi_ikan'] == $dataIni['id_klasifikasi_ikan']){echo "selected";} ?> ><?php echo $dataIni['id_klasifikasi_ikan']; echo" - "; echo $dataIni['klasifikasi_ikan']; ?></option>
                                <?php
                                    }
                                ?>	
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Habitat Ikan: <br></label>
                                <input type="text" value="<?php echo $d['habitat_ikan']; ?>" name="habitat_ikan" class="form-control" placeholder="Masukan Habitat Ikan" required />
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Deskripsi Ikan: <br></label>
                                <br>
                                <textarea class="form-control" name="deskripsi_ikan" rows="5"><?php echo $d['deskripsi_ikan']; ?></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                            <label>Foto Ikan: </label><br>
                            <img src="galeri/<?php echo $d['unggah_foto_ikan']; ?>" width="100px" height="100px" />
                            <br><small style="align: left; color:grey;">Ganti Foto Ikan</small>
                            <input type="file" name="unggah_foto_ikan" id="unggah_foto_ikan" accept="image/jpg, image/jpeg, image/png, image/gif" onchange="return validasiFile()" />
                            </div>
			            	<div id="pratinjauGambar"></div>
                            <div class="form-group">
                                <label>Embed Youtube Ikan (hanya masukkan link): <br></label>
                                <input type="url" value="<?php echo $d['embed_youtube_ikan']; ?>" name="embed_youtube_ikan" class="form-control" placeholder="Masukan Embed Youtube Ikan" required />
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