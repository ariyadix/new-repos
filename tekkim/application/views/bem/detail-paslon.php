
  <div class="col-sm-25 col-sm-offset-25 col-lg-25 col-lg-offset-25 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Detail Paslon</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Paslon</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Detail Paslon
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">
            <dl class="dl-horizontal">
   <!--           <dt>Nama Koalisi</dt>
              <dd><strong><?= $paslon->nama_koalisi ?></strong></dd>
							<br>-->
              <dt>Nama Paslon</dt>
              <dd><strong><?= $paslon->nama_paslon ?></strong></dd>
							<br>
							<dt>Koalisi Fakultas</dt>
      <!--        <dd><strong><?= $paslon->fakultas_koalisi ?></strong></dd>
							<br>-->
							<dt>Nomor Urut</dt>
              <dd><strong><?= $paslon->nomor_urut ?></strong></dd>
							<br>
							<dt>Nama Ketua</dt>
              <dd><strong><?= $paslon->nama_capres ?></strong></dd>
							<br>
              <dt>Nama Wakil Ketua</dt>
              <dd><strong><?= $paslon->nama_cawapres ?></strong></dd>
							<br>
     <!--         <dt>Fakultas Capres</dt>
              <dd><strong><?= $paslon->fakultas_capres ?></strong></dd>
							<br>
              <dt>Fakultas Cawapres</dt>
              <dd><strong><?= $paslon->fakultas_cawapres ?></strong></dd>
							<br>
              <dt>Jurusan Ketua</dt>
              <dd><strong><?= $paslon->jurusan_capres ?></strong></dd>
							<br>
              <dt>Jurusan Wakil Ketua</dt>
              <dd><strong><?= $paslon->jurusan_cawapres ?></strong></dd>
							<br>
             <dt>Prodi Capres</dt>
              <dd><strong><?= $paslon->prodi_capres ?></strong></dd>
							<br>
              <dt>Prodi Cawapres</dt>
              <dd><strong><?= $paslon->prodi_cawapres ?></strong></dd>
							<br>-->
              <dt>Angkatan Ketua</dt>
              <dd><strong><?= $paslon->angkatan_capres ?></strong></dd>
							<br>
              <dt>Angkatan Wakil Ketua</dt>
              <dd><strong><?= $paslon->angkatan_cawapres ?></strong></dd>
							<br>
							<dt>Visi Misi</dt>
              <dd><strong><?= $paslon->visimisi ?></strong></dd>
							<br>
              <dt>Gambar</dt>
              <dd><strong> <img src="<?= base_url('assets/img/'.$paslon->gambar_capres) ?>" style="width:150px; border-radius:50%">
              <img src="<?= base_url('assets/img/'.$paslon->gambar_cawapres) ?>" style="width:150px; border-radius:50%"></strong></dd>
							<br>
            </dl>
					</div>
				</div>

			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
<!-- BEM-VOTE -->
