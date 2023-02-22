<?php include "header.php"; ?>
<main id="main">
    <br>

    <!-- ======= Clients Section ======= -->
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Cari Data Ikan</h2>
        </div>
        <section id="clients" class="clients section-bg">
            <div class="container align-items-center" style="text-align: center !important">
                <div class="row align-items-center" data-aos="zoom-in">
                    <form class="row inline-block " action="cari_data_aksi.php" method="post">
                        <div class="col align-items-center clearfix">
                            <input class="form-control" type="text" name="cari" />
                        </div>
                        <div class="col-auto text-right">
                            <input class="btn btn-primary" type="submit" value="Cari" />
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- End Cliens Section-->

</main><!-- End #main -->
<?php include "footer.php"; ?>