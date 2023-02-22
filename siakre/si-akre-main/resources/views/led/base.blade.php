@extends('layouts.apps')
@section('title', 'Dashboard')
@include('led.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <p><b>BAB : </b> {{ $tableValue['bab_title'] }}
                        </p>
                    </div>
                    <div class="col-12 col-lg-5">
                        <p><b>Sub-Bagian : </b>{{ $tableValue['sub_bab'] }}
                        </p>
                        @if ($tableValue['sub_kriteria'])
                            <p><b>Sub-kriteria : </b>{{ $tableValue['sub_kriteria'] }}</p>
                        @endif
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('led.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">
                    @if ($tableValue['sub_kriteria'])
                        {{ $tableValue['sub_kriteria'] }}
                    @else
                        {{ $tableValue['sub_bab'] }}
                    @endif
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="callout callout-warning">
                    <p>
                        {!! $tableValue['keterangan'] !!}
                    </p>
                </div>

                @if (isset($tableValue['multi_input']))
                    @foreach ($tableValue['multi_input_value'] as $n)
                        <h4 class="text-start card-title mt-5 mb-2" style="float: none; font-weight:500">
                            {{ $n['title'] }}
                        </h4>
                        <div class="callout callout-secondary">
                            <p>
                                {!! $n['keterangan'] !!}
                            </p>
                        </div>
                        <form action="/led/update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input name="prod_id" type="hidden" value="{{ $prodi->id }}">
                            <input name="form_id" type="hidden" value="{{ $idTable }}">
                            <input name="table_id" type="hidden" value="{{ $n['id'] }}">
                            <input name="id" type="hidden" value="{{ $n['id'] . $prodi->id }}">
                            <br>
                            <button id="edit_btn{{ $loop->iteration }}" class="btn btn-primary"
                                onclick="edit{{ $loop->iteration }}()" type="button">
                                @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
                                    Edit
                                @else
                                    Insert
                                @endif
                            </button>
                            <button id="cancel_btn{{ $loop->iteration }}" style="display: none; margin-bottom: 1rem;"
                                class=" btn btn-warning" onclick="cancel{{ $loop->iteration }}()"
                                type="button">Cancel</button>
                            <button type="submit" style="display: none; margin-bottom: 1rem;"
                                id="save_btn{{ $loop->iteration }}" class="btn btn-success" type="button">Save</button>

                            <div id="preview_value{{ $loop->iteration }}" class="paper-preview">
                                @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
                                    {!! $multi_value[$loop->iteration - 1]['value'] !!}
                                @else
                                    No value
                                @endif
                            </div>
                            <div id="area-input{{ $loop->iteration }}">
                                <textarea name="value_text" class="editor input_value_text" id="input_value{{ $loop->iteration }}">
                                    @if (!($multi_value[$loop->iteration - 1] == null || $multi_value[$loop->iteration - 1]['value'] == ''))
{!! $multi_value[$loop->iteration - 1]['value'] !!}
@endif
                                </textarea>
                            </div>

                        </form>
                    @endforeach
                @else
                    <form action="/led/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="prod_id" type="hidden" value="{{ $prodi->id }}">
                        <input name="table_id" type="hidden" value="{{ $idTable }}">
                        <input name="form_id" type="hidden" value="{{ $idTable }}">

                        <input name="id" type="hidden" value="{{ $idTable . $prodi->id }}">
                        <br>
                        <button id="edit_btn" class="btn btn-primary" onclick="edit()" type="button">
                            @if (!($value == null || $value->value == ''))
                                Edit
                            @else
                                Insert
                            @endif
                        </button>
                        <button id="cancel_btn" style="display: none; margin-bottom: 1rem;" class=" btn btn-warning"
                            onclick="cancel()" type="button">Cancel</button>
                        <button type="submit" style="display: none; margin-bottom: 1rem;" id="save_btn"
                            class="btn btn-success" type="button">Save</button>

                        <div id="preview_value" class="paper-preview">
                            @if (!($value == null || $value->value == ''))
                                {!! $value->value !!}
                            @else
                                No value
                            @endif
                        </div>
                        <div id="area-input">
                            <textarea name="value_text" id="input_value" class="editor input_value_text">
                        @if ($value)
{{ $value->value }}
@endif
                    </textarea>
                        </div>
                    </form>
                @endif
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection


@push('scripts')
    <script src="https://cdn.tiny.cloud/1/r25shxkzc5z7npgm5l5kmy3666vdso65340x7osixreouqfh/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    
    @if (isset($tableValue['multi_input']))
        <script>
                CKEDITOR.addCss(
                    'body.document-editor { margin: 0.5cm auto; border: 1px #D3D3D3 solid; border-radius: 5px; background: white; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }' +
                    'body.document-editor, div.cke_editable { width: 700px; padding: 1cm 2cm 2cm; min-height: 1200px;} ' +
                    'body.document-editor table td > p, div.cke_editable table td > p { margin-top: 0; margin-bottom: 0; padding: 4px 0 3px 5px;} ' +
                    'blockquote { font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } ');

            $('.input_value_text').each(function () {

                CKEDITOR.replace($(this).prop('id'),{
                    height: 700,
                    //   extraPlugins: 'colorbutton,font,justify,print,tableresize,liststyle,pagebreak,exportpdf,imageresizerowandcolumn',
                    removePlugins: 'exportpdf,image,uploadimage',
                    extraPlugins: 'wordcount,pastebase64,image2,base64image,imageresizerowandcolumn,tableresizerowandcolumn',
                    bodyClass: 'document-editor',
                    removeButtons: 'PasteFromWord',
                });
                editor.config.tabSpaces = 8;
            });
            @foreach ($tableValue['multi_input_value'] as $n)
                console.log({{ $loop->iteration }});
                
                $('#area-input{{ $loop->iteration }}').hide();
                function edit{{ $loop->iteration }}() {
                    $('#area-input{{ $loop->iteration }}').show();
                    $('#edit_btn{{ $loop->iteration }}').hide();
                    $('#preview_value{{ $loop->iteration }}').hide();
                    $('#save_btn{{ $loop->iteration }}').show();
                    $('#cancel_btn{{ $loop->iteration }}').show();
                };

                function cancel{{ $loop->iteration }}() {
                    $('#edit_btn{{ $loop->iteration }}').show();
                    $('#area-input{{ $loop->iteration }}').hide();
                    $('#save_btn{{ $loop->iteration }}').hide();
                    $('#cancel_btn{{ $loop->iteration }}').hide();
                    $('#preview_value{{ $loop->iteration }}').show();
                    $('#input_value{{ $loop->iteration }}').hide();

                };
            @endforeach
        </script>
    @else
    <script>
        
        $('#area-input').hide();
        CKEDITOR.addCss(
            'body.document-editor { margin: 0.5cm auto; border: 1px #D3D3D3 solid; border-radius: 5px; background: white; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); }' +
            'body.document-editor, div.cke_editable { width: 700px; padding: 1cm 2cm 2cm; min-height: 1200px;} ' +
            'body.document-editor table td > p, div.cke_editable table td > p { margin-top: 0; margin-bottom: 0; padding: 4px 0 3px 5px;} ' +
            'blockquote { font-family: sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; } ');

        var editor = CKEDITOR.replace('input_value', {
            height: 700,
            //   extraPlugins: 'colorbutton,font,justify,print,tableresize,liststyle,pagebreak,exportpdf,imageresizerowandcolumn',
            removePlugins: 'image,uploadimage',
            extraPlugins: 'wordcount,pastebase64,image2,base64image,imageresizerowandcolumn,tableresizerowandcolumn',
            bodyClass: 'document-editor',
            removeButtons: 'PasteFromWord',
        });
        editor.config.tabSpaces = 8;
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
    @endif

@endpush
