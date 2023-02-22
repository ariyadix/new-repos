      <div class="float">
          <a href="/matriks{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"
              class="btn-float back-penilaian mb-3">
              <i class="fas fa-arrow-left"></i>
              <p>Kembali ke halaman Dashboard Penilaian</p>
          </a>
          @unless(Auth::user()->level == 3 || Auth::user()->level == 4)
              @if (isset($lkps))
                  <a href="/lkps/view/{{ $lkps }}{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"
                      class="btn-float go-matriks">
                      <i class="nav-icon fas fa-table"></i>
                      <p>Menuju ke halaman LKPS</p>
                  </a>
              @endif
          @endunless
      </div>
