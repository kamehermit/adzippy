<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DriverVehicle;

class DriverVehicleController extends Controller
{
	private $error;
	private $msg;
	//private $id;

	public function __construct(Request $request){
        $this->error = [
                'status' => 'error',
                'status_code' => 500,
                'message' => 'Internal server error',
                'data' => ''
            ];
        $this->msg="";
        //$this->id = $request->user()->id;
    }

    public function get_vehicle(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverVehicle::where(['user_id'=>$id])->get(['vehicle_number','registration_number','vehicle_make','vehicle_model'])->first();

    		if($response){
    			return [
    				'status' => 'success',
    				'status_code' => 200,
    				'message' => 'All values fetched',
    				'data' => $response
    			];
    		}
    		return $this->error;
    	}
    	catch(Exception $e){
    		return $this->error;
    	}
    }

    public function add_vehicle(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'vehicle_number' => 'required',
                'registration_number' => 'required',
                'vehicle_make' => 'required',
                'vehicle_model' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
            $vehicle = new DriverVehicle();
            $vehicle->user_id = $id;
    		$vehicle->vehicle_number = $data['vehicle_number'];
    		$vehicle->registration_number = $data['registration_number'];
    		$vehicle->vehicle_make = $data['vehicle_make'];
    		$vehicle->vehicle_model = $data['vehicle_model'];
    		if($vehicle->save()){
    			return [
    				'status' => 'success',
    				'status_code' => 200,
    				'message' => 'All values added',
    				'data' => ''
    			];
    		}
    		return $this->error;
    	}
    	catch(Exception $e){
    		return $this->error;
    	}
    }

    public function update_vehicle(Request $request){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		$vehicle = DriverVehicle::where(['user_id'=>$id])->update($request->all());
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($vehicle){
        		return [
    				'status' => 'success',
    				'status_code' => 200,
    				'message' => 'All values updated',
    				'data' => ''
    			];
    		}
    		return $this->error;
    	}
    	catch(Exception $e){
    		return $this->error;
    	}
    }
}
