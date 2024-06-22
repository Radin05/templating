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
    return view('layouts.backend');
})->middleware('auth');

Route::get('data', function () {
    return view('data');
});


Auth::routes(
    ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// with CRUD
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);

use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);


