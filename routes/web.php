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

/**
 * Log-viewer
 */
Route::get('sys/log/viewer', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/custom/logout', 'HomeController@logout')->name('custom.logout');
Route::get('/sport/betting', 'HomeController@sportBetting')->name('sport.betting');
Route::get('/trading/signals', 'HomeController@tradingSignals')->name('trading.signals');

Route::get('/top/up', 'HomeController@topUp')->name('top.up');
Route::get('/statements', 'HomeController@statements')->name('statements');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile', 'HomeController@postProfile')->name('profile');

Route::get('/contact/support', 'HomeController@contactAdmin')->name('contact.support');
Route::post('/contact/support', 'HomeController@postContactAdmin')->name('contact.support');
Route::post('/mark/notification/read', 'HomeController@readNotifications')->name('notifications.read');

Route::get('/purchase/{type}/{id}', 'HomeController@purchase')->name('purchase');
Route::get('/purchase/betting/{user_id}/{odd_id}', 'HomeController@purchaseBettingOdds')->name('purchase.betting.odds');
Route::get('/purchase/trading/signals/{user_id}/{signal_id}', 'HomeController@purchaseTradingSignals')->name('purchase.trading.signals');

Route::group([
	'prefix' => 'admin',
], function () {
	Route::get('/login', 'Auth\LoginController@getAdminLogin')->name('admin.login');
	Route::post('/login', 'Auth\LoginController@postAdminLogin')->name('admin.login');
	Route::get('/home', 'AdminController@home')->name('admin.home');
	Route::get('/logout', 'AdminController@logout')->name('admin.logout');

	Route::get('/sport/betting', 'AdminController@sportBetting')->name('admin.sport.betting');
	Route::post('/sport/betting', 'AdminController@postSportBetting')->name('admin.sport.betting');

	Route::get('/trading/signal', 'AdminController@getTradingSignal')->name('admin.trading.signal');
	Route::post('/trading/signal', 'AdminController@postTradingSignal')->name('admin.trading.signal');
});