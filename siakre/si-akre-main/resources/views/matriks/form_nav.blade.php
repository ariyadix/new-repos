                 @if (Auth::user()->level == 1 || Auth::user()->level == 5)
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $prev }}?id={{ $prodi->id }}{{ $reviewer->id ? "&rev=".$reviewer->id : "" }}"><i
                                 class="fas fa-arrow-circle-left"></i> Sebelumnya</a>
                        @if (Auth::user()->level == 1 || Auth::user()->level == 2)
                         <div>
                             <p><b>Reviewer : </b>
                                 <span id="ts-year">{!! $reviewer->id ? $reviewer->nama :'<i>  -- Pilih reviewer --  </i>'  !!}</span> <a href='#' id="rev_change"
                                     class='badge badge-info' data-bs-toggle="modal" data-bs-target="#revModal">Ganti</a>
                             </p>
                         </div>
                         @endif
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $next }}?id={{ $prodi->id }}{{ $reviewer->id ? "&rev=".$reviewer->id : "" }}">Selanjutnya <i
                                 class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @else
                     <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
                         <a class="btn btn-info  {{ $prev == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $prev }}{{ $reviewer->id ? "?rev=".$reviewer->id : "" }}"><i class="fas fa-arrow-circle-left"></i>
                             Sebelumnya</a>
                        @if (Auth::user()->level == 1 || Auth::user()->level == 2)
                         <div>
                             <p><b>Reviewer : </b>
                                 <span id="ts-year">{!! $reviewer->id ? $reviewer->nama :'<i>  -- Pilih reviewer --  </i>'  !!}</span> <a href='#' id="rev_change"
                                     class='badge badge-info' data-bs-toggle="modal" data-bs-target="#revModal">Ganti</a>
                             </p>
                         </div>
                         @endif
                         <a class="btn btn-success  {{ $next == 0 ? 'disabled' : '' }}"
                             href="/matriks/view/{{ $next }}{{ $reviewer->id ? "?rev=".$reviewer->id : "" }}">Selanjutnya <i
                                 class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 @endif
