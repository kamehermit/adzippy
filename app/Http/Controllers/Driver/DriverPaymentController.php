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

    public function earn(Request $request,$id){
        try{
            $user_id = $request->user()->id;
            if(!$id){
                $this->msg .= "The type field is required.;";
                return $this->apiResponse->sendResponse(400,$this->msg,'');
            }
            if($id==1){
                $json_data = [
                    '16-12-2017' => [
                        'transaction_id'=>'4345b3453e4535b',
                        'earnings'=>'28.38'
                    ],
                    '17-12-2017' => [
                        'transaction_id'=>'4345b3453e4895t',
                        'earnings'=>'55.50'
                    ],
                    '18-12-2017' => [
                        'transaction_id'=>'1389s3453u4535b',
                        'earnings'=>'125.00'
                    ],
                    '19-12-2017' => [
                        'transaction_id'=>'4345b3453e9734h',
                        'earnings'=>'30.17'
                    ],
                    '20-12-2017' => [
                        'transaction_id'=>'4345b0172e4535b',
                        'earnings'=>'67.64'
                    ],
                    '21-12-2017' => [
                        'transaction_id'=>'9274b0893t4535q',
                        'earnings'=>'45.20'
                    ],
                    '22-12-2017' => [
                        'transaction_id'=>'4235b34553e4535',
                        'earnings'=>'98.00'
                    ],
                ];
                return $this->apiResponse->sendResponse(200,'All values fetched.',$json_data);    
            }
            elseif($id==2){
                $json_data = [
                    '12-2017' => '345.65',
                    '11-2017' => '145.23',
                    '10-2017' => '958.67',
                    '09-2017' => '345.40',
                    '08-2017' => '289.50'
                ];
                return $this->apiResponse->sendResponse(200,'All values fetched.',$json_data);
            }
            else
                return $this->apiResponse->sendResponse(400,'unable to fetch records.','');
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error.','');   
        }


    }
}
