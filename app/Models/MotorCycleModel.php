<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class MotorCycleModel extends Model
{
    protected $collection = 'motors';
    protected $connection = 'mongodb';
    protected $guarded = [];

    public function vehicle()
    {
        return $this->belongsTo(VehicleMode::class);
    }
}
