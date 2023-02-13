<?php

namespace App\Http\Controllers;

use App\Models\Departures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

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
        
        $modelFiltered = Departures::select('departures.*','materials.inventory',
        'materials.category', 'materials.nameMaterial', 'stores.storeName',"work_sites.nameWorkSite","estimations.nameEstimation","materials.inventory")
        ->join('estimations', 'departures.idEstimation', '=', 'estimations.idEstimation')
        ->join('work_sites', 'estimations.idWorkSite', '=', 'work_sites.idWorkSite')
        ->join('materials', 'departures.idMaterial', '=', 'materials.idMaterial')
        ->join('stores', 'departures.idStore', '=', 'stores.idStore')
        ->orderBy("departures.departureDate", "DESC")
        ->get();
        return view('laravel.inventory.departures-index', ['items' => $modelFiltered->all(),'loading' => $loading] );
        
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
    public function edit($departureId)
    {
        $editMaterial = Departures::select(
            'work_sites.nameWorkSite',
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
}
