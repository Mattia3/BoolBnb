<?php

use Illuminate\Support\Facades\Auth;
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
    return view('host.apartments.messages');
});

Auth::routes();

Route::get('/search', 'HomeController@index')->name('search');

Route::middleware('auth')
->namespace('Host') //riaggiungere middleware('auth') 
->prefix('host')
->name('host.')
->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('apartments', 'ApartmentController');
    Route::get('messages', 'MessageController@index')->name('messages');
    Route::get('/apartments/{apartment}/sponsor', 'SponsorController@index')->name('apartments.sponsor');
    Route::post('/payment/process/{apartment}', 'SponsorController@process')->name('payment.process');
});


Route::get('/{apartment}', 'HomeController@show')->name('show');
Route::post('/messages/{apartment}', 'MessageController@store')->name('message.store');