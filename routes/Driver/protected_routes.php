<?php

use Illuminate\Http\Request;

$router->get('/get/user', function (Request $request) {
   	return $request->user();
});

$router->get('/get/address',['uses' => 'DriverAddressController@get_address']);
$router->get('/get/payment',['uses' => 'DriverPaymentController@get_payment']);
$router->get('/get/vehicle',['uses' => 'DriverVehicleController@get_vehicle']);
$router->get('/get/identity',['uses' => 'DriverIdentityController@get_identity']);
$router->get('/get/work',['uses' => 'DriverWorkController@get_work']);
$router->get('/get/profile',['uses' => 'DriverProfileController@get_profile']);
$router->put('/update/profile/email/{email}',['uses' => 'DriverProfileController@update_email']);
$router->put('/update/profile/name/{name}',['uses' => 'DriverProfileController@update_name']);
$router->post('/update/profile/password',['uses' => 'DriverProfileController@update_password']);

//Route::group(['middleware' => ['driver.kyc']],function(){	

$router->post('/add/address',['middleware'=>'kyc.lock','uses' => 'DriverAddressController@add_address']);
$router->put('/update/address',['middleware'=>'kyc.lock','uses' => 'DriverAddressController@update_address']);

$router->post('/add/payment',['middleware'=>'kyc.lock','uses' => 'DriverPaymentController@add_payment']);
$router->put('/update/payment',['middleware'=>'kyc.lock','uses' => 'DriverPaymentController@update_payment']);

$router->post('/add/vehicle',['middleware'=>'kyc.lock','uses' => 'DriverVehicleController@add_vehicle']);
$router->put('/update/vehicle',['middleware'=>'kyc.lock','uses' => 'DriverVehicleController@update_vehicle']);

$router->post('/add/identity',['middleware'=>'kyc.lock','uses' => 'DriverIdentityController@add_identity']);
$router->put('/update/identity',['middleware'=>'kyc.lock','uses' => 'DriverIdentityController@update_identity']);

$router->post('/add/work',['middleware'=>'kyc.lock','uses' => 'DriverWorkController@add_work']);
$router->put('/update/work',['middleware'=>'kyc.lock','uses' => 'DriverWorkController@update_work']);
//});

$router->post('/track',['middleware'=>'kyc.verify','uses' => 'DriverTrackingController@track']);
$router->get('/{id}/earnings',['middleware'=>'kyc.verify','uses' => 'DriverPaymentController@earn']);
$router->get('/get/campaign',['middleware'=>'kyc.verify','uses'=>'DriverTrackingController@campaign']);