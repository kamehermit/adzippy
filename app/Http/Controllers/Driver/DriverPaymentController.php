<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverPayment;
use App\User;

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
            $verified['verified'] = $request->user()->verified;
    		$response = DriverPayment::where(['user_id'=>$id])->get(['account_number','account_holder_name','bank_name','ifsc','branch_code'])->first();
            $response['verified'] = $verified['verified'];
    		if($response){
                return $this->apiResponse->sendResponse(200,'All values fetched.',$response);
    		}
            $this->json_data = [
                'account_number' => '',
                'account_holder_name' => '',
                'bank_name' => '',
                'ifsc' => '',
                'branch_code' => '',
                'verified' => ''
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
            $verified['verified'] = $request->user()->verified;
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
                $driver = User::where(['id'=>$id])->update(['verified'=>4]);
                $verified['verified'] = 4;
                return $this->apiResponse->sendResponse(200,'All values added.',$verified);
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.',$verified);
    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal server error.','');
    	}
    }

    public function update_payment(Request $request){
    	try{
    		$id = $request->user()->id;
            $verified['verified'] = $request->user()->verified;
    		$payment = DriverPayment::where(['user_id'=>$id])->update($request->all());
    		if($payment){
                return $this->apiResponse->sendResponse(200,'All values updated.',$verified);
    		}
            return $this->apiResponse->sendResponse(400,'unable to update records.',$verified);
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
                    [
                        'date' => '16-12-2017',
                        'transaction_id'=>'4345b3453e4535b',
                        'earnings'=>'28.38'
                    ],
                    [
                        'date' => '17-12-2017',
                        'transaction_id'=>'4345b3453e4895t',
                        'earnings'=>'55.50'
                    ],
                    [
                        'date' => '18-12-2017',
                        'transaction_id'=>'1389s3453u4535b',
                        'earnings'=>'125.00'
                    ],
                    [
                        'date' => '19-12-2017',
                        'transaction_id'=>'4345b3453e9734h',
                        'earnings'=>'30.17'
                    ],
                    [
                        'date' => '20-12-2017',
                        'transaction_id'=>'4345b0172e4535b',
                        'earnings'=>'67.64'
                    ],
                    [
                        'date' => '21-12-2017',
                        'transaction_id'=>'9274b0893t4535q',
                        'earnings'=>'45.20'
                    ],
                    [
                        'date' => '22-12-2017',
                        'transaction_id'=>'4235b34553e4535',
                        'earnings'=>'98.00'
                    ],
                ];
                return $this->apiResponse->sendResponse(200,'All values fetched.',$json_data);    
            }
            elseif($id==2){
                $json_data = [
                    [
                        'date' => '12-2017',
                        'amount' => '345.65'
                    ],
                    [
                        'date' => '11-2017',
                        'amount' => '245.65'
                    ],
                    [
                        'date' => '10-2017',
                        'amount' => '758.45'
                    ],
                    [
                        'date' => '09-2017',
                        'amount' => '834.85'
                    ],
                    [
                        'date' => '08-2017',
                        'amount' => '736.97'
                    ],
                    [
                        'date' => '07-2017',
                        'amount' => '200.45'
                    ],
                    
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
