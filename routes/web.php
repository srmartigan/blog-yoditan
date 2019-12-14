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
    return view('welcome');
});

Auth::routes();

Route::get('/blog-admin', 'PostController@index')
    ->middleware('auth','role:admin');

Route::get('blog-admin/nueva-entrada', 'PostController@create')
    ->middleware('auth','role:admin');

Route::post('blog-admin/nueva-entrada', 'PostController@store')
    ->middleware('auth','role:admin');



