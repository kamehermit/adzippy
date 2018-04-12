<?php

$router->get('/login', ['as'=>'login','uses' => 'AuthController@get_login']);
$router->post('/login', ['as'=>'loginAuth','uses' => 'AuthController@post_login']);

$router->post('/register',['as'=>'register','uses'=>'AuthController@register']);

$router->get('/forgot',['as'=>'forgot','uses'=>'AuthController@get_forgot']);
$router->post('/forgot',['as'=>'forgotAuth','uses'=>'AuthController@post_forgot']);

$router->get('/password/reset/{token}',['as'=>'reset','uses'=>'AuthController@get_reset']);
$router->post('/password/reset/{token}',['as'=>'resetAuth','uses'=>'AuthController@post_reset']);