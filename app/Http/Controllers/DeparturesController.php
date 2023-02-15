<?php

namespace App\Http\Controllers;

use App\Models\Departures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Materials;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class DeparturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Departures $model)
    {
        $loading = true;
        $getEmployees = DB::table('employees')
        ->where('job' , '=' ,'Bodeguero')
        ->get();

        $getConstructionSites = DB::table('work_sites')
        ->where('status' , '=' ,'Activa')
        ->get();

        $getStore = DB::table('Stores')
        ->get();
        
        
        $modelFiltered = Departures::select('departures.*','materials.inventory',
        'materials.category', 'materials.nameMaterial', 'stores.storeName',"work_sites.nameWorkSite","estimations.nameEstimation","materials.inventory")
        ->join('estimations', 'departures.idEstimation', '=', 'estimations.idEstimation')
        ->join('work_sites', 'estimations.idWorkSite', '=', 'work_sites.idWorkSite')
        ->join('materials', 'departures.idMaterial', '=', 'materials.idMaterial')
        ->join('stores', 'departures.idStore', '=', 'stores.idStore')
        ->orderBy("departures.departureDate", "DESC")
        ->paginate(5);
        return view('laravel.inventory.departures-index', ['items' => $modelFiltered->all(),'loading' => $loading, "getEmployees" => $getEmployees,"getConstructionSites" => $getConstructionSites,"getStore" => $getStore] );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDeparture= request()->except('_token');
        //Dato name del formulario
        $nameMaterial = $newDeparture['selectMaterial'];
        $idConstruction = $newDeparture['workSite'];
         $findMaterial = DB::table('materials')->where('nameMaterial',$nameMaterial)->first();
         $findConstruction = DB::table('work_sites')->where('idWorkSite',$idConstruction)->first();

          if($findMaterial != null){
              
            //   $localiceEntry = DB::table('departures')->where('idMaterial',$findMaterial->idMaterial)->first();
            $employed1 = $newDeparture['employeeDelivered'];
            $employed2 = $newDeparture['employeeReceived'];

               $localiceEmployees = DB::table('employees')
               ->whereIn('idEmployee',[$employed1,$employed2])
               ->get();
               
                //Distribumos los empleados de recibir y entrega
               $employeeDelivery = null;
               $employeeReceived = null;
  //          print_r($localiceEmployees);
                if(count($localiceEmployees) >  1){
                    foreach ($localiceEmployees as $employeeSelected) {
                        // $array[3] se actualizará con cada valor de $array...
                        if(is_null($employeeDelivery)){
                            $employeeDelivery = $employeeSelected;
                        }else {
                            $employeeReceived = $employeeSelected;
                        }  
                    }   
                }else{
                    $employeeDelivery= $localiceEmployees[0];
                    $employeeReceived= $localiceEmployees[0];
                }
          
                $substractionStockMaterial =  $findMaterial->stock - $newDeparture['quantity'];
                
                if( $substractionStockMaterial >= 0 ){

                   $insertD =  Departures::insert([
                        'idMaterial' => $findMaterial->idMaterial, 
                        'quantity' => $newDeparture['quantity'],
                        'priceUnitary' => $newDeparture['priceUnitary'],
                        'departureDate' => $newDeparture['departureDate'],
                        'idEmployed' => $employeeDelivery->idEmployee,
                        'idEmployed2' => $employeeReceived->idEmployee,
                        'idEstimation' => $newDeparture['idEstimation'],
                        'idStore' => $newDeparture['idStore'],
                        'idUser' => auth()->user()->id,
                    ]);
          
                    if ($insertD == 1){
                        Materials::where('idMaterial',$findMaterial->idMaterial )
                        ->update(['stock' => $substractionStockMaterial]);
                    }else{
                        Alert::error('Error', 'Lo sentimos, error interno');
                        return redirect()->route('material-departure-management');

                    }

                    Alert::success('Éxito', 'Se ha agregado exitosamente');
                    return redirect()->route('material-departure-management');
    

                }else{
                    Alert::warning('Error', 'La cantidad supera el stock del material');
                    return redirect()->route('material-departure-management');
                }
  
          }else{
            Alert::error('Error', 'Lo sentimos no se encontro el material');
            return redirect()->route('material-departure-management');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departures  $departures
     * @return \Illuminate\Http\Response
     */
    public function show(Departures $departures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departures  $departures
     * @return \Illuminate\Http\Response
     */
    public function edit($departureId)
    {
        $editMaterial = Departures::select(
            'work_sites.nameWorkSite',
            'estimations.nameEstimation',
            'estimations.idEstimation',
            'departures.departureDate',
            'employees.completeName',
            'employees.idEmployee',
            'departures.quantity',
            'materials.stock',
            'departures.quantity',
            'materials.nameMaterial',
            // 'departures.idEmployeDelivery',
            // 'departures.idEmployed2',
            'departures.idEmployed2',
            "materials.photo"
            )
        ->join('employees', 'employees.idEmployee', '=', 'departures.idEmployed')
        ->join('materials', 'departures.idMaterial', '=', 'materials.idMaterial')
        ->join('estimations', 'departures.idEstimation', '=', 'estimations.idEstimation')
        ->join('work_sites', 'estimations.idWorkSite', '=', 'work_sites.idWorkSite')
        
        // ->join('stores', 'departures.idStore', '=', 'stores.idStore')
        ->where( 'departures.idDeparture', $departureId)
        ->first();
        
        $getEmployees = Employee::select(
        'completeName',
        'idEmployee')
        ->where('idEmployee', $editMaterial->idEmployed2)
        ->first();
        
        return [$editMaterial,$getEmployees];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departures  $departures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departures $departures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departures  $departures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departures $departures)
    {
        //
    }
    public function search(Request $request)
    {
        $getMaterial = $request->get('materialSearch');
        $getData = DB::table('materials')
         //->where('materials.nameMaterial' ,'LIKE', '%Cubrecanto Melamina Blanco Frosty  C/P 2 mm 19 mm%')
          ->where('materials.nameMaterial' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('materials.category' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('materials.inventory' ,'LIKE', '%'.$getMaterial.'%')
          ->paginate(10);
        
        return $getData;
    }
    public function searchEstimation($id)
    {
        // $getMaterial = $request->get('EstimationSearch');
        $getData = DB::table('estimations')
        ->select('idEstimation',"nameEstimation")
        ->where('idWorkSite', $id)
        ->get();
        
        return $getData;
    }

}
