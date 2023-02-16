@extends('layouts.app')
@section('scriptsMaterial')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  {{-- <script src="{{ asset('js/prueba.js') }}" defer ></script>  --}}
  {{-- @include('popper::assets') --}}
@endsection
@section('content')
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'Inventarios','secondTitle' => 'Entradas'])
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
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Entradas</h5>
                                <p class="text-sm mb-0">
                                   Lista de entradas
                                </p>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                
                                <a  data-bs-toggle="modal" href="#createModalE" class="btn btn-primary">Nueva entrada</a>
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
                                        
                                        <th>Fecha</th>
                                        <th>Id Entrada</th>
                                        <th>Material</th>
                                        <th>Inventario</th>
                                        <th>Categoría</th>
                                        <th>Nombre de la bodega</th>
                                        <th>Cantidad</th>
                                        {{-- <th>Acciones</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($items as $item)
                                    <tr>
                                        <td class = "col-md-02">{{$item->entryDate}}</td>
                                    </td>
                                    <td class = "col-md-4">{{$item->idEntry}}</td>
                                    <td class="col-md-1">
                                        <button onclick="return getInfoEntry({{$item->idEntry}});" data-whatever="@mdo"  type="button" class="editMaterial btn btn-edi" data-bs-toggle="modal"
                                        data-bs-target="#editModalEntry">
                                            {{$item->nameMaterial}}
                                        </button>
                                    </td>
                                    <td class = "col-md-4">{{$item->inventory}}</td>
                                    <td class = "col-md-4">{{$item->category}}</td>
                                    <td class = "col-md-4">{{$item->storeName}}</td>
                                    <td class = "col-md-4">{{$item->quantity}}</td>
                                    {{-- <td class="text-sm">
                                        <a href="javascript:;" data-bs-toggle="tooltip"
                                            data-bs-original-title="Visualizar entradas">
                                            <i class="fas fa-eye text-secondary"></i>
                                        </a>
                                    
                                    </td> --}}

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>

{{-- Modal Create Entry --}}
<div>
    <div class="modal fade" id="createModalE" tabindex="-1" role="dialog" aria-labelledby="createEntryModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title justify-content-center" id="createEntryModal">Añade nueva entrada</h5>
            <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
               <div id='loader-entry' class="text-center loader-size">
                  <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                  </div>
              </div> 
  
              <form id='form-create-entry' method="POST" action="{{url('/inventory/new-entry')}}" class="needs-validation" novalidate>
                    {{csrf_field()}}
                    <div class="row" id= 'box-entry-inputs'>
                        <div class="col-md-6">
                            <label for="recipient-name" class="col-form-label">
                                Almacen:
                            </label>
                            <select required name="idStore" id= 'idStore' class="form-control">
                                <option value="">Selecciona una opción</option>
                                @foreach ($getStore as $store)
                                    <option value={{ $store->idStore }}>{{ $store->storeName }}</option>	
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Escoge el almacén correspondiente</div>
                        </div>
                        <div class="col-md-6">
                          <label for="recipient-name" class="col-form-label">
                              Recibio:
                          </label>
                          <select required name="employedName" id= 'form-employed' class="form-control">
                              <option value="">Selecciona una opción</option>
                              @foreach ($getEmployees as $employee)
                                  <option value={{$employee->idEmployee}}>{{$employee->completeName}}</option>	
                              @endforeach
                          </select>
                          <div class="invalid-feedback">Escoge la persona que lo recibió</div>
                      </div>
                      <div class="col-md-6">
                          <label for="recipient-name" class="col-form-label">
                              Fecha de entrega:
                          </label>
                          <input type = 'date' readonly  id='entryDate' class ='form-control' name="entryDate" /> 
                      </div>
                      <div  class="col-md-12">
                          <label for="recipient-name" class="col-form-label">Selecciona el material que deseas agregar:</label>
                          <input id="search-entry-material" aria-label="Search"  type="search" placeholder="Escribe minimo 3 letras para localizar el material" type="text" class="form-control"/>
                      </div>
                  </div>
          

                    <div id = 'material-selected' class="row">
                      <div class="col-md-12">
                          <label for="recipient-name" class="col-form-label">
                              Seleccionaste:
                          </label>
                          <input readonly class="form-control" name="selectMaterial" id="select-Material" type="text" />
                      </div>
                      <div class=" col-md-6">
                          <label for="recipient-name" class="col-form-label">
                              Stock:
                          </label>
                          <input  readonly id='stockMaterial' min="0" type = 'number'   class ='form-control' name="stockEntry" /> 
                      </div>
                      
                      <div class="col-md-6">
                          <label for="recipient-name" class="col-form-label">
                              Cantidad:
                          </label>
                          <input required placeholder="Escribe la cant. de entradas"  min="0" type = 'number' id = 'quantityEntry'   class ='form-control' name="quantity" /> 
                          <div class="invalid-feedback">Escribe la cantidad que deseas agregar</div>
                      </div>
                      <input  type="hidden"  required  min="0" type = 'number' id = 'priceUnitary' name = "priceUnitary" class ='form-control' x /> 
                    </div>
                  <div class="modal-footer row justify-content-center box-button-modal">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                      <button  type="submit" id= 'addEntry' class="btn btn-primary">Añadir Entrada</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div> 


{{-- Modal Edit --}}
<div class="modal fade" id="editModalEntry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div  class="modal-dialog" role="document">
	  <div class="modal-content modalEditEntry" >
		<div class="modal-header">
		  <h5 class="modal-title justify-content-center" id="exampleModalLabel">Detalle del material de entrada</h5>
		  <button type="button" class=" btn close close-modal" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		
		<div class="modal-body">
			<form id="form-edit" class="position:relative" id='form-Material' method="PUT"  class="needs-validation" novalidate>
				  {{csrf_field()}}
			<div class="box-edit-content">
				<div class="container-inputs-edit-modal">
					<div  id= 'selectMaterial' style="width:100%" class="form-row container-inputs-entry">

						<div id='loader-edit-entry' class="text-center loader-size">
							<div class="spinner-border" role="status">
							<span class="sr-only">Loading...</span>
							</div>
						</div>		
				   </div>
				</div>
			</div>
				<div class="modal-footer row justify-content-center box-button-modal btn-back">
					<button  id = 'testClick' type="button" class="close-modal btn btn-primary" >Regresar</button>
					{{-- <button  onclick="return test();" type="submit" id= 'addEntry' class="btn btn-primary">Actualizar</button> --}}
					
				</div>
			</form>
		</div>
	  </div>
	</div>
  </div>
</div>
</div>

@endsection

@push('js')
    <script src="../../assets/js/plugins/datatables.js"></script>
    <script src="{{ asset('../../assets/js/components/Entries/modalCreateEntry.js') }}" ></script> 
    <script src="{{ asset('../../assets/js/components/Materials/modalCreateMaterial.js') }}" ></script> 
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
    @include('sweetalert::alert')
@endpush
