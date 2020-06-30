<?php

use App\Http\Middleware\Role;
use App\Property;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

//Public
Route::get('/', function () {
    return view('child');
});
Route::get('/Landing', function () {
    return view('public.Landing');
})->name('Landing');
Route::get('/onSubscribeNewsletter', function () {
    return view('public.Landing');
})->name('onSubscribeNewsletter');
Route::get('/Articles', function () {
    return view('public.Articles', ['datas' => \App\Article::all()]);
})->name('Articles');
Route::get('/Property/Filter', 'PropertyController@filter')->name('PropertyFilter');
Route::get('/Article/{id}', 'ArticleController@show')->name('Article');

//Guest
Route::get('/SignIn', 'Auth\LoginController@index')->name('SignIn');
Route::put('/onSignIn', 'Auth\LoginController@onLogin')->name('onSignIn');
Route::get('/Register/User', 'Auth\RegisterController@formUser')->name('UserRegister');
Route::get('/Register/Agent', 'Auth\RegisterController@formAgent')->name('AgentRegister');

Route::get('/Agent/List', 'AgentController@list')->name('AgentList');
Route::get('/Agent/{id}', 'AgentController@detail')->name('AgentDetail');

Route::get('/Property/{id}', 'PropertyController@detail')->name('PropertyDetail');

//Auth
Route::put('/onUserRegister', 'Auth\RegisterController@onUserRegister')->name('onUserRegister');
Route::put('/onAgentRegister', 'Auth\RegisterController@onAgentRegister')->name('onAgentRegister');
Route::put('/onAdminRegister', 'AdminController@onAdminRegister')->name('onAdminRegister');

//Need Login
Route::get('/Logout', 'Auth\LoginController@logout')->middleware('role:User,Agent,Admin')->name('Logout');
Route::get('/Dashboard', 'AuthController@dashboard')->middleware('role:User,Agent,Admin')->name('Dashboard');

Route::middleware(['role:Agent'])->group(function () {
    Route::get('/Dashboard/Property/My', 'PropertyController@my')->name('MyProperty');
    Route::get('/Dashboard/Property/New', 'PropertyController@new')->name('NewProperty');
    Route::post('/Dashboard/Property/onNew', 'PropertyController@onNew')->name('onNewProperty');
    Route::get('/Dashboard/Property/{id}/Delete', 'PropertyController@delete')->name('DeleteProperty');

});

Route::middleware(['role:Admin'])->group(function () {

    Route::get('/Dashboard/Article/{id}/Delete', 'ArticleController@delete')->name('DeleteArticle');
    Route::post('/Dashboard/onNewArticle', 'AdminController@onNewArticle')->name('onNewArticle');
    Route::get('/Dashboard/Article/New', 'AdminController@newArticle')->name('NewArticle');
    Route::get('/Dashboard/MyArticle', 'ArticleController@list')->name('MyArticle');
    Route::get('/Dashboard/Article/{id}/Update', 'ArticleController@update')->name('UpdateArticle');
    Route::post('/Dashboard/Article/{id}/onUpdate', 'ArticleController@onUpdate')->name('onUpdateArticle');

    Route::get('/Dashboard/About/{id}/Delete', 'AboutController@delete')->name('DeleteAbout');
    Route::post('/Dashboard/onNewAbout', 'AboutController@onNewAbout')->name('onNewAbout');
    Route::get('/Dashboard/About/New', 'AboutController@newAbout')->name('NewAbout');
    Route::get('/Dashboard/About', 'AboutController@list')->name('About');
    Route::get('/Dashboard/About/{id}/Update', 'AboutController@update')->name('UpdateAbout');
    Route::post('/Dashboard/About/{id}/onUpdate', 'AboutController@onUpdate')->name('onUpdateAbout');

    Route::get('/Dashboard/Guidelines/{id}/Delete', 'GuidelineController@delete')->name('DeleteGuidelines');
    Route::post('/Dashboard/onNewGuideline', 'AdminController@onNewGuideline')->name('onNewGuideline');
    Route::get('/Dashboard/NewGuideline', 'AdminController@newGuideline')->name('NewGuideline');
    Route::get('/Dashboard/Guidelines', 'GuidelineController@list')->name('Guidelines');
    Route::get('/Dashboard/Guidelines/{id}/Update', 'GuidelineController@update')->name('UpdateGuidelines');
    Route::post('/Dashboard/Guidelines/{id}/onUpdate', 'GuidelineController@onUpdate')->name('onUpdateGuidelines');

    Route::get('/Dashboard/onApproveAgent', 'AdminController@onAgentApproved')->name('onAgentApproved');
    Route::get('/Dashboard/ApproveAgent', 'AdminController@approveAgent')->name('ApproveAgent');

    Route::get('/Dashboard/NewsLetterSubscriber', 'NewsLetterSubscriberController@SubEmail')->name('NewsLetterSubscriber');
    Route::get('/Dashboard/ExportExcel', 'NewsLetterSubscriberController@ExportExcel')->name('ExportExcel');

    Route::get('/Dashboard/RegisterAdmin', 'AdminController@newAdmin')->name('AdminRegister');
});

Route::redirect('/', '/Landing');
