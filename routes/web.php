<?php

use App\Http\Controllers\Servicios3Controller;

Route::view('/', 'home') -> name('home');
Route::view('nosotros', 'nosotros') -> name('nosotros');
//route::get('servicios','App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('servicios','Servicios3Controller@index') -> name('servicios');
Route::view('contacto', 'contacto') -> name('contacto');
// Generar las 7 rutas de los metodos del controlador
Route::resource('servicios', Servicios3Controller::class) -> only('index','show');