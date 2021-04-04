<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('pages/assets/images/favicon.png') }}">
        <title>Aiki Services @yield('title')</title>
        <link href="{{ asset('pages/dist/css/style.css') }}" rel="stylesheet">
        <!-- This page CSS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="main-wrapper" id="main-wrapper">
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.preloader')
            @include('layouts.dashboard.includes.topbar')

            @include('layouts.dashboard.includes.left-sidebar')
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Title and breadcrumb -->
                <!-- ============================================================== -->
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h5 class="font-medium m-b-0">Contact Detail</h5>
                        <div class="ml-auto custom-breadcrumb">
                            <a href="#!" class="breadcrumb">Home</a>
                            <a href="#!" class="breadcrumb">Contact Detail</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                @include('layouts.dashboard.includes.footer')
            </div>
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.right-sidebar')
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('pages/dist/js/materialize.min.js') }}"></script>
        <script src="{{ asset('pages/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Apps -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/app.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app.init.horizontal.js') }}"></script>
        <script src="{{ asset('pages/dist/js/app-style-switcher.horizontal.js') }}"></script>
        <!-- ============================================================== -->
        <!-- Custom js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/dist/js/custom.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
    </body>

</html>
