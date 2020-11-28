<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\LocationServiceProvider;

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
    return view('welcome');
});

Route::get('details', function () {

	$ip = '50.90.0.1';
    $data = \Location::get($ip);
    dd($data->zipCode);
   
});

 