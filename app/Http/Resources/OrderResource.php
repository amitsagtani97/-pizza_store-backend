<?php

namespace App\Http\Resources;

use App\Utils\HelperUtil;

;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'total' => $this->total,
            'status' => $this->status,
            'created_at' => HelperUtil::nullOrDateTimeString($this->created_at),
            'updated_at' => HelperUtil::nullOrDateTimeString($this->updated_at),
            'choices' => ChoiceResource::collection($this->choices)
        ];
    }
}
