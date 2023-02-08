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
        //
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
}
