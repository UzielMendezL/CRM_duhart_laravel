<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Materials $model)
    {
        $loading = true;
        return view('laravel.inventory.index', ['items' => $model->all(),'loading' => $loading] );
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
          $attributes = request()->validate([
            'nameMaterial' => ['required', 'unique:items']

        ]);

        $item = Materials::create([
            'nameMaterial' => $request->get('name'),
            'inventory' => $request->get('inventroy'),
            'category' => $request->get('category'),
            'category_id' => $request->get('choices-category'),
            'group3' => $request->get('group3'),
            'group4' => $request->get('group4'),
            'group5' => $request->get('group5'),
            'group6' => $request->get('group6'),
            'group7' => $request->get('group7'),        
            'mark' => $request->get('mark'),
            'unitaryPrice' => $request->get('unitaryPrice'),
            'stock' => $request->get('stock'),
            'note' => $request->get('note'),
            'stockMinimum' => $request->get('stockMinimum'),
            'unity' => $request->get('unity'),
            'editor' => $request->get('editor'),
            'editionStatus' => $request->get('editionStatus'),
            'alias' => $request->get('alias'),
            'date' => $request->get('date'),
            'providerActual' => $request->get('providerActual')
        ]);

   //     $item->tags()->attach($request->get('tags'));

        if($request->file('picture')) {
            $item->update([
                'photo' => $request->file('picture')->store('/', 'items')
            ]);
        }

        return redirect()->route('inventory-management')->with('succes', 'Masterial guardado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
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
        $editAllMaterial = Materials::select('materials.*','material_suppliers.materialCode','material_suppliers.supplierPrice','providers.nameCommercial')
             ->join('material_suppliers', 'material_suppliers.idMaterial', '=', 'materials.idMaterial')
             ->join('providers', 'material_suppliers.idProvider', '=', 'providers.idProvider')
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
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        //
    }
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
