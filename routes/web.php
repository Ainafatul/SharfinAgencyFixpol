<?php

use Illuminate\Support\Facades\Route;


//Public
Route::get('/', function () {return view('child');});
Route::get('/Landing', function () {return view('public.Landing');})->name('Landing');
Route::get('/Articles', function () {return view('public.Articles');})->name('Articles');
Route::get('/Property/Filter', function () {return view('public.PropertyFilter');})->name('PropertyFilter');

//Guest
Route::get('/SignIn', 'Auth\LoginController@index')->name('SignIn');
Route::get('/Register/User', 'Auth\RegisterController@formUser')->name('UserRegister');
Route::get('/Register/Agent', 'Auth\RegisterController@formAgent')->name('AgentRegister');
Route::get('/Register/Admin', 'AdminController@formAdmin')->name('AdminRegister');

//Auth
Route::put('/onUserRegister', 'Auth\RegisterController@onUserRegister')->name('onUserRegister');
Route::put('/onAgentRegister', 'Auth\RegisterController@onAgentRegister')->name('onAgentRegister');
Route::put('/onAdminRegister', 'AdminController@onAdminRegister')->name('onAdminRegister');

Route::put('/onSignIn', 'Auth\LoginController@onLogin')->name('onSignIn');
Route::get('/Logout', 'Auth\LoginController@logout')->name('Logout');

//Property
//Route::get('/Properties', 'PropertyController@all')->name('PropertyList');
//Route::get('/Property/{id}', 'PropertyController@byId')->name('Property');
Route::get('/Property/New', 'AgentController@new')->name('NewProperty');
Route::get('/Property/onNewProperty', 'PropertyController@onRegisterProperty')->name('onNewProperty');
Route::post('/Property/onNewProperty', 'PropertyController@onRegisterProperty')->name('onNewProperty');
//Route::get('/Property/{id}/Edit', 'PropertyController@edit')->name('EditProperty');

//Admin
Route::get('/Dashboard/NewAgent', 'AdminController@newAgentList')->name('NewAgent');
Route::get('/Dashboard/onApproveAgent', 'AdminController@onAgentApproved')->name('onAgentApproved');


//Redirect
Route::redirect('/', '/Landing');
Route::get('/Dashboard', 'AuthController@Dashboard')->name('Dashboard');


