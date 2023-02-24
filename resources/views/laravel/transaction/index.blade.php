@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Estado de cuenta','titleSecondary' => 'Dashboard'])
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('auth.logout')
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item position-relative pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                alt="user image">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="./assets/img/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row mt-4">
        <div class="col-lg-7 col-md-12">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Flujo de efectivo</h6>
                    <div class="d-flex align-items-center">
                        <span class="badge badge-md badge-dot me-4">
                            <i class="bg-dark"></i>
                            <span class="text-dark text-xs">Ingreso</span>
                        </span>
                        <span class="badge badge-md badge-dot me-4">
                            <i class="bg-info"></i>
                            <span class="text-dark text-xs">Egreso</span>
                        </span>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 mt-4 mt-lg-0">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Obras</h6>
                        <button type="button"
                            class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="See which websites are sending traffic to your website">
                            <i class="fas fa-info"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-5 col-12 text-center">
                            <div class="chart mt-5">
                                <canvas id="chart-doughnut" class="chart-canvas" height="200"></canvas>
                            </div>
                            <a class="btn btn-sm bg-gradient-secondary mt-4">See all referrals</a>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-xd.svg"
                                                            class="avatar avatar-sm me-2" alt="logo_xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Adobe</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 25% </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-atlassian.svg"
                                                            class="avatar avatar-sm me-2" alt="logo_atlassian">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Atlassian</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 3% </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-slack.svg"
                                                            class="avatar avatar-sm me-2" alt="logo_slack">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Slack</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 12% </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-spotify.svg"
                                                            class="avatar avatar-sm me-2" alt="logo_spotify">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Spotify</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 7% </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-jira.svg"
                                                            class="avatar avatar-sm me-2" alt="logo_jira">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Jira</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> 10% </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Custom Test --}}
    
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card shadow-lg">
                    <img src="./assets/img/shapes/pattern-left.png" alt="pattern-lines"
                        class="position-absolute overflow-hidden opacity-4 start-0 top-0 h-100 border-radius-xl">
                    <img src="./assets/img/shapes/pattern-right.png" alt="pattern-lines"
                        class="position-absolute overflow-hidden opacity-4 end-0 top-0 h-100 border-radius-xl">
                    <div class="card-body px-5 z-index-1 bg-cover">
                        <div class="row">
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-body opacity-9 text-center">Since Last Charge</h4>
                                <hr class="horizontal light mt-1 mb-3">
                                <div class="d-flex justify-content-center">
                                    <div>
                                        <h6 class="mb-0 text-body opacity-7">Distance</h6>
                                        <h3 class="text-body">145 <small class="text-sm align-top">Km</small></h3>
                                    </div>
                                    <div class="ms-lg-6 ms-4 text-center">
                                        <h6 class="mb-0 text-body opacity-7">Average Energy</h6>
                                        <h3 class="text-body">300 <small class="text-sm align-top">Kw</small></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 text-center">
                                <img class="w-75 w-lg-100 mt-n7 mt-lg-n8 d-none d-md-block" src="./assets/img/tesla.png"
                                    alt="car image">
                                <div class="d-flex align-items-center">
                                    <h4 class="text-body opacity-7 ms-0 ms-md-auto">Available Range</h4>
                                    <h2 class="text-body ms-2 me-auto">47<small class="text-sm align-top"> %</small></h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-12 my-auto">
                                <h4 class="text-body opacity-9">Nearest Charger</h4>
                                <hr class="horizontal light mt-1 mb-3">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0 text-body">Miclan, DW</h6>
                                        <h6 class="mb-0 text-body">891 Limarenda road</h6>
                                    </div>
                                    <div class="ms-lg-6 ms-4">
                                        <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 py-0">
                                            <i class="ni ni-map-big" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card bg-primary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Today's
                                        Trip</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        145 Km
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                    <i class="ni ni-money-coins text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-md-0">
                <div class="card bg-primary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Battery
                                        Health</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        99 %
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                    <i class="ni ni-controller text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
                <div class="card bg-primary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Average
                                        Speed</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        56 Km/h
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                    <i class="ni ni-delivery-fast text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 mt-lg-0">
                <div class="card bg-primary">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-white text-sm mb-0 text-uppercase font-weight-bold opacity-7">Music
                                        BBVA</p>
                                    <h5 class="text-white font-weight-bolder mb-0">
                                        $2,3000

                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-white shadow text-center rounded-circle">
                                    <i class="ni ni-note-03 text-dark text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                <div class = "d-flex justify-content-between">
                    <div class="card-header pb-0">
                        <h6>Tipo de filtro de transacción</h6>
                    </div>
                    <div class="card-header pb-0">
                        <a target="blank" href="{{ route('transaction-new') }} " type="button" class = "btn btn-primary">+ Añadir concepto</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table table-flush" id="products-list">
                                <thead >
                                    <tr>
                                        <th>Id</th>
                                        <th>Tipo Transacción</th>
                                        <th>Fecha Pagada</th>
                                        <th>Cuenta</th>
                                        <th>Estatus</th>
                                        <th>Concepto</th>
                                        <th>Factura</th>
                                        <th>Proveedor</th>
                                        <th>Monto</th>
                                        <th>Notas</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($items as $item)
                                    <tr>
                                        <td class="text-xs font-weight-bold">
                                            <div class="d-flex align-items-center">
                                                <a href="transaction/edit/{{$item->idTransaction}}" class="editMaterial btn btn-edi">  
                                                    {{$item->idTransaction}}
                                                 </a>
                                            </div>
                                        </td>
                                        <td>{{$item->conceptType}}</td>
                                        <td>{{$item->payDay}}</td>
                                        <td>{{$item->nameAccount}}</td>
                                        <td  class="text-xs font-weight-bold">
                                            
                                            <div class="d-flex align-items-center">
                                                @if ($item->status == 'Pagada')
                                                <button   class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">   
                                                  <i class="fas fa-check" aria-hidden="true"></i>
                                                </button>
                                                @elseif ($item->status == 'Autorizada')
                                                <button   class="btn btn-icon-only btn-rounded btn-outline-info mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">   
                                                  <i class="fas fa-check" aria-hidden="true"></i>
                                                </button>
                                                
                                                @elseif ($item->status == 'Pendiente')
                                                
                                                <button   class="btn btn-icon-only btn-rounded btn-outline-black mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">   
                                                    <i class="fas fa-undo" aria-hidden="true"></i>
                                                  </button>

                                                @elseif ($item->status == 'Cancelado')
                                                <button  class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                  <i class="fas fa-times" aria-hidden="true"></i>
                                                </button>

                                                @endif  
                                                
                                                {{$item->status}}       
                                           </div>
                                        </td>
                                        <td>{{$item->concept}}</td>
                                        <td>{{$item->invoice}}</td>
                                        <td>
                                            {{ $item->nameProvider }}
                                        </td>
                                        {{-- text-danger --}}
                                        <td class="text-xs">
                                            <div class="d-flex align-items-center">
                                                @if ($item->concept == 'Costo')
                                                <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-2  btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-arrow-down"  aria-hidden="true"></i>
                                                    </button>
                                                @else
                                                    <button
                                                    class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                        class="fas fa-arrow-up"  aria-hidden="true"></i>
                                                    </button>
                                                @endif
                                                {{$item->mount}}
                                            </div>
                                        </td>
                                        <td>{{$item->notes}}</td>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="../../assets/js/plugins/datatables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                perPage: 5,
                serverSide: true,
              //  deferLoading: [ 10, 100 ]
                search: {
                    search: "my_filter"
                }
            });
        };
        var ctx1 = document.getElementById("chart-line").getContext("2d");
        var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
        var jobs =  {!! json_encode($items) !!};
        console.log(jobs);

             // Line chart
             new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Agos", "Sep","Oct","Nov","Dic"],
                datasets: [{
                        label: "Ingreso",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#5e72e4",
                        borderColor: "#5e72e4",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 1200],
                        maxBarThickness: 6
                    },
                    {
                        label: "Egreso",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#3A416F",
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7'
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10
                        }
                    },
                },
            },
        });


        // Doughnut chart
        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ['Creative Tim', 'Github', 'Bootsnipp', 'Dev.to', 'Codeinwp'],
                datasets: [{
                    label: "Projects",
                    weight: 9,
                    cutout: 60,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 2,
                    backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8', '#5e72e4'],
                    data: [15, 20, 12, 60, 20],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });



    </script>



    <script src="../../assets/js/plugins/sweetalert.min.js"></script>
    {{-- @include('sweet::alert') --}}
    @include('sweetalert::alert')
@endpush
