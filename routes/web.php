<?php

use Illuminate\Support\Facades\Route;


//Public
Route::get('/', function () {return view('child');});
Route::get('/Landing', function () {return view('public.Landing');})->name('Landing');
Route::get('/Articles', function () {return view('public.Articles');})->name('Articles');
Route::get('/Property/Filter', function () {return view('public.PropertyFilter');})->name('PropertyFilter');
Route::get('/Property/{id}', function () {return view('public.PropertyFilter');})->name('Property');

//Guest
Route::get('/SignIn', 'Auth\LoginController@index')->name('SignIn');
Route::get('/Register/User', 'Auth\RegisterController@formUser')->name('UserRegister');
Route::get('/Register/Agent', 'Auth\RegisterController@formAgent')->name('AgentRegister');
Route::get('/Register/Admin', 'Auth\RegisterController@formAdmin')->name('AdminRegister');

//Auth
Route::put('/onUserRegister', 'Auth\RegisterController@onUserRegister')->name('onUserRegister');
Route::put('/onAgentRegister', 'Auth\RegisterController@onAgentRegister')->name('onAgentRegister');
Route::put('/onAdminRegister', 'Auth\RegisterController@onAdminRegister')->name('onAdminRegister');

Route::put('/onSignIn', 'Auth\LoginController@onLogin')->name('onSignIn');
Route::get('/Logout', 'Auth\LoginController@logout')->name('Logout');

//Redirect
Route::redirect('/', '/Landing');
Route::get('/Dashboard', 'AuthController@Dashboard')->name('Dashboard');
Route::get('/Test', function () {return view('public.Landing');});
Route::get('/NewAdmin', function () {return view('public.RegisterAdmin');});

Route::get('/DashboardAdmin', function (){ return view('admin.Dashboard');})->name('DashboardAdmin');
