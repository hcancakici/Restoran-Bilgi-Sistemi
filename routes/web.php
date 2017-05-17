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

Route::group(['middleware' => ''], function() {
	
});
	

Route::get('/index', 'DashController@index');

Route::get('/personel', 'PersonelController@index');
Route::get('/urun', 'UrunController@index');
Route::get('/siparis', 'SiparisController@index');
Route::get('/malzeme', 'MalzemeController@index');
Route::get('/malzeme/yeni', 'MalzemeController@add');
Route::get('/masa', 'MasaController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
