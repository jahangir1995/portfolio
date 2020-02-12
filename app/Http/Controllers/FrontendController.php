<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Post;
use App\Document;

class FrontendController extends Controller
{
    public function index(){
        $document = document::first();
    	return view('layout',compact('document'));
    }
    
    public function aboutme(){
    	return view('Pages.aboutme');
    }
    public function cv(){
    	return view('Pages.cv');
    }
    public function project(){
    	return view('Pages.project');
    }
    public function contact(){
    	return view('Pages.contact');
    }
     public function gallery(){
    	return view('Pages.gallery');
    }
	public function save(Request $request){
   	//return	$request->all();
		$data = new Message;
		$data->first_Name =$request->First_Name;
		$data->last_Name =$request->last_Name;
		$data->email =$request->email;
		$data->subject =$request->subject;
		$data->message =$request->message;
		$data->save();
		return redirect(route('contact'));
	}
    public function tag(){
        return "yes";
    }
}
