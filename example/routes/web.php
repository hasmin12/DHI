<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::resource('customer', CustomerController::class);
Route::post('/import', 'CustomerController@import')->name("customer-import");
Route::post('/export', 'CustomerController@export')->name("customer-export");
Route::post('/signin', 'AuthController@signin')->name("user.signin");
Route::post('/signup', 'AuthController@signup')->name("user.signup");

