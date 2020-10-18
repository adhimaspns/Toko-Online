<?php

// use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//? Route ketika awal halaman di buka
Route::get('/', function () {
    return view('auth.login');


  //? Untuk mengatasi agar user yang sudah login, tidak bisa mengakses halaman login lagi
})->middleware('guest');


Auth::routes(
    //? Untuk menonaktifkan Register
    ['register' => false]
);

Route::get('test', function() {
    return view('auth.log');
});

//? Route Home
Route::get('/home', 'HomeController@index')->name('home');


//? Route agar mencegah user mengakses halaman data user, dan di kembalikan ke halaman login
Route::group(['middleware' => ['auth']], function () {



    //? Route Menampilkan data User
        Route::get('/users', 'Web\UsersController@index')->name('data.users');

    //? Route Product
    Route::resource('product', 'Web\ProductsController');

    //? Route Transaction
    Route::resource('transaction', 'Web\TransactionWebController',

        [
            //! Disable Function
            //? menuliskan function yang di perlukan
            'only' => ['index','show','edit','update'],
        ]
    );












    //? Route Index
    // Route::get('/product', 'Web\ProductsController@index')->name('product.index');
    //? Route Create
        // Route::get('/product/create', 'Web\ProductsController@create')->name('product.create');
    //? Route Store
        // Route::post('/product', 'Web\ProductsController@store')->name('product.store');
    //? Route Untuk Show Details
        // Route::get('/product/{idproduct}', 'Web\ProductsController@show')->name('product.show');
    //? Memanpilkan form edit
        // Route::get('/product/{idproduct}/edit', 'Web\ProductsController@edit')->name('product.edit');
    //? Proses Update
    // Route::put('/product/{idproduct}', 'Web\ProductsController@update')->name('product.update');
    //? Destroy
    // Route::delete('/product/{idproduct}' , 'Web\ProductsController@destroy')->name('product.destroy');
});


//? Transaction
Route::post('transaction','Api\TransactionApiController@store');
