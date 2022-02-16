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
    return view('guest/filter');
});
 
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Host') //riaggiungere middleware('auth') 
    ->prefix('host')
    ->name('host.')
    ->group(function () {
        Route::resource('apartments', 'ApartmentController');
});
    

