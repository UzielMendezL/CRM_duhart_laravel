<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials = TransactionDetail::all();
        $getConstructionSites = DB::table('work_sites')
        ->select('idWorkSite','nameWorkSite')
        ->where('status' , '=' ,'Activa')
        ->get();

        return view('laravel.transaction.add-material-transaction',['workItems' => $getConstructionSites] );
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
     * @param  \App\Models\TransactionDetail  $transactionDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransactionDetail  $transactionDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransactionDetail  $transactionDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransactionDetail  $transactionDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $deleted = TransactionDetail::where('idTransactionDetail', $id)->delete();
        if ($deleted == 1){
          Alert::success('Éxito', 'Se ha eliminado exitosamente');
        }
        else{
          Alert::danger('Error', 'No se pudo eliminar..');
        }
        //   return redirect()->route('material-management');
        return back()->withInput();
    }
}
