<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverAddress;

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
                return $this->apiResponse->sendResponse(200,'All values added','');
    		}
            return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    }

    public function get_address(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverAddress::where(['user_id'=>$id])->get(['address_line1','address_line2','city','pincode'])->first();

    		if($response){
                return $this->apiResponse->sendResponse(200,'All values fetched',$response);
    		}
            $this->json_data = [
                'address_line1' => '',
                'address_line2' => '',
                'city' => '',
                'pincode' => '',
            ];
    		return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
            $this->json_data = [
                'address_line1' => '',
                'address_line2' => '',
                'city' => '',
                'pincode' => '',
            ];
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.',$this->json_data);
    	}
    }

    public function update_address(Request $request){
    	try{
    		$id = $request->user()->id;
    		$address = DriverAddress::where('user_id',$id)->update($request->all());
    		if($address){
                return $this->apiResponse->sendResponse(200,'All values updated.','');
    		}
            return $this->apiResponse->sendResponse(500,'unable to update records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    }
}
