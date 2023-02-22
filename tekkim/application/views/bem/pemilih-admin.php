<!-- BEM-VOTE -->

  <div class="col-sm-25 col-sm-offset-25 col-lg-25 col-lg-offset-25 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Daftar Semua Pemilih</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Semua Pemilih</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
        <div class="panel panel-default">
					<div class="panel-heading">
						Cari Pemilih <?= $this->session->userdata('fakultas') ?>
					</div>
					<div class="panel-body">
              <?= form_open('pemilih/searchpemilihadmin', ['class' => 'form-inline', 'method' => 'get']) ?>
                <div class="form-group">
                  <label>NIM </label>
                  <input type="text" class="form-control" name="nim" id="formNIMAdmin">
                </div>
                <span>Dengan Nama &nbsp;</span>
                <div class="form-group">
                  <label>Nama </label>
                  <input type="text" class="form-control" name="nama" id="formNamaAdmin">
                </div>
                <button type="submit" class="btn btn-default">Cari</button>
              <?= form_close() ?>
					</div>
				</div>

        <div id="pageAJAX">

				<div class="panel panel-default ">
					<div class="panel-heading">
						Daftar Semua Pemilih
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
            <h5>Jumlah Data : <strong><?= $totalPemilihAdmin ?></strong></h5>
            <table class="table">
							<tr>
								<th>No</th>
								<th>NIM Pemilih</th>
								<th>Nama Pemilih</th>
								<th>Status Pemilih</th>
								<th>Telah Memilih</th>
								<th>Terakhir Login</th>
                <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
                <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($pemilihs as $pemilih):
              ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $pemilih->nim_pemilih ?></td>
								<td><?= $pemilih->nama_pemilih ?></td>
								<td class="status">
                <?php if($pemilih->status_pemilih === 'ya'): ?>
                  <span class="fa fa-check"></span>
                <?php else: ?>
                  <span class="fa fa-times"></span>
                <?php endif ?>
                </td>
								<td class="status">
                <?php if($pemilih->telah_memilih === 'ya'): ?>
                  <span class="fa fa-check"></span>
                <?php else: ?>
                  <span class="fa fa-times"></span>
                <?php endif ?>
                </td>
								<td><?= $pemilih->terakhir_login ?></td>
                <?php if($this->session->has_userdata('admin')): ?>
								<td>
                  <?= form_open('pemilih/delete') ?>
                    <input type="hidden" name="id_pemilih" value="<?= $pemilih->id_pemilih ?>">
                    <input type="submit" value="Hapus" class="btn btn-danger pull-left" style="color:white;">
                  <?= form_close() ?>
								</td>
              <?php endif ?>
							</tr>
            <?php endforeach ?>
						</table>

            <nav style="width:100%;text-align:center">
            <ul class="pagination text-center" style="margin:0 auto">
              <?= $pagination ?>
            </ul>
            </nav>


					</div>
				</div>

      </div>

        <div class="panel panel-default ">
					<div class="panel-heading">
						Daftar Pemilih Tidak/Belum Memilih
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
            <h5>Jumlah Data : <strong><?= $totalPemilihBelumMemilihAdmin ?></strong></h5>
						<table class="table">
							<tr>
								<th>No</th>
								<th>NIM Pemilih</th>
								<th>Nama Pemilih</th>
								<th>Terakhir Login</th>
                <?php if($this->session->has_userdata('admin')): ?>
								<th>Action</th>
                <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($belumMemilihs as $pemilih):
              ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $pemilih->nim_pemilih ?></td>
								<td><?= $pemilih->nama_pemilih ?></td>
								<td><?= $pemilih->terakhir_login ?></td>
                <?php if($this->session->has_userdata('admin')): ?>
								<td>
                  <?= form_open('pemilih/delete') ?>
                    <input type="hidden" name="id_pemilih" value="<?= $pemilih->id_pemilih ?>">
                    <input type="submit" value="Hapus" class="btn btn-danger pull-left" style="color:white;">
                  <?= form_close() ?>
								</td>
              <?php endif ?>
							</tr>
            <?php endforeach ?>
						</table>

            <nav style="width:100%;text-align:center">
            <ul class="pagination text-center" style="margin:0 auto">
              <?= $pagination ?>
            </ul>
            </nav>


					</div>
				</div>

        <?php if($this->session->has_userdata('admin')): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Tambah Pemilih
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
              <?= form_open('pemilih/post', ['class' => 'form-horizontal']) ?>
                <?= validation_errors() ?>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Pemilih</label>
									<div class="col-md-9">
                    <?= form_input('nama_pemilih', $input->nama_pemilih, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) ?>
									</div>
								</div>

                <!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">NIM Pemilih</label>
									<div class="col-md-9">
                    <?= form_input('nim_pemilih', $input->nim_pemilih, ['class' => 'form-control', 'placeholder' => 'Masukkan NIM']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Passcode Pemilih</label>
									<div class="col-md-9">
                    <?= form_input('token_pemilih', $input->token_pemilih, ['class' => 'form-control', 'placeholder' => 'Masukkan Passcode']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Status Pemilih</label>
									<div class="col-md-9">
										</select>
                    <?= form_input('status_pemilih', $input->status_pemilih, ['class' => 'form-control', 'placeholder' => 'ya / tidak']) ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Telah Memilih</label>
									<div class="col-md-9">
                    <?= form_input('telah_memilih', $input->telah_memilih, ['class' => 'form-control', 'placeholder' => 'ya / tidak']) ?>
									</div>
								</div>

                <!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Angkatan Pemilih</label>
									<div class="col-md-9">
                    <select class="form-control" name="id_fakultas">
                    <?php foreach($fakultass as $fakultas): ?>
                      <option value="<?= $fakultas->id_fakultas ?>"><?= $fakultas->nama_fakultas ?></option>
                    <?php endforeach ?>
                    </select>
									</div>
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
                    <?= form_submit(null, 'Tambah', ['class' => 'btn btn-default btn-md pull-right']) ?>
									</div>
								</div>
            <?= form_close() ?>
					</div>
				</div>
      <?php endif ?>
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->
<!-- BEM-VOTE -->
