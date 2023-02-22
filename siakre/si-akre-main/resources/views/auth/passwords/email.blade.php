<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SI - Akre | Login</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('template') }}/css/styles.css" rel="stylesheet" />

    <link href="{{ asset('css') }}/login.css" rel="stylesheet" />

</head>

<body class="bg-login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div id="layoutAuthentication">
                    <div id="layoutAuthentication_content">
                        <main>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header login-header">
                                                <h3 class="text-center font-weight-light">
                                                    <img src="{{ asset('img') }}/logo.png" width="130" height="130">
                                                </h3>

                                                <h4 class="text-center">Lupa Password</h4>

                                            </div>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf

                                                    <div class="form-group row justify-content-between">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label text-md-left">Alamat
                                                            e-mail</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-6">
                                                            <button type="submit" class="btn btn-primary">
                                                                Kirim link reset password
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div id="layoutAuthentication_footer">
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid">
                                <div
                                    class="
                        d-flex
                        align-items-center
                        justify-content-between
                        small
                      ">
                                    <div class="text-muted">
                                        Copyright &copy; SI - Akre 2022
                                    </div>
                                    <div>
                                        <a href="#">Privacy Policy</a>
                                        &middot;
                                        <a href="#">Terms &amp; Conditions</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/all.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        var Toast = Swal.mixin({
            icon: 'info',
            confirmButtonText: 'OK'
        });
        
        @if (session('status'))
            Toast.fire({
                title: "{{ session('status') }}"
            })
        @endif
    </script>
</body>

</html>
