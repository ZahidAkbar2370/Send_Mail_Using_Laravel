<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$to_name = 'Zahid Jakhar';
	$to_email = 'zahidjakhar2370@gmail.com';
	$data = array('name'=>"Zahid Akbar", 'body' => "hi, this is laravel Testing");
	     
	Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
	    $message->to($to_email, $to_name)
	            ->subject('Artisans Web Testing Mail');
	    $message->from('zahidjakhar2370@gmail.com','Zahid Akbar');
	});
	echo "sent";
    }
}
