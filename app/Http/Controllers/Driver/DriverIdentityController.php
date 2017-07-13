<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DriverIdentity;

class DriverIdentityController extends Controller
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

    public function get_identity(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverIdentity::where(['user_id'=>$id])->get(['aadhar_number','pan'])->first();

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
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
            $identity = new DriverIdentity();
            $identity->user_id = $id;
    		$identity->aadhar_number = $data['aadhar_number'];
    		$identity->pan = $data['pan'];
    		if($identity->save()){
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

    public function update_identity(Request $request){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		$identity = DriverIdentity::where(['user_id'=>$id])->update($request->all());
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($identity){
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
