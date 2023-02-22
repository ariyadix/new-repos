<!-- BEM-VOTE -->

	<div class="col-sm-25 col-sm-offset-25 col-lg-25 col-lg-offset-25 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Statistik Pemilih</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Statistik Pemilih</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<h3 style="margin-left:25px">Statistik Pemilih Tiap Angkatan</h3>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Angkatan 2016</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?= $totalSuaraMasuk2016Stat ?>" ><span class="percent"><?= $totalSuaraMasuk2016Stat ?>%</span></div>
						<h5>Total Suara Masuk : <strong><?= $totalSuaraMasuk2016 ?></strong></h5>
            <h5>Total Pemilih : <strong><?= $totalPemilih2016 ?></strong></h5>
            <h5>Total Belum Memilih : <strong><?= $totalTidakMemilih2016 ?></strong></h5>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Angkatan 2017</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?= $totalSuaraMasuk2017Stat ?>" ><span class="percent"><?= $totalSuaraMasuk2017Stat ?>%</span></div>
						<h5>Total Suara Masuk : <strong><?= $totalSuaraMasuk2017 ?></strong></h5>
            <h5>Total Pemilih : <strong><?= $totalPemilih2017 ?></strong></h5>
            <h5>Total Belum Memilih : <strong><?= $totalTidakMemilih2017 ?></strong></h5>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Angkatan 2018</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?= $totalSuaraMasuk2018Stat ?>" ><span class="percent"><?= $totalSuaraMasuk2018Stat ?>%</span></div>
						<h5>Total Suara Masuk : <strong><?= $totalSuaraMasuk2018 ?></strong></h5>
            <h5>Total Pemilih : <strong><?= $totalPemilih2018 ?></strong></h5>
            <h5>Total Belum Memilih : <strong><?= $totalTidakMemilih2018 ?></strong></h5>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Angkatan 2019</h4>
						<div class="easypiechart" id="easypiechart-coral" data-percent="<?= $totalSuaraMasuk2019Stat ?>" ><span class="percent"><?= $totalSuaraMasuk2019Stat ?>%</span></div>
						<h5>Total Suara Masuk : <strong><?= $totalSuaraMasuk2019 ?></strong></h5>
            <h5>Total Pemilih : <strong><?= $totalPemilih2019 ?></strong></h5>
            <h5>Total Belum Memilih : <strong><?= $totalTidakMemilih2019 ?></strong></h5>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Angkatan 2020</h4>
						<div class="easypiechart" id="easypiechart-maroon" data-percent="<?= $totalSuaraMasuk2020Stat ?>" ><span class="percent"><?= $totalSuaraMasuk2020Stat ?>%</span></div>
						<h5>Total Suara Masuk : <strong><?= $totalSuaraMasuk2020 ?></strong></h5>
            <h5>Total Pemilih : <strong><?= $totalPemilih2020 ?></strong></h5>
            <h5>Total Belum Memilih : <strong><?= $totalTidakMemilih2020 ?></strong></h5>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->

	</div>	<!--/.main-->
