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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog-admin', function () {
    return view('blog-admin');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
