<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aurega Admin Login</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/web/assets/img/favicon.ico') }}" type="image/x-icon">
    <!-- Template CSS -->
    <link href="{{ asset('/admin/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header class="main-header style-2 navbar">
            <div class="col-brand">
                <a href="index.html" class="brand-wrap">
                    <img src="{{ asset('/web/assets/img/aurega-logo-transparent.png') }}" class="logo" alt="Aurega Blog">
                </a>
            </div>
            <div class="col-nav">
            </div>
        </header>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Aurega CS Admin Login</h4>
                    <form method="post" action="{{ route('user.login') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" name="email" placeholder="email" value="{{ old('email') }}" type="text">
                            @error('email')
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                            @enderror
                        </div> <!-- form-group// -->
                        <div class="mb-3">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            @error('password')
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                            @enderror
                        </div> <!-- form-group// -->
                        <div class="mb-4">
                            <button type="submit" class="btn btn-submit btn-primary w-100"> Login </button>
                        </div> <!-- form-group// -->
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                    document.write(new Date().getFullYear())
                </script> ©, Aurega Accounting and Tax Services.
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="{{ asset('/admin/assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('/admin/assets/js/main.js') }}" type="text/javascript"></script>
    <script>
        $(function() {
            $('form').submit(function() {
                $(".btn-submit").attr("disabled", true);
                $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            });
        });
        setTimeout(function() {
            $(".alert").hide('slow');
        }, 5000);
    </script>
</body>

</html>