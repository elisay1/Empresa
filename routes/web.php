<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'menu.nosotros')->name('nosotros');
Route::view('contacto', 'menu.contacto')->name('contacto');


//TODO: creamos la routa para servicios
//Route::view('servicios', 'menu.servicios', compact('servicios'))->name('servicios');
//TODO: esto es del primera routa
//Route::get('servicios', 'App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('servicios');
//Route::get('servicios/{servicio}', 'App\Http\Controllers\ServiciosController@show')->name('servicios.show');
Route::get('servicios/{id}', 'App\Http\Controllers\ServiciosController@show')->name('servicios.show');


//Route::get('servicios', 'App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('persona', 'App\Http\Controllers\PersonaController@index')->name('persona');
//Route::get('servicios/{servicio}', 'App\Http\Controllers\ServiciosController@show')->name('servicios.show');
Route::get('persona/{id}', 'App\Http\Controllers\PersonaController@show')->name('persona.show');

//TODO: Generar las 7 rutas de los metodos del controlador 2
//Route::resource('servicios','Servicios2Controller');


