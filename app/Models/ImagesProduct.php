<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    //? Over Write nama tabel, jika penamaan table tidak sesuai dengan aturan jamak 
    protected $table = 'images_products';

    protected $guarded = 'id';


    //? Relasi Hasone
    public function productRelation()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
   
}
