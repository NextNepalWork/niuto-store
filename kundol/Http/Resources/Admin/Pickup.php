<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Admin\PickupDetail as PickupDetailResource;
use App\Models\Admin\PickupDetail;

class Pickup extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $pickup_detail = PickupDetail::where('pickup_id',$this->id)->where('language_id','1')->first();
        // dd($pickup_detail);
        //PickupDetailResource::collection($this->whenLoaded('detail'))
        return [
            'id' => $this->id,
            'is_active' => $this->is_active,
            'detail' => PickupDetailResource::collection($this->whenLoaded('detail')),
        ];
    }
}
