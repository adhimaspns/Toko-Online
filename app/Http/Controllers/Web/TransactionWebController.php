<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
//? Use Model DetalsTransaction 
use App\Models\DetailsTransaction;
//? Use Model Transaction 
use App\Models\Transaction;
//? Use Request 
use Illuminate\Http\Request;

class TransactionWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //? Menampilkan data dengan relasi
        $transactions = Transaction::with(['userRelation','detailRelation'])->paginate(20);

        //? return dan mengirim data dengan with
        return view('admin.transaction.index')->with(['transactions' => $transactions ]);
        // dd($transaction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //? Menampilkan detail produk yang di dapat dari Model DetailsTransaction 
        $transaction = DetailsTransaction::with('productRelation')->where('transaction_id',$id)->get();

        // dd($transaction);

        //? return dan mengirim data dengan with
        return view('admin.transaction.detail')->with(['transaction' => $transaction ]); 
    }
    

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


}
