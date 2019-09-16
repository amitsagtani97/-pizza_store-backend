<?php

namespace App\Http\Resources;

use App\Utils\HelperUtil;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
      'display_name' => $this->display_name,
      'email' => $this->email,
      'address' => $this->address,
      'phone_number' => $this->phone_number,
      'created_at' => HelperUtil::nullOrDateTimeString($this->created_at),
    ];
  }
}
