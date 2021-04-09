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
        <link href="{{ asset('pages/dist/css/dashboard/authentication.css') }}" rel="stylesheet">
        <!-- This page CSS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        @stack('css')
    </head>

    <body>
        <div class="main-wrapper">
            <!-- ============================================================== -->
            @include('layouts.dashboard.includes.preloader')
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scaffolding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset('pages/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('pages/dist/js/materialize.min.js') }}"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script type="text/javascript">
            $(function () {
                $(".preloader").fadeOut();
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('select').formSelect();
            });

        </script>
        @stack('js')
    </body>

</html>
