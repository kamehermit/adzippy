<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiResponse;
/*use App\Campaign;
use App\User;*/
use App\TrafficData;
use App\MapBlock;
use App\PopulationDensity;

class CampaignController extends Controller
{
	private $msg;
    private $apiResponse;
    private $json_data;
    
    public function __construct(ApiResponse $apiResponse){
        $this->msg="";
        $this->apiResponse=$apiResponse;
    }

    public function check_map_block($lat,$lon){
        $check = MapBlock::where(['lat'=>$lat,'long'=>$lon])->get()->first();
        if(is_null($check))
            return 1;
        return 0;
    }

    public function process_time($time){
        $data = explode('_', $time);
        $ttime = "";
        foreach ($data as $dat) {
            $ttime = $ttime.$dat.":";
        }
        $ttime = rtrim($ttime,":");
        return $ttime;
    }

    public function convert_time($timestamp){
        $data = explode(':', $timestamp);
        $data[2] = "00";
        $min = (int)$data[1]+4;
        $min = (int)((int)$min/5)*5;
        if($min < 10)
            return $data[0]."0".$min.$data[2];
        return $data[0].$min.$data[2];
    }

    public function check_time($id,$time){
        $check = TrafficData::where(['map_block_id'=>$id,'time'=>$time])->get()->first();
        if(is_null($check))
            return 1;
        return 0;
    }

    public function traffic_data(Request $request,$key){
    	try{
    		if($key != 'aksh89dsbsd09bs')
    			return $this->apiResponse->sendResponse(400,'wrong credentials',$this->json_data);
    		/*$map_stack = array();
    		$traffic_stack = array();*/
    		$data = $request->all();
    		foreach($data as $dat){
                $flag = 0;
    			$lat = $dat['lat'];
    			$lon = $dat['lon'];
    			$time = $dat['timestamp'];
    			$index = $dat['index'];

                if($this->check_map_block($lat,$lon)){
                    $response = new MapBlock();
                    $response->lat = $lat;
                    $response->long = $lon;
                    $response->save();
                }
                else{
                    $response = MapBlock::where(['lat'=>$lat,'long'=>$lon])->get()->first();
                }
                $id = $response->id;
                $timestamp = $this->process_time($time);
                $timestamp = $this->convert_time($timestamp);
                if($this->check_time($id,$timestamp)){
                    $insert =  new TrafficData();
                    $insert->map_block_id = $id;
                    $insert->time = $timestamp;
                    $insert->value = $index;
                    $insert->save();
                }
                else{
                    $value = TrafficData::where(['map_block_id'=>$id,'time'=>$timestamp])->get()->first();
                    $temp = ($value['value'] + $index)/2;
                    $insert = TrafficData::where(['map_block_id'=>$id,'time'=>$timestamp])->update(['value' => $temp]);
                }
                $flag = 1;

    			/*array_push($map_stack,$m_temp);*/
    		}
    		//return $track;
    		/*$response = \DB::table('driver_trackings')->insert($track);*/
    		if($flag){
    			return $this->apiResponse->sendResponse(200,'All values added.',$this->json_data);
    		}
    		return $this->apiResponse->sendResponse(500,'unable to add records.',$this->json_data);
    	}
    	catch(Exception $e){
    		
    	}
    }
}
