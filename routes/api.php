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

// Route::get('api/areas','AreaController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/areas', function () {
    return new AreaResource(Area::all());
});
Route::get('foo', function () {  
    return "Hello World!";
});

Route::get('/1/locations', 'ShopController@locations');
// Route::apiResource('api/areas', 'AreaController@index');
