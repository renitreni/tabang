<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('themes/sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
          type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('themes/sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .bg-login-image {
          background-image: url("{{ asset('images/login-image.jpg') }}");
        }
    </style>
    <style>
        .alert-btn {
            min-width: 60px;
            min-height: 60px;
            font-family: 'Nunito', sans-serif;
            font-size: 22px;
            text-transform: uppercase;
            letter-spacing: 1.3px;
            font-weight: 700;
            color: #313133;
            background: #ea3718;
            background: linear-gradient(90deg, rgb(246, 201, 54) 0%, rgb(209, 183, 79) 100%);
            border: none;
            border-radius: 1000px;
            box-shadow: 12px 12px 24px rgba(3, 9, 8, 0.64);
            transition: all 0.3s ease-in-out 0s;
            cursor: pointer;
            outline: none;
            position: relative;
            padding: 10px;
            z-index: 2;
        }

        .alert-btn::before {
            content: '';
            border-radius: 100%;
            min-width: calc(60px + 100px);
            min-height: calc(60px + 100px);
            border: 6px solid rgba(239, 7, 7, 0.78);
            box-shadow: 0 0 60px rgba(255, 0, 0, 0.58);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: all .3s ease-in-out 0s;
        }

        .button:hover, .button:focus {
            color: #313133;
            transform: translateY(-6px);
        }

        .alert-btn:hover::before, .alert-btn:focus::before {
            opacity: 1;
        }

        .alert-btn::after {
            content: '';
            width: 30px;
            height: 30px;
            border-radius: 100%;
            border: 6px solid #e30b13;
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: ring 1.5s infinite;
        }

        .alert-btn:hover::after, .alert-btn:focus::after {
            animation: none;
            display: none;
        }

        @keyframes ring {
            0% {
                width: 30px;
                height: 30px;
                opacity: 1;
                z-index: 0;
            }
            100% {
                width: 300px;
                height: 300px;
                opacity: 0;
                z-index: 0;
            }
        }
    </style>
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5" style="background-color: #fff6;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <a href="{{ route('complaint') }}">
                                        <button class="button alert-btn mb-5">
                                            <img src="{{ asset('images/alert.png') }}" width="150px" height="150px">
                                        </button>
                                    </a>
                                    <img src="{{ asset('images/sponsors.png') }}" class="img-fluid">
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="user mt-3">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Type In E-mail"
                                               class="form-control form-control-user @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required autocomplete="email"
                                               autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" placeholder="Type In Password"
                                               class="form-control form-control-user @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    <div class="w-100 d-flex justify-content-center">
                                        <a class="btn btn-link" href="{{ route('register-livewire') }}">
                                            {{ __('Create Account?') }}
                                        </a>
                                    </div>
                                </form>
                                <hr>
                                <div class="text-center d-flex flex-column">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('themes/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('themes/sb-admin/js/sb-admin-2.min.js') }}js/sb-admin-2.min.js"></script>

</body>

</html>
