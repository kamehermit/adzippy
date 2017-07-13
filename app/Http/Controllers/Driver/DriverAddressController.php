<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DriverAddress;

class DriverAddressController extends Controller
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
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
            $address = new DriverAddress();
            $address->user_id = $id;
    		$address->address_line1 = $data['address_line1'];
    		$address->address_line2 = $data['address_line2'];
    		$address->city = $data['city'];
    		$address->pincode = $data['pincode'];
    		if($address->save()){
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

    public function get_address(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverAddress::where(['user_id'=>$id])->get(['address_line1','address_line2','city','pincode'])->first();

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

    public function update_address(Request $request){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		$address = DriverAddress::where('user_id',$id)->update($request->all());
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($address){
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
