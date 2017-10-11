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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


Route::get('alumni/register/step1', 'AlumniController@firstStep');
Route::post('step1', 'AlumniController@handleFirstStep');


Route::get('alumni/register/step2', 'AlumniController@lastStep');
Route::post('step2', 'AlumniController@handleLastStep');


Route::get('alumni/register/result/{code}', 'AlumniController@registerResult');


Route::get('alumni/{code}/qr', 'AlumniController@getQrCode');
Route::get('alumni/{code}/qr_download', 'AlumniController@downloadQrCode');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('summary', 'AdminController@summary');


    Route::get('register', 'AdminController@register');
    Route::post('register', 'AdminController@registerWithCode');


    Route::get('search', 'AdminController@search');
    Route::post('search', 'AdminController@searcher');


    Route::get('alumni/list', 'AdminController@alumniList');


    Route::get('alumni/show/{code}', 'AdminController@showAlumni');


    Route::get('alumni/export', 'AdminController@exportAlumni');

});


Route::get('/test', 'TestController@testSubStr');