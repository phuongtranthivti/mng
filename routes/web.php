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
Route::get('/login', 'AuthController@getLogin')->name('login.get');
Route::post('/login', 'AuthController@postLogin');

//SignUp
Route::get('/signup', 'AuthController@getSignup');
Route::post('/signup/action', 'AuthController@postSignup')->name('signup.post');


//Home Management
Route::get('/management','CompanyController@getCompany');


//Company ManagementRoute::group(['prefix'=>'/company'],function() {
Route::get('/company', 'CompanyController@getCompany');
Route::get('/company/search', 'CompanyController@getSearchCompany')->name('search.get');
Route::get('/company_register', 'CompanyController@getRegister')->name('company_register.get');

Route::get('/company_detail/{Code}', 'CompanyController@getCpnDetail')->name('company_detail.get');

//mng
Route::get('/mng','AuthController@getHome');



