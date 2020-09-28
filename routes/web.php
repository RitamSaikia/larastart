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

// This route is for payment initiate page
// Route::get('/payment-initiate', function () {
//     return view('payment-initiate');
// });

// for Initiate the order
// Route::post('/payment-initiate-request', 'PaymentController@Initiate');

// for Payment complete
// Route::post('/payment-complete', 'PaymentController@Complete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');