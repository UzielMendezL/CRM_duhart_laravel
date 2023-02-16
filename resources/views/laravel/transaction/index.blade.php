@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Transacciones'])
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
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Sales</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $230,220
                                </h5>
                                <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+55% <span
                                        class="font-weight-normal text-secondary">since last month</span></span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Customers</p>
                                <h5 class="font-weight-bolder mb-0">
                                    3.200
                                </h5>
                                <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+12% <span
                                        class="font-weight-normal text-secondary">since last month</span></span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers2">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-body p-3 position-relative">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="text-sm mb-1 text-uppercase font-weight-bold">Avg. Revenue</p>
                                <h5 class="font-weight-bolder mb-0">
                                    $1.200
                                </h5>
                                <span class="font-weight-normal text-secondary text-sm"><span
                                        class="font-weight-bolder">+$213</span> since last month</span>
                            </div>
                            <div class="col-5">
                                <div class="dropdown text-end">
                                    <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="text-xs text-secondary">6 May - 7 May</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers3">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <div class="row mt-4">
            <div class="col-lg-4 col-sm-6">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Channels</h6>
                            <button type="button"
                                class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                data-bs-original-title="See traffic channels">
                                <i class="fas fa-info" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pb-0 p-3 mt-4">
                        <div class="row">
                            <div class="col-7 text-start">
                                <div class="chart">
                                    <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                                </div>
                            </div>
                            <div class="col-5 my-auto">
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                    <i class="bg-info"></i>
                                    <span class="text-dark text-xs">Facebook</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                    <i class="bg-primary"></i>
                                    <span class="text-dark text-xs">Direct</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                    <i class="bg-dark"></i>
                                    <span class="text-dark text-xs">Organic</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4 d-block text-start">
                                    <i class="bg-secondary"></i>
                                    <span class="text-dark text-xs">Referral</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                        <div class="w-60">
                            <p class="text-sm">
                                More than <b>1,200,000</b> sales are made using referral marketing, and <b>700,000</b> are
                                from social media.
                            </p>
                        </div>
                        <div class="w-40 text-end">
                            <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Revenue</h6>
                            <button type="button"
                                class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                data-bs-original-title="See which ads perform better">
                                <i class="fas fa-info" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-success"></i>
                                <span class="text-dark text-xs">Facebook Ads</span>
                            </span>
                            <span class="badge badge-md badge-dot me-4">
                                <i class="bg-dark"></i>
                                <span class="text-dark text-xs">Google Ads</span>
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
        </div> --}}
        {{-- <div class="row mt-4">
            <div class="col-lg-8">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Sales by Age</h6>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-bar" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">Sales by Country</h6>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0 border-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Country flag -->
                                        <img src="../assets/img/icons/flags/US.png" alt="Country flag">
                                    </div>
                                    <div class="col">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">United States</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">2500</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                        <h6 class="text-sm mb-0">29.9%</h6>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-3 mb-1">
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Country flag -->
                                        <img src="../assets/img/icons/flags/DE.png" alt="Country flag">
                                    </div>
                                    <div class="col">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Germany</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">3.900</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                        <h6 class="text-sm mb-0">40.22%</h6>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-3 mb-1">
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Country flag -->
                                        <img src="../assets/img/icons/flags/GB.png" alt="Country flag">
                                    </div>
                                    <div class="col">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Great Britain</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">1.400</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                        <h6 class="text-sm mb-0">23.44%</h6>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-3 mb-1">
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Country flag -->
                                        <img src="../assets/img/icons/flags/BR.png" alt="Country flag">
                                    </div>
                                    <div class="col">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Brasil</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">562</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                        <h6 class="text-sm mb-0">32.14%</h6>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-3 mb-1">
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Country flag -->
                                        <img src="../assets/img/icons/flags/AU.png" alt="Country flag">
                                    </div>
                                    <div class="col">
                                        <p class="text-xs font-weight-bold mb-0">Country:</p>
                                        <h6 class="text-sm mb-0">Australia</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                        <h6 class="text-sm mb-0">400</h6>
                                    </div>
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                        <h6 class="text-sm mb-0">56.83%</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
         {{-- <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Top Selling Products</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Product</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Value</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ads Spent</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Refunds</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg"
                                                        class="avatar me-3" alt="image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Nike v22 Running</h6>
                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                            class="text-success">8.232</span> orders</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$130.992</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">$9.500</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <p class="text-sm font-weight-bold mb-0">13</p>
                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                                <button type="button"
                                                    class="btn btn-sm btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Refund rate is lower with 97% than other products">
                                                    <i class="fas fa-info" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-mug.jpg"
                                                        class="avatar me-3" alt="image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Business Kit (Mug + Notebook)</h6>
                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                            class="text-success">12.821</span> orders</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$80.250</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">$4.200</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <p class="text-sm font-weight-bold mb-0">40</p>
                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg"
                                                        class="avatar me-3" alt="image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Black Chair</h6>
                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                            class="text-success">2.421</span> orders</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$40.600</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">$9.430</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <p class="text-sm font-weight-bold mb-0">54</p>
                                                <i class="ni ni-bold-up text-sm ms-1 mt-1 text-danger"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/bang-sound.jpg"
                                                        class="avatar me-3" alt="image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Wireless Charger</h6>
                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                            class="text-success">5.921</span> orders</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$91.300</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">$7.364</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <p class="text-sm font-weight-bold mb-0">5</p>
                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <div>
                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/photo-tools.jpg"
                                                        class="avatar me-3" alt="image">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Mountain Trip Kit (Camera + Backpack)</h6>
                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span
                                                            class="text-success">921</span> orders</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0">$140.925</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">$20.531</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <p class="text-sm font-weight-bold mb-0">121</p>
                                                <i class="ni ni-bold-up text-sm ms-1 mt-1 text-danger"></i>
                                                <button type="button"
                                                    class="btn btn-sm btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-3"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Refund rate is higher with 70% than other products">
                                                    <i class="fas fa-info" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}


<div class="container-fluid py-4">
    <div class="d-sm-flex justify-content-between">
        <div>
            <a href="javascript:;" class="btn btn-icon btn-outline-white">
                Nueva transacción
            </a>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline">
                <a href="javascript:;" class="btn btn-outline-white dropdown-toggle " data-bs-toggle="dropdown"
                    id="navbarDropdownMenuLink2">
                    Filtros
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3" aria-labelledby="navbarDropdownMenuLink2"
                    data-popper-placement="left-start">
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Pagada</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Pendiente</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Rechazada</a></li>
                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Cancelada</a></li>
                    <li>
                        <hr class="horizontal dark my-2">
                    </li>
                    <li>
                        <a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remover
                            Filtro
                        </a>
                    </li>
                </ul>
            </div>
            <button class="btn btn-icon btn-outline-white ms-2 export" data-type="csv" type="button">
                <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
                <span class="btn-inner--text">Exportar CSV</span>
            </button>
        </div>
    </div>
</div>
<div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tipo de filtro de transacción</h6>
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
                                                
                                                @elseif ($item->status == 'Pendiente')
                                                
                                                <button
                                                  class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-2 btn-sm d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-undo" aria-hidden="true"></i>
                                                <button>

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
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    
    <script>
        // var ctx1 = document.getElementById("chart-line").getContext("2d");
        // var ctx2 = document.getElementById("chart-pie").getContext("2d");
        // var ctx3 = document.getElementById("chart-bar").getContext("2d");

        // var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        // gradientStroke1.addColorStop(1, 'rgba(94, 114, 228,0.2)');
        // gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228,0.0)');
        // gradientStroke1.addColorStop(0, 'rgba(94, 114, 228,0)'); //purple colors

        // var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

        // gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        // gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        // gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
        

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
        }

        // Line chart
        // new Chart(ctx1, {
        //     type: "line",
        //     data: {
        //         labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        //         datasets: [{
        //                 label: "Facebook Ads",
        //                 tension: 0.4,
        //                 borderWidth: 0,
        //                 pointRadius: 2,
        //                 pointBackgroundColor: "#5e72e4",
        //                 borderColor: "#5e72e4",
        //                 borderWidth: 3,
        //                 backgroundColor: gradientStroke1,
        //                 fill: true,
        //                 data: [50, 100, 200, 190, 400, 350, 500, 450, 700],
        //                 maxBarThickness: 6
        //             },
        //             {
        //                 label: "Google Ads",
        //                 tension: 0.4,
        //                 borderWidth: 0,
        //                 pointRadius: 2,
        //                 pointBackgroundColor: "#3A416F",
        //                 borderColor: "#3A416F",
        //                 borderWidth: 3,
        //                 backgroundColor: gradientStroke2,
        //                 fill: true,
        //                 data: [10, 30, 40, 120, 150, 220, 280, 250, 280],
        //                 maxBarThickness: 6
        //             }
        //         ],
        //     },
        //     options: {
        //         responsive: true,
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //             }
        //         },
        //         interaction: {
        //             intersect: false,
        //             mode: 'index',
        //         },
        //         scales: {
        //             y: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: true,
        //                     drawOnChartArea: true,
        //                     drawTicks: false,
        //                     borderDash: [5, 5]
        //                 },
        //                 ticks: {
        //                     display: true,
        //                     padding: 10,
        //                     color: '#9ca2b7'
        //                 }
        //             },
        //             x: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: true,
        //                     drawOnChartArea: true,
        //                     drawTicks: true,
        //                     borderDash: [5, 5]
        //                 },
        //                 ticks: {
        //                     display: true,
        //                     color: '#9ca2b7',
        //                     padding: 10
        //                 }
        //             },
        //         },
        //     },
        // });


        // // Pie chart
        // new Chart(ctx2, {
        //     type: "pie",
        //     data: {
        //         labels: ['Facebook', 'Direct', 'Organic', 'Referral'],
        //         datasets: [{
        //             label: "Projects",
        //             weight: 9,
        //             cutout: 0,
        //             tension: 0.9,
        //             pointRadius: 2,
        //             borderWidth: 2,
        //             backgroundColor: ['#17c1e8', '#5e72e4', '#3A416F', '#a8b8d8'],
        //             data: [15, 20, 12, 60],
        //             fill: false
        //         }],
        //     },
        //     options: {
        //         responsive: true,
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //             }
        //         },
        //         interaction: {
        //             intersect: false,
        //             mode: 'index',
        //         },
        //         scales: {
        //             y: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: false,
        //                     drawOnChartArea: false,
        //                     drawTicks: false,
        //                 },
        //                 ticks: {
        //                     display: false
        //                 }
        //             },
        //             x: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: false,
        //                     drawOnChartArea: false,
        //                     drawTicks: false,
        //                 },
        //                 ticks: {
        //                     display: false,
        //                 }
        //             },
        //         },
        //     },
        // });

        // // Bar chart
        // new Chart(ctx3, {
        //     type: "bar",
        //     data: {
        //         labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
        //         datasets: [{
        //             label: "Sales by age",
        //             weight: 5,
        //             borderWidth: 0,
        //             borderRadius: 4,
        //             backgroundColor: '#3A416F',
        //             data: [15, 20, 12, 60, 20, 15],
        //             fill: false
        //         }],
        //     },
        //     options: {
        //         indexAxis: 'y',
        //         responsive: true,
        //         maintainAspectRatio: false,
        //         plugins: {
        //             legend: {
        //                 display: false,
        //             }
        //         },
        //         scales: {
        //             y: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: true,
        //                     drawOnChartArea: true,
        //                     drawTicks: false,
        //                     borderDash: [5, 5]
        //                 },
        //                 ticks: {
        //                     display: true,
        //                     padding: 10,
        //                     color: '#9ca2b7'
        //                 }
        //             },
        //             x: {
        //                 grid: {
        //                     drawBorder: false,
        //                     display: false,
        //                     drawOnChartArea: true,
        //                     drawTicks: true,
        //                 },
        //                 ticks: {
        //                     display: true,
        //                     color: '#9ca2b7',
        //                     padding: 10
        //                 }
        //             },
        //         },
        //     },
        // });
    </script>
@endpush
