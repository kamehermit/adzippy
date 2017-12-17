<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
use App\DriverTracking;

class DriverTrackingController extends Controller
{
	private $msg;
    private $apiResponse;
    private $json_data;

    public function __construct(ApiResponse $apiResponse){
        $this->msg="";
        $this->apiResponse=$apiResponse;
    }
    
    public function track(Request $request){
    	try{
    		$track = array();
    		$id = $request->user()->id;
    		$data = $request->all();
    		foreach($data as $dat){
    			$temp['user_id'] = $id;
    			$temp['lat'] = $dat['lat'];
    			$temp['long'] = $dat['long'];
    			$temp['time'] = $dat['time'];
    			array_push($track,$temp);
    		}
    		//return $track;
    		$response = \DB::table('driver_trackings')->insert($track);
    		if($response){
    			return $this->apiResponse->sendResponse(200,'All values added.',$this->json_data);
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.',$this->json_data);

    	}
    	catch(Exception $e){
    		return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
    	}
    }

    public function campaign(Request $request){
        try{
            $this->json_data =[
                'campaign_name' => 'Burger King',
                'campaign_banner' => \URL::asset('/images/burger_king.jpg'),
                'money_earned' => 2418.90,
                'impressions' => 5000,
                'distance_travelled' => 48
            ];

            return $this->apiResponse->sendResponse(200,'All values fetched.',$this->json_data);            
        }
        catch(Exception $e){
            return $this->apiResponse->sendResponse(500,'Internal Server Error.','');
        }
    }
}
