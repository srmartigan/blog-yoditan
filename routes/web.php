<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas El
| RouteServiceProvider carga las rutas dentro de un grupo que El
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('theme.home');
});
Route::get('/post', function () {
    return view('theme.post');
});


Auth::routes();

Route::get('/blog-admin', 'PostController@index')
    ->middleware('auth','role:admin');

Route::get('blog-admin/nueva-entrada', 'PostController@create')
    ->middleware('auth','role:admin');

Route::post('blog-admin/nueva-entrada', 'PostController@store')
    ->middleware('auth','role:admin');

Route::get('blog-admin/listado-entradas', 'PostController@list')
    ->middleware('auth','role:admin');
Route::get('blog-admin/borrar-entrada/{id}', 'PostController@destroy')
    ->middleware('auth','role:admin');
Route::get('blog-admin/ver-entrada/{id}' , 'PostController@show')
    ->middleware('auth','role:admin');

Route::get('blog-admin/editar-entrada/{id}' , 'PostController@edit')
    ->middleware('auth','role:admin');
Route::post('blog-admin/editar-entrada/{id}' , 'PostController@update')
    ->middleware('auth','role:admin');



