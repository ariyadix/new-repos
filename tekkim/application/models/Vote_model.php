<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Vote_model extends CI_Model{

    // Mendapatkan data suatu paslon
    public function allPaslon(){
      return $this->db->select('*')->from('paslon')->join('detail_capres','paslon.id_paslon = detail_capres.id_paslon')->join('detail_cawapres', 'paslon.id_paslon = detail_cawapres.id_paslon')->get()->result();
    }

    // Data Semua Suara Masuk
    public function suaraMasuk(){
      return $this->db->select('*')->from('pemilihan')->join('pemilih','pemilihan.id_pemilih = pemilih.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->get()->result();
    }

    // Hapus Suara Masuk
    public function deleteSuaraMasuk($id){
      return $this->db->where('id_pemilihan', $id)->delete('pemilihan');
    }

    // Set Kembali Pemilih
    public function setKembaliPemilih($id){
      $sql = "update pemilih set telah_memilih = 'tidak' where id_pemilih = '$id'";
      return $this->db->query($sql);
    }

    // Data Paslon Satu
    public function getPaslonSatu(){
      return $this->db->select('*')->from('paslon')->where('id_paslon', '3')->get()->row();
    }

    // Data Paslon Dua
    public function getPaslonDua(){
      return $this->db->select('*')->from('paslon')->where('id_paslon', '4')->get()->row();
    }

    // Data Suatu Pemilih
    public function pemilih($id){
      return $this->db->where('id_pemilih', $id)->get('pemilih')->row();
    }

    // Fitur Coblos Paslon
    public function coblosPaslon($data){
      return $this->db->insert('pemilihan', $data);
    }

    // Fitur Set Telah Memilih
    public function setTelahMemilih($id){
      $sql = "update pemilih set telah_memilih = 'ya' where id_pemilih = '$id'";
      return $this->db->query($sql);
    }

    // Query Aggregat

    // Paslon Satu
    // Statistik Total Suara Masuk Paslon Satu
    public function totalSuaraMasukSatuStat(){
      $totalSuaraMasuk = $this->totalSuaraMasukSatu();
      $totalPemilih = $this->totalSuaraMasuk();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Suara Masuk Paslon Satu
    public function totalSuaraMasukSatu(){
      return $this->db->select('*')->from('pemilihan')->join('pemilih', 'pemilihan.id_pemilih = pemilih.id_pemilih')->where('pemilihan.id_paslon', '3')->get()->num_rows();
    }

    // Paslon Dua
    // Statistik Total Suara Masuk Paslon Dua
    public function totalSuaraMasukDuaStat(){
      $totalSuaraMasuk = $this->totalSuaraMasukDua();
      $totalPemilih = $this->totalSuaraMasuk();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Suara Masuk Paslon Dua
    public function totalSuaraMasukDua(){
      return $this->db->select('*')->from('pemilihan')->join('pemilih', 'pemilihan.id_pemilih = pemilih.id_pemilih')->where('pemilihan.id_paslon', '4')->get()->num_rows();
    }

    // Statistik Total Suara Masuk Semua Fakultas
    public function totalSuaraMasukStat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk();
      $totalPemilih = $this->totalPemilih();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih
    public function totalPemilih(){
      return $this->db->select('*')->from('pemilih')->get()->num_rows();
    }

    // Total Suara Masuk
    public function totalSuaraMasuk(){
      return $this->db->select('*')->from('pemilihan')->get()->num_rows();
    }

    // Total Pemilih Belum Memilih
    public function totalTidakMemilih(){
      return $this->db->select('*')->from('pemilih')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    // Berbasis Satu Fakultas

    public function totalSuaraMasukFakultasStat($fakultas){
      $totalSuaraMasuk = $this->totalSuaraMasukFakultas($fakultas);
      $totalPemilih = $this->totalPemilihFakultas($fakultas);
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    public function totalPemilihFakultas($fakultas){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', $fakultas)->get()->num_rows();
    }

    public function totalSuaraMasukFakultas($fakultas){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', $fakultas)->get()->num_rows();
    }

    public function totalTidakMemilihFakultas($fakultas){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', $fakultas)->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    // Paslon Satu
    // Statistik Total Suara Masuk Paslon Satu
    public function totalSuaraMasukSatuFakultasStat($fakultas){
      $totalSuaraMasuk = $this->totalSuaraMasukSatuFakultas($fakultas);
      $totalPemilih = $this->totalSuaraMasukFakultas($fakultas);
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Suara Masuk Paslon Satu
    public function totalSuaraMasukSatuFakultas($fakultas){
      return $this->db->select('*')->from('pemilihan')->join('pemilih', 'pemilihan.id_pemilih = pemilih.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->where('pemilihan.id_paslon', '3')->where('nama_fakultas', $fakultas)->get()->num_rows();
    }

    // Paslon Dua
    // Statistik Total Suara Masuk Paslon Dua Fakultas
    public function totalSuaraMasukDuaFakultasStat($fakultas){
      $totalSuaraMasuk = $this->totalSuaraMasukDuaFakultas($fakultas);
      $totalPemilih = $this->totalSuaraMasukFakultas($fakultas);
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Suara Masuk Paslon Dua Fakultas
    public function totalSuaraMasukDuaFakultas($fakultas){
      return $this->db->select('*')->from('pemilihan')->join('pemilih', 'pemilihan.id_pemilih = pemilih.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->where('pemilihan.id_paslon', '4')->where('nama_fakultas', $fakultas)->get()->num_rows();
    }

    // Semua Fakultas

    // Teknik
    // Total Statistik Suara Masuk Fakultas Teknik
    public function totalSuaraMasuk2016Stat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk2016();
      $totalPemilih = $this->totalPemilih2016();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Teknik
    public function totalPemilih2016(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angakatan 2016')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Teknik
    public function totalSuaraMasuk2016(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Angakatan 2016')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Teknik
    public function totalTidakMemilih2016(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2016')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //Ilmu Pendidikan
    // Total Statistik Suara Masuk Fakultas Ilmu Pendidikan
    public function totalSuaraMasuk2020Stat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk2020();
      $totalPemilih = $this->totalPemilih2020();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Ilmu Pendidikan
    public function totalPemilih2020(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2020')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Ilmu Pendidikan
    public function totalSuaraMasuk2020(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Angkatan 2020')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Ilmu Pendidikan
    public function totalTidakMemilih2020(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2020')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //MIPA
    // Total Statistik Suara Masuk Fakultas MIPA
    public function totalSuaraMasuk2019Stat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk2019();
      $totalPemilih = $this->totalPemilih2019();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas MIPA
    public function totalPemilih2019(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2019')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas MIPA
    public function totalSuaraMasuk2019(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Angkatan 2019')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas MIPA
    public function totalTidakMemilih2019(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2019')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //Ekonomi
    // Total Statistik Suara Masuk Fakultas Ekonomi
    public function totalSuaraMasuk2018Stat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk2018();
      $totalPemilih = $this->totalPemilih2018();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Ekonomi
    public function totalPemilih2018(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2018')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Ekonomi
    public function totalSuaraMasuk2018(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Angkatan 2018')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Ekonomi
    public function totalTidakMemilih2018(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2018')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //Olahraga & Kesehatan
    // Total Statistik Suara Masuk Fakultas Olahraga & Kesehatan
    public function totalSuaraMasuk2017Stat(){
      $totalSuaraMasuk = $this->totalSuaraMasuk2017();
      $totalPemilih = $this->totalPemilih2017();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Olahraga & Kesehatan
    public function totalPemilih2017(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2017')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Olahraga & Kesehatan
    public function totalSuaraMasuk2017(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Angkatan 2017')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Olahraga & Kesehatan
    public function totalTidakMemilih2017(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Angkatan 2017')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //Ilmu Sosial
    // Total Statistik Suara Masuk Fakultas Ilmu Sosial
 /*   public function totalSuaraMasukLingkunganStat(){
      $totalSuaraMasuk = $this->totalSuaraMasukLingkungan();
      $totalPemilih = $this->totalPemilihLingkungan();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Ilmu Sosial
    public function totalPemilihLingkungan(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Teknik Lingkungan')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Ilmu Sosial
    public function totalSuaraMasukLingkungan(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Teknik Lingkungan')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Ilmu Sosial
    public function totalTidakMemilihLingkungan(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Teknik Lingkungan')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }

    //Hukum
    // Total Statistik Suara Masuk Fakultas Hukum
    public function totalSuaraMasukMesinStat(){
      $totalSuaraMasuk = $this->totalSuaraMasukMesin();
      $totalPemilih = $this->totalPemilihMesin();
      return round($totalSuaraMasuk / $totalPemilih * 100);
    }

    // Total Pemilih Fakultas Hukum
    public function totalPemilihMesin(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Teknik Mesin')->get()->num_rows();
    }

    // Total Suara Masuk Fakultas Hukum
    public function totalSuaraMasukMesin(){
      return $this->db->select('*')->from('pemilih')->join('pemilihan','pemilih.id_pemilih = pemilihan.id_pemilih')->join('fakultas', 'pemilih.id_fakultas = fakultas.id_fakultas')->join('paslon', 'pemilihan.id_paslon = paslon.id_paslon')->where('fakultas.nama_fakultas', 'Teknik Mesin')->get()->num_rows();
    }

    // Total Tidak Memilih Fakultas Hukum
    public function totalTidakMemilihMesin(){
      return $this->db->select('*')->from('pemilih')->join('fakultas','pemilih.id_fakultas = fakultas.id_fakultas')->where('fakultas.nama_fakultas', 'Teknik Mesin')->where('pemilih.telah_memilih', 'tidak')->get()->num_rows();
    }*/

  }
