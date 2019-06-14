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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::get('image/search/{name}', 'ImageController@searchImage')->name('image.search');
    Route::get('image/get/{name}', 'ImageController@getImage')->name('image.get');
    Route::post('image/insert', 'ImageController@insertImage')->name('image.insert');
});



