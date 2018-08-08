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
})->name('principal');

Route::group(['prefix'=>'publico'], function (){

    Route::get('/centros-de-acopio',[
        'uses'=>'PublicoController@getCentrosAcopio',
        'as'=>'centros-de-acopio',
    ]);
    Route::get('/centros-de-acopio/detalle-centro/{id}',[
        'uses'=>'PublicoController@getDetalleCentro',
        'as'=>'detalle-centro',
    ]);

    Route::get('/materiales-de-reciclaje',[
        'uses'=>'PublicoController@getMaterialesReciclaje',
        'as'=>'materiales-de-reciclaje',
    ]);

});

Route::get('acerca', function () {
    return view('otros.acerca-de');
})->name('otros.acerca');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('',[
        'uses'=>'AdminController@getAdminIndex',
        'as'=>'admin.index'
    ]);

    Route::group(['prefix'=>'centro'], function (){

        Route::get('',[
            'uses'=>'CentroController@getCentroIndex',
            'as'=>'centro.index'
        ]);

        Route::get('create',[
            'uses'=>'CentroController@getCentroCreate',
            'as'=>'centro.create',
        ]);

        Route::post('create',[
            'uses'=>'CentroController@centroCreate',
            'as'=>'centro.create',
        ]);

        Route::get('edit/{ca}',[
            'uses'=>'CentroController@getCentroEdit',
            'as'=>'centro.edit',
        ]);

        Route::post('edit/{ca}',[
            'uses'=>'CentroController@centroEdit',
            'as'=>'centro.edit',
        ]);

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
