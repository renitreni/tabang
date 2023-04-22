<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        .sidebar {
            min-height: 100% !important;
        }
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }
        .d-flex.align-items-center > span {
            white-space: nowrap;
        }
        a:hover { 
            text-decoration: none; 
        }
        .h-fit {
            height: fit-content;
        }
        .w-fit {
            width: fit-content;
        }
        .profile_image {
            width: 20rem;
            height: 20rem;
            object-fit: cover;
            border-radius: 100%;
        }
        .user_docs_img {
            height: 20rem;
            width: 100%;
            object-fit: cover;
        }
        input[type=checkbox][disabled] {
            outline: 5px solid white;
            outline-offset: -20px;
            border: 1px solid black;
        }
        .xmark_icon {
            width:16px;
            font-weight:900;
        }
        .select-form {
            display: block;
            width: 100%;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            -moz-padding-start: calc(0.75rem - 3px);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
        }
        @media only screen and (max-width: 530px) {
            .profile_image {
            width: 100%;
            /* height: auto; */
            /* height: 100%; */
            object-fit: cover;
            border-radius: 100%;
            }
        }
    </style>
    @livewireStyles
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @livewire('component.side-bar-component')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @livewire('component.top-bar-component')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid position-relative">
                {{ $slot }}
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@livewireScripts
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('themes/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('themes/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('themes/sb-admin/js/sb-admin-2.min.js') }}js/sb-admin-2.min.js"></script>
@stack('scripts')
</body>

</html>
