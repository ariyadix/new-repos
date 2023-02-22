@extends('layouts.apps')
@section('title', 'Dashboard')
@include('led.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <p><b>BAB : </b> Semua
                        </p>
                    </div>
                    <div class="col-12 col-lg-5">
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('led.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">
                   Semua (Preview)
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="callout callout-warning">
                    <p>
                        <i>---klik tombol print dibawah untuk print dokumen----</i>
                    </p>
                </div>

                        <div id="area-input">
                            <textarea disabled  name="value_text" id="input_value" class="editor input_value_text">
                            @php
                                $bab = 1;
                            @endphp
                                @foreach ($allValue as $n)
                                @if (!($n['value'] == null || $n['value'] == ''))
                                    @php
                                        $currId = (int) $n['id'];
                                        $curr = substr($currId, 0, 1);
                                    @endphp
                                    @if ($curr > $bab)
                                        <div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
                                         @php
                                            $bab = $curr;
                                        @endphp
                                    @endif
                                    {!! $n['value'] !!} 
                                @endif
                            @endforeach
                    </textarea>
                        </div>

            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection


@push('scripts')
    <script src="https://cdn.tiny.cloud/1/r25shxkzc5z7npgm5l5kmy3666vdso65340x7osixreouqfh/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    
    <script>
        
        CKEDITOR.addCss(
            'body.document-editor { margin: 0.5cm auto; border: 1px #D3D3D3 solid; border-radius: 5px; background: white; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }' +
            'body.document-editor, div.cke_editable { width: 700px; padding: 1cm 2cm 2cm; min-height: 1200px;} ' +
            'body.document-editor table td > p, div.cke_editable table td > p { margin-top: 0; margin-bottom: 0; padding: 4px 0 3px 5px;} ' +
            'blockquote { font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } ');

        var editor = CKEDITOR.replace('input_value', {
            height: 700,
            bodyClass: 'document-editor',
                        

        });
        editor.readOnly =true;
        editor.removePlugins = 'save';
        function edit() {
            $('#area-input').show();
            $('#edit_btn').hide();
            $('#preview_value').hide();
            $('#save_btn').show();
            $('#cancel_btn').show();
        };


        function cancel() {
            $('#area-input').hide();
            $('#edit_btn').show();
            $('#save_btn').hide();
            $('#cancel_btn').hide();
            $('#preview_value').show();
            $('#input_value').hide();

        };
    </script>

@endpush
