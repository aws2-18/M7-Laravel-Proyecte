<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/chat','ChatController@getWelcome');
Route::get('/chat/app','ChatController@getIndex');
//Route::group(['middleware'=>'auth'], function(){
Route::put('/chat/postCreate','ChatController@postCreate');
Route::get('/chat/app/premium','ChatController@getIndex2');

Route::get('/chat/show','ChatController@getShow');
Route::get('/chat/create','ChatController@getCreate');
Route::get('/chat/filtrar','ChatController@getFiltrar');
Route::get('/chat/user','ChatController@getUser');
Route::put('/char/postEdit/{name}','ChatController@postEdit');
//});
//Route::get('/chat/show/{id}','ChatController@getShow');
//Route::get('/chat/create','ChatController@getCreate');
//Route::get('chat/edit','ChatController@getEdit');
//Route::get('registro');
//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::get('/chat/create', function() {
//	return view('chat.create');
//});


Auth::routes();

Route::get('/', 'HomeController@getHome');
