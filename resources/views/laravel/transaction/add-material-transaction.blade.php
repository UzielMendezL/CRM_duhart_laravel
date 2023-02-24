@extends('layouts.app')

@section('content')
    <div class="max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
            <div class="container-fluid py-1">
                @include('layouts.navbars.auth.topnav', ['title' => 'Nuevo Material','secondTitle' => 'Transacciones'])
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            @include('auth.logout')
                        </li>
                        <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
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
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
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
                                                <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark me-3" alt="logo spotify">
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
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Rounded-Icons"
                                                            transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
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
         <div style = "margin-top:18rem;" class="card shadow-sm mx-2 card-profile-bottom">
           {{-- <div class = "d-flex flex-column justify-content-center">
            <button class = "btn btn-primary">sldkfjsdf</button>
           </div> --}}
           {{-- <div class="card-body p-3">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../../assets/img/team-1.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Sayo Kravits
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Public Relations
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                        data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                        <i class="ni ni-app"></i>
                                        <span class="ms-2">App</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                        data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                        <i class="ni ni-email-83"></i>
                                        <span class="ms-2">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                        data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span class="ms-2">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </div> 
        <div class="mt-0 container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="multisteps-form">
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="Product Info">
                                        <span>1. Info</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Media">
                                        <span>2. Material</span>
                                </div>
                            </div>
                        </div>
                        <!--form panels-->
                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto">
                                <form method="POST" action="{{route('transaction-detail-new.store',$transId) }}" class="multisteps-form__form mb-8 needs-validation"  novalidate>
                                    @csrf
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">Agregar información para transacción detalles</h5>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label>Obra</label>
                                                    <select onchange="getEstimationDepartureGlobal(this.value,'idEstimation','estimation');" class = "form-control" name="idWorksite" id="workSite">
                                                        <option value="0">Escoge una opción</option>
                                                        @foreach ($workItems as $item)
                                                        <option value="{{$item->idWorkSite}}">{{$item->nameWorkSite}}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label>Presupuesto</label>
                                                    <select required class = "form-control" id  ="idEstimation" name="idEstimation" >
                                                        <option value="0">Escoge una opción</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                    title="Next">Siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder">Añade el material</h5>
                                        <div class="col-12 col-sm-12">
                                            <input onkeyup ="return searchMaterialTransaction();" id = "search-entry-material" class="form-control" type="search" placeholder="Busca el material a desear"/>
                                        </div>
                                        <div class = "col-12 col-sm-12" style =  "min-height:50px;" id = "list-materials-transaction">
                                            {{-- List material  --}}
                                            {{-- <div style = "position:relative;justify-content:center;align-items:center; display:flex; flex-direction:column;"  class="text-center ">
                                                <div id='loader-transaction-material' style = "position:absolute;" class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                {{-- <table id  = "trMaterialTransaction" class="table table-hover">
                                                    <thead class="thead-dark">
                                                      <tr>
                                                        <th scope="col">Material</th>
                                                        <th scope="col">Stock</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody id = "tr-search-trans-material">
                                                    </tbody>
                                                </table> 
                                                <div id = "trMaterialTransaction">

                                                </div>
                                            </div>  --}}
                                            <div id = "trMaterialTransaction">

                                            </div>
                                        </div>
                                        <div id  = "card-material-options" class="row">
                                            <div class="col-md-12">
                                                <label for="nameConcept">Material Seleccionado</label>
                                              <input required name="nameConcept" readonly id = "idSMST" type="text" class="form-control" placeholder="Material">
                                            </div>
                                            <input type="hidden" name="idConcept" readonly id = "idConcept" class="form-control">
                                            <div class="col">
                                                <label for="unity">Unidad</label>
                                                <input required readonly name = "unity" id = "unity" type="text" class="form-control" >
                                             </div>
                                             <div class="col">
                                                <label for="idInventory">Inventario</label>
                                                <input required readonly id = "nameInventory" name = "nameInventory" type="text" class="form-control" >
                                             </div>
                                             <input  id = "idInventory" name = "idInventory" type="hidden" class="form-control" >
                                            <div class="col">
                                                <label for="unitaryPrice">Precio Unitario</label>
                                                <input onkeyup="return getTotalItemTransaction(this.value);" required name="unitaryPrice" id = "unitaryPrice" type="text" class="form-control" >
                                             </div>
                                            <div class="col">
                                                <label for="">Cantidad </label>
                                              <input min ="0" onkeyup="return removeAtrr(this.value);" required id = "quantity" name = "quantity" type="number" class="form-control" placeholder="ej. 10">
                                            </div>
                                              <div class="col">
                                                <label for="mount">Total</label>
                                                <input required name="mount" readonly id = "mount" type="text" class="form-control" >
                                             </div>
                                        </div>
                                        {{-- idTransaction --}}
                                        <input type="hidden" value="{{$transId}}" name="idTrans" id="">

                                        <div class="multisteps-form__content">
                                          
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                                    title="Prev">Anterior</button>
                                                    <button id = "btn-submit-transaction-material" class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                    title="Send">Agregar material</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.footers.auth.footer')
        </div>
    </div>
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('../../assets/js/components/GlobalFunctions/helpers.js') }}" ></script>   
    <script src="{{ asset('../../assets/js/components/Transactions/TransactionsGeneral.js') }}" ></script>   
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script src="../../assets/js/plugins/dropzone.min.js"></script>
    <script src="../../assets/js/plugins/quill.min.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script>
        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        };

        if (document.getElementById('choices-category')) {
            var element = document.getElementById('choices-category');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-sizes')) {
            var element = document.getElementById('choices-sizes');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency')) {
            var element = document.getElementById('choices-currency');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-tags')) {
            var tags = document.getElementById('choices-tags');
            const examples = new Choices(tags, {
                removeItemButton: true
            });

            examples.setChoices(
                [{
                        value: 'One',
                        label: 'Expired',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Out of Stock',
                        selected: true
                    }
                ],
                'value',
                'label',
                false,
            );
        }
    </script>
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>
    @include('sweetalert::alert')
@endpush
