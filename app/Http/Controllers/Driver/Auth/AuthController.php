<?php

namespace App\Http\Controllers\Driver\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Driver\Auth\LoginProxy;
use App\Http\Requests\LoginRequest;
use App\User;
use App\Role;

class AuthController extends Controller
{
    private $loginProxy;
    private $error;
    private $role_driver;

    public function __construct(LoginProxy $loginProxy){
        $this->loginProxy = $loginProxy;
        $this->error = [
                'status' => 'error',
                'status_code' => 500,
                'message' => 'Internal server error',
                'data' => ''
            ];
        $this->role_driver = Role::where('name', 'driver')->first();
    }
    

    public function login(Request $request){
        try{
            $check = \Validator::make($request->all(), [
                'phone' => 'required|max:10|min:10',
                'password' => 'required',
            ]);
            if($check->fails()){
                $errors = $check->errors();
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $errors,
                    'data' => ''
                ];
            }
            $phone = $request->get('phone');
            $password = $request->get('password');

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
            $check = \Validator::make($request->all(), [
                'phone' => 'required|unique:users|max:10|min:10',
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);
            if($check->fails()){
                return [
                    'status' => 'error',
                    'status_code' => 400,
                    'message' => $check->errors(),
                    'data' => ''
                ];
            }
            $data = $request->only('name','email','phone','password');
            $driver = new User();
            $driver->name = $data['name'];
            $driver->email = $data['email'];
            $driver->phone = $data['phone'];
            $driver->password = bcrypt($data['password']);
            $driver->save();
            $driver->roles()->attach($this->role_driver);
            if($driver){
                return [
                    'status' => 'success',
                    'status_code' => 201,
                    'message' => 'User successfully registered.',
                    'data' => ''
                ];
            }
            else{
                return $this->error;
            }
        }
        catch(Exception $e){
            return $this->error;
        }
    }
}
