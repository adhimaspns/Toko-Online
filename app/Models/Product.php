<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //? Over Write nama table
    protected $table = 'products';
    
    protected $guarded = ['id'];


    //? Membuat Relasi Dengan Nama LatestImage
        public function latestImage()
        {   
            //? Relasi Mengambil data terbaru 
            return $this->hasOne('App\Models\ImagesProduct', 'product_id', 'id')->latest();
        } 


     //? Membuat relasi
        //! $related, $foreignkey = null, $localKey = null
        public function imageRelation()
        {
            return $this->hasMany('App\Models\ImagesProduct', 'product_id', 'id');
        }
    
}
