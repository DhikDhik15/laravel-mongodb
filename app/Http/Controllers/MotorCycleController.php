<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\MotorRepository;

class MotorCycleController extends Controller
{
    protected $motor;
    protected function __construct(MotorRepository $motor)
    {
        $this->motor = $motor;
    }
    public function store(Request $request)
    {
        
    }
}
