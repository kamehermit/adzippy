<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\User;

class DriverProfileController extends Controller
{
    private $msg;
	private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->apiResponse=$apiResponse;
        $this->msg="";
    }

    public function get_profile(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = User::where(['id'=>$id])->get(['name','phone','email'])->first();
    		if($response){
    			return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
    		$this->json_data = [
                'name' => '',
                'phone' => '',
                'email' => ''
            ];
            return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.',$this->json_data);
    	}
    }

    public function update_email(Request $request, $email){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		if(!$email){
                $this->msg .= "The email field is required.;";
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
    		$profile = User::where(['id'=>$id])->update(['email' => $email ]);
    		if($profile){
    			return $this->apiResponse->sendResponse(200,'All values updated','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to update records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_name(Request $request, $name){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		if(!$name){
                $this->msg .= "The name field is required.;";
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
    		$profile = User::where(['id'=>$id])->update(['name' => $name ]);
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($profile){
        		return $this->apiResponse->sendResponse(200,'All values updated','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to update records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_password(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'current_password'          => 'required',
        		'new_password'              => 'required',
        		'password_confirmation' => 'required|same:new_password'
            ];
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $password = User::where(['id'=>$id])->get(['password'])->first();
            if(\Hash::check($data['current_password'],$password->password)){
            	$profile = User::where(['id'=>$id])->update(['password' => bcrypt($data['new_password']) ]);
            	if($profile){
            		return $this->apiResponse->sendResponse(200,'All values updated','');
            	}
            }
            return $this->apiResponse->sendResponse(401,'Incorrect password.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }
}
