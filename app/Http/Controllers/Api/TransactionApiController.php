<?php

namespace App\Http\Controllers\Api;

//? DB
use DB;
//? Auth 
use Auth;
//? Response
use Response;
//? Carbon
use Carbon\Carbon;

//TODO Models
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\DetailsTransaction; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionApiController extends Controller
{
    public function store(Request $request)
    {
        return $request->all();
    }
}
