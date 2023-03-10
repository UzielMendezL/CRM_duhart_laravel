<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    {{-- <link rel="icon" type="image/png" href="/assets/img/favicon.png"> --}}
    <link rel="icon" type="image/png"  href="{{ asset('assets/img/logos/duhart/isotipo.jpg') }}"  />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    
    <title>DUHART</title>
    

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (config('app.is_demo'))
        <meta name="keywords"
            content="creative tim, updivision, html dashboard, laravel, argon, html css dashboard laravel, laravel argon dashboard laravel, laravel argon dashboard laravel pro, laravel argon dashboard, laravel argon dashboard pro, argon admin, laravel dashboard, laravel dashboard pro, laravel admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, argon dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, argon dashboard, argon laravel bootstrap 5 dashboard" />
        <meta name="description" content="Premium Admin Dashboard for Laravel with Ready to Use CRUDs" />
        <meta itemprop="name" content="Argon Dashboard 2 PRO Laravel by Creative Tim & UPDIVISION" />
        <meta itemprop="description" content="Premium Admin Dashboard for Laravel with Ready to Use CRUDs" />
        <meta itemprop="image"
            content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/argon-dashboard-pro-laravel.jpg" />
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="@creativetim" />
        <meta name="twitter:title" content="Argon Dashboard 2 PRO Laravel by Creative Tim & UPDIVISION" />
        <meta name="twitter:description" content="Premium Admin Dashboard for Laravel with Ready to Use CRUDs" />
        <meta name="twitter:creator" content="@creativetim" />
        <meta name="twitter:image"
            content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/argon-dashboard-pro-laravel.jpg" />
        <meta property="fb:app_id" content="655968634437471" />
        <meta property="og:title" content="Argon Dashboard 2 PRO Laravel by Creative Tim & UPDIVISION" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://www.creative-tim.com/live/argon-dashboard-pro-laravel" />
        <meta property="og:image"
            content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/argon-dashboard-pro-laravel.jpg" />
        <meta property="og:description" content="Premium Admin Dashboard for Laravel with Ready to Use CRUDs" />
    @endif
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Nucleo Icons -->
    
    {{-- <link rel="stylesheet" href="../assets/scss/argon.scss" />
    <link rel="stylesheet" href="../assetsfont-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" /> --}}
    {{-- <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/css/nucleo-icons.css') }}"  rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}"  rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    {{-- <link href="/assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/css/nucleo-svg.css') }}"  rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.11.5/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="/assets/css/argon-dashboard.css" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/css/argon-dashboard.css') }}"  rel="stylesheet" />
    {{-- <script src="{{ asset('../../../js/app.js') }}"></script> --}}
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    @stack('css')
    @yield('scriptsMaterial')

</head>

<body class="g-sidenav-show bg-gray-100 {{ $class ?? '' }}">
    {{-- {{$this->app->isProduction()}} --}}
    @guest
        @yield('content')
    @endguest

    @auth
        @if (str_contains(request()->url(), 'rtl') ||
            str_contains(request()->url(), 'pricing-page') ||
            in_array(
                request()->route()->getName(),
                ['signins', 'signups', 'resets', 'locks', 'verifications', 'errors']))
            @yield('content')
        @else
            {{-- @if (str_contains(request()->url(), 'landing')) --}}
            @if (str_contains(request()->url(), 'landing'))
                @include('components.headers.hero', ['height' => 'h-100'])
                @include('layouts.navbars.auth.sidenav', [
                    'box' => 'box-shadow-none',
                    'logo' => './assets/img/logos/duhart/isotipo.jpg',
                ])

            @elseif (str_contains(request()->url(), 'login'))   
            @elseif (!str_contains(request()->url(), 'vr'))
                @if (Route::currentRouteName() == 'profiles' || str_contains(request()->url(), 'new-product'))
                    @include('components.headers.image-hero')
                @else
                    @include('components.headers.hero')
                @endif
                
             @include('layouts.navbars.auth.sidenav', ['bg' => 'bg-white'])
            @endif

            <main class="main-content position-relative border-radius-lg">
                @yield('content')
                @include('components.fixed-plugin')
            </main>
        @endif
    @endauth

    <!--   Core JS Files   -->
    @stack('js')

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script  src="{{ asset('assets/js/argon-dashboard.js') }}"> ></script>
</body>

</html>
