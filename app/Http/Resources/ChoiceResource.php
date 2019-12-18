<?php


namespace App\Http\Resources;


use App\Utils\HelperUtil;
use Illuminate\Http\Resources\Json\JsonResource;

class ChoiceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => (int)$this->id,
            'pizza' => new PizzaResource($this->pizza),
            'quantity' => $this->quantity,
            'created_at' => HelperUtil::nullOrDateTimeString($this->created_at),
            'updated_at' => HelperUtil::nullOrDateTimeString($this->updated_at),
        ];
    }
}
