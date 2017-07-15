<?php

namespace App\Http\Controllers\Driver\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Driver\Auth\LoginProxy;
use App\Http\Controllers\ApiResponse;
use App\Http\Requests\LoginRequest;
use GuzzleHttp\Client;
use App\User;
use App\Role;

class AuthController extends Controller
{
    private $loginProxy;
    private $apiResponse;
    private $role_driver;
    private $otp_digits;
    private $MSG91_AUTHKEY;
    private $MSG91_SENDERID;
    private $send_request;
    private $msg;
    private $json_data;

    public function __construct(LoginProxy $loginProxy,ApiResponse $apiResponse){
        $this->loginProxy = $loginProxy;
        $this->apiResponse = $apiResponse;
        $this->json_data = [
                    'access_token' => '',
                    'expires_in' => '',
                    'refresh_token' => '',
                ];
        $this->role_driver = Role::where('name', 'driver')->first();
        $this->otp_digits = 6;
        $this->MSG91_AUTHKEY = env('MSG91_APP_KEY');
        $this->MSG91_SENDERID = env('MSG91_SENDER_ID');
        $this->send_request = new Client();
        $this->msg="";

    }
    

    public function login(Request $request){
        try{
            $check = \Validator::make($request->all(), [
                'phone' => 'required|max:10|min:10',
                'password' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,$this->json_data);
            }
            $phone = $request->get('phone');
            $password = $request->get('password');

            $response = $this->loginProxy->attemptLogin($phone, $password);
            return $response;
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error',$this->json_data);
        }
    }
    
    public function refresh(Request $request){
        try{
            $refreshToken = $request->get('refresh_token');
            $response = $this->loginProxy->attemptRefresh($refreshToken);
            return $response;
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error',$this->json_data);
        }
        
    }

    public function logout(Request $request){
        try{
            #$accessToken = $request->get('access_token');
            #$response = $this->loginProxy->logout();
            #return $response;
            $var = $request->user();
            return $var;
            /*$accessToken = $request->user()->token();
            $refreshToken = \DB::
                table('oauth_refresh_tokens')
                ->where('access_token_id', $accessToken->id)
                ->update([
                    'revoked' => true
                ]);
            $accessToken->revoke();
            return [
                'status' => 'success',
                'status_code' => 200,
                'message' => 'Token destroyed Successfully',
                'data' => ''
            ];*/
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error',$this->json_data);
        }
    }

