<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\User;

class UsersController extends Controller
{
    //?Method Index
    public function index()
    {
        //? Menambil data dari model User dan menampilkan dengan Paginate sebanyak 10 data yang berurutan sesuai nama

        //? Menampilkan data dari model User dan mempaginate sebanyak 10 data perhalaman dan berurutan sesuai a-z 
        $users = User::orderBy('name', 'asc')->paginate(10);
        
        //? Parsing data ke halaman admin.master.user.index
        return view('admin.master.user.index', compact('users')); 
    } 
}
