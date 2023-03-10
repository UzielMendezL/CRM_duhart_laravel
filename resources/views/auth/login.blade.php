@extends('layouts.app')

@section('content')
    @include('layouts.navbars.guest.topnav', [
        'classes' => 'top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4',
        'container' => 'container d-flex justify-content-end',
        // 'containerSecondary' => 'noneClass',
        'text' => 'text-white',
        'arrow' => '/assets/img/down-arrow-white.svg',
        'ulClass' => 'navbar-nav navbar-nav-hover'
    ])
    <main class="main-content  mt-0">
        {{-- <div class="page-header align-items-start min-vh-30 pt-7 pb-9 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-cover.jpg');"> --}}
            <div class="page-header align-items-start min-vh-30 pt-7 pb-9 m-3 border-radius-lg"
            style="background-position: top; background-image: url('/assets/img/wallpapers/banner2.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card mt-4">
                        <div class="card-header pb-0 text-start">
                            <h3 class="font-weight-bolder text-center y-4">Bienvenido</h3>
                            <p class="mb-2 mt-4">Ingresa tu usario y contraseña</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="{{route('login.perform') }}" class="text-start">
                                @csrf
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" value="{{ old('email') ?? 'admin@argon.com' }}" class="form-control" placeholder="Email" aria-label="Email">
                                    @error('email') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <label>Contraseña</label>
                                <div class="mb-3">
                                    <input type="password" name="password" value="secret" class="form-control" placeholder="Password" aria-label="Password">
                                    @error('password') <p class='text-danger text-xs pt-1'> {{ $message }} </p> @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                    <label class="form-check-label" for="rememberMe">Recordarme</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Iniciar sesión</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-1 text-sm mx-auto">
                                Olvidaste contraseña , podemos reestablecerla
                                <a href="{{ route('reset-password') }}" class="text-primary text-gradient font-weight-bold">Aquí</a>
                            </p>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-4 text-sm mx-auto">
                                No tengo cuenta
                                <a href="{{ route('register') }}" class="text-primary font-weight-bold">Registrate</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
