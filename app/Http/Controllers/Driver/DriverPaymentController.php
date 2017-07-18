<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverPayment;

class DriverPaymentController extends Controller
{
    private $msg;
	private $apiResponse;
    private $json_data;

	public function __construct(ApiResponse $apiResponse){
        $this->apiResponse=$apiResponse;
        $this->msg="";
    }

    public function get_payment(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverPayment::where(['user_id'=>$id])->get(['account_number','account_holder_name','bank_name','ifsc','branch_code'])->first();

    		if($response){
                return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
            $this->json_data = [
                'account_number' => '',
                'account_holder_name' => '',
                'bank_name' => '',
                'ifsc' => '',
                'branch_code' => ''
            ];
            return $this->apiResponse->sendResponse(500,'unable to fetch records.',$this->json_data);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.',$this->json_data);
    	}
    }

    public function add_payment(Request $request){
    	try{
    		$id = $request->user()->id;
    		$data = $request->all();
    		$check = \Validator::make($request->all(), [
                'account_holder_name' => 'required',
                'bank_name' => 'required',
                'account_number' => 'required',
                'ifsc' => 'required',
                'branch_code' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            $payment = new DriverPayment();
            $payment->user_id = $id;
    		$payment->account_holder_name = $data['account_holder_name'];
    		$payment->bank_name = $data['bank_name'];
    		$payment->account_number = $data['account_number'];
    		$payment->ifsc = $data['ifsc'];
    		$payment->branch_code = $data['branch_code'];
    		if($payment->save()){
                return $this->apiResponse->sendResponse(200,'All values added.','');
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.','');
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_payment(Request $request){
    	try{
    		$id = $request->user()->id;
    		$payment = DriverPayment::where(['user_id'=>$id])->update($request->all());
    		if($payment){
                return $this->apiResponse->sendResponse(200,'All values updated.','');
    		}
            return $this->apiResponse->sendResponse(400,'unable to update records.','');
    	}
    	catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }
}
