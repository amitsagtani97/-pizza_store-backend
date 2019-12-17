<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int)$this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image_link' => $this->image_link,
            'is_veg' => $this->is_veg,
        ];
    }
}
