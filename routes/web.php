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

//Route::get('/', function () {
//    return view('layouts/main');
//});

//Route::get('/index', function () {
//    return view('index');
//});
//Route::get('/main', function () {
//    return view('main');
//});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/offers', 'OfferController@index')->name('offers');
Route::get('/offers/add', 'OfferController@add')->name('offers.add');
Route::get('/users', 'UserController@index')->name('users');
Route::post('/offers/add', 'OfferController@submite');
Route::get('/offers/edit/{offer}', 'OfferController@edit')->name('offers.edit');
Route::get('/admin', 'OfferController@admin')->name('offers.admin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
