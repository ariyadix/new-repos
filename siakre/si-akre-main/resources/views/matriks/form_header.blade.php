  @section('header')
      <div class="col-sm-6">
          <h1 class="m-0">Penilaian Kinerja Program Studi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Beranda</a></li>
              <li class="breadcrumb-item active">Penilaian Kinerja Program Studi {{ $prodi->nama }}</li>
          </ol>
      </div><!-- /.col -->
      @include('matriks.form_button_float')
  @endsection
