<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //? Menampilkan seluruh data 
        // return parent::toArray($request);

        //? Filter data yang ingin di tampilkan kepada user
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'email'    => $this->email,
            'username' => $this->username,
            'date'     => $this->created_at->diffForHumans(),
        ]; 
    }
}
