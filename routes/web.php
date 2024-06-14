<?php

use App\Http\Controllers\ServiciosController;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

// Rutas para el controlador de servicios
Route::get('servicios', [ServiciosController::class, 'index'])->name('servicios.index');
Route::get('servicios/crear', [ServiciosController::class, 'create'])->name('servicios.create');

Route::post('servicios', [ServiciosController::class, 'store'])->name('servicios.store');

Route::get('servicios/{id}', [ServiciosController::class, 'show'])->name('servicios.show');

Route::view('contacto', 'contacto')->name('contacto');