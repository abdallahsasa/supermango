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
Route::get('/soon', function () {
    return view('coming_soon');
});
Route::get('/contact', function () {
    return view('contact');
});




//Dashboard Routes

Route::get('/backoffice', function () {
    return view('dashboard.index');
});
