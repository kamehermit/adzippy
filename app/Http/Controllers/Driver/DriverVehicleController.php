<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverVehicle;
use App\User;

class DriverVehicleController extends Controller
{
	private $msg;
    private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->apiResponse=$apiResponse;
        $this->msg="";
    }

    public function get_vehicle(Request $request){
    	try{
    		$id = $request->user()->id;
            $verified['verified'] = $request->user()->verified;
    		$response = DriverVehicle::where(['user_id'=>$id])->get(['vehicle_number','registration_number','vehicle_make','vehicle_model','cab_service'])->first();
            $response['verified'] = $verified['verified'];
    		if($response){
    			return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
    		$this->json_data = [
                'vehicle_number' => '',
                'registration_number' => '',
                'vehicle_make' => '',
                'vehicle_model' => '',
                'verified' => ''
            ];
            return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.',$this->json_data);
    	}
    }

    public function add_vehicle(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
            $verified['verified'] = $request->user()->verified;
    		$check = \Validator::make($request->all(), [
                'vehicle_number' => 'required',
                'registration_number' => 'required',
                'vehicle_make' => 'required',
                'vehicle_model' => 'required',
                'cab_service' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $vehicle = new DriverVehicle();
            $vehicle->user_id = $id;
    		$vehicle->vehicle_number = $data['vehicle_number'];
    		$vehicle->registration_number = $data['registration_number'];
    		$vehicle->vehicle_make = $data['vehicle_make'];
    		$vehicle->vehicle_model = $data['vehicle_model'];
            $vehicle->cab_service = $data['cab_service'];
    		if($vehicle->save()){
                $driver = User::where(['id'=>$id])->update(['verified'=>2]);
                $verified['verified'] = 2;
                return $this->apiResponse->sendResponse(200,'All values added.',$verified);
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.',$verified);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_vehicle(Request $request){
    	try{
    		$id = $request->user()->id;
            $verified['verified'] = $request->user()->verified;
    		$vehicle = DriverVehicle::where(['user_id'=>$id])->update($request->all());
    		if($vehicle){
                return $this->apiResponse->sendResponse(200,'All values updated.',$verified);
    		}
    		return $this->apiResponse->sendResponse(500,'unable to update records.',$verified);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }
}
