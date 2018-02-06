<?php

use Illuminate\Http\Request;

/* All OAuth public routes under driver doamin */

$router->post('/login', ['uses' => 'AuthController@login']);
$router->post('/login/refresh', 'AuthController@refresh');
$router->post('/register', ['uses' => 'AuthController@register']);

$router->post('/password/init',['uses'=>'AuthController@forgot']);
$router->post('/password/reset',['uses'=>'AuthController@reset']);

$router->get('/get/profile/{phone}',['uses'=>'AuthController@picture']);