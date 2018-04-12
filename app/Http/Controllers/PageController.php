<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function driver(){
    	return view('pages.driver');
    }

    public function advertiser(){
    	return view('pages.advertiser');
    }

    public function about(){
    	return view('pages.about');
    }

    public function faq(){
    	return view('pages.faq');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function traffic_data(Request $request){
        $data = $request->all();

        if(!isset($data['lat']) && !isset($data['long']))
            return $this->api_response(400,"Parameters missing","");
        
        return view('pages.traffic-data',['lat' => $data['lat'],'long'=>$data['long']]);
    }

    public function api_response($code, $message, $data){
        if($code == 200 || $code == 201){
            return [
                'status' => 'success',
                'status_code' => $code,
                'message' => $message,
                'data' => $data
            ];
        }
        else{
            return [
                'status' => 'error',
                'status_code' => $code,
                'message' => $message,
                'data' => $data
            ];
        }
    }

}
