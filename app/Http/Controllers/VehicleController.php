<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\VehicleResource;
use App\Repositories\VehicleRepository;
use App\Http\Resources\VehicleResourceDetail;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $vehicle;

    public function __construct(VehicleRepository $vehicle)
    {
        $this->vehicle = $vehicle;
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $this->vehicle->store($request->all());
            return response()->json([
                'status' => 200,
                'messages' => 'success'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function getVehicle()
    {
        try {
            $data = VehicleResource::collection($this->vehicle->getVehicle());
            return response()->json([
                'status' => 200,
                'message' => $data
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getVehicleId($_id)
    {
        try {
            $data = VehicleResourceDetail::collection($this->vehicle->getVehicleById($_id));
            return response()->json([
                'status' => 200,
                'message' => $data
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
