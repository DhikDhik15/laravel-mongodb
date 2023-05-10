<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VehicleModel extends Model
{
    protected $database = 'mongodb';
    protected $collection = 'vehicles';
    use HasFactory;
}
