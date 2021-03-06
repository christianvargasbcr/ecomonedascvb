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



Route::group(['prefix'=>''], function (){

    Route::get('/',[
        'uses'=>'PublicoController@getPrincipal',
        'as'=>'principal',
    ]);

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

    Route::get('/cupones-disponibles',[
        'uses'=>'PublicoController@getCuponesDisponibles',
        'as'=>'cupones-disponibles',
    ]);

    Route::get('/cupones-categoria/{cat}',[
        'uses'=>'PublicoController@getCuponesFiltrados',
        'as'=>'cupones-categoria',
    ]);

});

Route::get('acerca', function () {
    return view('otros.acerca-de');
})->name('otros.acerca');

Route::get('centro-deshabilitado', function () {
    return view('otros.centrodeshabilitado');
})->name('centro-deshabilitado');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::get('',[
        'uses'=>'AdminController@getAdminIndex',
        'as'=>'admin.index'
    ]);

    Route::get('acopioindex',[
        'uses'=>'AdminController@getAcopioIndex',
        'as'=>'admin.acopioindex'
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

        Route::get('borrados',[
            'uses'=>'CentroController@getCentroBorrados',
            'as'=>'centro.borrados'
        ]);

        Route::get('restore/{id}',[
            'uses'=>'CentroController@habilitarCentro',
            'as'=>'centro.restore',
        ]);

        Route::get('delete/{ca}',[
            'uses'=>'CentroController@deshabilitarCentro',
            'as'=>'centro.delete',
        ]);

    });

    Route::group(['prefix'=>'materiales'], function (){

        Route::get('',[
            'uses'=>'MaterialController@getMaterialIndex',
            'as'=>'materiales.index'
        ]);

        Route::get('create',[
            'uses'=>'MaterialController@getMaterialCreate',
            'as'=>'materiales.create',
        ]);

        Route::post('create',[
            'uses'=>'MaterialController@materialCreate',
            'as'=>'materiales.create',
        ]);

        Route::get('edit/{mat}',[
            'uses'=>'MaterialController@getMaterialEdit',
            'as'=>'materiales.edit',
        ]);

        Route::post('edit/{mat}',[
            'uses'=>'MaterialController@materialEdit',
            'as'=>'materiales.edit',
        ]);

    });

    Route::group(['prefix'=>'usuarios'], function (){

        Route::get('listado-clientes',[
            'uses'=>'UsuarioController@getListadoClientes',
            'as'=>'usuarios.listado'
        ]);

        Route::get('',[
            'uses'=>'UsuarioController@getUsuarioIndex',
            'as'=>'usuarios.index'
        ]);

        Route::get('create',[
            'uses'=>'UsuarioController@getUsuarioCreate',
            'as'=>'usuarios.create',
        ]);

        Route::post('create',[
            'uses'=>'UsuarioController@usuarioCreate',
            'as'=>'usuarios.create',
        ]);

        Route::get('edit/{usr}',[
            'uses'=>'UsuarioController@getUsuarioEdit',
            'as'=>'usuarios.edit',
        ]);

        Route::post('edit/{usr}',[
            'uses'=>'UsuarioController@usuarioEdit',
            'as'=>'usuarios.edit',
        ]);
    });

    Route::group(['prefix'=>'cupones'], function (){

        Route::get('',[
            'uses'=>'CuponController@getCuponIndex',
            'as'=>'cupones.index'
        ]);

        Route::get('categoria/{cat}',[
            'uses'=>'CuponController@getCuponCategoria',
            'as'=>'cupones.categoria'
        ]);

        Route::get('create',[
            'uses'=>'CuponController@getCuponCreate',
            'as'=>'cupones.create',
        ]);

        Route::post('create',[
            'uses'=>'CuponController@cuponCreate',
            'as'=>'cupones.create',
        ]);

        Route::get('edit/{cup}',[
            'uses'=>'CuponController@getCuponEdit',
            'as'=>'cupones.edit',
        ]);

        Route::post('edit/{cup}',[
            'uses'=>'CuponController@cuponEdit',
            'as'=>'cupones.edit',
        ]);
    });

    Route::group(['prefix'=>'canjes'], function (){

        Route::get('',[
            'uses'=>'CanjeController@getCanjeIndex',
            'as'=>'canjes.index'
        ]);

        Route::get('search',[
            'uses'=>'CanjeController@getUserByEmail',
            'as'=>'search.canjes'
        ]);

        Route::get('create',[
            'uses'=>'CanjeController@getCanjeCreate',
            'as'=>'canjes.create',
        ]);

        Route::post('create',[
            'uses'=>'CanjeController@canjeCreate',
            'as'=>'canjes.create',
        ]);

        Route::post('store',[
            'uses'=>'CanjeController@canjeDetalleCreate',
            'as'=>'store.canjes',
        ]);

        Route::get('detail/{id}',[
            'uses'=>'CanjeController@getCanje',
            'as'=>'canjes.detail',
        ]);

        Route::get('finalizar',[
            'uses'=>'CanjeController@finalizarRegistroCanje',
            'as'=>'canjes.finalizar',
        ]);

    });
});

Route::group(['prefix'=>'cliente','middleware'=>'auth'],function (){

    Route::get('',[
        'uses'=>'ClienteController@getClienteIndex',
        'as'=>'cliente.index'
    ]);

    Route::get('historial-canjes',[
        'uses'=>'ClienteController@getHistorialCanjes',
        'as'=>'ciente.historial-canjes',
    ]);

    Route::get('historial-compras',[
        'uses'=>'ClienteController@getHistorialCanjes',
        'as'=>'ciente.historial-compras',
    ]);

    Route::get('detalle-canje/{id}',[
        'uses'=>'ClienteController@getDetalleCanje',
        'as'=>'ciente.detalle-canje',
    ]);

    Route::get('comprar/{cup}',[
        'uses'=>'ClienteController@getRealizarCompra',
        'as'=>'ciente.comprar',
    ]);

    Route::post('compra',[
        'uses'=>'ClienteController@realizarCompra',
        'as'=>'ciente.compra',
    ]);

    Route::get('billetera',[
        'uses'=>'ClienteController@getBilletera',
        'as'=>'ciente.billetera',
    ]);

});

Auth::routes();

