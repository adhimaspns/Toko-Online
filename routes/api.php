<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//? Testing Response 
// Route::get('hello', function() {
//     $biodata = [
//         'nama' => 'Adhimas',
//         'email' => 'adhimaspnsmjr1@gmail.com',
//         'gender' => 'laki-laki',
//         'sosialmedia' => [
//             [
//                 'facebook' => 'adhimanugraha',
//                 'instagram' => 'adhimaspns',
//             ]
//         ]
//     ];

//     return \Response::json($biodata);
// });


//! Users 

//? Response Data users
Route::get('users', 'Api\UsersApiController@index'); 

// Route::get('user/{iduser}', 'Api\UsersApiController@user');
// Route::get('auth/login', 'Api\UsersApiController@login');
// Route::get('auth/register', 'Api\UsersApiController@register');
// Route::get('auth/update/{iduser}', 'Api\UsersApiController@update');
// Route::get('logout/{iduser}', 'Api\UsersApiController@logout');


//! Product
Route::get('products', 'Api\ProductController@products'); 