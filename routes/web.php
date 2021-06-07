<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;


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

//signup get url and post form input routes
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup',[UserController::class,'signup'])->name('signup');


// login get url and post form input routes
Route::get('/login',function()
{
    return view('login');
});

Route::get('/logout',function()
{
    Session::forget('user');
    return redirect('login');
});

Route::post('/login',[UserController::class,'login'])->name('login');

Route::get('/livestream',[ClassController::class,'livestream'])->name('livestream');


// Route::get('/login',[UserController::class,'login'])->name('login');

//class for logged in user
// Route::get('/class',[UserController::class,'class']);


Route::get('/home',[HomeController::class,'index'])->name('home.index');


Route::get('/crypto',[HomeController::class, 'crypto'])->name('crypto.crypto');

Route::post('/home',[VisitorController::class,'store']);

Route::post('/crypto',[ClientController::class,'store']);



// 0r use this fr shrtcut
//Route::view('/home','home');
//Route::view('/crypto','crypto');