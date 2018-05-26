<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users Info
Route::get('home', 'UsersController@index');
Route::get('home/{id}', 'UsersController@show');
Route::post('home', 'UsersController@store');
Route::put('home', 'UsersController@store');
Route::delete('home/{id}', 'UsersController@destroy');

//Users Debit
Route::get('debit', 'DebitController@index');
Route::get('debit/{id}', 'DebitController@show');
Route::post('debit', 'DebitController@store');
Route::put('debit', 'DebitController@store');
Route::delete('debit', 'DebitController@destroy');

//Users Credit
Route::get('credit', 'CreditController@index');
Route::get('credit/{id}', 'CreditController@show');
Route::post('credit', 'CreditController@store');
Route::put('credit', 'CreditController@store');
Route::delete('credit', 'CreditController@destroy');

//Admin Info
Route::get('admin', 'AdminController@index');
Route::get('admin/{id}', 'AdminController@show');
Route::post('admin', 'AdminController@store');
Route::put('admin', 'AdminController@store');
Route::delete('admin', 'AdminController@destroy');