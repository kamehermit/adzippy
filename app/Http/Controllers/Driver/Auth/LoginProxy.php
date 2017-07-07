<?php

namespace App\Http\Controllers\Driver\Auth;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;

class LoginProxy extends Controller
{
    const REFRESH_TOKEN = 'refreshToken';
    private $apiConsumer;
    private $auth;
    private $cookie;
    private $db;
    private $request;
    private $userRepository;
    public function __construct(Application $app, User $userRepository) {
        $this->userRepository = $userRepository;
        $this->apiConsumer = new Client();//$app->make('apiconsumer');
        $this->auth = new Client();//$app->make('auth');
        $this->cookie = new Client();//$app->make('cookie');
        $this->db = new Client();//$app->make('db');
        $this->request = new Client();//$app->make('request');
    }
    /**
     * Attempt to create an access token using user credentials
     *
     * @param string $email
     * @param string $password
     */
    public function attemptLogin($email, $password){
        $user = $this->userRepository->where('email', $email)->first();
        if (!is_null($user)) {
            return $this->proxy('password', [
                'username' => $email,
                'password' => $password
            ]);
        }
        //throw new \InvalidCredentialsException();
    }
    /**
     * Attempt to refresh the access token used a refresh token that 
     * has been saved in a cookie
     */
    public function attemptRefresh(){
        $refreshToken = $this->request->cookie(self::REFRESH_TOKEN);
        return $this->proxy('refresh_token', [
            'refresh_token' => $refreshToken
        ]);
    }
    /**
     * Proxy a request to the OAuth server.
     * 
     * @param string $grantType what type of grant type should be proxied
     * @param array $data the data to send to the server
     */
    public function proxy($grantType, array $data = []){
    	$config = app()->make('config');
        $data = array_merge($data, [
            'client_id'     => env('PASSWORD_CLIENT_ID'),
            'client_secret' => env('PASSWORD_CLIENT_SECRET'),
            'grant_type'    => $grantType
        ]);
        //$response = $this->apiConsumer->post('/oauth/token', $data);
        $response = $this->apiConsumer->post(sprintf('%s/oauth/token', $config->get('app.url')), [
                'form_params' => $data
            ]);
        if (!$response) {
            throw new \InvalidCredentialsException();
        }
        $data = json_decode($response->getBody());
        // Create a refresh token cookie
        // $this->cookie->queue(
        //     self::REFRESH_TOKEN,
        //     $data->refresh_token,
        //     864000, // 10 days
        //     null,
        //     null,
        //     false,
        //     true // HttpOnly
        // );
        return [
            'access_token' => $data->access_token,
            'refresh_token' => $data->refresh_token,
            'expires_in' => $data->expires_in
        ];
    }
    /**
     * Logs out the user. We revoke access token and refresh token. 
     * Also instruct the client to forget the refresh cookie.
     */
    public function logout(){
        $accessToken = $this->auth->user()->token();
        $refreshToken = $this->db
            ->table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken->id)
            ->update([
                'revoked' => true
            ]);
        $accessToken->revoke();
        $this->cookie->queue($this->cookie->forget(self::REFRESH_TOKEN));
    }
}
