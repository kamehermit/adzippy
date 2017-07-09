<?php

use Illuminate\Http\Request;

/* All OAuth public routes under driver doamin */

$router->post('/login', ['uses' => 'AuthController@login']);
$router->post('/login/refresh', 'AuthController@refresh');
$router->post('/register', ['uses' => 'AuthController@register']);