<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\MessageController;
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

//------------- categories -------------
Route::get('/categories/index', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);

//------------- End categories -------------


//------------- Products -------------
Route::get('/products/index', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
//------------- End Products -------------


//------------- Message -------------
Route::get('/message/index', [MessageController::class, 'index']);
Route::get('/message/create', [MessageController::class, 'create']);
//------------- End Message -------------
