<?php

use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Route;

//Public
Route::get('/', function () {return view('child');});
Route::get('/Landing', function () {
    return view('public.Landing');
})->name('Landing');
Route::get('/Articles', function () {
    return view('public.Articles');
})->name('Articles');
Route::get('/Property/Filter', function () {
    return view('public.PropertyFilter');
})->name('PropertyFilter');

//Guest
Route::get('/SignIn', 'Auth\LoginController@index')->name('SignIn');
Route::get('/Register/User', 'Auth\RegisterController@formUser')->name('UserRegister');
Route::get('/Register/Agent', 'Auth\RegisterController@formAgent')->name('AgentRegister');

//Auth
Route::put('/onUserRegister', 'Auth\RegisterController@onUserRegister')->name('onUserRegister');
Route::put('/onAgentRegister', 'Auth\RegisterController@onAgentRegister')->name('onAgentRegister');
Route::put('/onAdminRegister', 'AdminController@onAdminRegister')->name('onAdminRegister');

Route::put('/onSignIn', 'Auth\LoginController@onLogin')->name('onSignIn');
Route::get('/Logout', 'Auth\LoginController@logout')->name('Logout');

Route::get('/Dashboard', 'AuthController@dashboard')->middleware('role:User,Agent,Admin')->name('Dashboard');

Route::middleware(['role:Agent'])->group(function () {
    Route::get('/Dashboard/Property/My', 'PropertyController@my')->name('MyProperty');
    Route::get('/Dashboard/Property/New', 'PropertyController@new')->name('NewProperty');
    Route::get('/Dashboard/Property/{id}/Delete', 'PropertyController@delete')->name('DeleteProperty');

});

Route::middleware(['role:Admin'])->group(function () {
    Route::get('/Dashboard/Article/{id}/Delete', 'ArticleController@delete')->name('DeleteArticle');
    Route::get('/Dashboard/Articles', 'ArticleController@list')->name('Articles');
    Route::get('/Dashboard/Article/New', 'AdminController@newArticle')->name('NewArticle');
    Route::post('/Dashboard/onNewArticle', 'AdminController@onNewArticle')->name('onNewArticle');

    Route::get('/Dashboard/Guidelines/{id}/Delete', 'GuidelineController@delete')->name('DeleteGuidelines');
    Route::get('/Dashboard/Guidelines', 'GuidelineController@list')->name('Guidelines');
    Route::get('/Dashboard/NewGuideline', 'AdminController@newGuideline')->name('NewGuideline');
    Route::post('/Dashboard/onNewGuideline', 'AdminController@onNewGuideline')->name('onNewGuideline');

    Route::get('/Dashboard/ApproveAgent', 'AdminController@approveAgent')->name('ApproveAgent');
    Route::get('/Dashboard/onApproveAgent', 'AdminController@onAgentApproved')->name('onAgentApproved');

    Route::get('/Dashboard/New', 'AgentController@newProperty')->name('NewProperty');
    Route::post('/Dashboard/onNewProperty', 'PropertyController@onRegisterProperty')->name('onNewProperty');

    Route::get('/Dashboard/RegisterAdmin', 'AdminController@newAdmin')->name('AdminRegister');
});

Route::redirect('/', '/Landing');
