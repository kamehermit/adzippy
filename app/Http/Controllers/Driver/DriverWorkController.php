<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverWorkingDesignation;

class DriverWorkController extends Controller
{
	private $msg;
	private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->apiResponse=$apiResponse;
        $this->msg="";
    }

    public function get_work(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverWorkingDesignation::where(['user_id'=>$id])->get(['designation'])->first();

    		if($response){
    			return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
    		$this->json_data = [
                'designation' => ''
            ];
            return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.',$this->json_data);
    	}
    }

    public function add_work(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'designation' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $work = new DriverWorkingDesignation();
            $work->user_id = $id;
    		$work->designation = $data['designation'];
    		if($work->save()){
    			return $this->apiResponse->sendResponse(200,'All values added.','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_work(Request $request){
    	try{
    		$id = $request->user()->id;
    		$work = DriverWorkingDesignation::where(['user_id'=>$id])->update($request->all());
    		if($work){
        		return $this->apiResponse->sendResponse(200,'All values updated.','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to update records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }
}
