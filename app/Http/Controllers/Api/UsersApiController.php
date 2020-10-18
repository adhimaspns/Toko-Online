<?php

namespace App\Http\Controllers\Api;

//? Use Response 
use Response;
//? Use Models
use App\Models\User; 
use App\Http\Controllers\Controller;
//? Use Request  
use Illuminate\Http\Request;

use App\Http\Resources\UsersResource;

class UsersApiController extends Controller
{
    //? Function menampilkan data
    public function index(){

        //? Mengambil data dari Model User dengan Paginate 5 data perhalaman 
        $users = User::paginate(5); 
    
        // return Response::json($users);
        //?  Menampilkan data yang sudah di filter pada UserResource
        return UsersResource::collection($users);
    }
}
