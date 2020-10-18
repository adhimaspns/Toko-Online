<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //? Menampilkan seluruh data yang ada pada database 
        // return parent::toArray($request);

        //? Filter data yang ingin di tampilkan kepada user
        return [
            'id' => $this->id,
            'product' => ucfirst($this->product),
            'price' => (int) $this->price,
            'stock' => (int) $this->stock,
            'description' => $this->description,
            'updated_at' => $this->updated_at,
        ];
    }
}
