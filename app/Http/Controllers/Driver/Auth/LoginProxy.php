<?php

namespace App\Http\Controllers\Driver\Auth;

use App\Http\Controllers\ApiResponse;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;

class LoginProxy extends Controller
{
    const REFRESH_TOKEN = 'refreshToken';
    private $apiResponse;
    private $apiConsumer;
    private $auth;
    private $cookie;
    private $db;
    private $request;
    private $userRepository;
    
    public function __construct(Application $app, User $userRepository,ApiResponse $apiResponse) {
        $this->userRepository = $userRepository;
        $this->apiResponse = $apiResponse;
        $this->apiConsumer = new Client();
        $this->auth = $app->make('auth');
        $this->cookie = $app->make('cookie');
        $this->db = $app->make('db');
        $this->request = $app->make('request');
    }

    public function attemptLogin($phone, $password){
        $user = $this->userRepository->where('phone', $phone)->first();
        if (!is_null($user)) {
            $res = 1;
            $accessTokens = $this->token($user->id);
            foreach ($accessTokens as $accessToken) {
                $res = $res * $this->logout($accessToken->id);
            }

            return $this->proxy('password', [
                'username' => $phone,
                'password' => $password
            ]);
        }
        else{
        	$data = [
        		'access_token' => '',
            	'expires_in' => '',
            	'refresh_token' => '',
                'verified' => '',
            ];
            return $this->apiResponse->sendResponse(401,'The user credentials were incorrect.',$data);
        }
        
    }
    
    public function attemptRefresh($refreshToken,$phone){
        //$refreshToken = $this->request->cookie(self::REFRESH_TOKEN);
        return $this->proxy('refresh_token', [
            'refresh_token' => $refreshToken,
            'username' => $phone
        ]);
    }
    
    public function proxy($grantType, array $data = []){
    	$config = app()->make('config');
        $data = array_merge($data, [
            'client_id'     => env('PASSWORD_CLIENT_ID'),
            'client_secret' => env('PASSWORD_CLIENT_SECRET'),
            'grant_type'    => $grantType
        ]);

        try {
            $user = $this->userRepository->where('phone', $data['username'])->first();
        	$response = $this->apiConsumer->post(sprintf('%s/oauth/token', $config->get('app.url')), [
                'form_params' => $data
            ]);
            $data = json_decode($response->getBody());
	        $token_data = [
	        	'access_token' => $data->access_token,
	        	'expires_in' => $data->expires_in,
	            'refresh_token' => $data->refresh_token,
                'verified' => $user->verified,
	        ];
            return $this->apiResponse->sendResponse(200,'Login Successful',$token_data);

        }catch(\GuzzleHttp\Exception\BadResponseException $e){
        	$response = json_decode($e->getResponse()->getBody());
        	$data = [
                'access_token' => '',
                'expires_in' => '',
                'refresh_token' => '',
                'verified' => '',
            ];
            return $this->apiResponse->sendResponse($e->getCode(),$response->message,$data);
        }
	        
    }
    /**
     * Logs out the user. We revoke access token and refresh token. 
     * Also instruct the client to forget the refresh cookie.
     */
    public function logout($accessToken){
    	try{
    		//$accessToken = $this->auth->user()->token();
        	$refreshToken = $this->db
            	->table('oauth_refresh_tokens')
            	->where('access_token_id', $accessToken)
            	->update([
                	'revoked' => true
            	]);
        	if($refreshToken){
                if($this->revoke($accessToken)){
                    return 1;
                }    
            }
            return 0;
    	}
    	catch(Exception $e){

    	}
        
        //$this->cookie->queue($this->cookie->forget(self::REFRESH_TOKEN));
    }

    public function revoke($accessToken){
        try{
            $Token = $this->db
                ->table('oauth_access_tokens')
                ->where('id', $accessToken)
                ->update([
                    'revoked' => true
                ]);
            if($Token){
                return 1;
            }
            return 0;
        }
        catch(Exception $e){

        }
    }

    public function token($user_id){
        try{
            $token = $this->db
                ->table('oauth_access_tokens')
                ->where('user_id',$user_id)
                ->where('revoked',0)
                ->get(['id']);
            return $token;
        }
        catch(Exception $e){

        }
        
    }
}
