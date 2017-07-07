<?php

use Illuminate\Http\Request;

/* All OAuth protected routes under Driver domain */

$router->post('/logout', 'AuthController@logout');