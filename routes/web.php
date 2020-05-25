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

Route::get('/', 'SiteController@home')->name('home');
Route::get('/chu-gach-chan', 'SiteController@lineThrough')->name('line-through');
Route::get('/qr-code', 'SiteController@qrCode')->name('qr-code');
Route::post('/create-qr-code', 'SiteController@createQRCode')->name('create-qr-code');
Route::get('/video', 'SiteController@video')->name('video');
Route::post('/convert', 'SiteController@convert')->name('convert_video');
Route::get('/uid', 'SiteController@uid')->name('uid');
Route::post('/uid', 'SiteController@getUid')->name('uid.find');
