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
}
