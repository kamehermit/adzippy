<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverIdentity;

class DriverIdentityController extends Controller
{
    private $msg;
    private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->apiResponse=$apiResponse;
        $this->msg="";
    }

    public function get_identity(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverIdentity::where(['user_id'=>$id])->get(['aadhar_number','pan'])->first();

    		if($response){
                return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
            $this->json_data = [
                'aadhar_number' => '',
                'pan' => ''
            ]);
            return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.',$this->json_data);
    	}
    }

    public function add_identity(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'aadhar_number' => 'required',
                'pan' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $identity = new DriverIdentity();
            $identity->user_id = $id;
    		$identity->aadhar_number = $data['aadhar_number'];
    		$identity->pan = $data['pan'];
    		if($identity->save()){
                return $this->apiResponse->sendResponse(200,'All values added.','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_identity(Request $request){
    	try{
    		$id = $request->user()->id;
    		$identity = DriverIdentity::where(['user_id'=>$id])->update($request->all());
    		if($identity){
                return $this->apiResponse->sendResponse(200,'All values updated.','');
    		}
            return $this->apiResponse->sendResponse(500,'unable to update records.','');
    	}
    	catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }
}
