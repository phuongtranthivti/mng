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

//Login
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');

//SignUp
Route::get('/signup', 'AuthController@getSignup');
Route::post('/signup', 'AuthController@postSignup');



//Company ManagementRoute::group(['prefix'=>'/company'],function() {
    Route::get('/company', 'CompanyController@getCompany');
    Route::get('/company', 'CompanyController@getSearchCompany');
    Route::get('/company_register', 'CompanyController@getRegister');

    Route::get('/company_detail/{Code}','CompanyController@getCpnDetail');




