<?php

namespace App\Http\Controllers\Api;

//? Use DB 
use DB;
//? Use Carbon 
use Carbon\Carbon;
//? Use Model 
use App\Models\Product;
//? Use ProductResource  
use App\Http\Resources\ProductResource;

//? Use Reponse
use Response; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        //? Menampilkan seluruh data yang ada pada Model Product
        $products = Product::paginate(5);

        // return ProductResource::collection($products);


        //? jika data produk kosong, maka tampilkan pesan "Data not Found" 
        if ($products->isEmpty()) {
            return Response::json([
                'status' => [
                    'code' => 404,
                    'description' => 'Data Not Found',
                ]
            ],400);
        } 
        //? Jika ada data pada database, maka akan ditampilkan  
        else {

            return ProductResource::collection($products)->additional([
                'status' => [
                    'code' => 200,
                    'description' => 'Jumlah Data Produk = ' . $products->count()
                ]
            ]);
            
        }
    }
}
