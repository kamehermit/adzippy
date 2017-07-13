<?php

use Illuminate\Http\Request;

/* All OAuth protected routes under Driver domain */

$router->post('/logout', 'AuthController@logout');
$router->get('/otp/send',['middleware'=>'auth:api','uses' => 'AuthController@otp_send']);
$router->post('/otp/verify',['middleware'=>'auth:api','uses' => 'AuthController@otp_verify']);
$router->get('/otp/voice',['middleware'=>'auth:api','uses' => 'AuthController@otp_voice']);
$router->put('/otp/update/{phone}',['middleware'=>'auth:api','uses' => 'AuthController@update_phone']);