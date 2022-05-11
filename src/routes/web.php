<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LandingController;

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

;

#Route::get('/','LandingController@index');
Route::resource('customer',CustomerController::class);
Route::resource('/',LandingController::class);
Route::get('/checkout', [App\Http\Controllers\LandingController::class, 'checkout']);
Route::get('/checkoutsupra', [App\Http\Controllers\LandingController::class, 'checkoutsupra']);


Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

