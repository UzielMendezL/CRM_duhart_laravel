<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

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

        $modelFiltered = Entry::select('entries.*','materials.inventory',
        'materials.category', 'materials.nameMaterial', 'stores.storeName')
        ->join('materials', 'entries.idMaterial', '=', 'materials.idMaterial')
        ->join('stores', 'entries.idStore', '=', 'stores.idStore')
        ->get();

        return view('laravel.inventory.entry-index', ['items' => $modelFiltered->all(),'loading' => $loading] );
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
        //
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
}
