<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PaymentController;

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
// Route::get('/login',[UserController::class,'login'])->name('login');

//class for logged in user
// Route::get('/class',[UserController::class,'class']);


Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/',[HomeController::class,'index'])->name('home.index');


Route::get('/crypto',[HomeController::class, 'crypto'])->name('crypto.crypto');

Route::post('/home',[VisitorController::class,'store']);

Route::post('/crypto',[ClientController::class,'store']);


Route::get('/pay',[ClassController::class,'pay'])->name('pay');
Route::post('/pay', [PaymentController::class,'redirectToGateway'])->name('pay');
// 0r use this fr shrtcut
//Route::view('/home','home');
//Route::view('/crypto','crypto');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
