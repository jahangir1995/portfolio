<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use App\Message;

class MessageController extends Controller
{   
     public function __construct()
    {
        $this->middleware('auth');
    }
	public function show_message(){
        $message = message::all();
		return view('admin.message',compact('message'));
	}



    public function index(){
    	//return "yes";
    	// $pdf = App::make('dompdf.wrapper');
    	// $pdf->loadHTML('hello Banglasesh');
    	// return $pdf->stream();
    	$pdf = PDF::loadView('pages.cv');
         return $pdf->download('invoice.pdf');
    }
}
