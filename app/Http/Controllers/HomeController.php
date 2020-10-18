<?php

namespace App\Http\Controllers;

//? Use Model Details Transactions 
    use App\Models\DetailsTransaction;
//? Use Model Product 
    use App\Models\Product;
//? Use Model Transaction 
    use App\Models\Transaction;
//? Use Model User 
    use App\Models\User;

use Illuminate\Http\Request;
//? Use Component Carbon 
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        //? Menghitung dan menampilkan transaksi bulan ini 
        $transactions = Transaction::whereMonth('created_at',Carbon::now()->format('m'))->count();

        //? Menghitung dan menampilkan produk yang terjual dalam sebulan terakhir
        $productSale = DetailsTransaction::whereMonth('created_at',Carbon::now()->format('m'))->sum('qty');

        //? Menampilkan data User kecuali Admin
        $customers = User::where('is_admin',false)->count();
        
        //? Menampilkan data produk 
        $products = Product::count();

        // dd($transactions, $productSale,$customers, $products);

        //? menampilkan halaman dashboard dan memparsing data
        return view('admin.dashboard', compact('customers', 'products', 'transactions', 'productSale'));
    }
}
