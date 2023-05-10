<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    protected $database = 'mongodb';
    protected $collection = 'vehicles';
    use HasFactory;
}
