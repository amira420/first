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
    return view('welcome');
});
Route:: get('/DonerRegs/create','DonerRegistrationController@create');
Route:: post('/DonerRegs/store','DonerRegistrationController@store');
Route:: get('/DonerReq/create','DonerRequestController@create');
Route:: post('/DonerReq/store','DonerRequestController@store');
