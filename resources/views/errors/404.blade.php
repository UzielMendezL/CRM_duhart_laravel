@extends('layouts.app', ['class' => 'error-page'])

@section('content')
    <main class="main-content  mt-0">
        <div style = "background: wheat;" class="page-header min-vh-100" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7 mx-auto text-center">
                        <h1 class="display-1 text-bolder text-white">Error 404</h1>
                        <h2>Página no encontrada...</h2>
                        {{-- <p class="lead">We suggest you to go to the homepage while we solve this issue.</p> --}}
                        <a href="/default" class="btn bg-gradient-dark mt-4">Ir a inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
