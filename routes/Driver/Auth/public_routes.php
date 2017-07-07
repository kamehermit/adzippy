<?php

use Illuminate\Http\Request;

/* All OAuth public routes under driver doamin */

$router->post('/login', 'AuthController@login');
$router->post('/login/refresh', 'AuthController@refresh');