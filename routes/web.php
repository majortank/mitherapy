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

Route::get('/home', function () {
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

Route::get('/therapist-search', function(){
    return view('search');
});

Route::get('/book-a-session', function(){
    return view('book');
});

Route::get('/privacy-policy', function(){
    return view('privacy_policy');
});

Route::get('/terms-and-conditions', function(){
    return view('terms_and_conditions');
});