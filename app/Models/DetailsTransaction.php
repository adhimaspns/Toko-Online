<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsTransaction extends Model
{
    //? Overwrite nama tabel
    protected $table = 'details_transactions';

    //? Kolom yang tidak boleh di isi oleh user biasa
    protected $guarded = ['id'];
    
    //? Relasi product
    public function productRelation() 
    {
        return $this->hasOne(\App\Models\Product::class,'id','product_id');
    } 
}
