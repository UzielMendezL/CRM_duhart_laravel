<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\BankAccount;
use App\Models\Provider;

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
    public function create(Request $request)
    {

        $materials = TransactionDetail::all();
        $getConstructionSites = DB::table('work_sites')
        ->select('idWorkSite','nameWorkSite')
        ->where('status' , '=' ,'Activa')
        ->get();

         $transId = $request->id;

        return view('laravel.transaction.add-material-transaction',['workItems' => $getConstructionSites,'transId' => $transId ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        $dataStock = $request->except('_token','idWorksite',"nameInventory");
        $idTrans = $dataStock['idTrans'];

        $findStock = DB::table('transactions')->where('idTransaction',$idTrans)->first();
        if($findStock != null){

        //  $newTransactionDetail = TransactionDetail::insert($dataStock);
      $mewTransactionD =   TransactionDetail::insert([
            'idTransaction' => $idTrans, 
            'idEstimation' => $dataStock['idEstimation'],
            'idInventory' => $dataStock['idInventory'],
            'idConcept' => $dataStock['idConcept'],
            'nameConcept' => $dataStock['nameConcept'],
            'mount' => $dataStock['mount'],
            'unity' => $dataStock['unity'],
            'quantity' => $dataStock['quantity'],
            'unitaryPrice' => $dataStock['unitaryPrice']
        ]);

         if($mewTransactionD == 1){
           Alert::success('Éxito', 'Se ha guardado exitosamente');
         }else{
          Alert::error('Error', 'Al parecer ocurrio un error');
         }
          
        //   return index edit transaction
        $editTransaction = Transaction::select('transactions.*','bank_accounts.nameAccount','providers.nameProvider')
        ->join('providers', 'providers.idProvider', '=', 'transactions.idProvider')
        ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
         ->where( 'transactions.idTransaction', $idTrans  )
         ->first(); 
         $actualProviders = Provider::select('providers.idProvider','providers.nameProvider')
         ->where('providers.status',true)
         ->where('providers.nameProvider', '<>',$editTransaction->nameProvider)
         ->get();
         $actualAccounts =  BankAccount::select('bank_accounts.idAccount','bank_accounts.nameAccount')
         ->where('bank_accounts.status',true)
         ->where('bank_accounts.nameAccount', '<>',$editTransaction->nameAccount)
         ->get();
         $getTransactionDetail = TransactionDetail::select('transaction_details.*','inventories.nameInventory','estimations.nameEstimation')
        ->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')
        ->join('inventories', 'inventories.idInventory', '=', 'transaction_details.idInventory')
        ->join('estimations', 'estimations.idEstimation', '=', 'transaction_details.idEstimation')
         ->where( 'transactions.idTransaction', $idTrans  )
         ->get();         

             if($editTransaction == null ){
              $editOnlyTransaction = Transaction::select('transactions.*')
              ->join('providers', 'providers.idProvider', '=', 'transactions.idProvider')
             ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
              ->where( 'transactions.idTransaction', $idTrans  )
              ->first();

              $ediTransaction = $editOnlyTransaction;
             }else{
              $ediTransaction = $editTransaction;
             }
          
           $loading = false;
           return view('laravel.transaction.edit', ['item' => $ediTransaction ,'itemsTDetails' => $getTransactionDetail , 'loading' => $loading, 'providersActive' => $actualProviders, 'accountActives' => $actualAccounts,] );
          
        }
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
