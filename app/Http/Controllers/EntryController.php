<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Materials;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Provider;
use App\Models\Departures;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Entry $model)
    {
        $loading = true;
        
        $getEmployees = DB::table('employees')
        ->where('job' , '=' ,'Bodeguero')
        ->get();

        $getStore = DB::table('stores')
        ->get();

        $modelFiltered = Entry::select('entries.*','inventories.nameInventory',
        'materials.category', 'materials.nameMaterial', 'stores.storeName')
        ->join('materials', 'entries.idMaterial', '=', 'materials.idMaterial')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
        ->join('stores', 'entries.idStore', '=', 'stores.idStore')
        ->orderBy("entries.entryDate", "DESC")
        ->get();

        return view('laravel.inventory.entry-index', ['items' => $modelFiltered->all(),'loading' => $loading, "getEmployees" => $getEmployees,"getStore" => $getStore] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = Entry::all();
        return view('laravel.inventory.entry.create', compact('entry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry= request()->except('_token');
        $nameMaterial = $newEntry['selectMaterial'];
       $findMaterial = DB::table('materials')->where('nameMaterial',$nameMaterial)->first();
       if($findMaterial != null){
            $localiceEntry = DB::table('entries')->where('idMaterial',$findMaterial->idMaterial)->first();
            $localiceEmpoyee = DB::table('employees')->where('idEmployee',$newEntry['employedName'])->first();

            $sumStockMaterial =  $findMaterial->stock + $newEntry['quantity'];

            Entry::insert([
                    'idMaterial' => $findMaterial->idMaterial, 
                    'quantity' => $newEntry['quantity'],
                    'entryDate' => $newEntry['entryDate'],
                    'idEmployed' => $localiceEmpoyee->idEmployee,
                    'priceUnitary' => $newEntry['priceUnitary'],
                    'idUser' =>  auth()->user()->id,
                    'idStore' => $newEntry['idStore']
                ]);

            Materials::where('idMaterial',$findMaterial->idMaterial )
            ->update(['stock' => $sumStockMaterial]);

            Alert::success('Éxito', 'Se ha agregado exitosamente');
            return redirect()->route('material-entry-management');
       }else{
        Alert::error('Error', 'Lo sentimos tenemos problemas ...');
        return redirect()->route('material-entry-management');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit($entryId)
    {
        $editMaterial = Entry::select('entries.entryDate','employees.completeName','employees.idEmployee','entries.quantity','materials.stock','entries.quantity','materials.nameMaterial','materials.photo')
        ->join('employees', 'employees.idEmployee', '=', 'entries.idEmployed')
        ->join('materials', 'materials.idMaterial', '=', 'entries.idMaterial')
        ->where( 'entries.idEntry', $entryId)
        ->first();
        
        return $editMaterial;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        //
    }
    public function search(Request $request)
    {
        $getMaterial = $request->get('materialSearch');
        $getData = DB::table('materials')
        ->select('materials.*','inventories.nameInventory')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
         //->where('materials.nameMaterial' ,'LIKE', '%Cubrecanto Melamina Blanco Frosty  C/P 2 mm 19 mm%')
        ->where('materials.nameMaterial' ,'LIKE', '%'.$getMaterial.'%')
        ->orWhere('materials.category' ,'LIKE', '%'.$getMaterial.'%')
        ->orWhere('materials.idInventory' ,'LIKE', '%'.$getMaterial.'%')
        ->paginate(10);
        
        return $getData;
    }
}
