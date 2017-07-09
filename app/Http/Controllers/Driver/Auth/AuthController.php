<?php

namespace App\Http\Controllers\Driver\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Driver\Auth\LoginProxy;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    private $loginProxy;
    private $error;

    public function __construct(LoginProxy $loginProxy){
        $this->loginProxy = $loginProxy;
        $this->error = [
                'status' => 'error',
                'status_code' => 500,
                'message' => 'Internal server error',
                'data' => ''
            ];
    }
    

    public function login(Request $request){
        try{
            $phone = $request->get('phone');
            $password = $request->get('password');

            //return $email;
            $response = $this->loginProxy->attemptLogin($phone, $password);
        return $response;
        }
        catch(Exception $e){
            return $this->error;
        }
    }
    
    public function refresh(Request $request){
        try{
            $refreshToken = $request->get('refresh_token');
            $response = $this->loginProxy->attemptRefresh($refreshToken);
            return $response;
        }
        catch(Exception $e){
            return $this->error;
        }
        
    }

    public function logout(){
        try{
            $response = $this->loginProxy->logout();
            return $response;
        }
        catch(Exception $e){
            return $this->error;
        }
    }

    public function register(Request $request){
        try{

        }
        catch(Exception $e){
            return $this->error;
        }
    }
}
