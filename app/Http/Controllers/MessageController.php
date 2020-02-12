<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use Message;

class MessageController extends Controller
{
	public function show_message(){
		return view('admin.message');
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
