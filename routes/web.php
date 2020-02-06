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
// dd(App::environment());
// dd(config('app.timezone'));
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

//crud
Route::get('/doc', 'DocController@index');

Route::get('/doc_trash', 'DocController@trash');
Route::get('/doc_restore/{id}', 'DocController@restore');
Route::get('/doc_create', 'DocController@create');
Route::get('/doc_view/{id}', 'DocController@view');
Route::post('/doc_store/{id?}', 'DocController@store');
Route::get('/doc/update/{id}', 'DocController@update');
Route::get('/doc_delete/{id}', 'DocController@delete');
Route::get('/doc_search', 'DocController@search');

Route::get('/find', function(){
    return view("find");
});

Route::get('/duang','HabitController@index');
Route::get('/image','ImageController@index');
Route::get('/ai','aiController@index');
Route::get('/quicklog',function (){
    return view("web.doc");
});


Route::get('/games', 'GameController@index');


Route::get('/music/', 'MusicController@index');
Route::get('/video', 'VideoController@index');
Route::get('/like', 'LikeController@index');
Route::get('/discover', 'DiscoverController@index');
Route::get('/friend', 'FriendController@index');

Auth::routes();


/**
 * 这里是所有API的路由控制
 * 
 */
Route::group(['prefix' => 'swagger'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
    Route::get('my-data2', 'SwaggerController@getMyData2');
    Route::get('music', 'MusicController@index');
});
