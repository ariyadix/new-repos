<!-- BEM-VOTE -->
  <div class="col-sm-25 col-sm-offset-25 col-lg-25 col-lg-offset-25 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Paslon</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Paslon</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default ">
					<div class="panel-heading">
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body timeline-container">
						<table class="table">
							<tr>
								<th>No</th>
								<th>Nama Paslon</th>
								<th>Visi Misi</th>
								<th>Nomor Urut</th>
                <?php if($this->session->has_userdata('admin')): ?>
								   <th>Action</th>
                <?php endif ?>
							</tr>
              <?php
                $i = 1;
                foreach($paslons as $paslon):
               ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $paslon->nama_paslon ?></td>
								<td><?= $paslon->visimisi ?></td>
								<td><?= $paslon->nomor_urut ?></td>
                <?php if($this->session->has_userdata('admin')): ?>
								<td>
                  <a href="<?= base_url('paslon/edit/'.$paslon->id_paslon) ?>" class="btn btn-warning pull-left" style="color:white;">Edit</a>
                  <a href="<?= base_url('paslon/'.$paslon->id_paslon) ?>" class="btn btn-info pull-left" style="color:white;">Detail</a>
                  <?= form_open('paslon/delete') ?>
                    <input type="hidden" name="id_paslon" value="<?= $paslon->id_paslon ?>">
                    <input type="submit" value="Hapus" class="btn btn-danger pull-left" style="color:white;">
                  <?= form_close() ?>
								</td>
              <?php endif ?>
							</tr>
            <?php endforeach ?>
						</table>
					</div>
				</div>

        <?php if($this->session->has_userdata('admin')): ?>
				<div class="panel panel-default">
					<div class="panel-heading">
						Tambah Paslon
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
              <?= form_open_multipart('paslon/post', ['class' => 'form-horizontal']) ?>
                <?= validation_errors() ?>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Paslon</label>
									<div class="col-md-9">
                    <?= form_input('nama_paslon', $input->nama_paslon, ['class' => 'form-control', 'placeholder' => 'Ketua & Wakil Ketua / Koalisi']) ?>
									</div>
								</div>
								<!-- Name input-->

                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Nomor Urut</label>
									<div class="col-md-9">
                    <?= form_input('nomor_urut', $input->nomor_urut, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor urut']) ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Visi & Misi</label>
									<div class="col-md-9">
                    <?= form_textarea('visimisi', $input->visimisi, ['class' => 'form-control paslon', 'rows' => '20', 'cols' => '80']) ?>
									</div>
								</div>
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Ketua</label>
									<div class="col-md-9">
                    <?= form_input('nama_capres', $input->nama_capres, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Ketua']) ?>
									</div>
								</div>
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Nama Wakil Ketua</label>
									<div class="col-md-9">
                    <?= form_input('nama_cawapres', $input->nama_cawapres, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Ketua']) ?>
									</div>
								</div>

        
                
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Angkatan Ketua</label>
									<div class="col-md-9">
                    <?= form_input('angkatan_capres', $input->angkatan_capres, ['class' => 'form-control', 'placeholder' => '2018']) ?>
									</div>
								</div>
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Angkatan Wakil Ketua</label>
									<div class="col-md-9">
                    <?= form_input('angkatan_cawapres', $input->angkatan_cawapres, ['class' => 'form-control', 'placeholder' => '2018']) ?>
									</div>
								</div>
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Foto Ketua</label>
									<div class="col-md-9">
                    <input type="file" name="gambar_capres" class="form-control-file">
									</div>
								</div>
                <div class="form-group">
									<label class="col-md-3 control-label" for="name">Foto Wakil Ketua</label>
									<div class="col-md-9">
                    <input type="file" name="gambar_cawapres" class="form-control-file">
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
