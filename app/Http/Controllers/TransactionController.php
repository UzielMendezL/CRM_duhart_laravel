<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\BankAccount;
use App\Models\Provider;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    /**bank_accounts
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $model)
    {
        $loading = true;
       
        $modelJoined = Transaction::select('transactions.*','bank_accounts.nameAccount')
        ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
        ->orderBy('payDay', 'desc')
       // ->where('transactions.concept','Pendiente')
        ->paginate(400);

        return view('laravel.transaction.index', ['items' => $modelJoined ,'loading' => $loading] );
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
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($idTrans)
    {
        
        $ediTransaction = null;
      
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $idTransaction = $request->route('id');
        $dataStock = $request->except('_token');
    

        $nameProvider = Provider::select('nameProvider')
                ->where('idProvider',  $dataStock['idProvider'])
               ->get();
         $updateTransaction = array(
            'elaboratedDate' =>  $dataStock['elaboratedDate'],
            'concept'=>  $dataStock['concept'],
            'idAccount'=>  $dataStock['idAccount'],
            'mount'=>  $dataStock['mount'],
            //'invoice'=>  $dataStock['group3'],
            //'invoiceImage'=>  $dataStock['group4'],
            //'providerQuotes'=>  $dataStock['providerQuotes'],
            'notes'=>  $dataStock['notes'],
            'idProvider'=>  $dataStock['idProvider'],
            'nameProvider'=>  $nameProvider,
            //'proofOfPayment'=>  $dataStock['proofOfPayment'],
            //'elaborateEmployee'=>  $dataStock['elaborateEmployee'],
            'providerType'=>  $dataStock['providerType'],
            'conceptType'=>  $dataStock['conceptType']
         );

        $result = Transaction::where('idTransaction', '=',$idTransaction)->update( $updateTransaction);
          if($result == 1){
            Alert::success('Éxito', 'Se ha actualizado correctamente');
          }
          else{
            Alert::error('Error', 'Al parecer ocurrio algo.. intentalo más tarde.');
          }
          //return redirect()->route('transaction-management');
          return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
    public function search(Request $request)
    {
        $getMaterial = $request->get('materialSearch');
        $getData = DB::table('materials')
        ->select('nameMaterial','stock','idMaterial','unitaryPrice','unity','inventory','inventories.idInventory')
        ->join('inventories', 'inventories.nameInventory', '=', 'materials.inventory')

         //->where('materials.nameMaterial' ,'LIKE', '%Cubrecanto Melamina Blanco Frosty  C/P 2 mm 19 mm%')
          
          ->where('materials.nameMaterial' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('materials.category' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('materials.inventory' ,'LIKE', '%'.$getMaterial.'%')
          ->paginate(10);
        
        return $getData;
    }
}
