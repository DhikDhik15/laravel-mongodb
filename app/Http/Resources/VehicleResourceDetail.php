<?php

namespace App\Http\Resources;

use App\Models\CarModel;
use App\Models\MotorCycleModel;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResourceDetail extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->_id,
            'year' => $this->year,
            'color' => $this->color,
            'price' => $this->price,
            'type' => $this->vehicle_type == 1 ? $this->motor($this->ID) : $this->car($this->ID)
        ];
    }

    public function motor($motor)
    {
        return $a = MotorCycleModel::where('vehicle_id',$motor)->first();
    }

    public function car($car)
    {
        return $b = CarModel::where('vehicle_id', $car)->first();
    }

}
