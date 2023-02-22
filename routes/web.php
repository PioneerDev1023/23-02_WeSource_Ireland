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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/inner-page', function () {
    return view('inner-page');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/quote', function () {
    return view('quote');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/services', function () {
    return view('services');
});

