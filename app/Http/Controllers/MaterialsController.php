<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Provider;
use App\Models\Departures;
use App\Models\Entry;
use App\Models\Inventory;
use PDF;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Materials $model)
    {   

      $materials = Materials::select('materials.*',"inventories.nameInventory")
      ->join('inventories', 'materials.idInventory', '=', 'inventories.idInventory')
      ->orderBy('idMaterial', 'desc')
      ->get();

        $loading = true;
        return view('laravel.inventory.index', ['items' => $materials,'loading' => $loading] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $materials = Materials::all();
        return view('laravel.inventory.create', compact('materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $dataProviderSupplier = $request->only('materialCode','supplierPrice','nameCommercial');
        $dataStock = $request->except('_token','materialCode','supplierPrice','nameCommercial');
        $nameMaterial = $dataStock['nameMaterial'];
        //Se verifica que no exista la tabla
           $findStock = DB::table('materials')->where('nameMaterial',$nameMaterial)->first();
           if($findStock == null){

            $newMaterial = Materials::insert($dataStock);
            // if($request->hasFile('image')){
            //     $path = $request->image->store('public/img/materials');
            //       Image::create(['path' => $path]);
            // }

            
             //Obtengo el ultimo registro 
             //$getLastId = Material::latest('idMaterial')->first();
           //  session()->flash('message', 'Se guardo correctamente');
            //  return redirect()->route('material-management')->with('succes', 'Masterial guardado exitosamente');
             Alert::success('Éxito', 'Se ha guardado exitosamente');
             return redirect()->route('material-management');
           }



   //     $item->tags()->attach($request->get('tags'));

        // if($request->file('picture')) {
        //     $item->update([
        //         'photo' => $request->file('picture')->store('/', 'items')
        //     ]);
        // }

        //return redirect()->route('inventory-management')->with('succes', 'Masterial guardado exitosamente');
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Materials $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($materialId)
    {

        $editMaterial = null;
      
        // $editMaterialProvider = Provider::select('entries.entryDate','employees.completeName','employees.idEmployee','entries.quantity','materials.stock','entries.quantity','materials.nameMaterial','materials.photo')
        // ->join('employees', 'employees.idEmployee', '=', 'entries.idEmployed')
        // ->join('materials', 'materials.idMaterial', '=', 'entries.idMaterial')
        // ->where( 'entries.idEntry', $entryId)
        // ->first();

        $editMaterialEntry = Entry::select('entries.quantity','entries.idEntry','entries.quantity','materials.nameMaterial','entries.entryDate')
        ->join('materials', 'materials.idMaterial', '=', 'entries.idMaterial')
        ->where( 'materials.idMaterial', $materialId)
        ->get();

        $editMaterialDeparture = Departures::select('departures.quantity','departures.idDeparture','departures.quantity','materials.nameMaterial','departures.departureDate')
        ->join('materials', 'materials.idMaterial', '=', 'departures.idMaterial')
        ->where( 'materials.idMaterial', $materialId)
        ->get(); 

        $editMaterialProviders = Materials::select('transactions.payDay','transaction_details.unitaryPrice','transactions.nameProvider',)
        ->join('transaction_details', 'transaction_details.idConcept', '=', 'materials.idMaterial')
        ->join('transactions', 'transaction_details.idTransaction', '=', 'transactions.idTransaction')
        ->where( 'materials.idMaterial', $materialId)
        ->get(); 
      
        $editAllMaterial = Materials::select('materials.*','inventories.nameInventory','inventories.idInventory')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
         ->where( 'materials.idMaterial', $materialId  )
         ->first(); 
         
         $getInventories = Inventory::all();

             if($editAllMaterial == null ){
              $editOnlyMaterial = Materials::select('materials.*')
              ->where( 'materials.idMaterial', $materialId  )
              ->first();

              $editMaterial = $editOnlyMaterial;
             }else{
              $editMaterial = $editAllMaterial;
             }
          
           $loading = false;
           view('laravel.inventory.index',compact('loading'));
           return  [$editMaterial,$editMaterialEntry,$editMaterialDeparture,$editMaterialProviders, $getInventories];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materials $material)
    {
        $idMaterial = $request->get('materialId');
        $getMatrialToUpdate = $request->get('materialUpdate');

         $updateMaterial = array(
            'stock' =>  $getMatrialToUpdate['stock'],
            'nameMaterial'=>  $getMatrialToUpdate['nameMaterial'],
            'idInventory'=>  $getMatrialToUpdate['idInventory'],
            'category'=>  $getMatrialToUpdate['category'],
            'group3'=>  $getMatrialToUpdate['group3'],
            'group4'=>  $getMatrialToUpdate['group4'],
            'group5'=>  $getMatrialToUpdate['group5'],
            'group6'=>  $getMatrialToUpdate['group6'],
            'group7'=>  $getMatrialToUpdate['group7'],
            'mark'=>  $getMatrialToUpdate['mark'],
            'unitaryPrice'=>  $getMatrialToUpdate['unitaryPrice'],
            //'photo'=>  $id['photo'],
         );

        $result = Materials::where('idMaterial', '=',$idMaterial)->update( $updateMaterial);
          if($result == 0){
            //  return redirect('material-management')->with('Message','Lo siento , intentalo mas tarde');   
            return false;
          }
          else{
           //    return redirect('material-management')->with('Message','Material se ha modificado correctamente');
            //return redirect('material-management')->withSuccess('Task Created Successfully!');
            return true;

            //SweetAlert::message('Robots are working!');

           // return Redirect::home();
          }
        //session()->flash('message', 'Se guardo correctamente');
        //return redirect('material-management');   
       // return view('laravel.inventory.index')->with('Message','Material se ha modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $deleted = Materials::where('idMaterial', $id)->delete();
        if ($deleted == 1){
          Alert::success('Éxito', 'Se ha eliminado exitosamente');
        }
        else{
          Alert::danger('Error', 'No se pudo eliminar..');
        }
          return redirect()->route('material-management');
     }

    // public function destroy( Materials $id)
    // {

    //    // $deleted = Materials::where('idMaterial', $id)->delete();
    //     return redirect()->route('material-management');
    // }
    public function stockReal(Materials $model)
    {
        $loading = true;
        $article = Materials::select('materials.*','inventories.nameInventory')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
        ->where('stock','>',0 )->get();
        return view('laravel.inventory.index-stock-real', ['items' => $article,'loading' => $loading] );
    }
    
    public function requireMaterial(Materials $model)
    {
        $loading = true;
      
        $article = Materials::select('materials.*','inventories.nameInventory')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
        ->where('stockMinimum','>', 'stock' )->get();

        return view('laravel.inventory.index-revisition-material', ['items' => $article,'loading' => $loading] );
    }
    public function stockRealStore()
    {
        $loading = true;
        
        $currenturl = url()->current();
        $statusSt = "";
        if (str_contains($currenturl, 'real-b')){
            $statusSt = 2;
        }
        else if (str_contains($currenturl, 'real-f')){
          $statusSt = 1;
        }
        
        $entryListMaterials = Entry::select('entries.*','materials.nameMaterial',
        'materials.category','materials.idInventory',
        'materials.unity','materials.stock', 'stores.storeName','materials.idMaterial','inventories.nameInventory','entries.entryDate','materials.photo')
        ->join('materials', 'entries.idMaterial', '=', 'materials.idMaterial')
        ->join('stores', 'entries.idStore', '=', 'stores.idStore')
        ->join('inventories', 'materials.idInventory', '=', 'inventories.idInventory')
        ->where('entries.idStore', '=',  $statusSt)
        ->get();

        return view('laravel.inventory.index-stock-store', ['items' => $entryListMaterials,'loading' => $loading] );
    }

    // Ajax
    // public function  makeReports(Request $request){
    //    $getMaterial = $request->get('materialSearch');
    //   // $getData = DB::table('materials')
    //   // ->select('materials.*','inventories.nameInventory')
    //   // ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
    //   // ->where('materials.nameMaterial' ,'LIKE', '%'.$getMaterial.'%')
    //   // ->orWhere('materials.category' ,'LIKE', '%'.$getMaterial.'%')
    //   // ->orWhere('materials.idInventory' ,'LIKE', '%'.$getMaterial.'%')
    //   // ->paginate(10);
    //   //return MaterialsController::reports($getData);
    //   //return view('laravel.inventory.report-material', ['items' => $getData] );
    //   return response()->json(['url'=>url("/inventory/material-report/$getMaterial")]);
    // }
     public function  reports(Request $request)
     {
      $makeFilter =  $request->get('filterName');

       $getData = DB::table('materials')
       ->select('materials.*','inventories.nameInventory')
       ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
       ->where('materials.nameMaterial' ,'LIKE', '%'.$makeFilter.'%')
       ->orWhere('materials.category' ,'LIKE', '%'.$makeFilter.'%')
       ->orWhere('inventories.nameInventory' ,'LIKE', '%'.$makeFilter.'%')
       ->paginate(10);
        // ->get();
      return view('laravel.inventory.report-material', ['items' => $getData, 'makeFilter' => $makeFilter] );

     }
    public function  downloadReports(Request $request)
    {
      $params =  $request->get('filterName');
      //Test
     // $params =  'mdf';
      $currenturl = url()->current();
      $statusSt = "";
      
      $article = DB::table('materials')
      ->select('materials.*','inventories.nameInventory')
      ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
      ->where('materials.nameMaterial' ,'LIKE', '%'.$params.'%')
      ->orWhere('materials.category' ,'LIKE', '%'.$params.'%')
      ->orWhere('inventories.nameInventory' ,'LIKE', '%'.$params.'%')
      //->paginate(50);
      ->get();

      
      $data = [
        'title' => 'Test',
        'content' => '23',

        'materialList' => $article,
        'makeFilter' => $params
    ]; 
      
      $pdf = PDF::loadView('laravel.report.view-report-material-list', $data)
      ->set_option("isPhpEnabled", true)
      ->set_option('defaultFont', 'sans-serif');
      // ->render();
    
      if (str_contains($currenturl, 'preview')){
         return $pdf->stream('material-reports-test .pdf');
      }
      
      return $pdf->download('material-reports-test.pdf');
      
    }

    public function  testViewReport()
    {
      
      $params = "mdf";
      $article = DB::table('materials')
      ->select('materials.*','inventories.nameInventory')
      ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')
      ->where('materials.nameMaterial' ,'LIKE', '%'.$params.'%')
      ->orWhere('materials.category' ,'LIKE', '%'.$params.'%')
      ->orWhere('inventories.nameInventory' ,'LIKE', '%'.$params.'%')
      // ->paginate(10);
      ->get();
      
     return view('laravel.report.view-report-material-list', ['materialList' => $article] );
    }

}
