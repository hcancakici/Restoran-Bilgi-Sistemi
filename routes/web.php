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
    Route::get('/personel/duzenle/{id}', 'PersonelController@edit');
    Route::get('/personel/ara', 'PersonelController@search');
    Route::post('/personel/update', 'PersonelController@update');
    Route::post('/personel/store', 'PersonelController@store');
    Route::delete('/personel/delete/{id}', 'PersonelController@delete');


    Route::get('/urun', 'UrunController@index');
    Route::post('/urun/duzenle/{id}', 'UrunController@edit');
    Route::get('/urun/yeni', 'UrunController@add');
    Route::get('/urun/ara', 'UrunController@search');
    Route::post('/urun/store', 'UrunController@store');
    Route::delete('/urun/delete/{id}', 'UrunController@delete');
    Route::post('/urun/update', 'UrunController@update');
    Route::get('/urun/ara', 'UrunController@search');

    Route::get('/siparis', 'SiparisController@index');
    Route::get('/siparis/yeni/{id}', 'SiparisController@add');
    Route::post('/siparis/store', 'SiparisController@store');

    Route::get('/malzeme', 'MalzemeController@index');
    Route::get('/malzeme/yeni', 'MalzemeController@add');
    Route::post('/malzeme/store', 'MalzemeController@store');
    Route::post('/malzeme/duzenle/{id}', 'MalzemeController@edit');
    Route::post('/malzeme/update', 'MalzemeController@duzenle');
    Route::delete('/malzeme/delete/{id}', 'MalzemeController@delete');
    Route::get('/malzeme/ara', 'MalzemeController@search');

    Route::get('/masa', 'MasaController@index');
    Route::get('/masa/yeni', 'MasaController@add');
    Route::post('/masa/store', 'MasaController@store');

});




Auth::routes();

