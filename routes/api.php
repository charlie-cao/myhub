<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//在这里添加api的路由。
Route::get('/home','HomeController@index');
Route::get('/music', 'MusicController@index');
Route::post('/music/save', 'MusicController@save');
Route::get('/music/top1', 'MusicController@top1');
Route::get('/music/album', 'MusicController@album');



Route::get('/allmusic', function (App\Models\Music $music) {
    return $music::all();
});

Route::group(['prefix' => 'swagger'], function () {
    Route::get('json', 'SwaggerController@getJSON');
    Route::get('my-data', 'SwaggerController@getMyData');
    Route::get('my-data2', 'SwaggerController@getMyData2');
    Route::get('music', 'MusicController@index');
});