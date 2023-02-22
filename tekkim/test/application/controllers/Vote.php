<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Vote extends MY_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('Vote_model', 'vote', TRUE);
      $this->load->model('Paslon_model', 'paslon', TRUE);
    }

    // Fitur Mencoblos
    public function index(){
      if($this->input->post('coblos', TRUE)) {
        $data = [
          'id_pemilih' => $this->input->post('id_pemilih', TRUE),
          'id_paslon' => $this->input->post('id_paslon', TRUE)
        ];

        $pemilih = $this->vote->pemilih($this->session->userdata('id_pemilih'));
        if ($pemilih->telah_memilih === 'tidak') {
          $this->vote->coblosPaslon($data);
        }

        $this->vote->setTelahMemilih($this->session->userdata('id_pemilih'));
        $this->session->unset_userdata('pemilih');
        $this->session->set_flashdata('mencoblos', TRUE);
        redirect('');
      }else{
        $paslons = $this->vote->allPaslon();
        $capress = $this->paslon->allCapres();
        $cawapress = $this->paslon->allCawapres();
        $main_view = 'bem/index';
        $this->load->view('template', compact('main_view', 'paslons', 'capress', 'cawapress'));
      }
    }

    // Halaman Pemilihan
    public function pemilihan(){
      if(!$this->cekLoginAdmin()) redirect('');
      $suaraMasuks = $this->vote->suaraMasuk();
      $totalSuaraMasuk = $this->vote->totalSuaraMasuk();
      $main_view = 'bem/pemilihan';
      $this->load->view('template', compact('main_view', 'suaraMasuks', 'totalSuaraMasuk'));
    }

    // Fitur Statistik Pemilihan
    public function stat(){
      if($this->session->has_userdata('nim')) redirect('');
      if($this->session->has_userdata('operator')) redirect('');

      $totalPemilih2016 = $this->vote->totalPemilih2016();
      $totalSuaraMasuk2016 = $this->vote->totalSuaraMasuk2016();
      $totalTidakMemilih2016 = $this->vote->totalTidakMemilih2016();
      $totalSuaraMasuk2016Stat = $this->vote->totalSuaraMasuk2016();

      $totalPemilih2020 = $this->vote->totalPemilih2020();
      $totalSuaraMasuk2020 = $this->vote->totalSuaraMasuk2020();
      $totalTidakMemilih2020 = $this->vote->totalTidakMemilih2020();
      $totalSuaraMasuk2020Stat = $this->vote->totalSuaraMasuk2020Stat();

      $totalPemilih2019 = $this->vote->totalPemilih2019();
      $totalSuaraMasuk2019 = $this->vote->totalSuaraMasuk2019();
      $totalTidakMemilih2019 = $this->vote->totalTidakMemilih2019();
      $totalSuaraMasuk2019Stat = $this->vote->totalSuaraMasuk2019Stat();

      $totalPemilih2018 = $this->vote->totalPemilih2018();
      $totalSuaraMasuk2018 = $this->vote->totalSuaraMasuk2018();
      $totalTidakMemilih2018 = $this->vote->totalTidakMemilih2018();
      $totalSuaraMasuk2018Stat = $this->vote->totalSuaraMasuk2018Stat();

      $totalPemilih2017 = $this->vote->totalPemilih2017();
      $totalSuaraMasuk2017 = $this->vote->totalSuaraMasuk2017();
      $totalTidakMemilih2017 = $this->vote->totalTidakMemilih2017();
      $totalSuaraMasuk2017Stat = $this->vote->totalSuaraMasuk2017Stat();

      $main_view = 'bem/statistik-pemilih';
      $this->load->view('template', compact('main_view',
      'totalSuaraMasuk2016Stat', 'totalTidakMemilih2016', 'totalSuaraMasuk2016', 'totalPemilih2016',
      'totalSuaraMasuk2019Stat', 'totalTidakMemilih2019', 'totalSuaraMasuk2019', 'totalPemilih2019',
      'totalSuaraMasuk2017Stat', 'totalTidakMemilih2017', 'totalSuaraMasuk2017', 'totalPemilih2017',
      'totalSuaraMasuk2018Stat', 'totalTidakMemilih2018', 'totalSuaraMasuk2018', 'totalPemilih2018',
      'totalSuaraMasuk2020Stat', 'totalTidakMemilih2020', 'totalSuaraMasuk2020', 'totalPemilih2020'
      ));
    }

    // Fitur Statistik Pemilihan Berdasarkan Fakultas
    public function statfakultas(){
      if($this->session->has_userdata('nim')) redirect('');
      if($this->session->has_userdata('admin')) redirect('');
      if($this->session->has_userdata('dekan')) redirect('');
      if($this->session->has_userdata('rektor')) redirect('');

      $fakultas = $this->session->userdata('fakultas');
      $totalPemilihFakultas = $this->vote->totalPemilihFakultas($fakultas);
      $totalSuaraMasukFakultas = $this->vote->totalSuaraMasukFakultas($fakultas);
      $totalTidakMemilihFakultas = $this->vote->totalTidakMemilihFakultas($fakultas);
      $totalSuaraMasukFakultasStat = $this->vote->totalSuaraMasukFakultasStat($fakultas);

      $main_view = 'bem/statistik-fakultas';
      $this->load->view('template', compact('main_view',
      'totalSuaraMasukFakultasStat', 'totalTidakMemilihFakultas', 'totalSuaraMasukFakultas', 'totalPemilihFakultas'));
    }

    // Fitur Live Count
    public function livecount(){
      if($this->session->has_userdata('nim')) redirect('');

      $paslonSatu = $this->vote->getPaslonSatu();
      $paslonDua = $this->vote->getPaslonDua();

      $totalSuaraMasukSatuStat = $this->vote->totalSuaraMasukSatuStat();
      $totalSuaraMasukSatu = $this->vote->totalSuaraMasukSatu();

      $totalSuaraMasukDuaStat = $this->vote->totalSuaraMasukDuaStat();
      $totalSuaraMasukDua = $this->vote->totalSuaraMasukDua();

      $totalPemilih = $this->vote->totalPemilih();
      $totalSuaraMasuk = $this->vote->totalSuaraMasuk();
      $totalTidakMemilih = $this->vote->totalTidakMemilih();
      $totalSuaraMasukStat = $this->vote->totalSuaraMasukStat();

      $main_view = 'bem/live-count';
      $this->load->view('template', compact('main_view', 'paslonSatu', 'paslonDua', 'totalPemilih', 'totalSuaraMasuk', 'totalTidakMemilih', 'totalSuaraMasukStat', 'totalSuaraMasukDuaStat', 'totalSuaraMasukDua', 'totalSuaraMasukSatuStat', 'totalSuaraMasukSatu'));
    }

    // Fitur Live Count Fakultas
    public function livecountfakultas(){
      if($this->session->has_userdata('nim')) redirect('');
      if($this->session->has_userdata('admin')) redirect('');
      if($this->session->has_userdata('dekan')) redirect('');
      if($this->session->has_userdata('rektor')) redirect('');

      $fakultas = $this->session->userdata('fakultas');

      $paslonSatu = $this->vote->getPaslonSatu();
      $paslonDua = $this->vote->getPaslonDua();

      $totalSuaraMasukSatuFakultasStat = $this->vote->totalSuaraMasukSatuFakultasStat($fakultas);
      $totalSuaraMasukSatuFakultas = $this->vote->totalSuaraMasukSatuFakultas($fakultas);

      $totalSuaraMasukDuaFakultasStat = $this->vote->totalSuaraMasukDuaFakultasStat($fakultas);
      $totalSuaraMasukDuaFakultas = $this->vote->totalSuaraMasukDuaFakultas($fakultas);

      $totalPemilihFakultas = $this->vote->totalPemilihFakultas($fakultas);
      $totalSuaraMasukFakultas = $this->vote->totalSuaraMasukFakultas($fakultas);
      $totalTidakMemilihFakultas = $this->vote->totalTidakMemilihFakultas($fakultas);
      $totalSuaraMasukFakultasStat = $this->vote->totalSuaraMasukFakultasStat($fakultas);

      $main_view = 'bem/live-count-fakultas';
      $this->load->view('template', compact('main_view', 'paslonSatu', 'paslonDua', 'totalPemilihFakultas', 'totalSuaraMasukFakultas', 'totalTidakMemilihFakultas', 'totalSuaraMasukFakultasStat', 'totalSuaraMasukDuaFakultasStat', 'totalSuaraMasukDuaFakultas', 'totalSuaraMasukSatuFakultasStat', 'totalSuaraMasukSatuFakultas'));
    }

    public function waitlivecount(){
      $this->load->view('waitlivecount');
    }

  }
