                 @if (Auth::user()->level == 1)
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/led/{{ $prev }}?id={{ $prodi->id }}"><i
                                 class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                         <a class="btn btn-success  {{ ($next == 0 && $next != 'all') ? 'disabled' : '' }}"
                             href="/led/{{ $next }}?id={{ $prodi->id }}">Selanjutnya <i
                                 class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @else
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}" href="/led/{{ $prev }}"><i
                                 class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                         <a class="btn btn-success  {{ ($next == 0 && $next != 'all')? 'disabled' : '' }}"
                             href="/led/{{ $next }}">Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @endif
