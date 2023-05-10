<?php

namespace App\Http\Resources;

use App\Models\CarModel;
use App\Models\MotorCycleModel;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->_id,
            'year' => $this->year,
            'color' => $this->color,
            'price' => $this->price,
            'type' => $this->vehicle()
        ];
    }

    public function vehicle()
    {
        if($this->vehicle_type == 1){
            return $a = MotorCycleModel::where('vehicle_id',$this->_id)->first();
        }else{
            return $a = CarModel::where('vehicle_id',$this->_id)->first();
        }
    }
}
