<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DriverProfileController extends Controller
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

    public function get_profile(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = User::where(['id'=>$id])->get(['name','phone','email'])->first();
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

    public function update_email(Request $request, $email){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		if(!$email){
                $this->msg .= "The email field is required.;";
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
    		$profile = User::where(['id'=>$id])->update(['email' => $email ]);
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($profile){
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

    public function update_name(Request $request, $name){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		if(!$name){
                $this->msg .= "The name field is required.;";
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
    		$profile = User::where(['id'=>$id])->update(['name' => $name ]);
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($profile){
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

    public function update_password(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'current_password'          => 'required',
        		'new_password'              => 'required',
        		'password_confirmation' => 'required|same:new_password'
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
            $password = User::where(['id'=>$id])->get(['password'])->first();
            if(\Hash::check($data['current_password'],$password->password)){
            	$profile = User::where(['id'=>$id])->update(['password' => bcrypt($data['new_password']) ]);
            	if($profile){
            		return [
    					'status' => 'success',
    					'status_code' => 200,
    					'message' => 'All values updated',
    					'data' => ''
    				];
            	}
            }
            return [
                'status' => 'error',
                'status_code' => 401,
                'message' => 'Incorrect password',
                'data' => ''
                ];
    	}
    	catch(Exception $e){
    		return $this->error;
    	}
    }
}
