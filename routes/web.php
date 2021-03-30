<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mai;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    $to_name = 'Zahid Jakhar';
	$to_email = 'zahidjakhar2370@gmail.com';
	$data = array('name'=>"Zahid Akbar", 'body' => "hi, this is laravel Testing");
	     
	Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
	    $message->to($to_email, $to_name)
	            ->subject('Artisans Web Testing Mail');
	    $message->from('zahidjakhar2370@gmail.com','Zahid Akbar');
	});
});

// Route::get('mail',"HomeController@index");
