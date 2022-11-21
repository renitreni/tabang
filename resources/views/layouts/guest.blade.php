<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title><!-- Font Awesome -->
    <!-- Custom fonts for this template -->
    <link href="{{ asset('themes/sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
          type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('themes/sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
        .bg-login-image {
            background-image: url("{{ asset('images/login-image.jpg') }}");
        }
    </style>
    @livewireStyles
    @stack('styles')
</head>
<body class="main-body">
<div class="wrap">
    <div class="container">
        {{ $slot }}
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('themes/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('themes/sb-admin/js/sb-admin-2.min.js') }}js/sb-admin-2.min.js"></script>

@livewireScripts
@livewire('component.toaster-component')
@stack('scripts')
</body>
</html>
