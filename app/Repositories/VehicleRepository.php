<?php

namespace App\Repositories;

use MongoDB\Client;
use App\Models\VehicleModel;


class VehicleRepository
{
    /**
     * STORE VEHICLE AND CONDITION
     * IF VEHICLE TYPE = 1, THEN INSERT IN COLLECTION MOTOR, ELSE COLLECTION CAR
    */
    public function store(array $data)
    {
        if ($data['vehicle_type'] == 1) {
            $collection_vehicle = (new Client)->sales->vehicles;

            $vehicle = $collection_vehicle->insertOne([
                'year' => $data['year'],
                'color' => $data['color'],
                'price' => $data['price'],
                'vehicle_type' => $data['vehicle_type']
            ]);

            $collection_motor = (new Client)->sales->motors;
            $motor = $collection_motor->insertOne([
                'vehicle_id' => $vehicle->getInsertedId(),
                'motor_machine' => $data['motor_machine'],
                'suspension_type' => $data['suspension_type'],
                'type_transmision' => $data['type_transmision']
            ]);

            return $vehicle;

        } else {
            $collection_vehicle = (new Client)->sales->vehicles;

            $vehicle = $collection_vehicle->insertOne([
                'year' => $data['year'],
                'color' => $data['color'],
                'price' => $data['price'],
                'vehicle_type' => $data['vehicle_type']
            ]);

            $collection_car = (new Client)->sales->cars;
            $motor = $collection_car->insertOne([
                'vehicle_id' => $vehicle->getInsertedId(),
                'car_machine' => $data['car_machine'],
                'count_passengers' => $data['count_passengers'],
                'car_type' => $data['car_type']
            ]);

            return $vehicle;
        }

    }
}
