<?php

namespace App\Http\Controllers\Driver\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Driver\Auth\LoginProxy;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
    private $loginProxy;

    public function __construct(LoginProxy $loginProxy)
    {
        $this->loginProxy = $loginProxy;
    }
    

    public function login(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        //return $email;
        $response = $this->loginProxy->attemptLogin($email, $password);
        return $response;
    }
    
    public function refresh(Request $request)
    {
    	$response = $this->loginProxy->attemptRefresh();
        return $response;
    }

    public function logout()
    {
        $this->loginProxy->logout();

        return $this->response(null, 204);
    }
}
