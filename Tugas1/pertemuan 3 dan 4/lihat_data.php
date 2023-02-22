<?php include "header.php"; ?>
<main id="main">
  <br>

  <!-- ======= Clients Section ======= -->
  <div class="container-fluid" data-aos="fade-up">

    <div class="section-title">
      <h2>Lihat Data Ikan</h2>
    </div>
    <section id="clients" class="clients section-bg">
      <div class="container-fluid">

        <div class="row" data-aos="zoom-in">
          <table class="table-bordered">
            <thead class="thead-light">
              <tr align="center">
                <th scope="col">Nomor</th>
                <th scope="col">Nama Ikan Indonesia</th>
                <th scope="col">Nama Ikan Tradisional</th>
                <th scope="col">Nama Ikan Latin</th>
                <th scope="col">Habitat Ikan</th>
                <th scope="col">Deskripsi Ikan</th>
                <th scope="col">Embed Youtube Ikan</th>
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
                  <td><?php echo $d['nama_ikan_indonesia']; ?></td>
                  <td><?php echo $d['nama_ikan_tradisional']; ?></td>
                  <td><?php echo $d['nama_ikan_latin']; ?></td>
                  <td><?php echo $d['habitat_ikan']; ?></td>
                  <td><?php echo $d['deskripsi_ikan']; ?></td>
                  <td><?php echo "<iframe width='560' height='315' src='";
                      echo $d['embed_youtube_ikan'];
                      echo "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"; ?></td>
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