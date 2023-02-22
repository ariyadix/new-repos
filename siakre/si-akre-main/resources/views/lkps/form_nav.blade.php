                <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                    <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                        href="/lkps/view/{{ $prev }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"><i
                            class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                    <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                        href="/lkps/view/{{ $next }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}">Selanjutnya
                        <i class="fas fa-arrow-circle-right"></i></a>
                </div>
