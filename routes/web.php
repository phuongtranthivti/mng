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
Route::get('/management','AuthController@getHome');


//Company ManagementRoute::group(['prefix'=>'/company'],function() {
Route::get('/company', 'CompanyController@getCompany')->name('company.get');
Route::get('/company/search', 'CompanyController@getSearchCompany')->name('search.get');

Route::get('/company_register', 'CompanyController@getRegister')->name('company_register.get');
Route::post('/company_register/action', 'CompanyController@postRegister')->name('company_register.post');

Route::get('/company_detail/{Code}', 'CompanyController@getCpnDetail')->name('company_detail.get');


//Branch Management

Route::get('/branch','BranchController@getHome')->name('branch.get');
Route::get('/branch/search', 'BranchController@getSearch')->name('br_search.get');

Route::get('/branch_register','BranchController@getRegister')->name('branch_register.get');
Route::post('/branch_register','BranchController@postRegister')->name('branch_register.post');

Route::get('/branch_detail/{br_code}','BranchController@getBrDetail')->name('branch_detail.get');


//Devision Management


Route::get('/devision','DevisionController@getHome')->name('devision.get');
Route::get('/devision/search', 'DevisionController@getSearch')->name('devision_search.get');

Route::get('/devision_register','DevisionController@getRegister')->name('devision_register.get');
Route::post('/devision_register','DevisionController@postRegister')->name('devision_register.post');

Route::get('/devision_detail/{dvs_code}','DevisionController@getDetail')->name('devision_detail.get');

