@push('scripts')
    <script>
        $(document).ready(function() {
            let bukti_field = document.querySelectorAll("td.bukti_penilaian");
            bukti_field.forEach(element => {
                if (element.querySelector(".row .hidden")) {
                    console.log(element);
                    @if (Auth::user()->level == 5)
                        element.querySelector(".row").innerHTML += '<p class="font-weight-normal m-0">Tidak ada bukti penilaian</p>';
                    @endif
                }
            });
            // showComment()
            $("#rev_change").click(function() {
                $("#revModal").modal('show');
            });
            $("#change_rev_submit").click(function() {
                let _idForm = {{ $idForm }};
                let _value = parseInt($(this).parent().siblings("#rev-dropdown").val());
                let _prodi_id = {{ $prodi->id }};
                @if (Auth::user()->level == 1 || Auth::user()->level == 5)
                    let _url = "/matriks/view/" + _idForm + "?id=" + _prodi_id+"&rev="+_value;
                @else
                    let _url = "/matriks/view/" + _idForm + "?rev="+_value;
                @endif
                console.log(_url);
                window.location.href = _url          
            });
        });

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        function showComment() {
            let matriks_row = document.querySelectorAll("tbody>tr.matriks_row");

            let comment_filed = document.createElement('td');
            let comment_btn = document.createElement('div');
            let edit_comment_btn = document.createElement('div');
            matriks_row.forEach(element => {
                let td_first = element.querySelector(".matriks_id")
                console.log(td_first);
                let row_id = td_first.getAttribute('data-id')
                console.log("row ids :" + row_id);
                console.log(element);

                comment_btn.innerHTML = ` <a class="btn btn-primary col-12 ml-auto mr-auto` + ` "
                                        id="lihat_comment"
                                        href="#"
                                        data-url=""
                                        target="_blank">Lihat
                                        Komentar` + row_id + `</a>`
                comment_filed.appendChild(comment_btn)
                element.appendChild(comment_filed.cloneNode(true))

            });
        };

        $('.penilaian_check_field').click(function(event) {
            event.preventDefault();
            if ($(this).parent().hasClass('view-only') || $(this).parent().hasClass('disable-input-radio')) {
                return
            }
            let _grade;
            let _skor;
            let _rev_id = {{ $reffer_id }};
            let _prodi_id = {{ $prodi->id }};
            let radio = this
            let row = $(this).parent()
            let bobot = parseFloat($(this).siblings(".bobot").data('bobot'))
            let id_temp = parseInt($(this).siblings(".matriks_id").data('id'));
            let _row_id = id_temp
            const _id = parseInt(`${id_temp}${_prodi_id}${_rev_id}`);
            console.log(_id);
            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(_prodi_id);
            console.log(row);
            if (event.target.type !== 'radio') {
                @if (Auth::user()->level != 5)

                Swal.fire({
                    title: 'Apa kamu yakin mengubah nilai ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, ubah!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(':radio', this).trigger('click');

                        _grade = $(':radio', this).val()
                        _skor = _grade * bobot / 4
                        $.ajax({
                            data: {
                                id: _id,
                                row_id: _row_id,
                                grade: _grade,
                                skor: _skor,
                                prodi_id: _prodi_id,
                                rev_id: _rev_id,
                                _token: _token
                            },
                            url: "/matriks/update",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
                                console.log(data.success);
                                showSuccess(data.success)
                                updateContent(radio, _skor)
                                setTimeout(updateRowColor(row), 500);
                            },
                            error: function(data) {
                                showError("Gagal mengupdate data")
                                console.log('Error:', data);
                            }
                        });
                    }
                });
                @else
                $(':radio', this).trigger('click');

                        _grade = $(':radio', this).val()
                        _skor = _grade * bobot / 4
                        $.ajax({
                            data: {
                                id: _id,
                                row_id: _row_id,
                                grade: _grade,
                                skor: _skor,
                                prodi_id: _prodi_id,
                                rev_id: _rev_id,
                                _token: _token
                            },
                            url: "/matriks/update",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
                                console.log(data.success);
                                showSuccess(data.success)
                                updateContent(radio, _skor)
                                setTimeout(updateRowColor(row), 500);
                            },
                            error: function(data) {
                                showError("Gagal mengupdate data")
                                console.log('Error:', data);
                            }
                        });
                @endif
            }
        });

        function notField(params, _skor) {
            let bobot = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor_parent = $(params).siblings(".nilai")
            _grade = $(':radio', params).val()
            switch (_grade) {
                case '4':
                    console.log(skor_parent);
                    skor_parent.css("background-color", "#0c9");
                    skor_parent.css("color", "#fff");
                    break;
                case '3':
                    skor_parent.css("background-color", "orange");
                    skor_parent.css("color", "#fff");
                    break;
                case '2':
                    skor_parent.css("background-color", "yellow");
                    skor_parent.css("color", "#000");
                    break;
                case '1':
                    skor_parent.css("background-color", "rgb(255, 68, 68)");
                    skor_parent.css("color", "#fff");
                    break;

                default:
                    break;
            }
            skor_parent.text(_skor)
        };

        function updateContent(params, _skor) {
            let bobot = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor_parent = $(params).siblings(".nilai")
            _grade = $(':radio', params).val()
            switch (_grade) {
                case '4':
                    console.log(skor_parent);
                    skor_parent.css("background-color", "#0c9");
                    skor_parent.css("color", "#fff");
                    break;
                case '3':
                    skor_parent.css("background-color", "orange");
                    skor_parent.css("color", "#fff");
                    break;
                case '2':
                    skor_parent.css("background-color", "yellow");
                    skor_parent.css("color", "#000");
                    break;
                case '1':
                    skor_parent.css("background-color", "rgb(255, 68, 68)");
                    skor_parent.css("color", "#fff");
                    break;

                default:
                    break;
            }
            skor_parent.text(_skor)
            @if (Auth::user()->level != 5)
                // updateRowColor(row)
                //
            @endif

        };

        function updateRowColor(params) {
            let skor_parent = $(params).children(".nilai")
            let lihat_bukti_btn = $(params).find('#lihat_bukti')
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))
            // let bukti = parseFloat($(params).siblings(".bobot").data('bobot'))
            let skor
            if (isEmpty(skor_parent))
                skor = "";
            else
                skor = skor_parent.text();
            let bukti = lihat_bukti_btn.attr('href')
            console.log(skor);
            console.log(bukti + 'bisa');
            console.log(bukti == ""||bukti == undefined)
            @if (Auth::user()->level != 5)
            if (skor == "" || (bukti == ""||bukti == undefined)) {
            @elseif (Auth::user()->level == 2)
            if (bukti == ""||bukti == undefined) {
            @elseif (Auth::user()->level == 5)
            if (skor == "") {
            @endif
                params.addClass("incomplete")
            } else {
                console.log('remove');
                params.removeClass("incomplete");
            }
        };
        $('.penilaian_check_field').hover(function(event) {
            $(this).find('.tooltiptext').addClass("active")
        }, function(event) {
            $(this).find('.tooltiptext').removeClass("active")
        })
        $('#bukti_submit').click(function(event) {
            event.preventDefault();


            let id_temp = parseInt($('#bukti_penilaian').find('#input_row_id').val());
            let row = $(`.matriks_id[data-id="${id_temp}"]`).parent()

                let _rev_id = {{ $prodi->user->id }};
                let _prodi_id = {{ $prodi->id }};
                let _row_id = id_temp
                const _id = parseInt(`${id_temp}${_prodi_id}${_rev_id}`);
                console.log(_id);
                let _bukti = $(input_bukti).val()

            let _token = $('meta[name="csrf-token"]').attr('content');

            console.log(row);
            if (_bukti.length == 0 || isValidHttpUrl(_bukti)) {

                $.ajax({
                    data: {
                        id: _id,
                        bukti: _bukti,
                        row_id: _row_id,
                        prodi_id: _prodi_id,
                        rev_id: _rev_id,
                        _token: _token
                    },
                    url: "/matriks/update-bukti",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data.success);
                        showSuccess(data.success)
                        $('#bukti_penilaian').modal('hide')
                        updateBukti(row, data.data)
                        @if (Auth::user()->level != 5)
                            updateRowColor(row)
                        @endif
                    },
                    error: function(data) {
                        showError("Gagal mengupdate data")
                        console.log('Error:', data);
                    }
                });
            } else {
                showError("Invalid url bukti")
            }
        });
        $('#bukti_penilaian').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('row') // Extract info from data-* attributes
            var url_data = button.data('url') // Extract info from data-* attributes

            var modal = $(this)
            modal.find('#input_row_id').val(recipient)
            modal.find('#input_bukti').val(url_data)
        })
        $('#comment').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var row_id = button.data('row') // Extract info from data-* attributes
            var prodi_id = button.data('prodi') // Extract info from data-* attributes
            var rev_id = button.data('rev') // Extract info from data-* attributes
            var url_data = button.data('url') // Extract info from data-* attributes

                console.log(rev_id);
                let comments = []
                $.ajax({
                    url: "/matriks/komentar?id=" + row_id + "&prodi=" + prodi_id + "&rev=" + rev_id,
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        showComments(data)
                    },
                    error: function(data) {
                        showError("Gagal mendapatkan data")
                        console.log('Error:', data);
                    }
                });
            })

            function showComments(data) {
                let modal_body = document.querySelector('.comment-section')
                modal_body.innerHTML = ""
                let name = document.createElement('div');
                name.classList.add("user-block")

                let comment = document.createElement('p');
                comment.classList.add('comment_preview')
                let comment_input = document.createElement('TEXTAREA');
                comment_input.classList.add('form-control', 'hidden', 'mb-3')

                let comment_wrapper = document.createElement('div');
                comment_wrapper.classList.add("post")


                let btn_wrapper = document.createElement('div');
                btn_wrapper.classList.add("btn_wrapper")


                data.comments.forEach((element, i) => {
                    if (element.comment != null) {
                        console.log(element.id);
                        if (i >= 1)
                            comment_wrapper.classList.add('mt-5')

                        name.innerHTML = `<span class="username ml-0">
                                <a href="#">` + element.user.nama + `</a>
                            </span>
                            <span class="` + element.user.instansi + `</span>`
                        comment.innerHTML = element.comment
                        comment_input.innerHTML = element.comment
                        btn_wrapper.innerHTML =
                            `<button id="edit_comment_btn" class=" edit_comment_btn btn btn-primary" type="button">
                            <i class="fas fa-edit"></i>
                            Edit
                        </button>` +
                            `<button id="cancel_comment_btn" style="display: none; margin-bottom: 1rem;" class="cancel_comment_btn btn btn-warning"
                        type="button">
                                <i class="fas fa-times"></i>
                                Cancel</button>` +
                            `<button type="submit" style="display: none; margin-bottom: 1rem;" id="save_comment_btn"
                            class="save_comment_btn btn btn-success ml-2" type="button" data-id="` + element.id +
                            `" data-row="` + data.row_id + `" data-user="` + element.user_id + `">
                            <i class="fas fa-save"></i>
                            Save</button>`
                        @if (Auth::user()->level == 5 || Auth::user()->level == 1)
                            comment_wrapper.append(name, comment, comment_input, btn_wrapper)
                        @else
                            comment_wrapper.append(name, comment, comment_input)
                        @endif

                        modal_body.appendChild(comment_wrapper.cloneNode(true))
                    }
                })
                @if (Auth::user()->level == 5)
                    if (data.comments.length == 0) {
                        console.log("KOSONGGNGNGNG");
                        name.innerHTML = `<span class="username ml-0">
                    <a href="#"> ` + data.user.nama + ` </a>
                </span>
                <span> ` + data.user.instansi + `</span>`
                        comment.innerHTML = `<i>no comment yet</i>`

                        btn_wrapper.innerHTML =
                            `<button id="edit_comment_btn" class=" edit_comment_btn btn btn-primary" type="button">
                    <i class="fas fa-edit"></i>
                    Add Comment
                </button>` +
                            `<button id="cancel_comment_btn" style="display: none; margin-bottom: 1rem;"
                    class="cancel_comment_btn btn btn-warning" type="button">
                    <i class="fas fa-times"></i>
                    Cancel</button>` +
                            `<button type="submit" style="display: none; margin-bottom: 1rem;" id="save_comment_btn"
                    class="save_comment_btn btn btn-success ml-2" type="button" data-id="` + data.row_id + data
                            .prodi_id + data.rev_id +
                            `" data-row="` + data.row_id + `" data-user="` + data.rev_id + `">
                    <i class="fas fa-save"></i>
                    Save</button>`
                        comment_wrapper.append(name, comment, comment_input, btn_wrapper)

                        modal_body.appendChild(comment_wrapper.cloneNode(true))

                    }
                @else
                    if (data.comments.length == 0) {
                        modal_body.innerHTML = `<i>no comment yet</i>`
                    }
                @endif

                $('.edit_comment_btn').click(function(event) {
                    $(this).parent().parent().find('TEXTAREA').show()
                    $(this).parent().parent().find('.comment_preview').hide()
                    $(this).parent().find('#cancel_comment_btn').show()
                    $(this).parent().find('#save_comment_btn').show()

                    $(this).hide()
                });

                $('.cancel_comment_btn').click(function(event) {
                    $(this).parent().parent().find('TEXTAREA').hide()
                    $(this).parent().parent().find('.comment_preview').show()
                    $(this).parent().find('#edit_comment_btn').show()
                    $(this).parent().find('#save_comment_btn').hide()

                    $(this).hide()
                });
                $('.save_comment_btn').click(function(event) {
                    let id_temp = $(this).data('row')
                    let comment_wrapper = $(this).parent().parent()

                    let _rev_id = $(this).data('user')
                    let _prodi_id = {{ $prodi->id }};
                    let _row_id = id_temp
                    const _id = parseInt(`${id_temp}${_prodi_id}${_rev_id}`);
                    console.log(_id);
                    let _bukti = $(input_bukti).val()

                    let _token = $('meta[name="csrf-token"]').attr('content');
                    let _comment = $(this).parent().parent().find('TEXTAREA').val()
                    _comment = encodeHTML(_comment)
                    $.ajax({
                        data: {
                            id: _id,
                            row_id: _row_id,
                            prodi_id: _prodi_id,
                            rev_id: _rev_id,
                            comment: _comment,
                            _token: _token
                        },
                        url: "/matriks/komentar",
                        type: "POST",
                        dataType: 'json',
                        success: function(data) {
                            console.log(data.value);
                            showSuccess(data.success)

                            updateComment(comment_wrapper, data.value)
                            console.log(this);

                        },
                        error: function(data) {
                            showError("Gagal mengupdate data komentar")
                            console.log('Error:', data);
                        }
                    });
                });

                function updateComment(comment_row, data) {
                    $(comment_row).find('TEXTAREA').hide()
                    $(comment_row).find('#edit_comment_btn').show()
                    $(comment_row).find('#cancel_comment_btn').hide()
                    $(comment_row).find('#save_comment_btn').hide()
                    $(comment_row).find('.comment_preview').html(data)
                    $(comment_row).find('.comment_preview').show()


                    @if (Auth::user()->level == 5)
                        if (data == null) {
                            $(comment_row).find('#comment_preview').html(`<i>no comment yet</i>`)
                            $(comment_row).find('#edit_comment_btn').html(`<i class="fas fa-edit"></i> Add Comment`)
                        } else {
                            $(comment_row).find('#edit_comment_btn').html(`<i class="fas fa-edit"></i> Edit`)
                        }
                    @else
                        if (data == null) {
                            $(comment_row).hide()
                        }
                    @endif
                }
            }
            $('#comment').on('hide.bs.modal', function(event) {
                $(this).find('.comment-section').empty()
            })

            function isEmpty(el) {
                return !$.trim(el.html())
            }

            function isValidHttpUrl(string) {
                let url;
                try {
                    url = new URL(string);
                } catch (_) {
                    return false;
                }

                return url.protocol === "http:" || url.protocol === "https:";
            }

            function updateBukti(params, _data) {
                let lihat_bukti_btn = $(params).find('#lihat_bukti')
                lihat_bukti_btn.attr("href", _data)
                if (_data == null) {
                    lihat_bukti_btn.hide()
                } else {
                    lihat_bukti_btn.show()
                }
                let bukti_btn = $(params).find('.input_bukti_trigg')
                bukti_btn.data('url', _data)
            };

            function updateComment(params, _data) {
                let lihat_comment_btn = $(params).find('#lihat_comment')
                lihat_comment_btn.attr("value", _data)
                if (_data == null) {
                    lihat_comment_btn.hide()
                } else {
                    lihat_comment_btn.show()
                }
                let comment_btn = $(params).find('.input_comment_trigg')
                comment_btn.data('value', _data)
            };

            function showSuccess(message) {
                Toast.fire({
                    icon: 'success',
                    title: message
                })
            }

            function showError(message) {
                Toast.fire({
                    icon: 'error',
                    title: message
                })
            }

            function encodeHTML(s) {
                return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
            }
    </script>
@endpush
