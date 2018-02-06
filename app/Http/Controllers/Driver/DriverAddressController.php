<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverAddress;
use App\User;

class DriverAddressController extends Controller
{
    private $msg;
    private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->msg="";
        $this->apiResponse=$apiResponse;
    }

    public function add_address(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
            $verified['verified'] = $request->user()->verified;
    		$check = \Validator::make($request->all(), [
                'address_line1' => 'required',
                'address_line2' => 'required',
                'city' => 'required',
                'pincode' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $address = new DriverAddress();
            $address->user_id = $id;
    		$address->address_line1 = $data['address_line1'];
    		$address->address_line2 = $data['address_line2'];
    		$address->city = $data['city'];
    		$address->pincode = $data['pincode'];
            
    		if($address->save()){
                $driver = User::where(['id'=>$id])->update(['verified'=>3]);
                $verified['verified'] = 3;
                return $this->apiResponse->sendResponse(200,'All values added',$verified);
    		}
            return $this->apiResponse->sendResponse(500,'Internal Server Error.',$verified);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    }

    public function get_address(Request $request){
    	try{
    		$id = $request->user()->id;
            $verified['verified'] = $request->user()->verified;
    		$response = DriverAddress::where(['user_id'=>$id])->get(['address_line1','address_line2','city','pincode'])->first();
            $response['verified'] = $verified['verified'];
    		if($response){
                return $this->apiResponse->sendResponse(200,'All values fetched',$response);
    		}
            $this->json_data = [
                'address_line1' => '',
                'address_line2' => '',
                'city' => '',
                'pincode' => '',
                'verified' => ''
            ];
    		return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
            $this->json_data = [
                'address_line1' => '',
                'address_line2' => '',
                'city' => '',
                'pincode' => '',
                'verified' => ''
            ];
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.',$this->json_data);
    	}
    }

    public function update_address(Request $request){
    	try{
    		$id = $request->user()->id;
            $verified['verified'] = $request->user()->verified;
    		$address = DriverAddress::where('user_id',$id)->update($request->all());
    		if($address){
                return $this->apiResponse->sendResponse(200,'All values updated.',$verified);
    		}
            return $this->apiResponse->sendResponse(500,'unable to update records.',$verified);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    }
}
