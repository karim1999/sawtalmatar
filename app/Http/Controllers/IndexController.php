<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{


		public function get_content(){
	    	 $temp = (array)json_decode(file_get_contents('https://dash.devlab.ae/api/v1/site/https://sawtalmatar.com'));
	    	 return $temp;
	    }


	    public function index(){ 
	    	$api=$this->api;
    	//$api['app_url']=$temp['app_url'];
        	app()->setLocale(session('language'));

	    	//session(['language'=>'ar']);
	    	return view('welcome',compact('api'));
	    }




	    public $api;
		public function __construct(){
			$this->api=$this->get_content();
		 	$this->set_init_sessions();
		 }
		public function set_init_sessions(){



    	if(null === (session('language'))){
    		session(['language'=>'ar']);
    	} 
        

    	if(null === (session('popup_status'))){
    		session(['popup_status'=>'true']);
    	}
 
    	if(null === (session('header_status'))){
    		session(['intro_status'=>'true']);
    	}


    	/*if(null === (session('adv_status'))){
    		session(['adv_status'=>'false']);
    	}
 
    	if(null === (session('scroll_status'))){
    		session(['scroll_status'=>'false']);
    	}  */




    }
	public function turn_off_popup(){
         session(['popup_status'=>'false']);
    }
    public function turn_off_header(){
         session(['header_status'=>'false']);
    }
    public function switch_language(){ 
        if(null === (session('language'))){
            session(['language'=>'ar']);
        }  
        if(session('language') =="ar")
            session(['language'=>'en']);
        else
            session(['language'=>'ar']); 
        app()->setLocale(session('language')); 
        return redirect()->route('index');
    }




}
