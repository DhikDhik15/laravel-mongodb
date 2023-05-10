<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class MotorCycleModel extends Model
{
    protected $collection = 'motors';
    protected $connection = 'mongodb';
    protected $primaryKey = 'id';

    public function vehicle()
    {
        return $this->belongsTo(VehicleMode::class);
    }
}
