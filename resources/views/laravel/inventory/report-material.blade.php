@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl  position-sticky top-1 z-index-sticky"
        id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav-with-domain', ['domain' => 'Account', 'title' => 'Inventarios','second-Title' => 'Reporte'])
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none me-auto">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                <ul class="navbar-nav justify-content-end ms-auto">
                    <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid my-5 py-2">
        <div class="row">
            <div class="col-md-9 col-sm-10 mx-auto">
                <form class="" action="index.html" method="post">
                    <div class="card my-sm-5 my-lg-0">
                        <div class="card-header text-center">
                            <div class="row justify-content-between">
                                <div class="col-md-6 text-start d-flex justify-content-center flex-md-column">
                                    <h3>Lista de Stock Real</h3>
                                    <h6>
                                        MUFICA SA de CV
                                    </h6>
                                    <p class="d-block text-secondary">{{ Carbon\Carbon::today()->toDateString()}}</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <img class="w-50 p-4" src="../assets/img/logos/duhart/isotipo.jpg" alt="Logo">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center col-12 text-md-end mt-md-0 mt-0">
                               <div class="w-50 d-flex justify-content-lg-around">
                                <a href="#" class="btn btn-primary mb-0" onclick="return goToDownloadReport(this,'preview');" type="button"
                                    name="button">Visualizar reporte
                                </a>
                                <a href="#" class="btn btn-secondary mb-0" onclick="return goToDownloadReport(this,'print');" type="button"
                                    name="button">Imprimir reporte
                                </a>
                               </div>
                            </div>
                            <br>
                            <hr />
                            {{-- <div class="row justify-content-md-between">
                                <div class="col-md-4 mt-auto">
                                    <h6 class="mb-0 text-start text-secondary">
                                        Invoice no
                                    </h6>
                                    <h5 class="text-start mb-0">
                                        #0453119
                                    </h5>
                                </div>
                                <div class="col-lg-5 col-md-7 mt-auto">
                                    <div class="row mt-md-5 mt-4 text-md-end text-start">
                                        <div class="col-md-6">
                                            <h6 class="text-secondary mb-0">Invoice date:</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="text-dark mb-0">06/03/2019</h6>
                                        </div>
                                    </div>
                                    <div class="row text-md-end text-start">
                                        <div class="col-md-6">
                                            <h6 class="text-secondary mb-0">Due date:</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="text-dark mb-0">11/03/2019</h6>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive border-radius-lg">
                                        <table class="table text-right">
                                            <thead class="bg-default">
                                                <tr>
                                                    <th scope="col" class="pe-2 text-white text-start">Nombre</th>
                                                    <th scope="col" class="pe-2 text-white text-start" colspan="2">Unidad</th>
                                                    <th scope="col" class="pe-2 text-white text-start">P.U</th>
                                                    <th scope="col" class="pe-2 text-white text-start">Stock</th>
                                                    <th scope="col" class="pe-2 text-white text-start">Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sumAllProductsStock = 0;
                                                @endphp
                                                @foreach($items as $item)
                                                @php
                                                    $sumAllProductsStock += $item->unitaryPrice * $item->stock
                                                @endphp
                                                    <tr>
                                                        <td class="text-start">{{$item->nameMaterial}}</td>
                                                        <td class="ps-4">{{$item->unity}}</td>
                                                        <td class="ps-4" colspan="2">{{$item->unitaryPrice}}</td>
                                                        <td class="ps-4">{{$item->stock}}</td>
                                                        <td class="ps-4">{{$item->unitaryPrice * $item->stock }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="h5 ps-4" >Total</th>
                                                    <th colspan="1" class="text-right h5 ps-4">$ {{$sumAllProductsStock}}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class=" mt-4 d-flex justify-content-center container-pagination text-center">
                                            {{-- No se pierda el filtro correspondiente por el empaginado --}}
                                            {{$items->appends(['makeFilter' => $makeFilter])->links('pagination::bootstrap-4')}}
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        {{-- ImgFooter --}}
                        <div class="card-footer">
                            <div class="row justify-content-lg-between">
                                <div class="col-lg-4 text-left">
                                    <h5>Lista de materiales</h5>
                                    <p class="text-secondary text-sm">{{ Carbon\Carbon::today()->toDateString()}}</p>
                                    {{-- <h6 class="text-secondary mb-0">
                                        email:
                                        <span class="text-dark">support@creative-tim.com</span>
                                    </h6> --}}
                                </div>
                                <div class="col-lg-4 text-right">
                                    <h5>Total de materiales</h5>
                                    <p class="text-secondary text-sm">{{count($items)}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="w-15 " src="../assets/img/logos/duhart/duhart-logo.jpg" alt="logo-footer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
<script src="{{ asset('../../assets/js/components/Materials/modalCreateMaterial.js') }}" ></script> 
@endpush
