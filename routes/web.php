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
    return view('principal');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('',[
        'uses'=>'AdminController@getAdminIndex',
        'as'=>'admin.index'
    ]);

    Route::group(['prefix'=>'centros'], function (){

    });

    Route::group(['prefix'=>'materiales'], function (){

    });

    Route::group(['prefix'=>'usuarios'], function (){

    });

    Route::group(['prefix'=>'cupones'], function (){

    });

});

Route::group(['prefix'=>'cliente','middleware'=>'auth'],function (){

    Route::get('',[
        'uses'=>'ClienteController@getClienteIndex',
        'as'=>'cliente.index'
    ]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
