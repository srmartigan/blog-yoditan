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

Auth::routes();

Route::get('/blog-admin', function () {
    return view('blog-admin');
})->middleware('auth','role:admin');




