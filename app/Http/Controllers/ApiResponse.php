<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiResponse extends Controller
{
    public function sendResponse($code,$message,$data){
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
