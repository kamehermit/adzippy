<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',['as'=>'index','uses'=>'PageController@index']);
Route::get('driver',['as'=>'driver','uses'=>'PageController@driver']);
Route::get('advertiser',['as'=>'advertiser','uses'=>'PageController@advertiser']);
Route::get('commuter',['as'=>'commuter','uses'=>'PageController@commuter']);
Route::get('about',['as'=>'about','uses'=>'PageController@about']);
Route::get('faq',['as'=>'faq','uses'=>'PageController@faq']);
Route::get('advertiser/register',['as'=>'signup','uses'=>'PageController@signup']);
Route::get('blog',['as'=>'blog','uses'=>'PageController@blog']);
Route::get('contact',['as'=>'contact','uses'=>'PageController@contact']);
Route::post('contact',['as'=>'contactAuth','uses'=>'Advertiser\AuthController@contact']);

Route::get('traffic/data',['as'=>'traffic','uses'=>'PageController@traffic_data']);

Route::post('traffic/data/{key}',['as'=>'traffic.data','uses'=>'CampaignController@traffic_data']);