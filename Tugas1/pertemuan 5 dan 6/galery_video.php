<?php include "header.php"; ?>
<!-- library CSS fancybox -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<!-- library JS -->
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- library JS fancybox -->
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>
<main id="main">
  <br>
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
          <p>Kumpulan video yang terupload di Sistem</p>
        </div>

        <div class="row">
    <?php
      include 'koneksi.php';
      // $no = 1;
      $data = mysqli_query($koneksi, "select*from tb_ikan");
      while ($d = mysqli_fetch_array($data)) {
    ?>
      
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="<?php echo $d['embed_youtube_ikan']; ?>" target="_blank">Link Video</a></h4>
              <iframe width="250" height="200" src="<?php echo $d['embed_youtube_ikan']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
            </div>
          </div>
          
    <?php
      }
    ?>
    
    </div>
</div>
</section><!-- End Services Section -->
</main><!-- End #main -->
<?php include "footer.php"; ?>