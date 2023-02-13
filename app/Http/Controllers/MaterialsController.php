<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Materials $model)
    {   
        // Materials->all
        $loading = true;
        return view('laravel.inventory.index', ['items' => $model->orderBy('IdMaterial', 'desc')->get(),'loading' => $loading] );
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
        //  $attributes = request()->validate([
        //      'nameMaterial' => ['required', 'unique:items']

        //  ]);

        // $item = Materials::create([
        //     'nameMaterial' => $request->get('name'),
        //     'inventory' => $request->get('inventroy'),
        //     'category' => $request->get('category'),
        //     'category_id' => $request->get('choices-category'),
        //     'group3' => $request->get('group3'),
        //     'group4' => $request->get('group4'),
        //     'group5' => $request->get('group5'),
        //     'group6' => $request->get('group6'),
        //     'group7' => $request->get('group7'),        
        //     'mark' => $request->get('mark'),
        //     'unitaryPrice' => $request->get('unitaryPrice'),
        //     'stock' => $request->get('stock'),
        //     'note' => $request->get('note'),
        //     'stockMinimum' => $request->get('stockMinimum'),
        //     'unity' => $request->get('unity'),
        //     'editor' => $request->get('editor'),
        //     'editionStatus' => $request->get('editionStatus'),
        //     'alias' => $request->get('alias'),
        //     'date' => $request->get('date'),
        //     'providerActual' => $request->get('providerActual')
        // ]);

        // $newMaterial = new Materials;
        // $newMaterial->nameMaterial = $request->get('name');
        // $newMaterial->inventroy = $request->get('inventroy');
        // $newMaterial->category = $request->get('category');
        // $newMaterial->choicesCategory = $request->get('choices-category');
        // $newMaterial->group3 = $request->get('group3');
        // $newMaterial->group4 = $request->get('group4');
        // $newMaterial->group5 = $request->get('group5');
        // $newMaterial->group6 = $request->get('group6');
        // $newMaterial->group7 = $request->get('group7');
        // $newMaterial->mark = $request->get('mark');
        // $newMaterial->stock = $request->get('stock');
        // $newMaterial->note = $request->get('note');
        // $newMaterial->unity = $request->get('unity');
        // $newMaterial->editor = $request->get('editor');
        // $newMaterial->editionStatus = $request->get('editionStatus');
        // $newMaterial->alias = $request->get('alias');
        // $newMaterial->date = $request->get('date');
        // $newMaterial->providerActual = $request->get('providerActual');

        // $newMaterial->save();


        $dataProviderSupplier = $request->only('materialCode','supplierPrice','nameCommercial');
        $dataStock = $request->except('_token','materialCode','supplierPrice','nameCommercial');
        $nameMaterial = $dataStock['nameMaterial'];
        //Se verifica que no exista la tabla
           $findStock = DB::table('materials')->where('nameMaterial',$nameMaterial)->first();
           if($findStock == null){

            $newMaterial = Materials::insert($dataStock);
             //Obtengo el ultimo registro 
             //$getLastId = Material::latest('idMaterial')->first();
           //  session()->flash('message', 'Se guardo correctamente');
             return redirect()->route('material-management')->with('succes', 'Masterial guardado exitosamente');
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
      //  $item = Materials::find($id);
        //return view('laravel.materials.edit', compact('item'));

        $editMaterial = null;
        $editAllMaterial = Materials::select('materials.*')
        //$editAllMaterial = Materials::select('materials.*','material_suppliers.materialCode','material_suppliers.supplierPrice','providers.nameCommercial')
          //   ->join('material_suppliers', 'material_suppliers.idMaterial', '=', 'materials.idMaterial')
            // ->join('providers', 'material_suppliers.idProvider', '=', 'providers.idProvider')
             ->where( 'materials.idMaterial', $materialId  )
             ->first();         

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
           return  $editMaterial;
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
            'inventory'=>  $getMatrialToUpdate['inventory'],
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
        $article = Materials::where('stock','>',0)->get();
        return view('laravel.inventory.index-stock-real', ['items' => $article,'loading' => $loading] );
    }
    
    public function requireMaterial(Materials $model)
    {
        $loading = true;
        $article = Materials::where('stockMinimum','>', 'stock')->get();
        return view('laravel.inventory.index-revisition-material', ['items' => $article,'loading' => $loading] );
    }

}
