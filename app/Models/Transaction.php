<?php

namespace App\Models;

//? Use DB
use DB; 
use Illuminate\Database\Eloquent\Model;

//? Use Model
// use App\Models; 

class Transaction extends Model
{
    //? Overwrite nama tabel
    protected $table = 'transactions';
    
    //? Kolom yang tidak di perbolehkan di isi oleh user
    protected $guarded = ['id']; 

    //? Generate kode transaksi secara otomatis
    public function scopeGetCode($query)
    {
			//! String(statis) Numeric(generate otomatis)  
			//! TR 00001 

			$string = "TR";

			$selectLastCode = DB::raw(" coalesce( MAX( CAST( RIGHT( transaction_code, 5) AS UNSIGNED )) ,0) as code ");

			
			$getData = $query->select($selectLastCode)->where('transaction_code','LIKE',"'&' . $string . '&'")->first();

			$number = sprintf("%' .05d ", $getData->code+1);
		

			return $string.$number;
    } 

    //? Relasi Detail
    public function detailRelation()
    {
			return $this->hasMany(\App\Models\DetailsTransaction::class, 'transaction_id','id');
		} 
		
		//? Relasi User
		public function userRelation()
		{
			return $this->hasOne(\App\Models\User::class, 'id','user_id');
		} 
}
