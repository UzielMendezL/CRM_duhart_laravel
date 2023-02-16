@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Editar transacción'])
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
                                            <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
            <div class="col-lg-6">
                <h4 class="text-white">Transacción #{{$item->idTransaction}}</h4>
            </div>
            <div class="col-lg-6 text-right d-flex flex-column justify-content-center">
                {{-- <button type="button"
                    class="btn btn-outline-white mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">Editar transacción</button> --}}
                <a href="#" class="btn btn-outline-white mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">  
                    Editar transacción
                </a>
            </div>
        </div>
        <div class="row mt-4">
            {{-- <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Product Image</h5>
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100 border-radius-lg shadow-lg mt-3"
                                    src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/product-page.jpg"
                                    alt="product_image">
                            </div>
                            <span class= "mt-4">Imagen del material</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-12 mt-lg-0 mt-4">
                <form method="POST" action="{{ route('transaction-edit.update',$item->idTransaction) }}">
                  @method('PUT')
                  @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Información de la transacción</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Tipo de concepto</label>
                                <input name = "conceptType" class="form-control" type="text" value="{{$item->conceptType}}" />
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Fecha elaborada</label>
                                <input name = "elaboratedDate" class="form-control" type="date" value= "{{$item->elaboratedDate}}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label class="mt-4">Concepto</label>
                                <select value = "{{$item->concept}}" class="form-control" name="concept" id="concept">
                                    <option  value="Ingreso">Ingreso</option>
                                    <option  value="Costo">Costo</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Cuenta</label>
                                <select name="idAccount" class="form-control" id="idAccount">
                                    <option selected value="{{$item->idAccount}}">{{$item->nameAccount}}</option>
                                    @foreach ($accountActives as $itemA)
                                        <option value="{{$itemA->idAccount}}">{{$itemA->nameAccount}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Proveedor</label>
                                <select name="idProvider" class="form-control" name="idProvider" id="idProvider">
                                    <option selected value="{{$item->idProvider}}">{{$item->nameProvider}}</option>
                                    @foreach ($providersActive as $itemP)
                                    <option value="{{$itemP->idProvider}}">{{$itemP->nameProvider}}</option>
                                @endforeach
                                </select>
                                <input id="nameProvider" type="hidden" name = "nameProvider" class="form-control" />
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Tipo proveedor</label>
                                <input name="providerType" class="form-control" type="text" value="{{$item->providerType}}" />
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-sm-6">
                                <label class="mt-4">Notas</label>
                                <p class="form-text text-muted text-xs ms-1 d-inline">
                                    (opcional)
                                </p>
                                {{-- <div id="edit-deschiption-edit" class="h-50"> 
                                </div> --}}
                                <textarea  class = "form-control" name="notes">
                                    {{$item->notes}}
                                </textarea>   
                                
                                
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Monto</label>
                                <input name = "mount" class="form-control {{$item->concept == 'Costo : text-danger ? text-success'}}" type="number" value="{{$item->mount}}" />
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Estatus</label>
                                <select class="form-control" name="" id="" value="{{$item->status}}">
                                    <option value="Pagado">Pagado</option>
                                    <option value="Cancelado">Cancelado</option>
                                    <option value="Rechazado">Rechazado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-12">
                        <div class ="d-flex justify-content-center align-items-center">
                            <button type = "submit" class = "mt-4 btn btn-primary">
                                Editar Transacción
                            </button>
                        </div>
                    </div> 
                </div>
                </form>
            </div>
        </div>  
        {{-- Transaction Detail --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Transacción detallada</h6>
                    </div>
                    <div class="col-sm-12">
                        <div class ="d-flex justify-content-center align-items-center">
                            <button type = "button" class = "btn btn-secondary">
                                Agregar Material
                            </button>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class="table table-flush" id="products-list">
                                    <thead >
                                        <tr>
                                            <th>ID</th>
                                            <th>Presupuesto</th>
                                            <th>Concepto</th>
                                            <th>Inventario</th>
                                            <th>Precio Unitario</th>
                                            <th>Cantidad</th>
                                            <th>Unidad</th>
                                            <th>Monto</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                        @foreach ($itemsTDetails as $item)
                                        <tr>
                                            <td>{{$item->idTransactionDetail}}</td>
                                            <td>{{$item->nameEstimation}}</td>
                                            <td>{{$item->nameConcept}}</td>
                                            <td>{{$item->nameInventory}}</td>
                                            <td>{{$item->unitaryPrice}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->unity}}</td>
                                            <td>{{$item->mount}}</td>
                                            <td>

                                            {{-- <button     onclick="argon.showSwal('warning-message-and-confirmation')"  type="button" class="editMaterial btn btn-edi">
                                                <i class="fas fa-trash text-secondary"></i>
                                            </button> --}}
                                            <button  type="button" class="editMaterial btn btn-edi" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal-{{ $item->idTransactionDetail }}">
                                                <i class="fas fa-trash text-secondary"></i>
                                            </button>
                                            {{-- Modal delete --}}

                                            <div class="modal fade" id="deleteModal-{{ $item->idTransactionDetail }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar material</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <form action="{{route('material.destroy', ['id' => $item->idTransactionDetail | 0  ]) }}" method="post">
                                                    {{csrf_field()}}
                                                    @method('delete')
                                                    <div class="modal-body">
                                                        <span>¿Deseas remover este material?</span>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Eliminar Material</button>
                                                    </div>  
                                                    </form> 
                                                </div>
                                                </div>
                                            </div>

                                            </td>
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
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>
    <script src="../../assets/js/plugins/datatables.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script src="../../assets/js/plugins/quill.min.js"></script>
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
        }

        if (document.getElementById('edit-deschiption-edit')) {
            var quill = new Quill('#edit-deschiption-edit', {
                theme: 'snow' // Specify theme in configuration
            });
        };

        if (document.getElementById('choices-category-edit')) {
            var element = document.getElementById('choices-category-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-color-edit')) {
            var element = document.getElementById('choices-color-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency-edit')) {
            var element = document.getElementById('choices-currency-edit');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-tags-edit')) {
            var tags = document.getElementById('choices-tags-edit');
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
     @include('sweetalert::alert')
@endpush
