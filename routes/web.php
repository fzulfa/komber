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
Route::get('/', 'DashboardController@index');
Route::get('/sensor', 'DashboardController@sensor');

Route::get('/api', 'ApiController@pothole');
Route::get('/read', 'ApiController@sensor');
Route::get('/chart', 'DashboardController@chart');
Route::get('/history/{id}', 'DashboardController@history');

Route::get('/resetsensor', 'DashboardController@resetsensor');
Route::get('/resetpothole', 'DashboardController@resetpothole');
