@extends('layouts.app')
@section('scriptsMaterial')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="{{ asset('./assets/js/components/Materials/modalCreateMaterial.js') }}" ></script> 
 <script src="{{ asset('./assets/js/components/Materials/modalCreateFormOptions.js') }}" ></script> 
  {{-- <script src="{{ asset('js/prueba.js') }}" defer ></script>  --}}
  {{-- @include('popper::assets') --}}
@endsection
@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Inventarios','secondTitle' => 'Materiales Faltantes'])
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
                        <input type="text" class="form-control" placeholder="Escribe aquí...">
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
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Revisión material</h5>
                                <p class="text-sm mb-0">
                                   List de materiales con stock mínimos
                                </p>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal"
                                        data-bs-target="#import">
                                        Importar
                                    </button>
                                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog mt-lg-10">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                    <i class="fas fa-upload ms-3"></i>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You can browse your computer for a file.</p>
                                                    <input type="text" placeholder="Browse file..."
                                                        class="form-control mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="importCheck" checked="">
                                                        <label class="custom-control-label" for="importCheck">I accept the
                                                            terms and conditions</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button"
                                                        class="btn bg-gradient-primary btn-sm">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv"
                                        type="button" name="button">Exportar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class="table table-flush" id="products-list">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Inventario</th>
                                        <th>Unidad</th>
                                        <th>Stock</th>
                                        <th>Stock Minimo</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($items as $item)
                                    <tr>
                                        {{-- <td>
                                            <div class="d-flex">
                                                <div class="form-check my-auto">
                                                    <input class="form-check-input" type="checkbox" id="customCheck1"
                                                        checked>
                                                </div>
                                                
                                                {{-- {{ isset($item->photo) ? $item->photo : url('/images/video-thumbnail.png') }} --}}
                                                {{-- @empty($items->photo)
                                                 <img src="./assets/img/materials/image-default.png" alt="" class="img-fluid">
                                                 @endempty --}}
                                                 {{-- <img src="./assets/img/materials/{{$item->photo}}" alt="" class="img-fluid">
                                               --}}
                                                {{-- <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6> 
                                            </div>
                                        </td> --}}
                                        <td class = "col-md-02">{{$item->idMaterial}}</td>
                                        {{-- <td>{{$item->nameMaterial}}</td> --}}
                                        {{-- <td>	<button  onclick="return getInfoMaterial({{$item->idMaterial}});" id= 'btnEditMaterial' data-target="#editModal" data-whatever="@mdo" data-toggle="modal" type="button" class="editMaterial btn btn-edit">{{$item->nameMaterial}}</button> --}}
                                           
                                        <td class="col-md-4">
                                            <button onclick="return getInfoMaterial({{$item->idMaterial}});" type="button" class="editMaterial btn btn-edi" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                {{$item->nameMaterial}}
                                            </button>
                                        </td>
                                        <td class = "col-md-4">{{$item->inventory}}</td>
                                        <td class = "col-md-4">{{$item->unity}}</td>
                                        <td class = "col-md-4">{{$item->stock}}</td>
                                        <td class = "col-md-4">{{$item->stockMinimum}}</td>
                                    
                                        <td>
                                            @if ($item->stock > $item->stockMinimum )
                                            <span class="{{ $item->stockMinimum > $item->stock }} badge badge-success badge-sm">En stock</span>
                                            
                                            @else
                                            <span class="{{ $item->stockMinimum > $item->stock }} badge badge-danger badge-sm">Fuera de stock</span>
                                            @endif
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>SKU</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
{{-- Modal Edit --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div  class="modal-dialog size-modal" role="document">
	  <div data-bs-spy="scroll" id = "modalEditMaterial" class="scrollspy modal-content">
		<div class="modal-header">
		  <h5 class="modal-title justify-content-center" id="exampleModalLabel">Detalle del material</h5>
          <button type="button" class="btn" data-bs-dismiss="modal"  aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Detealles Generales</button>
            </li>
            <li class="nav-item" role="presentation">
              <button onclick="getInfoMaterialOfInventory();" class="nav-link" id="provider-tab" data-bs-toggle="tab" data-bs-target="#provider" type="button" role="tab" aria-controls="provider" aria-selected="false">Proovedores</button>
            </li>
            <li class="nav-item" role="presentation">
              <button  onclick="getInfoMaterialOfInventory();" class="nav-link" id="departure-tab" data-bs-toggle="tab" data-bs-target="#departure" type="button" role="tab" aria-controls="departure" aria-selected="false">Entradas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button  onclick="getInfoMaterialOfInventory();" class="nav-link" id="entry-tab" data-bs-toggle="tab" data-bs-target="#entry" type="button" role="tab" aria-controls="entry" aria-selected="false">Salidas</button>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="modal-body">
					{{-- <form id='form-Material' method="POST" action="{{url('/material')}}" class="needs-validation" novalidate> --}}
					<form id="form-edit" class="position:relative" id='form-Material' method="PUT"  class="needs-validation" novalidate>
						  {{csrf_field()}}
					<div class="box-edit-content">
						<div class="container-inputs">
							<div  id= 'selectMaterial' class="form-row container-inputs-material">
								@if($loading)
									<div id='loader-edit-home' class="text-center loader-size">
										<div class="spinner-border" role="status">
										<span class="sr-only">Loading...</span>
										</div>
									</div>
								@endif

						   </div>
						</div>
					</div>
						<div class="modal-footer row justify-content-center box-button-modal">
							{{-- <button onclick="return Test();" id = 'close-modal-edit' type="button" class="close-modal btn btn-secondary" data-bs-dismiss="modal">Regresar</button> --}}
							<button  id = 'close-modal-edit' type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Regresar</button>
							{{-- Agregar el disabled con el id --}}
                            <button  onclick="return updateInfoM();" type="button" id= 'addMaterials' class="btn bg-gradient-primary btn-sm">Actualizar</button>
						</div>
					</form>
				</div>
            </div>
            <div class="tab-pane fade" id="provider" role="tabpanel" aria-labelledby="provider-tab">
                <div class="modal-body">
					<div class="box-edit-content">
						<div class="container-inputs">
							<div  id= 'selectMaterial' class="form-row container-inputs-material-provider">
								@if($loading)
									<div id='loader-edit-provider' class="text-center loader-size">
										<div class="spinner-border" role="status">
										<span class="sr-only">Loading...</span>
										</div>
									</div>
								@endif
                              <table id = "trProviderMaterial" class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
						   </div>
						</div>
					</div>
						<div class="modal-footer row justify-content-center box-button-modal">
							{{-- <button onclick="return Test();" id = 'close-modal-edit' type="button" class="close-modal btn btn-secondary" data-bs-dismiss="modal">Regresar</button> --}}
							<button  id = 'close-modal-edit' type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Regresar</button>
						</div>
                    </div>
            </div>
            <div class="tab-pane fade" id="departure" role="tabpanel" aria-labelledby="departure-tab">
                <div class="modal-body">
					<div class="box-edit-content">
						<div class="container-inputs">
							<div  id= 'selectMaterial' class="form-row container-inputs-material-departure">
								@if($loading)
									<div id='loader-edit-departure' class="text-center loader-size">
										<div class="spinner-border" role="status">
										<span class="sr-only">Loading...</span>
										</div>
									</div>
								@endif
                              <table id = "trEntryMaterial" class="table">
                                    <thead class = "thead-dark">
                                        <tr >
                                            <th scope="col">Id Salida</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

						   </div>
						</div>
					</div>
						<div class="modal-footer row justify-content-center box-button-modal">
							{{-- <button onclick="return Test();" id = 'close-modal-edit' type="button" class="close-modal btn btn-secondary" data-bs-dismiss="modal">Regresar</button> --}}
							<button  id = 'close-modal-edit' type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Regresar</button>
						</div>
				</div>    
            </div>
            <div class="tab-pane fade" id="entry" role="tabpanel" aria-labelledby="entry-tab">
                <div class="modal-body">
					{{-- <form id='form-Material' method="POST" action="{{url('/material')}}" class="needs-validation" novalidate> --}}
					<div class="box-edit-content">
						<div class="container-inputs">
							<div  id= 'selectMaterial' class="form-row container-inputs-material-entry">
								@if($loading)
									<div id='loader-edit-entry' class="text-center loader-size">
										<div class="spinner-border" role="status">
										<span class="sr-only">Loading...</span>
										</div>
									</div>
								@endif
                              <table id = "trDepartureMaterial" class="table">
                                 <thead class = "thead-dark">
                                        <tr >
                                            <th scope="col">Id Entrada</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

						   </div>
						</div>
					</div>
						<div class="modal-footer row justify-content-center box-button-modal">
							{{-- <button onclick="return Test();" id = 'close-modal-edit' type="button" class="close-modal btn btn-secondary" data-bs-dismiss="modal">Regresar</button> --}}
							<button  id = 'close-modal-edit' type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Regresar</button>
						</div>
				</div>
            </div>
          </div>
	  </div>
	</div>
  </div>
</div>

@endsection

@push('js')
    <script src="../../assets/js/plugins/datatables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>
   
    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                perPage: 5,
                language: {
                    search: 'buscar'
                }
            });

            document.querySelectorAll(".export").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "soft-ui-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };
    </script>
@endpush
