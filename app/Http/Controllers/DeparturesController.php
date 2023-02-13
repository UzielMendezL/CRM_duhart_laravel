<?php

namespace App\Http\Controllers;

use App\Models\Departures;
use Illuminate\Http\Request;

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
        return view('laravel.inventory.departures-index', ['items' => $model->all(),'loading' => $loading] );
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
    public function edit(Departures $departures)
    {
        //
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
}
