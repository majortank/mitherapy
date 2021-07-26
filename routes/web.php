<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/Resources', function () {
    return view('resources');
});

Route::get('/Why-us', function(){
    return view('why');
});

Route::get('/How-it-works', function(){
    return view('how');
});

Route::get('/Book-A-Session', function(){
    return view('book');
});

Route::get('/Privacy-Policy', function(){
    return view('privacy_policy');
});

Route::get('/Terms-And-Conditions', function(){
    return view('terms_and_conditions');
});


Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('thabo.tankiso.thebe2gmail.com]');
	});
});


