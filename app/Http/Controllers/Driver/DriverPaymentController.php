<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DriverPayment;

class DriverPaymentController extends Controller
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

    public function get_payment(Request $request){
    	try{
    		$id = $request->user()->id;
    		$response = DriverPayment::where(['user_id'=>$id])->get(['account_number','account_holder_name','bank_name','ifsc','branch_code'])->first();

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
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $this->msg,
                    'data' => ''
                ];
            }
            $payment = new DriverPayment();
            $payment->user_id = $id;
    		$payment->account_holder_name = $data['account_holder_name'];
    		$payment->bank_name = $data['bank_name'];
    		$payment->account_number = $data['account_number'];
    		$payment->ifsc = $data['ifsc'];
    		$payment->branch_code = $data['branch_code'];
    		if($payment->save()){
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

    public function update_payment(Request $request){
    	try{
    		//return $request->all();
    		$id = $request->user()->id;
    		$payment = DriverPayment::where(['user_id'=>$id])->update($request->all());
    		//$request = array_merge($request->all(), ['user_id' => $id]);
    		//return $request->all()->put('user_id', $id);
    		if($payment){
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
