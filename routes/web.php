<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\ContactUs\ContactUsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\WebsiteProfile\WebsiteProfileController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//---------------------------------------Backoffice----------------------------------------------------

Route::get('/backoffice', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

//Dashboard Routes
//, 'middleware' => ['auth', 'verified']
Route::group(['prefix' => 'backoffice'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

//------------- categories -------------
    Route::get('/categories/index', [CategoryController::class, 'index'])->name('dashboard.category.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('dashboard.category.create');
    Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('dashboard.category.edit');
    Route::post('/categories/create', [CategoryController::class, 'store'])->name('dashboard.category.store');
    Route::put('/categories/update', [CategoryController::class, 'update'])->name('dashboard.category.update');
//------------- End categories -------------

//------------- Products -------------
    Route::get('/products/index', [ProductController::class, 'index'])->name('dashboard.product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/products/edit', [ProductController::class, 'edit'])->name('dashboard.product.edit');
    Route::post('/products/create', [ProductController::class, 'store'])->name('product.store');
    Route::put('/products/update', [ProductController::class, 'update'])->name('product.update');
//------------- End Products -------------


//------------- Message -------------
    Route::get('/contact/index', [ContactUsController::class, 'index'])->name('contact.index');
//------------- End Message -------------

//------------- Website Profile -------------
    Route::get('/website-profile/index', [WebsiteProfileController::class, 'create'])->name('website_profile.create');
    Route::put('/website-profile/index', [WebsiteProfileController::class, 'update'])->name('website_profile.update');
//------------- End Message -------------

});
//FrontEnd Routes
Route::get('/', [FrontendController::class, 'soon'])->name('home.product.index');
Route::get('/home', [FrontendController::class, 'index'])->name('home.product.index');
Route::get('/soon', [FrontendController::class, 'soon'])->name('home.product.soon');

//------------- Message -------------
Route::get('/contact', [ContactUsController::class, 'create'])->name('contact');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');
//------------- End Message -------------

