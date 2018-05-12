<?php

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

Route::get('/admin', function () {
    return view('results.phone');
})->middleware('can:admin, App\Phone;');




Route::resource('phone', 'PhonesController');
Route::resource('airtime', 'AirtimesController');
Route::resource('shopm','ShopmController');
Route::resource('closing','ClosingController');
Route::resource('lipa', 'LipaController');
Route::resource('card','CardsController');
Route::resource('wholesale','WholeController');
Route::resource('admin','AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
