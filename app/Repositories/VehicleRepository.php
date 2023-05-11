<?php

namespace App\Repositories;

use MongoDB\Client;
use App\Models\CarModel;
use App\Models\VehicleModel;
use App\Models\MotorCycleModel;


class VehicleRepository
{
    /**
     * STORE VEHICLE AND CONDITION
     * IF VEHICLE TYPE = 1, THEN INSERT IN COLLECTION MOTOR, ELSE COLLECTION CAR
    */
    public function store(array $data)
    {
        if ($data['vehicle_type'] == 1) {

            $vehicle = VehicleModel::create([
                'ID' => random_int(0, 999),
                'year' => $data['year'],
                'color' => $data['color'],
                'price' => $data['price'],
                'vehicle_type' => $data['vehicle_type']
            ]);

            $motor = MotorCycleModel::create([
                'vehicle_id' => $vehicle->ID,
                'motor_machine' => $data['motor_machine'],
                'suspension_type' => $data['suspension_type'],
                'type_transmision' => $data['type_transmision']
            ]);

            return $vehicle;

        } else {

            $vehicle = VehicleModel::create([
                'ID' => random_int(0, 999),
                'year' => $data['year'],
                'color' => $data['color'],
                'price' => $data['price'],
                'vehicle_type' => $data['vehicle_type']
            ]);

            $car = CarModel::create([
                'vehicle_id' => $vehicle->ID,
                'car_machine' => $data['car_machine'],
                'count_passengers' => $data['count_passengers'],
                'car_type' => $data['car_type']
            ]);

            return $vehicle;
        }

    }

    public function getVehicle()
    {
        return $collection = VehicleModel::get();
    }

    public function getVehicleById(string $_id)
    {
        return $collection = VehicleModel::where('_id',$_id)->get();
    }
}
