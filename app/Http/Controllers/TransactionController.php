<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\BankAccount;
use App\Models\Provider;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
        // ->orderBy('payDay', 'desc')
        ->orderBy('idTransaction', 'desc')
       // ->where('transactions.concept','Pendiente')
        ->paginate(400);

        return view('laravel.transaction.index', ['items' => $modelJoined ,'loading' => $loading] );
    }

    /**bank_accounts
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAccountStatus(Transaction $model)
    {
        $loading = true;

        $currenturl = url()->current();
        $statusTr = "";
        if (str_contains($currenturl, 'status-paid')){
            $statusTr = "Pagada";
        }
        else if (str_contains($currenturl, 'status-wait')){
            $statusTr = "Pendiente";
        }
        else if (str_contains($currenturl, 'status-authorized')){
            $statusTr = "Autorizada";
        }
       
        $modelJoined = Transaction::select('transactions.*','bank_accounts.nameAccount')
        ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
        // ->orderBy('payDay', 'desc')
        ->orderBy('idTransaction', 'desc')
        ->where('transactions.status',$statusTr)
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
        
        $getConstructionSites = DB::table('work_sites')
        ->select('idWorkSite','nameWorkSite')
        ->where('status' , '=' ,'Activa')
        ->get();
                
        $providerList = DB::table('providers')
        ->select('idProvider','nameProvider')
        ->where('status' , '=' , 1)
        ->get();
                
        $bankList = DB::table('bank_accounts')
        ->select('idAccount','nameAccount')
        ->where('status' , '=' , 1)
        ->get();

        return view('laravel.transaction.add-transaction', ['workItems' => $getConstructionSites,'providerItems' => $providerList,'bankItems' => $bankList]);
        //return view('laravel.transaction.edit', ['item' => $ediTransaction ,'itemsTDetails' => $getTransactionDetail , 'loading' => $loading, 'providersActive' => $actualProviders, 'accountActives' => $actualAccounts,] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dataOnlyTransaction = $request->except('_token','$idEstimation','idWorksite',"nameInventory",'unity','quantity','unitaryPrice','idInventory','idConcept','nameConcept');
        $dataOnlyTransactionDetail = $request->except('_token','idWorksite',"nameInventory",'elaboratedDate','concept','notes','idProvider','nameProvider','providerType','conceptType','invoice','invoiceImage','invoiceProvider',"inoviceImage","idAccount","status");

        //  $newTransactionDetail = TransactionDetail::insert($dataStock);
        
        $newTransaction =   Transaction::insert([
            'elaboratedDate' => $dataOnlyTransaction['elaboratedDate'],
            'concept' => $dataOnlyTransaction['concept'],
            'idAccount' => $dataOnlyTransaction['idAccount'],
            'mount' => $dataOnlyTransaction['mount'],
            // 'invoice' => $dataOnlyTransaction['invoice'],
            // 'unity' => $dataOnlyTransaction['invoiceImage'],
            // 'quantity' => $dataOnlyTransaction['providerQuotes'],
            // 'payDay' => $dataOnlyTransaction['payDay'],
            // 'proofOfPayment' => $dataOnlyTransaction['proofOfPayment'],
            'notes' => $dataOnlyTransaction['notes'],
            'idProvider' => $dataOnlyTransaction['idProvider'],
            'nameProvider' => $dataOnlyTransaction['nameProvider'],
            'elaborateEmployee' => auth()->user()->id,
            'providerType' => $dataOnlyTransaction['providerType'],
            'conceptType' => $dataOnlyTransaction['conceptType'],
            'status' => $dataOnlyTransaction['status']
        ]);

        //Obtengo el ultimo registro 
        $getLastId = Transaction::latest('idTransaction')->first();
        
        $mewTransactionD =   TransactionDetail::insert([
            'idTransaction' => $getLastId->idTransaction, 
            'idEstimation' => $dataOnlyTransactionDetail['idEstimation'],
            'idInventory' => $dataOnlyTransactionDetail['idInventory'],
            'idConcept' => $dataOnlyTransactionDetail['idConcept'],
            'nameConcept' => $dataOnlyTransactionDetail['nameConcept'],
            'mount' => $dataOnlyTransactionDetail['mount'],
            'unity' => $dataOnlyTransactionDetail['unity'],
            'quantity' => $dataOnlyTransactionDetail['quantity'],
            'unitaryPrice' => $dataOnlyTransactionDetail['unitaryPrice']
        ]);

         if($mewTransactionD == 1 && $newTransaction == 1){
           Alert::success('Éxito', 'Se ha creado exitosamente');
         }else{
          Alert::error('Error', 'Al parecer ocurrio un error');
         }
    
        $modelJoined = Transaction::select('transactions.*','bank_accounts.nameAccount')
        ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
        ->orderBy('payDay', 'desc')
       // ->where('transactions.concept','Pendiente')
        ->paginate(400);
        $loading = true;

        return view('laravel.transaction.index', ['items' => $modelJoined ,'loading' => $loading] );
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
        
        $editTransaction = null;

        $editTransaction = Transaction::select('transactions.*','bank_accounts.nameAccount','providers.nameProvider')
        ->leftjoin('providers', 'providers.idProvider', '=', 'transactions.idProvider')
        ->leftjoin('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
         ->where( 'transactions.idTransaction', $idTrans  )
         ->first(); 
         if( !is_null($editTransaction) ){
            $actualProviders = Provider::select('providers.idProvider','providers.nameProvider')
            ->where('providers.status',true)
            ->where('providers.nameProvider', '<>',$editTransaction->nameProvider)
            ->get();
            $actualAccounts =  BankAccount::select('bank_accounts.idAccount','bank_accounts.nameAccount')
            ->where('bank_accounts.status',true)
            ->where('bank_accounts.nameAccount', '<>',$editTransaction->nameAccount)
            ->get();
         }else{
            $actualProviders = [];
            $actualAccounts = [];
            $editOnlyTransaction = Transaction::select('transactions.*')
            ->join('providers', 'providers.idProvider', '=', 'transactions.idProvider')
           ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
            ->where( 'transactions.idTransaction', $idTrans  )
            ->first();

            $editTransaction = $editOnlyTransaction;
         }
         
       
         $getTransactionDetail = TransactionDetail::select('transaction_details.*','inventories.nameInventory','estimations.nameEstimation')
        ->join('transactions', 'transactions.idTransaction', '=', 'transaction_details.idTransaction')
        ->join('inventories', 'inventories.idInventory', '=', 'transaction_details.idInventory')
        ->join('estimations', 'estimations.idEstimation', '=', 'transaction_details.idEstimation')
         ->where( 'transactions.idTransaction', $idTrans  )
         ->get();         

            //  if($editTransaction == null ){
            //   $editOnlyTransaction = Transaction::select('transactions.*')
            //   ->join('providers', 'providers.idProvider', '=', 'transactions.idProvider')
            //  ->join('bank_accounts', 'bank_accounts.idAccount', '=', 'transactions.idAccount')
            //   ->where( 'transactions.idTransaction', $idTrans  )
            //   ->first();

            //   $ediTransaction = $editOnlyTransaction;
            //  }else{
            //   $ediTransaction = $editTransaction;
            //  }
          
           $loading = false;
           return view('laravel.transaction.edit', ['item' => $editTransaction ,'itemsTDetails' => $getTransactionDetail , 'loading' => $loading, 'providersActive' => $actualProviders, 'accountActives' => $actualAccounts,] );
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
        ->select('nameMaterial','stock','idMaterial','unitaryPrice','unity','inventories.nameInventory','inventories.idInventory')
        ->join('inventories', 'inventories.idInventory', '=', 'materials.idInventory')

         //->where('materials.nameMaterial' ,'LIKE', '%Cubrecanto Melamina Blanco Frosty  C/P 2 mm 19 mm%')
          
          ->where('materials.nameMaterial' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('materials.category' ,'LIKE', '%'.$getMaterial.'%')
          ->orWhere('inventories.nameInventory' ,'LIKE', '%'.$getMaterial.'%')
          ->paginate(10);
        
        return $getData;
    }
}
