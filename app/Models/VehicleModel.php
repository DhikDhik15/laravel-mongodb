<?php

namespace App\Models;

use App\Models\CarModel;
use App\Models\MotorCycleModel;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleModel extends Model
{
    protected $database = 'mongodb';
    protected $collection = 'vehicles';
    protected $primaryKey = 'id';


    public function car()
    {
        return $this->hasOne(CarModel::class);
    }

    public function motor()
    {
        return $this->hasMany(MotorCycleModel::class, 'vehicle_id');
    }
}
