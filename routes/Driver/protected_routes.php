<?php

use Illuminate\Http\Request;

$router->get('/get/user', function (Request $request) {
    return $request->user();
});
$router->get('/get/address',['uses' => 'DriverAddressController@get_address']);
$router->post('/add/address',['uses' => 'DriverAddressController@add_address']);
$router->put('/update/address',['uses' => 'DriverAddressController@update_address']);

$router->get('/get/payment',['uses' => 'DriverPaymentController@get_payment']);
$router->post('/add/payment',['uses' => 'DriverPaymentController@add_payment']);
$router->put('/update/payment',['uses' => 'DriverPaymentController@update_payment']);

$router->get('/get/vehicle',['uses' => 'DriverVehicleController@get_vehicle']);
$router->post('/add/vehicle',['uses' => 'DriverVehicleController@add_vehicle']);
$router->put('/update/vehicle',['uses' => 'DriverVehicleController@update_vehicle']);

$router->get('/get/identity',['uses' => 'DriverIdentityController@get_identity']);
$router->post('/add/identity',['uses' => 'DriverIdentityController@add_identity']);
$router->put('/update/identity',['uses' => 'DriverIdentityController@update_identity']);

$router->get('/get/work',['uses' => 'DriverWorkController@get_work']);
$router->post('/add/work',['uses' => 'DriverWorkController@add_work']);
$router->put('/update/work',['uses' => 'DriverWorkController@update_work']);

$router->post('/track',['uses' => 'DriverTrackingController@track']);

$router->get('/get/profile',['uses' => 'DriverProfileController@get_profile']);
$router->put('/update/profile/email/{email}',['uses' => 'DriverProfileController@update_email']);
$router->put('/update/profile/name/{name}',['uses' => 'DriverProfileController@update_name']);
$router->post('/update/profile/password',['uses' => 'DriverProfileController@update_password']);