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
Route::get('log/viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::post('b2c/callback/', 'HomeController@b2cCallback')->name('b2c.callback');
