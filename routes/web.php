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

Route::group([
    'prefix' => 'hosting',
    'as' => 'hosting.',
], function() {
    Route::get('', 'HostingController@index')->name('index');
    
    Route::get('pago-exito', 'HostingController@paymentSuccess')->name('payment-success');
    Route::get('pago-esperando', 'HostingController@paymentWaiting')->name('payment-waiting');
});
