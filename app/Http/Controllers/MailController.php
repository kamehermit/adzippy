<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
	/*private $type;

    public function __construct(){
        
    }*/

    public function send($name,$email,$message,$type){
        try{
        	$data = ['email'=>$email,'name'=>$name];
        	$template = '';	
        	$subject = '';
        	switch ($type) {
        		case 10:
        			$template = 'email.signup-user';
        			$subject = '';
        			break;
        		case 11:
        			$template = 'email.signup-contact';
        			$subject = '';
        			break;
        		case 20:
        			$template = 'email.contact-user';
        			$subject = '';
        			break;
        		case 22:
        			$template = 'email.contact-contact';
        			$subject = '';
        			break;
        		case 30:
        			$template = 'email.forgot';
        			$subject = '';
        			break;
        		default:
        			$template = 'email.default';
        			$subject = '';
        			break;
        	}

        	Mail::send(['html'=>$template], ['event'=>$message['xyz'],'registration'=>$message['abc']], function ($m) use ($data){
            $m->from('no-reply@adzippy.com', 'Adzippy');
            $m->to($data['email'], $data['name'])->subject($subject);
        });
        }
        catch(Exception $e){

        }
    }
}