    public function register(Request $request){
        try{
            $check = \Validator::make($request->all(), [
                'phone' => 'required|unique:users|max:10|min:10',
                'name' => 'required',
                'password' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                foreach ($errors->all() as $message) {
                    $this->msg .= $message.';';
                }
                return $this->apiResponse->sendResponse(400,$this->msg,$this->json_data);
            }
            $data = $request->only('name','phone','password');
            $driver = new User();
            $driver->name = $data['name'];
            $driver->phone = $data['phone'];
            $driver->password = bcrypt($data['password']);
            $driver->save();
            $driver->roles()->attach($this->role_driver);

            $response = $this->loginProxy->attemptLogin($data['phone'], $data['password']);
            if($driver){
                return $this->apiResponse->sendResponse(201,'User successfully registered.',$response['data']);
            }
            else{
                return $this->apiResponse->sendResponse(500,'Internal server error',$this->json_data);
            }
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal server error',$this->json_data);
        }
    }

    public function otp_send(Request $request){
        try{
            $phone = $request->user()->phone;
            $otp = rand(pow(10, $this->otp_digits-1), pow(10, $this->otp_digits)-1);
            $message = urlencode('Your OTP for Adzippy is : '.$otp);
            $response = $this->send_request->get('https://control.msg91.com/api/sendotp.php?authkey='.$this->MSG91_AUTHKEY.'&mobile='.$phone.'&message='.$message.'&sender='.$this->MSG91_SENDERID.'&otp='.$otp);
            $data = json_decode($response->getBody());
            $new_data = [
                'phone'     => $phone,
                'message_id' => $data->message,
                'type' => $data->type
            ];
            if($data->type == 'success'){
                return $this->apiResponse->sendResponse(200,'OTP sent successfully',$new_data);
            }
            else{
                return $this->apiResponse->sendResponse(500,'unable to send OTP',$new_data);
            }

        }
        catch(Exception $e){
            $new_data = [
                'phone'     => '',
                'message_id' => '',
                'type' => ''
            ];
            return $this->apiResponse->sendResponse(500,'Internal server error',$new_data);
        }
    }

    public function otp_verify(Request $request){
        try{
            $phone = $request->user()->phone;
            $otp = $request->only('otp');
            $response = $this->send_request->get('https://control.msg91.com/api/verifyRequestOTP.php?authkey='.$this->MSG91_AUTHKEY.'&mobile='.$phone.'&otp='.$otp['otp']);
            $data = json_decode($response->getBody());
            $new_data = [
                'phone'     => $phone,
                'message_id' => $data->message,
                'type' => $data->type
            ];
            if($data->type == 'success'){
                $driver = User::where(['phone'=>$phone])->update(['verified'=>1]);
                return $this->apiResponse->sendResponse(200,'OTP verified successfully',$new_data);
            }
            else{
                return $this->apiResponse->sendResponse(500,'unable to send OTP',$new_data);
            }


        }
        catch(Exception $e){
            $new_data = [
                'phone'     => '',
                'message_id' => '',
                'type' => ''
            ];
            return $this->apiResponse->sendResponse(500,'Internal server error',$new_data);
        }
    }

    public function otp_voice(Request $request){
        try{
            $phone = $request->user()->phone;
            $response = $this->send_request->get('https://control.msg91.com/api/retryotp.php?authkey='.$this->MSG91_AUTHKEY.'&mobile='.$phone.'&retrytype=voice');
            
            $data = json_decode($response->getBody());
            $new_data = [
                'phone'     => $phone,
                'message_id' => $data->message,
                'type' => $data->type
            ];
            if($data->type == 'success'){
                return $this->apiResponse->sendResponse(200,'OTP sent successfully',$new_data);
            }
            else{
                return $this->apiResponse->sendResponse(500,'unable to send OTP',$new_data);
            }

        }
        catch(Exception $e){
            $new_data = [
                'phone'     => '',
                'message_id' => '',
                'type' => ''
            ];
            return $this->apiResponse->sendResponse(500,'Internal server error',$new_data);
        }
    }

    public function update_phone(Request $request, $phone){
        try{
            $id = $request->user()->id;
            $driver = User::where(['id'=>$id])->update(['phone'=>$phone,'verified'=>0]);
            if($driver){
                $otp = rand(pow(10, $this->otp_digits-1), pow(10, $this->otp_digits)-1);
                $message = urlencode('Your OTP for Adzippy is : '.$otp);
                $response = $this->send_request->get('https://control.msg91.com/api/sendotp.php?authkey='.$this->MSG91_AUTHKEY.'&mobile='.$phone.'&message='.$message.'&sender='.$this->MSG91_SENDERID.'&otp='.$otp);
                $data = json_decode($response->getBody());
                $new_data = [
                    'phone'     => $phone,
                    'message_id' => $data->message,
                    'type' => $data->type
                ];
                if($data->type == 'success'){
                    return $this->apiResponse->sendResponse(200,'Phone number updated. OTP sent successfully',$new_data);
                }
                else{
                    return $this->apiResponse->sendResponse(500,'unable to send OTP.',$new_data);
                }
            }
            else{
                $new_data = [
                    'phone'     => '',
                    'message_id' => '',
                    'type' => ''
                ];
                return $this->apiResponse->sendResponse(500,'unable to update phone.',$new_data);
            }

        }
        catch(Exception $e){
            $new_data = [
                'phone'     => '',
                'message_id' => '',
                'type' => ''
            ];
            return $this->apiResponse->sendResponse(500,'Internal server error',$new_data);
        }
    }
}
