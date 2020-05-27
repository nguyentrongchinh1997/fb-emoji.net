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

Route::get('/chu-xien-cheo', 'SiteController@xienCheo')->name('xien-cheo');
Route::get('/chu-viet-tay', 'SiteController@vietTay')->name('viet-tay');
Route::get('/chu-in-dam', 'SiteController@inDam')->name('in-dam');
Route::get('/chu-in-nghieng', 'SiteController@inNghieng')->name('in-nghieng');
Route::get('/chu-bong-bong', 'SiteController@bongBong')->name('bong-bong');
Route::get('/chu-vuong', 'SiteController@vuong')->name('vuong');
Route::post('/convertFont', 'SiteController@convertFont')->name('convert');

