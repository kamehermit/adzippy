<?php

namespace App\Http\Controllers\Advertiser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\MailController;

class AuthController extends Controller
{
    private $mail;

    public function __construct(MailController $mail){
        $this->mail = $mail;
    }

    public function get_login(){
    	return view('pages.login');
    }

    public function post_login(Request $request){
    	try{
            $check = \Validator::make($request->all(), [
                'email' => 'required|exists:users',
                'password' => 'required',
            ]);
            $data = $request->only('email','password');
            if (Auth::attempt($data)){
                return redirect('/dashboard');
            }
            else{
                return back()->withInput()->withErrors(['errors' => 'Username or password is invalid']);
            }
        }
        catch(Exception $e){

        }
    }

    public function get_forgot(){
    	return view('pages.forgot');
    }

    public function post_forgot(Request $request){
    	try{

        }
        catch(Exception $e){

        }
    }

    public function get_reset($token){
    	return 0;
    }

    public function post_reset(Request $request,$token){
    	return 0;
    }

    public function register(Request $request){
        try{
            $check = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|Unique:users',
                'budget' => 'required',
                'duration' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ]);
        }
        catch(Exception $e){

        }
    }

    public function contact(Request $request){
        try{
            /*$check = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                
            ]);*/
            $this->validate($request,User::$contact_validation_rules);
            $data = $request->only('name','email','message');
            $response = $this->$mail->send($data['name'],$data['email'],$data['message'],20);
        }
        catch(Exception $e){

        }
    }
}