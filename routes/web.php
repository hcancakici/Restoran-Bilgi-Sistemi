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

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'DashController@index');

    Route::get('/personel', 'PersonelController@index');
    Route::get('/personel/yeni', 'PersonelController@add');
    Route::post('/personel/store', 'PersonelController@store');


    Route::get('/urun', 'UrunController@index');
    Route::get('/urun/yeni', 'UrunController@add');
    Route::post('/urun/store', 'UrunController@store');

    Route::get('/siparis', 'SiparisController@index');
    Route::get('/siparis/yeni', 'SiparisController@add');
    Route::post('/siparis/store', 'PersonelController@store');

    Route::get('/malzeme', 'MalzemeController@index');
    Route::get('/malzeme/yeni', 'MalzemeController@add');
    Route::post('/malzeme/store', 'MalzemeController@store');

    Route::get('/masa', 'MasaController@index');
    Route::get('/masa/yeni', 'MasaController@add');
    Route::post('/masa/store', 'MasaController@store');

});




Auth::routes();

