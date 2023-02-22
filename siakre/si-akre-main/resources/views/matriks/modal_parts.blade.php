<div class="modal fade" id="bukti_penilaian" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bukti Penilaian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" action="/penilaian/101" id="bukti_form">
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-12 col-form-label">Masukkan Link
                            </label>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                        <input id="input_bukti" type="url" name="buktiPenilaian"
                                            class="fieldInsertInput form-control bukti"
                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                            required placeholder="https://"
                                            @error('buktiPenilaian') is-invalid @enderror value="">
                                    </div>
                                    <div class="invalid-feedback">
                                        @error('buktiPenilaian')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="bukti_submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="comment" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="comment-section">

                </div>
                <div class="row"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="revModal" tabindex="-1" aria-labelledby="ts_modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih reviewer</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <select class="form-control col-3" id='rev-dropdown'>
                            @foreach ($reviewerAll as $n)
                                <option value="{{ $n->rev_id }}"  {{ $n->rev_id == $reviewer->id ? 'selected' :'' }}>{{ $n->nama }}</option>
                            @endforeach
                        </select>
                        <div class="col-8">
                            <a id="change_rev_submit" class="btn btn-primary">Ganti</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
