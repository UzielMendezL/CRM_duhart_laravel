<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    {{-- <link rel="icon" type="image/png" href="/assets/img/favicon.png"> --}}
    <link rel="icon" type="image/png"  href="{{ asset('assets/img/logos/duhart/isotipo.jpg') }}"  />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" /> --}}
    
    <title>DUHART-Reportes</title>

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.11.5/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/argon-dashboard.css') }}"  rel="stylesheet" />
    {{-- <script src="{{ asset('../../../js/app.js') }}"></script> --}}
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    @stack('css')
    @yield('scriptsMaterial')

</head>

<body class="g-sidenav-show ">
    {{-- {{$this->app->isProduction()}} --}}
    
        @yield('content-report')
    

    <!--   Core JS Files   -->
    @stack('js-report')

    
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script  src="{{ asset('assets/js/argon-dashboard.js') }}"> ></script>
</body>

</html>
